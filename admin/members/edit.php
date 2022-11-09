<?php
include "../inc/session.php";

$g_idx = $_POST["g_idx"];
$pwd = $_POST["new_pass"];
$mobile = $_POST["phone_number"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];
$emailAll = $email1."@".$email2;
$ps_code = $_POST["ps_code"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$nick = $_POST["nick"];

include "../inc/dbcon.php";
$sql ="update marine_friends set mobile='$mobile', emailAll='$emailAll', ps_code='$ps_code', addr1='$addr1', addr2='$addr2', nick='$nick' where idx=$g_idx;";
echo $sql;
$sql_wPwd ="update marine_friends set pwd='$pwd', mobile='$mobile', emailAll='$emailAll', ps_code='$ps_code', addr1='$addr1', addr2='$addr2', nick='$nick' where idx=$g_idx;";
echo $sql_wPwd;

if(!$pwd){
    mysqli_query($dbcon, $sql);
}else{
    mysqli_query($dbcon, $sql_wPwd);
};

//db종료
mysqli_close($dbcon);

//페이지 이동
echo "
<script type=\"text/javascript\">
alert(\"수정되었습니다.\");
location.href = \"list.php\";
</script>
";




?>