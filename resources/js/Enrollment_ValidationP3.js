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
    var valid;
    var validForAll;
    function updateElementValidation(element, index) {
        validateCustom(element, index);
        errorContainers[index].style.display = valid ? "none" : "block";
        element.style.border = valid ? "1px solid #e5e7eb" : "2px solid #ff4d6d";
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

    //GLOBAL VARIABLE VALID FOR VALIDATION
    function validateTextElements() {
        validForAll = true;
        elements.forEach((element, index) => {
            updateElementValidation(document.getElementById(element), index);
        });
        return validForAll;
    }
    window.validateTextElements = validateTextElements;

    function validateCustom(element, index){
        valid = true;
        checkEmptyInput(element, index);
        checkLength(element, index);
        if(element.tagName == "INPUT"){
            if(element.name == 'school_year'){
                checkSchoolYear(element, index);
            }
            if(element.name == 'psa_birth_cert'){
                checkPSABirthCertNo(element, index);
            }if(element.name == 'age_on_oct_31'){
                checkAge(element, index);
            }
        }else if(element.tagName == "SELECT"){
            checkEmptySelect(element, index);
        }
    }
    
        ////////////validate fields///////////////
    function checkEmptySelect(element, index){
        if(element.value === ""){
          errorContainers[index].textContent = "❌ Pumili muna sa mga pagpipilian bago lumipat sa sunod na pahina.";
          valid = false;
          validForAll = false;
        }
      }
      
      function checkEmptyInput(element, index){
        if(element.value === ""){
            errorContainers[index].textContent = "❌ Punan muna ang katanungan bago lumipat sa sunod na pahina.";
            valid = false;
            validForAll = false;
          }
      }
  
      function checkLength(element, index){
        if(element.value.length > 100 && element.value !== ""){
          errorContainers[index].textContent = "❌ Maaari lamang maglagay ng 100 na  o numero";
          valid = false;
          validForAll = false;
        }
      }

      function checkSchoolYear(element, index){

          // Split the input into two parts by the hyphen
          const part = element.value.trim();
          const regex = /^(19|20)\d{2}\b$/;

          const match = part.match(regex);
          if (!match) {
            valid=false;
            validForAll = false;
            errorContainers[index].textContent = "❌ Ang format ng ilalagay ay dapat taon"; 
          }
        
      }

      function checkPSABirthCertNo(element, index){
        const variable = element.value.replace(/\s/g, "");
        const regex = /^\d{4}(?:\s*|\-)\d{5}$/;
        const match = variable.match(regex);

        if(!match){
        valid=false;
        validForAll = false;
        errorContainers[index].textContent = '❌ Ang format ng ilalagay dapat nasa format na "2014 - 12345"';    
        }
      }

      function checkAge(element, index){
        var variable;
        var regex;
        var match;
        try{
            variable = parseInt(element.value);
            variable = variable.toString();
            regex = /^(1?[1-9]|[1-9][0-9]|[1][0][0]|100)$/;
            match = variable.match(regex);
        }catch(e){
            match = false;
        }
        if(!match){
        valid=false;
        validForAll = false;
        errorContainers[index].textContent = '❌ Ang format ng ilalagay dapat nasa format na edad';    
        }
      }
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
        radioButtonOptionalField.style.border = "1px solid #e5e7eb";
    });
});

function validateRadioOptionals() {
    let valid = true;
    radioGroupOptionals.forEach((field, index) => {  
        const radioButtonOptionalField = document.querySelector(`input[name="${field.name}"]`);
        const errorContainer = document.getElementById(field.errorContainer);
        const radioButtons = document.querySelectorAll(`input[name="${radioGroups[index].name}"]`);
        const radioButtonsArray = Array.from(radioButtons);
        const inputName = radioButtonOptionalField.name;
        const inputValue = radioButtonOptionalField.value;
        var regexMatch;
        var checkedValue;
        try{
            checkedValue = radioButtonsArray.find(radio => radio.checked).value;
            const regex = /^.{1,100}$/;
            regexMatch = inputValue.match(regex);
            if(inputName == "lrn_number"){
                const regex1 = /^\d{12}$/;
                regexMatch = inputValue.match(regex1);
                if(regexMatch === null){
                    errorContainer.textContent = '❌ Ang LRN ay dapat binubuo ng 12-numero';
                }
            }
        }catch{
            checkedValue = null;
        }
        if(checkedValue === "1" && regexMatch === null){
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