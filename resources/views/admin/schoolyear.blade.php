<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    @if (count($school_years) == 1)
    <p>School year {{$school_years[0]->school_year}}</p>
    <p id="school_year_hidden" hidden>{{$school_years[0]->school_year}}</p>
    <button id="endSchoolYear">End School Year</button>
    @else
    <p>Start school year</p>
    <form method="post" action="" id="addSchoolYear">
        @csrf
        @method('post')
        <label id="error-field" class="error" style="color: red;"></label><br>
        <label for="schoolYear">School Year</label>
        <select id="schoolYear" name="school_year">
        </select>
        <input type="submit">
    </form>

    @endif

    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var schoolYear = document.querySelector("#schoolYear");
            var currentYear = (new Date()).getFullYear();
            //Loop and add the Year values to DropDownList.
            if(schoolYear != null){
                for (var i = currentYear; i <= currentYear+5; i++) {
                    var option = document.createElement("OPTION");
                    var year_value = `${i}-${i+1}`;
                    option.innerHTML = year_value;
                    option.value = year_value;
                    schoolYear.appendChild(option);                
                }
            }

            $('#addSchoolYear').submit(function(e) {
                e.preventDefault();
                submitForm(this);
            });

            $('#endSchoolYear').click(function(e) {
                e.preventDefault();
                endSchoolYear(this);
            });
        });

        function submitForm(form){
            var formData = $(form).serialize();
            $.ajax({
                url: "{{ route('admin.addSchoolYear') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    window.location.reload();
                },  
                error: function(error) {
                    $('#error-field').text('School year ' + $("#schoolYear").val() + ' is already done');
                }
            });
        }
        function endSchoolYear(){
            var school_year = document.querySelector('#school_year_hidden');
            if(school_year != null){
                $.ajax({
                    url: "{{ route('admin.endSchoolYear') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        school_year: school_year.innerHTML,
                    },
                    success: function(data){
                        window.location.reload();
                    },error: function(data){
                    }
                });
            }
        }
    </script>
</body>
</html>