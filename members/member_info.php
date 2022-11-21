<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select * from marine_friends where idx=$s_idx;";
//$t_sql = "select *from dis_list"
$result = mysqli_query($dbcon, $sql);
//$t_result = mysqli_query($dbcon, $t_sql);
//db데이터를 array 로 불러와서 이용하기 쉽게 변수에 담음
$array = mysqli_fetch_array($result);
//$t_array = mysqli_fetch_array($result);
include "../login/login_check.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 정보 관리</title>
    <link rel="stylesheet" type="text/css" href="../css/mem_info.css">
    <link rel="shorcut icon" type="image/x-icon" href="/images/favicon.ico">
    <link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <style>
    .ticket_table{
        border-collapse:collapse;
        border: solid black 1px;
        text-align:center;
        margin:auto;
        width:1100px;
    }
    </style>
</head>
<body>
<main id="content" class="content">
    <!-- 메인 헤드 가이드 -->
    <section class="guide_wrap">
        <!-- guide headeㄱ -->
        <div class="guide_header">
            <h2>회원 정보 관리</h2>
            <div>
                <ul>
                    <li class="member_info_btn" id="member_info_btn">회원 정보 수정</li>
                    <li class="payment_info_btn">결제 내역 확인</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- 회원 개인정보 수정 -->
    <section class="signup_wrap"> <!--display:none-->
        <!-- info modify page-->
        <section class="info_modify_page pt1_bx">
            <form action="edit.php" method="post" onsubmit="return inspector()">
                <fieldset>
                    <legend class="info_title">
                            회원정보 수정
                    </legend>
                    <table class="info_table">
                        <tr>
                            <td>ID</td>
                            <td><?php echo $array["u_id"]; ?></td>
                        </tr>
                        <tr>
                            <td>이름</td>
                            <td><?php echo $array["u_name"]; ?></td>
                        </tr>
                        <tr>     
                            <td>
                                <label for="new_pass">비밀번호</label>
                            </td>
                            <td>
                                <input type="password" id="new_pass" name="new_pass" class="bx1" maxlength="20"><br>
                                <span id="err_pass" class="err_txt"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="new_pass">비밀번호 확인</label>
                            </td>
                            <td>
                                <input type="password" id="pwd_check" name="pwd_check" class="bx1" maxlength="20"><br>
                                <span id="err_pass" class="err_txt"></span>
                            </td>
                        </tr>
                        <tr class="mobile_box">
                            <td>
                                <label for="phone_number" placeholder="전화번호">전화번호</label>
                            </td>
                            <td>
                                <input type="text" id="phone_number" name="phone_number" class="bx1" value="<?php echo $array["mobile"]; ?>"><br>
                                <span class="espan">-를 제외하고 입력해 주세요</span><br>
                                <span id="err_mobile" class="err_txt"></span>
                            </td>
                        </tr>
                        <tr class="email_wrap">
                            <?php $email = explode("@", $array["emailAll"]); ?>
                            <td>
                                <label for="email1">이메일</label>
                            </td>
                            <td>
                                <input type="text" id="email" name="email1" class="emailbx1" maxlength="12" value="<?php echo $email[0]; ?>"> @
                                <input type="text" id="email2" name="email2" class="emailbx2" maxlength="10" value="<?php echo $email[1]; ?>"><br>
                                <select class="email_list" onchange="selectEmail()">
                                    <option value="">직접입력</option>
                                    <option value="hanmail.net">다음</option>
                                    <option value="naver.com">네이버</option>
                                    <option value="gmail.com">구글</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="ps_code">우편번호</label>
                            </td>
                            <td>
                                <input type="text" name="ps_code" id="ps_code" class="ps_code" value="<?php echo $array["ps_code"]; ?>">
                                </input>
                                <button type="button" class="address_check" onclick="address_search()">
                                    <span>우편번호 검색</span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="addr1" class="bx1">
                                    <span class="addrtxt">기본주소</span>
                                </label>
                            </td>
                            <td>
                                <input type="text" name="addr1" id="addr1" class="bx1" value="<?php echo $array["addr1"]; ?>">
                            </td>
                        </tr>   
                        <tr>
                            <td>    
                                <label for="addr2" class="bx1">
                                    <span class="addrtxt">상세주소</span>
                                </label>
                            </td>
                            <td>
                                <input type="text" name="addr2" id="addr2" class="bx1" maxlength="50" value="<?php echo $array["addr2"]; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="birth">닉네임</label>
                            </td>
                            <td>
                                <input type="text" id="nick" name="nick" class="bx1" value="<?php echo $array["nick"]; ?>"><br>
                            <span class="nick_span">기본 값은 프렌즈 입니다.</span>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <div class="page_moving2">
                    <button type="button" class="moving_arr1">홈으로</button>
                    <button type="submit" class="moving_arr2 grey333">정보 수정</button>
                    <button type="button" class="moving_arr2 grey333" onclick="deleteMe()">회원 탈퇴</button>
                </div>
            </div>
            </form>
        </section>
    </section>

    <!-- paid_info_page -->
    <section class="paid_info_page">
        <?php
            $sql = "select * from toCart where u_id = '$s_id';";
            $result = mysqli_query($dbcon, $sql);
            //db데이터를 array 로 불러와서 이용하기 쉽게 변수에 담음
            $array = mysqli_fetch_array($result);
        ?>
        <h3>결제내역</h3>
            <h4>1. 티켓 구매 내역</h4>
                <div class="search_bar">
                    <select>
                        <option>주문번호</option>
                        <option>상품명</option>
                    </select>
                    <input type="text">
                    <div class="material-icons">search</div>
                    
                </div>
        <section>
        <div class="inner">
            <table class="ticket_table">
                <tr>
                    <th class="th1">번호</th>
                    <th class="th2">구매일</th>
                    <th class="th3">티켓 종류</th>
                    <th class="th4">가격</th>
                    <th class="th5">구매 수량</th>
                    <th class="th6">예약일</th>
                    <th class="th7">할인종류</th>
                    <th class="th8">Total</th>
                    <th class="th9">주문번호</th>
                <tr>
                <?php
                //테이블 반복 생성
                $sql = "select * from toCart where u_id = '$s_id' order by idx desc";
                $result = mysqli_query($dbcon, $sql);

                $i=1;
                while($array = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $i;  ?></td>
                    <td><?php echo $array["bought_date"]; ?></td>
                    <td>
                        <?php if($array["p_id"] == 'normal')
                            echo '일반/청소년';
                            if($array["p_id"] == 'weak')
                            echo '경로/어린이';
                        ?>
                    </td>
                    <td><?php echo number_format($array["price"]); ?></td>
                    <td><?php echo $array["qty"]; ?></td>
                    <td><?php echo $array["booking_date"]; ?></td>
                    <td><?php echo $array["which_dis"]; ?></td>
                    <td class='total_price' name='total_price[]' id='total_price'>
                        <?php 
                        echo number_format($array['price'] * $array['qty']);
                        ?>
                    </td>
                    <td><?php echo $array["order_idx"]; ?></td>
                </tr>
                <?php
                    $i++;
                    };
                ?>
            </table>
            <div class="calc">
                <span>구매 total</span>
                <span>원</span>
            </div>
        </div>
    </section>





    <h4>2. 프로그램 구매 내역</h4>
        <div class="search_bar search2">
            <select>
                <option>주문번호</option>
                <option>상품명</option>
            </select>
            <input type="text">
            <div class="material-icons">search</div>
        </div>
        <table class="ticket_table">
            <tr>
                <th class="th1">번호</th>
                <th class="th2">구매일</th>
                <th class="th3">티켓 종류</th>
                <th class="th4">가격</th>
                <th class="th5">구매 수량</th>
                <th class="th6">예약일</th>
                <th class="th8">Total</th>
                <th class="th9">주문번호</th>
            <tr>
            <?php
            //테이블 반복 생성
            $sql = "select * from toCart_pro where u_id = '$s_id' order by idx desc";
            $result = mysqli_query($dbcon, $sql);

            $i=1;
            while($array = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td>
                    <?php echo $i;  ?>
                </td>
                <td>
                    <?php echo $array["bought_date"]; ?>
                </td>
                <td>
                    <?php $array["p_name"]; ?>
                </td>
                <td><?php echo number_format($array["price"]); ?></td>
                <td><?php echo $array["qty"]; ?></td>
                <td><?php echo $array["booking_date"]; ?></td>
                <td>
                    <?php 
                    echo number_format($array['price'] * $array['qty']);
                    ?>
                </td>
                <td><?php echo $array["order_idx"]; ?></td>
            </tr>
            <?php
                $i++;
                };
            ?>
        </table>
        <div class="calc">
                <span>구매 total</span>
                <span>원</span>
            </div>
</main>


<script>
    $(".member_info_btn").click(function(){
        console.log(1);
        $(".paid_info_page").fadeOut();
    });
    
    $(".payment_info_btn").click(function(){
        console.log(2)
;        $(".paid_info_page").fadeIn();
    });
        
    
    function inspector() {
        let pass_check = document.getElementById("pass_check");
        let phone_number = document.getElementById("phone_number");
        let check_number = document.getElementById("check_number");
        let onlyNumber = /^[0-9]+$/;
        var txt = document.getElementById("err_pass2");
        var txt2 = document.getElementById("err_pass3");
        let right1 = document.getElementById("right1");
    
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
    };
    //티켓 or 프로그램 히스토리 계산기
    

    function deleteMe(){
        let ask = confirm("정말 탈퇴하시겠습니까?");
        if(ask == true){
            location.href = "members/member_delete.php?g_idx=<?php //echo $array['idx']; ?>";
        };
    };

    function selectEmail(){
        let email2 = document.getElementById("emailbx2");
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