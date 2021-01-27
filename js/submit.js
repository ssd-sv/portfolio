let message = document.querySelector('.contact-form__text-after-submit');
let form = document.querySelector('.contact-form');
console.log(form);
form.onsubmit = function(evt) {
  evt.preventDefault();
  message.textContent = 'Thank you! I will contact you as soon as possible';
};