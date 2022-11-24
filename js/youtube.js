 // 2. This code loads the IFrame Player API code asynchronously.
 var tag = document.createElement('script');

 tag.src = "https://www.youtube.com/iframe_api";
 var firstScriptTag = document.getElementsByTagName('script')[0];
 firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
 

 // 3. This function creates an <iframe> (and YouTube player)
 //    after the API code downloads.
 function onYouTubeIframeAPIReady() {
    //<div id="player"></div>
     new YT.Player('player', {
     videoId: '0xzIKErd104', //유튜브의 id값 //최초 재생할 유튜브 영상 id (url의 v=이하의 값)
     playerVars: {
        autoplay: 1,
        rel: 0,
        Loop: 1,
        playList: '0xzIKErd104', //반복 재생할 유튜브 영상 id 목록;
        
     },
     events:{
        onReady: function(event) {
            event.target.mute() //음소거
        }
     },
   
   });
 }

