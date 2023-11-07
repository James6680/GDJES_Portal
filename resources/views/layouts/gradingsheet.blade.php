<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/getGradingSheet', // Replace `/route/name` with the name of the route you want to call
                type: 'GET', // Replace `GET` with the HTTP method of the route
                success: function(response) {
                    response.forEach(element => {
                        generateStudentRow();
                    });
                }
            });
        });

        function generateStudentRow() {
  const tableBody = document.getElementById('grading_sheet_table_body');
  const tableRow = document.createElement('tr');
  const formElement = document.createElement('form');
  formElement.action = '';
  formElement.method = 'post';

  const submitButton = document.createElement('input');
  submitButton.type = 'submit';
  submitButton.value = 'Submit';

  const nameInput = document.createElement('input');
  nameInput.type = 'text';
  nameInput.name = 'name';

  const wwInputs = [];
  for (let i = 1; i <= 10; i++) {
    const wwInput = document.createElement('input');
    wwInput.type = 'text';
    wwInput.name = `ww${i}`;
    wwInputs.push(wwInput);
  }

  const wwTotalInput = document.createElement('input');
  wwTotalInput.type = 'text';
  wwTotalInput.name = 'ww_total';
  wwTotalInput.disabled = true;

  const wwPercentInput = document.createElement('input');
  wwPercentInput.type = 'text';
  wwPercentInput.name = 'ww_percent';
  wwPercentInput.disabled = true;

  const wwWeightedScoreInput = document.createElement('input');
  wwWeightedScoreInput.type = 'text';
  wwWeightedScoreInput.name = 'ww_weighted_score';
  wwWeightedScoreInput.disabled = true;

  const ptInputs = [];
  for (let i = 1; i <= 10; i++) {
    const ptInput = document.createElement('input');
    ptInput.type = 'text';
    ptInput.name = `pt${i}`;
    ptInputs.push(ptInput);
  }

  const ptTotalInput = document.createElement('input');
  ptTotalInput.type = 'text';
  ptTotalInput.name = 'pt_total';
  ptTotalInput.disabled = true;

  const ptPercentInput = document.createElement('input');
  ptPercentInput.type = 'text';
  ptPercentInput.name = 'pt_percent';
  ptPercentInput.disabled = true;

  const ptWeightedScoreInput = document.createElement('input');
  ptWeightedScoreInput.type = 'text';
  ptWeightedScoreInput.name = 'pt_weighted_score';
  ptWeightedScoreInput.disabled = true;

  const qaInput = document.createElement('input');
  qaInput.type = 'text';
  qaInput.name = 'qa';

  const qaPercentInput = document.createElement('input');
  qaPercentInput.type = 'text';
  qaPercentInput.name = 'qa_percent';
  qaPercentInput.disabled = true;

  const qaWeightedScoreInput = document.createElement('input');
  qaWeightedScoreInput.type = 'text';
  qaWeightedScoreInput.name = 'qa_weighted_score';
  qaPercentInput.disabled = true;

  const initialGradeInput = document.createElement('input');
  initialGradeInput.type = 'text';
  initialGradeInput.name = 'initial_grade';
  initialGradeInput.disabled = true;

  const quarterlyGradeInput = document.createElement('input');
  quarterlyGradeInput.type = 'text';
  quarterlyGradeInput.name = 'quarterly_grade';
  quarterlyGradeInput.disabled = true;

  tableRow.appendChild(submitButton);
  tableRow.appendChild(nameInput);

  wwInputs.forEach(input => tableRow.appendChild(input));
  tableRow.appendChild(wwTotalInput);
  tableRow.appendChild(wwPercentInput);
  tableRow.appendChild(wwWeightedScoreInput);

  ptInputs.forEach(input => tableRow.appendChild(input));
  tableRow.appendChild(ptTotalInput);
  tableRow.appendChild(ptPercentInput);
  tableRow.appendChild(ptWeightedScoreInput);

  tableRow.appendChild(qaInput);
  tableRow.appendChild(qaPercentInput);
  tableRow.appendChild(qaWeightedScoreInput);

  tableRow.appendChild(initialGradeInput);
  tableRow.appendChild(quarterlyGradeInput);
  tableBody.appendChild(tableRow);
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