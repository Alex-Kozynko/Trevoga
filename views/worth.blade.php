<!DOCTYPE html>
<html>
<head>
	<title>Онлайн курс «Включи жизнь!»</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/png" href="{{asset('/favicon.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/worth.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/fonts/fonts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
</head>
<body>
	<header>
		<div class="container">
			<h1>Видеокурс “Тревога: причины и способы борьбы”</h1>
			<div class="lesson">Урок 1</div>
		</div>
	</header>
	<main>
		<div class="container">
			<div data-fancybox href="https://www.youtube.com/watch?v=1QfRYnoh-CY" class="left"><img src="{{asset('/img/worth/1.png')}}" alt="" /><img src="{{asset('/img/worth/play.png')}}" alt="" class="play" /></div>
			<div class="right">
				<div data-fancybox href="https://www.youtube.com/watch?v=1QfRYnoh-CY" class="item">
					<div class="num">
						<div class="circle">1</div>
					</div>
					<img src="{{asset('/img/worth/play.png')}}" alt="" class="play" />
					<div class="text">Урок 1</div>
				</div>
				<div class="item lock">
					<div class="num">
						<div class="circle">2</div>
					</div>
					<img src="{{asset('/img/worth/lock.png')}}" alt="" class="play" />
					<div class="text">Урок 2</div>
				</div>
				<div class="item lock">
					<div class="num">
						<div class="circle">3</div>
					</div>
					<img src="{{asset('/img/worth/lock.png')}}" alt="" class="play" />
					<div class="text">Урок 3</div>
				</div>
			</div>
			<div class="reviews" style="height: auto;">
				<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
			</div>
		</div>
	</main>
	<!-- footer -->
	@include('include.footer')
	<!-- footer -->
	<script src="{{asset('/js/libs.min.js')}}"></script>
	<script src="{{asset('/js/script.js')}}"></script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>