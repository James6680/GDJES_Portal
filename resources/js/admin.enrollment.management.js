var schoolYearList;
const schoolYearDropDown = document.getElementById('school-year-dropdown-picker');
const addSchoolYearForm = document.getElementById('add-school-year-form');
const addschoolYearDropDownSubmit = document.getElementById('add-school-year-form-submit');
const addSchoolYearFormShow = document.querySelectorAll('#add-school-year-form-show');

function getSchoolYear() {
    const url = '/api/schoolYears';
    return new Promise((resolve, reject) => {
        $.getJSON(url, function(data) {
            schoolYearList = data;
            resolve();
        });
    });
}

function updateSchoolYearDropDown() {
    schoolYearDropDown.empty();
    $.each(schoolYearList, function(index, entry) {
        let x = `<li>
            <a class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">${entry['school_year']}</a>
        </li>`;
        const parser = new DOMParser();
        const doc = parser.parseFromString(x, "text/html");
        const desiredHTML = doc.body.innerHTML;
        const range = document.createRange();
        const fragment = range.createContextualFragment(desiredHTML); // Convert string to Node fragment
        schoolYearDropDown.append(fragment);
    });
}

function addSchoolYearFormClearError(){
    $("#input-requiredDays-error").text("");
    $("#input-requiredDays-error").css("display", "none");
    $("#input-schoolYear-error").text("");
    $("#input-schoolYear-error").css("display", "none");
}

schoolYearDropDown.addEventListener('click', function(event) {
    if (event.target.tagName === 'A') {
        // Handle click event on the `<a>` element
        const valueOfYear = event.target.textContent;
        console.log('Clicked on school year:', valueOfYear);

        const selectedObject = schoolYearList.find(entry => entry['school_year'] === valueOfYear);
        document.getElementById('sample-clicker').textContent = selectedObject['school_year'];
        
        console.log(selectedObject);
    }    
});

addSchoolYearFormShow.forEach(element => {
    element.addEventListener('click', function(event){
        addSchoolYearFormClearError();
    });
});

addschoolYearDropDownSubmit.addEventListener('click', function(event){
    event.preventDefault();
    const serializeData = $(addSchoolYearForm).serialize();
    $.ajax({
        url: "/admin.addSchoolYear",
        type: "POST",
        data: serializeData,
        success: function(response) {
          // Form submission is successful, prevent default submission
        getSchoolYear();
        updateSchoolYearDropDown();
        },
        error: function(response) {
            addSchoolYearFormClearError();
            var validationErrors = response.responseJSON.errors;
            $.each(validationErrors, function(fieldName, errorMessage) {
                $("#input-" + fieldName + "-error").css("color", "red");
                $("#input-" + fieldName + "-error").text(errorMessage);
                $("#input-" + fieldName + "-error").css("display", "block");
            });
        }
      });  
});

$(document).ready(function() {
    getSchoolYear().then(updateSchoolYearDropDown);
});