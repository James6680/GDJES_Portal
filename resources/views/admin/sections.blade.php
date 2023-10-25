<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sections</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    
    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }
    
    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
<body>
    <h2>Modal Example</h2>
    <!-- Trigger/Open The Modal -->
    <button id="addEditButton" onclick="addEditButtonClick('add', this)">Add Section</button>
    <input type="text" id="myInput" onkeyup="filter()" placeholder="Search section or grade level..." title="Type in a name">
    <table id="myTable">
        <tr class="header">
        <th style="width:30%;">Section Name</th>
        <th style="width:30%;">Grade Level ID</th>
        <th colspan="2" style="width:40%;">Actions</th>
        <th></th>
        </tr>
    </table>
    <!-- The Modal -->
    <div id="myModal" class="modal">
    
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="post" action="" id="CRUDData">
                    @csrf
                @method('post')
                <label id="section_name-error" class="error" style="color: red;"></label><br>
                <label for="grade_level_id">Grade Level:</label>
                <input hidden value="" id="formAction" name="formAction">
                <input hidden value="" id="section_id" name="section_id">
                <select name="grade_level_id" id="grade_level_id">
                    <option value="1">Kinder</option>
                    <option value="2">Grade 1</option>
                    <option value="3">Grade 2</option>
                    <option value="4">Grade 3</option>
                    <option value="5">Grade 4</option>   
                    <option value="6">Grade 5</option>
                    <option value="7">Grade 6</option>
                    <option value="8">ALS</option>                 
                </select>
                <label for="section_name">Section Name:</label><br>
                <input type="text" id="section_name" name="section_name"><br>
                <br>
                <input type="submit">
            </form>
        </div>
    </div>

    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("addEditButton");
        var span = document.getElementsByClassName("close")[0];
        
        function addEditButtonClick(mode, button) {
            modal.style.display = "block";
            $('#subject_name-error').text("");
            const formAction = document.getElementById("formAction");
            if(mode === "edit"){
                formAction.value = "EditData";

                const tableRow = button.closest("tr");
                const sectionName = tableRow.querySelector("td:first-child").textContent;
                const gradeLevelId = tableRow.querySelector("td:nth-child(2)").textContent;
                const sectionId = tableRow.querySelector("td:nth-child(3)").textContent;

                // Assign the values to the form inputs.
                document.getElementById("section_name").value = sectionName;
                document.getElementById("section_id").value = sectionId;
                document.getElementById("grade_level_id").selectedIndex = gradeLevelId-1;
            }
            else{
                formAction.value = "AddData";
                document.getElementById("section_name").value = "";
                document.getElementById("section_id").value = "";
                document.getElementById("grade_level_id").selectedIndex = 0;
            }
        }

        function deleteButtonClick(mode ,button){
            const tableRow = button.closest("tr");
            const sectionId = tableRow.querySelector("td:nth-child(3)").textContent;
            document.getElementById("formAction").value = mode;
            document.getElementById("section_id").value = sectionId;
            $('#CRUDData').submit();
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
        $(document).ready(function() {
            getTableData();

            $('#CRUDData').submit(function(e) {
                e.preventDefault();
                submitForm(this);
            });
        });

        function getTableData(){
            const url = '/api/GetSections';
            const table = $('#myTable');
            table.find("tr:not(:first)").remove();
          // Populate dropdown with list of regions
            $.getJSON(url, function(data) {
                // Iterate over the JSON data and create a new row in the table for each entry.
                $.each(data, function(index, entry) {
                    const row = $('<tr>');
              
              // Add a cell for each column in the table.
                    row.append($('<td>').text(entry.section_name));
                    row.append($('<td>').text(entry.grade_level_id).attr('hidden', true));
                    row.append($('<td>').text(entry.id).attr('hidden', true));
                    row.append($('<td>').text(entry.grade_level));
                    const editButton = $('<td>');
                    const DeleteButton = $('<td>');
                    editButton.append($('<button>').attr('id', 'addEditButton').attr('type', 'button').text('Edit').attr('onclick', 'addEditButtonClick("edit", this)'));
                    DeleteButton.append($('<button>').attr('id', 'deleteButton').attr('type', 'button').text('Delete').attr('onclick', 'deleteButtonClick("DeleteData", this)'));
                    row.append(editButton);
                    row.append(DeleteButton);

                    // Append the row to the table.
                    table.append(row);
                });
            });
        }

        function submitForm(form){
            var formData = $(form).serialize();
            formdData = escape(formData);
            $.ajax({
                url: "{{ route('admin.CRUDSection') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    // Handle successful response'
                    $("#section_name-error").css("color", "green");
                    var mode = $('#formAction').val();
                    if(mode === "AddData")
                        $('#section_name-error').text('Section Inserted Successfully');
                    else if(mode === "EditData")
                        $('#section_name-error').text('Section Edited Successfully');
                    getTableData();
                },  
                error: function(error) {
                    // Handle error response
                    // Display the validation error messages
                    $("#section_name-error").css("color", "red");
                    $('.error').text('');
                    var validationErrors = error.responseJSON.errors;
                    $.each(validationErrors, function(fieldName, errorMessage) {
                        $('#' + fieldName + '-error').text(errorMessage);
                    });
                }
            });
        }

        function filter() {
            var input, filter, table, tr, td, td1, i, txtValue, txtValue1;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                td1 = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    txtValue1 = td1.textContent || td1.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue1.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                    tr[i].style.display = "none";
                    }
                }       
            }
        }
    </script>
</body>
</html>