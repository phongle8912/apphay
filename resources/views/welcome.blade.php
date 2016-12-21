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
            <div class="form-group">
              <input type="text" placeholder="Tìm ứng dụng ..." class="form-control">
            </div>
            <button type="submit" class="btn btn-success search">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="">
      <div class="container">

        <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Example headline.</h1>
                  <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> -->

      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 label-filter">
        <div class="col-md-4 col-xs-4 filter-item"><button class="btn btn-warning">App Mới</button></div>
        <div class="col-md-4 col-xs-4 filter-item"><button class="btn btn-default">App Hot</button></div>
        <div class="col-md-4 col-xs-4 filter-item"><button class="btn btn-default">App Ngẫu Nhiên</button></div>
        </div>
      </div>
      <div class="row">
      @if ($apps)
        @foreach ($apps as $app)
        <div class="col-md-3 app-item">
          <a href="detail/{{ $app->id }}"><img src="{{ $app->image }}" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a href="detail/{{ $app->id }}"><h2>{{ $app->name }}</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
        </div>
        @endforeach
      @endif

        <!-- <div class="col-md-3 app-item">
          <a><img src="http://www.appnhe.com/data/images/thumbnail/1113_normal.jpg" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a><h2>Bao nhiêu người đã cảm nắng bạn trong năm 2016?</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 app-item">
          <a><img src="http://www.appnhe.com/data/images/thumbnail/47_normal.jpg" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a><h2>Chọn ĐÚNG hoặc SAI trong 3 nốt nhạc!</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
       </div>
        <div class="col-md-3 app-item">
          <a><img src="http://www.appnhe.com/data/images/thumbnail/1109_normal.jpg" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a><h2>Bức ảnh nhiều like nhất năm 2016 của bạn</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 app-item">
          <a><img src="http://www.appnhe.com/data/images/thumbnail/1099_normal.jpg" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a><h2>Ai luôn lấy bạn ra làm gương?</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 app-item">
          <a><img src="http://www.appnhe.com/data/images/thumbnail/1113_normal.jpg" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a><h2>Bao nhiêu người đã cảm nắng bạn trong năm 2016?</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 app-item">
          <a><img src="http://www.appnhe.com/data/images/thumbnail/47_normal.jpg" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a><h2>Chọn ĐÚNG hoặc SAI trong 3 nốt nhạc!</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
       </div>
        <div class="col-md-3 app-item">
          <a><img src="http://www.appnhe.com/data/images/thumbnail/1109_normal.jpg" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a><h2>Bức ảnh nhiều like nhất năm 2016 của bạn</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 app-item">
          <a><img src="http://www.appnhe.com/data/images/thumbnail/1099_normal.jpg" class="img-responsive" /></a>
          <div class="col-md-12 title-play-date">
            <a><h2>Ai luôn lấy bạn ra làm gương?</h2></a>
            <ul>
              <li><span class="glyphicon glyphicon-expand"></span>1,366</li>
              <li><span class="glyphicon glyphicon-calendar"></span>3 days ago</li>
            </ul>
          </div>
        </div> -->
       
        <div class="col-md-12 text-center next-prev">
          <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Quay lại</button>
          <button type="button" class="btn btn-default">Tiếp theo <span class="glyphicon glyphicon-arrow-right"></span></button>
        </div>
      </div>

      <hr>

      <footer>
        <ul>
          <li><a>Về App Hay</a></li>
          <li><a>Điều khoản sử dụng</a></li>
          <li><a>&copy; Copyright by Apphay.com</a></li>
        </ul>
      </footer>
    </div>

@stop