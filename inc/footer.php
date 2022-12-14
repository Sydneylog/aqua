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
    <h2 class="footer_logo">????????? ?????? ??????</h2>
        <h3 class="blind">?????? ??? ??????</h3>
        <ul class="footer_intro">
            <li><a href="#">??????????????? ??????</a></li>
            <li><a href="#">????????????</a></li>
            <li><a href="#">????????????</a></li>
            <li><a href="#">???????????????</a>?????????</li>
            <li><a href="#">??????</a>???????????? ????????????/????????????</li>
            <li><a href="#">??????PR</a></li>
        </ul>   
        
        <div class="etc">
            <div class="etc_pt1">    
                <address>??????????????? ????????? ???????????? 999</address>
                <p>?????????: ?????????</p>
                <p>??????: 123-456-789</p>
                <p>??????????????????: happy@happy.com</p>
            </div>
            <div class="etc_pt2">
                <p>????????? ????????????:987-65-43210</p>
                <p>???????????????????????????: ?????? ???9999???</p>
            </div>
            <p class="copy">Copyright 2014 Lotteworld. All Rights    reserved.</p>
        </div>  
       
        <div class="footer_more">
            <h2>????????? ???????????????</h2>
             <!-- input type=select option?????? ????????? ???????????? ?????? ?????? -->
                <button type="button">?????????</button>
                <ul class="fam_list">
                    <li>?????????1</li>
                    <li>?????????2</li>
                    <li>?????????3</li>
                    <li>?????????4</li>
                    <li>?????????5</li>
                    <li>?????????6</li>
                    <li>?????????7</li>
                </ul>
        </div>  
       
        <ul class="isms_bx">
            <li class="isms_logo">ISMS??????</li>
            <div>
            <li>????????????: ????????? ?????? ????????? ??????</li>
            <li>????????????: 2020.11.18~2023.11.17</li>
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
    //?????????
        $(".footer_more").click(function(){
            $(".footer_more ul").stop().slideToggle();
            $(".footer_more button").css({"transform":"rotate(180deg)"});
        });
</script>