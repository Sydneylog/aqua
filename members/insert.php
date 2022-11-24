<?php

$u_id = $_POST["new_id"];
$u_name = $_POST["new_name"];
$pwd = $_POST["new_pass"];
$mobile = $_POST["phone_number"];
$email = $_POST["email1"];
$email2 = $_POST["email2"];
$emailAll = $email."@".$email2;
$ps_code = $_POST["ps_code"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$nick = $_POST["nick"];
$reg_date = date("y-m-d");


//출력 제대로 되는지 확인
/*echo "<p> 아이디:".$u_id."</p>";
echo "<p> 이름:".$u_name."</p>";
echo "<p> 비밀번호:".$pwd."</p>";
echo "<p> 전화번호:".$mobile."</p>";
echo "<p> 이메일:".$emailAll."</p>";
echo "<p> 우편번호:" .$ps_code."</p>";
echo "<p> 기본주소:".$addr1."</p>";
echo "<p> 상세주소:".$addr2."</p>";
echo "<p> 닉네임:".$nick."</p>";
echo "<p> 가입일:".$reg_date."</p>";*/


/*이하의 데이터처리 페이지는
다른 곳에서도 사용하므로 include를 사용하여 외부파일 폴더인 inc에 저장하여 다른 곳에서도 꺼내어 쓸 수 있도록 한다.

//php에서 db접속(변수에 담기)
$dbcon = mysqli_connect("localhost", "root", "", "front") or die("DB 접속 실패 호스트, 사용자, 비밀번호, db명 재확인 필요");
//client측과 db과 utf8이더라도 연결객체인 php가 utf8이 아니면 문자셋 깨지므로 php도 문자셋 설정해야함
mysqli_set_charset($dbcon, "utf8");
*/

//외부파일 불러오기
include "../inc/dbcon.php";
//문자열 누적 합계의 원리를 이용한 변수값 처리 쿼리문
$sql = "insert into marine_friends(";
$sql .= "u_id, u_name, pwd,";
$sql .= "mobile, emailAll,";
$sql .= "ps_code, addr1, addr2,";
$sql .= "nick, reg_date";
$sql .= ") values(";
$sql .= "'$u_id', '$u_name', '$pwd',";
$sql .= "'$mobile', '$emailAll',";
$sql .= "'$ps_code', '$addr1', '$addr2',";
$sql .= "'$nick', '$reg_date')";

//출력 테스트 
//echo $sql;
//원하는 위치에 컬럼 추가
//ALTER TABLE 테이블명 ADD COLUMN 컬럼명 데이터타입 AFTER 컬럼명;

//출력 데이터 db에 바로 전송
mysqli_query($dbcon, $sql);

//백그라운드에서 계속 실행중인 스크립트 종료
mysqli_close($dbcon);


?>


<!--
local host로 접속 
http://localhost/project1/aqua/members/Signup2.html 
-->
<!-- 
*테이블 설계
테이블: aqua_members
아이디 idx int primary key auto_increment
이름   u_id varchar(20) not null
비밀번호 pwd varchar(30) not null
전화번호 mobile varchar(11)
이메일  emailAll varchar(50)
우편번호 ps_code char(5)
기본주소 addr1 char(30)
상세주소 addr2 char(50)
닉네임  nick char(20)
가입일 reg_date datetime

*테이블 생성
create table marine_friends(
    idx int primary key auto_increment,
    u_id varchar(20) not null,
    pwd varchar(30) not null,
    mobile varchar(11), 
    emailAll varchar(50),
    ps_code char(5),
    addr1 char(30),
    addr2 char(50),
    nick char(20),
    reg_date datetime
);
*column 값 수정
alter table aqua_members modify column mobile varchar(11) not null;

*나온 결과 값을 직접 입력한다면
insert into marine_friends(u_id, pwd, mobile, emailAll, ps_code, addr1, addr2, nick, reg_date) values('tester1', '1234' ....);
insert into marine_friends(u_id, pwd, mobile, emailAll, ps_code, addr1, addr2, nick, reg_date) values('tester2', '1234', '01099998888', 'sagioew@naver.com', '51230', '부산시', '해운대구', '테스터2', '20221011');

이런식으로 해야함



 -->
 <script type="text/javascript">
    location.href = "../login/login.php";
</script>
 