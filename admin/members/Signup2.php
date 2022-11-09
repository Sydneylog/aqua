<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/signup2.css">
    <link rel="shorcut icon" type="image/x-icon" href="../../images/favicon.ico">
    <script type="text/javascript" src="../../js/jquery-3.6.1.min.js"></script>
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
    <header id="header" class="header">
        <div class="header_wrap">
        <h1 class="main_logo">롯데월드 아쿠아리움</h1>
        <span class="logo_title">Lotte A Q U A R I U M</span>
            <h2 class="blind">주요 메뉴</h2>
            <!-- <div class="top_wrap"> -->
                <dl class="top_menu1">
                    <dt class="blind">빠른 안내</dt>
                    <dd class="top_open">이용 시간</dd>
                    <dd class="top_buy">티켓 구매 바로가기</dd>
                </dl>
                <dl class="top_menu2">
                    <dt class="blind">유틸메뉴</dt>
                    <dd class="top_mapg">My page</dd>
                    <dd class="top_lang">Language</dd>
                </dl>
            <!-- </div> -->
        </div>
        <nav class="nav" id="nav">
            <ul>
                <li class="gnb1"><a href="#">방문 안내</a>
                    <ul>
                        <li>
                            <a href="#">이용 요금</a>
                        </li>
                        <li>
                            <a href="#">위치 안내</a>
                        </li>
                        <li>
                            <a href="#">할인 혜택</a>
                        </li>
                    </ul>
                </li>
                <li class="gnb2"><a href="#">아쿠아리움 소개</a>
                    <ul>
                        <li><a href="#">층별 안내</a></li>
                        <li><a href="#">해양생물 소개</a></li>
                    </ul>
                </li>
                <li class="gnb3"><a href="#">프로그램 안내</a>
                    <ul>
                        <li><a href="#">프로그램 소개</a></li>
                        <li><a href="#">이달의 이벤트</a></li>
                    </ul>
                </li>
                <li class="gnb4"><a href="#">온라인 예매</a>
                    <ul>
                        <li><a href="#">티켓 구매</a></li>
                        <li><a href="#">프로그램 구매</a></li>
                    </ul>
                </li>
                <li class="gnb5"><a href="#">새소식&고객의 소리</a>
                        <ul>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">후기 게시판</a></li>
                    </ul> 
                </li>
            </ul>
        </nav>
        </div>
</header>

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
    <h2>- 롯데 아쿠아리움 회원가입 -</h2>
    </div>
    <!-- <h3>1.주요 정보 입력</h3> -->
    
        <form action="insert.php" method="post" class="pt1_bx" onsubmit="return inspector()">
           
            <fieldset>
            <div class=" total_wrap"></div>
            <section class="part1">
            <legend><span class="id_must">필수 정보 입력</span></legend>
            <hr>
                <p>
                    <label for="new_id">ID</label><br>
                    <input type="text" id="new_id" name="new_id" class="bx1" maxlength="15"> 
                    <button type="button" class="id_check" onclick="check_id()" >중복확인</button>
                    <span id="err_id" class="err_txt"></span>
                </p>
                <p>
                    <label for="new_name">이름</label><br>
                    <input type="text" id="new_name" name="new_name" class="bx1" maxlength="15">
                    <span id="err_name" class="err_txt"></span>
                </p>
                <p>     
                    <label for="new_pass">비밀번호</label><br>
                    <input type="password" id="new_pass" name="new_pass" class="bx1" maxlength="20">
                    <span id="err_pass" class="err_txt"></span>
                </p>
                <p>
                    <label for="pass_check">비밀번호 확인</label><br>
                    <input type="password" id="pass_check" name="pass_check" class="bx1" maxlength="20">
                    <span id="err_pass2" class="err_txt"></span>
                    <span id="err_pass3" class="err_txt"></span>
                    <span id="right1" class="right_txt"></span>
                </p>
                <p class="mobile_box">
                    <label for="phone_number" placeholder="전화번호">전화번호</label><br>
                    <input type="text" id="phone_number" name="phone_number" class="bx1"><br>
                    <span class="espan">-를 제외하고 입력해 주세요</span><br>
                    <span id="err_mobile" class="err_txt"></span>
                    
                </p>
                <div class="check_box">
                <p>
                    <button type="button" onclick="test()" class="making_number">인증번호 발급</button>

                    <label for="timer" class="blind">타이머</label>
                    <input type="text" id="timer" class="timer" disabled><br>

                    <label for="maiden_number" class="blind">생성된 번호</label>
                    <input type="text" id="maiden_number" disabled class="bx1"><br>
                    <span class="espan">* 발급된 번호를 아래 칸에 입력 해주세요</span>

                </p>
                <p>
                    <label for="check_number">인증번호 입력</label><br>
                    <input type="text" id="check_number" name="check_number" class="bx1">
                    <span id="err_checkN" class="err_txt"></span>
                    <span id="right_checkN" class="right_txt"></span>
                </p>
                </div>
            

            <div class="page_moving">
            <p>
                <button type="button" class="moving_arr1">홈으로</button>
            </p>
            <p>
                <button type="button" class="moving_arr2" onclick="inspector()" id="moving_arr2">다음 단계</button>
            </p>
            </div>
            </section>
            

            <section class="part2">
            <fieldset>
                <legend><span class="id_sub">부가 정보</span></legend>
                
                    <p class="email_wrap">
                        <label for="email1">이메일</label><br>
                        <input type="text" id="email" name="email1" class="emailbx1" maxlength="12"> @
                        <input type="text" id="email2" name="email2" class="emailbx2" maxlength="10"><br>
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
                        <input type="text" name="ps_code" id="ps_code" class="ps_code">
                        <label for="addr1" class="bx1"><span class="addrtxt">기본주소</span></label>
                        <input type="text" name="addr1" id="addr1" class="bx1"><br>
                        <button type="button" class="address_check" onclick="address_search()"><span>주소 검색</span></button>
                        <label for="addr2" class="bx1"><span class="addrtxt">상세주소</span></label>
                        <input type="text" name="addr2" id="addr2" class="bx1" maxlength="50">
                    </p>
                   
                    <p>
                        <label for="birth">닉네임</label><br>
                        <input type="text" id="nick" name="nick" class="bx1" value="프렌즈"><br>
                        <span class="nick_span">미입력 시 기본 값인 프렌즈로 설정됩니다.</span>
                    </p>
            </fieldset>
            <div class="page_moving2">
                <p><button type="button" class="moving_arr1">이전 단계</button></p>
                <p><button type="submit" class="moving_arr2" onclick="inspector()">회원 가입</button></p>
            </div>
            </section>
        </div>
        </fieldset>
        </form>
    
    </section>
</main>
<footer id="footer" class="footer"> 
    <h2 class="footer_logo">사이트 이용 안내</h2>
        <h3 class="blind">약관 및 정책</h3>
        <ul class="footer_intro">
            <li><a href="#">아쿠아리움 소개</a></li>
            <li><a href="#">사이트맵</a></li>
            <li><a href="#">이용약관</a></li>
            <li><a href="#">개인정보처</a>리방침</li>
            <li><a href="#">영상</a>정보처리 기기운영/관리방침</li>
            <li><a href="#">그룹PR</a></li>
        </ul>   
        
        <div class="etc">
            <div class="etc_pt1">    
                <address>서울특별시 송파구 올림픽로 999</address>
                <p>대표자: 김철수</p>
                <p>전화: 123-456-789</p>
                <p>전자우편주소: happy@happy.com</p>
            </div>
            <div class="etc_pt2">
                <p>사업자 등록번호:987-65-43210</p>
                <p>통신판매업신고번호: 송파 제9999호</p>
            </div>
            <p class="copy">Copyright 2014 Lotteworld. All Rights    reserved.</p>
        </div>  
       
        <div class="footer_more">
            <h2>계열사 관련사이트<a href="#">더보기</a></h2>
                <!-- <ul class="fam_list">
                    <li>계열사1</li>
                    <li>계열사2</li>
                    <li>계열사3</li>
                    <li>계열사4</li>
                    <li>계열사5</li>
                    <li>계열사6</li>
                    <li>계열사7</li>
                </ul> -->
        </div>  
       
        <ul class="isms_bx">
            <li class="isms_logo">ISMS인증</li>
            <div>
            <li>인증범위: 온라인 예매 서비스 운영</li>
            <li>유효기간: 2020.11.18~2023.11.17</li>
            </div>
        </ul>
</footer>

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