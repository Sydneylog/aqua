<?php
//세션
include "../inc/session.php";
//db연결
include "../inc/dbcon.php";



// DB에 생성한 테이블 1. 상품 
// create table toCart (
// idx int auto_increment primary key,
// u_id varchar(20) not null,
// booking_date date not null,
// p_id varchar(20) not null,
// price int not null,
// qty int not null,
// bought_date date,
// applied_dis varchar(20)
// );

//variables for normal ticket
$booking_date = $_POST["datepicker"];
$p_id = $_POST["checkbox1"];
$price = $_POST["price1"];
$qty = $_POST["qty1"];
$dis_id = $_POST["aplied_dis"];
$bought_date = date("Y-m-d");

//variables for weak ticket 출력확인
$booking_date = $_POST["datepicker"];
$p_id2 = $_POST["checkbox2"];
$price2 = $_POST["price2"];
$qty2 = $_POST["qty2"];
$dis_id = $_POST["aplied_dis"];
$bought_date = date("Y-m-d");

//출력 확인
// echo $s_id;
// echo $booking_date;
// echo $p_id;
// echo $qty;
// echo $dis_id;
// echo $bought_date;

// echo $s_id;
// echo $booking_date;
// echo $p_id2;
// echo $qty2;
// echo $dis_id;
// echo $bought_date;
// exit;

//쿼리문 작성(mysqli_multi_query 사용)
$sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, applied_dis)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$dis_id', '$bought_date');";
$sql .= "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, applied_dis)values('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$dis_id', '$bought_date');";




//출력 테스트 
// echo $sql;
// echo $sql1;
// exit;

//db전송
mysqli_query($dbcon, $sql);
mysqli_qeury($dbcon, $sql1);

//db종료
mysqli_close($dbcon);

?>