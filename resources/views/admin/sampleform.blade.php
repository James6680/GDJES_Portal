<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <form method="post" action="" id="ajaxForm">
    @csrf
    @method('post')
    <label id="fname-error" class="error" style="color: red;"></label><br>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="{{ request()->session()->get('student.fname') }}"><br>

    <label id="lname-error" class="error" style="color: red;"></label><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
<br>
    <input type="submit">
  </form>

  <script>
$(document).ready(function() {
  $('#ajaxForm').on('submit', function(e) {
    e.preventDefault();

    var formData = $(this).serialize();

    $.ajax({
      url: "{{ route('ajax.store') }}",
      type: "POST",
      data: formData,
      success: function(response) {
        // Handle successful response'
       window.location.href = "enrollment";
      },  
      error: function(error) {
        // Handle error response
        // Display the validation error messages
        $('.error').text('');
        var validationErrors = error.responseJSON.errors;
        $.each(validationErrors, function(fieldName, errorMessage) {
          $('#' + fieldName + '-error').text(errorMessage);
        });
      }
    });
  });
});
  </script>
</body>
</html>
