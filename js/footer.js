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