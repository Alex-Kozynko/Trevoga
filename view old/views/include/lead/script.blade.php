	<script src="{{asset('/intlTelInput/js/intlTelInput.min.js')}}"></script>
	<script>
		var form = {};
		form.name = "#lead-top-form-name,#lead-popup-form-name";
		form.email = "#lead-top-form-email,#lead-popup-form-email";
		form.phone = "#lead-top-form-phone,#lead-popup-form-phone";
		form.dialCode = "#lead-top-form-dialCode,#lead-popup-form-dialCode";
		form.button = "#lead-top-form-button,#lead-popup-form-button";

		var valid = {};
		valid.name = false;
		valid.email = false;
		valid.phone = false;

	    $(form.phone).intlTelInput(
            {
              utilsScript       : "{{asset('intlTelInput/js/utils.js')}}",
              defaultCountry    : 'auto',
              separateDialCode  : false,
              nationalMode      : false,
              initialCountry    : 'auto',
              geoIpLookup       : function (callback) {
                $.get("https://ipinfo.io", function () {
                }, "jsonp").always(function (resp) {
                  var countryCode = (resp && resp.country) ? resp.country : "";
                  callback(countryCode);
                });
              },
              preferredCountries: [ 'ua','ru']
            }
        );

	    //name valid
	    function check_name_valid(jQuery_id)
	    {
	    	if( $(jQuery_id).val().length >=3 )
	    	{
	    		valid.name = true;
	    		$(jQuery_id).css('border', '2px solid #00FF00');
	    	}
	    	else
	    	{
	    		if ( valid.name == true)
	    			$(jQuery_id).css('border', '2px solid red');
	    		valid.name = false;
	    	}
	    }

	    $(form.name).on('input change', function(){
	    	check_name_valid('#' + this.id);
	    	document.cookie = 'leadName=' + $('#' + this.id).val();
	    	console.log(document.cookie);
	    });

	    //email valid
	    function check_email_valid(jQuery_id)
	    {
	    	if( $(jQuery_id).val().match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,})$/) )
	    	{
	    		valid.email = true;
	    		$(jQuery_id).css('border', '2px solid #00FF00');
	    	}
	    	else
	    	{
	    		if( valid.email == true)
	    			$(jQuery_id).css('border', '2px solid red');
	    		valid.email = false;
	    	}
	    }

	    $(form.email).on('input change', function(){
	    	check_email_valid('#' + this.id);
	    });

	    //phone valid
	    function check_phone_valid(jQuery_id)
	    {
	    	var dialCode = $(jQuery_id).intlTelInput('getSelectedCountryData').dialCode;
	    	if( $(jQuery_id).val().length < (dialCode.length + 1) )
	    	{
	    		$(jQuery_id).val('+' + dialCode);
	    		return false;
	    	}


	    	if( $(jQuery_id).intlTelInput('isValidNumber') )
	    	{
	    		valid.phone = true;
	    		$(jQuery_id).css('border', '2px solid #00FF00');
	    	}
	    	else
	    	{
	    		if( valid.phone == true)
	    			$(jQuery_id).css('border', '2px solid red');
	    		valid.phone = false;
	    	}

	    	$(form.dialCode).val(dialCode);
	    }

	    $(form.phone).on('input change', function(){
	    	check_phone_valid('#' + this.id);

	    	var dialCode = $('#' + this.id).intlTelInput('getSelectedCountryData').dialCode;
	    	if( $('#' + this.id).val().slice(0,1) != '+' && $(this).val().slice(1,dialCode.length +1) != dialCode)
	    	{
	    		$('#' + this.id).val('+' + dialCode + $('#' + this.id).val());
	    	}
	    });


	    $(form.button).on('click', function(){
	    	check_name_valid('#' + this.id.slice(0,-6) + 'name');
	    	check_email_valid('#' + this.id.slice(0,-6) + 'email');
	    	check_phone_valid('#' + this.id.slice(0,-6) + 'phone');

	    	if( valid.name && valid.email && valid.phone)
	    	{
	    		$('#' + this.id.slice(0,-7)).submit();
	    	}
	    	else
	    	{
	    		if( !valid.name)
	    			$('#' + this.id.slice(0,-6) + 'name').css('border', '2px solid red');

	    		if( !valid.email)
	    			$('#' + this.id.slice(0,-6) + 'email').css('border', '2px solid red');

	    		if( !valid.phone)
	    			$('#' + this.id.slice(0,-6) + 'phone').css('border', '2px solid red');
	    	}
	    });
	</script>  
