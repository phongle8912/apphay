@extends('app')

@section('content')

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">AppHay</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <button class="btn btn-primary" onclick="check_login_ok()"><span style="font-weight:bold; font-size:15px">f</span> Login</button>
            <div class="form-group">
              <input type="text" placeholder="Tìm ứng dụng ..." class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="">
      <div class="container wrapper">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8 app-player">
              <div class="player">
              <div class="MarkDoneBt" id="MarkDoneBt">
                        <div class="gameContainer" style="background: url('//www.appnhe.com/css/ver2/themes/bg1.svg') ;background-size: cover; background-color: #000;">
                            <div class="markInfoApp">
                                <h1 class="showNameApp">{{$app->name}}</h1>
                            </div>
                            <div class="partContent">
                                <img class="img-responsive img_mark" src="//www.appnhe.com/css/ver2/themes/mark3.svg">
                                <div class="markPlayApp" style="display: block;z-index: 1;background-color: #fff;position: relative;">
                                    <div class="massive ui fade animated orange button startGame" tabindex="0">
                                        <div class="hidden content">
                                            <i class="play icon"></i>
                                        </div>
                                        <div class="visible content">
                                            BẮT ĐẦU
                                        </div>
                                    </div>
                                    <h4>{{$app->meta_desc}}</h4>
                                </div>
                                <div class="markLogin partScoial" style="z-index: 0; display: none;">
                                    <div class="loginWithFacebook shareSocialBox shareFb" onclick="loginWithFb()">
                                        <i></i>
                                        <span>Đăng Nhập Bằng Facebook!</span>
                                    </div>
                                    <h3 style="text-align: center; color: #444;">Một lần và mãi mãi về sau!</h3>
                                </div>
                            </div>
                        </div>
                    </div>


              {!!$app->code!!}

              <div class="markLoadImg">
                        <h1>Đang xử lý cmn kết quả, chờ xí ^^!</h1>
                        <img src="//www.appnhe.com/images/icon/app_load.gif">
                    </div>
                    <div class="ui dimmer rcmPlayArea">
                        <div class="row rcmAppShare"></div>
                    </div>




              </div>
              <div class="share-reply">
                <div class="col-md-6"><button class="btn btn-primary">Share on Facebook</button></div>
                <div class="col-md-6"></div>
              </div>
            </div>
            <div class="col-md-4 clear-padding-right parent-app-relate">
              <div class="col-md-12 app-relate">
                <div class="title-app-relate">
                  <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div> 
                  <!-- MUỐN CHƠI HÔNG? -->
                </div>
                <div class="row">

                @if ($apps)
                  @foreach ($apps as $app)
                  <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                        <a href="detail/{{ $app->id }}"><img src="{{ $app->image }}" class="img-responsive" /></a>
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a href="detail/{{ $app->id }}">{{ $app->name }}</a></div>
                    </div>
                    <div class="clear"></div>
                  </div>
                  @endforeach
                @endif

                  <!-- <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                        <img src="http://www.appnhe.com/data/images/thumbnail/1113_normal.jpg" class="img-responsive" />
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a>Bao nhiêu người đã cảm nắng bạn trong năm 2016?</a></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                        <img src="http://www.appnhe.com/data/images/thumbnail/47_normal.jpg" class="img-responsive" />
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a>Chọn ĐÚNG hoặc SAI trong 3 nốt nhạc!</a></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                        <img src="http://www.appnhe.com/data/images/thumbnail/1099_normal.jpg" class="img-responsive" />
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a>Ai luôn lấy bạn ra làm gương?</a></div>
                    </div>
                  </div> -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="col-md-12 info-comment">
        <div class="row">
          <div class="col-md-8 info">
            <div class="row">
              <div class="col-md-9 title-info">
                Gửi lời chúc Noel ý nghĩa đến bạn bè
              </div>
              <div class="col-md-3 total-play">LƯỢT CHƠI: <span>6,345</span></div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="social">
                  <button class="btn btn-info">Tweet</button>
                  <button class="btn btn-danger">Share</button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 desciption">
                <strong>App Hay</strong> Chúng tôi liên tục phát triển và sáng tạo những ứng dụng trên Facebook giúp cho người dùng giải trí và trải nghiệm những điều thú vị. Các ứng dụng do appnhe.com lên ý tưởng và sáng tạo theo phong cách riêng, đơn giản và rất độc đáo, mang lại cho người dùng trải nghiệm mới lạ khi lướt Facebook. Ngoài ra, ngoài tính giải trí, appnhe.com cũng mang lại những trải nghiệm ứng dụng an toàn hơn cho người dùng Facebook khắp Việt Nam và trên toàn thế giới.<br>
                <br>
                Với nền tảng kiến thức và kinh nghiệm đa dạng về xã hội thực tế và mạng xã hội Facebook, appnhe.com tin tưởng luôn mang tới nhiều niềm vui, trải nghiệm thú vị và an toàn cho người dùng Facebook.<br>
                <br>
                Bên cạnh đó, trong tương lai gần, appnhe.com luôn hướng tới mục tiêu hỗ trợ cộng đồng tự tạo ra những ứng dụng Facebook hấp dẫn, cập nhật đồng thời giúp cho cộng đồng kiếm được nguồn thu nhập chính đáng dựa trên những ứng dụng, sản phẩm giải trí do chính mình làm ra, dựa trên nền tảng apphay.com.<br>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="app-relate2">
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1108_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Tổng kết năm 2016 của bạn bằng 4 bức ảnh</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1105_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Linh vật của bạn là gì?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/682_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Thưởng tết năm nay của bạn có gì?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1089_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Nhìn nhân trung dự đoán vận mệnh</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1100_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Bạn đã bày tỏ cảm xúc bao nhiêu lần suốt năm qua?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1098_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Ai sẽ ký hợp đồng tình yêu với bạn?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1086_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Noel này bạn sẽ được nhận quà gì?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1075_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Ai là định mệnh của đời bạn?</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 comment">
            <div class="fb-comments" data-href="http://apphay.com" data-colorscheme="light" data-numposts="5" data-width="100%"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>

      <hr>

      <footer>
        <ul>
          <li><a>Về App Hay</a></li>
          <li><a>Điều khoản sử dụng</a></li>
          <li><a>&copy; Copyright by Apphay.com</a></li>
        </ul>
      </footer>
    </div>


<script type="text/javascript" data-rocketoptimized="true">
if($('#game-1').length > 0){
    var urlPic = '';
    var user_name = '';
    var first_name = '';
    var gender = '';

    
    randD = Math.floor(Math.random() * 90)+10;

    function check_login_ok(a) {
        FB.api("/me?fields=name, gender", function (res) {
            user_name = res.name;
            gender = res.gender;
            $("#nameTxt").val(user_name);
            $("#genderS").val(gender);
            $(".avt").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            $(".avt1").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            //first_name = res.first_name;
        })
        /*FB.api('/me?fields=first_name', function(response) {
            //alert(response.first_name);
            first_name = response.first_name;
            
        });*/
    }

    $(document).ready(function () {
       
        $("#btnSubmit").click(function (event) {
            user_name = $("#nameTxt").val();
            if (!user_name) {
                alert('Bạn chưa nhập đầy đủ thông tin');
                $('#nameTxt').focus();
            } else {
                ten = user_name.split(' ');
                ten = ten[ten.length - 1];
                //ten = ar_info[last_element].split(' ');
                //ten = ten[ten.length - 1];
                $(".show_first").css('display', 'none');
                $(".appnhe_show").css("display", "block");
                
                if($("#genderS").val() == 'male'){
                    $(".gameBg").attr("src", "//www.appnhe.com/data/fb/1113_camnang/2.png");
                }else{
                    $(".gameBg").attr("src", "//www.appnhe.com/data/fb/1113_camnang/1.png");
                }
                
                $(".txt").html("Số người đã cảm nắng "+user_name+" trong năm 2016 là:");
                $(".nd").html(randD);
            
                // img = create_img;
                // img.create_img();
                $('.des').html("Trong khi số lượng thanh niên FA không một mảnh tình vắt vai chiếm tới 69% dân số thế giới thì riêng mình "+user_name+" đã khiến cho "+randD+" người cảm nắng! Siêu cao thủ @@ ");

                

            }
        });

        b = top.window.location.href;
        $('#btnShareTw').attr('href', 'https://twitter.com/intent/tweet?via=fun_app&original_referer=' + b + '&text=Go and enjoy this apps with me <3&url=' + b);
        $("#btnShareFb").click(function () {
            $(".fbBtnText").html("Loading...");
            url = top.window.location.href;
            name = 'Bao nhiêu người đã cảm nắng bạn trong năm 2016';
            des = "Xem ngay năm qua bạn đã khiến bao nhiêu người rụng tim :))";
            pic = urlPic;
            mess = '.inputShare';
            call_new_share(url, name, des, pic, mess);
        })

    });

    function done_create_img(a) {
        /*Ham call sau khi tao anh xong*/
        $(".loading").css('display', 'none');
        urlPic = a;
        $('.share-tool').css('display', 'block');
        $('#btnDownload').attr('href', a);
    }
}
</script>

<script type="text/javascript" data-rocketoptimized="true">
if($('#game-2').length > 0){
    var urlPic = '';
    var user_name = '';
    
    data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    data1 = [
        "Làm điều bạn thích, đó là tự do. Thích điều bạn làm, đó là hạnh phúc!",
        "Hãy học cách sống hạnh phúc với những gì bạn có trong khi vẫn theo đuổi những gì bạn muốn!",
        "Có một nơi để về, đó là NHÀ. Có những người yêu thương, đó là GIA ĐÌNH. Có được cả hai, đó là HẠNH PHÚC!",
        "Trở ngại to nhất của hạnh phúc là trông chờ một hạnh phúc khác to hơn!",
        "Cuộc sống luôn cho bạn cơ hội thứ hai, nó được gọi là NGÀY MAI",
        "Đừng bao giờ từ bỏ thứ gì hoặc ai mà bạn không thể đi hết một ngày mà không nghĩ về họ!",
        "Có điều kỳ diệu xảy đến với những người thực sự biết yêu thương: họ càng cho nhiều, họ càng có nhiều!",
        " Người ta nghĩ sao về bạn, không có liên quan gì đến bạn. Bạn sống thế nào, cũng không có liên quan gì đến người ta.",
        "Phụ nữ không có sức hấp dẫn mới cảm thấy đàn ông trăng hoa. Đàn ông không có thực lực mới cảm thấy phụ nữ thực dụng!",
        "Thực ra những người hay cười, lại luôn cần người khác yêu thương!",
        "Một ngày không có tiếng cười thực sự là một ngày lãng phí!",
        "Những cô gái hay cười chính là những cô gái xinh đẹp nhất!",
    
    ];
    
    data2 = [
        "Chúc mọi người giáng sinh an lành! :'>",
        "Merry Christmas & Happy new year!! :''>",
        "Hết năm rồi, trả nợ đê :))",
        "Noel đến rồi, lêu lêu tụi Fa :''>",
        "Christmas isn't a season. It's a feeling! :''>",
        "Giáng sinh đang đến! Quẩy lên nào ^^",
        "Chính thức nhận quà Noel từ hôm nay! :''>",
        "Giáng sinh đến rồi! Mình yêu nhau thôi!! :''>",
    ];
    
    function randD(data) {
        r = Math.floor((Math.random() * data.length));
        rsD = data[r];
        var index = data.indexOf(rsD);
        if (index >= 0) {
            data.splice(index, 1);
        }
        return rsD;
    }



    function check_login_ok(a) {
        FB.api("/me", function (res) {
            user_name = res.name;
            gender = res.gender;
            $(".ip_name").val(user_name);
            $(".avt").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            //first_name = res.first_name;
        })

    }
    
    function play_sound() {
        if (window.HTMLAudioElement) {
            snd = new Audio('');
            if (snd.canPlayType('audio/mp3')) {
                snd = new Audio('http://apphay.dev/media/mp3.mp3');
            }
            snd.currentTime = 0;
            snd.play();
            

        }
        
        $(".loa1").click(function(){
            snd.pause();
            $(".loa1").css("display", "none");
            $(".loa2").css("display", "block");
        });
        
        $(".loa2").click(function(){
            snd.play();
            $(".loa1").css("display", "block");
            $(".loa2").css("display", "none");
        });
    }

    $(document).ready(function () {

        $(".result_app").click(function (event) {
            user_name = $(".ip_name").val();
            if (!user_name) {
                alert("Bạn chưa nhập tên");
                $('#nameTxt').focus();
            } else {
            
                $(".show_first").css('display', 'none');
                $(".appnhe_show").css("display", "block");
                play_sound();
                $(".gameBg").attr("src", "http://apphay.dev/images/"+randD(data)+".png");
                $(".nd1").click(function () {
                    id_item = $(this).attr("id");
                    $(".main1").css("display", "block");
                });
                
                $("#submit").click(function () {
                    $("#" + id_item).html($('.searhN').val());
                    $('.searhN').val('');
                    $(".main1").css("display", "none");
                });
    
                $("#cancel").click(function () {
                    $(".main1").css("display", "none");
                });
                
                
                
                $(".nd1").html(randD(data1)+"<br>---<br><span>ps: "+randD(data2)+"</span>");
                $(".nd2").html("-- From "+user_name+" with love --");
                
                
                
                

            }
        });
        
         $("#done").click(function () {
            $('.des').html("Đừng hờ hững khi không khí tuyệt vời của giáng sinh sắp tràn ngập mọi nơi! Hãy chia sẽ những lời chúc tốt đẹp hoặc ít nhất một câu bông đùa để có được một nụ cười trên môi ai đó ^^");
            $(".xong,.hd").css("display", "none");
            $(".des").css("display", "block");
            
        });

        b = top.window.location.href;
        $('#btnShareTw').attr('href', 'https://twitter.com/intent/tweet?via=fun_app&original_referer=' + b + '&text=Go and enjoy this apps with me <3&url=' + b);
        $("#btnShareFb").click(function () {
            $(".fbBtnText").html("Loading...");
            url = top.window.location.href;
            name = 'Tạo thiệp Giáng sinh ý nghĩa dành tặng người thân';
            des = "Làm thiệp Noel thôi nào ^^";
            pic = urlPic;
            mess = '.inputShare';
            call_new_share(url, name, des, pic, mess);
        })

    });

    function done_create_img(a) {
        /*Ham call sau khi tao anh xong*/
        $(".loading").css('display', 'none');
        urlPic = a;
        $('.share-tool').css('display', 'block');
        $('#btnDownload').attr('href', a);
    }
  }
</script>
<script type="text/javascript" data-rocketoptimized="true">
if($('#game-3').length > 0){
    var ar_friends = [];
    var ar_info = [];
    var last_element = '';
    var urlPic = '';
    var user_name = '';

    function check_login_ok(a) {
        FB.api("/me", function (res) {
            user_name = res.name;
            gender = res.gender;
            $(".ip_name").val(user_name);
            $(".avt").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            //first_name = res.first_name;
        })
        get_tat_friends();
    }

    function done_load_friends(a, b) {
        ar_friends = a;
        ar_info = b;
        arr_top_fr = select_top_frirends(ar_friends, 15);
        last_element = elm_ar_random(arr_top_fr);
        $('.fr1_img').attr("src", "https://graph.facebook.com/" + last_element + "/picture?width=400&height=400");

    }
    $(document).ready(function () {

        $(".result_app").click(function (event) {
            user_name = $(".ip_name").val();
            if (!user_name) {
                alert("Bạn chưa nhập tên");
                $('.ip_name').focus();
            } else {
                //ten = user_name.split(' ');
                //ten = ten[ten.length - 1];
                ten = ar_info[last_element].split(' ');
                ten = ten[ten.length - 1];
                $(".show_first").css('display', 'none');
                $(".appnhe_show").css("display", "block");
                setTimeout(function () {
                    $(".avt").css("display", "block");
                    $(".avt").addClass("magictime swashIn");
                    $(".ten1").css("display", "block");
                    $(".ten1").addClass("magictime spaceInDown");
                }, 1000);

                setTimeout(function () {
                    $(".fr1_img").css("display", "block");
                    $(".fr1_img").addClass("magictime swashIn");
                    $(".ten2").css("display", "block");
                    $(".ten2").addClass("magictime spaceInDown");
                }, 2500);
                $('.ten1').html(user_name);
                $('.ten2').html(ar_info[last_element]);

                setTimeout(function () {
                    $(".nd").css("display", "block");
                    $('.nd').html(ten+" chính là định mệnh của bạn đấy");
                    $(".nd").addClass("magictime swashIn");
                }, 3500);

                setTimeout(function () {
                    // img = create_img;
                    // img.create_img();
                    $('.des').html("Ôi cái định mệnh, thì ra lâu nay "+ar_info[last_element]+" là người đặc biệt đó sao? Share và tag "+ar_info[last_element].split(" ")[0]+" vào đi nào <3");

                }, 5500);
                

            }
        });

        b = top.window.location.href;
        $('#btnShareTw').attr('href', 'https://twitter.com/intent/tweet?via=fun_app&original_referer=' + b + '&text=Go and enjoy this apps with me <3&url=' + b);
        $("#btnShareFb").click(function () {
            $(".fbBtnText").html("Loading...");
            url = top.window.location.href;
            name = 'Ai là định mệnh của bạn';
            des = "Định mệnh là thứ đã được định đoạt trước. Tin hay không tùy bạn ^^";
            pic = urlPic;
            mess = '.inputShare';
            call_new_share(url, name, des, pic, mess);
        })

    });

    function done_create_img(a) {
        /*Ham call sau khi tao anh xong*/
        $(".loading").css('display', 'none');
        urlPic = a;
        $('.share-tool').css('display', 'block');
        $('#btnDownload').attr('href', a);
    }
  }
</script>

<script type="text/javascript" data-rocketoptimized="true">
if($('#game-4').length > 0){
    var ar_friends = [];
    var ar_info = [];
    var last_element1 = '';
    var last_element2 = '';
    var last_element3 = '';
    var last_element4 = '';
    var last_element5 = '';
    var last_element6 = '';
    var last_element7 = '';
    var last_element8 = '';
    var last_element9 = '';
    var last_element10 = '';
    var urlPic = '';
    var user_name = '';
    
    data1 = [
        "Ngon",
        "Khỏe",
        "Vô tư",
        "Khùng",
        "Ác",
        "Đỉnh",
        "Điên",
        "Hiền",
        "Ngầu",
        "Ngáo",
        "Giỏi",
        "Phục",
        "Lầy",
        "Xàm",
    
    ];
    
    dataF = [
        "Tuyệt vời",
        "Thiên tài",
        "Vui vẻ",
        "Điên nhẹ",
        "Xuất sắc",
        "Đẹp lồng lộn",
        "Quý tộc",
        "Giang hồ",
        "Sạch sẽ",
        "Tính chó",
        "Thông minh",
        "Điếm thúi",
        "Cá tính",
        "Mất dạy",
        "Yêu đời",
        "Tăng động",
        "Soái ca",
        "Đẹp trai",
        "Ga lăng",
        "Hào phóng",
        "Hot boy",
        "Lãng tử",
        "Phong trần",
        "Dê cụ",
        "Mê gái",
        "Menly",
        "Bê đê",
    ];
    
    
    dataFm = [
        "Tuyệt vời",
        "Thiên tài",
        "Vui vẻ",
        "Điên nhẹ",
        "Xuất sắc",
        "Đẹp lồng lộn",
        "Quý tộc",
        "Giang hồ",
        "Sạch sẽ",
        "Tính chó",
        "Thông minh",
        "Điếm thúi",
        "Cá tính",
        "Mất dạy",
        "Yêu đời",
        "Tăng động",
        "Xinh gái",
        "Mẹ thiên hạ",
        "Điêu",
        "Hot girl",
        "Dễ thương",
        "Đáng yêu",
        "Mê trai",
        "Đẹp xuất sắc",
    ];
    
    function randD(data) {
        r = Math.floor((Math.random() * data.length));
        rsD = data[r];
        var index = data.indexOf(rsD);
        if (index >= 0) {
            data.splice(index, 1);
        }
        return rsD;
    }

    function check_login_ok(a) {
        FB.api("/me", function (res) {
            user_name = res.name;
            gender = res.gender;
            $("#nameTxt").val(user_name);
            $(".avt").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            //first_name = res.first_name;
        })
        get_tat_friends();
    }

    function done_load_friends(a, b) {
        ar_friends = a;
        ar_info = b;
        arr_top_fr = select_top_frirends(ar_friends, 20);
        last_element1 = elm_ar_random(arr_top_fr);
        last_element2 = elm_ar_random(arr_top_fr);
        last_element3 = elm_ar_random(arr_top_fr);
        last_element4 = elm_ar_random(arr_top_fr);
        last_element5 = elm_ar_random(arr_top_fr);
   
        
        $('.fr1').attr("src", "https://graph.facebook.com/" + last_element1 + "/picture?width=400&height=400");
        $('.fr2').attr("src", "https://graph.facebook.com/" + last_element2 + "/picture?width=400&height=400");
        $('.fr3').attr("src", "https://graph.facebook.com/" + last_element3 + "/picture?width=400&height=400");
        $('.fr4').attr("src", "https://graph.facebook.com/" + last_element4 + "/picture?width=400&height=400");
        $('.fr5').attr("src", "https://graph.facebook.com/" + last_element5 + "/picture?width=400&height=400");
      
        $(".t1").html(ar_info[last_element1].split(" ")[0]);
        $(".t2").html(ar_info[last_element2].split(" ")[0]);
        $(".t3").html(ar_info[last_element3].split(" ")[0]);
        $(".t4").html(ar_info[last_element4].split(" ")[0]);
        $(".t5").html(ar_info[last_element5].split(" ")[0]);
        

    }
    $(document).ready(function () {

        $("#btnSubmit").click(function (event) {
            user_name = $("#nameTxt").val();
            if (!user_name) {
                alert("Bạn chưa nhập đầy đủ thông tin");
                $('#nameTxt').focus();
            } else {
                //ten = user_name.split(' ');
                //ten = ten[ten.length - 1];
                //ten = ar_info[last_element].split(' ');
                //ten = ten[ten.length - 1];
                $(".show_first").css('display', 'none');
                $(".appnhe_show").css("display", "block");

                $(".tt").html("Bạn bè mô tả bạn bằng từ gì?");
                
                $(".nd1").html(randD(data1));
                
                if ($('#genderS').val()=="male" ){
                    $(".nd2").html(randD(dataF));
                    $(".nd3").html(randD(dataF));
                    $(".nd4").html(randD(dataF));
                    $(".nd5").html(randD(dataF));
                }else{
                    $(".nd2").html(randD(dataFm));
                    $(".nd3").html(randD(dataFm));
                    $(".nd4").html(randD(dataFm));
                    $(".nd5").html(randD(dataFm));
                }
                
               
        
                img = create_img;
                img.create_img();
                $('.des').html("Nhận xét của mọi người dành cho "+user_name+":<br>"+ar_info[last_element1]+": "+$(".nd1").text()+" vừa thôi nha >\"<<br>"+ar_info[last_element2]+": Bạn rất "+$(".nd2").text()+"!!!<br>"+ar_info[last_element3]+": Thánh quá là "+$(".nd3").text()+" đi =)))<br>"+ar_info[last_element4]+": Bớt bớt "+$(".nd4").text()+" đi chút có được không?<br>"+ar_info[last_element5]+": Mình yêu bạn vì bạn rất "+$(".nd5").text()+"!!! ");
     
                

            }
        });

        b = top.window.location.href;
        $('#btnShareTw').attr('href', 'https://twitter.com/intent/tweet?via=fun_app&original_referer=' + b + '&text=Go and enjoy this apps with me <3&url=' + b);
        $("#btnShareFb").click(function () {
            $(".fbBtnText").html("Loading...");
            url = top.window.location.href;
            name = 'Bạn bè mô tả bạn bằng từ gì?';
            des = "Xem tụi bạn cờ hó nhận xét gì sau lưng bạn nè =))";
            pic = urlPic;
            mess = '.inputShare';
            call_new_share(url, name, des, pic, mess);
        })

    });

    function done_create_img(a) {
        /*Ham call sau khi tao anh xong*/
        $(".loading").css('display', 'none');
        urlPic = a;
        $('.share-tool').css('display', 'block');
        $('#btnDownload').attr('href', a);
    }
    }
</script>
@if(!empty($script))
<script type="text/javascript" src="{{URL($script)}}"></script>
@endif
@endsection