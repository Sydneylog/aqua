<?php
//작성자 입력을 위한 session take
include "../inc/session.php";

//이전페이지에서 값 가져오기
$n_head = $_POST["n_head"];
$n_title = $_POST["n_title"];
$n_contents = $_POST["n_contents"];

//작성일자
$n_date = date("Y-m-d");
/*
create table aqua_notice(
    idx int primary key auto_increment,
    n_head varchar(20) not null,
    n_title varchar(100) not null,
    n_contents text not null, 
    u_id varchar(20) not null,
    writer varchar(20) not null,
    n_date datetime,
    m_date datetime,
    views int(11) default 0,
    likes int(11) default 0
); 
*/

//출력 확인 OK
// echo $n_head."<P>";
// echo $n_title."<P>";
// echo $n_contents."<P>";
// echo $n_date;
// echo $s_nick;
// 로그인 안해서 session 값 못받아옴
// exit;
//insert into aqua_notice(n_head, n_title, n_contents, writer, u_id, n_date)values('일반', '공지사항 글작성 테스트5th', '5th 공지사항 테스트 입니다.', '테스터1', 'tester1', '20211011');


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




