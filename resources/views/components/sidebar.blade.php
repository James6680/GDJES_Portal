
@php
  //$user = 'Admin';
  $user = Auth::guard('admin')->check() ? 'Admin' : 
          (Auth::guard('teachers')->check() ? 'Faculty' : null);
@endphp

<nav class="fixed top-0 z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3 w-full">
    <div class="flex items-center justify-between lg:pl-72 md:pl-64 p-0">

      <!-- Welcome text -->
        <div class="hidden sm:flex flex-col justify-center p-0 items-start pt-2 gap-0 text-black">
          <p class="self-stretch font-mulish text-sm font-normal leading-none">
            Mabuhay!
          </p>
          <h2 class="font-frl lg:text-lg text-md font-bold leading-none ">
            Hello, {{ $user }} Alex.
          </h2>
        </div>  

        <!--Added Success Alert-->
        @if(Session::has('error'))
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">{{ session::get('error') }}</span>
          </div>
        </div>
        @endif
        <!--End Added Success Alert-->


        @if($user == 'Student')
        <div class="hidden sm:flex flex-col justify-center p-0 items-start pt-2 xl:pl-36  gap-0 text-black">
          <p class="font-frl lg:text-lg text-md font-bold leading-none ">
            Grade # - Section
          </p>
          <h2 class="self-stretch font-mulish text-sm font-normal leading-none"> 
            Class Adviser: Fullname
          </h2>
        </div>
        @endif
        
      <!-- Sidebar Logo -->
      <div class="flex items-center justify-start ">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
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
                  <!--Alex Reyes-->
                  @if(Auth::guard('admin')->check())
                    {{ Auth::guard('admin')->user()->username }}
                  @elseif(Auth::guard('teachers')->check())
                    {{ Auth::guard('teachers')->user()->username }}
                  @else
                    <!-- Handle the case where there's no authenticated user. -->
                  @endif                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  <!--alexreyes.design.work@gmail.com-->
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
                  <a href="@if(Auth::guard('admin')->check())
                              {{ route('admin.signout') }}
                          @elseif(Auth::guard('teachers')->check())
                              {{ route('teacher.signout') }}
                          @endif" 
                     class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" 
                     role="menuitem">
                     Sign out
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>


@if ($user == 'Admin')
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full pt-3 transition-transform -translate-x-full bg-white border-r border-green-50 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="fixed h-full  md:w-full w-auto px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 gap-4 w-auto font-medium">
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
        <x-sidebar-button href="admin.dashboard" isActive="{{ request()->is('admin.dashboard') }}" badge="" notification="5" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M24.75,115.54A102.31,102.31,0,0,1,48.06,61.78a16,16,0,0,1,23.63-1.1L99.36,88.94a15.87,15.87,0,0,1,1.69,20.48h0a25.59,25.59,0,0,0-3.7,7.75A4,4,0,0,1,93.53,120H28.73A4,4,0,0,1,24.75,115.54ZM137.39,24.06A16,16,0,0,0,120,40V80.67a15.86,15.86,0,0,0,13.25,15.76,32,32,0,0,1,5.41,61.76A4.06,4.06,0,0,0,136,162v65.23a4,4,0,0,0,4.46,4A104.34,104.34,0,0,0,232,129.48C232.75,75.19,191.19,28.88,137.39,24.06Zm-20.14,134.1a32,32,0,0,1-19.4-19.42,4.06,4.06,0,0,0-3.8-2.74H28.72a4,4,0,0,0-4,4.45,104.1,104.1,0,0,0,90.82,90.82,4,4,0,0,0,4.45-4V162A4.05,4.05,0,0,0,117.25,158.16Z"></path></svg></path></svg>'>
          Dashboard
        </x-sidebar-button>
        <x-sidebar-button href="admin.announcements" isActive="{{ request()->is('admin.announcements') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M192,72H152.2c-2.91-.17-53.62-3.74-101.91-44.24A16,16,0,0,0,24,40V200a16,16,0,0,0,26.29,12.25c37.77-31.68,77-40.76,93.71-43.3v31.72A16,16,0,0,0,151.12,214l11,7.33A16,16,0,0,0,186.5,212l11.77-44.36A48,48,0,0,0,192,72ZM171,207.89l0,.11-11-7.33V168h21.6ZM192,152H160V88h32a32,32,0,1,1,0,64Z"></path></svg>'>
          Announcements
        </x-sidebar-button>
        <x-sidebar-button href="admin.document-request" isActive="{{ request()->is('admin.document-request') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M213.66,66.34l-40-40A8,8,0,0,0,168,24H88A16,16,0,0,0,72,40V56H56A16,16,0,0,0,40,72V216a16,16,0,0,0,16,16H168a16,16,0,0,0,16-16V200h16a16,16,0,0,0,16-16V72A8,8,0,0,0,213.66,66.34ZM136,192H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm0-32H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm64,24H184V104a8,8,0,0,0-2.34-5.66l-40-40A8,8,0,0,0,136,56H88V40h76.69L200,75.31Z"></path></svg>'>
          Document Requests
        </x-sidebar-button>
        <x-sidebar-button href="admin.student-management" isActive="{{ request()->is('admin.student-management') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M200,112a8,8,0,0,1-8,8H152a8,8,0,0,1,0-16h40A8,8,0,0,1,200,112Zm-8,24H152a8,8,0,0,0,0,16h40a8,8,0,0,0,0-16Zm40-80V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM216,200V56H40V200H216Zm-80.26-34a8,8,0,1,1-15.5,4c-2.63-10.26-13.06-18-24.25-18s-21.61,7.74-24.25,18a8,8,0,1,1-15.5-4,39.84,39.84,0,0,1,17.19-23.34,32,32,0,1,1,45.12,0A39.76,39.76,0,0,1,135.75,166ZM96,136a16,16,0,1,0-16-16A16,16,0,0,0,96,136Z"></path></svg>'>
          Student Management
        </x-sidebar-button>
        <x-sidebar-button href="admin.teacher-management" isActive="{{ request()->is('admin.teacher-management') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H53.39a8,8,0,0,0,7.23-4.57,48,48,0,0,1,86.76,0,8,8,0,0,0,7.23,4.57H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM104,168a32,32,0,1,1,32-32A32,32,0,0,1,104,168Zm112,32H159.43a63.93,63.93,0,0,0-13.16-16H192a8,8,0,0,0,8-8V80a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8v96a8,8,0,0,0,6,7.75A63.72,63.72,0,0,0,48.57,200H40V56H216Z"></path></svg>'>
          Teacher Management
        </x-sidebar-button>
        <x-sidebar-button href="admin.enrollment-management" isActive="{{ request()->is('admin.enrollment-management') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M226.53,56.41l-96-32a8,8,0,0,0-5.06,0l-96,32A8,8,0,0,0,24,64v80a8,8,0,0,0,16,0V75.1L73.59,86.29a64,64,0,0,0,20.65,88.05c-18,7.06-33.56,19.83-44.94,37.29a8,8,0,1,0,13.4,8.74C77.77,197.25,101.57,184,128,184s50.23,13.25,65.3,36.37a8,8,0,0,0,13.4-8.74c-11.38-17.46-27-30.23-44.94-37.29a64,64,0,0,0,20.65-88l44.12-14.7a8,8,0,0,0,0-15.18ZM176,120A48,48,0,1,1,89.35,91.55l36.12,12a8,8,0,0,0,5.06,0l36.12-12A47.89,47.89,0,0,1,176,120Z"></path></svg>'>
          Enrollment Management
        </x-sidebar-button>
        <x-sidebar-button href="admin.school-information" isActive="{{ request()->is('admin.school-information') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>'>
          School Information
        </x-sidebar-button>
      </ul>
    </div>
  </aside>
  
@elseif ($user == 'Student')
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
                Student Portal
                </p>
              </div>
          </a>
          <x-sidebar-button href="student.announcements" isActive="{{ request()->is('student.announcements') }}" badge="" notification="5" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M24.75,115.54A102.31,102.31,0,0,1,48.06,61.78a16,16,0,0,1,23.63-1.1L99.36,88.94a15.87,15.87,0,0,1,1.69,20.48h0a25.59,25.59,0,0,0-3.7,7.75A4,4,0,0,1,93.53,120H28.73A4,4,0,0,1,24.75,115.54ZM137.39,24.06A16,16,0,0,0,120,40V80.67a15.86,15.86,0,0,0,13.25,15.76,32,32,0,0,1,5.41,61.76A4.06,4.06,0,0,0,136,162v65.23a4,4,0,0,0,4.46,4A104.34,104.34,0,0,0,232,129.48C232.75,75.19,191.19,28.88,137.39,24.06Zm-20.14,134.1a32,32,0,0,1-19.4-19.42,4.06,4.06,0,0,0-3.8-2.74H28.72a4,4,0,0,0-4,4.45,104.1,104.1,0,0,0,90.82,90.82,4,4,0,0,0,4.45-4V162A4.05,4.05,0,0,0,117.25,158.16Z"></path></svg></path></svg>'>
            Announcements
          </x-sidebar-button>
          <x-sidebar-button href="student.grades" isActive="{{ request()->is('student.grades') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M192,72H152.2c-2.91-.17-53.62-3.74-101.91-44.24A16,16,0,0,0,24,40V200a16,16,0,0,0,26.29,12.25c37.77-31.68,77-40.76,93.71-43.3v31.72A16,16,0,0,0,151.12,214l11,7.33A16,16,0,0,0,186.5,212l11.77-44.36A48,48,0,0,0,192,72ZM171,207.89l0,.11-11-7.33V168h21.6ZM192,152H160V88h32a32,32,0,1,1,0,64Z"></path></svg>'>
            Grades
          </x-sidebar-button>
          <x-sidebar-button href="student.class-schedule" isActive="{{ request()->is('student.class-schedule') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M230.4,219.19A8,8,0,0,1,224,232H32a8,8,0,0,1-6.4-12.8A67.88,67.88,0,0,1,53,197.51a40,40,0,1,1,53.93,0,67.42,67.42,0,0,1,21,14.29,67.42,67.42,0,0,1,21-14.29,40,40,0,1,1,53.93,0A67.85,67.85,0,0,1,230.4,219.19ZM27.2,126.4a8,8,0,0,0,11.2-1.6,52,52,0,0,1,83.2,0,8,8,0,0,0,12.8,0,52,52,0,0,1,83.2,0,8,8,0,0,0,12.8-9.61A67.85,67.85,0,0,0,203,93.51a40,40,0,1,0-53.93,0,67.42,67.42,0,0,0-21,14.29,67.42,67.42,0,0,0-21-14.29,40,40,0,1,0-53.93,0A67.88,67.88,0,0,0,25.6,115.2,8,8,0,0,0,27.2,126.4Z"></path></svg>'>
            Class Schedule
          </x-sidebar-button>
          <x-sidebar-button href="student.enrollment-status" isActive="{{ request()->is('student.enrollment-status') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M213.66,66.34l-40-40A8,8,0,0,0,168,24H88A16,16,0,0,0,72,40V56H56A16,16,0,0,0,40,72V216a16,16,0,0,0,16,16H168a16,16,0,0,0,16-16V200h16a16,16,0,0,0,16-16V72A8,8,0,0,0,213.66,66.34ZM136,192H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm0-32H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm64,24H184V104a8,8,0,0,0-2.34-5.66l-40-40A8,8,0,0,0,136,56H88V40h76.69L200,75.31Z"></path></svg>'>
            Enrollment Status
          </x-sidebar-button>
          <x-sidebar-button href="student.request-documents" isActive="{{ request()->is('student.request-documents') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H53.39a8,8,0,0,0,7.23-4.57,48,48,0,0,1,86.76,0,8,8,0,0,0,7.23,4.57H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM104,168a32,32,0,1,1,32-32A32,32,0,0,1,104,168Zm112,32H159.43a63.93,63.93,0,0,0-13.16-16H192a8,8,0,0,0,8-8V80a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8v96a8,8,0,0,0,6,7.75A63.72,63.72,0,0,0,48.57,200H40V56H216Z"></path></svg>'>
            Request Documents
          </x-sidebar-button>
          <x-sidebar-button href="student.student-information" isActive="{{ request()->is('student.student-information') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>'>
            Student Information
          </x-sidebar-button>
        </ul>
      </div>
  </aside>

@elseif ($user == 'Faculty')
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full pt-3 transition-transform -translate-x-full bg-white border-r border-green-50 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
  <div class="fixed gap-4 h-full md:w-full w-auto px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">  
  <ul class="space-y-2 w-auto font-medium">
      
        <a href="https://www.facebook.com/gregoriadejesuselementaryschoolmanila" class="flex flex-row ml-1 w-full mb-10">
          <img src="./assets/GDJES Logo.png" class="w-11 h-11 mt-1 mr-3 relative" aria-label="GDJES Manila logo" alt="GDJES Manila Logo" />
            <div class="flex flex-col justify-center items-start gap-0 text-black">
              <h2 class="font-frl text-xl font-bold leading-none">
              GDJES Manila
              </h2>
              <p class="self-stretch font-mulish text-md font-normal leading-none">
              Faculty Portal
              </p>
            </div>
      </a>
        <x-sidebar-button href="faculty.announcements" isActive="{{ request()->is('faculty.announcements') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M192,72H152.2c-2.91-.17-53.62-3.74-101.91-44.24A16,16,0,0,0,24,40V200a16,16,0,0,0,26.29,12.25c37.77-31.68,77-40.76,93.71-43.3v31.72A16,16,0,0,0,151.12,214l11,7.33A16,16,0,0,0,186.5,212l11.77-44.36A48,48,0,0,0,192,72ZM171,207.89l0,.11-11-7.33V168h21.6ZM192,152H160V88h32a32,32,0,1,1,0,64Z"></path></svg>'>
          Announcements
        </x-sidebar-button>
        <x-sidebar-button href="faculty.my-students" isActive="{{ request()->is('faculty.my-students') }}" badge="" notification="3" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M230.4,219.19A8,8,0,0,1,224,232H32a8,8,0,0,1-6.4-12.8A67.88,67.88,0,0,1,53,197.51a40,40,0,1,1,53.93,0,67.42,67.42,0,0,1,21,14.29,67.42,67.42,0,0,1,21-14.29,40,40,0,1,1,53.93,0A67.85,67.85,0,0,1,230.4,219.19ZM27.2,126.4a8,8,0,0,0,11.2-1.6,52,52,0,0,1,83.2,0,8,8,0,0,0,12.8,0,52,52,0,0,1,83.2,0,8,8,0,0,0,12.8-9.61A67.85,67.85,0,0,0,203,93.51a40,40,0,1,0-53.93,0,67.42,67.42,0,0,0-21,14.29,67.42,67.42,0,0,0-21-14.29,40,40,0,1,0-53.93,0A67.88,67.88,0,0,0,25.6,115.2,8,8,0,0,0,27.2,126.4Z"></path></svg>'>
          My Students
        </x-sidebar-button>
        <x-sidebar-button href="faculty.enrollments" isActive="{{ request()->is('faculty.enrollments') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M213.66,66.34l-40-40A8,8,0,0,0,168,24H88A16,16,0,0,0,72,40V56H56A16,16,0,0,0,40,72V216a16,16,0,0,0,16,16H168a16,16,0,0,0,16-16V200h16a16,16,0,0,0,16-16V72A8,8,0,0,0,213.66,66.34ZM136,192H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm0-32H88a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm64,24H184V104a8,8,0,0,0-2.34-5.66l-40-40A8,8,0,0,0,136,56H88V40h76.69L200,75.31Z"></path></svg>'>
          Enrollments
        </x-sidebar-button>
        <x-sidebar-button href="faculty.grades" isActive="{{ request()->is('faculty.grades') }}" badge="" notification="" svg='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H53.39a8,8,0,0,0,7.23-4.57,48,48,0,0,1,86.76,0,8,8,0,0,0,7.23,4.57H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM104,168a32,32,0,1,1,32-32A32,32,0,0,1,104,168Zm112,32H159.43a63.93,63.93,0,0,0-13.16-16H192a8,8,0,0,0,8-8V80a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8v96a8,8,0,0,0,6,7.75A63.72,63.72,0,0,0,48.57,200H40V56H216Z"></path></svg>'>
          Grades
        </x-sidebar-button>
    </ul>
    </div>
  </aside>
@endif

