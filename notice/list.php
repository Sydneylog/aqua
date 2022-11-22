<?php
include "../inc/session.php";


//db연결
include "../inc/dbcon.php";
//쿼리작성()
$sql = "select * from aqua_notice;";
//쿼리 전송
$result = mysqli_query($dbcon, $sql);
//전체 데이터 가져오기
$total = mysqli_num_rows($result);

//페이지당 보여질 목록수
$list_num = 5;

//한블럭 당 페이지 수
$page_num = 3;

//현재페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};

// create table aqua_notice(
// idx int auto_increment primary key,
// n_head  varchar(10) not null,
// n_title varchar(100) not null,
// n_contents text not null,
// writer varchar(20) not null,
// n_date datetime,
// m_date datetime,
// view   int,
// likes  int
// );
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 게시판</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link rel="shorcut icon" type="image/x-icon" href="/images/favicon.ico">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <!-- inc -->
    <script type="text/javascript" src="../js/header.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
        body{font-size:20px}
        main a{text-decoration:none;margin:0 5px}

        main table, td{
            border-collapse:collapse
        }
        main th, td{
            padding:10px;
            font-size:16px;
            text-align:center
        }
        main th{
            border-top:2px solid;
            border-bottom:2px solid;
        }
        main #colorObj{
            display:inline-block;
            width:90px;
            height:30px;
            line-height:30px;
            border-radius:30px;
            color: white;
            background: grey;
        }

        main .aqua_notice_set{
            width:1100px;
            margin:auto;
            
        }
        
        main .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
        }

        main .aqua_notice_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999
        }
        main .aqua_notice_content{
            border-bottom:1px solid #999;
        }
        
        main .no{width: 55px;}
        main .n_head{width: 110px;}
        main .n_title{width: 45%;}
        main .writer{width: 165px;}
        main .n_date{width: 110px;}
        main .view{width: 55px;}
        main .likes{width: 55px;}
        <?php if($s_id == "admin"){ ?>
        main .write_area{
            width:1100px;
            display:flex;
            justify-content:space-between;
            font-size:14px;
            margin:0 auto 10px;
        }
        
        <?php }; ?>
        main .pager{
            margin:15px auto;
            width:1100px;
            text-align:center;
            font-size:16px;
            
        }
        main h2 {
            margin:20px auto;
            text-align:center;
        }
    </style>   
     
    
    
    
   
</head>
<body>
 <!-- header -->
<?php
    include "../inc/header.php";
?>
<main>
    <h2> - 공지사항 - </h2>
    <?php if($s_id == "admin" || "manager"){ ?>
        <p class="write_area">
            <span>전체 글 개수 <?php echo $total; ?> 개</span>
            <span><a href="write.php">글쓰기</a></span>
    </p>
    <?php }else{ ?>
        <p>전체 <?php echo $total; ?> 개</p>
    <?php } ?>
    <table class="aqua_notice_set" id="aqua_notice_set">
        <tr class="aqua_notice_title">
            <th class ="no">번호</th> 
            <th class ="n_head">글머리</th> 
            <th class ="n_title">제목</th> 
            <th class ="writer">작성자</th> 
            <th class ="n_date">작성일</th> 
            <th class ="view">조회수</th> 
            <th class ="likes">Likes</th> 
        </tr>
        <?php
        // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
        $start = ($page - 1) * $list_num;

        // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
        // limit 몇번부터, 몇 개(내림차순)
        $sql = "select * from aqua_notice order by idx desc limit $start, $list_num;";

        // DB에 데이터 전송
        $result = mysqli_query($dbcon, $sql);


        // DB에서 데이터 가져오기
        // pager : 글번호(역순)
        // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
        $i = $total - (($page - 1) * $list_num);
        while($array = mysqli_fetch_array($result)){
        ?>

        <tr class="aqua_notice_content">
            <td><?php echo $i; ?></td>
            <td>
                <span id="colorObj">
                    <?php echo $array["n_head"]; ?>
                </span>
            </td>
            <td>
                <a href="view.php?n_idx=<?php echo $array['idx'] ?>">
                <?php echo $array["n_title"]; ?>
                </a>
            </td>
            <td><?php echo $array["writer"]; ?></td>
            <td><?php echo $array["n_date"]; ?></td>
            <td><?php echo $array["views"]; ?></td>
            <td><?php echo $array["likes"]; ?>
                <?php 
                    $n_idx = $array['idx'];
                    $li_sql = "select * from likes where u_id = '$s_id' and board_code = $n_idx;";
                    //echo $li_sql;
                    $li_result = mysqli_query($dbcon, $li_sql);
                    $li_array = mysqli_fetch_array($li_result);
                    //echo $li_array["idx"];
                    //echo $li_array["like_state"];
                    if (empty($li_array)):
                    ?>
                        <span class="material-symbols-outlined">favorite</span> 


                    <?php elseif ($li_array): ?> 
                        <span class="material-icons">favorite</span>
                <?php endif ?>
            </td>
            
            <!-- <td>
                <a href="member_info.php?g_idx=<?php //echo $array['idx']; ?>">[수정]</a>
                <a href='#' onclick="mem_del(<?php //echo $array['idx']; ?>)">[삭제]</a>
            </td> -->
        </tr>
        <?php
            $i--;
            };
        ?>
    </table>
    <p class="pager">
    <?php
    // pager : 이전 페이지
            
        if($page <= 1){
        ?>
        <a href="list.php?page=1">이전</a>
        <?php } else{ ?>
        <a href="list.php?page=<?php echo ($page - 1); ?>">이전</a>
        <?php }; ?>

        <?php
        // pager : 페이지 번호 출력
        for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
        ?>
        <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
        <?php }; ?>

        <?php
        // pager : 다음 페이지
        if($page >= $total_page){
        ?>
        <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
        <?php } else{ ?>
        <a href="list.php?page=<?php echo ($page + 1); ?>">다음</a>
        <?php }; ?>
    </p>
</main>
<?php
    include "../inc/footer.php";
?>     

<script type="text/javascript">
    toTopEl.addEventListener('click', () => {gsap.to(window, .7, {
        scrollTo: 0
    });
})



        //GNB
        $(".nav> ul > li").mouseenter(function(){
            $(this).find("ul").stop().fadeIn("fast");
            $("m_background").stop().slideDown("fast");
        });
        $(".nav > ul > li").mouseleave(function(){
            $(this).find("ul").stop().fadeOut("fast");
            $("m_background").stop().slideUp("fast");
        });

        //sticky nav
        $(function(){
			$(window).scroll(function(){
				let nowScroll = $(document).scrollTop();
				if(nowScroll > 50){ 
						$('#nav').css({'top':'0', "height":"50", "font-size":"16px", "transition":"0.2s", "border":"0px", "box-shadow":"1px 1px 10px #8B8B8B"});
                        $('#mini_info').stop().animate({'opacity':'1'}, 50);
                        $('.logo_wrap').hide(700);
                        $(".mini_mapage").stop().fadeIn(50);
                        $(".navcon").stop().fadeIn(50);
				}else{
                        $('#nav').css({'top': '100px', "height":"50","font-size":"16px", "background":"rgb(255, 255, 255)",  "border-bottom":"1px solid #cbcbcb", "box-shadow":"0px 0px 0px #fff"});
                        $('#mini_info').stop().animate({'opacity':'0'}, 0);
                        $('.logo_wrap').show(500);
                        $('.mini_mapage').stop().fadeOut(0);
                        $('.navcon').stop().fadeOut(0);
				}
			});
		});

function colorize(){    
    const obj = document.getElementById("colorObj");
    const objText = document.getElementById("colorObj").innerHTML;
    if(<?php echo $array['n_head']; ?> == "분실물"){
        obj.style.backgroundColor ="red";
    }else if(objText == "운영 방침"){
        obj.style.backgroundColor ="blue";
            
    }else{
        obj.style.backgroundColor ="grey";
    };
    console.log(objText)
};
colorize();



    // function mem_del(g_no){
    //     let rtn_val = confirm("정말 삭제하시겠습니까?");
    //     if(rtn_val == true){
    //         location.href = "member_delete.php?g_idx=" + g_no;
    //     };
    // };

</script>



</body>
</html>




