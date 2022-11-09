<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" type="text/css" href="../../css/login.css">
    
</head>
<body>
    <header id="header" class="header">
       
    </header>

    <main id="content" class="content">
        <div class="login_bx">
        <div class="logo_wrap">
            <h2 class="login_logo">아쿠아리움 로그인</h2>
            <P>L O T T E A Q U A R I U M</P>
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
    

    <footer id="footer" class="footer"> 
       
    </footer>
    <script type="text/javascript">
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
    
</body>
</html>