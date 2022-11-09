<?php
<link rel="shorcut icon" type="image/x-icon" href="/images/favicon.ico">
<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
//GNB
    $(".nav> ul > li").mouseenter(function(){
    $(this).find("div").stop().fadeIn("fast");
  });
  $(".nav > ul > li").mouseleave(function(){
    $(this).find("div").stop().fadeOut("fast");
  });
//nav
  $(function(){
$(window).scroll(function(){
let nowScroll = $(document).scrollTop();
if(nowScroll > 50){ 
  $('#nav').css({'top':'0', "height":"50", "font-size":"16px", "transition":"0.2s", "border":"0px", "box-shadow":"1px 1px 10px #8B8B8B"});
  $('#mini_info').stop().animate({'opacity':'1'}, 50);
  $('.logo_wrap').hide(700);
  $(".mini_mapage").stop().fadeIn(50);
  $(".navcon").stop().fadeIn(50);

}else{
    $('#nav').css({'top': '100px', "height":"50","font-size":"16px", "background":"rgb(255, 255, 255)",  "border-bottom":"1px solid #cbcbcb", "box-shadow":"0px 0px 0px #fff"});
    $('#mini_info').stop().animate({'opacity':'0'}, 0);
    $('.logo_wrap').show(500);
    $('.mini_mapage').stop().fadeOut(0);
    $('.navcon').stop().fadeOut(0);

}
  });
});
//pt1Slider

    //slider
    $('.main_image').bxSlider({
    mode:'fade',
    auto:false,
    pause:5000
    });
    
    $('.mini_slide').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        autoplay:true,
        pauseOnHover : true,
        autoplaySpeed :5000,
        fade:true,
        swipe:false
    });
});
</script>
?>