(function ($) {
	const sendForm = $('#sendForm');
	const formTerms = $('#formTerms');
	const formInput = $('#getMoreForm :input[type=text], input[type=number]');
	const formPhone = $('#formPhone');
	const formEmail = $('#formEmail');
	const maxPhoneLength = 10;
	const EmailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

	let typingTimer;
	let doneTypingInterval = 500;
	let canSend = false;
	let correctEmail = false;

	formInput.on('keyup', function () {
		$(this).removeClass('error');
		$(this).next('.is-mandatory').hide();

		if (!$(this).val()) {
			$(this).addClass('error');
			$(this).next('.is-mandatory').show();
		}
		checkForm()
	})

	formEmail.on('keyup', function () {
		clearTimeout(typingTimer);
		$(this).siblings('.incorrect').hide();

		if($(this).val()) {
			$(this).removeClass('error');

			typingTimer = setTimeout(doneTyping, doneTypingInterval);
		}
	})

	formEmail.on('keydown', function () {
		clearTimeout(typingTimer);
	});

	formPhone.on('keypress', function (e) {
		if (e.which < 48 || e.which > 57) {
			return false;
		}

		if ($(this).val().length > maxPhoneLength) {
			$(this).val($(this).val().slice(0, maxPhoneLength));
		}

		checkForm()
	})

	formTerms.on('change', function () {
		if (!$(this).is(':checked')) {
			$(this).addClass('error');
			$(this).next().find('.is-mandatory').show();
		} else {
			$(this).removeClass('error');
			$(this).next().find('.is-mandatory').hide();
		}
		checkForm()
	})

	sendForm.on('click', function (e) {
		e.preventDefault();

		formInput.trigger('keyup')
		formTerms.trigger('change')
		// AJAX to send email
	})

	function checkForm() {
		canSend = true;
		formInput.each(function () {
			if (!$(this).val()) {
				canSend = false;
			}
		})

		if (!formTerms.is(':checked')) {
			canSend = false;
		}

		if (canSend && correctEmail) {
			sendForm.removeClass('disabled');
		} else {
			sendForm.addClass('disabled')
		}
	}

	function doneTyping() {
		let correct = EmailRegex.test(formEmail.val())
		if(!correct) {
			formEmail.addClass('error');
			formEmail.siblings('.incorrect').show();
			correctEmail = false;
		} else {
			correctEmail = true;
		}
		checkForm()
	}

})(jQuery);
