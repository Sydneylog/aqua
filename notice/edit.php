<?php
//작성자 전송을 위한 session 가져오기
include "../inc/session.php";

//modify에서 값 받아오기
$n_idx = $_GET["n_idx"];
$n_title =$_POST["n_title"];
$n_contents = $_POST["n_contents"];

//수정일자
$m_date = date("Y-m-d");

//출력 확인
ehco




// include "../inc/dbcon.php";
// $sql ="update marine_friends set mobile='$mobile', emailAll='$emailAll', ps_code='$ps_code', addr1='$addr1', addr2='$addr2', nick='$nick' where idx=$s_idx;";
// echo $sql;
// $sql_wPwd ="update marine_friends set pwd='$pwd', mobile='$mobile', emailAll='$emailAll', ps_code='$ps_code', addr1='$addr1', addr2='$addr2', nick='$nick' where idx=$s_idx;";
// echo $sql_wPwd;

// if(!$pwd){
//     mysqli_query($dbcon, $sql);
// }else{
//     mysqli_query($dbcon, $sql_wPwd);
// };

// //db종료
// mysqli_close($dbcon);

// //페이지 이동
// echo "
// <script type=\"text/javascript\">
// alert(\"수정되었습니다.\");
// location.href = \"../index.php\";
// </script>
// ";




?>