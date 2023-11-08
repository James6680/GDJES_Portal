//                                -- STUDENT REGISTRATION PAGE #4 --

// Main Form Validation
const elements = [
    "lastName_ng_ama", "firstName_ng_ama", "middleName_ng_ama", "extensionName_ng_ama", "father_phone", "email_ng_ama",
    "lastName_ng_ina", "firstName_ng_ina", "middleName_ng_ina", "extensionName_ng_ina", "mother_phone", "email_ng_ina",
    "lastName_ng_guardian", "firstName_ng_guardian", "middleName_ng_guardian", "extensionName_ng_guardian", "guardian_phone", "email_ng_guardian"
];

const radioButtons = document.querySelectorAll('input[name="4ps"]');
const radioErrorContainer = document.getElementById("input_error19");
const errorContainers = Array.from({ length: 18 }, (_, i) => document.getElementById(`input_error${i + 1}`));

const nextButton = document.getElementById("nextBtn");

nextButton.addEventListener("click", function (e) {
    e.preventDefault();

    const isRadioSelected = Array.from(radioButtons).some(radio => radio.checked);
    radioErrorContainer.style.display = isRadioSelected ? "none" : "block";

    errorContainers.forEach((container, index) => {
        const value = document.getElementById(elements[index]).value.trim();
        const isValid = index === 0 ? value !== "" : value !== "";
        container.style.display = isValid ? "none" : "block";
        document.getElementById(elements[index]).style.border = isValid ? "2px solid #ff4d6d" : "2px solid #ff4d6d";
    });

    if (errorContainers.every(container => container.style.display === "none") && isRadioSelected) {
        window.location.href = "/student-registration-4"; // Change the URL as needed
    }
});

radioButtons.forEach(radio => {
    radio.addEventListener("change", () => {
        radioErrorContainer.style.display = "none";
    });

});

elements.forEach((element, index) => {
    document.getElementById(element).addEventListener("input", () => {
        errorContainers[index].style.display = "none";
        document.getElementById(element).style.border = "2px solid #ff4d6d";
    });
});

// ------------------------------------------------------|
// Back Button Function
// Get references to the button elements
var navigateButton = document.getElementById("backBtn");

// Add click event listeners to the buttons
navigateButton.addEventListener("click", function() {
    // Set the new URL to navigate to for the "Back" button
    var newURL = "/student-registration-3"; // Replace with the desired URL

    // Navigate to the new URL
    window.location.href = newURL;
});