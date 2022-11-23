<?php
if(!$s_idx){
    echo"
    <script type = \"text/javascript\">
    alert(\"잘못된 접근입니다. / 로그인 사용자만 접근 할 수 있습니다.\");
    location.href = \"../login/login.php\";
    </script>
    ";
    exit; //returnfalse
};
?>