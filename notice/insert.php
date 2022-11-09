<?php
//작성자 입력을 위한 session take
include "../inc/session.php";

//이전페이지에서 값 가져오기
$n_head = $_POST["n_head"];
$n_title = $_POST["n_title"];
$n_contents = $_POST["n_contents"];

//작성일자
$n_date = date("Y-m-d");

//출력 확인 OK
// echo $n_head."<P>";
// echo $n_title."<P>";
// echo $n_contents."<P>";
// echo $n_date;
// echo $s_nick;
// 로그인 안해서 session 값 못받아옴
// exit;



//DB연결
include "../inc/dbcon.php";

//db 전송 쿼리
$sql = "insert into aqua_notice(";
$sql .= "n_head, n_title, n_contents, writer, n_date";
$sql .= ") values (";
$sql .= "'$n_head', '$n_title', '$n_contents', '$s_nick', '$n_date'";
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




