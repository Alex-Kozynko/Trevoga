<!DOCTYPE html>
<html>
<head>
	<title>Онлайн курс «Включи жизнь!»</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/png" href="{{asset('/favicon.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/lead.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/fonts/fonts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/intlTelInput/css/intlTelInput.min.css')}}">
</head>
<body>
	<header>
		<div class="container">
			<time>19-20 Октября в 20:00 Мск / Киев</time>
			<div class="free-class">2-дневный бесплатный онлайн мастер-класс</div>
			<p class="text">От эксперта-психолога с 18-летним практическим стажем Наталии Ломоносовой</p>
			<h1>Как перестать тревожиться</h1>
			<h2>и начать жить с удовольствием</h2>
			<p class="text2">Два дня ценной информации, которая поможет вам расширить 
			представления о себе и своих возможностях, стать смелее, мудрее и свободнее.</p>
			<div class="img-form">
				<div class="img">
					<img src="{{asset('/img/header/1.png')}}" alt="" class="wow jackInTheBox" data-wow-delay="100ms" />
					<img src="{{asset('/img/header/2.png')}}" alt="" class="wow jackInTheBox" data-wow-delay="200ms" />
					<img src="{{asset('/img/header/3.png')}}" alt="" class="wow jackInTheBox" data-wow-delay="300ms" />
					<img src="{{asset('/img/header/youtube.png')}}" alt="" class="youtube wow jackInTheBox" data-wow-delay="600ms" />
				</div>
				<form method="POST" action="{{route('thanks_by')}}" id="lead-top-form">
					<!-- <input type="hidden" name="u" value="3" />
					<input type="hidden" name="f" value="3" />
					<input type="hidden" name="s" />
					<input type="hidden" name="c" value="0" />
					<input type="hidden" name="m" value="0" />
					<input type="hidden" name="act" value="sub" />
					<input type="hidden" name="v" value="2" /> -->
					<div class="title">Зарегистрируйтесь на мастер-класс
					<span>сейчас и получите серию бонусных видеоуроков!</span></div>
					<input type="text" id="lead-top-form-name" name="fullname" placeholder="Ваше имя" />
					<input type="email" id="lead-top-form-email" name="email" placeholder="Ваш email"/>
					<input type="tel" id="lead-top-form-phone" name="phone" placeholder="Ваш телефон" style="padding-right: 52px;" />
					<!--<input type="hidden" id="lead-top-form-dialCode" name="dialCode"> -->
					<a id="lead-top-form-button" class="button">Принять участие</a>
				</form>
			</div>
		</div>
	</header>
	<main>
		<div class="feel">
			<div class="bg-yellow"></div>
			<div class="line"></div>
			<div class="container">
				<h2>Для кого?</h2>
				<div class="item">
					<div class="circle wow zoomIn">
						<div class="circle2 wow zoomIn">
							<div class="num wow zoomIn">1</div>
						</div>
					</div>
					<div class="text"><span>Находитесь в постоянном напряжении, </span>испытываете стресс на работе или дома?</div>
				</div>
				<div class="item">
					<div class="circle wow zoomIn">
						<div class="circle2 wow zoomIn">
							<div class="num wow zoomIn">2</div>
						</div>
					</div>
					<div class="text"><span>Сложно контролировать свои эмоции,</span> особенно в стрессовых ситуациях?</div>
				</div>
				<div class="item">
					<div class="circle wow zoomIn">
						<div class="circle2 wow zoomIn">
							<div class="num wow zoomIn">3</div>
						</div>
					</div>
					<div class="text"><span>Нерешительность, страх, откладывание на потом </span>мешают реализовывать цели и желания?</div>
				</div>
				<div class="item">
					<div class="circle wow zoomIn">
						<div class="circle2 wow zoomIn">
							<div class="num wow zoomIn">4</div>
						</div>
					</div>
					<div class="text"><span>Испытываете мандраж или тревогу </span>перед ответственным событием?</div>
				</div>
				<div class="item">
					<div class="circle wow zoomIn">
						<div class="circle2 wow zoomIn">
							<div class="num wow zoomIn">5</div>
						</div>
					</div>
					<div class="text"><span>Постоянно прокручиваете в голове беспокойные мысли </span>и не можете отпустить ситуацию даже 
					после того, как она завершилась?</div>
				</div>
				<div class="item">
					<div class="circle wow zoomIn">
						<div class="circle2 wow zoomIn">
							<div class="num wow zoomIn">6</div>
						</div>
					</div>
					<div class="text"><span>Чувствуете себя неуверенно,</span> все время спрашиваете себя “а как это будет выглядеть” и “а вдруг 
					что-то плохое подумают обо мне”?</div>
				</div>
				<p class="text">Тревога и беспокойство мешают нам радоваться жизни и полноценно жить.  Напряжение, борьба с тревожными мыслями и эмоциями отнимают слишком много сил и энергии.
				Тогда наш курс для вас.
				Присоединяйтесь к нашему 2-дневному мастер-классу и узнайте у профессионала, как справляться с тревогой и обрести контроль над своими состояниями.</p>
				<button class="button form-trigger">Зарегистрироваться</button>
			</div>
		</div>
		<div class="way">
			<img src="{{asset('/img/way/bg2.png')}}" alt="" class="bg" />
			<div class="container">
				<div class="right">
					<h2>Кто пройдет 
					этот путь с вами </h2>
					<p class="title">и проведет вас за руку к желаемым результатам</p>
					<ul>
						<li><span></span>Практикующий психолог с 18-летним стажем (провела более
						10 000 консультаций, не считая ТВ практику)</li>
						<li><span></span>VR-терапевт</li>
						<li><span></span>Гипнотерапевт</li>
						<li><span></span>M.A. NLP (нейролингвистическое программирование) </li>
						<li><span></span>Лингвист</li>
						<li><span></span>Специалист по групповой психотерапии и социально-
						психологическим тренингам</li>
						<li><span></span>Тренер обучающих программ</li>
					</ul>
					<p class="text">Телеведущая, телевизионный эксперт-психолог, основатель Института Гипноза и Психотерапии в г. Киев, научный секретарь Украинского Общества Гипноза.

					Основные направления работы — индивидуальная и семейная психотерапия. </p>
				</div>
				<div class="plash">
					<div class="text">
						<p class="title">Наталия Ломоносова</p>
						Дипломированный психолог
					</div>
				</div>
			</div>
		</div>
		<div class="certificate">
			<div class="line"></div>
			<div class="container">
				<h2>Часть сертификатов 
				о профессиональном росте</h2>
				<div class="slider">
					<div class="item">
						<img src="{{asset('/img/certificate/1.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/2.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/3.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/4.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/5.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/6.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/7.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/8.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/9.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/10.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/11.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/12.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/13.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/14.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/15.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/16.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/17.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/18.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/19.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/20.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/21.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/22.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
					<div class="item">
						<img src="{{asset('/img/certificate/23.jpg')}}" alt="" />
						<div class="border"></div>
					</div>
				</div>
				<button class="button form-trigger">Зарегистрироваться</button>
			</div>
		</div>
		<div class="know">
			<div class="bg-yellow"></div>
			<div class="line"></div>
			<h2>Что Вы узнаете за 2 дня мастер-класса</h2>
			<div class="container">
				<div class="item">
					<div class="day">День 1</div>
					<div class="plan">
						<div class="question">
							<div class="num">01</div>Что такое тревога и почему она возникает? 
						</div>
						<div class="question">
							<div class="num">02</div>Что делает ваше тело и почему?
						</div>
						<div class="question">
							<div class="num">03</div>Как мышление влияет на развитие тревоги?
						</div>
						<div class="question">
							<div class="num">04</div>Что такое порочный круг тревоги?
						</div>
						<div class="question">
							<div class="num">05</div>Как управлять собой? Наши психические состояния.
						</div>
						<div class="question">
							<div class="num">06</div>Защитные механизмы от тревоги и страхов.
						</div>
						<div class="question">
							<div class="num">07</div>Что такое уверенность в себе и где ее взять?
						</div>
						<div class="question">
							<div class="num">08</div>Техники “скорой помощи” при необходимости “быть уверенным”.
						</div>
						<div class="learn">
							Вы научитесь:
							<ul>
								<li>• Общим принципам борьбы с тревогой.</li>
								<li>• Практическим навыкам борьбы с тревогой.</li>
								<li>• Техникам скорой помощи при тревоге и волнении.</li>
								<li>• Методам релаксации, медитации и самогипноза.</li>
								<li>• Техникам самопомощи в тревожных ситуациях, способам нейтрализовать
								негативные эмоции.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="day">День 2</div>
					<div class="plan">
						<div class="question">
							<div class="num">01</div>Как разорвать порочный круг тревоги и освободить себя?
						</div>
						<div class="question">
							<div class="num">02</div>Как находить скрытые причины тревоги? 
						</div>
						<div class="question">
							<div class="num">03</div>Что такое ограничивающие убеждения и фиксированные идеи?
							Как отказ от них приводит к глубоким изменениям в жизни?
						</div>
						<div class="question">
							<div class="num">04</div>Как изменить негативное мышление?
						</div>
						<div class="question">
							<div class="num">05</div>Страх публичных выступлений: пошаговое руководство, как его преодолеть.
						</div>
						<div class="question">
							<div class="num">06</div>Социальное беспокойство - как освободить себя от страха и беспокойства во время общения. 
						</div>
						<div class="learn">
							Вы научитесь:
							<ul>
								<li>• Преодолевать тревогу.</li>
								<li>• Преодолеть свой страх и сделать первый шаг к своей мечте.</li>
								<li>• Быть увереным в себе человеком.</li>
								<li>• Обретать внутреннюю опору и спокойствие.</li>
								<li>• Преодолевать социальное беспокойство и страх публичных выступлений.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<button class="button form-trigger">Зарегистрироваться</button>
		</div>
		<div class="reviews2">
			<div class="line"></div>
			<h2>Уже более 7 500 человек вернулись 
			к счастливой жизни</h2>
			<div class="container">
				<div class="title">благодаря Наталии</div>
				<div class="slider">
					<div class="item">
						<div class="photo">
							<img src="{{asset('/img/reviews/photo.png')}}" alt="" />
						</div>
						<div class="name">Наталия</div>
						<div class="text">Lorem Ipsum is simply dummy text
						of the printing and typesetting
						industry. Lorem Ipsum has been the
						industry's standard dummy text ever
						since the 1500s,</div>
					</div>
					<div class="item">
						<div class="photo">
							<img src="{{asset('/img/reviews/photo.png')}}" alt="" />
						</div>
						<div class="name">Любовь Пронина</div>
						<div class="text">Доброе утро всем) Меня зовут Любовь Пронина. Хочу оставить отзыв о моем любимом психологе Наталье Ломоносовой) Познакомились мы на проекте Мое Нове Життя. На тот момент в моей жизни были очень не легкие обстоятельства и я пришла к ней за помощью.
Наталья расположила к себе с первых минут общения т.к умеет создать доверительную обстановку, старается расположить к себе и помочь человеку раскрыть проблему, оценить ситуацию намного шире и глубже. Она умеет научить человека самостоятельно проанализировать обстоятельства и понять , как выйти из них. наделена Ее отличные качества это предусмотрительность и способностью предвидеть возможное развитие событий. Я в ней увидела психолога от природы.
Она очень профессионально подходит к каждой вопросу.</div>
					</div>
					<div class="item">
						<div class="photo">
							<img src="{{asset('/img/reviews/photo.png')}}" alt="" />
						</div>
						<div class="name">Наталия</div>
						<div class="text">Lorem Ipsum is simply dummy text
						of the printing and typesetting
						industry. Lorem Ipsum has been the
						industry's standard dummy text ever
						since the 1500s,</div>
					</div>
				</div>
			</div>
			<button class="button form-trigger">Зарегистрироваться</button>
		</div>
	</main>
	<!-- footer -->
	@include('include.footer')
	<!-- footer -->
	@include('include.lead.popup_forma')
	<script src="{{asset('/js/libs.min.js')}}"></script>
	<script src="{{asset('/js/script.js')}}"></script>
	@include('include.lead.script')
</body>
</html>