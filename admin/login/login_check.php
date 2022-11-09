<?php
if($s_id != "admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자가 아닙니다.\");
            location.href = \"http://localhost/project1/aqua/admin/login/login.php\";
        </script>
    ";
    exit;
};
?>