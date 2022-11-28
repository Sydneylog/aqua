<?php 
include "../inc/session.php"; 
//include "../inc/admin_check.php"; 

//데이터 가져오기
$n_idx = $_GET["n_idx"];

//db 연결
include "../inc/dbcon.php";

//쿼리 작성
$sql = "select * from aqua_notice where idx = $n_idx;";
//출력확인 오타들 수정
// echo $sql;
// exit;

//쿼리 전송
$result = mysqli_query($dbcon, $sql);

//db에서 데이터 가져오기
$array = mysqli_fetch_array($result);

//조회수 업데이트
$views = $array["views"] + 1;
//출력확인\
// echo $views;
// exit;
$sql = "update aqua_notice set views = $views where idx = $n_idx;";
//출력확인
//echo $sql;
//exit;
//db에 전송
mysqli_query($dbcon, $sql);
//좋아요



//db종료는 데이터의 안전한 전송을 위해 마지막에서 종료 시켜 준다

?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 작성</title>
    <link rel="shorcut icon" type="image/x-icon" href="../images/favicon.ico">
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- inc -->
    <style type="text/css">
        
        @import url(//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css);

        .blind{
        position:absolute;clip:rect(0 0 0 0);width:1px;height:1px;margin:-1px;overflow:hidden
        }
        a{
            text-decoration:none;
            color:#000;
            background-color:transparent;
        }
        p, h2{
            margin:0;
            padding:30;
            font: inherit;
            vertical-align: baseline;
        }
        h2{ 
            position:relative;
            left:-20px;
            text-align:center;
            font-size:16px;
            height:30px;
            line-height:30px;
            font-weight:bold;
            margin:0 auto 10px;
            background:#363636;
            color:white;
            border-top:solid black 1px;
            border-right:solid black 1px;
            border-left:solid black 1px;
            width:823px;
            margin:auto;
            padding-top:5px;
            display:inline-block;
            
            
        }
        ul, li {
            list-style:none;
            padding:0px;
            margin:0px;
        }
        .signup_wrap{
            padding:80px;
        }
        
        .total_wrap{
            position:relative;
            width:825px;
            margin:auto;
            box-sizing:border-box;
            border: 1px solid black;
            padding-bottom:20px;
            padding-right:20px;
            padding-left:20px;
        }
       
        .board_top{
            margin:15px 0;
            width:800px;
            height:50px;
            line-height:50px;
            overflow:hidden;
        }
        .board_top p{
            float:left;
            font-size:20px;
        }
        .board_top p:first-child{
            font-size:16px;
        }
        .n_header{
            margin-right:30px;
            margin-left:10px;
        }
        .n_title{
            border: 1px solid black;
        }
        
        .n_title span:nth-child(2){
            line-height:40px;
            font-size:20px;
            line-height:20px;
        }
        .n_header span:nth-child(2){
            display:inline-block;
            width:95px;
            border-radius:30px;
            height:30px;
            line-height:30px;
            background: royalblue;
            text-align:center;
            color: white;
        }
        .board_info{
            margin:10px 0 0 10px;
            height:100%;
        }
        .board_info div{
            display:flex;
            justify-content:space-between;
            width:500px;
            height:30px;
            line-height:30px;
        }
        textarea{
            width: 795px;
            height: auto;
            margin:10px auto 0;
            font-size:16px;
            line-height:24px;
            padding:20px;
            box-sizing:border-box;
        }
        input{
            width: 730px;
            height: 25px;
            font-size:18px;
        }
        .n_contents{
            padding:20px;
            border: 1px solid #000;
        }
        .like_btn_wrap{
            margin:20px auto 10px;
            width:100px;
        }
        .like_btn{
            display:block;
            text-align:center;
            width:120px;
            height:40px;
            font-size:30px;
            background: white;
            border:2px solid black;
            border-radius:30px;
        }

        .btn_bx{
            width:400px;
            margin:30px auto;
            height:100%;
            display:flex;
            justify-content:space-between;
        }
        .btn_bx a{
            display:block;
            width:100px;
            height:30px;
            background: white;
            border:1px solid black;
            text-align:center;
            font-size:15px;
            line-height:30px;
        }
        .inner{
            width:600px;
            margin:auto;
        }
        .reply_box{
            margin-top:70px;
            border:none;
        }
        .reply_box input{
            width:90px;
            height:20px;
        }
        .reply_info{
            position:relative;
            left:160px;
        }
        .reply_box textarea{
            width:700px;
            height:70px
        }
        .enroll_btn_bx{
            margin:auto;
            width:800px;
            display:flex;
            justify-content:space-between;
        }
        .enroll_btn_bx>div{
            width:80px;
            height:50px;
            position:relative;
            top:10px;
        }
        .enroll_btn_bx button{
            width:80px;
            height:30px;
            background: white;

        }
        
        .enroll_btn_bx button:first-child{
            margin-bottom:10px;
        }


    </style>
</head>
<body>
<?php
include "../inc/header2.php";
?>
<main id="content" class="content">
    <section class="signup_wrap">
    <!-- <h3>1.주요 정보 입력</h3> -->
            
            <div class="total_wrap">
                <h2 class="headline">공지사항 게시판</h2>
                    <div class="board_top">
                        <p class="n_header">
                            <span class="blind">글머리</span>
                            <span class="board_head">
                                <?php echo $array['n_head']; ?>
                            </span>
                        </p>
                        <p>
                            <span for="n_title" class="blind">제목</span>
                            <span><?php echo $array['n_title']; ?></span>
                        </p>
                    </div>
                    <hr>

                    <div class="board_info">
                        <div class="info_part1">
                            <p>작성자:
                                <span><?php echo $array['writer']; ?></span>
                            </p>
                            <p>조회수
                                <span><?php echo $array['views']; ?></span>
                            </p>
                            <p>좋아요
                                <span><?php echo $array['likes']; ?></span>
                            </p>
                        </div>
                        <div class="info_part2">
                            <p>작성일:
                                <span><?php echo $array['n_date']; ?></span>
                            </p>
                            <?php if($array['m_date']){ ?>
                            <p>수정일:
                                <span><?php echo $array['m_date']; ?></span>
                            </p>
                            <?php }; ?>
                        </div>
                    </div>
                    <hr>

                    <div class="board_main">
                        <p>
                            <span for="n_contents" class="blind">본문 내용</span><br>
                            <p cols="60" rows="10" name="n_contents" id="n_contents" class="n_contents">
                                <?php
                                $n_contents = str_replace("\n", "<br>", $array["n_contents"]);
                                $n_contents = str_replace(" ", "&nbsp", $n_contents);
                                echo $n_contents;
                                ?>
                            </p>
                        </p>
                        <?php if($s_nick != $array['writer']) {?>
                        <div class="like_btn_wrap">
                            <?php
                                $check_sql = "select*from likes where board_code = '$n_idx' and u_id = '$s_id'";
                                $check_result = mysqli_query($dbcon, $check_sql);
                                $check_array = mysqli_fetch_array($check_result);
                            ?>
                            <?php if($check_array) : ?>
                                <div class="like_minus">
                                    <a id='like_btn' class='like_btn' href='likes_cancel.php?n_id=<?php echo $n_idx; ?>'>
                                        <span class='blind'>좋아요 취소</span>
                                        <span class='material-icons'>favorite</span>
                                    </a>
                                </div>
                            <?php elseif(empty($check_array)) : ?>    
                                <div class="like_plus">
                                    <a id='like_btn' class='like_btn' href='likes_ok.php?n_id=<?php echo $n_idx; ?>'>
                                        <span class='blind'>좋아요</span>
                                        <span class='material-icons'>favorite_border</span>
                                    </a>
                                </div>
                            <?php endif ?>
                        </div>
                        <?php }else{ ?>
                            <p></p>
                        <?php } ?>
                    </div>
            </div>
            <?php if($s_id == $array['u_id']) :?>
            <div class="btn_bx">
                <a href="list.php" class="moving_arr1">
                    <span>뒤로가기</span>
                </a>
                <a href="modify.php?n_idx=<?php echo $n_idx; ?>"
                type="submit" class="moving_arr2">
                    <span>수정</span>
                </a>
            </div>  
            <?php endif ?>

            <form>
                <fieldset class="reply_box">
                    <legend class="blind">댓글</legend>
                    <div class="replybox inner">
                        <!--댓글 테이블
                        create table notice_reply(
                        idx int auto_increment primary key,
                        u_id varchar(20),
                        nick varchar(20),
                        r_pwd varchar(50),
                        content text,
                        date datetime
                        );
                        -->
                        
                        <?php if(!$s_id) :?>
                        <div class="reply_info">
                        <label for="r_nick">닉네임</label>
                            <input type="text" name="r_nick" id="r_nick" class="r_nick">
                        <label for="r_pwd">비밀번호</label>
                            <input type="text" name="r_pwd" id="r_pwd" class="r_pwd">
                        </div>
                        <?php endif ?>  
                        <div class="enroll_btn_bx">
                            <label for="r_contents" class="blind">댓글 내용</label>
                            <textarea name="r_content" id="r_content"></textarea>
                            <input type="hidden" name="list_id" vlaue=<?php echo "$n_idx" ?>>
                            <div>
                                <button type="submit" class="enroll" name="enroll" onclick="location.herf='reply_ok.php'">댓글 등록</button>
                                <button type="reset" class="enroll" name="enroll">초기화</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
            
            
            

        </form>
    </section>
</main>
<?php
    include "../inc/footer.php";
?>

<script>
function check_id(){
    window.open("check_id.html", "", "width=600, height=300,left=0,top=0");
    };
    function inspector() {
            let n_title = document.getElementById("n_title");
            let n_contents = document.getElementById("n_contents");
            if(!n_title.value) {
                alert("제목을 입력하세요");
                n_title.focus();
                return false;
            };
            if(!n_contents.value) {
                alert("내용을 입력하세요");
                n_contents.focus();
                return false;
            };
        };
    function color(){
        const obj = document.getElementById("board_head");
        const objText = document.getElementById("board_head").innerHTML;
        console.log(objText);
        if(objText = "분실물"){
            obj.styel.backgroundColor = "grey";
        };
    };
    color();


    
</script>
</body>
</html>