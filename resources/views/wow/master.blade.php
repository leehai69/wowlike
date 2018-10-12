<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TH-LIKE.COM ปั้มไลค์ โกงไลค์ เพิ่มไลค์ฟรี ปั้มไลค์เฟสบุ๊ค วิธีปั้มไลค์ฟรี ปั้มไลค์รูปเฟส ปั้มไลค์ ในโทรศัพท์ ปั้มไลค์รูป เฟสบุ๊ค ปั้มไลค์มือถือ ปั้มไลค์เพจ </title>
		<meta name="language" CONTENT="en-th">
		<meta http-equiv="content-language" content="th"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="AUTHOR" content="https://th-like.com/"/>
		<meta name="COPYRIGHT" content="Copyright (c) 2015 by https://th-like.com/"/>
		<meta name="KEYWORDS" content="ปั้มไลค์, โกงไลค์, ปั้มไลค์เฟสบุ๊ค, เพิ่มไลค์ฟรี, ปั้มไลค์รูป, ปั้มไลค์ ในโทรศัพท์, ปั้มไลค์มือถือ, ปั้มไลค์รูปเฟส, วิธีปั้มไลค์ฟรี, ปั้มไลค์เฟสฟรี, เพิ่มไลค์เพจ, วิธีเพิ่มไลค์, เฟสบุ๊ค"/>
		<meta property="og:description" content="วิธีเพิ่มไลค์ ปั้มไลค์ ปั้มไลค์ โกงไลค์ ปั้มไลค์รูปในโทรศัพท์ ปั้มไลค์เฟสบุ๊ค เพิ่มไลค์ฟรี ปั้มไลค์มือถือ ปั้มไลค์รูปเฟส วิธีปั้มไลค์ฟรี"/>
		<meta http-equiv="Cache-Control" content="no-store" />
		<meta name="stats-in-th" content="a847"/>
		<meta content='index, follow, all' name='robots'/>
		<meta name="googlebots" content="INDEX,FOLLOW">
		<meta name="author" content="https://th-like.com/">
		<meta property="og:title" content="TH-LIKE.COM ปั้มไลค์ โกงไลค์ เพิ่มไลค์ฟรี ปั้มไลค์เฟสบุ๊ค วิธีปั้มไลค์ฟรี ปั้มไลค์รูปเฟส ปั้มไลค์ ในโทรศัพท์ ปั้มไลค์รูป เฟสบุ๊ค ปั้มไลค์มือถือ ปั้มไลค์เพจ"/>
		<meta property="og:site_name" content="https://th-like.com/"/>
		<meta property="og:url" content="https://th-like.com/"/>
		<meta name="description" content="ปั้มไลค์ โกงไลค์ เพิ่มไลค์ฟรี ปั้มไลค์เฟสบุ๊ค วิธีปั้มไลค์ฟรี ปั้มไลค์รูปเฟส ปั้มไลค์ ในโทรศัพท์ ปั้มไลค์รูป เฟสบุ๊ค ปั้มไลค์มือถือ ปั้มไลค์เพจ">
        <meta name="LANGUAGE" content="TH,EN">
        <meta name="ROBOTS" content="All">
		<meta name="stats-in-th" content="347b" />
		<meta content='index, follow, all' name='robots'/>
		<meta name="googlebots" content="INDEX,FOLLOW">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta name="csrf-token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="/cdn/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/cdn/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/cdn/toastr/toastr.min.css" />
    <link rel="stylesheet" href="/cdn/bootstrap/css/todc-bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/wow-lucdz.css')}}?v=<?=rand(99999,mt_getrandmax())?>" />
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/wowlike.js?v=<?=rand(99999,mt_getrandmax())?>"></script>
    <script src="/cdn/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.0/jquery.timeago.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="/cdn/toastr/toastr.min.js" type="text/javascript"></script>
    <script src="/js/countdown.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://www.tmtopup.com/topup/3rdTopup.php?uid=218837"></script>
  </head>
  <body class="">
    <script>
        $(document).ready(()=>{
            $('#navbar-main').find('.active').remove('.active');
            $.each($('#navbar-main ul li a'),(k,v)=>{
                var nav = $(v).attr('href');
                var path = '/<?=Request::path()?>';
                if(path == '/likes' || path == '/reactions'){
                    $(v).parent().addClass('active');
                    return false;
                }else if(path == nav){
                    $(v).parent().addClass('active');
                    return false;
                }

            });
        });
    </script>
    @include('wow.layouts.header')
    @yield('content')
    @include('wow.layouts.footer')
    <!-- Modal -->
      <div class="modal fade" id="getToken" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">คลิกเพื่อรับโทเค้น</h4>
            </div>
            <div class="modal-body">
                <div class="input-group form-group col-md-12">
                    <span class="input-group-addon addon-register" id="basic-addon1">Username</span>
                    <input type="text" class="form-control" id="username" placeholder="Username / Email" aria-label="Re Password" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group col-md-12">
                    <span class="input-group-addon addon-register" id="basic-addon1">Password</span>
                    <input type="password" class="form-control" id="password" placeholder="**********" aria-label="Re Password" aria-describedby="basic-addon1">
                </div>
                <div class="input-group form-group col-md-12">
                    <span class="input-group-addon addon-register" id="basic-addon1">Select App</span>
                    <select type="password" class="form-control" id="fbapp" placeholder="**********" aria-label="Re Password" aria-describedby="basic-addon1">
                         <option value="android">Facebook for Android</option>
			             <option value="iphone">Facebook for iPhone</option>
                    </select>
                </div>
                <div class="text-center">
                    <button class="btn btn-danger" onclick="getToken()">GET</button>
                </div>
                <div id="result"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Modal -->
      <div class="modal fade" id="video_ytb" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">สอนปั้มไลค์ บนมือถือ</h4>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="350" src="https://www.youtube.com/embed/bijl7pQdOe0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <style>
        #getToken{
            background: #333333a6;
        }
        #result iframe{
            width: 100%;
            border: 1px solid #dddd;
            box-shadow: 0px 0px 5px 0px #350;
            margin-top: 35px;
        }
        .ui-dialog{
                left: 40% !important;
                top: 25%;
        }
      </style>
  </body>
</html>
