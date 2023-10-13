
<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/ph-address-selector.js',])
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Added initial-scale for responsiveness -->
  <title>Student Registration Page 3</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;700&family=Mulish:wght@400;700&display=swap" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <link rel="icon" href="{{url('assets/frame-21@2x.png')}}" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    /* Additional CSS for responsiveness */
    @media (max-width: 768px) {
      .self-stretch {
        width: 100%;
      }
      /* Add more responsive styles here */
    }
  </style>
</head>
<body class="m-0 p-0">

  <!-- Form Background  -->
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[1.5rem] px-[15rem] bg-[url('/assets/studentportalregistrationpage101@3x.png')] bg-auto bg-repeat-y bg-top lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[11.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border"
  id="returnee">

    <section class="flex-1 flex flex-col items-center justify-center gap-[2rem] text-left text-[1.44rem] text-main-background font-heading-2 md:gap-[1.88rem]">
    
    <!-- Logo Container -->
      <div class="h-[7.31rem] flex flex-col items-center justify-center gap-[0.5rem] cursor-pointer" id="logoContainer">

        <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="" src="assets/frame-21@2x.png" />

        <div class="flex flex-col items-start justify-start ">

          <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-heading-2-bold font-inherit overflow-hidden text-ellipsis whitespace-nowrap">GREGORIA DE JESUS</h2>

          <div class="self-stretch relative text-[0.69rem] leading-[140%] text-center">ELEMENTARY SCHOOL - MANILA</div>
        </div>

      </div>

      <!-- Student Registration Form -->
      <form class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center py-[3rem] px-[2rem] gap-[.9rem] w-10/12" method="post" action="{{route('post.enrollment2')}}">
      @csrf
      @method('post')
        <h1 class="m-0 self-stretch relative text-[1.85rem] leading-[110%] font-extrabold font-heading-2 text-main-green-secondary-700 text-center font-heading-2-bold">Student Registration for First-time Enrollees</h1>

        <div class="self-stretch flex flex-col items-center justify-start gap-[0.5rem]">

          <div class="self-stretch relative text-[1rem] leading-[140%] font-button text-main-brown-primary-500 text-center">Welcome to the student portal registration form</div>

          <div class="self-stretch relative text-[0.81rem] leading-[140%] font-button text-main-green-secondary-700 text-center">Please fill out all the necessary information below.</div>

        </div>

        <!-- Progress Bar -->
       <div class="self-stretch flex flex-row items-center justify-center py-[1.5rem] px-[4.44rem]">

          <div class="rounded-481xl bg-main-green-secondary-500 h-[2.5rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.20rem] leading-[140%] font-heading-2 text-main-background text-left p-4">1</div>

          </div>

          <div class="flex-1 relative bg-main-green-secondary-500 h-[0.31rem] overflow-hidden mix-blend-lifont-light"></div>

          <div class="rounded-481xl bg-main-green-secondary-500 h-[2.6rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.20rem] leading-[140%] font-heading-2 text-main-background text-left p-4">2</div>

          </div>

          <div class="flex-1 relative bg-main-green-secondary-500 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <div class="rounded-481xl bg-main-green-secondary-500 h-[2.67rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.20rem] leading-[140%] font-heading-2 text-main-background text-left p-4">3</div>

          </div>

          <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <div class="rounded-481xl bg-main-green-secondary-200 h-[2.65rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.25rem] leading-[140%] font-heading-2 text-main-green-secondary-300 text-left p-4">4</div>

          </div>

          <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <div class="rounded-481xl bg-main-green-secondary-200 h-[2.65rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.25rem] leading-[140%] font-heading-2 text-main-green-secondary-300 text-left p-4">5</div>

          </div>

        </div> 

        <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Ano ang huling baitang na natapos? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Grade Level -->
              <select id="grade_level" name="grade_level" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5 py-2.5 w-full">
                <option value="0" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 0) selected @endif>KINDER</option>
                <option value="1" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 1) selected @endif>Grade 1</option>
                <option value="2" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 2) selected @endif>Grade 2</option>
                <option value="3" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 3) selected @endif>Grade 3</option>
                <option value="4" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 4) selected @endif>Grade 4</option>
                <option value="5" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 5) selected @endif>Grade 5</option>
                <option value="6" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 6) selected @endif>Grade 6</option>
                <option value="7" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 7) selected @endif>ALS</option>
              </select>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">School Year <span class="text-red-600">*</span></b>
              
              </div>

              <!-- School Year -->
              <div class="mb-1">
                <input type="text" id="school_year" name="school_year" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->school_year)? $enrollment->school_year : ''}}">
              </div>
      
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">May LRN (Learner Reference Number) ba ang inyong anak? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Learner Reference Number -->
              <div class="flex items-center mb-4">

                <input required id="lrn_yes" type="radio" value="1" name="lrn_status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleForm()" @if(isset($enrollment->lrn_status) && $enrollment->lrn_status == 1) checked @endif>
                
                <label for="default-radio-1" class="ml-2 text-[.90rem] font-light text-gray-900 dark:text-gray-300">Mayroon siyang LRN</label>

              </div>

              <div class="flex items-center">

                <input id="lrn_no" type="radio" value="0" name="lrn_status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleForm()" @if(isset($enrollment->lrn_status) && $enrollment->lrn_status == 0) checked @endif>

                <label for="default-radio-2" class="ml-2 text-[.90rem] font-light text-gray-900 dark:text-gray-300">Wala siyang LRN dahil siya ay mag-kikinder pa lang</label>
              
              </div>
                          
            </div>
            
          </div>

          <div id="lrn_form" class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100" style="display: none;">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Learners Reference Number (LRN) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Learner Reference Number (LRN) -->
              <!--set this as if else statement then provide LRN-->
              <div class="mb-1">
                <input type="text" id="lrn_number" name="lrn_number" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->lrn_number)? $enrollment->lrn_number : ''}}">
              </div>
            
            </div>
            
          </div>

          <script>
            function toggleForm() {
                var lrnYes = document.getElementById("lrn_yes");
                var conditionalForm = document.getElementById("lrn_form");
    
                if (lrnYes.checked) {
                    conditionalForm.style.display = "block";
                } else {
                    conditionalForm.style.display = "none";
                }
            }
        </script>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">PSA Birth Certificate No. <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- PSA Birth Certificate No. -->
              <div class="mb-1">
                <input required type="text" id="psa_birth_cert" name="psa_birth_cert" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->psa_birth_cert)? $enrollment->psa_birth_cert : ''}}">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Lastname ng bata (Apelyido) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Last Name -->
              <div class="mb-1">
                <input type="text" id="last_name" name="last_name" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->last_name)? $enrollment->last_name : ''}}">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Firstname ng bata (Pangalan) <span class="text-red-600">*</span></b>
              
              </div>

              <!-- First Name -->
              <div class="mb-1">
                <input required type="text" id="first_name" name="first_name" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->first_name)? $enrollment->first_name : ''}}">
              </div>
            
            </div>
            
          </div>


          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Middlename (Gitnang Pangalan) <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Middle Name -->
              <div class="mb-1">
                <input required type="text" id="middle_name" name="middle_name" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->middle_name)? $enrollment->middle_name : ''}}">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <!-- 1st Part -->
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Extension Name <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Extension Name -->
              <select id="extension_name" name="extension_name" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block gap-2  p-2.5 w-full">
                <option value="wala" @if(isset($enrollment->extension_name) && $enrollment->extension_name == "wala") selected @endif>Wala</option>
                <option value="jr" @if(isset($enrollment->extension_name) && $enrollment->extension_name == "jr") selected @endif>Jr</option>
                <option value="I" @if(isset($enrollment->extension_name) && $enrollment->extension_name == "I") selected @endif>I</option>
                <option value="II" @if(isset($enrollment->extension_name) && $enrollment->extension_name == "II") selected @endif>II</option>
                <option value="III" @if(isset($enrollment->extension_name) && $enrollment->extension_name == "III") selected @endif>III</option>
                <option value="IV" @if(isset($enrollment->extension_name) && $enrollment->extension_name == "IV") selected @endif>IV</option>
                <option value="V" @if(isset($enrollment->extension_name) && $enrollment->extension_name == "V") selected @endif>V</option>
                <option value="VI" @if(isset($enrollment->extension_name) && $enrollment->extension_name == "VI") selected @endif>VI</option>
              </select>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[1rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Petsa ng kapanganakan <span class="text-red-600">*</span></b>
              
              </div>

              <div class="relative self-stretch">

                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                
                  </svg>
                
                </div>
                
                <input datepicker type="text" name="birth_date" class="bg-main-background border border-gray-300 text-gray-900 text-[.90rem] focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 rounded-lg" placeholder="Select date">
              
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Ilang taon ang bata sa October 31, 2023? <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Age on October 31, 2023 -->
              <div class="mb-1">
                <input type="text" id="age" name="age" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->age)? $enrollment->age : ''}}">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Kasarian ng Bata <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Gender -->
              <div class="flex items-center mb-4">
                <input required id="male" type="radio" value="male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @if(isset($enrollment->gender) && $enrollment->gender == "male") checked @endif>
                <label for="default-radio-1" class="ml-2 text-[.90rem] font-light text-gray-900 dark:text-gray-300">Lalake</label>
              </div>
              <div class="flex items-center">
                <input required id="female" type="radio" value="female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @if(isset($enrollment->gender) && $enrollment->gender == "female") checked @endif>
                <label for="default-radio-2" class="ml-2 text-[.90rem] font-light text-gray-900 dark:text-gray-300">Babae</label>
              </div>
                          
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Nabibilang sa katutubong grupo/ Komunidad ng Katutubong Kultural ang mag-aaral <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Indigenous Group -->
              <div class="flex items-center mb-4">
                <input id="indigenous_yes" type="radio" value="1" name="indigenous_group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleForm1()" @if(isset($enrollment->indigenous_group) && $enrollment->indigenous_group == 1) checked @endif>

                <label for="default-radio-1" class="ml-2 text-[0.90rem]  font-light text-gray-900 dark:text-gray-300">Oo</label>

              </div>

              <div class="flex items-center">

                <input id="indigenous_no" type="radio" value="0" name="indigenous_group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleForm1()" @if(isset($enrollment->indigenous_group) && $enrollment->indigenous_group == 0) checked @endif>

                <label for="default-radio-2" class="ml-2 text-[0.90rem]  font-light text-gray-900 dark:text-gray-300">Hindi</label>
              </div>
                          
            </div>
            
          </div>

          <div id="katutubo_form" class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100" style="display: none;">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Kung OO ang sagot mo sa tanong, saang katutubong grupo kabilang ang mag-aaral? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Indigenous Group -->   
              <!-- set this as if else statement -->
              <div class="mb-1">
                <input type="text" id="indigenous_group_name" name="indigenous_group_name" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->indigenous_group_name)? $enrollment->indigenous_group_name : ''}}">
              </div>
            
            </div>
            
          </div>

          <script>
            function toggleForm1() {
                var katutuboGrp = document.getElementById("indigenous_yes");
                var conditionalForm = document.getElementById("katutubo_form");
    
                if (indigenous_yes.checked) {
                    conditionalForm.style.display = "block";
                } else {
                    conditionalForm.style.display = "none";
                }
            }
        </script>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Ano ang kinagisnang wika ng mag-aaral? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Primary Language -->
              <select id="primary_language" name="primary_language" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5 w-full">
                <option value="filipino" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "filipino") selected @endif>Filipino</option>
                <option value="bikolano" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "bikolano") selected @endif>Bikolano</option>
                <option value="cebuano" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "cebuano") selected @endif>Cebuano</option>
                <option value="chinese" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "chinese") selected @endif>Chinese</option>
                <option value="english" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "english") selected @endif>English</option>
                <option value="ilocano" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "ilocano") selected @endif>Ilocano</option>
                <option value="kapampangan" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "kapampangan") selected @endif>Kapampangan</option>
                <option value="maguindanaoan" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "maguindanaoan") selected @endif>Maguindanaoan</option>
                <option value="manobo" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "manobo") selected @endif>Manobo</option>
                <option value="hihonggo" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "hihonggo") selected @endif>Hihonggo</option>
                <option value="PSL" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "PSL") selected @endif>Philippine Sign Language</option>
                <option value="tausug" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "tausug") selected @endif>Tausug</option>
                <option value="waray" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "waray") selected @endif>Waray</option>
                <option value="ybanag" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "ybanag") selected @endif>Ybanag</option>
                <option value="others" @if(isset($enrollment->primary_language) && $enrollment->primary_language == "others") selected @endif>Others</option>
              </select>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Relihiyon <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Religion -->
              <select id="religion" name="religion" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5  w-full">
                <option value="christianity" @if(isset($enrollment->religion) && $enrollment->religion == "christianity") selected @endif>Christianity</option>
                <option value="aglipayan" @if(isset($enrollment->religion) && $enrollment->religion == "aglipayan") selected @endif>Aglipayan</option>
                <option value="angelican" @if(isset($enrollment->religion) && $enrollment->religion == "angelican") selected @endif>Angelican</option>
                <option value="apostolic" @if(isset($enrollment->religion) && $enrollment->religion == "apostolic") selected @endif>Apostolic</option>
                <option value="baptist" @if(isset($enrollment->religion) && $enrollment->religion == "baptist") selected @endif>Baptist</option>
                <option value="buddhism" @if(isset($enrollment->religion) && $enrollment->religion == "buddhism") selected @endif>Buddhism</option>
                <option value="CLDS" @if(isset($enrollment->religion) && $enrollment->religion == "CLDS") selected @endif>Christ Latter Day Saints</option>
                <option value="COGIJC" @if(isset($enrollment->religion) && $enrollment->religion == "COGIJC") selected @endif>Church of God in Jesus Christ</option>
                <option value="CODI" @if(isset($enrollment->religion) && $enrollment->religion == "CODI") selected @endif>Church of God International</option>
                <option value="dating daan" @if(isset($enrollment->religion) && $enrollment->religion == "dating daan") selected @endif>Dating Daan</option>
                <option value="el shaddai" @if(isset($enrollment->religion) && $enrollment->religion == "el shaddai") selected @endif>El Shaddai</option>
                <option value="full gospel" @if(isset($enrollment->religion) && $enrollment->religion == "full gospel") selected @endif>Full Gospel</option>
                <option value="hinduism" @if(isset($enrollment->religion) && $enrollment->religion == "hinduism") selected @endif>Hinduism</option>
                <option value="INC" @if(isset($enrollment->religion) && $enrollment->religion == "INC") selected @endif>Iglesia ni Cristo</option>
                <option value="IR" @if(isset($enrollment->religion) && $enrollment->religion == "IR") selected @endif>Indigenous Religion</option>
                <option value="islam" @if(isset($enrollment->religion) && $enrollment->religion == "islam") selected @endif>Islam</option>
                <option value="Saksi" @if(isset($enrollment->religion) && $enrollment->religion == "Saksi") selected @endif>Jehovah Witneses</option>
                <option value="judaism" @if(isset($enrollment->religion) && $enrollment->religion == "judaism") selected @endif>Judaism</option>
                <option value="KOJC" @if(isset($enrollment->religion) && $enrollment->religion == "KOJC") selected @endif>Kingdom of Jesus Christ</option>
                <option value="lutheran" @if(isset($enrollment->religion) && $enrollment->religion == "lutheran") selected @endif>Lutheran</option>
                <option value="others" @if(isset($enrollment->religion) && $enrollment->religion == "others") selected @endif>others</option>
              </select>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Ang mag-aaral ba ay nangangailangan ng espesyal na tulong sa pag-aaral? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Special Needs -->
              <div class="flex items-center mb-4">

                <input required id="special_needs_no" type="radio" value="0" name="special_needs" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleForm2()" @if(isset($enrollment->special_needs) && $enrollment->special_needs == 0) checked @endif>

                <label for="default-radio-1" class="ml-2 text-[0.90rem] font-light text-gray-900 dark:text-gray-300">Wala</label>

              </div>
              <div class="flex items-center">

                <input required id="special_needs_yes" type="radio" value="1" name="special_needs" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleForm2()" @if(isset($enrollment->special_needs) && $enrollment->special_needs == 1) checked @endif>

                <label for="default-radio-2" class="ml-2 text-[0.90rem] font-light text-gray-900 dark:text-gray-300">Meron</label>

              </div>
                          
            </div>
            
          </div>

          <div id="tulong_form" class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100" style="display: none;">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Kung MAYROON, i-type kung ano ang natatanging kalagayan o kundisyon ng bata. Lagpasan kung wala. <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Special Needs Description -->    
              <!-- if others is selected get user input-->
              <div class="mb-1">
                <input type="text" id="special_needs_description" name="special_needs_description" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->special_needs_description)? $enrollment->special_needs_description : ''}}">
              </div>
            
            </div>
            
          </div>

          <script>
            function toggleForm2() {
                var specialGrp = document.getElementById("special_needs_yes");
                var conditionalForm = document.getElementById("tulong_form");
    
                if (special_needs_yes.checked) {
                    conditionalForm.style.display = "block";
                } else {
                    conditionalForm.style.display = "none";
                }
            }
        </script>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Region <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Region -->
              <div class="mb-1">
                <select name="region" id="region" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"></select>
                <input id="region_text" name="region_text" >
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Province <span class="text-red-600">*</span></b>
              
              </div>
            
              <div class="mb-1">
                <select name="province" id="province" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"></select>
                <input type="hidden" id="province_text" name="province_text">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">City/Municipality <span class="text-red-600">*</span></b>
              
              </div>
            
              <div class="mb-1">
                <select name="city" id="city" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"></select>
                <input type="hidden" id="city_text" name="city_text">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Barangay<span class="text-red-600">*</span></b>
              
              </div>
            
              <div class="mb-1">
                <select name="barangay" id="barangay" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"></select>
                <input type="hidden" id="barangay_text" name="barangay_text">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Street<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- House Number -->
              <div class="mb-1">
                <input type="text" id="street_text" name="street_text" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->street_text)? $enrollment->street_text : ''}}">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">House Number<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- House Number -->
              <div class="mb-1">
                <input type="text" id="house_number" name="house_number" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" value="{{isset($enrollment->house_number)? $enrollment->house_number : ''}}">
              </div>
            
            </div>
            
          </div>

          <div class="flex gap-2 w-full">  

            <div class="self-stretch rounded-lg flex flex-row items-center justify-center py-[1rem] w-1/2 border-[1px] border-solid border-main-brown-primary-500 hover:box-border hover:shadow-darkslategray-200 hover:border-[2px] hover:border-solid hover:border-dimgray-100">
              <button 
              id="backBtn"
              type="button"
              onclick="window.location = '{{URL::route('get.enrollment1')}}'"
              class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap">Back</button>
            </div>

            <div class="self-stretch rounded-lg bg-main-green-secondary-500 flex flex-row items-center justify-center py-[1rem] w-1/2  hover:bg-darkslategray-200 hover:shadow-darkslategray-200  [&_.next]:hover:text-main-brown-primary-50"> 
              <button 
              type="submit" 
              id="nextBtn"
              class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-medium font-button text-main-brown-primary-50 text-center inline-block">next</button>
            
            </div>
          
          </div>
        
        </div>

      </form>
    
    </section>
  
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  
  <script>
    var logoContainer = document.getElementById("logoContainer");
    if (logoContainer) {
      logoContainer.addEventListener("click", function (e) {
        // Please sync "landing-page" to the project
      });
    }
  </script>

</body>
</html>
