//                                               - STUDENT LOGIN PAGE - 

//Show & hide password condition.....
const passwordToggle = document.querySelector('#toggle');
const passwordInput = document.getElementById('loginPassword');
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

//---------------------------------------------------------------------|

// Student Login validation
const loginEmailInput = document.getElementById("loginEmail");
const loginPasswordInput = document.getElementById("loginPassword");
const loginEmailError = document.getElementById("email-error");
const loginPasswordError = document.getElementById("password-error");
const loginButton = document.getElementById("loginBtn");

function hideErrorAndRemoveClass(inputElement, errorElement) {
  errorElement.style.display = "none";
  inputElement.classList.remove("border-red-500");
}

function validateForm(event) {
  event.preventDefault();
  hideErrorAndRemoveClass(loginEmailInput, loginEmailError);
  hideErrorAndRemoveClass(loginPasswordInput, loginPasswordError);

  if (!loginEmailInput.checkValidity()) {
    loginEmailError.style.display = "block";
    loginEmailInput.classList.add("border-red-500");
  }

  if (!loginPasswordInput.checkValidity()) {
    loginPasswordError.style.display = "block";
    loginPasswordInput.classList.add("border-red-500");
  }

  if (loginEmailInput.checkValidity() && loginPasswordInput.checkValidity()) {
    // If both email and password are valid, redirect the user to the desired link
    window.location.href = "StudentPortalRegistrationPage1.html";
  }
}

loginButton.addEventListener("click", validateForm);

loginEmailInput.addEventListener("input", () => hideErrorAndRemoveClass(loginEmailInput, loginEmailError));
loginPasswordInput.addEventListener("input", () => hideErrorAndRemoveClass(loginPasswordInput, loginPasswordError));

//---------------------------------------------------------------------|

// Create Account  Button & Forgot Password Link
var createAccountBtn = document.getElementById("createAccount");
var forgotPassword = document.getElementById("forgotPasword_link")

createAccountBtn.addEventListener("click", function(event) {
  event.preventDefault(); 
  var newURL = "StudentPortalRegistrationPage1.html";
  
  window.location.href = newURL;

});

forgotPassword.addEventListener("click", function(event) {
  event.preventDefault(); 
  var newURL = "www.facebook.com";
  
  // Navigate to the new URL
  window.location.href = newURL;

});


