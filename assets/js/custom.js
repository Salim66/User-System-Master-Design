(function($){
	$(document).ready(function(){

		// Resister form show
		$('#register-link').click(function(){
			$('#login-box').hide();
			$('#register-box').show();
		});

		//  Back Login form show
		$('#login-link').click(function(){
			$('#register-box').hide();
			$('#login-box').show();
		});

		// Forgot form show
		$('#forgot-link').click(function(){
			$('#login-box').hide();
			$('#forgot-box').show();
		});

		// Back login page 
		$('#back-link').click(function(){
			$('#forgot-box').hide();
			$('#login-box').show();
		});


	});
})(jQuery)