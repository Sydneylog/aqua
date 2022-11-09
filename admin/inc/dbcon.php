<?php
//데이터 처리 페이지
/*처리할 데이터 필요
데이터베이스 연결
자주자주 필요하므로 외부파일로 관리;
*/

//비밀번호 틀릴 경우 알림(die)
$dbcon = mysqli_connect("localhost", "root", "", "front") or die("DB 접속 실패시 출력될 메세지");

//client측과 db가 utf9이더라도 연결객체가 캐릭터셋이 다르면 깨짐
mysqli_set_charset($dbcon, "utf8");
?>