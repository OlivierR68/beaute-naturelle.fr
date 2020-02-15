$( document ).ready(function() {

	// fonction pour le bouton back to top

	let wbBtn = $("#b2top-button");


	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			wbBtn.addClass('show');
		} else {
			wbBtn.removeClass('show');
		}
	});

	wbBtn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, '300');


		/*
		e.preventDefault();
		$("html, body").scrollTop(0);
		*/

	});


	// fonction pour la top bar admin


	$('.bn_cube').each(function (i, el) {

		if (Number($(el).html()) > 0 ) {
			$(el).css('background','#c63939');
		}

		if (Number($(el).html()) >= 100 ) {
			$(el).css('background','#c63939');
			$(el).html('99+');
		}

	});

	// fonction pour la page register

	$('.invalid-feedback').prev().css('border-color','red');


	// Fonction pour la souscription à la newsletter

	$('#subscribe-btn').click(function () {

		initNewsletter();

		let $mail = $('#input-subscriber').val();
		let $url = "http://ravoli.formation-web-cci.aradev.fr/newsletter/isInBase";

		console.log($url);

		if (validateEmail($mail)) {

			$('#mail-modal').html($mail);
			$.ajax({
				url: $url,
				method: 'GET',
				dataType: "json",
				data: {
					email: $mail
				}
			}).done(function(response){

				$('#status-modal').addClass('text-' + response['text'])
				$('#status-modal').text(response['status']);

				$('#ask-modal').text(response['msg']);
				$('#confirm-modal').css('display','block');
				$('#confirm-modal').text(response['button']);

			})

		} else {

			let errorMail = "<span class='text-danger'>Invalide</span>";
			let errorMsg = "Veuillez entrer une adresse email valide.";
			$('#mail-modal').html(errorMail);
			$('#ask-modal').text(errorMsg);

		}



	})

	function initNewsletter() {
		$('#status-modal').removeClass('text-danger').removeClass('text-success');
		$('#status-modal').text("-");
		$('#confirm-modal').css('display','none');
		$('#ask-modal').text("");
	}

	function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(String(email).toLowerCase());
	}

	$('#confirm-modal').click(function () {

		let $mail = $('#input-subscriber').val();
		let $url = "http://ravoli.formation-web-cci.aradev.fr/newsletter/subscribe";

		$.ajax({
			url: $url,
			method: 'GET',
			data: {
				email: $mail
			}
		})

	})


});

