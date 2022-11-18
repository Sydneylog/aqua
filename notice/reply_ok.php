<?php
//작성자 입력을 위한 session take
include "../inc/session.php";

//이전페이지에서 값 가져오기
if(!$s_nick){
    $r_nick = $_POST['r_nick'];
    $u_id = 'none';
    $r_pwd = $_POST['r_pwd'];
}else{
    $nick = $s_nick;
    $u_id = $s_id;
};
$list_id = $_POST['list_id'];
$content = $_POST['r_content'];
$n_date = date('Y-m-d');


if(!$s_nick){
echo $r_nick;
echo $u_id;
echo $r_pwd;
}else{
echo $nick;
echo $u_id;
echo $list_id;
};
echo $content;
echo $n_date;

exit;



//DB연결
include "../inc/dbcon.php";

//db 전송 쿼리
$sql = "insert into aqua_notice(";
$sql .= "n_head, n_title, n_contents, writer, u_id, n_date";
$sql .= ") values (";
$sql .= "'$n_head', '$n_title', '$n_contents', '$s_nick', '$s_id', '$n_date'";
$sql .= ");";

//출력확인 ok - 쉼표 빠져서 ERROR 1136 (21S01): Column count doesn't match value count at row 1 error 뜸
//echo $sql;
//exit;

//db 전송
mysqli_query($dbcon, $sql);

//db 접속 종료
mysqli_close($dbcon);

//리디렉션
echo "
<script type=\"text/javascript\">
    location.href = \"list.php\";
</script>
";
?>




