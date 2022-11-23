<style type="text/css">
    /* =============================footer================= */



.footer{
    height:192px;
    width:1200px;
    margin:auto;
    background:white;
    position:relative;
    border-top:1px solid #333;
}

.footer_logo{
    width:86px;
    height:58px;
    background:url(../images/logo_03.jpg) no-repeat;
    position:absolute;
    top:55px;
    left:45px;
    text-indent:-9999px
}

.footer_intro{
    height:18px;
    width:700px;
    display:flex;
    justify-content:space-between;
    position:absolute;
    top:42px;
    left:162px;
    font-size:15px
}
.footer_intro li:not(:last-child)::after{
    content:"|";
    position:relative;
    left:12px;
    font-weight:700;
}
.etc{
    width:635px;
    height:52px;
    position:absolute;
    top:83px;
    left:162px;
    font-size:14px
}
.etc_pt1{
    width:700px;
    height:14px;
    display:flex;
    justify-content:space-between;
}
address::after{
    content:"|";
    position:relative;
    left:15px;
    font-weight:700;
}
.etc_pt1>p:not(:last-child)::after{
    content:"|";
    position:relative;
    left:15px;
    font-weight:700;
}
.etc_pt2{
    width:460px;
    height:14px;
    display:flex;
    justify-content:space-between;
    margin-top:5px;
}
.etc_pt2 p:first-child::after{
    content:"|";
    position:relative;
    left:30px;
    font-weight:700;
}
.copy{
    width:500px;
    height:14px;
    margin-top:5px
}

.footer_more{
    position:absolute;
    top:42px;
    right:42px
}
.footer_more h2{
    background:url(../images/footermore_121.jpg) no-repeat;
    width:192px;
    height:36px;
    text-indent:-9999px;
    position:relative

}
.footer_more button{
    display:block;
    background:url(../images/back_arr_124.png) no-repeat;
    width:10px;
    height:10px;
    text-indent:-9999px;
    display:block;
    position:absolute;
    top:12px;
    right:17px;
    z-index:9;
    border:none;

}
.fam_list{
    width:192px;
    height:80px;
    background:rgb(44, 44, 44);
    box-sizing:border-box;
    padding-left:10px;
    padding-top:5px;
    color:white;
    overflow-y:scroll;
    font-size:16px;
    position:absolute;
    bottom:37px;
    display:none;
}
.fam_list li{
    margin-bottom:8px;
}


.isms_bx{
    width:220px;
    height:33px;
    font-size:11px;
    position:absolute;
    top:100px;
    right:42px;
}
.isms_logo{
    background:url(../images/ismslogo_129.png) no-repeat;
    text-indent:-9999px;
    width:31px;
    height:29px
}
.isms_bx div{
    width:175px;
    height:33px;
    position:absolute;
    top:0;
    right:0
}
</style>
<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
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
<script type="text/javascript">
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
    //계열사
        $(".footer_more").click(function(){
            $(".footer_more ul").stop().slideToggle();
            $(".footer_more button").css({"transform":"rotate(180deg)"});
        });
</script>