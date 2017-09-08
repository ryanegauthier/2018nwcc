$( document ).ready(function() {
	$("nav").find("li").on("click", "a", function () {
	        $('.navbar-collapse.in').collapse('hide');
	    });

});

function CaptchaCallback() {
	$('.g-recaptcha').each(function(i){
		console.log(i + ' captcha created');
		grecaptcha.render(this,{'sitekey' : '6LcAjy8UAAAAAG9t632yzQ7IgGgL0rBSl_1SgWBd'});
	})
}
