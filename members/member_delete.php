<?php
include "../inc/dbcon.php";
include "../inc/session.php";
$sql = "delete from marine_friends where idx = $s_idx;";
mysqli_query($dbcon, $sql);
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

mysqli_close($dbcon);

echo"
<script type=\"text/javascript\">
alert(\"정상 처리되엇습니다.\");
location.href =\"../index.php\";
</script>
";




?>