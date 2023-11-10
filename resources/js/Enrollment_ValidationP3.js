//                                          -- STUDENT REGISTRATION PAGE #3 --


// Validation for Input and Select fields
document.addEventListener("DOMContentLoaded", function () {
    const elements = [
        "grade_level", 
        "school_year", "psa_birth_cert", "lastName_ng_bata","firstName_ng_bata", "middleName_ng_bata", "extensionName_ng_bata", "birth_date", "age_on_oct_31", "primary_language", "religion", "region", "province", "city", "barangay", "street_text", "house_number",
    ];

    const errorContainers = Array.from(
        { length: 17 },
        (_, i) => document.getElementById(`input-error${i + 1}`)
    );

    function updateElementValidation(element, index) {
        const value = element.value.trim();
        const isValid = index === 0 ? value !== "" : value !== "";
        errorContainers[index].style.display = isValid ? "none" : "block";
        element.style.border = isValid ? "1px solid #e5e7eb" : "2px solid #ff4d6d";
    }

    elements.forEach((element, index) => {
        const inputElement = document.getElementById(element);
        
        inputElement.addEventListener("input",( ) => {
            updateElementValidation(inputElement, index);
        });

        inputElement.addEventListener("focus", () => {
            errorContainers[index].style.display = "none";
            inputElement.style.border = "1px solid #e5e7eb";
        });
    });

    function validateTextElements() {
        let valid = true;

        elements.forEach((element, index) => {
            updateElementValidation(document.getElementById(element), index);

            if (!valid && index === 0) {
                valid = false;
            }
        });
        return valid;
    }
    window.validateTextElements = validateTextElements;
});

// -----------------------------------------------------------------|
// Validation for radio button fields
const radioGroups = [
    { name: 'lrn_status', errorContainer: 'input-error1r' },
    { name: 'indigenous_group', errorContainer: 'input-error3r' },
    { name: 'special_needs', errorContainer: 'input-error4r' },
    { name: 'gender', errorContainer: 'input-error2r' }
];

const radioGroupOptionals = [
    { name: 'lrn_number', errorContainer: 'input-error5r' },
    { name: 'indigenous_group_name', errorContainer: 'input-error6r' },
    { name: 'special_needs_description', errorContainer: 'input-error7r'}
];



radioGroups.forEach(group => {
    const radioButtons = document.querySelectorAll(`input[name="${group.name}"]`);
    const errorContainer = document.getElementById(group.errorContainer);

    radioButtons.forEach(radio => {
        radio.addEventListener("change", () => {
            errorContainer.style.display = "none";
            const redBorderElement = document.querySelector(`.redBorder[data-for="${group.name}"]`);
            redBorderElement.style.border = "none"; // Remove the red border on interaction
        });
    });
});

radioGroupOptionals.forEach(field =>{
    const radioButtonOptionalField = document.querySelector(`input[name="${field.name}"]`);
    const errorContainer = document.getElementById(field.errorContainer);

    radioButtonOptionalField.addEventListener("change", () => {
        errorContainer.style.display = "none";
        const redBorderElement = document.querySelector(`.redBorder[data-for="${field.name}"]`);
        redBorderElement.style.border = "none"; // Remove the red border on interaction
    });
});

function validateRadioOptionals() {
    let valid = true;

    radioGroupOptionals.forEach((field, index) => {  
        const radioButtonOptionalField = document.querySelector(`input[name="${field.name}"]`);
        const errorContainer = document.getElementById(field.errorContainer);
        const radioButtons = document.querySelectorAll(`input[name="${radioGroups[index].name}"]`);
        const radioButtonsArray = Array.from(radioButtons)
        var checkedValue;
        try{
            checkedValue = radioButtonsArray.find(radio => radio.checked).value;
        }catch{
            checkedValue = null;
        }
        if(checkedValue === "1" && radioButtonOptionalField.value === ""){

            valid = false;
            errorContainer.style.display = "block";
            radioButtonOptionalField.style.border = "2px solid #ff4d6d";
        }else{
            radioButtonOptionalField.style.border = "1px solid #e5e7eb";
            errorContainer.style.display = "none";
        }
    });

    return valid;
}

window.validateRadioOptionals = validateRadioOptionals;

function validateRadioGroups() {
    let valid = true;

    radioGroups.forEach(group => {
        const radioButtons = document.querySelectorAll(`input[name="${group.name}"]`);
        const errorContainer = document.getElementById(group.errorContainer);
        const isSelected = Array.from(radioButtons).some(radio => radio.checked);

        errorContainer.style.display = isSelected ? "none" : "block";

        if (!isSelected) {
            valid = false;
            const redBorderElement = document.querySelector(`.redBorder[data-for="${group.name}"]`);
            redBorderElement.style.border = "2px solid #ff4d6d"; // Add red border when there's an error
        }
    });

    return valid;
}

window.validateRadioGroups = validateRadioGroups;


// -----------------------------------------------------------------|

// Combining the 2 conditions above to pass in the next button
const nextButton = document.getElementById("nextBtn");

nextButton.addEventListener("click", function (e) {
    e.preventDefault();

    const isTextElementsValid = validateTextElements();
    const isRadioGroupsValid = validateRadioGroups();
    const isRadioGroupOptionalValid = validateRadioOptionals();
    if (isTextElementsValid && isRadioGroupsValid && isRadioGroupOptionalValid) {
        document.getElementById("enrollment-page-3").submit();      
    }
});
// -----------------------------------------------------------------|
// Back button function
var navigateButton = document.getElementById("backBtn");

// Add click event listeners to the buttons
navigateButton.addEventListener("click", function() {
    // Set the new URL to navigate to for the "Back" button
    var newURL = "/student-enrollment-18"; // Replace with the desired URL

    // Navigate to the new URL
    window.location.href = newURL;
});
