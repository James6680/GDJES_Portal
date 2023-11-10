//                                          -- STUDENT REGISTRATION PAGE #3 --

var isValid = 1;
// Validation for Input and Select fields
document.addEventListener("DOMContentLoaded", function () {
    const elements = [
        "grade_level", 
        "school_year",
        'lrn_status',
        'lrn_number',
        "psa_birth_cert",
        "student_last_name",
        "student_first_name",
        "student_middle_name",
        "student_extension_name",
        "birth_date",
        "age_on_oct_31",
        'gender',
        'indigenous_group',
        'indigenous_group_name',
        "primary_language",
        "religion",
        'special_needs',
        'special_needs_description',
        "region",
        "province",
        "city",
        "barangay",
        "street",
        "house_number",
    ];

    const errorContainers = document.querySelectorAll('#input-error');
    function updateElementValidation(element, index) {
        const value = element.value.trim();

       errorContainers.forEach(container, index => {
            if((element[index] == 'lrn_status' && value[index] == '0') || (element[index] == 'indigenous_group' && value[index] == '1' ) || (element[index] == 'special_needs' && value[index] == '1')){
                console.log('click');
            }
            if(value[index].tagName === 'INPUT') {
            }
            
            if(value[index].tagName === 'SELECT') {
            }
        });

        const isValid = index === 0 ? value !== "" : value !== "";
        errorContainers[index].style.display = isValid ? "none" : "block";
        element.style.border = isValid ? "1px solid #e5e7eb" : "2px solid #ff4d6d";
    }

    elements.forEach((element, index) => {
        const inputElement = document.getElementById(element);
        
        inputElement.addEventListener("input", () => {
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
    { name: 'gender', errorContainer: 'input-error2r' },
    { name: 'indigenous_group', errorContainer: 'input-error3r' },
    { name: 'special_needs', errorContainer: 'input-error4r' }
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

    if (isTextElementsValid && isRadioGroupsValid) {
        document.getElementById("enrollment-page-3").submit();
    }
});
// -----------------------------------------------------------------|
// Back button function
var navigateButton = document.getElementById("backBtn");

