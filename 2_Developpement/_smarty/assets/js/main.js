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

	$('.invalid-feedback').prev().css('border','red 1px solid');


});

