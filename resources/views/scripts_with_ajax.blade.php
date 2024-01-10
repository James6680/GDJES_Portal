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

        // Toggle input fields to become editable or non-editable
        let isEditing = $(this).hasClass('editing');

        if (!isEditing) {
            // If not editing, make fields editable
            $(this).addClass('editing');
            $('input[name^="edit_"]').prop('readonly', false);
            $(this).removeClass('bg-green-500 hover:bg-green-900').addClass('bg-red-500 hover:bg-red-900').text('Save');
        } else {
            // If editing, make fields non-editable
            $(this).removeClass('editing');
            $('input[name^="edit_"]').prop('readonly', true);
            $(this).removeClass('bg-red-500 hover:bg-red-900').addClass('bg-green-500 hover:bg-green-900').text('Edit');
        }

        let edit_id = $('[name="edit_id"]').val();

        //id will not work, name will
        let edit_ww1 = $('[name="edit_ww1"]').val();
        let edit_ww2 = $('[name="edit_ww2"]').val();
        let edit_ww3 = $('[name="edit_ww3"]').val();
        let edit_ww4 = $('[name="edit_ww4"]').val();
        let edit_ww5 = $('[name="edit_ww5"]').val();
        let edit_ww6 = $('[name="edit_ww6"]').val();
        let edit_ww7 = $('[name="edit_ww7"]').val();
        let edit_ww8 = $('[name="edit_ww8"]').val();
        let edit_ww9 = $('[name="edit_ww9"]').val();
        let edit_ww10 = $('[name="edit_ww10"]').val();


        // Calculate sum of edit_ww1 to edit_ww10
        let hps_wwTotal = 0;
                for (let i = 1; i <= 10; i++) {
                    hps_wwTotal += parseFloat($(`[name="edit_ww${i}"]`).val()) || 0;
                }

        // Assign the sum to edit_hps_ww_total
        $('[name="edit_hps_ww_total"]').val(parseFloat(hps_wwTotal));

        let edit_hps_ww_ps = $('[name="edit_hps_ww_ps"]').val();
        let edit_ww_weighted_score = $('[name="edit_ww_weighted_score"]').val();


        let edit_pt1 = $('[name="edit_pt1"]').val();
        let edit_pt2 = $('[name="edit_pt2"]').val();
        let edit_pt3 = $('[name="edit_pt3"]').val();
        let edit_pt4 = $('[name="edit_pt4"]').val();
        let edit_pt5 = $('[name="edit_pt5"]').val();
        let edit_pt6 = $('[name="edit_pt6"]').val();
        let edit_pt7 = $('[name="edit_pt7"]').val();
        let edit_pt8 = $('[name="edit_pt8"]').val();
        let edit_pt9 = $('[name="edit_pt9"]').val();
        let edit_pt10 = $('[name="edit_pt10"]').val();

        // Calculate sum of edit_pt1 to edit_pt10
        let hps_ptTotal = 0;
                for (let i = 1; i <= 10; i++) {
                    hps_ptTotal += parseFloat($(`[name="edit_pt${i}"]`).val()) || 0;
                }

        // Assign the sum to edit_hps_ww_total
        $('[name="edit_hps_pt_total"]').val(parseFloat(hps_ptTotal));

        let edit_hps_pt_ps = $('[name="edit_hps_pt_ps"]').val();
        let edit_pp_weighted_score = $('[name="edit_pp_weighted_score"]').val();
        let edit_qa10 = $('[name="edit_qa10"]').val();
        let edit_hps_qa_ps = $('[name="edit_hps_qa_ps"]').val();
        let edit_qa_weighted_score = $('[name="edit_qa_weighted_score"]').val();
       let edit_quarter = $('[name="edit_quarter"]').val();


        $.ajax({
            url: "faculty.grades.edit/" + edit_id,
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
                hps_wwTotal: parseFloat(hps_wwTotal),
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
                hps_ptTotal:parseFloat(hps_ptTotal),
                edit_hps_pt_ps: edit_hps_pt_ps,
                edit_pp_weighted_score: edit_pp_weighted_score,
                edit_qa10: edit_qa10,
                edit_hps_qa_ps: edit_hps_qa_ps,
                edit_qa_weighted_score: edit_qa_weighted_score,
                edit_quarter: edit_quarter,

            },
            success: function(result) {
                // Handle the success response here
                if (result.status == 'success') {
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
<!--
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
</script-->


<!--Grading Sheet Edit-->
<script>
        $(document).ready(function(){
            //show hps in row
            $('.editGradingSheet').on('click', function(e){ //get class
                e.preventDefault();

            // Clear previous error messages and remove red borders
            $('.error-message').remove();
            $('.form-input').removeClass('border-red-500');

            // Get the data-id attribute from the clicked button
            let id = $(this).data('id');

            // Find the form with the corresponding data-id
            let form = $('form.editGradingSheetForm[data-id="' + id + '"]')
            console.log(id);
            // Find the closest table row (tr) to the clicked button
            let row = $(this).closest('tr');
    
            // Check the current button text to determine the action
            let buttonText = $(this).text().trim();

            if (buttonText === 'Edit') {
                // Toggle input fields to become editable
                row.find('input').prop('readonly', false);
                // Change button type to "submit" and update button text
                $(this).prop('type', 'submit').text('Save');
                // Update button class to green
                $(this).removeClass('bg-green-500 hover:bg-green-900').addClass('bg-red-500 hover:bg-red-900');
            } else if (buttonText === 'Save') {
                // Toggle input fields to become non-editable
                row.find('input').prop('readonly', true);
                // Change button type to "button" and update button text
                $(this).prop('type', 'button').text('Edit');
                // Update button class to red
                $(this).removeClass('bg-red-500 hover:bg-red-900').addClass('bg-green-500 hover:bg-green-900');
            }

            let ww1 = row.find('[name="ww1"]').val();
            console.log('ww1:', ww1);
            let ww2 = row.find('[name="ww2"]').val();
            let ww3 = row.find('[name="ww3"]').val();
            let ww4 = row.find('[name="ww4"]').val();
            let ww5 = row.find('[name="ww5"]').val();
            let ww6 = row.find('[name="ww6"]').val();
            let ww7 = row.find('[name="ww7"]').val();
            let ww8 = row.find('[name="ww8"]').val();
            let ww9 = row.find('[name="ww9"]').val();
            let ww10 = row.find('[name="ww10"]').val();

            let wwTotal = 0;

            for (let i = 1; i <= 10; i++) {
                let wwValue = parseFloat(row.find(`[name="ww${i}"]`).val()) || 0;
                wwTotal += wwValue;
            }

            // Assign the total to the hidden input field, making sure it's a float
            row.find('[name="ww_total"]').val(parseFloat(wwTotal));

                        
            let ww_ps = row.find('[name="ww_ps"]').val();
            let ww_weighted_score = row.find('[name="ww_weighted_score"]').val();


            let pt1 = row.find('[name="pt1"]').val();
            let pt2 = row.find('[name="pt2"]').val();
            let pt3 = row.find('[name="pt3"]').val();
            let pt4 = row.find('[name="pt4"]').val();
            let pt5 = row.find('[name="pt5"]').val();
            let pt6 = row.find('[name="pt6"]').val();
            let pt7 = row.find('[name="pt7"]').val();
            let pt8 = row.find('[name="pt8"]').val();
            let pt9 = row.find('[name="pt9"]').val();
            let pt10 = row.find('[name="pt10"]').val();

            let ptTotal = 0;

            for (let i = 1; i <= 10; i++) {
                let ptValue = parseFloat(row.find(`[name="pt${i}"]`).val()) || 0;
                ptTotal += ptValue;
            }

            // Assign the total to the hidden input field, making sure it's a float
            row.find('[name="pt_total"]').val(parseFloat(ptTotal));

            let pt_total = row.find('[name="pt_total"]').val();
            let pt_ps = row.find('[name="pt_ps"]').val();
            let pp_weighted_score = row.find('[name="pp_weighted_score"]').val();
            let qa10 = row.find('[name="qa10"]').val();
            let qa_ps = row.find('[name="qa_ps"]').val();
            let qa_weighted_score = row.find('[name="qa_weighted_score"]').val();
            let initial_grade = row.find('[name="initial_grade"]').val();
            let quarterly_grade = row.find('[name="quarterly_grade"]').val();
            let quarter = row.find('[name="quarter"]').val();
            let class_id = row.find('[name="class_id"]').val();

            $.ajax({
                url: "faculty.grades.edit_student_grading_sheet/" + id,
                method: "POST",
                data: {
                    id: id,
                    class_id: row.find('[name="class_id"]').val(),
                    quarter: row.find('[name="quarter"]').val(),
                    ww1: ww1,
                    ww2: ww2,
                    ww3: ww3,
                    ww4: ww4,
                    ww5: ww5,
                    ww6: ww6,
                    ww7: ww7,
                    ww8: ww8,
                    ww9: ww9,
                    ww10: ww10,
                    wwTotal: parseFloat(wwTotal),
                    ww_ps: ww_ps,
                    ww_weighted_score: ww_weighted_score,
                    pt1: pt1,
                    pt2: pt2,
                    pt3: pt3,
                    pt4: pt4,
                    pt5: pt5,
                    pt6: pt6,
                    pt7: pt7,
                    pt8: pt8,
                    pt9: pt9,
                    pt10: pt10,
                    ptTotal: parseFloat(ptTotal),
                    pt_ps: pt_ps,
                    pp_weighted_score: pp_weighted_score,
                    qa10: qa10,
                    qa_ps: qa_ps,
                    qa_weighted_score: qa_weighted_score,
                    initial_grade: initial_grade,
                    quarterly_grade: quarterly_grade,
                    
                },
                
                success: function(result) {
                    console.log(result);
                    // Handle the success response here
                    if (result.status == 'success') {
                        $('#tableBody').load(location.href + ' #tableBody');
                    }
                },
                error: function(xhr) {
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    let error = xhr.responseJSON;
                    $.each(error.errors, function(key, value) {
                        $('#' + key).addClass('border-red-500');
                        $('#' + key).after('<p class="text-red-500 text-xs italic error-message">' + value + '</p>');
                    });
                } else {
                    // Handle the case where the error object is not defined
                    console.error("An unexpected error occurred:", xhr.statusText);
                }
            }
            });  
            });
        });

        
</script>

<!--Post Student Grade Button-->
<script>
    document.getElementById('openModal').addEventListener('click', function () {
        document.getElementById('myModal').classList.remove('hidden');
    });

    document.getElementById('confirmYes').addEventListener('click', function () {

    // Get all grading sheet IDs
    var gradingSheetIds = [];
    document.querySelectorAll('.editGradingSheetForm').forEach(function (form) {
        gradingSheetIds.push(form.getAttribute('data-id'));
    });
    console.log('gradingSheetIds:', gradingSheetIds);
    var quarter = document.getElementById('confirmYes').getAttribute('data-quarter');
    /// Make a fetch request to update the 'posted' column for each grading sheet
    gradingSheetIds.forEach((gradingSheetId) => {

        fetch('/update-posted-status', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({ grading_sheet_id: gradingSheetId, quarter: quarter }),
        })
        .then(function (response) {
            // Check if the request was successful
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Handle the success response
            return response.json();
        })
        .then(function (data) {
            // Handle the success response
            alert('Grades posted successfully!');
            document.getElementById('myModal').classList.add('hidden');
        })
        .catch(function (error) {
            // Handle errors
            console.error('Error posting grades:', error);
        });
    });

});


    document.getElementById('confirmNo').addEventListener('click', function () {
        // If the teacher chooses 'No', simply close the modal
        document.getElementById('myModal').classList.add('hidden');
    });
</script>

<!--Student Scripts-->
<script>
    // Add a click event listener to the dropdown menu items
    document.querySelectorAll('#dropdownHover a').forEach(function(item) {
        item.addEventListener('click', function() {
            // Set the selected grade level in the button text
            document.getElementById('dropdownHoverButton').innerText = item.innerText;
        });
    });
</script>