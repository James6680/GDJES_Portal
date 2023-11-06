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
                url: '/api/getGradingSheetList', // Replace `/route/name` with the name of the route you want to call
                type: 'GET', // Replace `GET` with the HTTP method of the route
                success: function(response) {
                }
            });
        });
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
            <tbody>
              <tr>
                <form action="" method="post">
                    @csrf
                    @method('post')
                  <td><input type="submit"></td> 
                  <td>Name</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>            
                </form>
              </tr>

            </tbody>
          </table>     
    </div>
</body>
</html>