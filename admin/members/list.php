<?php
include "../inc/session.php";
include "../login/login_check.php";

//db연결
include "../inc/dbcon.php";
//쿼리작성()
$sql = "select * from marine_friends;";
//쿼리 전송
$result = mysqli_query($dbcon, $sql);
//전체 데이터 가져오기
$total = mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원관리</title>
    <style>
        body{font-size:20px}
        a{text-decoration:none;margin:0 5px}

        table, td{
            border-collapse:collapse
        }
        th, td{
            padding:10px;
            font-size:16px;
            text-align:center
        }
        .mem_list_set{
            width:1440px
        }
        .mem_list_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999
        }
        .mem_list_content{
            border-bottom:1px solid #999;
        }
        .no{width:40px}
        .u_name{width:60px}
        .u_id{width:100px}
        .mobile{width:120px}
        .birth{width:100px}
        .emailAll{width:180px}
        .address{width:360px}
        .gender{width:40px}
        .reg_date{width:120px}
        .modify{width:120px}


    </style>    
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>

    <p>전체 회원수 <?php echo $total; ?> 명</p>
    <table class="mem_list_set">
        <tr class="mem_list_title">
            <th class ="no">번호</th> 
            <th class ="u_id">아이디</th> 
            <th class ="u_name">이름</th> 
            <th class ="mobile">전화번호</th> 
            <th class ="emailAll">이메일</th> 
            <th class ="address">주소</th> 
            <th class ="nick">닉네임</th> 
            <th class ="reg_date">가입일</th> 
            <th class ="modify">관리</th> 
        </tr>
        <?php
        //테이블 생성 반복문
        for($i = 1; $i <= $total; $i++){
            $array = mysqli_fetch_array($result);
        ?>
        <tr class="mem_list_content">
            <td><?php echo $i; ?></td>
            <td><?php echo $array["u_id"]; ?></td>
            <td><?php echo $array["u_name"]; ?></td>
            <td><?php echo $array["mobile"]; ?></td>
            <td><?php echo $array["emailAll"]; ?></td>
            <?php 
             $address = $array["ps_code"]." ".$array["addr1"]." ".$array["addr2"]; 
            ?>
            <td><?php echo $address; ?></td>
            <td><?php echo $array["nick"]; ?></td>
            <td><?php echo $array["reg_date"]; ?></td>
            <td>
                <a href="member_info.php?g_idx=<?php echo $array['idx']; ?>">[수정]</a>
                <a href='#' onclick="mem_del(<?php echo $array['idx']; ?>)">[삭제]</a>
            </td>
        </tr>
        <?php
        };
        ?>
    </table>     
<script type="text/javascript">
    function mem_del(g_no){
        let rtn_val = confirm("정말 삭제하시겠습니까?");
        if(rtn_val == true){
            location.href = "member_delete.php?g_idx=" + g_no;
        };
    };

</script>



</body>
</html>




