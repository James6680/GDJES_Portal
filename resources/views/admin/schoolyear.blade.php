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
    @if (count($school_years) == 1)
    <p>School year {{$school_years[0]->school_year}}</p>
    <button id="endSchoolYear">End School Year</button>
    @else
    <p>Start school year</p>
    <form method="post" action="" id="addSchoolYear">
        @csrf
        @method('post')
        <label for="schoolYear">School Year</label>
        <select id="schoolYear" name="school_year"></select>
        <input type="submit">
    </form>

    @endif
        


    <script type="text/javascript">
        $(document).ready(function () {
            var schoolYear = document.getElementById("schoolYear");
            var currentYear = (new Date()).getFullYear();
            //Loop and add the Year values to DropDownList.
            for (var i = currentYear; i <= currentYear+5; i++) {
                var option = document.createElement("OPTION");
                var year_value = `${i}-${i+1}`;
                option.innerHTML = year_value;
                option.value = year_value;
                schoolYear.appendChild(option);                
            }

            $('#addSchoolYear').submit(function(e) {
                e.preventDefault();
                submitForm(this);
            });

            $('#addSchoolYear').click(function(e) {
                e.preventDefault();
                endSchoolYear();
            });
        });

        function submitForm(form){
            var formData = $(form).serialize();
            $.ajax({
                url: "{{ route('admin.addSchoolYear') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                },  
                error: function(error) {
                }
            });
        }
    </script>
</body>
</html>