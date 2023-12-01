//                      -- STUDENT REGISTRATION PAGE #5 --

// Back Button Function
// Get references to the button elements
var navigateButton = document.getElementById("backBtn");

// Add click event listeners to the buttons
navigateButton.addEventListener("click", function() {
  // Set the new URL to navigate to for the "Back" button
  var newURL = localStorage.getItem('appUrl') + "/student-registration-4"; // Replace with the desired URL

  // Navigate to the new URL
  window.location.href = newURL;
});

//--------------------------------------------------------|
// Main Form Validation SEction
// Get references to the form elements and the div element
var submitButton = document.getElementById("nextBtn");
var learningCheckboxes = document.querySelectorAll('input[name="learning_info[]"]');
var distanceRadioButtons = document.querySelectorAll('input[name="distance_learning"]');
var learningErrorSpan = document.getElementById("learning-error");
var distanceErrorSpan = document.getElementById("distance-error");
var radioRedBorderDiv = document.getElementById("radioRedBorder");
var checkboxRedBorderDiv = document.getElementById("checkboxRedBorder");

// Function to hide error messages for learning checkboxes
function hideLearningError() {
  learningErrorSpan.style.display = "none";
  checkboxRedBorderDiv.style.border = "none"; // Remove the red border
}

// Function to hide error messages for distance radio buttons
function hideDistanceError() {
  distanceErrorSpan.style.display = "none";
  radioRedBorderDiv.style.border = "none"; // Remove the red border
}

// Function to submit the form and redirect to the next page
function submitForm() {
  // Check if at least one checkbox is checked
  var isCheckboxChecked = Array.from(learningCheckboxes).some(function (checkbox) {
    return checkbox.checked;
  });

  // Check if at least one radio button is selected
  var isRadioButtonSelected = Array.from(distanceRadioButtons).some(function (radio) {
    return radio.checked;
  });

  // If both requirements are met, submit the form and redirect
  if (isCheckboxChecked && isRadioButtonSelected) {
    document.getElementById("enrollment-page-5").submit() // Redirect to the next page
  } 
  else {
    if (!isCheckboxChecked) {
      learningErrorSpan.style.display = "block"; // Display the checkbox error message
      checkboxRedBorderDiv.style.border = "2px solid #ff4d6d"; // Add a red border
    } else {
      hideLearningError(); // Hide the checkbox error message
    }

    if (!isRadioButtonSelected) {
      distanceErrorSpan.style.display = "block"; // Display the radio button error message
      radioRedBorderDiv.style.border = "2px solid #ff4d6d"; // Add a red border
    } else {
      hideDistanceError(); // Hide the radio button error message
    }
  }
}
// Add click event listener to the submit button
submitButton.addEventListener("click", function (e) {
  submitForm();
});

// Add change event listener to checkboxes and radio buttons to hide their respective error messages and remove the red border on interaction
learningCheckboxes.forEach(function (checkbox) {
  checkbox.addEventListener("change", hideLearningError);
});

distanceRadioButtons.forEach(function (radio) {
  radio.addEventListener("change", hideDistanceError);
});
