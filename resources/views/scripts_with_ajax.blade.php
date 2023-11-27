<script>
    $(document).ready(function() {
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
                url: "/admin.teacher-management.add",
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
                url: "/admin.teacher-management.edit",
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
            url: "/faculty.grades.edit",
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
