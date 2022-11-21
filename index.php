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
        <div class="logo_wrap">
            <h1 class="main_logo">롯데월드 아쿠아리움</h1>
            <span class="logo_title">Lotte A Q U A R I U M</span>
        </div>
        <h2 class="blind">주요 메뉴</h2>
        <!-- <div class="top_wrap"> -->
            <div class="top_wrap">
                <div class="event_banner">
                    <a href="#"><span>Event now</span></a>
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
                    <a href="#" class="lang_btn">
                        <span class="material-icons md-36">language</span>
                        <span class="lang_span">언어</span>
                    </a>
                    <p class="top_open">영업시간 10:00 ~ 20:00</p>
                </dl>
            </div>
    </div>
    <div class="nav" id="nav">
        <ul>
            <div class="mini_info" id="mini_info">
                <div class="mini_slide">
                    <a href="#" class="mini_logo" id="mini_logo"></a>
                </div>
            </div>
            <li class="gnb1"><a href="#">방문 안내</a>
                <ul>
                    <li>
                        <a href="#">이용 요금</a>
                    </li>
                    <li>
                        <a href="#">위치 안내</a>
                    </li>
                    <li>
                        <a href="#">할인 혜택</a>
                    </li>
                </ul>
            </li>
            <li class="gnb2"><a href="#">아쿠아리움 소개</a>
                <ul>
                    <li><a href="#">층별 안내</a></li>
                    <li><a href="#">해양생물 소개</a></li>
                </ul>
            </li>
            <li class="gnb3"><a href="#">프로그램 안내</a>
                <ul>
                    <li><a href="#">프로그램 소개</a></li>
                    <li><a href="#">이달의 이벤트</a></li>
                </ul>
            </li>
            <li class="gnb4"><a href="ticketing/ticketing.php">온라인 예매</a>
                <ul>
                    <li><a href="#">티켓 구매</a></li>
                    <li><a href="#">프로그램 구매</a></li>
                </ul>
            </li>
            <li class="gnb5"><a href="notice/list.php">새소식&고객의 소리</a>
                <ul>
                    <li><a href="#">공지사항</a></li>
                    <li><a href="#">후기 게시판</a></li>
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
</header>

<main id="content" class="content">
    <section class="main_img">
        <h2 class="blind">주요 소식</h2>
            <div class=".slider_wrap">
                <ul class="main_image">
                    <li class="banner_tok">
                        <a href="#">
                            <span class="banner_more">
                            <a href="#">자세히 알아보기</a>
                            </span>
                        </a>
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
                    <a href="#">자세히 보기</a>
                </li>
                
                <li class="pt1_img2">
                    <span></span>
                    <span>위치 안내</span>
                    <a href="#">자세히 보기</a>
                </li>
                <li class="pt1_img3">
                    <span></span>
                    <span>할인 혜택 안내</span>
                    <a href="#">자세히 보기</a>
                </li>
                <li class="pt1_img4">
                    <span></span>
                    <span>주요 해양 생물</span>
                    <a href="sub/sub1.html">자세히 보기</a>
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
                            <img src="" alt="" />
                            <a href="javascript:void(0)" class="btn">자세히 보기</a>
                        </div>
                        <div class="swiper-slide">
                            <img src="" alt="" />
                            <a href="javascript:void(0)" class="btn">자세히 보기</a>
                        </div>
                        <div class="swiper-slide">
                            <img src="" alt="" />
                            <a href="javascript:void(0)" class="btn">자세히 보기</a>
                        </div>
                        <div class="swiper-slide">
                            <img src="" alt="" />
                            <a href="javascript:void(0)" class="btn">자세히 보기</a>
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
            <img src="javacript:void(0)" alt="" class="floating1 circle">
            <img src="javacript:void(0)" alt="" class="floating2 circle">
            <img src="javacript:void(0)" alt="" class="floating3 circle">
        </div>
    </section>

   
    <!-- program intro -->
    <section class="program_introduction">
        <div class="inner">
            <img src="#" alt="" class="program_img">
            <div class="text_group">
                <p class="title"></p>
                <p class="description"></p>
                <div class="more">
                    <a href="javascript:void(0)" class="btn">자세히 보기</a> 
                </div>
            </div>
        </div>
    </section>

    <!-- 2nd program intro -->
    <section class="program_2nd">
        <div class="inner">
            <img src="" class="logo">
            <div class="text_group">
                <p class="title"></p>
                <p class="description"></p>
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
                <p class="title">
                    눈으로 보고 <br>직접 체험해 보세요!
                </p>
                <p class="description1">
                    친구, 연인과 함께 잊지 못할 추억을 만들어 보세요
                </p>
                <p class="description2">
                    롯데 아쿠아리움은 고객들께 활기찬 해양생물들을 보여드릴 뿐만아니라 <br>
                    바닷속을 직접 체험 할 수 있는 기회를 제공하고 있습니다.
                </p>
                <div class="more">
                    <a href="javascript:void(0)" class="btn">자세히 보기</a> 
                </div>
            </div>
            <div>
                <div class="medal">
                    <div class="front">
                        <p>앞</p>
                    </div>
                    <div class="back">
                        <p>뒤</p>
                        <a href="javascript:void(0)" class="btn">위치 안내</a>
                    </div>
                </div>
            </div>
            <img src="" alt="" class="program">
        </div>
    </section>

    <!-- related to 3rd program -->
    <section class="icon_3rd">
      <div class="inner">
        <div class = "medal">
           <div class="front">
            <img src="#" alt="">
          </div>
          <div class="back">
            <img src="#" alt="">
            <a href="#" class="btn">
              프로그램 안내
            </a>
          </div>
        </div>
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

    <!--
    <h2 class="pro_title">Aqaurium 주요 체험 프로그램</h2>
        <div class="pro_wrap">
            <div class="pro_pt1">
                <h3>국내 최대 규모
                    <span>25m</span><br>세이프티 <span>다이빙</span>체험!
                </h3>
                <p>
                    다양한 바다생물들이 눈앞에서<br> 펼쳐지는 롯데월드 아쿠아리움에서 <br>특별한 추억을 남겨 보세요<br><br>수영을 못해도, 잠수를 못해도<br> 전문 강사가 안전하게 아름다운 수중세계를 만끽하게 해드립니다.<br>
                </p>
                <p>
                    *대상: 만 15세 이상/스킨스쿠버 초급수료증 소지자<br>
                    -진행인원:2인<br>
                    - 소요시간 약 110분<br>(교육시간 포함, 잠수시간 20분) *안전줄 부착<br>
                    - 안전수칙 및 프로그램 교육<br>
                    - 다이빙 수트 착의<br>
                    - 입수풀 사전 교육 및 메인수조 입수 체험<br>
                    - 샤워 및 마무리<br>
                </p>
                <button type="button" class="">자세히 보기</button>
            </div>
            <div class="pro_pt2">
                <h3>
                    아쿠아리움에서 단체로<br> 즐기는 <span>나이트 캠프!</span>
                </h3>
                <p>
                    롯데월드 아쿠아리움에서 단체로 즐기는 특별한 하룻밤을 즐겨보세요!
                </p>
                <p>
                    [1일차]
                    - 입장 및 오리엔테이션(일정소개 및 안전교육)
                    - 아쿠아리움 투어 및 체험
                    - 휴식 및 자유시간
                    - 세면 및 취침
                    [2일차]
                    - 기상 및 아침식사 -
                    - 아침 체험
                    - 해산 - 기념사진촬영 및 해산
                </p>
            </div>
            <div class="pro_pt3">
                <h3>
                    SPECIAL<br><span>먹이 주기 체험</span>
                </h3>
                <p>
                    아쿠아리움 도시락
                </p>
                <p>
                    누가 어떤 먹이를 먹는지 같이 확인해봐요!
                    - 대상: 누구나
                    - 소요시간: 20분
                    - 주말, 공휴일 운영
                </p>
            </div>
            <div class="pro_pt4"> 
                <h3>
                    <span>메인 수조<br>피딩 스테이션</span>
                </h3>
                <p>
                    바다를 담은 수조 롯데월드 아쿠아리움의 디오션은 수량 2,190톤 깊이 6.8미터에 국내 최대 가로길이 25M입니다.
                    토, 일요일 12시30분에 진행되는 메인수조 먹이주기는 아쿠아리스트가 직접 해양생물 친구들에게 먹이 주는 모습을 가까이에서관람 하실 수 있습니다.
                </p>
                <p>
                    - 대상:누구나
                    - 일정: 12시 30분 (토, 일요일)
                    - 장소: 지하2층 메인수조 앞
                    - 소요시간: 10분
                </p>
            </div>
            <p class="pro_blur"></p>
        </div>
    </section>
    --

    <section class="part3_wrap">
        <div class="part3_txt">
            <p class="p3_txt1">Aquarium spotlights</p>
            <p class="p3_txt2">아쿠아리움의 가족들을 소개합니다.</p>
        </div>
    
        <h2 class="blind">아쿠아리움의 생물 소개</h2>
            
            <ul class="spt_lights">
                <li class="spt_pcs1"><span  class="txt_bx">라이언 피시</span></li>
                <li class="spt_pcs2"><span  class="txt_bx">만타가오리</span></li>
                <li class="spt_pcs3"><span  class="txt_bx">산호</span></li>
                <li class="spt_pcs4"><span  class="txt_bx">해파리</span></li>
                <li class="spt_pcs5"><span  class="txt_bx">매부리 바다거북</span></li>
                <li class="spt_pcs6"><span  class="txt_bx">펭귄</span></li>
                <li class="spt_pcs7"><span  class="txt_bx">피라냐</span></li>
                <li class="spt_pcs8"><span class="txt_bx">캘리포니아 바다사자</span></li>
            </ul>
            
           
    </section>
    -->
    
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
            <li><a href="#">아쿠아리움 소개</a></li>
            <li><a href="#">사이트맵</a></li>
            <li><a href="#">이용약관</a></li>
            <li><a href="#">개인정보처</a>리방침</li>
            <li><a href="#">영상</a>정보처리 기기운영/관리방침</li>
            <li><a href="#">그룹PR</a></li>
        </ul>   
        
        <div class="etc">
            <div class="etc_pt1">    
                <address>서울특별시 송파구 올림픽로 999</address>
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
})



        //GNB
   
        $(".nav> ul > li").mouseenter(function(){
            $(this).find("ul").stop().fadeIn("fast");
            $("m_background").stop().slideDown("fast");
        });
        $(".nav > ul > li").mouseleave(function(){
            $(this).find("ul").stop().fadeOut("fast");
            $("m_background").stop().slideUp("fast");
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

        })
        
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