<?php
$g_idx = $_GET["g_idx"];
include "../inc/dbcon.php";
include "../inc/session.php";
$sql = "delete from marine_friends where idx = $g_idx;";
mysqli_query($dbcon, $sql);


mysqli_close($dbcon);

echo"
<script type=\"text/javascript\">
alert(\"정상 처리되엇습니다.\");
location.href =\"list.php\";
</script>
";




?>