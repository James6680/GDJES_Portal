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
            let profile_picture = $('#createTeacher #profile_picture').val();
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
                    profile_picture: profile_picture,
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
            let edit_profile_picture = $('#editTeacher #edit_profile_picture').val();
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
                    edit_profile_picture: edit_profile_picture,
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
