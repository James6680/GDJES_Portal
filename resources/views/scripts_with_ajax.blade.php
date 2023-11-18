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


        
    });
</script>
