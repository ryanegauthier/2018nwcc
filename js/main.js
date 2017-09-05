$( document ).ready(function() {

 
});

function CaptchaCallback() {
	$('.g-recaptcha').each(function(i){
		console.log(i + ' captcha created');	
		grecaptcha.render(this,{'sitekey' : '6LdadyMTAAAAAC_PD6Il9BQV69UwkrT-eqMY9oet'});
	})
}