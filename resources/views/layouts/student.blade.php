<!doctype html>
<html lang="en">

<head>
  @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/ph-address-selector.js'])
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GDJES Student Page</title>

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
    
    option {
      background-color: white;
      color: black;
    }

  </style>

</head>
  
<body class="container w-full container-fluid flex flex-col justify-start h-screen m-0 pt-16 bg-brown-50">
  <nav class="fixed top-0 z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between md:pl-72 p-0">

        <!-- Welcome text -->
          <div class="hidden sm:flex flex-col justify-center sm:-p-20 p-0 items-start pt-2 gap-0 text-black ">
            <p class="self-stretch font-mulish text-sm font-normal leading-none">
              Mabuhay!
            </p>
            <h2 class="font-frl text-lg font-bold leading-none ">
              Hello, Alex.
            </h2>
          </div>

          <div class="hidden sm:flex flex-col justify-center ml-36 sm:-p-20 p-0 items-center pt-2 gap-0 text-black ">
            <p class="self-stretch font-frl text-lg font-bold leading-none">
              Grade 2 - Mirasol
            </p>
            <h2 class="font-mulish text-sm font-normal leading-none ">
              Class Adviser: juan dela cruz
            </h2>
          </div>
          
        <!-- Sidebar Logo -->
        <div class="flex items-center justify-start ">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
          </button>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="mt-1 flex text-sm bg-green-500 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-11 h-11 rounded-full" src="https://lumiere-a.akamaihd.net/v1/images/character_themuppets_kermit_b77a431b.jpeg" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                    Alex Reyes
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    alexreyes.design.work@gmail.com
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>
  <aside id="logo-sidebar" class=" fixed top-0 left-0 z-40 w-64 h-screen pt-3 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">

    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
          <a href="https://www.facebook.com/gregoriadejesuselementaryschoolmanila" class="flex flex-row ml-1 w-full mb-10">
            <img src="./assets/GDJES Logo.png" class="w-11 h-11 mt-1 mr-3 relative" aria-label="GDJES Manila logo" alt="GDJES Manila Logo" />
              <div class="flex flex-col justify-center items-start gap-0 text-black">
                <h2 class="font-frl text-xl font-bold leading-none">
                GDJES Manila
                </h2>
                <p class="self-stretch font-mulish text-md font-normal leading-none">
                Admin Portal
                </p>
              </div>
        </a>
          <x-sidebar-button href="layouts.student" isActive="{{ request()->is('layouts.student') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M192,72H152.2c-2.91-.17-53.62-3.74-101.91-44.24A16,16,0,0,0,24,40V200a16,16,0,0,0,26.29,12.25c37.77-31.68,77-40.76,93.71-43.3v31.72A16,16,0,0,0,151.12,214l11,7.33A16,16,0,0,0,186.5,212l11.77-44.36A48,48,0,0,0,192,72ZM171,207.89l0,.11-11-7.33V168h21.6ZM192,152H160V88h32a32,32,0,1,1,0,64Z"></path></svg>'>
            Announcements
          </x-sidebar-button>
          <x-sidebar-button href="/some-route" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M96,113.89,107.06,136H84.94ZM232,56V216a8,8,0,0,1-11.58,7.16L192,208.94l-28.42,14.22a8,8,0,0,1-7.16,0L128,208.94,99.58,223.16a8,8,0,0,1-7.16,0L64,208.94,35.58,223.16A8,8,0,0,1,24,216V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM135.16,156.42l-32-64a8,8,0,0,0-14.32,0l-32,64a8,8,0,0,0,14.32,7.16L76.94,152h38.12l5.78,11.58a8,8,0,1,0,14.32-7.16ZM208,128a8,8,0,0,0-8-8H184V104a8,8,0,0,0-16,0v16H152a8,8,0,0,0,0,16h16v16a8,8,0,0,0,16,0V136h16A8,8,0,0,0,208,128Z"></path></svg>'>
            Grades
          </x-sidebar-button>
          <x-sidebar-button href="/some-route" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M176,207.24a119,119,0,0,0,16-7.73V240a8,8,0,0,1-16,0Zm11.76-88.43-56-29.87a8,8,0,0,0-7.52,14.12L171,128l17-9.06Zm64-29.87-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V130.67L171,128l-43,22.93L43.83,106l0,0L25,96,128,41.07,231,96l-18.78,10-.06,0L188,118.94a8,8,0,0,1,4,6.93v73.64a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12Z"></path></svg>'>
            Class Schedule
          </x-sidebar-button>
          <x-sidebar-button href="/some-route" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M93.66,106.34a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L56,132.69l26.34-26.35A8,8,0,0,1,93.66,106.34Zm-11.32-64L56,68.69,45.66,58.34A8,8,0,0,0,34.34,69.66l16,16a8,8,0,0,0,11.32,0l32-32A8,8,0,0,0,82.34,42.34Zm0,128L56,196.69,45.66,186.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32ZM216,48H128a8,8,0,0,0-8,8V72a8,8,0,0,0,8,8h88a8,8,0,0,0,8-8V56A8,8,0,0,0,216,48Zm0,128H128a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8h88a8,8,0,0,0,8-8V184A8,8,0,0,0,216,176Zm0-64H128a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8h88a8,8,0,0,0,8-8V120A8,8,0,0,0,216,112Z"></path></svg>'>
            Enrollment Status
          </x-sidebar-button>
          <x-sidebar-button href="/some-route" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M213.66,66.34l-40-40A8,8,0,0,0,168,24H88A16,16,0,0,0,72,40V56H56A16,16,0,0,0,40,72V216a16,16,0,0,0,16,16H168a16,16,0,0,0,16-16V200h16a16,16,0,0,0,16-16V72A8,8,0,0,0,213.66,66.34ZM136,192H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm0-32H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm64,24H184V104a8,8,0,0,0-2.34-5.66l-40-40A8,8,0,0,0,136,56H88V40h76.69L200,75.31Z"></path></svg>'>
            Requests Documents
          </x-sidebar-button>
          <x-sidebar-button href="/some-route" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>'>
            Student Information
          </x-sidebar-button>
        </ul>
      </div>
  </aside>

  <x-content-section />  
</body>
</html>