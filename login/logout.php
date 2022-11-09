<?php
session_start();

//세션삭제
//unset(세션변수) 로그인 ok에서 만들었던 세션들 모두 종료;
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);
unset($_SESSION["s_nick"]);

echo"
<script type = \"text/javascript\">
location.href =\"../index.php\";
</script>
";
?>