//                                               - STUDENT LOGIN PAGE - 

//Show & hide password condition.....
const passwordToggle = document.querySelector('#toggle');
const passwordInput = document.getElementById('password');
const passwordLabel = document.querySelector('.js-password-label');

passwordToggle.addEventListener('change', function() {x

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
const loginUsernameInput = document.getElementById("username");
const loginPasswordInput = document.getElementById("password");
const loginUsernameError = document.getElementById("username-error");
const loginPasswordError = document.getElementById("password-error");
const loginButton = document.getElementById("loginBtn");

function hideErrorAndRemoveClass(inputElement, errorElement) {
  errorElement.style.display = "none";
  inputElement.classList.remove("border-red-500");
}

function validateForm(event) {
  event.preventDefault();
  hideErrorAndRemoveClass(loginUsernameInput, loginUsernameError);
  hideErrorAndRemoveClass(loginPasswordInput, loginPasswordError);

  if (!loginUsernameInput.checkValidity()) {
    loginUsernameError.style.display = "block";
    loginUsernameInput.classList.add("border-red-500");
  }

  if (!loginPasswordInput.checkValidity()) {
    loginPasswordError.style.display = "block";
    loginPasswordInput.classList.add("border-red-500");
  }

  if (loginUsernameInput.checkValidity() && loginPasswordInput.checkValidity()) {
    // If both email and password are valid, redirect the user to the desired link
    window.location.href = "StudentPortalRegistrationPage1.html";
  }
}

loginButton.addEventListener("click", validateForm);

loginUsernameInput.addEventListener("input", () => hideErrorAndRemoveClass(loginUsernameInput, loginEmailError));
loginPasswordInput.addEventListener("input", () => hideErrorAndRemoveClass(loginPasswordInput, loginPasswordError));

//---------------------------------------------------------------------|

// Create Account  Button & Forgot Password Link
var createAccountBtn = document.getElementById("createAccount");

createAccountBtn.addEventListener("click", function(event) {
  event.preventDefault(); 
  var newURL = "StudentPortalRegistrationPage1.html";
  
  window.location.href = newURL;

});
;


