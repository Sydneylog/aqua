<?php
// session_start();
// $s_nick = isset($_SESSION["s_nick"])? $_SESSION["s_nick"]:"";
// $s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
include "inc/session.php";
if($s_id != "admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자가 아닙니다.\");
            location.href = \"http://localhost/project1/aqua/admin/login/login.php\";
        </script>
    ";
    exit;
};

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>롯데월드 아쿠아리움</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="shorcut icon" type="image/x-icon" href="../images/favicon.ico">
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="../slick/slick.min.js"></script>
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
						$('#nav').css({'top':'0', "height":"50", "font-size":"16px", "transition":"0.2s", "color":"#fff", "border":"0px", "box-shadow":"1px 1px 10px #8B8B8B"});
                        $('#mini_info').stop().animate({'opacity':'1'}, 50);
                        $('.logo_wrap').hide(700);
                        $(".mini_mapage").stop().fadeIn(50);
				}else{
                        $('#nav').css({'top': '100px', "height":"50","font-size":"16px", "background":"rgb(255, 255, 255)",  "border-bottom":"1px solid #cbcbcb", "color":"#fff", "box-shadow":"0px 0px 0px #fff"});
                        $('#mini_info').stop().animate({'opacity':'0'}, 0);
                        $('.logo_wrap').show(500);
                        $('.mini_mapage').stop().fadeOut(0);

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

            })
            
        



            //part1 코드 줄여보기 연습
            /*$(".pt1_imgbx li").hover(function(){
                $(this).find("span").stop().animate({top:-40}, 600);
            }, function(){
                    $(this).find("span").stop().animate({top:0});
            });
            $(".pt1_imgbx li").hover(function(){
                $(this).children(1).stop().animate({top:-50}, 400);
            }, function(){
                    $(this).children(1).stop().animate({top:0});
            });
            $(".pt1_imgbx li").hover(function(){
                $(this).children(1).stop().animate({opacity:1}, 1000);
            }, function(){
                $(this).children(1).stop().animate({opacity:0});
            });
            */
            
            //part1 icon 동작
            $(".pt1_img1").hover(function(){
                $(".pt1_img1 span:first").stop().animate({top:-40}, 600);
            }, function(){
                    $(".pt1_img1 span:first").stop().animate({top:0});
            });
            $(".pt1_img1").hover(function(){
                $(".pt1_img1 span:eq(1)").stop().animate({top:-50}, 400);
            }, function(){
                    $(".pt1_img1 span:eq(1)").stop().animate({top:0});
            });
            $(".pt1_img1").hover(function(){
                $(".pt1_img1 a:first").stop().animate({opacity:1}, 1000);
            }, function(){
                    $(".pt1_img1 a:first").stop().animate({opacity:0});
            });

            $(".pt1_img2").hover(function(){
                $(".pt1_img2 span:first").stop().animate({top:-40}, 600);
            }, function(){
                    $(".pt1_img2 span:first").stop().animate({top:0});
            });
            $(".pt1_img2").hover(function(){
                $(".pt1_img2 span:eq(1)").stop().animate({top:-50}, 400);
            }, function(){
                    $(".pt1_img2 span:eq(1)").stop().animate({top:0});
            });
            $(".pt1_img2").hover(function(){
                $(".pt1_img2 a:first").stop().animate({opacity:1}, 1000);
            }, function(){
                    $(".pt1_img2 a:first").stop().animate({opacity:0});
            });
            
            $(".pt1_img3").hover(function(){
                $(".pt1_img3 span:first").stop().animate({top:-40}, 600);
            }, function(){
                    $(".pt1_img3 span:first").stop().animate({top:0});
            });
            $(".pt1_img3").hover(function(){
                $(".pt1_img3 span:eq(1)").stop().animate({top:-50}, 400);
            }, function(){
                    $(".pt1_img3 span:eq(1)").stop().animate({top:0});
            });
            $(".pt1_img3").hover(function(){
                $(".pt1_img3 a:first").stop().animate({opacity:1}, 1000);
            }, function(){
                    $(".pt1_img3 a:first").stop().animate({opacity:0});
            });

            $(".pt1_img4").hover(function(){
                $(".pt1_img4 span:first").stop().animate({top:-40}, 600);
            }, function(){
                    $(".pt1_img4 span:first").stop().animate({top:0});
            });
            $(".pt1_img4").hover(function(){
                $(".pt1_img4 span:eq(1)").stop().animate({top:-50}, 400);
            }, function(){
                    $(".pt1_img4 span:eq(1)").stop().animate({top:0});
            });
            $(".pt1_img4").hover(function(){
                $(".pt1_img4 a:first").stop().animate({opacity:1}, 1000);
            }, function(){
                    $(".pt1_img4 a:first").stop().animate({opacity:0});
            });

            //part2 코드 줄여보기 연습
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





            //part2
            /*
            $(".pt2_img1").hover(function(){
                $(".pt2_img1 a span:eq(2)").stop().animate({opacity:0}, 300, function(){
                $(".pt2_img1 a").stop().animate({top:0}, 300, function(){
                        $(".pt2_img1 a span:eq(0)").stop().show(500);
                        $(".pt2_img1 a span:eq(0)").stop().animate({height:50}, 500);
                    });
                    $(".pt2_img1 a span:eq(1)").delay(1210).fadeIn(700);
                });
                }, function(){
                    $(".pt2_img1 a span:eq(1)").stop().hide();
                    $(".pt2_img1 a").stop().animate({top:40}, 300, function(){
                    $(".pt2_img1 a span:eq(0)").stop().animate({height:0}, 0, function(){
                        $(".pt2_img1 a span:eq(0)").stop().hide();
                        $(".pt2_img1 a span:eq(2)").stop().animate({opacity:0.9}, 500);
                    });
                    
                });
            });

            $(".pt2_img2").hover(function(){
                $(".pt2_img2 a").stop().animate({top:0}, 300, function(){
                    $(".pt2_img2 a span:eq(0)").stop().show(500, function(){
                        $(".pt2_img2 a span:eq(0)").stop().animate({height:50}, 500);
                        $(".pt2_img2 a span:eq(2)").stop().animate({opacity:0.87}, 500);
                    });
                    $(".pt2_img2 a span:eq(1)").delay(1210).fadeIn(700);
                });
                
                }, function(){
                    $(".pt2_img2 a span:eq(2)").stop().animate({opacity:0}, 0);
                    $(".pt2_img2 a span:eq(1)").stop().hide();
                    $(".pt2_img2 a").stop().animate({top:40}, 300, function(){
                    $(".pt2_img2 a span:eq(0)").stop().animate({height:0}, 0, function(){
                        $(".pt2_img2 a span:eq(0)").stop().hide();
                    });
                    
                });
            });

            $(".pt2_img3").hover(function(){
                $(".pt2_img3 a").stop().animate({top:0}, 300, function(){
                    $(".pt2_img3 a span:eq(0)").stop().show(500, function(){
                        $(".pt2_img3 a span:eq(0)").stop().animate({height:50}, 500);
                        $(".pt2_img3 a span:eq(2)").stop().animate({opacity:0.87}, 500);
                    });
                    $(".pt2_img3 a span:eq(1)").stop().delay(1210).fadeIn(700);
                });
                
                }, function(){
                    $(".pt2_img3 a span:eq(2)").stop().animate({opacity:0}, 0);
                    $(".pt2_img3 a span:eq(1)").stop().hide();
                    $(".pt2_img3 a").stop().animate({top:40}, 300, function(){
                    $(".pt2_img3 a span:eq(0)").stop().animate({height:0}, 0, function(){
                        $(".pt2_img3 a span:eq(0)").stop().hide();
                    });
                    
                });
            });

            $(".pt2_img4").hover(function(){
                $(".pt2_img4 a").stop().animate({top:0}, 300, function(){
                    $(".pt2_img4 a span:eq(0)").stop().show(500, function(){
                        $(".pt2_img4 a span:eq(0)").stop().animate({height:50}, 500);
                        $(".pt2_img4 a span:eq(2)").stop().animate({opacity:0.87}, 500);
                    });
                    $(".pt2_img4 a span:eq(1)").delay(1210).fadeIn(700);
                });
                
                }, function(){
                    $(".pt2_img4 a span:eq(2)").stop().animate({opacity:0}, 0);
                    $(".pt2_img4 a span:eq(1)").stop().hide();
                    $(".pt2_img4 a").stop().animate({top:40}, 300, function(){
                    $(".pt2_img4 a span:eq(0)").stop().animate({height:0}, 0, function(){
                        $(".pt2_img4 a span:eq(0)").stop().hide();
                    });
                    
                });
            });
            */
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
            
            
            $(".footer_more").click(function(){
                $(".footer_more ul").stop().slideToggle();
                $(".footer_more button").css({"transform":"rotate(180deg)"});
            });

           
            
        });
             
            



         
         
     
    </script>
</head>
<body>
<?php
include "inc/sub_header.html";
?>
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
            <dl class="top_menu1">
                <dt class="blind">시간 안내</dt>
                <dd class="top_open">운영시간 10:00 ~ 20:00</dd>
            </dl>
            <dl class="top_menu2">
                <dt class="blind">유틸메뉴</dt>
               
                <?php if(!$s_nick){?>
                <dd class="login"><a href="login/login.php">로그인</a>
                <dd class="join"><a href="members/Signup2.php">회원가입</a>
                <?php }else{ ?>
                <dd class="logout"><a href="login/logout.php">로그아웃</a>
                <dd class="top_mapg"><a href="members/member_info.php">My page</a></dd><br>
                <span class="welcome"><?php echo $s_id; ?>님 즐거운 하루 되세요!<span> 
                <?php }; ?>
                <dd class="top_lang"><a href="#">Language</a></dd>
            </dl>
            </div>

        <!-- </div> -->
    </div>
    <nav class="nav" id="nav">
        <ul>
            <div class="mini_info" id="mini_info">
                <div class="mini_slide">
                    <a href="#" class="mini_logo" id="mini_logo"></a>
                    
                </div>
            </div>
            <li class="gnb1"><a href="#">방문 안내</a>
                <div>
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
                </div>
            </li>
            <li class="gnb2"><a href="#">아쿠아리움 소개</a>
                <div>
                    <ul>
                        <li><a href="#">층별 안내</a></li>
                        <li><a href="#">해양생물 소개</a></li>
                    </ul>
                </div>
            </li>
            <li class="gnb3"><a href="#">프로그램 안내</a>
                <div>
                    <ul>
                        <li><a href="#">프로그램 소개</a></li>
                        <li><a href="#">이달의 이벤트</a></li>
                    </ul>
                </div>
            </li>
            <li class="gnb4"><a href="#">온라인 예매</a>
                <div>
                    <ul>
                        <li><a href="#">티켓 구매</a></li>
                        <li><a href="#">프로그램 구매</a></li>
                    </ul>
                </div>
            </li>
            <li class="gnb5"><a href="#">새소식&고객의 소리</a>
                <div>
                <ul>
                    <li><a href="#">공지사항</a></li>
                    <li><a href="#">후기 게시판</a></li>
                </ul>
                </div>
            </li>
            
            
            
            <a href="" class="mini_mapage"></a>
        </ul>
        
        <div class="black_back"></div>
    </nav>
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

    <section>
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
                    <a href="#">자세히 보기</a>
                </li>
            </ul>
    </div>
    </section>

    <section>
    <div class="part2_txt">
        <p class="p2_txt1">직접 체험해보세요!</p>
        <p class="p2_txt2">방문하신 분들을 위해 다양한 프로그램을 준비했습니다.</p>
    </div>
    <section class="main_thema">
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











    
    <!-- <div class="pt2_wrap">
        <h2 class="blind">체험 프로그램 안내</h2>
            <ul class="pro_bx">
                <li class="pt2_img1">
                    <a href="#">메인 수족관 다이빙 체험
                        <span></span>
                        <span>국내 최대 규모 25m 메인수조 속에서 펼쳐지는<br>바다 속 풍경을 담은 펀다이빙</span>
                        <span></span>
                    </a>
                </li>
                <li class="pt2_img2">
                    <a href="#">아쿠아리움 나이트 캠프
                        <span></span>
                        <span>
                            롯데월드 아쿠아리움에서<br> 단체로 특별한 하룻밤을 즐겨보세요!</span>
                        <span></span>
                    </a>
                </li>
                <li class="pt2_img3">
                    <a href="#">Special 먹이 주기 체험
                        <span></span>
                        <span>아쿠아리움의 생물들은 어떤 먹이를<br> 먹고 있는지 함께 알아봐요!</span>
                        <span></span>
                    </a>
                </li>
                <li class="pt2_img4">
                    <a href="#">메인 수조 피딩 쇼
                        <span></span>
                        <span>토, 일 하루에 1번만 진행되는 <br>특별한 아쿠아리움의 이벤트!</span>
                        <span></span>
                    </a>
                </li>
            </ul>
    </div> -->
    </section>

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
    
    <section>
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

</body>
</html>