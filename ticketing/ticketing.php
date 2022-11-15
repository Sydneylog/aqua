<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticketing</title>
    <link rel="stylesheet" type="text/css" href="../css/ticket.css">
    <link rel="stylesheet" href="../css/jquery.bxslider.css">
    <link rel="stylesheet" href="../css/datepicker.min.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <link rel="stylesheet" href="../css/header.css">
    <!-- favicon -->
    <link rel="shorcut icon" type="image/x-icon" href="../images/favicon.ico">
    <!-- jquery -->
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <!-- date picker calender -->
    <script type="text/javascript" src="../js/datepicker.js"></script>
    <script type="text/javascript" src="../js/datepicker.ko.js"></script>
    <!-- slider -->
    <script src="../js/jquery.bxslider.js"></script>
    <!-- google material -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
</head>
<body>
    <!-- header -->
    <?php //include "../inc/header_html.php" ?>
    

    <main id="content" class="content">
        <section class="main_img">
            <h2 class="blind">주요 소식</h2>
                <ul>
                    <!-- <li>와디즈X롯데월드 공구</li> -->
                    <li class="banner_tok"><a href="#">카카오페이 Trick or Treat 할인행사</a>
                    <span class="banner_more"><a href="#">자세히알아보기</a></span>
                    </li>
                    <!-- <li>해양 생물을 생각하는 롯데월드 아쿠아리움 입니다.</li> -->
                </ul>
        </section>
        <section class="main_wrap">
        <div class="main_part">
        <form action="insert.php" method="post">
        <h2 class="ticket_title">- 티켓구매 -</h2>
            <div class="pt1_wrap">
                <h3>1. 날짜 및 인원</h3>
                <ul class="selection_bx">
                    <!-- 달력 -->
                    <li class="selbx1">
                        <label for="datepicker">
                            <span>
                                1) 날짜 선택
                            </span>
                        </label>
                        <span class="picked_date">
                            날짜:
                        </span>
                        <input type="text" id="datepicker" name="datepicker">
                    </li>
                    <li class="sel_p">
                        <span>
                            2) 인원 선택 
                        </span>
                        <p name="ticket_name">
                            <input type="checkbox" name="checkbox1" id="checkbox1" class="checkbox1" value="normal" onclick="must_date()">
                            <label for="checkbox1">
                                일반/청소년<br>&nbsp&nbsp&nbsp&nbsp&nbsp33,000원
                            </label>

                            <label for price1 class="blind">
                                구매 개수
                            </label>
                            <input type="text" name="qty1" id="price1" class="price1 qtySet" onkeyup="tCalc(33000)" onclick="preventor()" > 명

                            <input type="text" name="hidden1" id="hidden1" hidden>
                            <input type="number" name="price1" value="33000" hidden>
                            
                        </p>

                        <p name="ticket_name">
                            <input type="checkbox" name="checkbox2" id="checkbox2" class="checkbox2" value="weak" onclick="must_date()">
                            <label for="checkbox2">
                                경로/어린이<br>&nbsp&nbsp&nbsp&nbsp&nbsp29,000원
                            </label>
                            
                            <label for price2 class="blind">
                                구매 개수
                            </label>
                            <input type="text" name="qty2"  id="price2" class="price2 qtySet" onkeyup="tCalc2(29000)" onclick="preventor2()"> 명


                            <input type="text" name="hidden2" id="hidden2" hidden >
                            <input type="number" name="price2" value="29000" hidden>
                        </p>
                    </li>
                    <hr class="calLine">
                    <div class="result_bottom">
                        <p class="total_txt">합계</p>
                        <p class="result1_bx">
                            <input type="text" name="result1" id="result1" class="result1" disabled>
                            <span class="won1">원</span>
                        </p>
                    </div>
                </ul>
            </div>
        <div class="ticket_sale">
            <h3>2. 티켓 할인 적용</h3>
            <span class="reset_warning red"><span>
        <ul class="sale_bx">
            <div>
                <ul class="sale_title">
                    <li>신용 카드</li>
                    <li>멤버십</li>
                    <li>마린프렌즈</li>
                    <li>일반 할인</li>   
                </ul>    
            </div>
            <div class="sale_list">
                <ul class="credit">
                    <li>
                        <input type="radio" name="which_dis" value="80" id="c1">
                        <span class="c1">삼성 카드<br>(20% 할인)</span>
                        <input type="hidden" name="applied_dis" value="삼성 카드">
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="75" id="c2">
                        <span class="c2">현대 카드<br>(25% 할인)</span>
                        <input type="hidden" name="applied_dis" value="현대 카드">
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="70" id="c3">
                        <span class="c3">신한 카드<br>(30% 할인)</span>
                        <input type="hidden" name="applied_dis" value="신한 카드">
                    </li>
                    
                </ul>
                <ul class="membership">
                    <li>
                        <input type="radio" name="which_dis" value="80" id="m1">
                        <span class="m1">SK 멤버십<br>(20% 할인)</span>
                        <input type="hidden" name="applied_dis" value="SK 멤버십">
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="75" id="m2">
                        <span class="m2">KT 멤버십<br>(25% 할인)</span>
                        <input type="hidden" name="applied_dis" value="KT 멤버십">
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="70" id="m3">
                        <span class="m3">LG U+멤버십<br>(30% 할인)</span>
                        <input type="hidden" name="applied_dis" value="LG U+멤버십">
                    </li>
                </ul>
                <ul class="marineF">
                    <li>
                        <input type="radio" name="which_dis" value="80" id="f1">
                        <span class="f1">마린 프렌즈 추천<br>(20% 할인)</span>
                        <input type="hidden" name="applied_dis" value="마린 프렌즈">
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="75" id="f2">
                        <span class="f2">지역 주민 우대<br>(25% 할인)</span>
                        <input type="hidden" name="applied_dis" value="지역 주민 우대">
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="70" id="f3">
                        <span class="f3">롯데 그룹사 임직원<br>(30% 할인)</span>
                        <input type="hidden" name="applied_dis" value="롯데 그룹사 임직원">
                    </li>
                   
                </ul>
                <ul class="normalDis">
                    <li name="list[]" id="list1">
                        <input type="radio" name="which_dis" value="80" id="n1">
                        <span class="n1">
                            군인 할인<br>(20% 할인)
                        </span>
                        <input type="hidden" name="applied_dis" value="군인 할인">
                    </li>
                    <li name="list[]" id="list2">
                        <input type="radio" name="which_dis" value="75" id="n2">
                        <span class="n2">
                            나이트 타임 할인<br>(25% 할인)
                        </span>
                        <input type="hidden" name="applied_dis" value="나이트 타임 할인">
                    </li>
                    <li name="list[]" id="list3">
                        <input type="radio" name="which_dis" value="70" id="n3">
                        <span class="n3">
                            가족 동반 할인<br>(30% 할인)
                        </span>
                        <input type="hidden" name="applied_dis"  value="가족 동반 할인">
                    </li>
                </ul>
            </div>
            <hr class="cal_line2">
            <div class="result2_wrap">
                <p class="total_txt2">할인 적용 된 가격</p>
                <div class="result2_bx">
                <input type="text" name="result2" id="result2" class="result2" disabled><span class="won2">원</span>
                </div>
                <button type="button" onclick="calc2()">test</button>
            </div>
            
        </ul>        
        </div>
        
        
        <h2 class="pro_title">- 프로그램 구매 -</h2>
            <ul class="pro_wrap">
                <h3 class="pro_select">1. 프로그램 선택</h3>
                <div class="buy_pro">
                    <div class="pro_menu">
                        <span class="th1">선택</span>                              
                        <span class="th2">이름</span>
                        <span class="th3">프로그램 소개</span>
                        <span class="th4">인원</span>
                        <span class="th5">가격</span>
                    </div>

                    <div class="diving_exp">
                        <span class="th1">
                            <input type="checkbox" name="choose" value="95000" id="pro1">
                        </span>
                        <span class="th2">
                            메인 수조 다이빙 체험<br>95,000원
                        </span>
                        <span class="th3">
                            <p>국내최대 규모 25m 세이프티 다이빙 체험!</p>
                            <p>다양한 바다생물들이 눈앞에서 펼쳐지는 롯데월드 아쿠아리움에서 특별한 추억을 <br>남겨 보세요</p>
                        </span>
                        <span class="th4">
                            <select name="how1" id="tankh">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> 
                        </span>
                        <span class="th5">
                            <a href="#">
                                <input type="text" id="cost1" class="cost" disabled>
                            </a>
                        </span>
                        <p class="diving_time">시간 선택:
                            <input type="radio" name="time_sel" value="15">15:00
                            <input type="radio" name="time_sel" value="16">16:00
                            <input type="radio" name="time_sel" value="17">17:00
                            <input type="radio" name="time_sel" value="18">18:00
                            <input type="radio" name="time_sel" value="19">19:00
                        </p>
                    </div>

                    <div class="camp_exp">
                        <span class="th1">
                            <input type="checkbox" name="choose" value="70000" id="pro2">
                        </span>
                        <span  class="th2">
                            아쿠아리움<br>나이트 캠프<br>70,000원
                        </span>
                        <span  class="th3">
                            <span>아쿠아리움에서 단체로 즐기는 나이트 캠프!</span>
                            <span>롯데월드 아쿠아리움에서 단체로 즐기는 특별한 하룻밤을 즐겨보세요! (최대 15명)</span>
                        </span>
                        <span  class="th4">
                            <input type="number" name="nt_camp" id="nt_camp" class="nt_camp">
                        </span>
                        <span>
                            <a href="#">
                                <input type="text" id="cost2" class="cost2" disabled>
                            </a>
                        </span>
                    </div>

                    <div class="feeding_exp">
                        <span class="th1">
                            <input type="checkbox" name="choose" value="7000" id="pro3">
                        </span>
                        <span class="th2">
                            Special<br> 먹이 주기 체험<br>7,000원
                        </span>
                        <span class="th3">
                            <span>누가 어떤 먹이를 먹는지 같이 확인해봐요!</span>
                        </span>
                        <span class="th4">
                            <select name="how2" id="bento">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select> 
                        </span>
                        <span class="th5">
                            <a href="#">
                                <input type="text" id="cost3" class="cost" disabled>
                            </a>
                        </span>
                    </div>

                    <div class="result3_wrap">
                        <span class="total_text3">프로그램 가격</span>
                        <div class="result3_bx">
                            <input type="text" id="result3" name="result3" class="result3" disabled>
                            <span class="won3">원</span>
                        </div>
                    </div>
                </div>
            </ul>
       
        <div class="prophet">
            <h3>2. 예상 결제 금액</h3>
            <div class="fore_wrap">
            <table>
                <tr>
                    <td>티켓 금액</td>
                    <td>
                        <input type="text" name="sResult1" id="sResult1" class="sResult" disabled> <span> 원</span>
                    </td>
                </tr>
                <tr>
                    <td>할인된 금액</td>
                    <td>
                        <input type="text" name="sResult2" id="sResult2" class="sResult" disabled> <span> 원</span>
                    </td>
                </tr>
                <tr>
                    <td>혜택 적용된 금액</td>
                    <td>
                        <input type="text" name="sResult3" id="sResult3" class="sResult" disabled> <span> 원</span>
                    </td>
                </tr>
                <tr>
                    <td>프로그램 금액</td>
                    <td>
                        <input type="text" name="sResult4" id="sResult4" class="sResult" disabled> <span> 원</span>
                    </td>
                </tr>
                <tr>
                    <td class="fore_last">총 예상 금액</td>
                    <td class="fore_last">
                        <input type="text" name="sResult5" id="sResult5" class="sResult" disabled> <span> 원</span>
                    </td>
                </tr>
            </table>
            <p class="check_pay">
                <button type="button" onclick="payment()" class="check_pay">
                    <span>예상 금액 확인</span>
                </button>
            </p>
            </div>
        </div>

        <div class="last_btn">
            <button type="reset" name="resetall" value="resetall">다시 작성</button>
            <button type="submit" name="payall" value="paylall">결제</button>
        </div>
        </form>
        </div>
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

</body>
<script type="text/javascript">
    //calander 이전 날짜 선택 블록, 한국 기준의 달력 표시 
    $("#datepicker").datepicker({
    	language: 'ko',
        inline: true,
        dateFormat: 'yyyy-mm-dd',
        minDate: new Date(),  
    });
    
    
    
    //preventors
    //구매 개수 입력전 날짜 선택 유도
    function must_date(){
        let dateInput = document.getElementById("datepicker");
        let checkbox = document.getElementsByName("checkbox");
        if(dateInput.value == ""){
            $("input[name = checkbox").prop("checked", false);
            return alert("먼저 이용을 원하시는 날짜를 선택해 주세요");
        }else{
            return true;
        }
    };
    //구매 개수 입력 전 티켓 선택 유도
    function preventor(){
        let checkbx = document.getElementById("checkbox1");
        if(!checkbx.checked){
            alert("먼저 구매하실 티켓을 선택해 주세요");
            checkbx.focus();
        };
    };
    function preventor2(){
        let checkbx = document.getElementById("checkbox2");
        if(!checkbx.checked){
            alert("먼저 구매하실 티켓을 선택해 주세요");
            checkbx.focus();
        };
    };

    //ticket & program calculator
    //일반 티켓
    function tCalc(price){
        const checkbx = document.getElementById("checkbox1");
        const qty = document.getElementById("price1").value;
        const hidden = document.getElementById("hidden1");
            if(checkbx.checked){
                hidden.value = price * Number(qty);
            }else{
                hidden.value = "0";
            };
            //console.log(hidden.value);
    };
    //노약자 티켓
    function tCalc2(price){
        const checkbx = document.getElementById("checkbox2");
        const qty = document.getElementById("price2").value;
        const hidden = document.getElementById("hidden2");
            if(checkbx.checked){
                hidden.value = price * Number(qty);
            }else{
                hidden.value = "0";
            };
            //console.log(hidden.value);
    };
    // hidden값 더하여 총합 구함
    $(".qtySet").keyup(function(){
        let sum = 0;
        let sum1 = parseInt($("#hidden1").val() || 0 );
        let sum2 = parseInt($("#hidden2").val() || 0 );
        sum = sum1 + sum2;
        // console.log(sum);
        document.getElementById("result1").value = sum.toLocaleString(); 
    });

    
    //discount tab menu
    $(".sale_title li").hover(function(){
            $(this).css({"color":"#0d539a", "cursor":"pointer"});
        }, function(){
            $(this).css({"color":"black"});
        });
    $(".sale_title li").click(function(){
        let idx = $(this).index();
        $(".sale_list ul").eq(idx).show();
        $(".sale_list ul").not($(".sale_list ul").eq(idx)).hide();
    });

    //discount calculator
    // function calc2(){
    //     let checked = $("input[name='which_dis']:checked");
    //     //let li = checked.parent();
    //     //let discount = li.find('span:eq(0)').innerHTML;
    //     let discount = checked.next();
    //     let result2 = document.getElementById("result2");
    //     let result1N = result1.value.replace(/,/g, "");
    //     //result2.value = Number(obj) /100 * Number(result1N);
    //     console.log(checked);
    //     //console.log(li);
    //     console.log(discount);
    //     console.log(discount.innerHTML);
    // }
        /*
        input:radio에는 이미 value로 할인율이 적용되어 있는 상태
        
        checked된 radio의 할인내용을 적용하기 위해 value를 추가해야 하는 상황

        선택된 라디오 -> 형제요소(or 부모요소 -> 자식요소) 선택자로 선택된 라디오의 형제요소가 가지고 있는 value를 추가하고자 함

        미해결: 자식요소의 value값을 받아 올수 없음
        undefined
        
        

        */
        
    function calc2() {
        let result2 = Number(document.getElementById("result2").defaultValue);
        let radiobx1 = document.getElementById("n1");
        let radiobx2 = document.getElementById("n2");
        let radiobx3 = document.getElementById("n3");
        let result1N = result1.value.replace(/,/g, "");

        if(radiobx1.checked){
            result2 = Number(result1N) * Number(radiobx1.value) / 100;
        };
        if(radiobx2.checked){
            result2 = Number(result1N) * Number(radiobx2.value) / 100;
        };
        if(radiobx3.checked){
            result2 = Number(result1N) * Number(radiobx3.value) / 100;
        };
        document.getElementById("result2").value = result2.toLocaleString();
    };
    for(let i = 1; i <= 3; i++){
        let checked2 = document.getElementById("n" + i);
        checked2.onchange = calc2;
    };
    

    function calc2_1() {
        let result2 = Number(document.getElementById("result2").defaultValue);
        let radiobx1 = document.getElementById("f1");
        let radiobx2 = document.getElementById("f2");
        let radiobx3 = document.getElementById("f3");
        let result1N = result1.value.replace(/,/g, "");
        if(radiobx1.checked){
            result2 = Number(result1N) * Number(radiobx1.value) / 100;
        };
        if(radiobx2.checked){
            result2 = Number(result1N) * Number(radiobx2.value) / 100;
        };
        if(radiobx3.checked){
            result2 = Number(result1N) * Number(radiobx3.value) / 100;
        };
        document.getElementById("result2").value = result2.toLocaleString() //+ " 원";
        };
    for(let i = 1; i <= 3; i++){
        let checked2 = document.getElementById("f" + i);
        checked2.onchange = calc2_1;
    };
    function calc2_2() {
        let result2 = Number(document.getElementById("result2").defaultValue);
        let radiobx1 = document.getElementById("m1");
        let radiobx2 = document.getElementById("m2");
        let radiobx3 = document.getElementById("m3");
        let result1N = result1.value.replace(/,/g, "");
       
        if(radiobx1.checked){
            result2 = Number(result1N) * Number(radiobx1.value) / 100;
        };
        if(radiobx2.checked){
            result2 = Number(result1N) * Number(radiobx2.value) / 100;
        };
        if(radiobx3.checked){
            result2 = Number(result1N) * Number(radiobx3.value) / 100;
        };
        document.getElementById("result2").value = result2.toLocaleString();
    };
    for(let i = 1; i <= 3; i++){
        let checked2 = document.getElementById("m" + i);
        checked2.onchange = calc2_2;
    };
    function calc2_3() {
        let result2 = Number(document.getElementById("result2").defaultValue);
        let radiobx1 = document.getElementById("c1");
        let radiobx2 = document.getElementById("c2");
        let radiobx3 = document.getElementById("c3");
        let result1N = result1.value.replace(/,/g, "");
       
        if(radiobx1.checked){
            result2 = Number(result1N) * Number(radiobx1.value) / 100;
        };
        if(radiobx2.checked){
            result2 = Number(result1N) * Number(radiobx2.value) / 100;
        };
        if(radiobx3.checked){
            result2 = Number(result1N) * Number(radiobx3.value) / 100;
        };
        document.getElementById("result2").value = result2.toLocaleString(); 
    };
    for(let i = 1; i <= 3; i++){
        let checked2 = document.getElementById("c" + i);
        checked2.onchange = calc2_3;
    };

    //discount reset
    $("#price1, #price2").keyup(function(){
        let radioChecked = document.getElementsByName("which_dis");
        //price1 or price2 value  변경시 체크해제하고 result2의 값도 0으로 변환
        radioChecked.forEach((radio) => {
            radio.checked = false;
            document.getElementById("result2").value = "0"
           
        });
    });
    




    
    //program calculator
    function calc3() {
        let result3 = Number(document.getElementById("result3"));
        let cost1 = Number(document.getElementById("cost1"));
        let cost2 = Number(document.getElementById("cost2"));
        let cost3 = Number(document.getElementById("cost3"));
        let pro1 = document.getElementById("pro1"); 
        let pro2 = document.getElementById("pro2"); 
        let pro3 = document.getElementById("pro3"); 
        let tankh = document.getElementById("tankh").value;
        let nt_camp = document.getElementById("nt_camp");
        let bento = document.getElementById("bento").value;

        if(pro1.checked){
            cost1 = Number(pro1.value) * Number(tankh);
        }else if(!pro1.checked){
            cost1 = "0";
        };
        document.getElementById("cost1").value = cost1;

        if(pro2.checked){
            cost2 = Number(pro2.value) * Number(nt_camp.value);
        }else if(pro2.checked == false){
            cost2 = "0";
        };
        document.getElementById("cost2").value = cost2;

        if(pro3.checked){
            cost3 = Number(pro3.value) * Number(bento);
        }else if(!pro3.checked){
            cost3 = "0";
        };
        document.getElementById("cost3").value = cost3;

        result3 = Number(cost1) + Number(cost2) + Number(cost3);
        document.getElementById("result3").value = result3.toLocaleString();

        /*let result3 = Number(document.getElementById("result3").defaultValue);

        for(let i = 1; i < 4; i++){
            let pro_sel = document.getElementById("pro" + i);
            
            if(pro_sel.checked){
                result3 += Number(pro_sel.value);
            };
            document.getElementById("result3").value = result3;
        };*/
            for(let i = 1; i < 4; i++){
            let checked3 = document.getElementById("pro" + i);
            checked3.onclick = calc3;
        };
    };
    /*function selAll() {
        let select_all = document.getElementById("pro0");
        if(select_all.checked == true){
            for(let i = 1; i < 5; i++){
                document.getElementsByName("choose")[i].checked = true;
            };
        };
        if(select_all.checked == false){
            for(let i = 1; i < 5; i++){
                document.getElementsByName("choose")[i].checked = false;
            };
        };
        
    };
    */
    
    //total calculator
    function payment(){
        let sResult1 = document.getElementById("sResult1");
        let sResult2 = document.getElementById("sResult2");
        let sResult3 = document.getElementById("sResult3");
        let sResult4 = document.getElementById("sResult4");
        let sResult5 = document.getElementById("sResult5");
        let result1N = result1.value.replace(/,/g, "");
        let result2N = result2.value.replace(/,/g, "");
        let result3N = result3.value.replace(/,/g, "");
        

        if(!(result1N == "")){
            sResult1.value = Number(result1N).toLocaleString();
        }else{
            sResult1.value = "0"
        };
        if(!(result2N == "")){
            sResult3.value = Number(result2N).toLocaleString();;
        }else{
            sResult3.value = "0"
        };
        if(!(result3N == "")){
            sResult4.value = Number(result3N).toLocaleString();;
        }else{
            sResult4.value = "0"
        };
        if(!(sResult3.value == "0")){
            sResult2.value = (Number(result2N) - Number(result1N)).toLocaleString();
        }else if(sResult3.value == "0"){
            sResult2.value = "0";
        }
        if(!(sResult2.value == "0")){
            sResult5.value = (Number(result3N) + Number(result2N)).toLocaleString();
        }else if(sResult2.value == "0"){
            sResult5.value = (Number(result3N) + Number(result1N)).toLocaleString();
        };
    };

</script>

</html>