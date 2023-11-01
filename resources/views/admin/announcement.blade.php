<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Announcements</title>
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
    <button id="addEditButton" onclick="addEditButtonClick('add', this)">Create Announcement</button><br><br>
    <table id="myTable" style="width:100%;">
    </table>
    <!-- The Modal -->
    <div id="myModal" class="modal">
    
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="post" action="" id="CRUDData">
                @csrf
                @method('post')
                <label id="announcement_title-error" class="error" style="color: red;"></label><br>
                <label id="announcement_url-error" class="error" style="color: red;"></label><br>
                <label>Announcement</label><br>
                <input hidden value="" id="formAction" name="formAction">
                <input hidden value="" id="announcement_id" name="announcement_id">
                <label for="announcement_title">Announcement Title:</label><br>
                <input type="text" id="announcement_title" name="announcement_title"><br>
                <label for="announcement_url">Announcement Url:</label><br>
                <input type="text" id="announcement_url" name="announcement_url"><br>
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
            $('#announcement_title-error').text("");
            $('#announcement_url-error').text("");
            const formAction = document.getElementById("formAction");
            if(mode === "edit"){
                formAction.value = "EditData";

                const tableRow = button.closest("tr");
                const announcement_id = tableRow.querySelector("td:first-child").textContent;
                const announcement_title = tableRow.querySelector("td:nth-child(4)").querySelector("p:first-child").textContent;;
                const announcement_url = tableRow.querySelector("td:nth-child(5)").textContent;

                // Assign the values to the form inputs.
                document.getElementById("announcement_title").value = announcement_title;
                document.getElementById("announcement_id").value = announcement_id;
                document.getElementById("announcement_url").value = announcement_url;
            }
            else{
                formAction.value = "AddData";
                document.getElementById("announcement_title").value = "";
                document.getElementById("announcement_id").value = "";
                document.getElementById("announcement_url").value = "";
            }
        }

        function deleteButtonClick(mode ,button){
            const tableRow = button.closest("tr");
            const announcement_id = tableRow.querySelector("td:nth-child(1)").textContent;
            document.getElementById("formAction").value = mode;
            document.getElementById("announcement_id").value = announcement_id;
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
            const url = '/api/GetAnnouncements';
            const table = $('#myTable');
            table.find("tr").remove();
          // Populate dropdown with list of regions
            $.getJSON(url, function(data) {
                console.log(data);
                // Iterate over the JSON data and create a new row in the table for each entry.
                $.each(data, function(index, entry) {
                    const row = $('<tr>');
              
                    const editButtonCell = $('<td>');
                    const deleteButtonCell = $('<td>');
                    const announcementCell = $('<td>');
                    var created_at = new Date(entry.created_at);
                    var updated_at = new Date(entry.updated_at);

                    const formatted_created_at = created_at.toLocaleDateString("en-US", {
                        month: "long",
                        day: "numeric",
                        year: "numeric",
                        hour: "numeric",
                        minute: "numeric",
                        hour12: true,
                    });

                    const formatted_updated_at = updated_at.toLocaleDateString("en-US", {
                        month: "long",
                        day: "numeric",
                        year: "numeric",
                        hour: "numeric",
                        minute: "numeric",
                        hour12: true,
                    });

                    announcementCell.append($('<p>').text(entry.announcement_title));
                    announcementCell.append($('<p>').text("Posted: " + formatted_created_at ));
                    if(entry.created_at !== entry.updated_at){
                        announcementCell.append($('<p>').text("Updated: " + formatted_updated_at));                        
                    }
                    editButtonCell.append($('<button>').attr('id', 'addEditButton').attr('type', 'button').text('Edit').attr('onclick', 'addEditButtonClick("edit", this)'));
                    deleteButtonCell.append($('<button>').attr('id', 'deleteButton').attr('type', 'button').text('Delete').attr('onclick', 'deleteButtonClick("DeleteData", this)'));
    
                    // Append the cells to the row.
                    row.append($('<td>').text(entry.id).attr('hidden', true));
                    row.append(editButtonCell);
                    row.append(deleteButtonCell);
                    row.append(announcementCell);
                    row.append($('<td>').text(entry.announcement_url).attr('hidden', true));
                    // Append the row to the table.
                    table.append(row);
                });
            });
        }

        function submitForm(form){
            var formData = $(form).serialize();
            formdData = escape(formData);
            $.ajax({
                url: "{{ route('admin.CRUDAnnouncement') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    // Handle successful response'
                    $("#announcement_title-error").css("color", "green");
                    $('#announcement_url-error').text("");
                    var mode = $('#formAction').val();
                    if(mode === "AddData")
                        $('#announcement_title-error').text('Announcement Created Successfully');
                    else if(mode === "EditData")
                        $('#announcement_title-error').text('Announcement Edited Successfully');
                    getTableData();
                },  
                error: function(error) {
                    // Handle error response
                    // Display the validation error messages
                    $("#announcement_title-error").css("color", "red");
                    $("#announcement_url-error").css("color", "red");
                    $('.error').text('');
                    var validationErrors = error.responseJSON.errors;
                    $.each(validationErrors, function(fieldName, errorMessage) {
                        $('#' + fieldName + '-error').text(errorMessage);
                    });
                }
            });
        }

    </script>
</body>
</html>