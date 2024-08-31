// Sticky Navbar Functionality
window.onscroll = function () { makeSticky() };
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function makeSticky() {
  if (window.scrollY > sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

const scriptURL = "https://script.google.com/macros/s/AKfycbyAf_Oe9i1W23hr5IR_skw7AAjRJp6x5F5eFhmHd741xqgFe2uhk47sxXvzmq8zql7R/exec";

// General function for form submission
function handleFormSubmit(formId, formType, successMessage) {
  const form = document.forms[formId];
  form.addEventListener('submit', e => {
    e.preventDefault();

    const formData = new FormData(form);
    formData.append('formType', formType);

    fetch(scriptURL, { method: 'POST', body: formData })
      .then(response => alert(successMessage))
      .then(() => { window.location.reload(); })
      .catch(error => console.error('Error!', error.message));
  });
}

// Initialize form submissions
handleFormSubmit('contact', 'Contact', "Thank you! Your contact form is submitted successfully.");
handleFormSubmit('newsletter', 'Newsletter', "Thank you! Your newsletter subscription is submitted successfully.");
