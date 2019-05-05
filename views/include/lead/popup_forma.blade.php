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
			<img src="{{asset('/img/close.png')}}" alt="" class="close" />
			<p class="title">Заполните форму</p>
			<form method="POST" action="{{route('thanks_by')}}" id="lead-popup-form">
				<!-- <input type="hidden" name="u" value="3" />
				<input type="hidden" name="f" value="3" />
				<input type="hidden" name="s" />
				<input type="hidden" name="c" value="0" />
				<input type="hidden" name="m" value="0" />
				<input type="hidden" name="act" value="sub" />
				<input type="hidden" name="v" value="2" /> -->
				<input id="lead-popup-form-name" type="text" name="fullname" placeholder="Ваше имя"/>
				<input id="lead-popup-form-email" type="email" name="email" placeholder="Ваш e-mail"/>
				<input id="lead-popup-form-phone" type="tel" name="phone"  placeholder="Ваш телефон" style="padding-right: 52px;"/>
				<input id="lead-popup-form-dialCode" type="hidden" name="dialCode">
				<button id="lead-popup-form-button" class="button" type="button">включить жизнь</button>
			</form>
		</div>
	</div> 
