//                                              -- TEACHER LOGIN PAGE --

// Show & hide password condition.....
const passwordToggle = document.querySelector('#toggle');
const passwordInput = document.getElementById('password');
const passwordLabel = document.querySelector('.js-password-label');

passwordToggle.addEventListener('change', function() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    passwordLabel.innerHTML = 'Hide';
  } else {
    passwordInput.type = 'password';
    passwordLabel.innerHTML = 'Show';
  }

  passwordInput.focus();
});

// ---------------------------------------------------------------------|

// Teacher Login Form Vaidation
const emailInput = document.getElementById("email");
const passwordnput = document.getElementById("password");
const emailError = document.getElementById("email-error");
const passwordError = document.getElementById("password-error");

document.getElementById("login-button").addEventListener("click", function (event) {
  event.preventDefault();
  validateForm();
});

emailInput.addEventListener("input", function () {
  emailError.style.display = "none";
  emailInput.classList.remove("border-red-500");
});

passwordnput.addEventListener("input", function () {
  passwordError.style.display = "none";
  passwordnput.classList.remove("border-red-500");
});

function validateForm() {
  emailError.style.display = "none";
  passwordError.style.display = "none";
  emailInput.classList.remove("border-red-500");
  passwordnput.classList.remove("border-red-500");

  if (!emailInput.checkValidity()) {
    emailError.style.display = "block";
    emailInput.classList.add("border-red-500");
  }

  if (!passwordInput.checkValidity()) {
    passwordError.style.display = "block";
    passwordnput.classList.add("border-red-500");
  }

  if (emailInput.checkValidity() && passwordnput.checkValidity()) {
    // If both email and password are valid, redirect the user to the desired link
    window.location.href = "StudentPortalRegistrationPage1.html";
  }
}

//-------------------------------------------------------------------|

// Admin Contact Button & Forgot Password Link
var adminContactBtn = document.getElementById("adminContact");
var forgotPassword = document.getElementById("forgotPasword_link")

adminContactBtn.addEventListener("click", function(event) {

  event.preventDefault(); 

  var adminContactLink = "StudentPortalRegistrationPage1.html";
  
  window.location.href = adminContactLink;

});

forgotPassword.addEventListener("click", function(event) {

  event.preventDefault(); 

  var forgotPassLink = "www.facebook.com";
  
  // Navigate to the new URL
  window.location.href = forgotPassLink;

});

