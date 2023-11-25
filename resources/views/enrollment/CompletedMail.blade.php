<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Email</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.5;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="background-color: #f2f2f2; padding: 20px;">
        <h1>Welcome to Gregoria De Jesus Elementary School, {{ $receiver->name }}!</h1>

        <p>Thank you for enrolling for the upcoming school year. Your login credentials are:</p>

        <p>Username: {{ $receiver->username }}</p>
        <p>Password: {{ $receiver->password }}</p>

        <p><a href="{{route('students_login_from')}}">Click here to redirect to the login page</a></p>
    </div>
</body>
</html>
