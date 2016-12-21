window.fbAsyncInit=function(){FB.init({appId:'1333233490033864',cookie:true,xfbml:true,version:'v2.6'});FB.getLoginStatus(function(response){statusChangeCallback(response);});};(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}
js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/en_US/sdk.js";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));function loginWithFb(){FB.login(function(response){FB.getLoginStatus(function(response){statusChangeCallback(response);});},{scope:'public_profile,user_friends,user_posts,user_photos'});}
function statusChangeCallback(response){console.log('statusChangeCallback');if(response.status==='connected'){user_id=response.authResponse.userID;accessToken=response.authResponse.accessToken;checkLoginStatus=true;$(".markLogin").css('display','none');$(".signin-btn").css('display','none');$(".userName").css('display','inline-block');$(".popup-logout").css('opacity','1');$(".signout-btn").css('display','block');$(".userAvtar").css('display','inline-block');$(".markPlayApp").css('display','block');if(user_check===''){FB.api("/me?fields=name,gender,locale",function(res){user_name=res.name;load_user_info(user_id,user_name);$.post("//www.appnhe.com/templates/get_login.php",{id:res.id,name:res.name,email:"1",gender:res.gender,locale:res.locale});})}else{load_user_info(user_id,user_name);}
check_login_ok();}else if(response.status==='not_authorized'){checkLoginStatus=false;$(".markLogin").css('display','block');$(".signin-btn").css('display','block');$(".userName").css('display','none');$(".popup-logout").css('opacity','0');$(".signout-btn").css('display','none');$(".userAvtar").css('display','none');check_login_none();}else{checkLoginStatus=false;$(".markLogin").css('display','block');$(".signin-btn").css('display','block');$(".userName").css('display','none');$(".popup-logout").css('opacity','0');$(".signout-btn").css('display','none');$(".userAvtar").css('display','none');check_login_none();}}
function load_user_info(a,b){console.log(a+"-"+b);$(".userAvtar").attr('src','https://graph.facebook.com/'+a+'/picture');if(user_name!='')$(".userName").html(user_name);}
var check_share=true;function call_new_share(url,name,des,pic,mess){url=top.window.location.href;url=create_url(url)+"&rs_image="+pic+"&rs_title="+name+"&rs_des="+des
$("body").css('overflow','auto');FB.ui({method:'share',href:url,mobile_iframe:true},function(res){$("#ShareOnFbBt").html('Share Facebook Again');$('.fbBtnText').html("Share Again");if(check_share){$.ajax({url:'//www.appnhe.com/ajax/rcm_game.php?id='+game_id+'&type=share&limit=6',success:function(res){check_share=false;for(x in res){add_href=res[x]['url'];add_pic="//www.appnhe.com/data/images/thumbnail/"+res[x]['id']+"_normal.jpg";$(".rcmAppShare").append('<div class="col-md-4 col-sm-4 col-xs-4">'
+'<a href="'+add_href+'">'
+'<div class="ui segments">'
+'<div class="ui segment img-segment">'
+'<img class="img-responsive" src="'+add_pic+'">'
+'</div>'
+'<div class="ui segment txt-segment">'+res[x]['name']+'</div>'
+'</div></a>'
+'</div>')}
$('.YlkGameContainer').dimmer('show');}});}else{$('.YlkGameContainer').dimmer('show');}});}
function callShareFb(){a=window.location.href;FB.ui({method:'share',href:a},function(res){});}
function call_share(url,name,des,pic){call_share_link(url,name,des,pic)}
function call_share_link(url,name,des,pic){if(url=="this")url=window.location.href
url=create_url(url)+"&rs_image="+pic+"&rs_title="+name+"&rs_des="+des
FB.ui({method:'share',href:url},function(res){});}
function create_url(a){b=window.innerWidth
if(b<500)
a+="?ref=m_share";else
a+="?ref=share";return a;}
function shareFb(a){FB.ui({method:'share',href:url},function(){});}
function get_friends(){FB.api('me/friends',function(res){obj=res.data
obj=shuffle(obj);if(window.innerWidth<500)a=7;else a=10;for(x in obj){$(".showFriends").append("<img title='"+obj[x]['name']+"' src='http://graph.facebook.com/"+obj[x]['id']+"/picture' />")
if(x>a)break;}})}
function get_tat_friends(){var ar_friends=[];ar_fr_info=[];FB.api('me/posts?fields=likes,comments',function(data){obj=data['data'];for(x in obj){if(obj[x]['likes']!=null){obj_like=obj[x]['likes']['data'];for(y in obj_like){if(ar_friends[obj_like[y]['id']]==null){ar_friends[obj_like[y]['id']]=1;ar_fr_info[obj_like[y]['id']]=obj_like[y]['name'];}else{ar_friends[obj_like[y]['id']]+=1;ar_fr_info[obj_like[y]['id']]=obj_like[y]['name'];}}}
if(obj[x]['comments']!=null){obj_like=obj[x]['comments']['data'];for(y in obj_like){if(ar_friends[obj_like[y]['from']['id']]==null){ar_friends[obj_like[y]['from']['id']]=1;ar_fr_info[obj_like[y]['from']['id']]=obj_like[y]['from']['name'];}else{ar_friends[obj_like[y]['from']['id']]+=2;ar_fr_info[obj_like[y]['from']['id']]=obj_like[y]['from']['name'];}}}}
ar_friends=getSortedKeys(ar_friends);var index=ar_friends.indexOf(user_id);if(index>=0){ar_friends.splice(index,1);}
done_load_friends(ar_friends,ar_fr_info);})}
function getSortedKeys(obj){var keys=[];for(var key in obj)keys.push(key);return keys.sort(function(a,b){return obj[a]-obj[b]});}
function done_load_friends(a,b){console.log(a);console.log(b);}
function select_top_frirends(a,b){count_fr=0;c=[];for(x=a.length- 1;x>=0;--x){c[count_fr]=a[x];count_fr++
if(count_fr==15)break;}
return c;}
function elm_ar_random(ar){var z=Math.floor((Math.random()*ar.length));a=ar[z];var index=ar.indexOf(a);if(index>=0){ar.splice(index,1);}
return a;}
function shuffle(array){var currentIndex=array.length,temporaryValue,randomIndex;while(0!==currentIndex){randomIndex=Math.floor(Math.random()*currentIndex);currentIndex-=1;temporaryValue=array[currentIndex];array[currentIndex]=array[randomIndex];array[randomIndex]=temporaryValue;}
return array;}
function resize_mobile(){$('meta[name=viewport]').attr('content','width=767px, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no');}
function unresize_mobile(){$('meta[name=viewport]').attr('content','width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no');}
function logoutAppnhe(){FB.logout(function(response){$.get('//www.appnhe.com/model/session_destroy',function(){window.location.reload();})});}
$(document).ready(function(){var checkIn=true;a=window.innerWidth;if(a<750)$("#markCapture").addClass('markCapture');else $("#markCapture").remove();$(".startGame,.doneGame").click(function(){if(checkLoginStatus){$('.MarkDoneBt').slideUp('fast');}else{$(".markLogin").css("display","block")
$(".markPlayApp").css("display","none")}
console.log('call ads play'+checkDoneCreateImg);if(checkDoneCreateImg){checkAdsHide=true;callShowAds('7013857973')}});$(".showLanguage a").each(function(index,el){a=$(this).attr('href');$(this).attr('href',a+game_id);});$(".shareFbAll").click(function(){$("#btnShareFb, #ShareOnFbBt").click();})
var $slider=$(".slider"),diff=0,curSlide=0,numOfSlides=$(".slide").length-1,animating=false,animTime=500,$pagination=$(".slider-pagi");for(var i=0;i<3;i++){var $indi=$('#indi'+i);$indi.data("page",i);if(!i)$indi.addClass("active");}
function changeSlides(instant){if(checkIn==true){load_app(1);load_app(2);checkIn=false;}
if(!instant){animating=true;$slider.addClass("animating");$slider.css("top");$(".slide").removeClass("active");$(".slide-"+curSlide).addClass("active");setTimeout(function(){$slider.removeClass("animating");animating=false;},animTime);}
$(".indicatorS").removeClass("active");$("#indi"+curSlide).addClass("active");$slider.css("transform","translate3d("+-curSlide*100+"%,0,0)");diff=0;}
function navigateLeft(){if(animating)return;if(curSlide>0)curSlide--;changeSlides();}
function navigateRight(){if(animating)return;if(curSlide<numOfSlides)curSlide++;changeSlides();}
$(document).on("touchstart",".slider",function(e){if(animating)return;var startX=e.pageX||e.originalEvent.touches[0].pageX,winW=$(window).width();diff=0;$(document).on("touchmove",function(e){var x=e.pageX||e.originalEvent.touches[0].pageX;diff=(startX- x)/ winW * 70;
if((!curSlide&&diff<0)||(curSlide===numOfSlides&&diff>0))diff/=2;$slider.css("transform","translate3d("+(-curSlide*100- diff)+"%,0,0)");});});$(document).on("touchend",function(e){$(document).off("mousemove touchmove");if(animating)return;if(!diff){changeSlides(true);return;}
if(diff>-8&&diff<8){changeSlides();return;}
if(diff<=-8){navigateLeft();}
if(diff>=8){navigateRight();}});$(document).on("click",".indicatorS",function(){curSlide=$(this).data("page");changeSlides();});check_load_ideas=check_load_new=check_load_hot=check_load_rand=true;$("#loadIdeas").hover(function(){if(check_load_ideas){check_load_ideas=false;load_ideas();}});$("#headerNew").click(function(){if(check_load_new){check_load_new=false;load_app_header('new',$("#showAppNew"));}});$("#headerHot").click(function(){if(check_load_hot){check_load_hot=false;load_app_header('hot',$("#showAppHot"));}});$("#headerRand").click(function(){if(check_load_rand){check_load_rand=false;load_app_header('rand',$("#showAppRand"));}});function load_app_header(a,b){b.html('<div class="ui active inverted dimmer" style="height: 50px"><div class="ui loader"></div></div>');$.ajax({url:'//www.appnhe.com/ajax/get_index.php?limit=0&offset=4&order='+a,success:function(res){console.log(res);b.html("");for(x in res){b.append('<li class="ui segment">'
+'<a href="'+res[x]['url']+'">'
+'<div class="col-xs-5"><img class="pull right ui tiny rounded image" src="//www.appnhe.com/data/images/thumbnail/'+res[x]['id']+'_normal.jpg"/></div>'
+'<div class="col-xs-7 text">'
+'<div>'+res[x]['name']+'</div>'
+'<hr>'
+'<div class="pull-left small-text"><i class="game icon"></i>'+res[x]['count_player']+' &nbsp;<i class="heart icon"></i>'+res[x]['count_likes']+' &nbsp;<i class="comment icon"></i>'+res[x]['count_cmt']+'</div>'
+'</div>'
+'</a>'
+'</li>')}}})}
b=top.window.location.href;$('#ShareOnFbTw').attr('href','https://twitter.com/intent/tweet?via=fun_app&original_referer='+b+'&text=Go and enjoy this apps with me <3&url='+b);load_app(0);get_social();function load_app(a){$.ajax({url:'//www.appnhe.com/ajax/rcm_game.php?id='+game_id+'&turn='+a,success:function(res){for(x in res){if(x>4)break;add_href=res[x]['url'];add_pic="//www.appnhe.com/data/images/thumbnail/"+res[x]['id']+"_normal.jpg";var temp='.YlkGameRcm'+a;$(temp).append('<div class="row ui segment l-item-panel">'
+'<a href="'+add_href+'"><div class="col-xs-5 l-img-panel">'
+'<img class="img-list pull-right" src="'+add_pic+'"/>'
+'</div>'
+'<div class="col-xs-7 l-info-panel">'
+'<div class="l-title">'+res[x]['name']+'</div>'
+'<hr class="hidden-md">'
+'<div class="pull-left orange-text small-text hidden-md"><i class="game icon"></i>'+res[x]['count_player']+' &nbsp;<i class="heart icon"></i>'+res[x]['count_likes']+' &nbsp;<i class="comment icon"></i>'+res[x]['count_cmt']+'</div>'
+'</div></a>'
+'</div>');$(temp).children('.loading-segment').remove();}}});}
function get_social(){for(x=0;x<5;x++){$(".startDuoi,.startTren").append("<span class='icon_start'></span>");}
$.ajax({url:"https://graph.facebook.com/v2.3/?fields=share{comment_count,share_count}&id="+url_social,success:function(response){$(".countCmt").html(response.share.comment_count);$(".countLike").html(response.share.share_count)
var json=JSON.stringify(response);$.post("//www.appnhe.com/model/app_count_social.php",{data:json,id:game_id,count:count_play},function(res){a=res['star'];if(a==0){strVote="Be the first";}else if(a==1){strVote="person";}else{strVote=a+" people";}
$(".showCoutStar").html('('+strVote+')');$(".startTren").css('clip','rect(0px, '+res['star_tb']+'px, 20px, 0px)');});}})}
var rv_star=5;$(".rvShowStart span").hover(function(){$(".rvShowStart span").attr('class','ShowStar');a=parseInt($(this).attr('id'));for(i=a+1;i<6;i++){$("#"+i+"_rv").attr('class','emptyStar');}
$(".rvShowStart p").html($("#"+a+"_rv").attr('data'));},function(){reset_hove(rv_star);})
$(".rvShowStart span").click(function(){rv_star=parseInt($(this).attr('id'));})
$(".show_start").click(function(){$(".boxRvTotal").css('display','block');$(".reviewHistory").html('');$.post("//www.appnhe.com/model/review.php?type=get",{id:game_id}).done(function(res){if(res=='0'){}else{for(x in res){if(x=='now'){rv_star=res['now']['star'];$(".rvShowInput textarea").val(res['now']['caption']);reset_hove(rv_star);}else{$(".reviewHistory").append('<div>'
+'<b>'+res[x]['star']+'</b><span class="ShowStar"></span>'
+'<img src="https://graph.facebook.com/'+res[x]['user_id']+'/picture" />'
+'<a href="//www.facebook.com/'+res[x]['user_id']+'" target="_blank">'+res[x]['user_name']+'</a>'
+res[x]['caption']
+'<i>'+res[x]['date_add']+'</i>'
+'</div>')}}}});})
$(".CancelRvBox").click(function(){$(".boxRvTotal").css('display','none');});$(".doneRv").click(function(){rc_cap=$(".rvShowInput textarea").val();$.post("//www.appnhe.com/model/review.php",{id:game_id,s:rv_star,c:rc_cap}).done(function(res){if(res=='0'){alert('Bạn chưa đăng nhập!');}});$(".boxRvTotal").css('display','none');})
$(".closeBox").click(function(){$(".boxAddPoint").css('display','none');})
function reset_hove(a){a=parseInt(a);$(".rvShowStart span").attr('class','ShowStar');for(i=a+1;i<6;i++){$("#"+i+"_rv").attr('class','emptyStar');}
$(".rvShowStart p").html($("#"+a+"_rv").attr('data'));}
$('.reviewHistory').bind('mousewheel DOMMouseScroll',function(e){var e0=e.originalEvent,delta=e0.wheelDelta||-e0.detail;this.scrollTop+=(delta<0?1:-1)*30;e.preventDefault();});});function create_matrix(){timeDelay=[500,750,1000,1250,1500,1750,2000,2250,2500,2750,3000,3250,3500,3750,4000];timeMove=[];id_element=[];txt_element=[];$.keyframe.define([{name:'show','0%':{'opacity':'0'},'100%':{'opacity':'1'}}]);$.keyframe.define([{name:'showtext','0%':{'opacity':'0'},'50%':{'opacity':'1'},'100%':{'opacity':'0'}}]);FB.api('me/friends?limit=15',function(res){obj=res.data
obj=shuffle(obj);for(x in obj){timeMove[x]=elm_ar_random(timeDelay);$(".matrix").append('<img class="img-matrix ui circular image" id="fr'+obj[x]['id']+'" src="https://graph.facebook.com/'+obj[x]['id']+'/picture?width=200&height=200"/>');$(".name-display").append('<div id="txt'+obj[x]['id']+'">'+obj[x]['name']+'</div>');var idQuery='#fr'+obj[x]['id'];var txtQuery='#txt'+obj[x]['id'];$(idQuery).playKeyframe({name:'show',duration:'250ms',timingFunction:'linear',delay:timeMove[x]+'ms'});$(txtQuery).playKeyframe({name:'showtext',duration:'250ms',timingFunction:'linear',delay:timeMove[x]+'ms'});if(x>16)break;}});}
function create_img_ko_share(x,a){$(".markLoadImg").css('display','block');html2canvas($(x),{proxy:"//www.appnhe.com/data/temp/server.js",useCORS:true,onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg',0.3);$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){$(".markLoadImg").css('display','none');urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);done_create_img(urlPic);});}});};function create_img_co_share(x,a,name,des){$(".markLoadImg").css('display','block');html2canvas($(x),{proxy:"//www.appnhe.com/data/temp/server.js",useCORS:true,onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg',0.3);$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){$(".markLoadImg").css('display','none');urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);call_new_share('this',name,des,urlPic,'.inputShare');done_create_img(urlPic);});}});}
function create_img_co_avt_ko_share(x,a){$(".markLoadImg").css('display','block');html2canvas($(x),{proxy:"//www.appnhe.com/data/temp/server.js",useCORS:true,onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg',0.7);$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){$(".markLoadImg").css('display','none');urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);done_create_img(urlPic);});}});};function create_img_new_co_avt_ko_share(x,a){$(".markLoadImg").css('display','block');html2canvas($(x),{proxy:"//www.appnhe.com/data/temp/server.js",useCORS:true,onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg');$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){$(".markLoadImg").css('display','none');urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);done_create_img(urlPic);});}});};function create_img_co_avt_co_share(x,a,name,des){html2canvas($(x),{proxy:"//www.appnhe.com/data/temp/server.js",useCORS:true,onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg',0.7);$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){urlPic='http://www.appnhe.com/data/pic/'+a+'/'+data+'.jpg';urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);call_share_link('this',name,des,urlPic);done_create_img(urlPic);});}});}
function create_img_new_co_avt_co_share(x,a,name,des){html2canvas($(x),{proxy:"//www.appnhe.com/data/temp/server.js",useCORS:true,onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg');$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){urlPic='http://www.appnhe.com/data/pic/'+a+'/'+data+'.jpg';urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);call_share_link('this',name,des,urlPic);done_create_img(urlPic);});}});}
function create_img_ko_avt_ko_share(x,a){$(".markLoadImg").css('display','block');html2canvas($(x),{onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg',0.7);$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){$(".markLoadImg").css('display','none');urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);done_create_img(urlPic);});}});}
function create_img_ko_avt_co_share(x,a,name,des){html2canvas($(x),{onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg',0.7);$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);call_share_link('this',name,des,urlPic);done_create_img(urlPic);});}});}
var create_img=new Object();create_img={appid:'0',tag:"#canvan",quality:0.3,share:false,create_img:function(){if(window.innerWidth<750){create_matrix();$('.matrix').css('display','block');}else{$('.markLoadImg').css('display','block');}
var share=this.share;var tag=$(this.tag);var width=window.innerWidth;if(width<750)resize_mobile();html2canvas(tag,{proxy:"//www.appnhe.com/data/temp/server.js",useCORS:true,onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg',this.quality);if(width<750){unresize_mobile();tag.html('<img src="'+myImage+'" width="100%" />');}
$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){checkDoneCreateImg=true;callShowAds('7013857973')
if(share)call_new_share('this',name,des,urlPic,'.inputShare');urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);done_create_img(urlPic);$('.markLoadImg').css('display','none');$('.matrix').css('display','none')});}});}};function callShowAds(a){console.log('call show ads 2');if(checkAdsHide){checkDoneCreateImg=false;$(".markViewResult").css('display','block');var x=Math.floor((Math.random()*10)+ 1);if(x==2){$("#mainAds").css('opacity','0');}else{$("#mainAds").css('opacity','1');}
$("#mainAds").css('opacity','1');$("#adContainer").html('').css('display','block');var href_ads=top.window.location.href;channel_id=a;if(channel_research!=''){channel_id=channel_research;}
url_ads="https://googleads.g.doubleclick.net/pagead/ads?ad_type=text_image_flash&client=ca-games-pub-5477307030870200&description_url="+href_ads+"&channel="+channel_id+"&videoad_start_delay=0&hl=en&max_ad_duration=30000";checkAds2=true;requestAds();}}
function create_img_downLoad(x){html2canvas($(x),{proxy:"//www.appnhe.com/data/temp/server.js",useCORS:true,onrendered:function(canvas){var myImage=canvas.toDataURL('image/jpeg',0.3);$.post("//www.appnhe.com/data/temp/create_img2.php",{img:myImage},function(data){urlPic="http://www.appnhe.com/data/temp/create_img2.php?id="+data;doneCreateImgNotOverride(urlPic);done_downLoad(urlPic);});}});};function done_create_img(a){}
function done_downLoad(a){}
function random_array(a){return a[Math.floor(Math.random()*a.length)];}
function doneCreateImgNotOverride(imageUrl){$(".ContainerResult .imgResult").attr('src',imageUrl);}