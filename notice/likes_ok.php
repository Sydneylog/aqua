<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$n_id = $_GET['n_id'];
$u_id = $s_id;
$date = date("Y-m-d");
/*

create table likes(
idx int auto_increment primary key,
board_code varchar(50) not null,
u_id varchar(20) not null,
like_state bit(1) default 0,
date datetime
);

*/
$sql = "
update aqua_notice set likes=likes+1 where idx = '$n_id';
update likes set like_state = '1' where board_code = '$n_id'; 
insert into likes(board_code, u_id, date)values('$n_id', '$u_id', '$date');
";
//echo $sql;
//exit;

$reg = mysqli_multi_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
<script type=\"text/javascript\">
    location.href = \"list.php\";
</script>
";






?>