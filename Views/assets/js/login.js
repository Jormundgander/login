
$(function() {

	$('.btnCustomized').click(function(e) {
		e.preventDefault();

		var username = $('.username').val();
		var pass = $('.pass').val();

		$.ajax({
			url: 'index.php?url=Login',
			method: 'POST',
			data: {
				username: username,
				pass: pass,
				request: true
			},
			success: function (response) {
				
				var responseOfServer = JSON.parse(response);

				if(responseOfServer.acceso === 'Concedido') {

            		window.location.href='?url=home';

				} else if (responseOfServer.acceso === 'Negado') {
					
					$('.authMessage').html('<p class="alert alert-danger text-center">Usuario o contraseña incorrecta(s), por favor intente nuevamente</p>');
				
				}
			}
		});
	})

});