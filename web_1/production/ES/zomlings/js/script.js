function onLoad(){$(".loading").fadeOut(800),$("body").css("overflow-y","scroll")}var index=0,$series=["series_one","series_two","series_three","series_four","special"],$series_colors=["rgb(190,22,33)","rgb(255,163,0)","rgb(119,188,31)","rgb(150,51,158)","rgb(0,114,175)"],playing_zero=!1,playing_one=!1,playing_two=!1,playing_three=!1,$playing=[playing_zero,playing_one,playing_two,playing_three],player_0,player_1,player_2,player_3,$players=[player_0,player_1,player_2,player_3],$series_galleries=[['url("img/s1/gallery/img_one.png")','url("img/s1/gallery/img_two.png")','url("img/s1/gallery/img_three.png")'],['url("img/s2/gallery/img_one.png")','url("img/s2/gallery/img_two.png")','url("img/s2/gallery/img_three.png")'],['url("img/s3/gallery/img_one.png")','url("img/s3/gallery/img_two.png")','url("img/s3/gallery/img_three.png")'],['url("img/s4/gallery/img_one.png")','url("img/s4/gallery/img_two.png")','url("img/s4/gallery/img_three.png")']],$series_gallery_index=[0,0,0,0,0],gallery_index;$(function(){function e(){thumbnail1=new Image,thumbnail1.src="img/s1/s1_thumbnail.png",thumbnail2=new Image,thumbnail2.src="img/s2/s2_thumbnail.png",thumbnail3=new Image,thumbnail3.src="img/s3/s3_thumbnail.png",thumbnail4=new Image,thumbnail4.src="img/s4/s4_thumbnail.png",gallery_1_1=new Image,gallery_1_1.src="img/s1/gallery/img_one.png",gallery_1_2=new Image,gallery_1_2.src="img/s1/gallery/img_two.png",gallery_1_3=new Image,gallery_1_3.src="img/s1/gallery/img_three.png",gallery_2_1=new Image,gallery_2_1.src="img/s2/gallery/img_one.png",gallery_2_2=new Image,gallery_2_2.src="img/s2/gallery/img_two.png",gallery_2_3=new Image,gallery_2_3.src="img/s2/gallery/img_three.png",gallery_3_1=new Image,gallery_3_1.src="img/s3/gallery/img_one.png",gallery_3_2=new Image,gallery_3_2.src="img/s3/gallery/img_two.png",gallery_3_3=new Image,gallery_3_3.src="img/s3/gallery/img_three.png",gallery_4_1=new Image,gallery_4_1.src="img/s4/gallery/img_one.png",gallery_4_2=new Image,gallery_4_2.src="img/s4/gallery/img_two.png",gallery_4_3=new Image,gallery_4_3.src="img/s4/gallery/img_three.png"}function i(){$("#"+$series[index]).hide(),$("#"+$series[index]+"_info").hide(),1==$playing[index]&&($players[index].stopVideo(),g())}function n(){$("#"+$series[index]+"_video_thumbnail").show()}function l(e){e.data==YT.PlayerState.PLAYING?($("#"+$series[index]+"_video_thumbnail").hide(),_(),$playing[index]=!0):e.data==YT.PlayerState.PAUSED?(g(),$playing[index]=!1):e.data==YT.PlayerState.ENDED&&(g(),$playing[index]=!1,n())}function a(e){e.data==YT.PlayerState.PLAYING?($("#"+$series[index]+"_video_thumbnail").hide(),_(),$playing[index]=!0):e.data==YT.PlayerState.PAUSED?(g(),$playing[index]=!1):e.data==YT.PlayerState.ENDED&&(g(),$playing[index]=!1,n())}function s(e){e.data==YT.PlayerState.PLAYING?($("#"+$series[index]+"_video_thumbnail").hide(),_(),$playing[index]=!0):e.data==YT.PlayerState.PAUSED?(g(),$playing[index]=!1):e.data==YT.PlayerState.ENDED&&(g(),$playing[index]=!1,n())}function r(e){e.data==YT.PlayerState.PLAYING?($("#"+$series[index]+"_video_thumbnail").hide(),_(),$playing[index]=!0):e.data==YT.PlayerState.PAUSED?(g(),$playing[index]=!1):e.data==YT.PlayerState.ENDED&&(g(),$playing[index]=!1,n())}function _(){$("#main_display_logo_zomlings").removeClass().addClass("out")}function g(){$("#main_display_logo_zomlings").removeClass().addClass("in")}onLoad(),e(),$(".control_left_container").on("click",function(){$("#"+$series[index]+"_menu_item").removeClass("on").addClass("off"),i(),0==index?index=$series.length-1:index-=1,$("#series_selector").removeClass().addClass($series[index]+"_selector"),$("#"+$series[index]).show(),$("#"+$series[index]+"_info").show(),$("#"+$series[index]+"_menu_item").removeClass("off").addClass("on"),$("#"+$series[index]+"_index_item").removeClass("off").addClass("on")}),$(".control_right_container").on("click",function(){$("#"+$series[index]+"_menu_item").removeClass("on").addClass("off"),$("#"+$series[index]+"_index_item").removeClass("on").addClass("off"),i(),index==$series.length-1?index=0:index+=1,$("#series_selector").removeClass().addClass($series[index]+"_selector"),$("#"+$series[index]).show(),$("#"+$series[index]+"_info").show(),$("#"+$series[index]+"_menu_item").removeClass("off").addClass("on"),$("#"+$series[index]+"_index_item").removeClass("off").addClass("on")}),$(document).on("click",".main_display_series_menu ul li.off",function(){$("#"+$series[index]+"_menu_item").removeClass("on").addClass("off"),i(),index=$(this).data("index"),$("#"+$series[index]).show(),$("#"+$series[index]+"_info").show(),$("#"+$series[index]+"_menu_item").removeClass("off").addClass("on")}),$(".video_thumbnail").mouseenter(function(){$("#"+$series[index]+"_player_icon_container").css("background-color",$series_colors[index])}).mouseleave(function(){$("#"+$series[index]+"_player_icon_container").css("background-color","rgba(0,0,0, 0.5)")}),$(".video_thumbnail").on("click",function(){$players[index].playVideo()}),window.onYouTubeIframeAPIReady=function(){$players[0]=new YT.Player("player_series_one",{events:{onStateChange:l}}),$players[1]=new YT.Player("player_series_two",{events:{onStateChange:a}}),$players[2]=new YT.Player("player_series_three",{events:{onStateChange:s}}),$players[3]=new YT.Player("player_series_four",{events:{onStateChange:r}})},$(document).on("click",".gallery_index_item_off",function(){$("#"+$series[index]+"_gallery_index_container .gallery_index_item_on").removeClass().addClass("gallery_index_item_off"),$(this).removeClass().addClass("gallery_index_item_on"),$series_gallery_index[index]=$(this).data("index"),gallery_index=$series_gallery_index[index],$("#"+$series[index]+"_pic").css("background-image",$series_galleries[index][gallery_index])}),$(".gallery_left_control_container").on("click",function(){0==$series_gallery_index[index]?$series_gallery_index[index]=2:$series_gallery_index[index]-=1,$("#"+$series[index]+"_gallery_index_container .gallery_index_item_on").removeClass().addClass("gallery_index_item_off"),$("#"+$series[index]+"_gallery_index_container").find("[data-index='"+$series_gallery_index[index]+"']").removeClass().addClass("gallery_index_item_on"),gallery_index=$series_gallery_index[index],$("#"+$series[index]+"_pic").css("background-image",$series_galleries[index][gallery_index])}),$(".gallery_right_control_container").on("click",function(){2==$series_gallery_index[index]?$series_gallery_index[index]=0:$series_gallery_index[index]+=1,$("#"+$series[index]+"_gallery_index_container .gallery_index_item_on").removeClass().addClass("gallery_index_item_off"),$("#"+$series[index]+"_gallery_index_container").find("[data-index='"+$series_gallery_index[index]+"']").removeClass().addClass("gallery_index_item_on"),gallery_index=$series_gallery_index[index],$("#"+$series[index]+"_pic").css("background-image",$series_galleries[index][gallery_index])});var d=new MobileDetect(window.navigator.userAgent);(d.mobile()||d.tablet())&&$(".video_thumbnail").css("pointer-events","none")});



