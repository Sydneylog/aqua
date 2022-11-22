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