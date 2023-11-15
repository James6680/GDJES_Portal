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
const usernameInput = document.getElementById("username");
const passwordnput = document.getElementById("password");
const usernameError = document.getElementById("username-error");
const passwordError = document.getElementById("password-error");

document.getElementById("login-button").addEventListener("click", function (event) {
  event.preventDefault();
  validateForm();
});

usernameInput.addEventListener("input", function () {
  usernameError.style.display = "none";
  usernameInput.classList.remove("border-red-500");
});

passwordnput.addEventListener("input", function () {
  passwordError.style.display = "none";
  passwordnput.classList.remove("border-red-500");
});

function validateForm() {
  usernameError.style.display = "none";
  passwordError.style.display = "none";
  usernameInput.classList.remove("border-red-500");
  passwordnput.classList.remove("border-red-500");

  if (!usernameInput.checkValidity()) {
    usernameError.style.display = "block";
    usernameInput.classList.add("border-red-500");
  }

  if (!passwordInput.checkValidity()) {
    passwordError.style.display = "block";
    passwordnput.classList.add("border-red-500");
  }

  if (usernameInput.checkValidity() && passwordnput.checkValidity()) {
    // If both username and password are valid, redirect the user to the desired link
    window.location.href = "StudentPortalRegistrationPage1.html";
  }
}

//-------------------------------------------------------------------|

// Admin Contact Button & Forgot Password Link
var adminContactBtn = document.getElementById("adminContact");

adminContactBtn.addEventListener("click", function(event) {

  event.preventDefault(); 

  var adminContactLink = "StudentPortalRegistrationPage1.html";
  
  window.location.href = adminContactLink;

});



