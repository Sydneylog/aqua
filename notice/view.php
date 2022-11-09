<?php 
include "../inc/session.php"; 
// include "../inc/admin_check.php"; 

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
//db종료는 데이터의 안전한 전송을 위해 마지막에서 종료 시켜 준다

?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 작성</title>
    <link rel="shorcut icon" type="image/x-icon" href="/images/favicon.ico">
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <style type="text/css">
        .blind{
        position:absolute;clip:rect(0 0 0 0);width:1px;height:1px;margin:-1px;overflow:hidden
        }
        ul, li {
            list-style:none;
            padding:0px;
            margin:0px;
        }
        .total_wrap{
            width:800px;
            margin:auto;
            box-sizing:border-box;
        }
        .board_top{
            width:800px;
            height:60px;
            border:1px solid red;
            line-height:50px;
        }
        .board_top p{
            float: left;
            font-size:20px;
            border:1px solid red;
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
            width:110px;
            border-radius:30px;
            height:40px;
            line-height:40px;
            background: royalblue;
            text-align:center;
            color: white;
        }
        .board_info{
            margin-top:10px;
            
        }
        .info_part1{
            display:flex;
            justify-content:space-between;
            width:400px;
        }
        .info_part2{
            display:flex;
            justify-content:space-between;
            width:400px;
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
        .n_header input{
            width:15px;
            height:15px;
            font-size:20px;
        }
        label{
            margin-right:10px;
            font-size:20px;
        }
        .btn_bx{
            width:800px;
            height:100%;
            display:flex;
            justify-content:space-between;
        }
        .btn_bx button{
            width:90px;
            height:25px;
        }
        .btn_bx span{
            font-size:15px;
            line-height:15px;
            text-align:center;
        }
    </style>
</head>
<body>
<main id="content" class="content">

    <section class="signup_wrap">
    <div class="signup_title">
    <h2>공지사항 작성</h2>
    </div>
    <!-- <h3>1.주요 정보 입력</h3> -->
    
        <form action="insert.php" method="post" class="pt1_bx" onsubmit="return inspector()">
            <fieldset class="total_wrap">
                <legend><span class="id_must">공지사항</span></legend>
                    <div class="board_top">
                        <p class="n_header">
                            <span class="blind">글머리</span>
                            <span class="board_head">
                                <?php echo $array['n_head']; ?>
                            </span>
                        </p>
                        <p>
                            <label for="n_title" class="blind">제목</label>
                            <span><?php echo $array['n_title']; ?></span>
                        </p>
                    </div>

                    <div class="board_info">
                        <div class="info_part1">
                            <p>작성자
                                <span><?php echo $array['writer']; ?></span>
                            </p>
                            <p>조회수
                                <span><?php echo $array['views']; ?></span>
                            </p>
                            <?php if(!$array['likes']){ ?>
                                
                            <?php } else if {?>
                            <p>좋아요
                                    <span><?php echo $array['likes']; ?></span>
                                </p>
                            <?php } ?>
                        </div>
                        <div class="info_part2">
                            <p>작성일
                                <span><?php echo $array['n_date']; ?></span>
                            </p>
                            <?php if($array['m_date']){ ?>
                            <p>수정일
                                <span><?php echo $array['m_date']; ?></span>
                            </p>
                            <?php }; ?>
                            
                            
                        </div>
                    </div>

                    <div class="board_main">
                        <p>
                            <label for="n_contents">내용 작성</label><br>
                            <textarea cols="60" rows="10" name="n_contents" id="n_contents"></textarea>
                            <div>
                        </p>
                        <button type="button">
                            <span>좋아요</span>
                            <span class="material-icons">favorite</span>
                        </button> 
                        </div>
                    </div>



                    <div class="btn_bx">
                        <button type="button" class="moving_arr1"><span>취소</span></button>
                        <button type="submit" class="moving_arr2"><span>등록</span></button>
                    </div>
                    <p>
                    </p>
            </fieldset>
        </form>
    
    </section>
</main>

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
</script>
</body>
</html>