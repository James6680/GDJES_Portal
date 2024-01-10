<script>
    $(document).ready(function() {
        const returneeRadios = document.querySelectorAll('#createStudent input[name="returnee"]');
        const lastGradeAttendedSelect = document.querySelector('#createStudent #last_grade_attended');
        const lastSchoolAttendedSelect = document.querySelector('#createStudent #last_school_attended');
        const lastSchoolYearAttendedSelect = document.querySelector('#createStudent #last_school_year_finished');
        const gradeLevelSelect = document.querySelector('#createStudent #dropdownGradeLevelButton');
        returneeRadios.forEach(radio => {
          radio.addEventListener('change', (event) => {
            if (event.target.value === 'HINDI') {
              lastGradeAttendedSelect.disabled = true;
              lastSchoolAttendedSelect.disabled = true;
              lastSchoolYearAttendedSelect.disabled = true;

              lastGradeAttendedSelect.selectedIndex = 0;
              lastSchoolAttendedSelect.value = "";
              lastSchoolYearAttendedSelect.value = "";
              
            } else {
                lastGradeAttendedSelect.disabled = false;
              lastSchoolAttendedSelect.disabled = false;
              lastSchoolYearAttendedSelect.disabled = false;
            }
          });
        });

        lastGradeAttendedSelect.addEventListener('change', (event) => {
          const selectedGrade = Number(event.target.value);
          if (selectedGrade == "") {
            gradeLevelSelect.selectedIndex = 0;
          } else if (selectedGrade == "0") {
            gradeLevelSelect.selectedIndex = 1;
          } else if (selectedGrade == "7") {
            gradeLevelSelect.selectedIndex = 7;
          }else if (selectedGrade >= 1 && selectedGrade <= 6) {
              gradeLevelSelect.value = selectedGrade+1;
          }
        });

        //create Student
        $('#addStudent').on('click', function(e){
            e.preventDefault();

            // Clear previous error messages and remove red borders
            $('.error-message').remove();
            $('.form-input').removeClass('border-red-500');
            let returnee = $('#createStudent input[name="returnee"]:checked').val();
            let last_grade_attended = $('#createStudent #last_grade_attended').val();
            let last_school_attended = $('#createStudent #last_school_attended').val();
            let last_school_year_finished = $('#createStudent #last_school_year_finished').val();
            let psa_birth_certno = $('#createStudent #psa').val();
            let lrn = $('#createStudent #lrn').val();
            let last_name = $('#createStudent #last_name').val();
            let first_name = $('#createStudent #first_name').val();
            let middle_name = $('#createStudent #middle_name').val();
            let extension_name = $('#createStudent #extensionName_ng_bata').val();
            let grade_level = $('#createStudent #dropdownGradeLevelButton').val();
            let birth_date = $('#createStudent #birth_date').val();
            let age = $('#createStudent #age').val();
            let gender = $('#createStudent input[name="gender"]:checked').val();
            let indigenous_group = $('#createStudent #indigenous_group').val();
            let mother_tongue = $('#createStudent #dropdownMotherTongueButton').val();
            let religion = $('#createStudent #dropdownReligionButton').val();
            let special_assistance_needs = $('#createStudent #special_assistance_needs').val();
            let region = $('#createStudent #region').val();
            let province = $('#createStudent #province').val();
            let municipality = $('#createStudent #city').val();
            let barangay = $('#createStudent #barangay').val();
            let street = $('#createStudent #street').val();
            let house_number = $('#createStudent #house_number').val();
            let father_last_name = $('#createStudent #father_lastname').val();
            let father_first_name = $('#createStudent #father_firstname').val();
            let father_middle_name = $('#createStudent #father_middlename').val();
            let father_extension_name = $('#createStudent #extensionName_ng_ama').val();
            let father_phone_number = $('#createStudent #father_num').val();
            let father_email = $('#createStudent #father_email').val();
            let mother_last_name = $('#createStudent #mother_lastname').val();
            let mother_first_name = $('#createStudent #mother_firstname').val();
            let mother_middle_name = $('#createStudent #mother_middlename').val();
            let mother_extension_name = $('#createStudent #extensionName_ng_ina').val();
            let mother_phone_number = $('#createStudent #mother_num').val();
            let mother_email = $('#createStudent #mother_email').val();
            let guardian_last_name = $('#createStudent #guardian_lastname').val();
            let guardian_first_name = $('#createStudent #guardian_firstname').val();
            let guardian_middle_name = $('#createStudent #guardian_middlename').val();
            let guardian_extension_name = $('#createStudent #extensionName_ng_guardian').val();
            let guardian_phone_number = $('#createStudent #guardian_num').val();
            let guardian_email = $('#createStudent #guardian_email').val();

            let household_4ps_id = $('#createStudent #household_4ps_id').val();
            var checkedLearningInfo = $('#createStudent input[name="learning_info[]"]:checked');
            // Collect their values into an array
            let learning_info = checkedLearningInfo.map(function() {
              return $(this).val();
            }).get();
            let mode_of_learning = $('#createStudent input[name="pmol"]:checked').val();
            /////NOTE: ADD THE NAMES OF THE FIELDS IN ADMIN CONTNET SECTION. THIS IS INCOMPLETE

            var asd = document.querySelectorAll('*[id*="_error"]');
                    asd.forEach(function(element) {
                        if (element.classList.contains('border-red-500')) {
                            // Find the child element with the 'error-message' class:
                            const errorMessage = element.querySelector('.error-message');
                            if (errorMessage) {
                                errorMessage.remove(); // Remove the error message element
                            }
                            // Optionally, remove the border class from the parent:
                            element.classList.remove('border-red-500');
                        }
                    });

            var dataObject = {
                  aralStatus: returnee,
                  returnee: last_grade_attended,
                  lastSchoolAttended: last_school_attended,
                  lastSchoolYearAttended: last_school_year_finished,
                  psa_birth_cert: psa_birth_certno,
                  lrn_number: lrn,
                  lastName_ng_bata: last_name,
                  firstName_ng_bata: first_name,
                  middleName_ng_bata: middle_name,
                  extensionName_ng_bata: extension_name,
                  grade_level: grade_level,
                  birth_date: birth_date,
                  age_on_oct_31: age,
                  gender: gender,
                  indigenous_group_name: indigenous_group,
                  primary_language: mother_tongue,
                  religion: religion,
                  special_needs_description: special_assistance_needs,
                  region: region,
                  province: province,
                  city: municipality,
                  barangay: barangay,
                  street_text: street,
                  house_number: house_number,
                  lastName_ng_ama: father_last_name,
                  firstName_ng_ama: father_first_name,
                  middleName_ng_ama: father_middle_name,
                  extensionName_ng_ama: father_extension_name,
                  father_phone: father_phone_number,
                  email_ng_ama: father_email,
                  lastName_ng_ina: mother_last_name,
                  firstName_ng_ina: mother_first_name,
                  middleName_ng_ina: mother_middle_name,
                  extensionName_ng_ina: mother_extension_name,
                  mother_phone: mother_phone_number,
                  email_ng_ina: mother_email,
                  lastName_ng_guardian: guardian_last_name,
                  firstName_ng_guardian: guardian_first_name,
                  middleName_ng_guardian: guardian_middle_name,
                  extensionName_ng_guardian: guardian_extension_name,
                  guardian_phone: guardian_phone_number,
                  email_ng_guardian: guardian_email,
                  fourps_id: household_4ps_id,
                  learning_info: learning_info,
                  distance_learning: mode_of_learning,
            };
            $.ajax({
                url: localStorage.getItem('appUrl') + "/admin.student-management.add",
                method: "POST",
                data: dataObject,
                success: function(result) {
                    // Handle the success response here
                    // Close the Tailwind CSS modal
                        //document.getElementById('createTeacherUserModal').classList.remove('visible');
                        //document.getElementById('createTeacherUserModal').classList.add('invisible');
                        document.getElementById('createStudent').reset();
                        $('#tbl').load(location.href + ' #tbl');
                },
                error: function(result) {
                    let error = result.responseJSON;
                    $.each(error.errors, function(key, value) {
                        $('#' + key + "_error").addClass('border-red-500');
                        $('#' + key+ "_error").after('<p class="text-red-500 text-xs italic error-message">' + value + '</p>');
                    });
                }
            });  
        })
        //TESTING ONLY
        // const ish = document.querySelector('#view_last_name');
        // const buttoms = document.querySelector('#buttoms');
        // buttoms.addEventListener('click', function(e) {
        //   ish.textContent += "hello";   
        // });
        
        const viewStudentButtons = document.querySelectorAll(".view_students");
        for (const viewStudentButton of viewStudentButtons) {
            viewStudentButton.addEventListener('click', function (e) {
                const dataset = viewStudentButton.dataset;
                for (const key in dataset) {
                    $('#view_' + key).text(dataset[key]); // Use simpler selector
                }
            });
        }

        const editStudentButtons = document.querySelectorAll(".edit_students");

        for (const editStudentButton of editStudentButtons) {
          editStudentButton.addEventListener('click', function (e) {

            const dataset = editStudentButton.dataset;
            for(const key in dataset){
                const targetElement = $('#editStudent #' + key);
                targetElement.val("");
                if(targetElement.is('select')){
                    targetElement.prop('selectedIndex', 0);
                }
            }
        
            for (const key in dataset) {
              const targetElement = $('#editStudent #' + key);
            
              // Handle text inputs as before
              if (targetElement.is('input')) {
                targetElement.val(dataset[key]);
              }
          
              // Handling select elements:
              else if (targetElement.is('select')) {
                const selectValue = dataset[key];
                targetElement.find('option[value="' + selectValue + '"]').prop('selected', true);
              }

              // Handling radio buttons:
            //   else if (targetElement.is('radio')) { // Check if it's an array
            //   console.log("sadfasdf");
            //       for (let i = 0; i < targetElement.length; i++) {
            //         const radioButton = targetElement.eq(i); // Get individual radio button
            //         if (radioButton.is('radio') && radioButton.val() == dataset[key]) {
            //           radioButton.val(dataset[key]);
            //         }
            //       }
            //     }

            //   console.log(key + ": "+ dataset[key]);
            //   console.log(targetElement);
            }
            const genderRadioButtons = $('#editStudent input[name="gender"]');
            genderRadioButtons.each(function(index, element) {
              // Use $(this) to ensure jQuery object context
              if ($(this).val() === dataset['gender']) {
                $(this).prop('checked', true);
              }
            });
          });
        }

        //SUBMIT EDIT STUDENT
        $('#editStudentButton').on('click', function(e){
            e.preventDefault();
            $('.error-message').remove();
            $('.form-input').removeClass('border-red-500');
            let username = $('#editStudent #username').val();
            let returnee = $('#editStudent input[name="returnee"]:checked').val();
            let last_grade_attended = $('#editStudent #last_grade_attended').val();
            let last_school_attended = $('#editStudent #last_school_attended').val();
            let last_school_year_finished = $('#editStudent #last_school_year_finished').val();
            let psa_birth_certno = $('#editStudent #psa').val();
            let lrn = $('#editStudent #lrn').val();
            let last_name = $('#editStudent #last_name').val();
            let first_name = $('#editStudent #first_name').val();
            let middle_name = $('#editStudent #middle_name').val();
            let extension_name = $('#editStudent #extensionname_ng_bata').val();
            let grade_level = $('#editStudent #dropdownGradeLevelButton').val();
            let birth_date = $('#editStudent #birth_date').val();
            let age = $('#editStudent #age').val();
            let gender = $('#editStudent input[name="gender"]:checked').val();
            let indigenous_group = $('#editStudent #indigenous_group').val();
            let mother_tongue = $('#editStudent #dropdownMotherTongueButton').val();
            let religion = $('#editStudent #dropdownReligionButton').val();
            let special_assistance_needs = $('#editStudent #special_assistance_needs').val();
            let region = $('#editStudent #region').val();
            let province = $('#editStudent #province').val();
            let municipality = $('#editStudent #city').val();
            let barangay = $('#editStudent #barangay').val();
            let street = $('#editStudent #street').val();
            let house_number = $('#editStudent #house_number').val();
            let father_last_name = $('#editStudent #father_lastname').val();
            let father_first_name = $('#editStudent #father_firstname').val();
            let father_middle_name = $('#editStudent #father_middlename').val();
            let father_extension_name = $('#editStudent #extensionname_ng_ama').val();
            let father_phone_number = $('#editStudent #father_num').val();
            let father_email = $('#editStudent #father_email').val();
            let mother_last_name = $('#editStudent #mother_lastname').val();
            let mother_first_name = $('#editStudent #mother_firstname').val();
            let mother_middle_name = $('#editStudent #mother_middlename').val();
            let mother_extension_name = $('#editStudent #extensionname_ng_ina').val();
            let mother_phone_number = $('#editStudent #mother_num').val();
            let mother_email = $('#editStudent #mother_email').val();
            let guardian_last_name = $('#editStudent #guardian_lastname').val();
            let guardian_first_name = $('#editStudent #guardian_firstname').val();
            let guardian_middle_name = $('#editStudent #guardian_middlename').val();
            let guardian_extension_name = $('#editStudent #extensionname_ng_guardian').val();
            let guardian_phone_number = $('#editStudent #guardian_num').val();
            let guardian_email = $('#editStudent #guardian_email').val();
            let household_4ps_id = $('#editStudent #household_4ps_id').val();
            var checkedLearningInfo = $('#editStudent input[name="learning_info[]"]:checked');

            let dataObject={
                // aralStatus: returnee,
                //   returnee: last_grade_attended,
                //   lastSchoolAttended: last_school_attended,
                //   lastSchoolYearAttended: last_school_year_finished,
                  username: username,
                  psa_birth_cert: psa_birth_certno,
                  lrn_number: lrn,
                  lastName_ng_bata: last_name,
                  firstName_ng_bata: first_name,
                  middleName_ng_bata: middle_name,
                  extensionName_ng_bata: extension_name,
                //   grade_level: grade_level,
                  birth_date: birth_date,
                  age_on_oct_31: age,
                  gender: gender,
                  indigenous_group_name: indigenous_group,
                  primary_language: mother_tongue,
                  religion: religion,
                  special_needs_description: special_assistance_needs,
                  region: region,
                  province: province,
                  city: municipality,
                  barangay: barangay,
                  street_text: street,
                  house_number: house_number,
                  lastName_ng_ama: father_last_name,
                  firstName_ng_ama: father_first_name,
                  middleName_ng_ama: father_middle_name,
                  extensionName_ng_ama: father_extension_name,
                  father_phone: father_phone_number,
                  email_ng_ama: father_email,
                  lastName_ng_ina: mother_last_name,
                  firstName_ng_ina: mother_first_name,
                  middleName_ng_ina: mother_middle_name,
                  extensionName_ng_ina: mother_extension_name,
                  mother_phone: mother_phone_number,
                  email_ng_ina: mother_email,
                  lastName_ng_guardian: guardian_last_name,
                  firstName_ng_guardian: guardian_first_name,
                  middleName_ng_guardian: guardian_middle_name,
                  extensionName_ng_guardian: guardian_extension_name,
                  guardian_phone: guardian_phone_number,
                  email_ng_guardian: guardian_email,
                  fourps_id: household_4ps_id,
                //   learning_info: learning_info,
                //   distance_learning: mode_of_learning,
            }
            $.ajax({
                url: localStorage.getItem('appUrl') + "/admin.student-management.edit",
                method: "POST",
                data: dataObject,
                success: function(result) {
                    // Handle the success response here
                    // Close the Tailwind CSS modal
                        //document.getElementById('createTeacherUserModal').classList.remove('visible');
                        //document.getElementById('createTeacherUserModal').classList.add('invisible');
                },
                error: function(result) {
                    let error = result.responseJSON;
                    $.each(error.errors, function(key, value) {
                        $('#editStudent #' + key + "_error").addClass('border-red-500');
                        $('#editStudent #' + key + "_error").append('<p class="text-red-500 text-xs italic error-message">' + value + '</p>');
                    });
                }
            });  
        });

        

        //create Teacher
        $('#addTeacher').on('click', function(e){
            e.preventDefault();

            // Clear previous error messages and remove red borders
            $('.error-message').remove();
            $('.form-input').removeClass('border-red-500');

            let last_name = $('#createTeacher #last_name').val();
            let first_name = $('#createTeacher #first_name').val();
            let middle_name = $('#createTeacher #middle_name').val();
            let extension_name = $('#createTeacher #extension_name').val();
            let email = $('#createTeacher #email').val();
            /*let profile_picture = $('#createTeacher #profile_picture').val();*/
            let birth_date = $('#createTeacher #birth_date').val();
            let age = $('#createTeacher #age').val();
            let gender = $('#createTeacher #gender').val();
            let phone_number = $('#createTeacher #phone_number').val();
            let house_number = $('#createTeacher #house_number').val();
            let street = $('#createTeacher #street').val();
            let barangay = $('#createTeacher #barangay').val();
            let municipality = $('#createTeacher #municipality').val();
            let province = $('#createTeacher #province').val();
            let region = $('#createTeacher #region').val();
            let facebook_link = $('#createTeacher #facebook_link').val();

            $.ajax({
                url: localStorage.getItem('appUrl') + "/admin.teacher-management.add",
                method: "POST",
                data: {
                    last_name: last_name,
                    first_name: first_name,
                    middle_name: middle_name,
                    extension_name: extension_name,
                    email: email,
                    /*profile_picture: profile_picture,*/
                    birth_date: birth_date,
                    age: age,
                    gender: gender,
                    phone_number: phone_number,
                    house_number: house_number,
                    street: street,
                    barangay: barangay,
                    municipality: municipality,
                    province: province,
                    region: region,
                    facebook_link: facebook_link
                },
                success: function(result) {
                    // Handle the success response here
                    if (result.status == 'success') {
                    // Close the Tailwind CSS modal
                        //document.getElementById('createTeacherUserModal').classList.remove('visible');
                        //document.getElementById('createTeacherUserModal').classList.add('invisible');
                        document.getElementById('createTeacher').reset();
                        $('#tbl').load(location.href + ' #tbl');
                    }
                },
                error: function(result) {
                    let error = result.responseJSON;
                    $.each(error.errors, function(key, value) {
                        $('#' + key).addClass('border-red-500');
                        $('#' + key).after('<p class="text-red-500 text-xs italic error-message">' + value + '</p>');
                    });
                }
            });  
        })

        //ARCHIVE STUDENT
        const archiveStudentButtons = document.querySelectorAll(".archive_students");
        var id;
        var username;
        const confirm_student_archive = document.getElementById('confirm_student_archive');
        const students_table = document.getElementById('students_table');

        for (const archiveStudentButton of archiveStudentButtons) {
            archiveStudentButton.addEventListener('click', function (e) {
                student_name = archiveStudentButton.dataset['last_name'] + ", " + archiveStudentButton.dataset['first_name'];
                id = archiveStudentButton.dataset['id'];
                document.getElementById('archive_student_name').textContent = student_name;
            });    
        };    

        confirm_student_archive.addEventListener('click', function(e){
            e.preventDefault();
            $.ajax({
                    url: localStorage.getItem('appUrl') + "/admin.student-management.archive",
                    method: "POST",
                    data: {id:id},
                    success: function(result){
                        console.log(id);
                        console.log(result);
                        const row = document.getElementById('student_' + id);
                        document.getElementById("cancel_student_archive").click();
                        console.log("success");
                        students_table.deleteRow(row.rowIndex);
                        const rows = students_table.rows;

                        let number = 1;
                        for (let i = 1; i < rows.length; i++) {
                          const row = rows[i];
                          const numberCell = row.cells[0]; // Assuming the "NO." column is the first one
                          numberCell.textContent = number++;
                        }
                    }
                });
        });

        //view Teacher
        $('.view_teacher').on('click', function(e){
        let id = $(this).data('id');
        let last_name = $(this).data('last_name');
        let first_name = $(this).data('first_name');    
        let middle_name = $(this).data('middle_name');
        let extension_name = $(this).data('extension_name');
        let username = $(this).data('username');
        let birth_date = $(this).data('birth_date');
        let age = $(this).data('age');
        let gender = $(this).data('gender');
        
        let house_number = $(this).data('house_number');
        let street = $(this).data('street');
        let barangay = $(this).data('barangay');
        let municipality = $(this).data('municipality');
        let province = $(this).data('province');
        let region = $(this).data('region');

        let profile_picture = $(this).data('profile_picture');
        let email = $(this).data('email');
        let phone_number = $(this).data('phone_number');
        let facebook_link = $(this).data('facebook_link');

        // Update modal content
        $('#viewTeachertUserModal h3:eq(1)').text(`${first_name} ${middle_name} ${last_name}`);

        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(0)').text(`Last Name: ${last_name}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(1)').text(`First Name: ${first_name}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(2)').text(`Middle Name: ${middle_name}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(3)').text(`Name Extension: ${extension_name}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(4)').text(`Username: ${username}`);
        
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(5)').text(`Birthday: ${birth_date}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(6)').text(`Age : ${age}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(7)').text(`Gender: ${gender}`);
        
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(8)').text(`House Number: ${house_number}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(9)').text(`Street: ${street}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(10)').text(`Barangay: ${barangay}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(11)').text(`Municipality: ${municipality}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(12)').text(`Province: ${province}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(13)').text(`Region: ${region}`);

        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(14)').text(`Profile Picture: ${profile_picture}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(15)').text(`Email: ${email}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(16)').text(`Phone Number: ${phone_number}`);
        $('#viewTeachertUserModal .pt-4:eq(0) p:eq(17)').text(`Facebook Link: ${facebook_link}`);


/*
        $('#edit_id').val(id);
        $('#edit_last_name').val(last_name);
        $('#edit_first_name').val(first_name);
        $('#edit_middle_name').val(middle_name);
        $('#edit_extension_name').val(extension_name);
        $('#edit_email').val(email);
        $('#edit_profile_picture').val(profile_picture);
        $('#edit_birth_date').val(birth_date);
        $('#edit_age').val(age);
        $('#edit_gender').val(gender);
        $('#edit_phone_number').val(phone_number);
        $('#edit_house_number').val(house_number);
        $('#edit_street').val(street);
        $('#edit_barangay').val(barangay);
        $('#edit_municipality').val(municipality);
        $('#edit_province').val(province);
        $('#edit_region').val(region);
        $('#edit_facebook_link').val(facebook_link);

    
        */
        });

        //edit Teacher
        $('.edit_Teacher').on('click', function(e){

            let id = $(this).data('id');
            let last_name = $(this).data('last_name');
            let first_name = $(this).data('first_name');    
            let middle_name = $(this).data('middle_name');
            let extension_name = $(this).data('extension_name');
            let email = $(this).data('email');
            /*let profile_picture = $(this).data('profile_picture');*/
            let birth_date = $(this).data('birth_date');
            let age = $(this).data('age');
            let gender = $(this).data('gender');
            let phone_number = $(this).data('phone_number');
            let house_number = $(this).data('house_number');
            let street = $(this).data('street');
            let barangay = $(this).data('barangay');
            let municipality = $(this).data('municipality');
            let province = $(this).data('province');
            let region = $(this).data('region');
            let facebook_link = $(this).data('facebook_link');

            
            $('#edit_id').val(id);
            $('#edit_last_name').val(last_name);
            $('#edit_first_name').val(first_name);
            $('#edit_middle_name').val(middle_name);
            $('#edit_extension_name').val(extension_name);
            $('#edit_email').val(email);
            /*$('#edit_profile_picture').val(profile_picture);*/
            $('#edit_birth_date').val(birth_date);
            $('#edit_age').val(age);
            $('#edit_gender').val(gender);
            $('#edit_phone_number').val(phone_number);
            $('#edit_house_number').val(house_number);
            $('#edit_street').val(street);
            $('#edit_barangay').val(barangay);
            $('#edit_municipality').val(municipality);
            $('#edit_province').val(province);
            $('#edit_region').val(region);
            $('#edit_facebook_link').val(facebook_link);
            
        });

        $('#editSaveTeacher').on('click', function(e){
            e.preventDefault();

            // Clear previous error messages and remove red borders
            $('.error-message').remove();
            $('.form-input').removeClass('border-red-500');

            let edit_id = $('#editTeacher #edit_id').val();
            let edit_last_name = $('#editTeacher #edit_last_name').val();
            let edit_first_name = $('#editTeacher #edit_first_name').val();
            let edit_middle_name = $('#editTeacher #edit_middle_name').val();
            let edit_extension_name = $('#editTeacher #edit_extension_name').val();
            let edit_email = $('#editTeacher #edit_email').val();
           /* let edit_profile_picture = $('#editTeacher #edit_profile_picture').val();*/
            let edit_birth_date = $('#editTeacher #edit_birth_date').val();
            let edit_age = $('#editTeacher #edit_age').val();
            let edit_gender = $('#editTeacher #edit_gender').val();
            let edit_phone_number = $('#editTeacher #edit_phone_number').val();
            let edit_house_number = $('#editTeacher #edit_house_number').val();
            let edit_street = $('#editTeacher #edit_street').val();
            let edit_barangay = $('#editTeacher #edit_barangay').val();
            let edit_municipality = $('#editTeacher #edit_municipality').val();
            let edit_province = $('#editTeacher #edit_province').val();
            let edit_region = $('#editTeacher #edit_region').val();
            let edit_facebook_link = $('#editTeacher #edit_facebook_link').val();
            
            $.ajax({
                url: localStorage.getItem('appUrl') + "/admin.teacher-management.edit",
                method: "POST",
                data: {
                    edit_id: edit_id,
                    edit_last_name: edit_last_name,
                    edit_first_name: edit_first_name,
                    edit_middle_name: edit_middle_name,
                    edit_extension_name: edit_extension_name,
                    edit_email: edit_email,
                   /* edit_profile_picture: edit_profile_picture,*/
                    edit_birth_date: edit_birth_date,
                    edit_age: edit_age,
                    edit_gender: edit_gender,
                    edit_phone_number: edit_phone_number,
                    edit_house_number: edit_house_number,
                    edit_street: edit_street,
                    edit_barangay: edit_barangay,
                    edit_municipality: edit_municipality,
                    edit_province: edit_province,
                    edit_region: edit_region,
                    edit_facebook_link: edit_facebook_link
                },
                success: function(result) {
                    // Handle the success response here
                    if (result.status == 'success') {
                    // Close the Tailwind CSS modal
                        //document.getElementById('createTeacherUserModal').classList.remove('visible');
                        //document.getElementById('createTeacherUserModal').classList.add('invisible');
                        document.getElementById('editTeacher').reset();
                        $('#tbl').load(location.href + ' #tbl');
                    }
                },
                error: function(result) {
                    let error = result.responseJSON;
                    $.each(error.errors, function(key, value) {
                        $('#' + key).addClass('border-red-500');
                        $('#' + key).after('<p class="text-red-500 text-xs italic error-message">' + value + '</p>');
                    });
                }
            });  
        })

    });
</script>

<!-------------------------------------------Faculty Portal--------------------------------------->
<!--Disregard this ---Grading-->
<script>
    $(document).ready(function(){
        //show hps in row
        $('.editHPS').on('click', function(e){ //get class
            e.preventDefault();

        // Clear previous error messages and remove red borders
        $('.error-message').remove();
        $('.form-input').removeClass('border-red-500');

        let edit_id = $('#edit_id').val();
        let edit_ww1 = $('#edit_ww1').val();
        let edit_ww2 = $('#edit_ww2').val();
        let edit_ww3 = $('#edit_ww3').val();
        let edit_ww4 = $('#edit_ww4').val();
        let edit_ww5 = $('#edit_ww5').val();
        let edit_ww6 = $('#edit_ww6').val();
        let edit_ww7 = $('#edit_ww7').val();
        let edit_ww8 = $('#edit_ww8').val();
        let edit_ww9 = $('#edit_ww9').val();
        let edit_ww10 = $('#edit_ww10').val();
        let edit_hps_ww_total = $('#edit_hps_ww_total').val();
        let edit_hps_ww_ps = $('#edit_hps_ww_ps').val();
        let edit_ww_weighted_score = $('#edit_ww_weighted_score').val();
        let edit_pt1 = $('#edit_pt1').val();
        let edit_pt2 = $('#edit_pt2').val();
        let edit_pt3 = $('#edit_pt3').val();
        let edit_pt4 = $('#edit_pt4').val();
        let edit_pt5 = $('#edit_pt5').val();
        let edit_pt6 = $('#edit_pt6').val();
        let edit_pt7 = $('#edit_pt7').val();
        let edit_pt8 = $('#edit_pt8').val();
        let edit_pt9 = $('#edit_pt9').val();
        let edit_pt10 = $('#edit_pt10').val();
        let edit_hps_pt_total = $('#edit_hps_pt_total').val();
        let edit_hps_pt_ps = $('#edit_hps_pt_ps').val();
        let edit_pp_weighted_score = $('#edit_pp_weighted_score').val();
        let edit_qa10 = $('#edit_qa10').val();
        let edit_hps_qa_ps = $('#edit_hps_qa_ps').val();
        let edit_qa_weighted_score = $('#edit_qa_weighted_score').val();
        let edit_initial_grade = $('#edit_initial_grade').val();
        let edit_quarterly_grade = $('#edit_quarterly_grade').val();
        let edit_quarter = $('#edit_quarter').val();


        $.ajax({
            url: localStorage.getItem('appUrl') + "/faculty.grades.edit",
            method: "POST",
            data: {
                edit_id: edit_id,
                edit_ww1: edit_ww1,
                edit_ww2: edit_ww2,
                edit_ww3: edit_ww3,
                edit_ww4: edit_ww4,
                edit_ww5: edit_ww5,
                edit_ww6: edit_ww6,
                edit_ww7: edit_ww7,
                edit_ww8: edit_ww8,
                edit_ww9: edit_ww9,
                edit_ww10: edit_ww10,
                edit_hps_ww_total: edit_hps_ww_total,
                edit_hps_ww_ps: edit_hps_ww_ps,
                edit_ww_weighted_score: edit_ww_weighted_score,
                edit_pt1: edit_pt1,
                edit_pt2: edit_pt2,
                edit_pt3: edit_pt3,
                edit_pt4: edit_pt4,
                edit_pt5: edit_pt5,
                edit_pt6: edit_pt6,
                edit_pt7: edit_pt7,
                edit_pt8: edit_pt8,
                edit_pt9: edit_pt9,
                edit_pt10: edit_pt10,
                edit_hps_pt_total: edit_hps_pt_total,
                edit_hps_pt_ps: edit_hps_pt_ps,
                edit_pp_weighted_score: edit_pp_weighted_score,
                edit_qa10: edit_qa10,
                edit_hps_qa_ps: edit_hps_qa_ps,
                edit_qa_weighted_score: edit_qa_weighted_score,
                edit_initial_grade: edit_initial_grade,
                edit_quarterly_grade: edit_quarterly_grade,
                edit_quarter: edit_quarter,

            },
            success: function(result) {
                // Handle the success response here
                if (result.status == 'success') {
                // Close the Tailwind CSS modal
                    //document.getElementById('createTeacherUserModal').classList.remove('visible');
                    //document.getElementById('createTeacherUserModal').classList.add('invisible');
                   // document.getElementById('edit_hps').reset();
                    $('#tableBody').load(location.href + ' #tableBody');
                }
            },
            error: function(result) {
                let error = result.responseJSON;
                $.each(error.errors, function(key, value) {
                    $('#' + key).addClass('border-red-500');
                    $('#' + key).after('<p class="text-red-500 text-xs italic error-message">' + value + '</p>');
                });
            }
        });  





       $('#edit_id').val(id);
        $('#ww1').val(ww1);
        $('#ww2').val(ww2);
        $('#ww3').val(ww3);
        $('#ww4').val(ww4);
        $('#ww5').val(ww5);
        $('#ww6').val(ww6);
        $('#ww7').val(ww7);
        $('#ww8').val(ww8);
        $('#ww9').val(ww9);
        $('#ww10').val(ww10);
        $('#hpsWwTotal').val(hpsWwTotal);
        $('#hpsWwPs').val(hpsWwPs);
        $('#wwWeightedScore').val(wwWeightedScore);
        $('#pt1').val(pt1);
        $('#pt2').val(pt2);
        $('#pt3').val(pt3);
        $('#pt4').val(pt4);
        $('#pt5').val(pt5);
        $('#pt6').val(pt6);
        $('#pt7').val(pt7);
        $('#pt8').val(pt8);
        $('#pt9').val(pt9);
        $('#pt10').val(pt10);
        $('#hpsPtTotal').val(hpsPtTotal);
        $('#hpsPtPs').val(hpsPtPs);
        $('#ppWeightedScore').val(ppWeightedScore);
        $('#qa10').val(qa10);
        $('#hpsQaPs').val(hpsQaPs);
        $('#qaWeightedScore').val(qaWeightedScore);
        $('#initialGrade').val(initialGrade);
        $('#quarterlyGrade').val(quarterlyGrade);
        $('#quarter').val(quarter);       

        });
    });
</script>


<!--Subject Class Dropdown-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const gradeBtn = document.getElementById('gradeBtn');
        const quarterBtn = document.getElementById('quarterBtn');
        const gradeDropdownOptions = document.querySelectorAll('#grade-dropdown a');
        const quarterDropdownOptions = document.querySelectorAll('#quarter-dropdown a');

        gradeDropdownOptions.forEach(function (option) {
            option.addEventListener('click', function (event) {
                event.preventDefault();
                gradeBtn.innerText = this.innerText.trim();
            });
        });

        quarterDropdownOptions.forEach(function (option) {
            option.addEventListener('click', function (event) {
                event.preventDefault();
                quarterBtn.innerText = this.innerText.trim();
            });
        });
    });
</script>

<script>
    function changeQuarter(quarter) {
        // Add logic to fetch and update data based on the selected quarter
        // You may use AJAX to fetch data from the server

        // For demonstration purposes, let's assume you have the data for each quarter available in JavaScript objects
        var quarterData = {
            '1st Quarter': { /* Data for 1st Quarter */ },
            '2nd Quarter': { /* Data for 2nd Quarter */ },
            '3rd Quarter': { /* Data for 3rd Quarter */ },
            '4th Quarter': { /* Data for 4th Quarter */ },
            'Quarterly Summary': { /* Data for Quarterly Summary */ },
        };

        // Replace 'tableBody' with the actual ID or class of your table body
        var tableBody = document.getElementById('tableBody');

        // Clear existing rows from the table
        tableBody.innerHTML = '';

        // Add new rows based on the selected quarter
        var selectedQuarterData = quarterData[quarter];
        if (selectedQuarterData) {
            var newRow = '<tr class="text-center font-medium">';
            // Add cells for each field, similar to your existing code
            // Use selectedQuarterData to populate the values
            // ...

            newRow += '</tr>';
            tableBody.innerHTML = newRow;
        }
    }
</script>
