let infoMessage = document.querySelector('.contact-form__text-after-submit');
let form = document.querySelector('.contact-form');
let name = document.querySelector('.contact-form__input');
let email = document.querySelector('.contact-form__input-email');
let message = document.querySelector('.contact-form__textarea');

form.onsubmit = function() {
  // evt.preventDefault();
  infoMessage.textContent = 'Thank you! I will contact you as soon as possible';
};