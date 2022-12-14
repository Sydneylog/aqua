<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>롯데월드 아쿠아리움</title>
    <link rel="stylesheet" type="text/css" href="css/sub2.css">
    
    <link rel="shorcut icon" type="image/x-icon" href="/images/favicon.ico">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
     <!-- inc -->
     <script type="text/javascript" src="../js/header.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript">
        $(document).ready(function(){
            
            //GNB
            $(".nav> ul > li").mouseenter(function(){
            $(this).find("ul").stop().slideDown("fast");
          });
          $(".nav > ul > li").mouseleave(function(){
            $(this).find("ul").stop().slideUp("fast");
          });

            //sticky
            $(function(){
			$(window).scroll(function(){
				let nowScroll = $(document).scrollTop();
				if(nowScroll > 49){ 
						$('#nav').css({'top':'0', "height":"70", "font-size":"30px", "padding-top":"10px"});
				}else{
						$('#nav').css({'top': '100px', "height":"50","font-size":"20px", "padding-top":"0px"});
				}
			    });
		    });
        //slideDown이 종료된 이후 이벤트 발생
        $(".pro_pt1").slideDown(800);
        $(".pro_pt2").delay(400).slideDown(500, "swing");
        $(".pro_pt3").delay(800).slideDown(500, "swing");
        $(".pro_pt4").delay(1200).slideDown(500, "swing", function(){
            $(".pro_pt1").hover(function(){
                $(this).stop().animate({"z-index":"10"}, 0, function(){
                    $(this).stop().animate({"width":"400"}, 200, function(){
                        $(this).children("p:eq(0)").animate({"opacity":"1"}, 500);
                        $(this).children("p:eq(0)").animate({"background":"rgb(0, 0, 0, 0.8"}, 500);
                        $(this).children("p:eq(2)").animate({"opacity":"1"}, 500);
                        $(".pro_wrap div").not(this).css({"opacity":"0.2"}, 0)

                    });
                });
            }, function(){
                $(this).stop().animate({"z-index":"1"}, 0, function(){
                    $(this).stop().animate({"width":"300", "left":"0"}, 200, function(){
                        $(this).children("p:eq(0)").animate({"opacity":"0", "left":"0", "width":"320"}, 0); 
                        $(this).children("p:eq(1)").animate({"opacity":"0"}, 0);
                        $(this).children("p:eq(2)").animate({"opacity":"1"}, 500);
                        $(".pro_wrap div").css({"opacity":"1"}, 0)
                    
                    });
                });
            });

            $(".pro_pt2").hover(function(){
                $(this).stop().animate({"z-index":"10"}, 0, function(){
                    $(this).stop().animate({"width":"400"}, 200, function(){
                        $(this).children("p:eq(0)").animate({"opacity":"1"}, 500);
                        $(this).children("p:eq(0)").animate({"background":"rgb(0, 0, 0, 0.8"}, 500);
                        $(".pro_wrap div").not(this).css({"opacity":"0.2"}, 0)
                    });
                });
            }, function(){
                $(this).stop().animate({"z-index":"1"}, 0, function(){
                    $(this).stop().animate({"width":"300", "left":"300px"}, 200, function(){
                        $(this).children("p:eq(0)").animate({"opacity":"0", "left":"0", "width":"320"}, 0); 
                        $(this).children("p:eq(1)").animate({"opacity":"0"}, 0);
                        $(".pro_wrap div").css({"opacity":"1"}, 0)
                    });
                });
            });
     
            $(".pro_pt3").hover(function(){
                $(this).stop().animate({"z-index":"1"}, 0, function(){
                    $(this).stop().animate({"width":"400"}, 200, function(){
                        $(this).children("p:eq(0)").animate({"opacity":"1"}, 500);
                        $(this).children("p:eq(0)").animate({"background":"rgb(0, 0, 0, 0.8"}, 500);
                        $(".pro_wrap div").not(this).css({"opacity":"0.2"}, 0)
                    });
                });
            }, function(){
                $(this).stop().animate({"z-index":"1"}, 0, function(){
                    $(this).stop().animate({"width":"300", "right":"300px"}, 200, function(){
                        $(this).children("p:eq(0)").animate({"opacity":"0", "left":"0", "width":"320"}, 0); 
                        $(this).children("p:eq(1)").animate({"opacity":"0"}, 0);
                        $(".pro_wrap div").css({"opacity":"1"}, 0)
                    });
                });
            });

            $(".pro_pt4").hover(function(){
                $(this).stop().animate({"z-index":"1"}, 0, function(){
                    $(this).stop().animate({"width":"400"}, 200, function(){
                        $(this).children("p:eq(0)").animate({"opacity":"1"}, 500);
                        $(this).children("p:eq(0)").animate({"background":"rgb(0, 0, 0, 0.8"}, 500);
                        $(".pro_wrap div").not(this).css({"opacity":"0.2"}, 0)
                    });
                });
            }, function(){
                $(this).stop().animate({"z-index":"1"}, 0, function(){
                    $(this).stop().animate({"width":"300", "right":"0"}, 200, function(){
                        $(this).children("p:eq(0)").animate({"opacity":"0", "left":"0", "width":"320"}, 0); 
                        $(this).children("p:eq(1)").animate({"opacity":"0"}, 0);
                        $(".pro_wrap div").css({"opacity":"1"}, 0)
                    
                    });
                });
            });
           
            });
            
          

            $(".pro_pt1 button").click(function(){
                $(".pro_pt1").stop().animate({"width":"1200px", "left":"0"}, function(){
                    $(".pro_pt1").children("p:eq(0)").stop().animate({"left":"-220", "width":"380"}, 100);
                    $(".pro_pt1").children("p:eq(1)").stop().animate({"opacity":"1", "top":"275", "right":"200"}, 100);
                    
                });
            });
            $(".pro_pt2").click(function(){
                $(this).stop().animate({"width":"1200px", "left":"0"}, function(){
                    $(this).children("p:eq(0)").stop().animate({"left":"-220", "width":"380"}, 100);
                    $(this).children("p:eq(1)").stop().animate({"opacity":"1", "top":"275", "right":"200"}, 100);
                
                });
            });
            $(".pro_pt3").click(function(){
                $(this).stop().animate({"width":"1200px", "right":"0"}, function(){
                    $(this).children("p:eq(0)").stop().animate({"left":"-220", "width":"380"}, 100);
                    $(this).children("p:eq(1)").stop().animate({"opacity":"1", "top":"275", "right":"200"}, 100);
                
                });
            });

            $(".pro_pt4").click(function(){
                $(this).stop().animate({"width":"1200px", "right":"0"}, function(){
                    $(this).children("p:eq(0)").stop().animate({"left":"-220", "width":"380"}, 100);
                    $(this).children("p:eq(1)").stop().animate({"opacity":"1", "top":"275", "right":"200"});
                
                });
            });
            
        

           $(".hospital").click(function(){
            $(".mini_tank").next().stop().hide();
            $(".startf").next().stop().hide();
            $(this).next().stop().fadeToggle(600, "swing");
            
           });
           $(".mini_tank").click(function(){
            $(".hospital").next().stop().hide();
            $(".startf").next().stop().hide();
            $(this).next().stop().fadeToggle();
           });
           $(".startf").click(function(){
            $(".hospital").next().stop().hide();
            $(".mini_tank").next().stop().hide();
            $(this).next().stop().fadeToggle();
           });




    });    
       





    </script>
    

</head>
<?php
    include "../inc/header.php";
?>
<body>
    <header id="header" class="header">
        <div class="header_wrap">
        <h1 class="main_logo">롯데월드 아쿠아리움</h1>
        <span class="logo_title">Lotte A Q U A R I U M</span>
            <h2 class="blind">주요 메뉴</h2>
            <!-- <div class="top_wrap"> -->
                <dl class="top_menu1">
                    <dt class="blind">빠른 안내</dt>
                    <dd class="top_open">이용 시간</dd>
                    <dd class="top_buy">티켓 구매 바로가기</dd>
                </dl>
                <dl class="top_menu2">
                    <dt class="blind">유틸메뉴</dt>
                    <dd class="top_mapg">My page</dd>
                    <dd class="top_lang">Language</dd>
                </dl>
            <!-- </div> -->
        </div>
        <nav class="nav" id="nav">
            <ul>
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
                <li class="gnb4"><a href="#">온라인 예매</a>
                    <ul>
                        <li><a href="#">티켓 구매</a></li>
                        <li><a href="#">프로그램 구매</a></li>
                    </ul>
                </li>
                <li class="gnb5"><a href="#">새소식&고객의 소리</a>
                        <ul>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">후기 게시판</a></li>
                    </ul> 
                </li>
            </ul>
        </nav>
        </div>
        


</header>

<main id="content" class="content">
    <section class="main_thema">
    <h2><span>보고, 체험</span>하고, 잊지 못할 <span>추억</span>을 만드세요.</h2>
    <p>단순히 보는 것만이 아닌<br>
        체험함으로서 잊지 못할<br>
        추억을 선사합니다.</p>
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
    <section class="sub_thema">
        <h2 class="sub_title">현장 신청 프로그램</h2>
            <ul class="field_pro">
                <li class="hospital_wrap">
                    <div class="hospital">
                        <span class="f_apply">현장신청</span><span> 해양 동물 구조 치료 체험</span> <span>11:00 ~ 18시</span> <span>B2F 동물병원</span>
                    </div>
                    <div>
                        <p>롯데월드 아쿠아리움 해양동물<br> 전문구조치료센터 산하 동물병원에서<br>
                        해양쓰레기로 상처받은 해양동물을 치료해주세요!<br><br>
                        체험가능 연령 : 6세 이상<br>
                        요금 : 7,000원
                        </p>
                    </div>
                </li>
                <li class="mini_wrap">
                    <div class="mini_tank">
                        <span class="f_apply">현장신청</span> 
                        <span>나만의 수조 만들기</span> 
                        <span>10:00 ~ 18시</span> 
                        <span>B2F 플레이존</span>
                    </div>
                    <div>
                        <p>마리모수조: 동글동글한 수초 마리모를 키워 보세요~!<br>
                        구성 : 생물교육, 활동지, 수조셋팅<br>(마리모+수조+바닥재+피규어)<br><br>
                        요금: 마리모 수조 1개 20,000원<br>(마린프렌즈 2천원 할인)
                        </p>
                    </div>
                </li>
                <li class="startf_wrap">
                    <div class="startf">
                        <span class="f_apply">현장신청</span>
                        <span>스타트 마린프렌즈</span>
                        <span>10:30 ~ 18시</span>
                        <span>B2F 플레이존</span>
                    </div>
                    <div>
                        <p>
                            아쿠아리움 캐릭터를 활용한 <br>체험활동을 통해 해양생태계의 소중함을 느껴보고 보전할 수 있는 방법을 찾아봅시다!<br><br>
                            요금안내:1,500원 ~ 10,000원/개<br>(입장료 별도)<br>*마린프렌즈 1천원 할인(일부 제외)
                        </p>
                    </div>
                </li>
            </ul>
    </section>

    <section class="pt3_wrap">
        <h2>진행중인 이벤트</h2>
        <ul class="flip-items">
            <li class="event1">러버덕 프로젝트 서울 2022</li>
            <li class="event2">바다사자의 놀라운 비밀</li>
           <!-- /="event3">준비 중 입니다.</li> -->
        </ul>
    </section>
</main>
<?php
    include "../inc/footer.php";
?>
</body>
</html>