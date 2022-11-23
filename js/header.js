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
    $(".nav > div > ul > li").mouseenter(function(){
        $(".gnb_menu").stop().css("opacity", '1');
        $(".m_background").stop().fadeIn("fast");
        $(".gnb1 .gnb_menu1>li>a").stop().fadeIn("fast");
        
    });
    $(".nav > div > ul > li").mouseleave(function(){
        $(".gnb_menu").stop().css("opacity", '0');
        $(".m_background").stop().fadeOut("fast");
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