<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js', 'resources/css/style.css'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/public/api/getGradingSheet', // Replace `/route/name` with the name of the route you want to call
                type: 'GET', // Replace `GET` with the HTTP method of the route
                success: function(response) {
                    response.forEach(element => {
                      console.log(response);
                    });
                }
            });
        });

        function generateGradingSheetTable(data) {
  const tableBody = document.getElementById('grading_sheet_table_body');

  data.forEach(studentData => {
    const tableRow = $('<tr>');

    const sectionNameCell = $('<<td>').text(studentData.section_name);
    const gradeLevelIdCell = $('<<td>').text(studentData.grade_level_id).attr('hidden', true);
    const idCell = $('<<td>').text(studentData.id).attr('hidden', true);
    const gradeLevelCell = $('<<td>').text(studentData.grade_level);

    const wwInputs = [];
    for (let i = 1; i <= 10; i++) {
      const wwInput = $('<input>').type('text').name(`ww${i}`).attr('value', studentData[`ww${i}`]);
      wwInputs.push(wwInput);
    }

    const wwTotalInput = $('<input>').type('text').name('ww_total').attr('disabled', true).val(studentData.ww_total);
    const wwPercentInput = $('<input>').type('text').name('ww_percent').attr('disabled', true).val(studentData.ww_percent);
    const wwWeightedScoreInput = $('<input>').type('text').name('ww_weighted_score').attr('disabled', true).val(studentData.ww_weighted_score);

    const ptInputs = [];
    for (let i = 1; i <= 10; i++) {
      const ptInput = $('<input>').type('text').name(`pt${i}`).attr('value', studentData[`pt${i}`]);
      ptInputs.push(ptInput);
    }

    const ptTotalInput = $('<input>').type('text').name('pt_total').attr('disabled', true).val(studentData.pt_total);
    const ptPercentInput = $('<input>').type('text').name('pt_percent').attr('disabled', true).val(studentData.pt_percent);
    const ptWeightedScoreInput = $('<input>').type('text').name('pt_weighted_score').attr('disabled', true).val(studentData.pt_weighted_score);

    const qaInput = $('<input>').type('text').name('qa').attr('value', studentData.qa);
    const qaPercentInput = $('<input>').type('text').name('qa_percent').attr('disabled', true).val(studentData.qa_percent);
    const qaWeightedScoreInput = $('<input>').type('text').name('qa_weighted_score').attr('disabled', true).val(studentData.qa_weighted_score);

    const initialGradeInput = $('<input>').type('text').name('initial_grade').attr('disabled', true).val(studentData.initial_grade);
    const quarterlyGradeInput = $('<input>').type('text').name('quarterly_grade').attr('disabled', true).val(studentData.quarterly_grade);

    tableRow.prepend(quarterlyGradeInput);
    tableRow.prepend(initialGradeInput);
    tableRow.prepend(qaWeightedScoreInput);
    tableRow.prepend(qaPercentInput);
    tableRow.prepend(qaInput);

    ptWeightedScoreInput.forEach(input => tableRow.prepend(input));
    tableRow.prepend(ptPercentInput);
    tableRow.prepend(ptTotalInput);
    ptInputs.forEach(input => tableRow.prepend(input));

    wwWeightedScoreInput.forEach(input => tableRow.prepend(input));
    tableRow.prepend(wwPercentInput);
    tableRow.prepend(wwTotalInput);
    wwInputs.forEach(input => tableRow.prepend(input));

    tableRow.prepend(gradeLevelCell);
    tableRow.prepend(idCell);
    tableRow.prepend(gradeLevelIdCell);
    tableRow.prepend(sectionNameCell);

    tableBody.append(tableRow);
  });
}

    </script>
    <style>
        table input {
            max-width: 25px;  
        }
        table th:first-child {
            width: 400px;
        }
    </style>
<body>
    <div class="container">
        <h2>Grading Sheet</h2>		
        
        <div class="page-header">
            <h3>
                <select id="employee" class="form-control" >
                </select>
            </h3>	
        </div>	
        <div class="hidden" id="errorMassage"></div>
        <table>
            <thead>
                <tr>
                  <th colspan="2">Student Name</th>
                  <th colspan="13">Written Works</th>
                  <th colspan="13">Performance Tasks</th>
                  <th colspan="3">Quarterly Assessment</th>
                  <th>Initial Grade</th>
                  <th> Quarterly Grade</th>                                    
                </tr>
                <tr>
                    <th></th> 
                    <th></th>                    
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>Total</th>
                    <th>PS</th>
                    <th>WS</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>Total</th>
                    <th>PS</th>
                    <th>WS</th>
                    <th>1</th>
                    <th>PS</th>
                    <th>WS</th>
                    <th></th>     
                    <th></th>                                    
                  </tr>
                  <tr>
                    <th colspan="2">Highest Possible Score</th>                    
                    <th>20</th>
                    <th>20</th>
                    <th>20</th>
                    <th>20</th>
                    <th>20</th>
                    <th>20</th>
                    <th>20</th>
                    <th>20</th>
                    <th>20</th>
                    <th>20</th>
                    <th>Total</th>
                    <th>PS</th>
                    <th>WS</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>Total</th>
                    <th>PS</th>
                    <th>WS</th>
                    <th>1</th>
                    <th>PS</th>
                    <th>WS</th>
                    <th></th>     
                    <th></th>                                    
                  </tr>
              </thead>
            <tbody id="grading_sheet_table_body">
              <tr>
                <form action="" method="post">
                    @csrf
                    @method('post')
                  <td><input type="submit"></td> 
                  <td>Name</td>
                  <td><input type="text" name='ww1'></td>
                  <td><input type="text" name='ww2'></td>
                  <td><input type="text" name='ww3'></td>
                  <td><input type="text" name='ww4'></td>
                  <td><input type="text" name='ww5'></td>
                  <td><input type="text" name='ww6'></td>
                  <td><input type="text" name='ww7'></td>
                  <td><input type="text" name='ww8'></td>
                  <td><input type="text" name='ww9'></td>
                  <td><input type="text" name='ww10'></td>
                  <td><input type="text" name='ww_total' disabled></td>
                  <td><input type="text" name='ww_percent' disabled></td>
                  <td><input type="text" name='ww_weighted_score'disabled></td>
                  <td><input type="text" name='pt1'></td>
                  <td><input type="text" name='pt2'></td>
                  <td><input type="text" name='pt3'></td>
                  <td><input type="text" name='pt4'></td>
                  <td><input type="text" name='pt5'></td>
                  <td><input type="text" name='pt6'></td>
                  <td><input type="text" name='pt7'></td>
                  <td><input type="text" name='pt8'></td>
                  <td><input type="text" name='pt9'></td>
                  <td><input type="text" name='pt10'></td>
                  <td><input type="text" name='pt_total' disabled></td>
                  <td><input type="text" name='pt_percent' disabled></td>
                  <td><input type="text" name='pt_weighted_score' disabled></td>
                  <td><input type="text" name="qa"></td>
                  <td><input type="text" name='pt_percent' disabled></td>
                  <td><input type="text" name='pt_weighted_score' disabled></td>
                  <td><input type="text" name="initial_grade" disabled></td>
                  <td><input type="text" name="quarterly_grade" disabled></td>            
                </form>
              </tr>

            </tbody>
          </table>     
    </div>
</body>
</html>