<!doctype html>
<html lang="en">

<head>
  @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/ph-address-selector.js'])
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GDJES Faculty Portal</title>

  <link rel="shortcut icon" href="{{ asset('assets/GDJES Logo.png') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;700&family=Mulish:wght@400;700&display=swap"
    rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />


  <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
    table input {
      max-width: 25px;  
    }
  </style>
</head>
  
<body class="min-w-full grid grid-flow-col justify-start h-screen pt-16 bg-green-50">
  <x-sidebar />
  <x-faculty-content-section/> 

</body>
</html>