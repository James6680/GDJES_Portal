import { Modal } from 'flowbite';
var schoolYearList;
var sectionList;
var teacherList;
var subjectList;
var studentList;
var availableSlotsInSection;
const range = document.createRange();
const parser = new DOMParser();
var selectedGradeLevel = null;
var selectedSchoolYearObject = null;
var selectedClass = null;
const schoolYearDropDown = document.getElementById('school-year-dropdown-picker');
const addSchoolYearForm = document.getElementById('add-school-year-form');
const addschoolYearDropDownSubmit = document.getElementById('add-school-year-form-submit');
const addSchoolYearFormShow = document.querySelector('#add-school-year-form-show');
///////////INFORMATIONS////
const noSchoolYearSelected = document.querySelector('#no-selected-school-year');
const yesSchoolYearSelected = document.querySelector('#yes-selected-school-year');
const enrollmentButtonControls = document.querySelector('#enrollment-button-controls');
const endSchoolYearButton = document.getElementById('end-school-year-button');
const startSchoolYearButton = document.getElementById('start-school-year-button');
const closeEnrollmentButton = document.getElementById('close-enrollment-button');
const openEnrollmentButton = document.getElementById('openOfficialEnrollmentButton');
///////////////////////////
////////////////SECTIONS//////////
const addSectionForm = document.getElementById('add-section-form');
const addSectionFormSubmit = document.getElementById('add-section-form-submit');
const addSectionFormShow = document.querySelector('#show-add-section-form');
const sectionsTableBody = document.getElementById('sections-table-body');
const sectionEquivalents = ["Kinder", "Grade 1", "Grade 2", "Grade 3", "Grade 4", "Grade 5", "Grade 6"];

const editSectionForm = document.getElementById('edit-section-form');
const editSectionFormSubmit = document.getElementById('edit-section-form-submit');
//////////////SECTION INFORMATION///////////////
const sectionInformationSectionName = document.querySelectorAll('#section-information-section-name');
const sectionInformationGradeLevel = document.querySelectorAll('#section-information-grade-level');
const sectionInformationSlots = document.querySelectorAll('#section-information-slots');
const sectionInformationAdviser = document.querySelector('#section-information-adviser');
const sectionInformationSubjectSelect = document.querySelector('#section-information-subject-list-dropdown');
const sectionInformationSaveTeacher = document.querySelector('#save-teacher-for-section');
const sectionInformationSaveTeacherForm = document.querySelector('#section-information-select-teachers-form');
const teachersDropdownButton = document.querySelector('#teachersDropdownButton'); 
///////DECLARE MODAL////////  


const $viewSectionInfo = document.getElementById('viewSectionInfoModal');
const $editSectionInfo = document.getElementById('editSectionModal');
const $archiveSectionInfo = document.getElementById('archiveSectionModal');
const $deleteSectionInfo = document.getElementById('deleteSectionModal');

const viewSectionInfoModal = new Modal($viewSectionInfo);
const editSectionInfoModal = new Modal($editSectionInfo);
const archiveSectionInfoModal = new Modal($archiveSectionInfo);
const deleteSectionInfoModal = new Modal($deleteSectionInfo);
////////////

document.getElementById('closeViewSectionModal').addEventListener('click', function(){
  viewSectionInfoModal.hide();
});

document.getElementById('closeEditSectionModal').addEventListener('click', function(){
  editSectionInfoModal.hide();
});
document.getElementById('closeArchiveSectionModal').addEventListener('click', function(){
  archiveSectionInfoModal.hide();
});
document.getElementById('closeDeleteSectionModal').addEventListener('click', function(){
  deleteSectionInfoModal.hide();
});

sectionInformationSaveTeacher.addEventListener('click', function(){
  var serializedSaveTeacherForm = $(sectionInformationSaveTeacherForm).serialize();
  console.log(serializedSaveTeacherForm);
  return new Promise((resolve) =>{
    $.ajax({
      url: "/classes.assignTeachers",
      type: "POST",
      data: serializedSaveTeacherForm,
      success: function (response) {
        console.log(response);
      },
      error: function (response) {
      }
    });
    resolve();
  });
});

function getSchoolYear() {
    const url = '/api/schoolYears';
    return new Promise((resolve, reject) => {
        $.getJSON(url, function(data) {
            schoolYearList = data;
            resolve();
        });
    });
}

function getTeachers() {
  const url = '/api/teachers';
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        teacherList = data;
          resolve();
      });
  });
}

function getSubjects(){
  const url = '/api/subjects';
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        subjectList = data;
          resolve();
      });
  });
}

function getSections() {
  const url = '/api/sections/' + selectedSchoolYearObject.id;
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        sectionList = data;
          resolve();
      });
  });
}

function getStudents() {
  const url = '/api/students/' + selectedSchoolYearObject.id;
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        studentList = data;
          resolve();
      });
  });
}

addSectionFormSubmit.addEventListener("click", function(event){
  event.preventDefault();   
  const gradeLevelDropdown = addSectionForm.querySelector('#gradeLevelDropdownButton');
  const selectedGradeLevel = gradeLevelDropdown.options[gradeLevelDropdown.selectedIndex].value;
  const serializeData = $(addSectionForm).serialize() + '&gradeLevel=' + selectedGradeLevel + '&schoolYear=' + selectedSchoolYearObject.id;
  $.ajax({
    url: "/admin.addSection",
    type: "POST",
    data: serializeData,
    success: function (response) {
        $("#input-sectionName-error").css("display", "block");
        $("#input-sectionName-error").css("color", "green");
        $("#input-sectionName-error").text("School Year Created Successfully");
        $("#input-sectionSlots-error").css("display", "none");
        $("#input-gradeLevel-error").css("display", "none");
        getSections().then(async () => {
            updateSectionsTable(selectedGradeLevel);
        }); 
    },
    error: function (response) {
      clearAddSectionErrors();
      var validationErrors = response.responseJSON.errors;
                  // Handle other error responses
      $.each(validationErrors, function (fieldName, errorMessage) {
          $("#input-" + fieldName + "-error").css("color", "red");
          $("#input-" + fieldName + "-error").text(errorMessage);
          $("#input-" + fieldName + "-error").css("display", "block");
      });
    }
  });
});

editSectionFormSubmit.addEventListener("click", function(event){
  event.preventDefault();
  const gradeLevelDropdown = editSectionForm.querySelector('#gradeLevelDropdownButton');
  const selectedGradeLevel = gradeLevelDropdown.options[gradeLevelDropdown.selectedIndex].value;
  const serializeData = $(editSectionForm).serialize() + '&gradeLevel=' + selectedGradeLevel + '&schoolYear=' + selectedSchoolYearObject.id;
  $.ajax({
    url: "/admin.editSection",
    type: "POST",
    data: serializeData,
    success: function (response) {
        $("#edit-sectionName-error").css("display", "block");
        $("#edit-sectionName-error").css("color", "green");
        $("#edit-sectionName-error").text("School Year Created Successfully");
        $("#edit-sectionSlots-error").css("display", "none");
        $("#edit-gradeLevel-error").css("display", "none");
        getSections().then(async () => {
            updateSectionsTable(selectedGradeLevel);
        }); 
    },
    error: function (response) {
      clearEditSectionErrors();
      var validationErrors = response.responseJSON.errors;
                  // Handle other error responses
      $.each(validationErrors, function (fieldName, errorMessage) {
          $("#edit-" + fieldName + "-error").css("color", "red");
          $("#edit-" + fieldName + "-error").text(errorMessage);
          $("#edit-" + fieldName + "-error").css("display", "block");
      });
    }
  });   
});

function updateViewSectionInformation(selectedSection){
  teachersDropdownButton.setAttribute('name', 'adviser-' + selectedSection.id);
  ///////////////AVAILABLE COUNT FOR SECTION SLOT////////
  availableSlotsInSection = selectedSection['section_slot'] - selectedClass.slots;
  sectionInformationSectionName.forEach(sectionInformationSectionName => {
    sectionInformationSectionName.innerText = "Section Name: " + selectedSection.section_name;
  });
  sectionInformationGradeLevel.forEach(sectionInformationGradeLevel => {
    sectionInformationGradeLevel.innerText = "Grade Level: " + sectionEquivalents[selectedSection['grade_level_id']-1];
  });
  sectionInformationSlots.forEach(sectionInformationSlots => {
    sectionInformationSlots.innerHTML = "Available Slots: "  + selectedClass.slots + "/" + selectedSection['section_slot'];
  });

  var adviserTeacher = teacherList.find(teacher => teacher.id === selectedSection.adviser_id);
  if(adviserTeacher){
    sectionInformationAdviser.innerText = "Adviser - " + adviserTeacher.last_name + ", " + adviserTeacher.first_name + " " + adviserTeacher.middle_name + " " + adviserTeacher.extension_name;
  }else{
    sectionInformationAdviser.innerText = "Adviser - ";
  }
  var sectionSubjectList = document.getElementById('section-information-subject-list');
  $(sectionSubjectList).empty();
  $(sectionInformationSubjectSelect).empty();
  selectedClass.sections.forEach(element => {
    //////////////////LIST FOR VIEWING///////////////////
    var subjectTeacher = teacherList.find(teacher => teacher.id === element.teacher_id);
    var subjectForSection = subjectList.find(subject => subject.id === element.subject_id);
    var x
    if(subjectTeacher){
       x = `<p class="text-sm font-regular text-gray-500 dark:text-white">${subjectForSection.subject_name} - ${subjectTeacher.last_name}, ${subjectTeacher.first_name} ${subjectTeacher.middle_name} ${subjectTeacher.extension_name}</p>`;
    }else{
       x = `<p class="text-sm font-regular text-gray-500 dark:text-white">${subjectForSection.subject_name} - `;
    }
    const doc = parser.parseFromString(x, "text/html");
    const desiredHTML = doc.body.innerHTML;
    const fragment = range.createContextualFragment(desiredHTML); // Convert string to Node fragment
    $(sectionSubjectList).append(fragment);
    ////////////////////LIST FOR EDITING/////////////////
    let y = `<div class="flex flex-col">
              <label for="teachersDropdown" class="block mb-2 text-sm font-medium text-black dark:text-white">${subjectForSection.subject_name}</label>
              <div class="flex flex-col sm:flex-row w-full h-auto gap-0 sm:gap-4">
                <!-- Dropdown select button for assign teacher -->
                <select id="teachersDropdownButton${element.subject_id}" name="subject-${element.id}" class="mt-1 block w-full pl-3 pr-10 py-2.5 text-base border-gray-300 focus:outline-none focus:ring-green-600 focus:border-green-600 sm:text-sm rounded-lg bg-gray-50 gap-2">
                  <div id="teachersDropdown" class="relative bg-gray-50 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                    <option value="" disabled selected>Select subject teacher</option>
                  </div><!-- End of Dropdown menu for assign teacher -->;
                  </select>
              </div>  
            </div>`
    const doc1 = parser.parseFromString(y, "text/html");
    const desiredHTML1 = doc1.body.innerHTML;
    const fragment1 = range.createContextualFragment(desiredHTML1); // Convert string to Node fragment
    $(sectionInformationSubjectSelect).append(fragment1);
    const selectDropDown  = sectionInformationSubjectSelect.querySelector('#teachersDropdownButton' + element.subject_id);
    ///////////ASSIGN DROPDOWN SELECT////////
        const teacherOptionsFragment = document.createDocumentFragment();
        teacherList.forEach(teacher => {
          const teacherOption = document.createElement('option');
          teacherOption.value = teacher.id;
          teacherOption.textContent = `${teacher.last_name}, ${teacher.first_name} ${teacher.middle_name} ${teacher.extension_name}`;
          teacherOptionsFragment.appendChild(teacherOption);
        });
      $(selectDropDown).append(teacherOptionsFragment);
  });
}


function updateSectionsTable(gradeLevel) {
  $(sectionsTableBody).empty();

  $.each(sectionList, function (index, entry) {
    const rowHTML = `<tr class="bg-white dark:bg-gray-800">
      <td class="px-6 py-4">
        ${index + 1}
      </td>
      <td class="px-6 py-4">
        ${entry['section_name']}
      </td>
      <td class="px-6 py-4">
      ${sectionEquivalents[entry['grade_level_id']-1]}
      </td>
      <td class="px-6 py-4">
        ${entry['section_slot']}
      </td>
      <td class="px-6 py-4">
        <a href="#" id="show-view-section-information-modal-${entry['id']}" data-modal-target="viewSectionInfoModal" data-modal-show="viewSectionInfoModal" type="button" class="pr-2 font-medium text-emerald-600 dark:text-emerald-500 hover:underline">View Section Info</a>
        <a href="#" id="show-edit-section-information-modal-${entry['id']}" data-modal-target="editSectionModal" data-modal-show="editSectionModal" type="button" class="pr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
        <a href="#" id="show-archive-section-information-modal-${entry['id']}" data-modal-target="archiveSectionModal" data-modal-show="archiveSectionModal" type="button" class="pr-2 font-medium text-gray-400 dark:text-gray-500 hover:underline">Archive</a>
        <a href="#" id="show-delete-section-information-modal-${entry['id']}" data-modal-target="deleteSectionModal" data-modal-show="deleteSectionModal" type="button" class="pr-2 font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
      </td>
    </tr>`;
    $(sectionsTableBody).append(rowHTML);

    const viewSectionInfoBtn = document.getElementById(`show-view-section-information-modal-${entry['id']}`);
    viewSectionInfoBtn.addEventListener('click', function() {
      viewSectionInfoModal.toggle();
      const url = '/api/getClass/' + entry['grade_level_id'] + '/' + selectedSchoolYearObject.id + "/" + entry['id'];
      $.getJSON(url, function(data) {
        selectedClass = data;
      }).then(()=>{
        updateViewSectionInformation(entry);
      });
    });

    const editSectionInfoBtn = document.getElementById(`show-edit-section-information-modal-${entry['id']}`);
    editSectionInfoBtn.addEventListener('click', function() {
      clearEditSectionErrors();
      editSectionForm.querySelector('input[name="section_id"]').value = entry['id'];
      editSectionForm.querySelector('input[name="sectionName"]').value = entry['section_name'];

// Replace section slots input value
      editSectionForm.querySelector('input[name="sectionSlots"]').value = entry['section_slot'];

// Replace grade level select option
      const gradeLevelOptions = editSectionForm.querySelector('select[name="gradeLevel"]').querySelectorAll('option');
      for (const option of gradeLevelOptions) {
        if (option.value == entry['grade_level_id']) {
          option.selected = true;
          break; // Once the matching option is found, stop iterating
        }
      }
      editSectionInfoModal.toggle();
    });

    const archiveSectionInfoBtn = document.getElementById(`show-archive-section-information-modal-${entry['id']}`);
    archiveSectionInfoBtn.addEventListener('click', function() {
      archiveSectionInfoModal.toggle();
    });

    const deleteSectionInfoBtn = document.getElementById(`show-delete-section-information-modal-${entry['id']}`);
    deleteSectionInfoBtn.addEventListener('click', function() {
     deleteSectionInfoModal.toggle();
    });

  });
}

addSectionFormShow.addEventListener('click', function(){
  clearAddSectionErrors();
})

function clearAddSectionErrors(){
  $("#input-sectionName-error").css("color", "red");
  $("#input-sectionName-error").text("");
  $("#input-sectionName-error").css("display", "none");
  $("#input-sectionSlots-error").css("color", "red");
  $("#input-sectionSlots-error").text("");
  $("#input-sectionSlots-error").css("display", "none");
  $("#input-gradeLevel-error").css("color", "red");
  $("#input-gradeLevel-error").text("");
  $("#input-gradeLevel-error").css("display", "none");
}


function clearEditSectionErrors(){
  $("#edit-sectionName-error").css("color", "red");
  $("#edit-sectionName-error").text("");
  $("#edit-sectionName-error").css("display", "none");
  $("#edit-sectionSlots-error").css("color", "red");
  $("#edit-sectionSlots-error").text("");
  $("#edit-sectionSlots-error").css("display", "none");
  $("#input-gradeLevel-error").css("color", "red");
  $("#edit-gradeLevel-error").text("");
  $("#edit-gradeLevel-error").css("display", "none");
}


closeEnrollmentButton.addEventListener('click', function(){
  document.getElementById('show-add-student').href = '#';
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
        selectedSchoolYearObject.is_enrollment === 1 ? $("#enrollment-status-holder").text("Enrollment status: Open") : $("#enrollment-status-holder").text("Enrollment status: Closed");
        if(selectedSchoolYearObject.is_enrollment == 1){
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
            if(selectedSchoolYearObject.is_enrollment === 1){
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
            if(selectedSchoolYearObject.is_enrollment === 1){
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
        document.querySelector('#dropdownSYHoverButton-ocl').innerHTML = selectedSchoolYearObject.school_year;
        addSectionFormShow.removeAttribute("disabled");
        if(selectedSchoolYearObject.is_enrollment == 1){
          document.getElementById('show-add-student').href = '/student-registration-1';
        }
        getSections().then( async ()=>{
          updateSectionsTable(selectedGradeLevel);
        }).then( async ()=>{
          getStudents();
        });
        updateSchoolYearInformation();
        updateSchoolYearControlButtons();
    }    
});

addSchoolYearFormShow.addEventListener('click', function(event){
  addSchoolYearFormClearError();
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
          getSchoolYear().then(async () => {
            updateSchoolYearDropDown();
          });
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
  getSchoolYear()
    .then(async () => {
      await updateSchoolYearDropDown();
    })
    .then(async () => {
      await getSubjects();
    })
    .then(async () => {
      await getTeachers();
      const teacherOptionsFragment = document.createDocumentFragment();

      teacherList.forEach((teacher) => {
        const teacherOption = document.createElement('option');
        teacherOption.value = teacher.id;
        teacherOption.textContent = `${teacher.last_name}, ${teacher.first_name} ${teacher.middle_name} ${teacher.extension_name}`;
        teacherOptionsFragment.appendChild(teacherOption);
      });

      $(teachersDropdownButton).append(teacherOptionsFragment);
    });
});