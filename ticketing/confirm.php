<?php

include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select * from toCart where u_id = '$s_id';";
$result = mysqli_query($dbcon, $sql);
//db데이터를 array 로 불러와서 이용하기 쉽게 변수에 담음
$array = mysqli_fetch_array($result);
include "../login/login_check.php";
?>




<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>결제 정보 확인</title>
    <link rel="stylesheet" type="text/css" href="../css/mem_info.css">
    <link rel="shorcut icon" type="image/x-icon" href="/images/favicon.ico">
    <link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css' rel='stylesheet' type='text/css'>
    <style type="text/css">
    { font-family: 'Spoqa Han Sans Neo', 'sans-serif'; }
    </style>
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>

    
</head>
<body>
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
    <section>
        <div class="inner">
            <form>
                <fieldset>
                    <legend>결제 정보 확인</legend>
                        <table>
                           
                            <tr>
                                <th>번호</th>
                                <th>구매일</th>
                                <th>티켓 종류</th>
                                <th>가격</th>
                                <th>구매 수량</th>
                                <th>예약일</th>
                                <th>할인종류<th>
                                <th>Total<th>
                            <tr>
                            <?php


                            //테이블 반복 생성
                            $sql = "select * from toCart order by idx desc";
                            $result = mysqli_query($dbcon, $sql);

                            $i=1;
                            while($array = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php echo $array["bought_date"]; ?></td>
                                <td><?php echo $array["p_id"]; ?></td>
                                <td><?php echo $array["price"]; ?></td>
                                <td><?php echo $array["qty"]; ?></td>
                                <td><?php echo $array["booking_date"]; ?></td>
                                <td><?php echo $array["applied_dis"]; ?></td>
                                <td><?php echo $array["price"]; ?> * <?php echo $array["qty"]; ?></td>
                               
                            </tr>
                            <?php
                            i++ }
                            ?>
                        </table>
                        <a href="../index.php">홈으로</a>
                </fieldset>
            </form>
        </div>
    </section>






</main>



</body>
</html>