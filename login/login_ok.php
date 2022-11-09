<?php
session_start();

//로그인 데이터 가져오기
include "../inc/dbcon.php";

$u_id = $_POST["login_id"];
$pwd = $_POST["login_pwd"];


//출력테스트
//echo $u_id. "/" .$pwd;

//검색한 사람(로그인한)의 정보만 불러올 쿼리 작성
$sql = "select idx, u_name, u_id, pwd, nick from marine_friends where u_id = '$u_id';";
//출력테스트
//echo $sql;

/*select의 경우 리턴값이 있기 때문에 변수로 담아서 이후 활용한다 but
 다른 경우에도 언제 또 쓰일지 모르니 변수에 담아 mysqli_query 를 통해 쿼리 값 저장.*/
 $result =  mysqli_query($dbcon, $sql);
 /* db에 저장되어 있는 값을 가져오는 3가지 방법
 1. row but 순서를 조건으로
 mysqli_fetch_row("전송한 쿼리");
 if(u_id == row[0])~~~
 2. array but 문자를 조건으로
 mysqli_fetch_array("전송한 쿼리");
 if($u_id == $array["u_name"] )~~~~
 3.mysqli_num_rows("전송한 쿼리")
 //불린 값으로 없으면 0 있으면 1을 반환함
 */
$num = mysqli_num_rows($result);
//출력테스트
//echo $num; 


 if(!$num){
    echo "
    <script type=\"text/javascript\">
    alert(\"일치하는 아이디가 없습니다.\");
    location.href =\"login.php\";
    </script>
    ";
 }else{
    $array = mysqli_fetch_array($result);
    $g_pwd = $array["pwd"];
    if($pwd != $g_pwd){
        echo"
        <script type=\"text/javascript\">
        alert(\"일치하는 비밀번호가 아닙니다.\");
        location.href =\"login.php\";
        </script>
        ";
    }else{
        echo "
        <script type=\"text/javascript\">
        alert(\"로그인 완료\");
        </script>
        ";
        //비밀번호가가 일치한다는건 정상적인 유저
        //이때 세션을 만들어 준다.
        $_SESSION['s_idx'] = $array['idx'];
        $_SESSION['s_id'] = $array['u_id'];
        $_SESSION['s_name'] = $array['u_name'];
        $_SESSION['s_nick'] = $array['nick'];
        
       
        

       

    };
};

//db 종료

mysqli_close($dbcon);
echo"
<script type = \"text/javascript\">
location.href =\"../index.php\";
</script>
";


?>