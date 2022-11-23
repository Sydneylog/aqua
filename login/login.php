

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">

    <!-- favicon -->
    <link rel="shorcut icon" type="image/x-icon" href="../images/favicon.ico">
    <!-- jquery -->
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <!-- date picker calender -->
    <script type="text/javascript" src="../js/datepicker.min.js"></script>
    <script type="text/javascript" src="../js/datepicker.ko.js"></script>
    <!-- slider -->
    <script src="../js/jquery.bxslider.js"></script>
    <!-- google material -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- inc -->
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
<?php
    include "../inc/header.php";
?>

<main id="content" class="content">
    <div class="login_bx">
    <div class="logo_wrap2">
        <h2 class="login_logo">아쿠아리움 로그인</h2>
        <div class="login_sub_title" id="login_sub_title">L O T T E A Q U A R I U M</div>
    </div>
        <fieldset class="form_bx">
            <legend class="blind">로그인</legend>
            <form action="login_ok.php" method="post" onsubmit="return inspector()">

                <label for="input_id">
                    <span class="id_span">ID</span>
                </label>
                <input type="text" name="login_id" id="login_id" autofocus><br>

                <label for="input_pass">
                    <span class="pwd_span">Password</span>
                </label>
                <input type="password" name="login_pwd" id="login_pwd">
                <span id="err_pwd" class="err"></span>

                <div class="btn_bx">
                    <button type="submit" name="login_btn" id="login_btn">
                        <span>Login</span>
                    </button>
                </div>

            </form>
        </fieldset>
        
        <ul class="join_menu">
            <li class=join_menu1>
                <a href="../members/Signup2.php">회원가입</a>
            </li>
            <li class=join_menu2>
                <a href="#">아이디/비밀번호 찾기</a>
            </li>
        </ul>
        <dl class="sns">
            <dt>- SNS 로그인 -</dt>
            <dd class="katok"><a href="#">카카오톡</a></dd>
            <dd class="fbook"><a href="#">페이스북</a></dd>
            <dd class="naver"><a href="#">네이버</a></dd>
        </dl>
    </div>
</main>


<script type="text/javascript">
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

    function inspector(){
        let loggin_id = document.getElementById("login_id");
        let loggin_pwd = document.getElementById("login_pwd");

        if(!login_id.value){
            let txt = document.getElementById("err_pwd");
            txt.innerHTML="<br>아이디를 입력해 주세요";
            return false;
        }
        if(!login_pwd.value){
            let txt = document.getElementById("err_pwd");
            txt.innerHTML="<br>비밀번호를 입력해 주세요";
            return false;
        };
    };
</script>
<?php
    include "../inc/footer.php";
?>
</body>

</html>