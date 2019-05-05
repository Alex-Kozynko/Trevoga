<!DOCTYPE html>
<html>
<head>
	<title>Онлайн курс «Включи жизнь!»</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/png" href="{{asset('/favicon.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/test.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/fonts/fonts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
</head>
<body>
	<form method="post" action="{{route('test_result')}}">
		<h1>Тест HADS</h1>
		<div class="question">
			<div class="num">
				<div class="circle">01</div>Я чувствую себя напряженным или возбужденным:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="time" name="A[0]" value="3">
					<label for="time"><span class="box"><span class="check"></span></span>Большую часть времени.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="often" name="A[0]" value="2">
					<label for="often"><span class="box"><span class="check"></span></span>Достаточно часто.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="sometimes" name="A[0]" value="1">
					<label for="sometimes"><span class="box"><span class="check"></span></span>Иногда, время от времени.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="rarely" name="A[0]" value="0">
					<label for="rarely"><span class="box"><span class="check"></span></span>Очень редко.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">02</div>То, что приносило мне удовольствие раньше, также приносит его и сейчас:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="yes" name="D[0]" value="0">
					<label for="yes"><span class="box"><span class="check"></span></span>Да, это так.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="almost" name="D[0]" value="1">
					<label for="almost"><span class="box"><span class="check"></span></span>Почти, но не совсем.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="partially" name="D[0]" value="2">
					<label for="partially"><span class="box"><span class="check"></span></span>Только частично, в малой степени.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="no" name="D[0]" value="3">
					<label for="no"><span class="box"><span class="check"></span></span>Совсем нет.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">03</div>Мне не по себе, кажется, будто что-то ужасное вот-вот произойдет:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="fear" name="A[1]" value="3">
					<label for="fear"><span class="box"><span class="check"></span></span>Скорее всего, и я этого очень боюсь.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="good" name="A[1]" value="2">
					<label for="good"><span class="box"><span class="check"></span></span>Да, но не так уж все и плохо.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="a" name="A[1]" value="1">
					<label for="a"><span class="box"><span class="check"></span></span>Отчасти, и это не то чтобы меня сильно беспокоило.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="b" name="A[1]" value="0">
					<label for="b"><span class="box"><span class="check"></span></span>Совсем нет.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">04</div>Я способен смеяться и подмечать смешное вокруг:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="c" name="D[1]" value="0">
					<label for="c"><span class="box"><span class="check"></span></span>Так же, как я всегда мог это делать.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="d" name="D[1]" value="1">
					<label for="d"><span class="box"><span class="check"></span></span>Да, но уже не вполне так, как раньше.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="f" name="D[1]" value="2">
					<label for="f"><span class="box"><span class="check"></span></span>Точно не так, как мог раньше.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="g" name="D[1]" value="3">
					<label for="g"><span class="box"><span class="check"></span></span>Сейчас я вообще не способен на это.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">05</div>Беспокойные мысли крутятся у меня в голове:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="i" name="A[2]" value="3">
					<label for="i"><span class="box"><span class="check"></span></span>Постоянно.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="h" name="A[2]" value="2">
					<label for="h"><span class="box"><span class="check"></span></span>Большую часть времени.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="j" name="A[2]" value="1">
					<label for="j"><span class="box"><span class="check"></span></span>Время от времени, но не слишком часто.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="k" name="A[2]" value="0">
					<label for="k"><span class="box"><span class="check"></span></span>Лишь изредка.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">06</div>Я чувствую себя бодрым:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="l" name="D[2]" value="3">
					<label for="l"><span class="box"><span class="check"></span></span>Совсем не чувствую.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="m" name="D[2]" value="2">
					<label for="m"><span class="box"><span class="check"></span></span>Редко.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="n" name="D[2]" value="1">
					<label for="n"><span class="box"><span class="check"></span></span>Иногда.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="o" name="D[2]" value="0">
					<label for="o"><span class="box"><span class="check"></span></span>Большую часть времени.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">07</div>Я легко могу сесть и расслабиться:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="p" name="A[3]" value="0">
					<label for="p"><span class="box"><span class="check"></span></span>Конечно, могу.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="q" name="A[3]" value="1">
					<label for="q"><span class="box"><span class="check"></span></span>Обычно могу.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="r" name="A[3]" value="2">
					<label for="r"><span class="box"><span class="check"></span></span>Не всегда.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="s" name="A[3]" value="3">
					<label for="s"><span class="box"><span class="check"></span></span>Совсем не могу.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">08</div>Мне кажется, что я все стал делать медленнее:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="t" name="D[3]" value="3">
					<label for="t"><span class="box"><span class="check"></span></span>Практически постоянно.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="x" name="D[3]" value="2">
					<label for="x"><span class="box"><span class="check"></span></span>Очень часто.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="y" name="D[3]" value="1">
					<label for="y"><span class="box"><span class="check"></span></span>Иногда.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="z" name="D[3]" value="0">
					<label for="z"><span class="box"><span class="check"></span></span>Вовсе нет.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">09</div>Я сильно взволнован или испуган:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="a1" name="A[4]" value="0">
					<label for="a1"><span class="box"><span class="check"></span></span>Совсем нет.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="b1" name="A[4]" value="1">
					<label for="b1"><span class="box"><span class="check"></span></span>Иногда, время от времени.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="c1" name="A[4]" value="2">
					<label for="c1"><span class="box"><span class="check"></span></span>Достаточно часто.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="d1" name="A[4]" value="3">
					<label for="d1"><span class="box"><span class="check"></span></span>Очень часто.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">10</div>Я не слежу за своей внешностью:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="e1" name="D[4]" value="3">
					<label for="e1"><span class="box"><span class="check"></span></span>Да, не слежу.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="f1" name="D[4]" value="2">
					<label for="f1"><span class="box"><span class="check"></span></span>Я не забочусь о своей внешности так, как должен был бы.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="g1" name="D[4]" value="1">
					<label for="g1"><span class="box"><span class="check"></span></span>Возможно, я слежу за собой меньше, чем следовало бы.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="i1" name="D[4]" value="0">
					<label for="i1"><span class="box"><span class="check"></span></span>Я слежу за собой так же, как и раньше.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">11</div>Я испытываю беспокойство, словно бы мне нужно было куда-то бежать:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="h1" name="A[5]" value="3">
					<label for="h1"><span class="box"><span class="check"></span></span>Абсолютно верно.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="j1" name="A[5]" value="2">
					<label for="j1"><span class="box"><span class="check"></span></span>В значительной степени.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="k1" name="A[5]" value="1">
					<label for="k1"><span class="box"><span class="check"></span></span>Лишь в некоторой степени.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="l1" name="A[5]" value="0">
					<label for="l1"><span class="box"><span class="check"></span></span>Совсем нет.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">12</div>Предвкушаю, как займусь чем-нибудь приятным:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="m1" name="D[5]" value="0">
					<label for="m1"><span class="box"><span class="check"></span></span>Так же, как всегда.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="n1" name="D[5]" value="1">
					<label for="n1"><span class="box"><span class="check"></span></span>Скорее меньше, чем раньше.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="o1" name="D[5]" value="2">
					<label for="o1"><span class="box"><span class="check"></span></span>Точно реже и меньше, чем раньше.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="p1" name="D[5]" value="3">
					<label for="p1"><span class="box"><span class="check"></span></span>Не жду ничего приятного. Разве что самую малость.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">13</div>У меня бывает внезапное чувство паники:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="q1" name="A[6]" value="3">
					<label for="q1"><span class="box"><span class="check"></span></span>Действительно, очень часто.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="r1" name="A[6]" value="2">
					<label for="r1"><span class="box"><span class="check"></span></span>Вполне часто.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="s1" name="A[6]" value="1">
					<label for="s1"><span class="box"><span class="check"></span></span>Не слишком часто.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="t1" name="A[6]" value="0">
					<label for="t1"><span class="box"><span class="check"></span></span>Никогда не бывает.</label>
				</div>
			</div>
		</div>
		<div class="question">
			<div class="num">
				<div class="circle">14</div>Я получаю удовольствие от хорошего фильма, книги или радиопередачи:
			</div>
			<div class="select">
				<div>
					<input type="radio" required="" class="radio" id="x1" name="D[6]" value="0">
					<label for="x1"><span class="box"><span class="check"></span></span>Часто.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="y1" name="D[6]" value="1">
					<label for="y1"><span class="box"><span class="check"></span></span>Иногда.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="z1" name="D[6]" value="2">
					<label for="z1"><span class="box"><span class="check"></span></span>Достаточно редко.</label>
				</div>
				<div>
					<input type="radio" required="" class="radio" id="a2" name="D[6]" value="3">
					<label for="a2"><span class="box"><span class="check"></span></span>Очень редко.</label>
				</div>
			</div>
		</div>
		<button type="submit" class="button">Отправить</button>
	</form>
</body>
</html>