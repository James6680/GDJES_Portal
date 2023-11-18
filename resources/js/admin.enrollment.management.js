var schoolYearList;
var sectionList;
var selectedSchoolYearObject = null;
const schoolYearDropDown = document.getElementById('school-year-dropdown-picker');
const addSchoolYearForm = document.getElementById('add-school-year-form');
const addschoolYearDropDownSubmit = document.getElementById('add-school-year-form-submit');
const addSchoolYearFormShow = document.querySelectorAll('#add-school-year-form-show');
///////////INFORMATIONS////
const noSchoolYearSelected = document.querySelector('#no-selected-school-year');
const yesSchoolYearSelected = document.querySelector('#yes-selected-school-year');
const enrollmentButtonControls = document.querySelector('#enrollment-button-controls');
const endSchoolYearButton = document.getElementById('end-school-year-button');
const startSchoolYearButton = document.getElementById('start-school-year-button');
const closeEnrollmentButton = document.getElementById('close-enrollment-button');
const openEnrollmentButton = document.getElementById('openOfficialEnrollmentButton');
///////////////////////////

function getSchoolYear() {
    const url = '/api/schoolYears';
    return new Promise((resolve, reject) => {
        $.getJSON(url, function(data) {
            schoolYearList = data;
            resolve();
        });
    });
}

function getSections() {
  const url = '/api/sections/' + selectedSchoolYearObject.id;
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        sectionList = data;
          console.log("the data ius" + sectionList);
          resolve();
      });
  });
}

function getStudents() {
  const url = '/api/students/' + selectedSchoolYearObject.id;
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        studentList = data;
          console.log("the student ius" + studentList);
          resolve();
      });
  });
}

closeEnrollmentButton.addEventListener('click', function(){
    $.ajax({
      url: "/admin.closeEnrollment",
      type: "POST",
      data: selectedSchoolYearObject,
      success: function(response) {
        getSchoolYear() // Retrieve school year list
        .then(async () => {
          selectedSchoolYearObject = schoolYearList.find(entry => entry['id'] == response.id);
          await Promise.resolve(); // Await to ensure the find() operation completes before proceeding
        })
        .then(() => {
          updateSchoolYearInformation();
          updateSchoolYearControlButtons();
        });
      },
      error: function(response) {
        // Form submission failed, prevent default submission
      }
    });
});

openEnrollmentButton.addEventListener('click', function(){
    $.ajax({
      url: "/admin.openEnrollment",
      type: "POST",
      data: selectedSchoolYearObject,
      success: function(response) {
        getSchoolYear() // Retrieve school year list
        .then(async () => {
          selectedSchoolYearObject = schoolYearList.find(entry => entry['id'] == response.id);
          await Promise.resolve(); // Await to ensure the find() operation completes before proceeding
        })
        .then(() => {
          updateSchoolYearInformation();
          updateSchoolYearControlButtons();
        });
      },
      error: function(response) {
        // Form submission failed, prevent default submission
      }
    });
});

startSchoolYearButton.addEventListener('click', function(){
    $.ajax({
      url: "/admin.startSchoolYear",
      type: "POST",
      data: selectedSchoolYearObject,
      success: function(response) {
        getSchoolYear() // Retrieve school year list
        .then(async () => {
          selectedSchoolYearObject = schoolYearList.find(entry => entry['id'] == response.id);
          await Promise.resolve(); // Await to ensure the find() operation completes before proceeding
        })
        .then(() => {
          updateSchoolYearInformation();
          updateSchoolYearControlButtons();
        });
      },
      error: function(response) {
        // Form submission failed, prevent default submission
      }
    });
});



endSchoolYearButton.addEventListener('click', function(){
    $.ajax({
      url: "/admin.endSchoolYear",
      type: "POST",
      data: selectedSchoolYearObject,
      success: function(response) {
        getSchoolYear() // Retrieve school year list
        .then(async () => {
          selectedSchoolYearObject = schoolYearList.find(entry => entry['id'] == response.id);
          await Promise.resolve(); // Await to ensure the find() operation completes before proceeding
        })
        .then(() => {
          updateSchoolYearInformation();
          updateSchoolYearControlButtons();
        });
      },
      error: function(response) {
        // Form submission failed, prevent default submission
      }
    });
});

function updateSchoolYearInformation(){    
    if(selectedSchoolYearObject === null){
        $(noSchoolYearSelected).css("display", "none");
        $(yesSchoolYearSelected).css("display", "block");
    }else{
        $(noSchoolYearSelected).css("display", "none");
        $(yesSchoolYearSelected).css("display", "block");
        $("#school-year-holder").text("Managing school year: " + selectedSchoolYearObject.school_year);
        selectedSchoolYearObject.isEnrollment === 1 ? $("#enrollment-status-holder").text("Enrollment status: Open") : $("#enrollment-status-holder").text("Enrollment status: Closed");
        if(selectedSchoolYearObject.isEnrollment == 1){
            $("#enrollment-phase-holder").css("display", "block");
            selectedSchoolYearObject.active === 1 ? $("#enrollment-phase-holder").text("Enrollment phase: Official") : $("#enrollment-phase-holder").text("Enrollment phase: Pre-enrollment");        
        }else{
            $("#enrollment-phase-holder").css("display", "none");
        }
    }
}

function updateSchoolYearControlButtons(){
    if(selectedSchoolYearObject === null){
    }else{
        const closeEnrollmentButton = document.querySelector('#closeOfficialEnrollmentButton');
        const openEnrollmentButton = document.querySelector('#openOfficialEnrollmentButton');
        const startSchoolYearButton = document.querySelector('#startSYButton');
        const endSchoolYearButton = document.querySelector('#endSYButton');
        $(enrollmentButtonControls).css("display", "flex");
        if(selectedSchoolYearObject.active === 1){
            $(endSchoolYearButton).css("display", "flex");
            $(startSchoolYearButton).css("display", "none");    
            if(selectedSchoolYearObject.isEnrollment === 1){
                $(closeEnrollmentButton).css("display", "flex");
                $(closeEnrollmentButton).text("Close Enrollment");
                $(openEnrollmentButton).css("display", "none");  
            }else{
                $(openEnrollmentButton).css("display", "flex");
                $(openEnrollmentButton).text("Open Enrollment");
                $(closeEnrollmentButton).css("display", "none");  
            }
        }else{
            $(endSchoolYearButton).css("display", "none");
            if(!schoolYearList.some(schoolYear => schoolYear.active === 1)){
                $(startSchoolYearButton).css("display", "flex");
            }else{
                $(startSchoolYearButton).css("display", "none");
            }
            if(selectedSchoolYearObject.isEnrollment === 1){
                $(closeEnrollmentButton).css("display", "flex");
                $(closeEnrollmentButton).text("Close Pre-enrollment");
                $(openEnrollmentButton).css("display", "none");  
            }else{
                $(openEnrollmentButton).css("display", "flex");
                $(openEnrollmentButton).text("Open Pre-enrollment");
                $(closeEnrollmentButton).css("display", "none");  
            }   
        }
    }
}

function updateSchoolYearDropDown() {
    $(schoolYearDropDown).empty();
    const range = document.createRange();
    const parser = new DOMParser();
    $.each(schoolYearList, function(index, entry) {
        let x = `<li>
            <a class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">${entry['school_year']}</a>
        </li>`;
        const doc = parser.parseFromString(x, "text/html");
        const desiredHTML = doc.body.innerHTML;
        const fragment = range.createContextualFragment(desiredHTML); // Convert string to Node fragment
        $(schoolYearDropDown).append(fragment);
    });
}

function addSchoolYearFormClearError(){
    $("#input-requiredDays-error").css("color", "red");
    $("#input-requiredDays-error").text("");
    $("#input-requiredDays-error").css("display", "none");
    $("#input-schoolYear-error").css("color", "red");
    $("#input-schoolYear-error").text("");
    $("#input-schoolYear-error").css("display", "none");
}

schoolYearDropDown.addEventListener('click', function(event) {
    if (event.target.tagName === 'A') {
        // Handle click event on the `<a>` element
        const valueOfYear = event.target.textContent;
        const selectedObject = schoolYearList.find(entry => entry['school_year'] === valueOfYear);
        selectedSchoolYearObject = selectedObject;
        getSections();
        updateSchoolYearInformation();
        updateSchoolYearControlButtons();
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
          $("#input-schoolYear-error").css("display", "block");
          $("#input-schoolYear-error").css("color", "green");
          $("#input-schoolYear-error").text("School Year Created Successfully");
          $("#input-requiredDays-error").css("display", "none");
          getSchoolYear().then(updateSchoolYearDropDown);
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