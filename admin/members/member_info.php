<?php

include "../inc/session.php";
//admin 권한으로 접근
$g_idx = $_GET["g_idx"];
include "../login/login_check.php";
include "../inc/dbcon.php";


//admin 권한으로 접근
$sql = "select * from marine_friends where idx=$g_idx;";

$result = mysqli_query($dbcon, $sql);
//db데이터를 array 로 불러와서 이용하기 쉽게 변수에 담음
$array = mysqli_fetch_array($result);


?>




<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/signup2.css">
    <link rel="shorcut icon" type="image/x-icon" href="../../images/favicon.ico">
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
               //GNB
               $(".nav> ul > li").mouseenter(function(){
                $(this).find("ul").stop().slideDown("fast");
              });
              $(".nav > ul > li").mouseleave(function(){
                $(this).find("ul").stop().slideUp("fast");
              });
                //sticky
                $(function(){
			$(window).scroll(function(){
				let nowScroll = $(document).scrollTop();
				if(nowScroll > 49){ 
						$('#nav').css({'top':'0', "height":"49", "font-size":"30px", "transition":"0.2s", "color":"#fff", "border":"0px", "box-shadow":"1px 1px 10px #8B8B8B"});
				}else{
                        $('#nav').css({'top': '100px', "height":"50","font-size":"20px", "background":"rgb(255, 255, 255)", "border-top":"1px solid #cbcbcb", "border-bottom":"1px solid #cbcbcb", "color":"#fff", "box-shadow":"0px 0px 0px #fff"});
				}
			    });
		    });
        });
    </script>
    
</head>
<body>
<?php include "../inc/sub_header.html" ?>

<main id="content" class="content">
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
   
    <section class="signup_wrap">
    <div class="signup_title">
    <h2>- 회원 정보 수정 -</h2>
    </div>
    <!-- <h3>1.주요 정보 입력</h3> -->
    
        <form action="edit.php" method="post" class="pt1_bx" onsubmit="return inspector()">
            <fieldset>
            <div class=" total_wrap"></div>
            <section class="part1">
            <legend><span class="id_must">회원정보</span></legend>
            <hr>
                
                <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
                <p>
                   ID: <?php echo $array["u_id"]; ?>
                </p>
                <p>
                   이름: <?php echo $array["u_name"]; ?>
                </p>
                <p>     
                    <label for="new_pass">비밀번호</label><br>
                    <input type="password" id="new_pass" name="new_pass" class="bx1" maxlength="20">
                    <span id="err_pass" class="err_txt"></span>
                </p>
                <p>     
                    <label for="new_pass">비밀번호 확인</label><br>
                    <input type="password" id="pwd_check" name="pwd_check" class="bx1" maxlength="20">
                    <span id="err_pass" class="err_txt"></span>
                </p>
                
                <p class="mobile_box">
                    <label for="phone_number" placeholder="전화번호">전화번호</label><br>
                    <input type="text" id="phone_number" name="phone_number" class="bx1" value="<?php echo $array["mobile"]; ?>"><br>
                    <span class="espan">-를 제외하고 입력해 주세요</span><br>
                    <span id="err_mobile" class="err_txt"></span>
                    
                </p>
                <?php
                $email = explode("@", $array["emailAll"]);
                ?>

                <p class="email_wrap">
                    <label for="email1">이메일</label><br>
                    <input type="text" id="email" name="email1" class="emailbx1" maxlength="12" value="<?php echo $email[0]; ?>"> @
                    <input type="text" id="email2" name="email2" class="emailbx2" maxlength="10" value="<?php echo $email[1]; ?>"><br>
                    <select class="email_list" onchange="selectEmail()">
                        <option value="">직접입력</option>
                        <option value="hanmail.net">다음</option>
                        <option value="naver.com">네이버</option>
                        <option value="gmail.com">구글</option>
                    </select>
                </p>
                <p>
                    <span>주소<span><br>
                    <label for="ps_code">우편번호</label><br>
                    <input type="text" name="ps_code" id="ps_code" class="ps_code" value="<?php echo $array["ps_code"]; ?>">
                    <label for="addr1" class="bx1"><span class="addrtxt">기본주소</span></label>
                    <input type="text" name="addr1" id="addr1" class="bx1" value="<?php echo $array["addr1"]; ?>"><br>
                    <button type="button" class="address_check" onclick="address_search()"><span>주소 검색</span></button>
                    <label for="addr2" class="bx1"><span class="addrtxt">상세주소</span></label>
                    <input type="text" name="addr2" id="addr2" class="bx1" maxlength="50" value="<?php echo $array["addr2"]; ?>">
                </p>
                <p>
                    <label for="birth">닉네임</label><br>
                    <input type="text" id="nick" name="nick" class="bx1" value="<?php echo $array["nick"]; ?>"> <br>
                    <span class="nick_span">기본 값은 프렌즈 입니다.</span>
                </p>
            </fieldset>
            <div class="page_moving2">
                <p><button type="button" class="moving_arr1">홈으로</button></p>
                <p><button type="submit" class="moving_arr2">정보 수정</button></p>
                <p><button type="button" class="moving_arr2" onclick="deleteMe()">회원 삭제</button></p>

            </div>
            </section>
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
    let new_id = document.getElementById("new_id");
    let new_name = document.getElementById("new_name");
    let new_pass = document.getElementById("new_pass");
    let pass_check = document.getElementById("pass_check");
    let phone_number = document.getElementById("phone_number");
    let check_number = document.getElementById("check_number");
    let onlyNumber = /^[0-9]+$/;
    var txt = document.getElementById("err_pass2");
    var txt2 = document.getElementById("err_pass3");
    let right1 = document.getElementById("right1");
    if(new_id.value == ""){
        var txt = document.getElementById("err_id");
        txt.innerHTML="<br>아이디를 입력하세요";
        new_id.focus();
        return false;
    }else{
        var txt = document.getElementById("err_id");
        txt.innerHTML="";
    }
    if(!new_name.value) {
        var txt = document.getElementById("err_name");
        txt.innerHTML="<br>이름을 입력하세요";
        new_name.focus();
        return false;
    }else{
        var txt = document.getElementById("err_name");
        txt.innerHTML="";
    };
    if(!new_pass.value) {
        var txt = document.getElementById("err_pass");
        txt.innerHTML="<br>비밀번호를 입력하세요";
        new_pass.focus();
        return false;
    }else{
        var txt = document.getElementById("err_pass");
        txt.innerHTML="";
    };
    if(!pass_check.value) {
        txt.innerHTML="<br>비밀번호 확인을 위해 입력해 주세요";
        txt2.innerHTML ="";
        right1.innerHTML="";
        pass_check.focus();
        return false;
    }else if(new_pass.value != pass_check.value) {
        txt.innerHTML="";
        txt2.innerHTML = "<br>비밀번호가 일치하지 않습니다.";
        right1.innerHTML="";
        pass_check.focus();
        return false;
    }else{
        txt.innerHTML="";
        txt2.innerHTML ="";
        right1.innerHTML="<br>비밀번호가 일치합니다.";
    };
    if(!phone_number.value){
        var txt = document.getElementById("err_mobile");
        txt.innerHTML="<br>전화번호를 입력하지 않았습니다";
        phone_number.focus();
        return false;
    }else if(!onlyNumber.test(phone_number.value)){
        var txt = document.getElementById("err_mobile");
        txt.innerHTML="숫자만 입력 가능합니다."
    }else if(phone_number.value.length < 11){
        var txt = document.getElementById("err_mobile");
        txt.innerHTML="전화번호를 끝까지 입력해 주세요."
    }else{
        var txt = document.getElementById("err_mobile");
        txt.innerHTML=""
    };
    if(!(check_number.value == maiden_number.value)){
        let check_number = document.getElementById("check_number");
        let txt = document.getElementById("err_checkN");
        let right = document.getElementById("right_checkN");
        txt.innerHTML = "<br>인증번호가 일치하지 않습니다.";
        right.innerHTML = "";
        return false;
    }else if(!check_number.value) {
        let check_number = document.getElementById("check_number");
        let txt = document.getElementById("err_checkN");
        let right = document.getElementById("right_checkN");
        txt.innerHTML = "<br>인증번호를 발급 후 발급된 인증번호를 입력해 주세요";
        right.innerHTML = "";
        return false;
    }else{
        let check_number = document.getElementById("check_number");
        let txt = document.getElementById("err_checkN");
        let right = document.getElementById("right_checkN");
        txt.innerHTML = "";
        right.innerHTML = "<br>번호가 일치합니다.";
    };

    //스크립트와 연동되게 스크립트의 값이 true일 경우만 작동하고 스크립트가 false의 경우
    //return false반환 하도록 한다. ;
    $(".moving_arr2").click(function(){
    $(".part2").fadeIn();
    $(".moving_arr1").click(function(){
        $(".part2").fadeOut();
    });
});
};

 function test(){
    alert("인증번호가 생성 되었습니다.\n10초 이내에 입력해 주세요.")
    
    function makingNumber(){
        let maiden_number = document.getElementById("maiden_number");
        rand = Math.round(Math.random()*10000);
        maiden_number.value = rand;
        return rand;
        };
        makingNumber();
    
    function limitedTime(){
        const timer = document.getElementById("timer");
        let time = 10000;
        let sec = 10
        timer.value =  sec + " 초";
        timeflight = setInterval(function(){
            time -= 1000;
            sec = time/1000;
            if(sec > 0){
                sec -= 1;
                timer.value = sec + " 초";
            }
        },1000);
    };
    limitedTime();

    
};
function deleteMe(){
    let ask = confirm("정말 삭제 하시겠습니까?")
    if(ask == true){
        location.href = "member_delete.php?g_idx=<?php echo $array["idx"]; ?>";
    };
};





function selectEmail(){
    let email2 = document.getElementById("email2");
    let email_list = document.querySelector(".email_list");
    let emailSet = email_list.options.selectedIndex;
    let selectedE = email_list.options[emailSet].value;
    email2.value = selectedE;
};

function address_search(){
        window.open("address_search.html", "", "width=600, height=300, left=0,top=0");
    };

</script>
</body>
</html>