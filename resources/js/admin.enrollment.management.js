import { Modal } from 'flowbite';
var schoolYearList;
var sectionList;
var teacherList;
var subjectList;
var studentList;
var selectedStudent;
var availableSlotsInSection;
var globalSectionInformationEntry;
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
const addStudentFormShow = document.querySelector('#show-add-student-form');
const sectionsTableBody = document.getElementById('sections-table-body');
const sectionEquivalents = ["Kinder", "Grade 1", "Grade 2", "Grade 3", "Grade 4", "Grade 5", "Grade 6"];

const editSectionForm = document.getElementById('edit-section-form');
const editSectionFormSubmit = document.getElementById('edit-section-form-submit');
//////////STUDENT LIST/////////////////////////
const enrolledStudentTables = document.getElementById('enrolled-student-list-all');

//////////////SECTION INFORMATION///////////////
const sectionInformationSectionName = document.querySelectorAll('#section-information-section-name');
const sectionInformationGradeLevel = document.querySelectorAll('#section-information-grade-level');
const sectionInformationSlots = document.querySelectorAll('#section-information-slots');
const sectionInformationAdviser = document.querySelector('#section-information-adviser');
const sectionInformationSubjectSelect = document.querySelector('#section-information-subject-list-dropdown');
const sectionInformationSaveTeacher = document.querySelector('#save-teacher-for-section');
const sectionInformationSaveTeacherForm = document.querySelector('#section-information-select-teachers-form');
const teachersDropdownButton = document.querySelector('#teachersDropdownButton');
////// STUDENT CHECKLIST///////
const studentChecklistList = document.getElementById('student_assignment_checklist_list'); 
const studentChecklistForm = document.getElementById('student-assignment-form');
const studentChecklistFormSubmit = document.getElementById('submit-student-assignment-to-section');
const studentListInSectionInformation = document.getElementById('view-section-information-students-in-section');
///////DECLARE MODAL////////  


const $viewSectionInfo = document.getElementById('viewSectionInfoModal');
const $editSectionInfo = document.getElementById('editSectionModal');
const $archiveSectionInfo = document.getElementById('archiveSectionModal');
const $deleteSectionInfo = document.getElementById('deleteSectionModal');
const $removeFromSectionModal = document.getElementById('removeFromSectionModal');

const viewSectionInfoModal = new Modal($viewSectionInfo);
const editSectionInfoModal = new Modal($editSectionInfo);
const archiveSectionInfoModal = new Modal($archiveSectionInfo);
const deleteSectionInfoModal = new Modal($deleteSectionInfo);
////
const removeFromSectionModal = new Modal($removeFromSectionModal);
////////////

const closeRemoveFromSectionModal = document.querySelectorAll('#closeRemoveFromSectionModal');
for (const close of closeRemoveFromSectionModal) {
  close.addEventListener('click', function(){
    removeFromSectionModal.hide();
  })
}

const submitRemoveFromSectionModal = document.getElementById('submit-remove-from-section');
submitRemoveFromSectionModal.addEventListener('click', function(){
  $.ajax({
    url: localStorage.getItem('appUrl') + "/classes.removeStudentsFromSection",
    type: "POST",
    data:{
     _method: 'POST',
    student_id : selectedStudent,
    school_year_id: selectedSchoolYearObject.id,
    },
    success: function(response) {
      // Form submission is successful, prevent default submission
      const changedStudent = studentList.find(student => student.id == selectedStudent);
      changedStudent.section_id = null;
      selectedClass.slots--;
      removeFromSectionModal.hide();
      updateStudentListInViewSectionInformation();
      updateStudentSectionAssignmentList();
      updateViewSectionInformation(globalSectionInformationEntry);
    },
    error: function(response) {
      // Form submission failed, prevent default submission
    }
  });  
});


function updateStudentListInViewSectionInformation(){
  const variable = studentList.find(student => student.id == selectedStudent);
  $(studentListInSectionInformation).empty();
  let index = 1;
  studentList.forEach(student => {
    if(student.section_id == globalSectionInformationEntry.id){
      let x = `<tr class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
      <td class="px-6 py-4">
        ${student.last_name}
      </td>
      <td class="px-6 py-4">
      ${student.first_name}
      </td>
      <td class="px-6 py-4">
      ${student.middle_name}
      </td>
      <td class="px-6 py-4">
      ${student.extension_name}
      </td>
      <td class="px-6 py-4">
      ${student.lrn}
      </td>
      <td class="px-6 py-4">
        <!-- Modal toggle -->
        <a href="#" id="showRemoveFromSectionModal${index}" data-modal-target="removeFromSectionModal" data-modal-show="removeFromSectionModal" type="button" class="px-2 font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
      </td>
    </tr>`;
    $(studentListInSectionInformation).append(x);

    const showRemoveFromSectionModal =  document.getElementById('showRemoveFromSectionModal' + index);
      showRemoveFromSectionModal.addEventListener('click', function(){
        removeFromSectionModal.toggle();
        selectedStudent = student.id;
      });
    index++;
    }
  });
}

function updateEnrolledStudentsTable(){
  $(enrolledStudentTables).empty();
  studentList.forEach(student => {
    let x3 = `<tr class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
    <td class="px-3 py-3">
      ${student['last_name']}
    </td>
    <td class="px-3 py-3">
      ${student['first_name']}
    </td>
    <td class="px-3 py-3">
    ${student['middle_name']}
    </td>
    <td class="px-3 py-3">
    ${student['extension_name']}
    </td>
    <td class="px-3 py-3">
    ${student['username']}
    </td>
    <td class="px-3 py-3">
    ${sectionEquivalents[student['grade_level_id']-1]}
    </td>
    <td class="px-3 py-3">
    ${student['lrn']}
    </td>
    <td class="px-3 py-3">
      Active
    </td>
    <td class="px-3 py-3">
      ----
    </td>
    <td class="grid grid-cols-1 px-3 py-3">
      <!-- Modal toggle -->
      <a href="#" data-modal-target="viewStudentUserModal" data-modal-show="viewStudentUserModal" type="button" class="px-2 font-medium text-emerald-600 dark:text-emerald-500 hover:underline">View</a>
      <a href="#" data-modal-target="editStudentUserModal" data-modal-show="editStudentUserModal" type="button" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
      <a href="#" data-modal-target="archiveStudentUserModal" data-modal-show="archiveStudentUserModal" type="button" class="px-2 font-medium text-gray-400 dark:text-gray-500 hover:underline">Archive</a>
      <a href="#" data-modal-target="deleteStudentUserModal" data-modal-show="deleteStudentUserModal" type="button" class="px-2 font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
    </td>
  </tr>`;
  $(enrolledStudentTables).append(x3);

  });
}

studentChecklistFormSubmit.addEventListener('click', function(e){
  e.preventDefault();
  const studentCheckListSerialized = $(studentChecklistForm).serialize() + '&section_id=' + globalSectionInformationEntry.id + '&school_year=' + selectedSchoolYearObject.id;
  $.ajax({
    url: localStorage.getItem('appUrl') + "/classes.assignStudentsToSection",
    type: "POST",
    data: studentCheckListSerialized,
    success: function(response) {
      // Form submission is successful, prevent default submission
      if(response != ''){
        response.forEach(student => {
          const list = studentList.find(studentInList => studentInList.id == student); 
          list.section_id = globalSectionInformationEntry.id;
          selectedClass.slots++;
        });
        updateStudentListInViewSectionInformation();
        updateStudentSectionAssignmentList();
        updateViewSectionInformation(globalSectionInformationEntry);
      }
    },
    error: function(response) {
      // Form submission failed, prevent default submission
    }
  });  
});

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

document.querySelector('#OpenSaveTeacherModal').addEventListener('click', function(){
  const selectDropdownOptions = sectionInformationSaveTeacherForm.querySelectorAll('select');
    for (const selectDropdownOption of selectDropdownOptions) {
      selectDropdownOption.selectedIndex = 0;
  }
})

sectionInformationSaveTeacher.addEventListener('click', function(){
  var serializedSaveTeacherForm = $(sectionInformationSaveTeacherForm).serialize();
  return new Promise((resolve) =>{
    $.ajax({
      url: localStorage.getItem('appUrl') + "/classes.assignTeachers",
      type: "POST",
      data: serializedSaveTeacherForm,
      success: function (response) {
        if(response['teacher_id'] != null ){
          var section = sectionList.find(section => section.id == response['section_id']);
          if (section) {
            section.adviser_id = response['teacher_id'];
          }
          updateAdviserInView(response['teacher_id']);
        }
        viewSectionInfoModal.hide();
      },
      error: function (response) {
      }
    });
    resolve();
  });
});

function getSchoolYear() {
    const url = localStorage.getItem('appUrl') + '/api/schoolYears';
    return new Promise((resolve, reject) => {
        $.getJSON(url, function(data) {
            schoolYearList = data;
            resolve();
        });
    });
}

function getTeachers() {
  const url = localStorage.getItem('appUrl') + '/api/teachers';
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        teacherList = data;
          resolve();
      });
  });
}

function getSubjects(){
  const url = localStorage.getItem('appUrl') + '/api/subjects';
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        subjectList = data;
          resolve();
      });
  });
}

function getSections() {
  const url = localStorage.getItem('appUrl') + '/api/sections/' + selectedSchoolYearObject.id;
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
        sectionList = data;
          resolve();
      });
  });
}

function getStudents() {
  const url = localStorage.getItem('appUrl') + '/api/students/' + selectedSchoolYearObject.id;
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
    url: localStorage.getItem('appUrl') + "/admin.addSection",
    type: "POST",
    data: serializeData,
    success: function (response) {
        $("#input-sectionName-error").css("display", "block");
        $("#input-sectionName-error").css("color", "green");
        $("#input-sectionName-error").text("Section Created Successfully");
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
    url: localStorage.getItem('appUrl') + "/admin.editSection",
    type: "POST",
    data: serializeData,
    success: function (response) {
        $("#edit-sectionName-error").css("display", "block");
        $("#edit-sectionName-error").css("color", "green");
        $("#edit-sectionName-error").text("Section Updated Successfully");
        $("#edit-sectionSlots-error").css("display", "none");
        $("#edit-gradeLevel-error").css("display", "none");
        getSections().then(async () => {
            updateSectionsTable(selectedGradeLevel);
        }).then(async () => {
            getStudents();
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

function updateAdviserInView(adviserTeacherID){
  var adviserTeacher = teacherList.find(teacher => teacher.id == adviserTeacherID);
  if(adviserTeacher){
    sectionInformationAdviser.innerText = "Adviser - " + adviserTeacher.last_name + ", " + adviserTeacher.first_name + " " + adviserTeacher.middle_name + " " + adviserTeacher.extension_name;
  }else{
    sectionInformationAdviser.innerText = "Adviser - ";
  }  
}

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
    sectionInformationSlots.innerHTML = "Available Slots: "  + availableSlotsInSection + "/" + selectedSection['section_slot'];
  });
  const studentInputFields = document.getElementById('student-assignment-form').querySelectorAll('input[name="student[]"]');
  ///////////COUNTING OF AVAILABLE SLOTS////////////
  for (const inputField of studentInputFields) {
    inputField.addEventListener('click', (event) => {
      // Handle changing of slots here
      if(inputField.checked){
        availableSlotsInSection--;
        if(availableSlotsInSection < 0){
          inputField.checked = false;
          availableSlotsInSection++;
        }
      }else{
        availableSlotsInSection++;
      }
      if(availableSlotsInSection >= 0){
      sectionInformationSlots.forEach(sectionInformationSlots => {
        sectionInformationSlots.innerHTML = "Available Slots: "  + (availableSlotsInSection) + "/" + selectedSection['section_slot'];
      });

      }
    });
  }
  updateAdviserInView(selectedSection.adviser_id);
  var sectionSubjectList = document.getElementById('section-information-subject-list');
  $(sectionSubjectList).empty();
  $(sectionInformationSubjectSelect).empty();
  selectedClass.sections.forEach(element => {
    //////////////////LIST FOR VIEWING///////////////////
    var subjectTeacher = teacherList.find(teacher => teacher.id === element.teacher_id);
    var subjectForSection = subjectList.find(subject => subject.id === element.subject_id);
    var x;
    if(subjectTeacher){
       x = `<p class="text-sm font-regular text-gray-500 dark:text-white">${subjectForSection.subject_name} - ${subjectTeacher.last_name}, ${subjectTeacher.first_name} ${subjectTeacher.middle_name} ${subjectTeacher.extension_name}</p>`;
    }else if (subjectTeacher === undefined){
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
      globalSectionInformationEntry = entry;
      viewSectionInfoModal.toggle();
      updateStudentSectionAssignmentList();
      updateStudentListInViewSectionInformation();
      const url = localStorage.getItem('appUrl') + '/api/getClass/' + entry['grade_level_id'] + '/' + selectedSchoolYearObject.id + "/" + entry['id'];
      $.getJSON(url, function(data) {
        selectedClass = data;
        resolve();
      }).then(()=>{
        updateViewSectionInformation(entry);
      });
    });

    const editSectionInfoBtn = document.getElementById(`show-edit-section-information-modal-${entry['id']}`);
    editSectionInfoBtn.addEventListener('click', function() {
      globalSectionInformationEntry = entry;
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
      globalSectionInformationEntry = entry;
      archiveSectionInfoModal.toggle();
    });

    const deleteSectionInfoBtn = document.getElementById(`show-delete-section-information-modal-${entry['id']}`);
    deleteSectionInfoBtn.addEventListener('click', function() {
      globalSectionInformationEntry = entry;
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
      url: localStorage.getItem('appUrl') + "/admin.closeEnrollment",
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
      url: localStorage.getItem('appUrl') + "/admin.openEnrollment",
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
      url: localStorage.getItem('appUrl') + "/admin.startSchoolYear",
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
      url: localStorage.getItem('appUrl') + "/admin.endSchoolYear",
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
          if(selectedSchoolYearObject.is_finished === 1){
            $(startSchoolYearButton).css("display", "none");
            $(endSchoolYearButton).css("display", "none");
            $(openEnrollmentButton).css("display", "none");   
            $(closeEnrollmentButton).css("display", "none");        
          }else{
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

function updateStudentSectionAssignmentList(){
  ////studentChecklistList
    $(studentChecklistList).empty();
    studentList.forEach(student => {
      if(student.section_id == null && student.grade_level_id == globalSectionInformationEntry.grade_level_id && globalSectionInformationEntry.id != student.section_id){
        let x = ` <li>
                  <div class="flex items-center">
                    <input name="student[]" type="checkbox" value="${student.id}" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">${student.last_name}, ${student.first_name} ${student.middle_name} ${student.extension_name}</label>
                  </div>
                </li>`;
        $(studentChecklistList).append(x);        
      }
    });
}

schoolYearDropDown.addEventListener('click', function(event) {
    if (event.target.tagName === 'A') {
        // Handle click event on the `<a>` element
        const valueOfYear = event.target.textContent;
        const selectedObject = schoolYearList.find(entry => entry['school_year'] === valueOfYear);
        selectedSchoolYearObject = selectedObject;
        document.querySelector('#dropdownSYHoverButton-ocl').innerHTML = selectedSchoolYearObject.school_year;
        addSectionFormShow.removeAttribute("disabled");
        addStudentFormShow.removeAttribute("disabled");
        if(selectedSchoolYearObject.is_enrollment == 1){
          document.getElementById('show-add-student').href = '/student-registration-1';
        }
        // let getStudentPromise = getStudents();
        getSections().then( async ()=>{
          updateSectionsTable(selectedGradeLevel);
        }).then( async ()=>{
          await getStudents();
          updateEnrolledStudentsTable();
        });
        updateSchoolYearInformation();
        updateSchoolYearControlButtons();
    }    
});

addSchoolYearFormShow.addEventListener('click', function(event){
  const schoolYearInput = document.querySelector('#schoolYear');
  if(schoolYearList.length != 0){
    schoolYearInput.setAttribute('disabled', true);
    const syString = schoolYearList[schoolYearList.length-1].school_year;
    const sy = syString.substring(syString.length - 4);
    schoolYearInput.value = sy;
  }
  console.log(schoolYearList.length);
  addSchoolYearFormClearError();
});

addschoolYearDropDownSubmit.addEventListener('click', function(event){
    event.preventDefault();
    document.querySelector('#schoolYear').removeAttribute('disabled');
    const serializeData = $(addSchoolYearForm).serialize();
    console.log(serializeData);
    $.ajax({
        url: localStorage.getItem('appUrl') + "/admin.addSchoolYear",
        type: "POST",
        data: serializeData,
        success: function(response) {
          document.querySelector('#schoolYear').setAttribute('disabled', true);
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
          if(schoolYearList.length != 0){
            document.querySelector('#schoolYear').setAttribute('disabled', true);
          }
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