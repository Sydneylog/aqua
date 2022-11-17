<?php
//discount list 테이블 생성
// insert into dis_list(dis_name, dis_id, dis_rate)values('삼성카드', 'c1', '20');
// insert into dis_list(dis_name, dis_id, dis_rate)values('현대카드', 'c2', '25');
// insert into dis_list(dis_name, dis_id, dis_rate)values('신한카드', 'c3', '30');
// insert into dis_list(dis_name, dis_id, dis_rate)values('SK멤버십', 'm1', '20');
// insert into dis_list(dis_name, dis_id, dis_rate)values('KT멤버십', 'm2', '25');
// insert into dis_list(dis_name, dis_id, dis_rate)values('LG U+ 멤버십', 'm3', '30');
// insert into dis_list(dis_name, dis_id, dis_rate)values('마린 프렌즈', 'f1', '20');
// insert into dis_list(dis_name, dis_id, dis_rate)values('지역 주민 우대', 'f2', '25');
// insert into dis_list(dis_name, dis_id, dis_rate)values('롯데 그룹사 임직원', 'f3', '30');
// insert into dis_list(dis_name, dis_id, dis_rate)values('군인 할인', 'n1', '20');
// insert into dis_list(dis_name, dis_id, dis_rate)values('나이트 타임 입장', 'n2', '25');
// insert into dis_list(dis_name, dis_id, dis_rate)values('가족 동반 할인', 'n3', '30');

//db연결
include "../inc/session.php";
//include "../inc/dbcon.php";

//db연결후 select쿼리 작성하여 array 변수에 담기
// $sql = "select * from dis_list";
// $result = mysqli_query($dbcon, $sql);
// $array = mysqli_fetch_array($result);
// include "../login/login_check.php";
?>


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
                            <input type="text" name="qty1" id="price1" class="price1 qtySet" onkeyup="tCalc(33000, 1)" onclick="preventor()" > 명

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
                            <input type="text" name="qty2"  id="price2" class="price2 qtySet" onkeyup="tCalc(29000, 2)" onclick="preventor2()"> 명


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
            <h3>
                2. 티켓 할인 적용 (선택 사항)
            </h3>
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
                        <input type="radio" name="which_dis" value="c1" id="c1">
                        <input type="hidden" name="applied_dis" value="80">
                        <span class="c1">삼성 카드<br>(20% 할인)</span>
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="c2" id="c2">
                        <input type="hidden" name="applied_dis" value="75">
                        <span class="c2">현대 카드<br>(25% 할인)</span>
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="c3" id="c3">
                        <input type="hidden" name="applied_dis" value="70">
                        <span class="c3">신한 카드<br>(30% 할인)</span>
                    </li>
                    
                </ul>
                <ul class="membership">
                    <li>
                        <input type="radio" name="which_dis" value="m1" id="m1">
                        <input type="hidden" name="applied_dis" value="80">
                        <span class="m1">SK 멤버십<br>(20% 할인)</span>
                        
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="m2" id="m2">
                        <input type="hidden" name="applied_dis" value="75">
                        <span class="m2">KT 멤버십<br>(25% 할인)</span>
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="m3" id="m3">
                        <input type="hidden" name="applied_dis" value="70">
                        <span class="m3">LG U+멤버십<br>(30% 할인)</span>
                        
                    </li>
                </ul>
                <ul class="marineF">
                    <li>
                        <input type="radio" name="which_dis" value="f1" id="f1">
                        <input type="hidden" name="applied_dis" value="80">
                        <span class="f1">마린 프렌즈 추천<br>(20% 할인)</span>
                        
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="f2" id="f2">
                        <input type="hidden" name="applied_dis" value="75">
                        <span class="f2">지역 주민 우대<br>(25% 할인)</span>
                        
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="f3" id="f3">
                        <input type="hidden" name="applied_dis" value="70">
                        <span class="f3">롯데 그룹사 임직원<br>(30% 할인)</span>
                        
                    </li>

                </ul>
                <ul class="normalDis">
                    <li>
                        <input type="radio" name="which_dis" value="n1" id="n1">
                        <input type="hidden" name="applied_dis"  value="80">
                        <span class="n1">
                            군인 할인<br>(20% 할인)
                        </span>
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="n2" id="n2">
                        <input type="hidden" name="applied_dis"  value="75">
                        <span class="n2">
                            나이트 타임 할인<br>(25% 할인)
                        </span>
                        
                    </li>
                    <li>
                        <input type="radio" name="which_dis" value="n3" id="n3">
                        <input type="hidden" name="applied_dis"  value="70">
                        <span class="n3">
                            가족 동반 할인<br>(30% 할인)
                        </span>
                    </li>
                </ul>
            </div>
            <hr class="cal_line2">
            <div class="result2_wrap">
                <p class="total_txt2">할인 적용 된 가격</p>
                <div class="result2_bx">
                <input type="text" name="result2" id="result2" class="result2" disabled><span class="won2">원</span>
                </div>
            </div>
            
        </ul>        
        </div>
        
        
        <h2 class="pro_title">- 프로그램 구매 -</h2>
        <button type="button" onclick="putPro()">객체 생성</button>
            <div>        
                <table class="buy_pro" id="buy_pro">
                    <thead>
                        <tr class="pro_menu">
                            <th class="th1">선택</th>                              
                            <th class="th2">이름</th>
                            <th class="th3">프로그램 소개</th>
                            <th class="th4">인원</th>
                            <th class="th5">가격</th>
                        </tr>
                    </thead>
                    <!-- 다이빙 -->
                    <tbody>
                        <tr class="list_rows">
                            <td>
                                <input type="checkbox" name="pro_list[]" id="pro1" value="pro1" id="pro1">
                                <input type="hidden" value="95000" name="pro_price">
                            </td>
                            <td>
                                메인 수조 다이빙 체험<br>95,000원
                            </td>
                            <td>
                                <p>
                                    국내최대 규모 25m 세이프티 다이빙 체험!
                                </p>
                                <p>
                                    다양한 바다생물들이 눈앞에서 펼쳐지는 롯데월드 아쿠아리움에서 특별한 추억을 <br>남겨 보세요
                                </p>
                            </td>
                            <td>
                                <select name="pro_qty[]" id="pro_qty1" class="pro_qty1 changer" onchange="calc3(95000, 1)">
                                    <option value="0">선택</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select> 
                            </td>
                            <td>
                                <input type="text" name="cost" id="cost1" class="cost" disabled>
                            </td>
                        </tr>
                        <!-- 나이트캠프 -->
                        <tr class="list_rows">
                            <td>
                                <input type="checkbox" name="pro_list[]" id="pro2" value="pro2" id="pro2">
                                <input type="hidden" value="70000" name="pro_price">
                            </td>
                            
                            <td>
                                <p>
                                    아쿠아리움<br>나이트 캠프<br>70,000원
                                </p>
                            </td>
                            <td>
                                <p>
                                    아쿠아리움에서 단체로 즐기는 나이트 캠프!
                                </p>
                                <p>
                                    롯데월드 아쿠아리움에서 단체로 즐기는 특별한 하룻밤을 즐겨보세요! (최대 10명)
                                </p>
                            </td>
                            <td>
                                <select name="pro_qty[]" id="pro_qty2" class="pro_qty2 changer" onchange="calc3(70000, 2)">
                                <option value="0">선택</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="cost" id="cost2" class="cost2" disabled>
                            </td>
                        </tr>
                        <!-- 물고기 도시락 -->
                        <tr class="list_rows">
                            <td>
                                <input type="checkbox" name="pro_list[]" id="pro3" value="pro3" id="pro3">
                                <input type="hidden" value="7000" name="pro_price">
                            </td>
                            
                            <td>
                                <p>
                                    Special<br> 먹이 주기 체험<br>7,000원
                                </p>
                            </td>
                            <td>
                                <span>
                                    누가 어떤 먹이를 먹는지 같이 확인해봐요!
                                </span>
                            </td>
                            <td>
                                <select name="pro_qty[]" id="pro_qty3" class="pro_qty3 changer" onchange="calc3(7000, 3)">
                                    <option value="0">선택</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select> 
                            </td>
                            <td>
                                <input type="text" name="cost" id="cost3" class="cost" disabled>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- 프로그램 총합 -->
                <div class="result3_wrap">
                    <span class="total_text3">프로그램 가격</span>
                    <div class="result3_bx">
                        <input type="text" id="result3" name="result3" class="result3" disabled>
                        <span class="won3">원</span>
                    </div>
                </div>
            </div>   
            
       
        <!-- 결제 예상 금액 -->
        <div class="prophet">
            <div class="prophet_title">
                <h3>예상 결제 금액</h3>
            </div>
            <table>
                <tr>
                    <td>티켓 가격</td>
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
                    <td>할인 적용 후 티켓 가격</td>
                    <td>
                        <input type="text" name="sResult3" id="sResult3" class="sResult" disabled> <span> 원</span>
                    </td>
                </tr>
                <tr>
                    <td>프로그램 가격</td>
                    <td>
                        <input type="text" name="sResult4" id="sResult4" class="sResult" disabled> <span> 원</span>
                    </td>
                </tr>
                <tr class="fore_last">
                    <td >총 예상 금액</td>
                    <td class="fore_last">
                        <input type="text" name="sResult5" id="sResult5" class="sResult" disabled> <span> 원</span>
                    </td>
                </tr>
            </table>
            <button type="button" onclick="totalsum()">결과</button>
        </div>
        

            <div class="last_btn">
                <button type="reset" name="resetall" value="resetall">다시 작성</button>
                <button type="submit" name="payAll" value="payall" id="payAll">결제</button>
            </div>
        </form>
        </div>
        </section>
    </main>
    
</body>
<script type="text/javascript">
    /* 달력 */
    //[calander:"air-datepicker (jQuery_plugin)사용]이전 날짜 선택 블록, 한국 기준의 달력 표시 
    $("#datepicker").datepicker({
    	language: 'ko',
        inline: true,
        dateFormat: 'yyyy-mm-dd',
        minDate: new Date(),  
    });
    
    /* 유효성 검사 */
    //[유효성 검사] 구매 개수 입력전 날짜 선택 유도
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
    //[유효성 검사] 구매 개수 입력 전 티켓 선택 유도
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

    /* ticket & program calculator */
    // [티켓] 티켓
    function tCalc(price, index){
        const checkbx = document.getElementById("checkbox" + index);
        const qty = document.getElementById("price" + index).value;
        const hidden = document.getElementById("hidden" + index);
            if(checkbx.checked){
                hidden.value = price * Number(qty);
            }else{
                hidden.value = "0";
            };
            //console.log(checkbx);
    };
    

    // [티켓] hidden값 더하여 총합 구함
    $(".qtySet").keyup(function(){
        let sum = 0;
        let sum1 = parseInt($("#hidden1").val() || 0 );
        let sum2 = parseInt($("#hidden2").val() || 0 );
        sum = sum1 + sum2;
        // console.log(sum);
        document.getElementById("result1").value = sum.toLocaleString(); 
    });
    
    /* 할인적용 */
    // [discount] tab menu
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

    // [discount] calculator
    $("input[name='which_dis'").change(function(){
        let checked = $("input[name='which_dis']:checked").val();
        let disRate = $("input[name='which_dis']:checked").next().val();
        let result2 = document.getElementById("result2");
        let result1N = result1.value.replace(/,/g, "");
        let beResult2 = parseInt(disRate) / 100 * result1N;
        result2.value = beResult2.toLocaleString();
        // console.log(checked);
        // console.log(disRate);
        // console.log(beResult2);
    });

    //[discount] reset : 구매 개수 변경시 할인 적용 체크를 초기화하여 올바른 총합 볼수 있도록 함
    $("qtySet").keyup(function(){
        let radioChecked = document.getElementsByName("which_dis");
        //price1 or price2 value  변경시 체크해제하고 result2의 값도 0으로 변환
        radioChecked.forEach((radio) => {
            radio.checked = false;
            document.getElementById("result2").value = "0"
        });
    });
    
    /* 프로그램 구매 */
    //[program] calculator
    function calc3(price, index) {
        let proChecked = document.getElementById("pro" + index);
        let proQty = $(".pro_qty" + index).val();
        let sub_result = document.getElementById("cost" + index);
        //console.log(proChecked);
        //console.log(proQty);
        if(proChecked.checked){
            locale = price * parseInt(proQty);
            sub_result.value = locale.toLocaleString();
        }else{
            sub_result.value = "0";
        };
        
    };
    
    //[program] total calculator 
    //배열, reduce, map, 문자형 숫자형 변환등 사용해 봄
    $(".changer").change(function(){
        let result3 = document.getElementById("result3")
        let result = 0;
        let strArray = new Array();
        $("input[name=cost]").each(function(){
            strArray.push(this.value.replace(/,/g, ""));
        });
        console.log(strArray);
        const numArray = strArray.map(Number);
        result = numArray.reduce((a, b) => a + b, 0);
        //console.log(result);
        result3.value = result.toLocaleString();
    });

    //[program] cancelled
    $("input[name=pro_list]").change(function(){
        if($("input[name=pro_list]").is(":checked")){
            ""
        }else{

        }
    })
    



    //[program] 체크박스 값 보내기



    //[program] 프로그램 구매 배열 생성
    // function putPro(){
    //     putArray = new Array();
    //     let idxArray = new Array();
    //     $("input[name=pro_list]:checked").each(function(){
    //         idxArray.push($("input[name=pro_list]").index(this));
    //     });
    //     for (i = 0; i < idxArray.length; i++) {
    //         let obj = new Object();
    //         obj.p_id = $("#buy_pro tbody").children().eq(idxArray[i]).children().children().eq(0).val();
    //         // obj.price = $("#buy_pro tbody").children().eq(idxArray[i]).children().children().eq(1).val();
    //         obj.qty = $("#buy_pro tbody").children().eq(idxArray[i]).children().eq(3).children().eq(0).val();
    //         putArray.push(obj);
    //         console.log(putArray);
    //     };
    // };


    /* 토탈 계산기 */
    //total calculator
    $(".qtySet").keyup(function(){
        let sResult1 = document.getElementById("sResult1");
        let result1N = result1.value.replace(/,/g, "");
        if(!(result1N == "")){
            sResult1.value = Number(result1N).toLocaleString();
        }else{
            sResult1.value = "0"
        };
    });
    $("input[name=which_dis]").change(function(){
        let sResult2 = document.getElementById("sResult2");
        let sResult3 = document.getElementById("sResult3");
        let result1N = result1.value.replace(/,/g, "");
        let result2N = result2.value.replace(/,/g, "");

        if(!(result2N == "")){
            sResult3.value = Number(result2N).toLocaleString();;
        }else{
            sResult3.value = "0"
        };
        if(!(sResult3.value == "0")){
            sResult2.value = (Number(result2N) - Number(result1N)).toLocaleString();
        }else if(sResult3.value == "0"){
            sResult2.value = "0";
        }
    });
    $(".changer").change(function(){
        let sResult4 = document.getElementById("sResult4");
        let result3N = result3.value.replace(/,/g, "");
        if(!(result3N == "")){
            sResult4.value = Number(result3N).toLocaleString();;
        }else{
            sResult4.value = "0"
        };
    });
    // input[name=which_dis] .changer  .qtySet 버튼으로 해야할거 같음 일단 보류
    /*$("input[name=cost]").on("propertychange change paste input", function() {
        let sResult5 = document.getElementById("sResult5");
        let result1N = result1.value.replace(/,/g, "");
        let result2N = result2.value.replace(/,/g, "");
        let result3N = result3.value.replace(/,/g, "");

        if(!(sResult2.value == "0")){
            sResult5.value = (Number(result3N) + Number(result2N)).toLocaleString();
        }else if(sResult2.value == "0"){
            sResult5.value = (Number(result3N) + Number(result1N)).toLocaleString();
        };
    });
    */

   

</script>

</html>