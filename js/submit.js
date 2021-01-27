let infoMessage = document.querySelector('.contact-form__text-after-submit');

form.onsubmit = function() {
  infoMessage.textContent = 'Thank you! I will contact you as soon as possible';
};