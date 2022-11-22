<?php
//작성자 전송을 위한 session 가져오기
include "../inc/session.php";
include "../inc/dbcon.php";
//modify에서 값 받아오기
// echo $_GET["n_idx"];
// exit;
$order_idx = $_GET['order_num'];
$sql = "select * from tocart where u_id = '$s_id' and order_idx = '$order_idx';";
echo $sql;
mysql_query("select LAST_INSERT_ID() from tocart") or die



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>결제확인</title>
</head>
<body>
  결제확인페이지

  
</body>
</html>