<!DOCTYPE html>
<html>
<head>
	<title>Онлайн курс «Включи жизнь!»</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/png" href="{{asset('/favicon.webp')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/thanks_by.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/fonts/fonts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
</head>
<body>
	<header>
		<div class="container">
			<img src="{{asset('/img/thanks/woman.webp')}}" alt="" />
			<div class="right">
				<h1>Поздравляю, 
				<span class="name">{{$name}}</span>!</h1>
				<p class="text">Уже через несколько минут на Вашу почту придет
				письмо с доступом к моему первому уроку. 

				Обязательно его посмотрите: в нем ценная информа-
				ция, которую Вы не найдете просто так в интернете.</p>
			</div>
		</div>
	</header>
	<main>
		<div class="video_course">
			<div class="bg-yellow"></div>
			<div class="container">
				<div class="left">
					<h2>Но не спешите закрывать 
					эту страницу…</h2>
					<div class="text">Вы увидите ее только 1 раз. Больше она не будет доступна.</div>
					<div class="proposition">У меня есть особое предложение для Вас, 
					которое действует всего 60 минут!</div>
					<div class="time"><img src="{{asset('/img/thanks/clock.webp')}}" alt="" />90-минутный видеокурс:</div>
					<h2>“Что такое Проблемы 
					и как научиться их 
					решать быстро 
					и легко”</h2>
				</div>
				<img class="right" src="{{asset('/img/thanks/DVD.webp')}}" alt="" />
			</div>
			<div class="old-prise">Обычная цена: 70$</div>
			<div class="prise">Цена сейчас: всего 7$</div>
			<div class="button">Получить за 7$</div>
			<div class="text2">Актуально еще</div>
			<div class="timer" data-timer="3601"></div>
		</div>
		<div class="course">
			<div class="container">
				<p>В жизни каждый человек сталкивается с задачами, трудностями и проблемами, решение которых требует огромного количества умственных, энергетических и временных затрат.</p>

				<p class="text">Решение проблем - часть повседневной жизни, но справляться с ними, к сожалению, умеют далеко не все.</p>

				<p>Мне знакомы ощущения, когда проблемы накапливаются и, человек становится их заложником. Погружается в состояние стресса, занятости и борьбы. Начинает воспринимать жизнь как тяжелую и враждебную. </p>

				<p class="text">Хочу, чтоб вы понимали: проблемы можно научиться решать легко и играючи! 
				Это просто, если знать, какие вопросы себе задавать. </p>

				<p>Курс покажет, как<span> ум может способен блестяще решать проблемы, переосмысливая трудное в легкое.</span> Как правильные вопросы к себе и взгляд с неожиданной точки зрения помогают найти оптимальное решение.</p>
			</div>
		</div>
		<div class="get">
			<div class="container">
				<p class="text">Потратив 1,5 часа своей жизни и 7$, вы узнаете алгоритмы решения любых проблем. А главное, сэкономите в будущем огромное количество времени, ресурсов и сил и направите их на создание счастливой жизни, а не на борьбу с «ветряными мельницами». <img src="{{asset('/img/thanks/sun.webp')}}" alt="" /></p>
			</div>
		</div>
	</main>
	<div class="access">
		<div class="container">
			<div class="left">
				<div class="proposition">Не упустите возможность получить доступ 
				к 90-минутному видеоуроку:</div>
				<h2>“Что такое Проблемы
				и как научиться их
				решать быстро и
				и легко”</h2>
			</div>
			<div class="right">
				<div class="old-prise">Обычная цена: 70$</div>
				<div class="prise">Цена сейчас: всего 7$</div>
				<div class="button">Получить за 7$</div>
			</div>
		</div>
		<div class="text">Актуально еще</div>
		<div class="timer" data-timer="3601"></div>
	</div>
	<!-- footer -->
	@include('include.footer')
	<!-- footer -->
	<script src="{{asset('/js/libs.min.js')}}"></script>
	<script src="{{asset('/js/script.js')}}"></script>
	<script src="{{asset('/js/TimeCircles.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$(".timer").TimeCircles({
				start: true,
				animation: "smooth",
				count_past_zero: true,
				circle_bg_color: "#ff7550",
				use_background: true,
				fg_width: 0.04,
				bg_width: 1,
				count_past_zero: false,
				text_size: 0.14,
				total_duration: "Auto",
				direction: "Clockwise", 
				use_top_frame: false,
				start_angle: 0, 
				time: { 
					Days: {
						show: false
					},
					Hours: {
						show: true,
						text: "часов",
						color: "#c7bbd2"
					},
					Minutes: {
						show: true,
						text: "минут",
						color: "#c7bbd2"
					},
					Seconds: {
						show: true,
						text: "секунд",
						color: "#c7bbd2"
					}
				}
			});
		})
	</script>
</body>
</html>