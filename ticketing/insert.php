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
// wichi_dis varchar(20)
// );



//making order_idx
$order_idx = date("Ymd").substr(md5(microtime()), 0, 12);
//variables for normal ticket
$booking_date = $_POST["datepicker"];
$p_id = $_POST["checkbox1"];
$price = $_POST["price1"];
$qty = $_POST["qty1"];
$dis_id = $_POST["which_dis"];
$bought_date = date("Y-m-d");

//variables for weak ticket
$booking_date = $_POST["datepicker"];
$p_id2 = $_POST["checkbox2"];
$price2 = $_POST["price2"];
$qty2 = $_POST["qty2"];
$dis_id = $_POST["which_dis"];
$bought_date = date("Y-m-d");

//출력 확인
// echo $s_id;
// echo $booking_date;
// echo $p_id;
// echo $qty;
// echo $dis_id;
// echo $bought_date;
//echo $order_idx;

// echo $s_id;
// echo $booking_date;
// echo $p_id2;
// echo $qty2;
// echo $dis_id;
// echo $bought_date;
//echo $order_idx;
//exit;

//쿼리문 작성(mysqli_multi_query 사용)
//all
$sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, which_dis, order_idx)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$bought_date', '$dis_id', '$order_idx'),('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$bought_date', '$dis_id', '$order_idx');";


//not discount
$notDis_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, order_idx)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$bought_date', '$order_idx'),('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$bought_date', '$order_idx');";


//sole normal with dis
$solNormWith_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, which_dis, order_idx)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$bought_date', '$dis_id', '$order_idx');";

//sole weak with dis
$soleWeakWith_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, which_dis, order_idx)values('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$bought_date', '$dis_id', '$order_idx');";

//sole normal only
$solNormOnly_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, order_idx)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$bought_date', '$order_idx');";

//sole weak only
$solWeakOnly_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, order_idx)values('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$bought_date', '$order_idx');";

//출력 테스트 
//if ($dis_id && $p_id && $p_id2){
//  echo $all_sql;
//}else if (!$dis_id && $p_id && $p_id2){
//  echo $notDis_sql;
// }else if ($dis_id && $p_id && !$p_id2){
//   echo $solNormWith_sql;
// }else if ($dis_id && !$p_id && $p_id2){
//   echo $soleWeakWith_sql;
// }else if (!$dis_id && $p_id && !$p_id2){
//   echo $solNormOnly_sql;
// }else if (!$dis_id && !$p_id && $p_id2){
//   echo $solWeakOnly_sql;
//};
//exit;

//db전송

if($dis_id && $p_id && $p_id2){
  mysqli_query($dbcon, $sql);
}else if (!$dis_id && $p_id && $p_id2){
  mysqli_query($dbcon, $notDis_sql);
}else if ($dis_id && $p_id && !$p_id2){
  mysqli_query($dbcon, $solNormWith_sql);
}else if ($dis_id && !$p_id && $p_id2){
  mysqli_query($dbcon, $soleWeakWith_sql);
}else if (!$dis_id && $p_id && !$p_id2){
  mysqli_query($dbcon, $solNormOnly_sql);
}else if (!$dis_id && !$p_id && $p_id2){
  mysqli_query($dbcon, $solWeakOnly_sql);
};


//program list
create table program_list(
idx int auto_increment primary key,
p_id varchar(50) not null,
p_name varchar(100) not null,
price int not null,
picture varchar(100) not null
);

insert into program_list(p_id, price, p_name, picture)values('pro1', '95000', '메인 수조 다이빙 체험', 'later'), ('pro2', '70000', '아쿠아리움 나이트 캠프','later'), ('pro3', '7000', 'Special 먹이주기 체험','later');


//db종료
mysqli_close($dbcon);

//리디렉션
echo"
<script type=\"text/javascript\">
alert(\"결제 확인 창으로 이동 합니다.\");
location.href = \"../members/member_info.php\";
</script>
";

?>