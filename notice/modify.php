<?php 
include "../inc/session.php"; 
// include "../inc/admin_check.php"; 

//데이터 가져오기
$n_idx = $_GET["n_idx"];

//DB 연결
include "../inc/dbcon.php";

//쿼리 작성
$sql = "select * from aqua_notice where idx = $n_idx;";

//쿼리 전송
$result = mysqli_query($dbcon, $sql);

//db에서 데이터 가져오기
$array = mysqli_fetch_array($result);

//db 연결 종료 (이미 가져왔으므로 종료해도 상관 없음)
mysqli_close($dbcon);
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
    .n_header {
        width:400px;
        display:flex;
        justify-content:space-between;
    }
    .n_header span{
        font-size:20px;
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
        margin-top:10px;
        font-size:18px;
    }
    .n_header input{
        width:15px;
        height:15px;
        font-size:20px;
        margin:5px; 0;
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
    <h2>공지사항 수정</h2>
    </div>
    <!-- <h3>1.주요 정보 입력</h3> -->
    
        <form action="edit.php?n_idx=<?php echo $n_idx; //$array['n_idx']가 아님 view.php에서 받아온 값 써야 함 ?>" method="post" class="pt1_bx" onsubmit="return inspector()">
            <fieldset class="total_wrap">
                <legend><span class="id_must">공지사항</span></legend>
                    <p>
                        <input type="hidden"><?php echo $s_id; ?></input>
                    </p>
                    <p class="n_header"><span>글머리</span>
                        <input type="radio" name="n_head" class="n_head" id="n_head" value="일반" <?php if ($array["n_head"] =="일반") echo "checked";?>>일반</input>
                        <input type="radio" name="n_head" class="n_head" id="n_head" value="분실물" <?php if ($array["n_head"] =="분실물") echo "checked";?>>분실물</input>
                        <input type="radio" name="n_head" class="n_head" id="n_head" value="운영방침" <?php if ($array["n_head"] =="운영방침") echo "checked";?>>운영방침</input>
                    </p>
                    <p>
                        <label for="n_title">제목</label>
                        <input type="text" id="n_title" name="n_title" class="n_title" maxlength="100" value="<?php echo $array["n_title"]; ?>">
                    </p>
                    <p>
                        <label for="n_contents">내용 작성</label><br>
                        <textarea cols="60" rows="10" name="n_contents" id="n_contents"><?php echo $array['n_contents']; ?></textarea>
                    </p>
                    <div class="btn_bx">
                        <button type="button" onclick="history.back()"><span>취소</span></button>
                        <button type="submit"><span>수정</span></button>
                    </div>
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