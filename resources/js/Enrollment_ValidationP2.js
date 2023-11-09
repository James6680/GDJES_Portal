//                              -- STUDENT REGISTRATION/ENROLLMENT PAGE #2 --

// FORM VALIDATION SECTION
// Get references to various HTML elements using their IDs
const lastSchoolAttended = document.getElementById("lastSchoolAttended");
const lastSchoolYearAttended = document.getElementById("lastSchoolYearAttended");
const returnee = document.getElementById("returnee");

// Create an array of error containers for displaying validation errors
const errorContainers = 
[
  document.getElementById("email-error1"),
  document.getElementById("email-error2"),
  document.getElementById("email-error3")
];

// Get a reference to the "Next" button
const nextButton = document.getElementById("nextBtn");

// Add a click event listener to the "Next" button
nextButton.addEventListener("click", function (e) {
  e.preventDefault(); // Prevent the default form submission behavior

  // Iterate through each error container and corresponding form element
  errorContainers.forEach((container, index) => 
  {
    // Create arrays of form elements and their values
    const elements = [returnee, lastSchoolAttended, lastSchoolYearAttended];
    const values = [returnee.value, lastSchoolAttended.value.trim(), lastSchoolYearAttended.value.trim()];

    // Check if the input is valid based on specific conditions
    const isValid = index === 0 ? values[index] !== "0" : values[index] !== "";

    // Display the error container if the input is not valid
    container.style.display = isValid ? "none" : "block";

    // Change the border color of the form element based on validity
    elements[index].style.border = isValid ? "1px solid #e5e7eb" : "2px solid #ff4d6d";
  });

  // If all error containers are hidden (i.e., all inputs are valid), redirect to a new page
  if (errorContainers.every(container => container.style.display === "none")) {
    document.getElementById("enrollment-page-2").submit();
  }
});

// Add input event listeners to form elements to hide error messages when the user starts typing
[returnee, lastSchoolAttended, lastSchoolYearAttended].forEach((element, index) => 
{
  element.addEventListener("input", function () 
  {
    // Hide the corresponding error container and reset the border color on user input
    errorContainers[index].style.display = "none";
    element.style.border = "1px solid #e5e7eb";
  });
});

// --------------------------------------------------------|
// BACK BUTTON SECTION
var navigateButton = document.getElementById("backBtn");

// Add click event listeners to the buttons
navigateButton.addEventListener("click", function(event) {

  event.preventDefault();
  // Set the new URL to navigate to for the "Back" button
  var newURL = "/student-registration-1"; // Replace with the desired URL

  // Navigate to the new URL
  window.location.href = newURL;
});