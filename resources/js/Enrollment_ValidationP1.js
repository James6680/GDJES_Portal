//                                      -- STUDENT REGISTRATION PAGE #1 -- 
// Function to handle the "Next" button click
function showNextSet() {
  const radioButton = document.querySelectorAll("input[name='aralStatus']:checked");
  const errorMessage = document.getElementById("input-error");
  const errorContainer = document.querySelector(".redBorder");
  var isValid = checkEmptyRadio(radioButton, errorContainer);

  
  if (!isValid) {
    errorMessage.classList.remove("hidden");
    errorContainer.style.borderWidth = "2px"; // Set the border width to 2px
    errorContainer.classList.remove("border-main-green-secondary-100");
    errorContainer.classList.add("border-red-400");
  } else {
    errorMessage.classList.add("hidden");
    errorContainer.style.borderWidth = "2px"; // Set the border width to 2px
    errorContainer.classList.remove("border-red-400");
    document.getElementById("enrollment-page-1").submit();    
  }
}
  
  // Add event listener to the "Next" button
  const nextButton = document.getElementById("nextButton");
  nextButton.addEventListener("click", showNextSet);
  
  // Add event listener to all radio buttons to hide the error message
  const radioButtons = document.querySelectorAll("input[name='aralStatus']");
  radioButtons.forEach(function (radioButton) {
    radioButton.addEventListener("change", function () {
      const errorMessage = document.getElementById("input-error");
      const errorContainer = document.querySelector(".redBorder");
      errorMessage.classList.add("hidden");
      errorContainer.classList.remove("border-red-500");
      errorContainer.classList.add("border-main-green-secondary-100");
    });
  });
  
  //Student Registration Page goto login page condition....
  var loginButton = document.getElementById("loginButton");
  
  // Add a click event listener to the button
  loginButton.addEventListener("click", function(event) {
      
    event.preventDefault();
    // Set the new URL to navigate to
    window.location.href = "/student-login"; // Replace with the desired URL

  });

  /////VALIDATORS/////
function checkEmptyRadio(value, container){
  if(value.length ===0){
    return 0;
  } 
  return 1;
}