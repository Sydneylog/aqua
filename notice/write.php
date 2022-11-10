<?php 
include "../inc/session.php"; 
// include "../inc/admin_check.php"; 
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
    <h2>공지사항 작성</h2>
    </div>
    <!-- <h3>1.주요 정보 입력</h3> -->
    
        <form action="insert.php" method="post" class="pt1_bx" onsubmit="return inspector()">
            <fieldset class="total_wrap">
                <legend><span class="id_must">공지사항</span></legend>
                    <p>
                        <input type="hidden"><?php echo $s_id; ?></input>
                    </p>
                    <p class="n_header"><span>글머리</span>
                        <input type="radio" name="n_head" class="n_head" id="n_head" value="일반" checked>일반</input>
                        <input type="radio" name="n_head" class="n_head" id="n_head" value="분실물">분실물</input>
                        <input type="radio" name="n_head" class="n_head" id="n_head" value="운영방침">운영방침</input>
                    </p>
                    <p>
                        <label for="n_title">제목</label>
                        <input type="text" id="n_title" name="n_title" class="n_title" maxlength="100">
                    </p>
                    <p>
                        <label for="n_contents">내용 작성</label><br>
                        <textarea cols="60" rows="10" name="n_contents" id="n_contents"></textarea>
                    </p>
                    <div class="btn_bx">
                        <button type="button" class="moving_arr1"><span>취소</span></button>
                        <button type="submit" class="moving_arr2"><span>등록</span></button>
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