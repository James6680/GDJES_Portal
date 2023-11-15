//                              -- STUDENT REGISTRATION/ENROLLMENT PAGE #2 --

// FORM VALIDATION SECTION
// Get references to various HTML elements using their IDs
const lastSchoolAttended = document.getElementById("lastSchoolAttended");
const lastSchoolYearAttended = document.getElementById("lastSchoolYearAttended");
const returnee = document.getElementById("returnee");

// Create an array of error containers for displaying validation errors
const errorContainers = document.querySelectorAll('#input-error');
// Get a reference to the "Next" button
const nextButton = document.getElementById("nextBtn");
var isValid;
// Add a click event listener to the "Next" button
nextButton.addEventListener("click", function (e) {
  e.preventDefault(); // Prevent the default form submission behavior

  const elements = [returnee, lastSchoolAttended, lastSchoolYearAttended];
  const values = [returnee.value, lastSchoolAttended.value.trim(), lastSchoolYearAttended.value.trim()];
  // Iterate through each error container and corresponding form element
  errorContainers.forEach((container, index) => 
  {
    var validated = true;
    isValid = 1; 

    if(elements[index].tagName === "INPUT"){
      checkEmptyInput(values[index], container);
      checkLength(values[index], container);
      if(index === 2){
        checkYear(values[index], container );
      }
    }

    if(elements[index].tagName === "SELECT"){
      checkEmptySelect(values[index], container);
    }
    container.style.display = isValid ? "none" : "block";
    // container.innerHTML = ""

    // Change the border color of the form element based on validity
    elements[index].style.border = isValid ? "1px solid #e5e7eb" : "2px solid #ff4d6d";
    // Display the error container if the input is not valid

  });
  let errorContainersArray = Array.from(errorContainers)
  // If all error containers are hidden (i.e., all inputs are valid), redirect to a new page
  if (errorContainersArray.every(container => container.style.display === "none")) {
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



////////VALIDATORS//////////
function checkLength(value, container){
    if(value.length > 100 && value !== ""){
      container.textContent = "❌ Maaari lamang maglagay ng 100 na letra";
      isValid = 0;
    }
  }
  
function checkEmptySelect(value, container){
  if(value === ""){
    container.textContent = "❌ Pumili muna sa mga pagpipilian bago lumipat sa sunod na pahina.";
    isValid = 0;
  }
}

function checkEmptyInput(value, container){
  if(value === ""){
    container.textContent = "❌ Punan muna ang katanungan bago lumipat sa sunod na pahina.";
    isValid = 0;
  }
}

function checkYear(value, container){
  const regex = /^(19|20)\d{2}\b$/;
  if(value.match(regex) === false || value.match(regex) === null){
    isValid = 0;
    container.textContent = "❌ Ang format ng ilalagay ay dapat taon";
  }
}







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

