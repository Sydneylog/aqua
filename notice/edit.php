<?php
//작성자 전송을 위한 session 가져오기
include "../inc/session.php";

//modify에서 값 받아오기
// echo $_GET["n_idx"];
// exit;
$n_idx = $_GET["n_idx"];
$n_title = $_POST["n_title"];
$n_head = $_POST["n_head"];
$n_contents = $_POST["n_contents"];


//수정일자
$m_date = date("Y-m-d");

//출력 확인
// echo $n_idx;
// echo $n_title;
// echo $n_contents;
// echo $m_date;
// exit;

//db연결
include "../inc/dbcon.php";
//쿼리 작성
$sql ="update aqua_notice set ";
$sql .= "n_title = '$n_title', n_head = '$n_head', n_contents = '$n_contents', m_date = '$m_date' ";
$sql .= "where idx = $n_idx;";

//출력 확인
//echo $sql;
//exit;

//db에 쿼리 전송
mysqli_query($dbcon, $sql);

//db 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
<script type=\"text/javascript\">
alert(\"수정되었습니다.\");
location.href = \"view.php?n_idx=$n_idx\";
</script>
";




?>