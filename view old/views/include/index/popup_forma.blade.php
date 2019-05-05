	<style type="text/css">

		@media screen and (max-width: 1000px){
			.popup-forma .form form .intl-tel-input{
				width: 100%;
			    height: 12.5vw;
			    margin-bottom: 3.125vw;
			    font-size: 4.375vw;
			}
			
		}
	</style>
  
	<div class="popup-forma">
		<div class="close-bg"></div>
		<div class="form">
			<img src="{{asset('/img/close.webp')}}" alt="" class="close" />
			<p class="title">Заполните форму</p>
			<form method="POST" action="" id="index-popup-form">
				<!-- <input id="index-popup-form-u" type="hidden" name="u" value="7" />
				<input id="index-popup-form-f" type="hidden" name="f" value="7" />
				<input type="hidden" name="s" />
				<input type="hidden" name="c" value="0" />
				<input type="hidden" name="m" value="0" />
				<input type="hidden" name="act" value="sub" />
				<input type="hidden" name="v" value="2" /> -->
				<input id="index-popup-form-name" type="text" name="name" placeholder="Ваше имя"/>
				<input id="index-popup-form-email" type="email" name="email" placeholder="Ваш e-mail"/>
				<input id="index-popup-form-phone" type="tel" name="phone"  placeholder="Ваш телефон" style="padding-right: 52px;" maxlength="13" />
				<input id="index-popup-form-dialCode" type="hidden" name="dialCode">
				<input id="index-popup-courseType" type="hidden" name="courseType">
				<button id="index-popup-form-button" class="button" type="button">включить жизнь</button>
			</form>
		</div>
	</div> 
