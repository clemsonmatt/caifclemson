// JavaScript Document
	$(document).ready(function() {
		$('#username').blur(function(){
			if($('#username').val().length > 2)
			{
				var username = $('#username').val();
				getResult(username);
			}
			return false;
		})
		function getResult(name){
			var baseurl = $('.hiddenUrl').val();
			$.ajax({
				url : baseurl + 'host/getResultFromDB/' + name,
				cache: false,
				success: function(response){
					if(response == 'UsernameOK'){
						 $('span.checkUser').text('Username OK!').show();
					}
					else
						$('span.checkUser').text('Username Already Taken').show();
				}
			})
		}
	})