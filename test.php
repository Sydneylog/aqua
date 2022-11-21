<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
<?php
// include "./inc/dbcon.php";  
// $alarm_sql = "select * from aqua_notice order by idx desc limit 0, 3;";
// $alarm_result = mysqli_query($dbcon, $alarm_sql);
// $i = 4;
// while($alarm_array = mysqli_fetch_array($alarm_result)){
?>
<div class='1'>
<?php
include "./inc/dbcon.php";  
?>
<div class='2'>
<?php
// include "./inc/dbcon.php";  
// $alarm_sql = "select * from aqua_notice order by idx desc limit 0, 3;";
// $alarm_result = mysqli_query($dbcon, $alarm_sql);
// $i = 4;
// while($alarm_array = mysqli_fetch_array($alarm_result)){
?>


<div class="swiper">
 
    <div class="swiper-wrapper">
      <?php
      $alarm_sql = "select * from aqua_notice order by idx desc limit 0, 3;";
      $alarm_result = mysqli_query($dbcon, $alarm_sql);
      $i = 4;
      while($alarm_array = mysqli_fetch_array($alarm_result)){
      ?>
      <?php
        echo '<div class="swiper-slide">';
        echo    '<a href="javscript:void(0)">';
          echo "[" . $alarm_array['n_head'] . "]";
          echo " " . $alarm_array['n_title']; 
        echo    '</a>';
        echo '</div>';
        ?>
    </div>
  <?php 
    $i--;
    } 
  ?>






<?php
                                //     include "./inc/dbcon.php";
                                //     $alarm_sql = "select * from aqua_notice order by idx desc limit 0, 4;";
                                //     $alarm_result = mysqli_query($dbcon, $alarm_sql);
                                //     $i = 4;
                                //     while($alarm_array = mysqli_fetch_array($alarm_result)){
                                // ?>
                                <!-- //     <div class="swiper-slide">
                                //         <a href="javscript:void(0)">
                                //             <?php  -->
                                //             echo "[" . $alarm_array['n_head'] . "]";
                                //             echo " " . $alarm_array['n_title']; 
                                //             ?>
                                //         </a>
                                //     </div>
                                //     <?php 
                                // $i--;
                                // } ?>
</div>


</body>
</html>



