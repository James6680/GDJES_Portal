//                                -- STUDENT REGISTRATION PAGE #4 --

// Main Form Validation
const elements = [
    "lastName_ng_ama", "firstName_ng_ama", "middleName_ng_ama", "extensionName_ng_ama", "father_phone", "email_ng_ama",
    "lastName_ng_ina", "firstName_ng_ina", "middleName_ng_ina", "extensionName_ng_ina", "mother_phone", "email_ng_ina",
    "lastName_ng_guardian", "firstName_ng_guardian", "middleName_ng_guardian", "extensionName_ng_guardian", "guardian_phone", "email_ng_guardian",
    "fourps_id",
];

const radioButtons = document.querySelectorAll('input[name="fourps"]');
const radioErrorContainer = document.getElementById("input_error-radio");
const errorContainers = Array.from({ length: 19 }, (_, i) => document.getElementById(`input_error${i + 1}`));
const nextButton = document.getElementById("nextBtn");

nextButton.addEventListener("click", function (e) {
    e.preventDefault();
    const isRadioSelected = Array.from(radioButtons).some(radio => radio.checked);
    const radioButtonsArray = Array.from(document.querySelectorAll(`input[name="fourps"]`));
    var checkedValue;
    radioErrorContainer.style.display = isRadioSelected ? "none" : "block";
    errorContainers.forEach((container, index) => {
        const value = document.getElementById(elements[index]).value.trim();
        var isValid = true;
        var regexMatch;

        const regex = /^.{1,100}$/;
        regexMatch = value.match(regex);

        if(regexMatch === null){
            isValid = false;
        }

        if(index == 18){
            isValid = true;
            try{
                const regex1 = /^\d{9}(?:\s*|\-)\d{4}(?:\s*|\-)\d{4}$/;
                checkedValue = radioButtonsArray.find(radio => radio.checked).value;
                regexMatch = value.match(regex1);
                if(checkedValue == 1 && regexMatch === null){
                    isValid = false;
                    container.textContent = "❌ Maglagay lamang ng angkop na household id mula 4ps"
                }else{
                    isValid = true;
                }
            }catch(error){
            }
        }

        if(index == 4 || index == 10 || index == 16){
            try{
                const regex1 = /^(\+63\d{10}|0{1}\d{10})$/;
                regexMatch = value.match(regex1);
                if( regexMatch === null){
                    isValid = false;
                    container.textContent = "❌ Maglagay lamang ng angkop na cellphone no."
                }
            }catch(error){
            }
        }
        if(index == 5 || index == 11 || index == 17){
            try{
                const regex1 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                regexMatch = value.match(regex1);
                if( regexMatch === null){
                    isValid = false;
                    container.textContent = "❌ Maglagay lamang ng angkop na email"
                }
            }catch(error){
            }
        }
        if(isValid){
            container.style.display = "none";
            document.getElementById(elements[index]).style.border = "1px solid #e5e7eb";
        }else{
            container.style.display = "block";
            document.getElementById(elements[index]).style.border = "2px solid #ff4d6d";
        }
    });

    if (errorContainers.every(container => container.style.display === "none") && isRadioSelected) {
        document.getElementById("enrollment-page-4").submit();
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
        document.getElementById(element).style.border = "1px solid #e5e7eb";
    });
});

// ------------------------------------------------------|
// Back Button Function
// Get references to the button elements
var navigateButton = document.getElementById("backBtn");

// Add click event listeners to the buttons
navigateButton.addEventListener("click", function() {
    // Set the new URL to navigate to for the "Back" button
    var newURL = "/public/student-registration-3"; // Replace with the desired URL

    // Navigate to the new URL
    window.location.href = newURL;
});