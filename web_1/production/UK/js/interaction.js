function onLoad(){$(".loading").fadeOut(800)}var w,player_0,$players=[player_0],playing_zero=!1,$playing=[playing_zero],index=0;$(function(){function n(n){n.data==YT.PlayerState.PLAYING?($("#star_mounster_cd_thumbnail").hide(),s(),$playing[index]=!0):n.data==YT.PlayerState.PAUSED?(d(),$playing[index]=!1):n.data==YT.PlayerState.ENDED&&(d(),$playing[index]=!1,$("#star_mounster_cd_thumbnail").show())}function e(){$("#main_display_countdown .countdown_numbers_container").fadeOut(700),$("#main_display_countdown .countdown_text_container").fadeIn(700),setTimeout(function(){a()},3e3)}function a(){$("#main_display_countdown .countdown_text_container").fadeOut(700),$("#main_display_countdown .countdown_text_container_2").fadeIn(700),setTimeout(function(){o()},3e3)}function o(){$("#main_display_countdown .countdown_text_container_2").fadeOut(700),$("#main_display_countdown .countdown_numbers_container").fadeIn(700),setTimeout(function(){e()},25e3)}function t(){w>=541?(p="MINUTES",m="SECONDS"):(p="MIN",m="SEC")}function i(){w=window.innerWidth,t()}function s(){$("#main_display_logo_star_monsters").removeClass().addClass("out"),$("#main_display_countdown").removeClass().addClass("out")}function d(){$("#main_display_logo_star_monsters").removeClass().addClass("in"),$("#main_display_countdown").removeClass().addClass("in")}onLoad(),$(".video_thumbnail").mouseenter(function(){$("#sm_cd_player_icon_container").css("background-color","rgb(161,27,34)")}).mouseleave(function(){$("#sm_cd_player_icon_container").css("background-color","rgba(0,0,0, 0.5)")}),window.onYouTubeIframeAPIReady=function(){$players[0]=new YT.Player("player_sm_cd",{events:{onStateChange:n}})},$(".video_thumbnail").on("click",function(){$players[0].playVideo()});var r,c,u,_,l=new Date(Date.UTC(2016,1,4,7,0,0)),p="MIN",m="SEC";$(".content").countdown({date:l,render:function(n){r=this.leadingZeros(n.days,2),$("#days").text(r).append("</br><span>DAYS</span>"),c=this.leadingZeros(n.hours,2),$("#hours").text(c).append("</br><span>HOURS</span>"),u=this.leadingZeros(n.min,2),$("#min").text(u).append("</br><span>"+p+"</span>"),_=this.leadingZeros(n.sec,2),$("#seconds").text(_).append("</br><span>"+m+"</span>")}}),e(),i(),window.addEventListener("resize",function(n){i()});var y=new MobileDetect(window.navigator.userAgent);(y.mobile()||y.tablet())&&$(".video_thumbnail").css("pointer-events","none")});