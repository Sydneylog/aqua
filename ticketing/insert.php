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

//variables for weak ticket
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
//all
$sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, applied_dis)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$bought_date', '$dis_id');";
$sql .= "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, applied_dis)values('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$bought_date', '$dis_id');";

//not discount
$notDis_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$bought_date');";
$notDis_sql .= "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date)values('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$bought_date');";

//sole normal width dis
$solNormWith_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, applied_dis)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$bought_date', '$dis_id');";

//sole weak width dis
$soleWeakWith_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date, applied_dis)values('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$bought_date', '$dis_id');";

//sole normal only
$solNormOnly_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date)values('$s_id', '$booking_date', '$p_id', '$price', '$qty', '$bought_date');";

//sole weak only
$solWeakOnly_sql = "insert into toCart(u_id, booking_date, p_id, price, qty,bought_date)values('$s_id', '$booking_date', '$p_id2', '$price2', '$qty2', '$bought_date');";

//출력 테스트 
// if ($dis_id && $p_id && $p_id2){
//  echo $sql;
// }else if (!$dis_id && $p_id && $p_id2){
//   echo $notDis_sql;
// }else if ($dis_id && $p_id && !$p_id2){
//   echo $solNormWith_sql;
// }else if ($dis_id && !$p_id && $p_id2){
//   echo $soleWeakWith_sql;
// }else if (!$dis_id && $p_id && !$p_id2){
//   echo $solNormOnly_sql;
// }else if (!$dis_id && !$p_id && $p_id2){
//   echo $solWeakOnly_sql;
// };
// exit;

//db전송
if ($dis_id && $p_id && $p_id2){
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

//db종료
mysqli_close($dbcon);

//리디렉션
echo"
<script type=\"text/javascript\">
alert(\"결제 확인 창으로 이동 합니다.\");
location.href = \"../confirm.php\";
</script>
";

?>