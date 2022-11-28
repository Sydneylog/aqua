<?php
include "inc/session.php";
// echo $s_nick;
// exit;
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>롯데월드 아쿠아리움</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <!-- google icons & smybols -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <!-- gsap library & scollPulgin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js" integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollToPlugin.min.js" integrity="sha512-Eenw6RBFiF4rO89LCaB5fkd4WXI4Y7GSRxrLMMWx73dZNcl+dBU3/pJtITD2gTCoEGIf/Ph3spwp0zZnF+UEJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- swiper library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


    <link rel="shorcut icon" type="image/x-icon" href="/images/favicon.ico">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <!-- youtube API -->
    <script defer src="./js/youtube.js"></script>
    
    
</head>
<body>
<header id="header" class="header">
    <div class="header_wrap">
        <a href="index.php">
        <div class="logo_wrap">
            <h1 class="main_logo">
                롯데월드 아쿠아리움
            </h1>
            <span class="logo_title">Lotte A Q U A R I U M</span>
        </div>
        </a>
        <h2 class="blind">주요 메뉴</h2>
        <!-- <div class="top_wrap"> -->
            <div class="top_wrap">
                <div class="event_banner">
                    <a href="javascript:void(0)"><span>Event now</span></a>
                </div>
                <dl class="top_menu">
                    <dt class="blind">시간 안내</dt>
                </dl>
                <dl class="top_menu2">
                    <dt class="blind">유틸메뉴</dt>
                    <?php if(!$s_nick){?>
                    <dd class="login">
                        <a href="login/login.php">
                            <span class="material-icons md-36">login</span>
                            <span class="login_span">로그인</span>
                        </a>

                    </dd>
                    <dd class="join">
                        <a href="members/Signup2.php">
                            <span class="material-icons md-36">badge</span>
                            <span class="sign_up_span">회원가입</span>
                        </a>
                    </dd>
                    <?php }else{ ?>
                    <dd class="logout">
                        <a href="login/logout.php">
                            <span class="material-icons md-36">logout</span>
                            <span class="logout_span">로그아웃</span>
                        </a>
                    </dd>
                    <dd class="top_mapg">
                        <a href="members/member_info.php">
                            <span class="material-icons md-36">manage_accounts</span>
                            <span class="mypage_span">마이페이지</span>
                        </a>
                    </dd><?php }; ?> 
                    <a href="javascript:void(0)" class="lang_btn">
                        <span class="material-icons md-36">language</span>
                        <span class="lang_span">언어</span>
                    </a>
                    <p class="top_open">영업시간 10:00 ~ 20:00</p>
                </dl>
            </div>
    </div>
    <div class="nav" id="nav">
        <div class="inner">
            <ul>
                <div class="mini_info" id="mini_info">
                    <div class="mini_slide">
                        <a href="index.php" class="mini_logo" id="mini_logo">
                        </a>
                    </div>
                </div>
                <li class="gnb1">
                    <ul class="gnb_menu">
                        <li>
                            <a href="javascript:void(0)">이용 요금</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">위치 안내</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">할인 혜택</a>
                        </li>
                    </ul>
                </li>
                <li class="gnb2">아쿠아리움 소개
                    <ul class="gnb_menu">
                        <li>
                            <a href="sub/sub1.php">
                            층별 안내
                            </a>
                        </li>
                        <li>
                            <a href="sub/sub1.php">
                            해양생물 소개
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="gnb3">프로그램 안내
                    <ul class="gnb_menu">
                        <li><a href="javascript:void(0)">프로그램 소개</a></li>
                        <li><a href="javascript:void(0)">이달의 이벤트</a></li>
                    </ul>
                </li>
                <li class="gnb4">온라인 예매
                    <ul class="gnb_menu">
                        <li><a href="ticketing/ticketing.php">티켓 구매</a></li>
                        <li><a href="ticketing/ticketing.php">프로그램 구매</a></li>
                    </ul>
                </li>
                <li class="gnb5">새소식&고객의 소리
                    <ul class="gnb_menu">
                        <li><a href="notice/list.php">공지사항</a></li>
                        <li><a href="javascript:void(0)">후기 게시판</a></li>
                    </ul>
                </li>
                <div class="navcon_wrap">
                    <?php if(!$s_nick){ ?>
                    <div class="navcon">
                        <a href="login/login.php">
                        <span class="material-icons md-30">login</span>
                        </a>
                        <a href="members/Signup2.php">
                        <span class="material-icons md-30">badge</span>
                        </a>
                    </div>
                    <?php }else{ ?>
                    <div class="navcon">
                        <a href="login/logout.php">
                        <span class="material-icons md-30">logout</span>
                        </a>
                        <a href="members/member_info.php">
                        <span class="material-icons md-30">manage_accounts</span>
                        </a>
                    </div>
                    <?php } ?>    
                <div>
            </ul>
            <div class="m_background"></div>
        </div>
    </div>
</header>

<main id="content" class="content">
    <section class="main_img">
        <h2 class="blind">주요 소식</h2>
            <div class=".slider_wrap">
                <ul class="main_image">
                    <li class="banner_tok"> 
                    <!-- <p>서울 한 가운데서 해양생물과</P> 
                    <p>교감을 나눌 수 있는 곳</P> -->
                    </li> 
                    <!-- <li class="main_int1"></li>
                    <li class="main_int2"></li>
                    <li class="main_int3"></li> -->
                </ul>
            </div>
    </section>

    <!-- 메인 이용안내 메뉴-->
    <section class="menu_box">
        <div class="part1_txt">
            <p class="p1_txt1">SHARE THE DREAM</p>
            <p class="p1_txt2">650종, 55,000마리의 해양 생물들이 당신을 기다리고 있습니다.</p>
        </div>
        <div class="pt1_wrap">
            <div class="info_wrap">
                <h2 class="pt1_info">아쿠아리움 방문 안내 메뉴</h2>
            </div>
            <ul class="pt1_imgbx">
                <li class="pt1_img1">
                    <span></span>
                    <span>이용 안내</span>
                    <a href="javascript:void(0)">자세히 보기</a>
                </li>
                
                <li class="pt1_img2">
                    <span></span>
                    <span>위치 안내</span>
                    <a href="javascript:void(0)">자세히 보기</a>
                </li>
                <li class="pt1_img3">
                    <span></span>
                    <span>할인 혜택 안내</span>
                    <a href="javascript:void(0)">자세히 보기</a>
                </li>
                <li class="pt1_img4">
                    <span></span>
                    <span>주요 해양 생물</span>
                    <a href="sub/sub1.php">자세히 보기</a>
                </li>
            </ul>
        </div>
        <div class="info_box">
            <div class="info_etc_wrap">
                <div class="etc_left_bg"></div>
                <div class="etc_right_bg"></div>
                <div class="inner">
                    <div class="inner_left">
                        <h2>공지사항</h2>
                        <!-- swiper v7-8 -->
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php
                                    include "./inc/dbcon.php";
                                    $alarm_sql = "select * from aqua_notice order by idx desc limit 0, 4;";
                                    $alarm_result = mysqli_query($dbcon, $alarm_sql);
                                    $i = 4;
                                    while($alarm_array = mysqli_fetch_array($alarm_result)){
                                ?>
                                <div class="swiper-slide">
                                    <a href="./notice/view.php?n_idx=<?php echo $alarm_array['idx'] ?>">
                                        <?php 
                                        echo "[" . $alarm_array['n_head'] . "]";
                                        echo " " . $alarm_array['n_title']; 
                                        ?>
                                    </a>
                                </div>
                                <?php 
                                $i--;
                                } ?>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="notice_more">
                            <span class="material-icons md-30">add_circle</span>
                        </a>  
                    </div>
                    <div class="inner_right">
                        <h2>진행중인 이벤트</h2>
                        <div class="toggle-promotion">
                            <span class="material-symbols-outlined material-icons">
                                expand_circle_down
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promotion">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/promotion_w_03.jpg" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/garbage_03.jpg" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/badasaja_03.jpg" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="images/gachi_03.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-prev">
                    <div class="material-icons">arrow_back</div>
                </div>
                <div class="swiper-next">
                    <div class="material-icons">arrow_forward</div>
                </div>
            </div>
        </div>
    </section>

    <!-- rewards -->
    <section class="reward">
        <div class="part2_box">
            <div class="character_box">
                <img src="images/membershipC.png" alt="">
            </div>
            <div class="part2_text_box">
                <p class="p2_txt1">
                    마린 프렌즈가 되면 특별한 혜택을 받을 수 있어요!
                </p>
                <p class="p2_txt2">
                    마린 프렌즈가 되어 특별한 혜택을 누려보세요.<br>
                    티켓 할인 및 부가 서비스가 제공 되고 있습니다.
                </p>
                <div class="part2_btn_box">
                    <a href="members/Signup2.php">
                        <div class="membership_btn">멤버십 가입</div>
                    </a>
                    <a href="login/login.php">
                        <div class="membership_btn">로그인</div>
                    </a>
                    
                <div>
            </div>
        </div>
    </section>


    <!-- 56.25%의 패딩탑은 영상등의 16:9비율을 유지하기 위한 기술 -->
    <!-- youtube video -->
    <section class="youtube">
        <div class="youtube_area">
            <div id="player"></div>
        </div>
        <div class="youtube_cover"></div>
        <div class="inner">
            <p class="seafood_intro">650종의 다양한 해양생물들이<br> 당신을 기다리고 있습니다.</p>
            <a href="sub/su1.php" class="seafood_btn">자세히 보기</a>
            <img src="images/sptlights_picsA_72.jpg" alt="" class="floating1 circle">
            <img src="images/sptlights_pcsB_67.jpg" alt="" class="floating2 circle2">
            
        </div>
    </section>

   
    <!-- program intro -->
    <section class="program_introduction">
        <div class="inner">
            <img src="images/pt2_simg_03.jpg" alt="" class="floating3 circle" id="floating3">
            <img src="images/silas-hao-XgIwVSXhHHw-unsplash.jpg" alt="" class="program_img">
            <div class="text_group">
                <p class="title">
                    <span class="royalblue">국내 최대</span> 규모 <span class="royalblue">25m</span>&nbsp세이프티 다이빙체험!
                </p>
                <p class="description">
                    &nbsp다양한 바다생물들이 눈앞에서 펼쳐지는 아쿠아리움에서 
                    특별한 추억을<br> 남겨 보세요<br><br>&nbsp수영을 못해도, 잠수를 못해도 
                    전문 강사가 안전하게 수중세계를 만끽하게<br> 해드립니다.
                <div class="more">
                    <a href="javascript:void(0)" class="btn">자세히 보기</a> 
                </div>
            </div>
        </div>
    </section>

    <!-- 2nd program intro -->
    <section class="program_2nd">
        <div class="inner">
            <img src="images/nightcamp_01.jpg" class="program_img2">
            <div class="text_group">
                <p class="title">
                    아쿠아리움에서 <span class="royalblue">단체</span>로 즐기는 <span class="royalblue">나이트 캠프!</span>
                </p>
                <p class="description">
                    &nbsp밤새 아쿠아리움 투어 및 체험을 하며 가족 & 친구들과 신나는 시간을<br> 보낼 수 있습니다!
                    <br><br>&nbsp나이트 캠프는 1박 2일의 일정으로 진행됩니다.
                </p>    
                <div class="more">
                <a href="javascript:void(0)" class="btn">자세히 보기</a> 
            </div>
        </div>
        <img src="" alt="" class="program">
        </div>
    </section>

    <!-- 3rd program intro -->
    <section class="program_3rd">
        <div class="inner">
            <img src="" class="logo">
            <div class="text_group">
                <p class="title">눈으로 보고</p>
                <p class="title2">직접 체험하고!</p>
                
                <p class="description1">
                    친구, 연인과 함께<br> 잊지 못할 추억을 만들어 보세요
                </p>
                <p class="description2">
                    &nbsp 롯데 아쿠아리움은 고객들께 활기찬 해양생물들을 보여드릴 뿐만아니라 바닷속을 직접 체험 할 수 있는 기회를 제공하고 있습니다.
                    
                </p>
                <div class="more">
                    <a href="javascript:void(0)" class="btn grey">후기 보러 가기</a> 
                </div>
            </div>
            <div>
                <div class="medal">
                    <div class="front">
                        <img src="images/zone_img_27.jpg" alt="">
                    </div>
                    <div class="back">
                        <img src="images/pt2_img1.png" alt="">
                        <a href="javascript:void(0)" class="btn">주말 특별 이벤트 확인!</a>
                    </div>
                </div>
            </div>
            <img src="" alt="" class="program">
        </div>
    </section>

   
    
    <!-- location -->
    <section class="location">
      <div class="inner">
        <img src="" alt="" class="">
        <img src="" alt="" class="">
      </div>
    </section>

    <!--스크롤 위치계산  js 라이브러리 사용 scrollMagic CDN-->
    
    <section class = etc_box>
        <div class="part4_txt">
            <p class="p4_txt1">롯데월드 아쿠아리움이 추천합니다.</p>
            <p class="p4_txt2">아쿠아리움과 함께하면 즐거움이 배로!</p>
        </div>
        <div class="pt4_img">
            <h2 class="att_title">그밖의 즐길거리</h2>
                <ul class="pt4_contbx">
                    <li class="pt4_cont1">아쿠아리움 사람들의 이야기
                        <a href="" class="pt4_more">more</a>
                    </li>
                    <li class="pt4_cont2">롯데월드
                        <a href="" class="pt4_more">more</a>
                    </li>
                    <li class="pt4_cont3">롯데타워 스카이 라운지
                        <a href="" class="pt4_more">more</a>
                    </li>
                </ul>
            
            <h2 class="sns_title">아쿠아리움 공식 SNS 방문하기</h2>
                <ul class="sns_bx">
                    <li class="insta">인스타그램</li>
                    <li class="fb">페이스북</li>
                </ul>
        </div>
    </section>
</main>

<footer id="footer" class="footer"> 
    <h2 class="footer_logo">사이트 이용 안내</h2>
        <h3 class="blind">약관 및 정책</h3>
        <ul class="footer_intro">
            <li><a href="javascript:void(0)">아쿠아리움 소개</a></li>
            <li><a href="javascript:void(0)">사이트맵</a></li>
            <li><a href="javascript:void(0)">이용약관</a></li>
            <li><a href="javascript:void(0)">개인정보처</a>리방침</li>
            <li><a href="javascript:void(0)">영상</a>정보처리 기기운영/관리방침</li>
            <li><a href="javascript:void(0)">그룹PR</a></li>
        </ul>   
        
        <div class="etc">
            <div class="etc_pt1">    
                <div><address>서울특별시 송파구 올림픽로 999</address></div>
                <p>대표자: 김철수</p>
                <p>전화: 123-456-789</p>
                <p>전자우편주소: happy@happy.com</p>
            </div>
            <div class="etc_pt2">
                <p>사업자 등록번호:987-65-43210</p>
                <p>통신판매업신고번호: 송파 제9999호</p>
            </div>
            <p class="copy">Copyright 2014 Lotteworld. All Rights    reserved.</p>
        </div>  
       
        <div class="footer_more">
            <h2>계열사 관련사이트</h2>
             <!-- input type=select option으로 바꾸고 스크립트 작성 필요 -->
                <button type="button">더보기</button>
                <ul class="fam_list">
                    <li>계열사1</li>
                    <li>계열사2</li>
                    <li>계열사3</li>
                    <li>계열사4</li>
                    <li>계열사5</li>
                    <li>계열사6</li>
                    <li>계열사7</li>
                </ul>
        </div>  
       
        <ul class="isms_bx">
            <li class="isms_logo">ISMS인증</li>
            <div>
            <li>인증범위: 온라인 예매 서비스 운영</li>
            <li>유효기간: 2020.11.18~2023.11.17</li>
            </div>
        </ul>
</footer>

<div id="toTopArrow">
    <div class="material-icons">arrow_upward</div>
</div>






<?php
//관리자 이동 도우미 
if($s_id == "admin" || $s_id == "manager"){
    echo include "inc/sub_header.html";
};
?>

<script defer type="text/javascript">
const toTopEl = document.querySelector("#toTopArrow");
    //start w/ window js
window.addEventListener("scoll", _.throttle(function(){
    console.log(window.scollY);

    
    if (window.scollY > 500) {
        
        gsap.to(toTopEl, .2, {
            x: 0
        });
    } else {

        //to_to_show
        gsap.to(toTopEl, .2, {
            x: 100
        });
    }
}));

toTopEl.addEventListener('click', () => {gsap.to(window, .7, {
    scrollTo: 0
    });
});
    //GNB
    $(".nav > div > ul > li").mouseenter(function(){
        $(".gnb_menu").stop().slideDown("fast");
        $(".m_background").stop().fadeIn("fast");
        $(".gnb_menu>li>a").stop().slideDown("fast");
        
    });
    $(".nav > div > ul > li").mouseleave(function(){
        $(".gnb_menu").stop().slideUp("fast");
        $(".m_background").stop().fadeOut("fast");
        $(".gnb_menu>li>a").stop().slideUp("fast");
    });

    //sticky nav
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

        //part1 icon 동작
        $(".pt1_imgbx>li").hover(function(){
            $(this).find("span:eq(0)").stop().animate({top:-40}, 600);
        }, function(){
            $(this).find("span:eq(0)").stop().animate({top:0});
        });
        $(".pt1_imgbx>li").hover(function(){
            $(this).find("span:eq(1)").stop().animate({top:-50}, 400);
        }, function(){
            $(this).find("span:eq(1)").stop().animate({top:0});
        });
        $(".pt1_imgbx>li").hover(function(){
            $(this).find("a").stop().animate({opacity:1}, 1000);
        }, function(){
            $(this).find("a").stop().animate({opacity:0});
        });

        //etc notice & event slider new Swiper(선택자, 옵션)
        new Swiper('.info_etc_wrap .swiper', {
            direction:'vertical',
            autoplay: true,
            loop: true
        });
        //promotion slider
        new Swiper('.promotion .swiper', {
            slidesPerView: 3,
            spaceBetween:10,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 5000
            },
            pagination: {
                el: '.promotion .swiper-pagination',
                clickable: true
            },
            navigation: {
                prevEl:'.promotion .swiper-prev',
                nextEl: '.promotion .swiper-next'
            }
        });

        //toggle silder
        const promotionEl = document.querySelector(".promotion");
        const promotionToggleBtn = document.querySelector('.toggle-promotion');
        let isHidePromotion = false; //즉 보이고 있다
        promotionToggleBtn.addEventListener('click', function(){
            isHidePromotion = !isHidePromotion 
            if (isHidePromotion) {
                //숨김
                promotionEl.classList.add('hide_promotion');
            } else {
                //보임
                promotionEl.classList.remove('hide_promotion');
            }
        });
      
        
        //youtube mioni picutres
        function random(min, max) {
            return parseFloat((Math.random() * (max - min) + min).toFixed(2));
        }
        function floatingObject(selector, delay, size) {
            //gsap.to(요소, 시간, 옵션);
            gsap.to(
                selector, 
                random(1.5, 2.5), {
                    y: size,
                    repeat: -1,
                    yoyo: true,
                    ease: Power1.easeInOut,
                    delay: random(0, delay)
                }
            );
        }
        floatingObject('.floating1', 1, 15);
        floatingObject('.floating2', .5, 15);
        floatingObject('.floating3', 1.5, 20);

        


        //part3 slick plugin
        $('.spt_lights').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4.5,
            slidesToScroll: 1,
            arrows:true,
            prevArrow : "<button type='button' class='slick-prev'>이전</button>",        
            nextArrow : "<button type='button' class='slick-next'>다음</button>",
            autoplay:true,
            pauseOnHover : true,
            autoplaySpeed : 5000,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
            });
            
        //계열사
        $(".footer_more").click(function(){
            $(".footer_more ul").stop().slideToggle();
            $(".footer_more button").css({"transform":"rotate(180deg)"});
        });

        //scollMagic applier - 각 적절한 섹션 파트에 추가함
        const spyEls = document.querySelectorAll('section.scroll-spy');
        spyEls.forEach(function(spyEl){
          // new(생성자 함수를 사용하여 함수 실행시킴)와 같이 Scene(각 위치의 요소들 감시 메소드)메소드 사용하여
          //메소드체이닝은 하기처럼 작성 가능
          new ScrollMagic
            .Scene({
              triggerElement:spyEl, //감시하려는 대상인 spyEL 요소를 지정 
              triggerHook: .8 //0~1사이인 0.8에 hook걸려 있다는 의미
            })
            .setClassToggle(spyEl/*대상요소*/, 'show'/*부여하려는 클래스 이름*/)
            .addTo(new ScrollMagic.Controller());
        });
        //애니메이션은 되도록 css자체에서 제어하도록 하는게 좋다 부하관리


    </script>


</body>
</html>