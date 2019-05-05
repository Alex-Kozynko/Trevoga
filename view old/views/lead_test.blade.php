<!DOCTYPE html>
<html>
<head>
	<title>Онлайн курс «Включи жизнь!»</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/png" href="{{asset('/favicon.webp')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/lead_test.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/fonts/fonts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
</head>
<body>
	<header>
		<div class="container">
			<p class="text">Словите себя на мысли, что постоянно напряжены или о чем-то тревожитесь?
			В голове крутятся беспокойные мысли?    
			Часто раздражаетесь или расстраиваетесь?</p>
			<h1>Пройдите быстрый тест</h1>
			<h2>и определите уровень Вашей тревоги</h2>
			<a href="{{route('test')}}" class="button">Пройти тест</a>
			<p class="text2">Тест поможет определить, как вы чувствуете себя на самом деле. 
			Он покажет Ваши переживания и эмоции, которых Вы можете не замечать.</p>
		</div>
	</header>
	<main>
		<div class="test">
			<div class="line"></div>
			<div class="container">
				<div class="item">
					<img src="{{asset('/img/lead_test/1.webp')}}" alt="" />
					<div class="text">
						<span>Надежная шкала самооценки:</span>

						измеряет степень 
						тревоги и депрессии.
					</div>
				</div>
				<div class="item">
					<img src="{{asset('/img/lead_test/2.webp')}}" alt="" />
					<div class="text">
						<span>Скорость:</span>
						
						14 вопросов, время 
						заполнения — от 2 до 5 минут.
					</div>
				</div>
				<div class="item">
					<img src="{{asset('/img/lead_test/3.webp')}}" alt="" />
					<div class="text">
						<span>Простота:</span>
						
						легко заполнить, подсчитать
						и воспринимать результаты.
					</div>
				</div>
				<div class="item">
					<img src="{{asset('/img/lead_test/4.webp')}}" alt="" />
					<div class="text">
						<span>Эффективность:</span>
						
						тест используется 
						практиками всего мира.
					</div>
				</div>
			</div>
			<div class="title">Пройдите тест и получите бесплатно ценные 
			рекомендации от профессионального психолога</div>
			<a href="{{route('test')}}" class="button">Пройти тест</a>
		</div>
	</main>
	<!-- footer -->
	@include('include.footer')
	<!-- footer -->
	<script src="{{asset('/js/libs.min.js')}}"></script>
	<script src="{{asset('/js/script.js')}}"></script>
</body>
</html>