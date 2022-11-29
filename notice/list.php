<?php
//include "../inc/session.php";
$present = basename($_SERVER["PHP_SELF"]);

//db연결
include "../inc/dbcon.php";

//카테고리
$category = isset($_GET["category"])? $_GET["category"] : "";
$table_name ="aqua_notice";

if($category){
    $sql = "select*from $table_name where n_head='$category';";
} else {
    $sql = "select*from $table_name;";
};



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
    <link rel="stylesheet" type="text/css" href="../css/notice_list.css">
    
    <link rel="shorcut icon" type="image/x-icon" href="/images/favicon.ico">
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    
     
   
</head>
<body>

 <!-- header -->
<?php
include "../inc/header.php"
?>
<main class="content" id="content">

    <section class="banner">
        <div>
            <div class="banner_img"></div>
            <div>
            <h2>
                <span>650</span>종 <span>55,000</span>마리의<br> 해양 생물들
            </h2>
            <p>
                다양한 해양 생무들이 더불어<br>
                사는 자연 그와 동일한 서식<br>
                환경을 조성합니다. 
            </p>
            </div>
        </div>
    </section>

    <div class="table_wrap">
        <h2> - 공지사항 - </h2>

        <div class="board_info_bar">
            <?php if($s_id == "admin" || $s_id == "manager"): ?>
                <div class="write_area">
                    <span>전체 글 <?php echo $total; ?> 개</span>
                    <a href="write.php">
                        <span class="material-icons">edit_note</span>
                    </a>
                </div>
            <?php else: ?>
                <div class="write_area">
                    <span>전체 글 <?php echo $total; ?> 개</span>
                    <a href="javascript:void(0)">
                        <span class="material-icons"></span>
                    </a>
                </div>
            <?php endif; ?>

            <select name="category_bar" id="category_bar" class="category_bar" onchange = "selected()">
                <option class="cate_itmes" name="cate_itmes" value="" <?php if($category == "") echo "selected"; ?>>선택안함</option>
                <option class="cate_itmes" name="cate_itmes" value="일반" <?php if($category == "일반") echo "selected"; ?>>일반</option>
                <option class="cate_itmes" name="cate_itmes" value="분실물" <?php if($category == "분실물") echo "selected"; ?>>분실물</option>
                <option class="cate_itmes" name="cate_itmes" value="운영방침" <?php if($category == "운영방침") echo "selected"; ?>>운영방침</option>
            </select>
        </div>  

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
            if($category){
                $sql = "select*from $table_name where n_head='$category' order by idx desc limit $start, $list_num;";
            } else {
                $sql = "select * from $table_name order by idx desc limit $start, $list_num;";
            };

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
                    <span id="colorObj" class="<?php if($array["n_head"] == '일반') echo 'colorObj_grey'; else if($array["n_head"] == '분실물') echo 'colorObj_blue'; else echo 'colorObj_red'; ?>" name="colorObj">
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
                        if($s_id){ 
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
                        <?php }else{ ?>
                            <span></span>
                        <?php }; ?>
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
                <a href="list.php?category=<?php echo $category; ?>&page=1">이전</a>
                <?php } else{ ?>
                <a href="list.php?page=<?php echo $cate; ?>&page=<?php echo ($page - 1); ?>">이전</a>
                <?php }; ?>

                <?php
                // pager : 페이지 번호 출력
                for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
                ?>
                <a href="list.php?page=<?php echo $category;?>&page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
                <?php }; ?>

                <?php
                // pager : 다음 페이지
                if($page >= $total_page){
                ?>
                <a href="list.php?page=<?php echo $category; ?>&page=<?php echo $total_page; ?>">다음</a>
                <?php } else{ ?>
                <a href="list.php?page=<?php echo $category; ?>&page=<?php echo ($page + 1); ?>">다음</a>
            <?php }; ?>
        </p>
    </div>
</main>
<?php
    include "../inc/footer.php";
?>     


<script type="text/javascript">
    // select category/
    selected = () => {
      const category = document.getElementById("category_bar");
      let idx = category.options.selectedIndex;
      console.log(idx);
      let selected_value = category.options[idx].value;
      idx == 0 ? location.href = "list.php" : location.href = "list.php?category="+selected_value;
    }
    
</script>


</body>
</html>




