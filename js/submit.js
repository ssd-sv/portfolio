let infoMessage = document.querySelector('.contact-form__text-after-submit');
let form = document.querySelector('.contact-form');

form.onsubmit = function(evt) {
	evt.preventDefault();
	$.ajax({
		type: "POST",
		url: "../php/send.php",
		data: $(this).serialize()
	}).done(function() {
		$(this).find('input').val('');
		$('#contact-form').trigger('reset');
		infoMessage.textContent = 'Thank you! I will contact you as soon as possible';
	});
	return false;
}