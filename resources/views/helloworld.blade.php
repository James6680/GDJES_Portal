<html>
<head>
  @vite(['resources/js/app.js', 'resources/js/sample.js'])
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
  <h1 class="text-3xl font-bold underline bg-green-800">
    Hello world!
  </h1>

{{-- JS AND CSS FILES WILL BE STORED IN THE RESOURCES FOLDER AND WILL BY RUNNING NPM RUN BUILD OR DEV TO BE RUN --}}
{{--  CALL ASSET FROM PUBLIC FOLDER--}}
      <img src="{{url('/images/pic.png')}}">

{{-- CHECK RESOURCES/JS/SAMPLE.JS FOR EXTERNAL CALLS --}}





</body>
</html>