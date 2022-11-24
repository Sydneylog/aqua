<?php
//include "../inc/session.php";
// echo $s_nick;
// exit;
?>
<!-- gsap library & scollPulgin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js" integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollToPlugin.min.js" integrity="sha512-Eenw6RBFiF4rO89LCaB5fkd4WXI4Y7GSRxrLMMWx73dZNcl+dBU3/pJtITD2gTCoEGIf/Ph3spwp0zZnF+UEJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- 구글 메테리얼 -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- 제이쿼리 -->
<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
<style type="text/css">
    @import url(//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css);
/* 주요 컬러
    0d539a 
    002339
    */
    
    head, body, header, footer, main, div, section, nav, ul, li, dl, dt, dd, img, h1, h2, h3, html, br, span, p, address {
        margin: 0px;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    div, section, nav, footer, header h1{
        display: block;
    }
    ol, ul {
        list-style: none;
    }
    
    body{
        font-family:'Spoqa Han Sans Neo', 'sans-serif', "돋움","나눔고딕", "맑은 고딕";
    }
    address{
        font-style:normal; 
    }
    a{
        text-decoration:none;
        color:#000;
        background-color: transparent
    }
    .blind{
        position:absolute;clip:rect(0 0 0 0);width:1px;height:1px;margin:-1px;overflow:hidden
    }
    .inner{
        width:1100px;
        margin:auto;
        position:relative;
    }
    

.header{
    height:149px;
    background:white;
    position:relative;
    border-top:1px solid white;
}
.header_wrap{
    width:1200px;
    height:99px;
    margin:auto;
    position:relative;
} 
.main_logo{
    width:86px;
    height:58px;
    background:url(../images/logo_03.jpg);
    position:absolute;
    bottom:37px;
    left:555px;
    text-indent:-9999px;
}
.logo_title{
    display:block;
    color:#0d539a;
    font-size:24px;
    font-weight:bold;
    position:absolute;
    top:65px;
    left:475px;
}
.nav{
    height:49px;
    width:100%;
    background:white;
    box-sizing:border-box;
    position:fixed;
    color:#002339;
    z-index:99;
    width:100%;
}

.nav>div>ul{
    width:970px;
    height:50px;
    margin:auto;
    box-sizing:border-box;
    position:relative;
    background:white;
    text-align:center;
    
}
.nav>div>ul>li{
    float:left;
    position:relative;
    left:30px;
    z-index:20;
    line-height:49px;
    width:180px;
    font-size:15px;
    
}
.mini_info{
    position:absolute;
    top:0;
    width:150px;
    left:-110px;
    opacity:0;
}
.mini_logo{
    background:url(../images/mini_logo_03.jpg) no-repeat center;
    width:130px;
    height:47px;
    z-index:999;
}
.mini_mapage{
    width:44px;
    height:40px;
    position:absolute;
    right:-150px;
    top:5px;

}



/* 2depth 수정중 */
.nav>div>ul>li {
    box-sizing:border-box;
}
.nav>div>li>a{
    font-size:15px;
    font-weight:900px;
}
.nav>div>ul>li>a:hover{
    padding-bottom:3px;
    color: #0d539a;
    
}
.gnb_menu{
    line-height:40px;
    margin:auto;
    display:none;
}
.gnb_menu a{
    line-height:40px;
    margin:auto;
    display:none;
}

.nav>div>ul>li>ul>li>a{
    color:white;
    display:block;
    padding:20px;
}
.nav>div>ul>li>ul>li>a:hover{
    color:white;
    text-decoration: underline;
    text-underline-offset: 8px;
}
.m_background{
    position:absolute;
    top:49px;
    left:50%;
    margin-left:-960px;
    width:1920px;
    background-color:rgb(0, 0, 0, 0.8);
    background-size:cover;
    height:250px;
    display:none
}

.navcon_wrap{
    position:absolute;
    right:-70px;
    bottom:7px;
    display:flex;
    justify-content:space-between;
}
.navcon{
    display:none;
}
.navcon span{
    margin-right:15px;
}
.material-icons.md-30{
    font-size:30px;
}

.top_wrap{
    position:relative;
}
.event_banner{
    position:absolute;
    left:0px;
    top:15px;
    width:210px;
    height:65px;
}
.event_banner a{
    display:block;
    width:210px;
    height:65px;
    background:url(../images/duck_03.jpg) no-repeat;
}
.event_banner span{
    display:block;
    position:relative;
    top:67px;
    font-size:14px;
    text-align:center;
    color:#0d539a
}
.top_menu{
    width:180px;
    height:30px;
    position:relative;
    top:40px;
    left:650px;
}
.top_open{
    width:202px;
    height:29px;
    position:absolute;
    right:25px;
    top:60px;
    color:#0d539a;
    font-size: 14px;
}
.top_menu2{
    width:250px;
    height:45px;
    position:relative;
    left:1020px;
    top:-10px;
}
.top_menu2 dd a{
    font-size:14px;
    float:left;
    position:relative;
}

.material-icons.md-36{
    font-size:36px;
    margin-right:40px;
}
.login_span{
    position:absolute;
    left:-5px;
    bottom:-13px;
}
.sign_up_span{
    position:absolute;
    left:-10px;
    bottom:-13px;
}
.logout_span{
    position:absolute;
    left:-10px;
    bottom:-13px;
}
.mypage_span{
    position:absolute;
    left:-18px;
    bottom:-13px;
    width:70px;
}
.lang_btn{
    position:absolute;
    top:0px;
    right:35px;
}
.lang_span{
    position:absolute;
    bottom:-13px;
    left:4px;
    font-size:15px;
}
.top_mapg a{
    width:44px;
    height:40px;
}
.top_lang a{
    width:53px;
    height:40px;
}
</style>
<header id="header" class="header">
    <div class="header_wrap">
        <div class="logo_wrap">
            <a href="../index.php">
            <h1 class="main_logo">롯데월드 아쿠아리움</h1>
            <span class="logo_title">Lotte A Q U A R I U M</span>
            </a>
        </div>
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
                        <a href="../login/login.php">
                            <span class="material-icons md-36">login</span>
                            <span class="login_span">로그인</span>
                        </a>

                    </dd>
                    <dd class="join">
                        <a href="../members/Signup2.php">
                            <span class="material-icons md-36">badge</span>
                            <span class="sign_up_span">회원가입</span>
                        </a>
                    </dd>
                    <?php }else{ ?>
                    <dd class="logout">
                        <a href="../login/logout.php">
                            <span class="material-icons md-36">logout</span>
                            <span class="logout_span">로그아웃</span>
                        </a>
                    </dd>
                    <dd class="top_mapg">
                        <a href="../members/member_info.php">
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
                        <a href="../index.php" class="mini_logo" id="mini_logo">
                        </a>
                    </div>
                </div>
                <li class="gnb1">방문 안내
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
                            <a href="../sub/sub1.php">
                            층별 안내
                            </a>
                        </li>
                        <li>
                            <a href="../sub/sub1.php">
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
                        <li><a href="../ticketing/ticketing.php">티켓 구매</a></li>
                        <li><a href="../ticketing/ticketing.php">프로그램 구매</a></li>
                    </ul>
                </li>
                <li class="gnb5">새소식&고객의 소리
                    <ul class="gnb_menu">
                        <li><a href="../notice/list.php">공지사항</a></li>
                        <li><a href="javascript:void(0)">후기 게시판</a></li>
                    </ul>
                </li>
                <div class="navcon_wrap">
                    <?php if(!$s_nick){ ?>
                    <div class="navcon">
                        <a href="../login/login.php">
                        <span class="material-icons md-30">login</span>
                        </a>
                        <a href="../members/Signup2.php">
                        <span class="material-icons md-30">badge</span>
                        </a>
                    </div>
                    <?php }else{ ?>
                    <div class="navcon">
                        <a href="../login/logout.php">
                        <span class="material-icons md-30">logout</span>
                        </a>
                        <a href="../members/member_info.php">
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
<script type="text/javascript">
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
                $('#nav').css({'top': '100px', "height":"50","font-size":"16px", "background":"rgb(255, 255, 255)", "box-shadow":"0px 0px 0px #fff"});
                $('#mini_info').stop().animate({'opacity':'0'}, 0);
                $('.logo_wrap').show(500);
                $('.mini_mapage').stop().fadeOut(0);
                $('.navcon').stop().fadeOut(0);
            }
        });
    });
</script>