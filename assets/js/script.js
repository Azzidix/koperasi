$('#btnShowPass').on('click', function() {
	if($('#pass').attr('type') == 'password') {
		$('#pass').attr('type','text');
		if($('#btnShowPass').html('<i class="fa fa-eye"></i>'));

	} else {
		$('#pass').attr('type','password');
		if($('#btnShowPass').html('<i class="fa fa-eye-slash"></i>'));
	}
});
$('#user').on('change input kydown', function() {
	if($('#user').val() === '') {
		$('.err-msg-1').show();
		if($('#user').css('border','1px solid red'));
	} else {
		$('.err-msg-1').hide();
		if($('#user').css('border','1px solid #ced4da'));
	}
});
$('#pass').on('change input kydown', function() {
	if($('#pass').val() === '') {
		$('.err-msg-2').show();
		if($('#pass').css('border','1px solid red'));
	} else {
		$('.err-msg-2').hide();
		if($('#pass').css('border','1px solid #ced4da'));
	}
});
$('#btnLogin').on('click', function() {
	$('#btnLogin').html('<i class="spinner-border text-white" role="status">' +
								'<span class="sr-only">Loading...</span>' +
							'</i>');
	setTimeout(function() {
			$('#btnLogin').html('Masuk');
	}, 5000);
	
	
});
