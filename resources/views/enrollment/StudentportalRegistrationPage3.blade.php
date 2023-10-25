
<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/ph-address-selector.js', 'resources/js/Enrollment_ValidationP3.js'])
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Added initial-scale for responsiveness -->
  <title>Student Registration Page 3</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;700&family=Mulish:wght@400;700&display=swap" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <link rel="icon" href="{{url('assets/GDJES Logo.png')}}" type="image/x-icon" />
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
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[1.5rem] px-[15rem]  bg-cover bg-no-repeat bg-top lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[11.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border"
  style="background-image: url('./assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-[2rem] text-left text-[1.44rem] text-main-background font-heading-2 md:gap-[1.88rem]">
    
    <!-- Logo Container -->
      <div class="h-[7.31rem] flex flex-col items-center justify-center gap-[0.5rem] cursor-pointer" id="logoContainer">

        <img 
        class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" 
        alt="GDJES log" 
        src="./assets/GDJES Logo.png" 
        />

        <div class="flex flex-col items-start justify-start ">

          <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-heading-2-bold font-inherit overflow-hidden text-ellipsis whitespace-nowrap">
            GREGORIA DE JESUS
          </h2>

          <div class="self-stretch relative text-[0.69rem] leading-[140%] text-center">
            ELEMENTARY SCHOOL - MANILA
          </div>

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
                <option value="">Pumili ng huling baitang na natapos</option>
                <option value="0">KINDER</option>
                <option value="1">Grade 1</option>
                <option value="2">Grade 2</option>
                <option value="3">Grade 3</option>
                <option value="4">Grade 4</option>
                <option value="5">Grade 5</option>
                <option value="6">Grade 6</option>
                <option value="7">ALS</option>
              </select>

              <!-- Error Message for Ano ang huling baitang na natapos? -->
              <span   
                id="input-error1" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">School Year <span class="text-red-600">*</span></b>
              
              </div>

              <!-- School Year -->
              <div class="mb-1">
                <input required type="text" id="school_year" name="school_year" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <!-- Error Message for School Year -->
              <span   
                id="input-error2" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
              
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 redBorder" data-for="lrn_status">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">May LRN (Learner Reference Number) ba ang inyong anak? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Learner Reference Number -->
              <div class="flex items-center mb-4">

                <input 
                required 
                id="lrn_yes" 
                type="radio" 
                value="1" 
                name="lrn_status" 
                class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                onchange="lrnForm()">
                
                <label for="default-radio-1" class="font-normal ml-2 text-[.90rem] text-gray-900 dark:text-gray-900">Mayroon siyang LRN</label>

              </div>

              <div class="flex items-center">

                <input 
                required 
                id="lrn_no" 
                type="radio" 
                value="0" 
                name="lrn_status" 
                class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                onchange="lrnForm()">

                <label for="default-radio-2" class="font-normal ml-2 text-[.90rem] text-gray-900 dark:text-gray-900">Wala siyang LRN dahil siya ay mag-kikinder pa lang</label>
              
              </div>

               <!-- Error Message for May LRN (Learner Reference Number) ba ang inyong anak? -->
              <span   
                id="input-error1r" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
                          
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
                <input required type="text" id="lrn_number" name="lrn_number" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <!-- Error Message for Learners Reference Number (LRN) -->
              <span   
                id="input-error5r" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <script>
            function lrnForm() {
                var lrnYes = document.getElementById("lrn_yes");
                var conditionalForm = document.getElementById("lrn_form");

                if (lrnYes.checked) {
                    conditionalForm.style.display = "block";
                } else {
                    conditionalForm.style.display = "none";
                }
            };
          </script>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">PSA Birth Certificate No. <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- PSA Birth Certificate No. -->
              <div class="mb-1">
                <input required type="text" id="psa_birth_cert" name="psa_birth_cert" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error3" 
                class="hidden pt-2 pl-0 text-sm font-medium  text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Lastname ng bata (Apelyido) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Last Name -->
              <div class="mb-1">
                <input required type="text" id="lastName_ng_bata" name="lastName_ng_bata" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error4" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Firstname ng bata (Pangalan) <span class="text-red-600">*</span></b>
              
              </div>

              <!-- First Name -->
              <div class="mb-1">
                <input required type="text" id="firstName_ng_bata" name="firstName_ng_bata" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error5" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>


          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Middlename (Gitnang Pangalan) <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Middle Name -->
              <div class="mb-1">
                <input required type="text" id="middleName_ng_bata" name="middleName_ng_bata" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error6" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <!-- 1st Part -->
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Extension Name <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Extension Name -->
              <select id="extensionName_ng_bata" name="extensionName_ng_bata" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block gap-2  p-2.5 w-full">
                <option value=""></option>
                <option value="1">Jr</option>
                <option value="2">I</option>
                <option value="3">II</option>
                <option value="4">III</option>
                <option value="5">IV</option>
                <option value="6">V</option>
                <option value="7">VI</option>
              </select>

              <span   
                id="input-error7" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
              
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
                
                <input datepicker type="text" class="bg-main-background border border-gray-300 text-gray-900 text-[.90rem] focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-100 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 rounded-lg" placeholder="Select date" id="birth_date">
              
              </div>

              <span   
                id="input-error8" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Ilang taon ang bata sa October 31, 2023? <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Age on October 31, 2023 -->
              <div class="mb-1">
                <input required type="text" id="age_on_oct_31" name="age_on_oct_31" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error9" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>


          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 redBorder" data-for="gender">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Kasarian ng Bata <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Gender -->
              <div class="flex items-center mb-4">
                
                <input 
                required 
                id="male" 
                type="radio" 
                value="male" 
                name="gender" 
                class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600">
                
                <label for="default-radio-1" class="ml-2 text-[.90rem] font-normal text-gray-900 dark:text-gray-900">Lalake</label>
              </div>

              <div class="flex items-center">   

                <input 
                required 
                id="female" 
                type="radio" 
                value="female" 
                name="gender" 
                class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600">
                
                <label for="default-radio-2" class="ml-2 text-[.90rem] font-normal text-gray-900 dark:text-gray-900">Babae</label>
              
              </div>

              <span   
                id="input-error2r" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
                          
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 redBorder" data-for="indigenous_group">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Nabibilang sa katutubong grupo/ Komunidad ng Katutubong Kultural ang mag-aaral <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Indigenous Group -->
              <div class="flex items-center mb-4">
                <input 
                required 
                id="indigenous_yes" 
                type="radio"
                value="1" 
                name="indigenous_group" 
                class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                onchange="indiGroupForm()">

                <label for="default-radio-1" class="ml-2 text-[0.90rem]  font-normal text-gray-900 dark:text-gray-900">Oo</label>

              </div>

              <div class="flex items-center">

                <input 
                id="indigenous_no" 
                type="radio" 
                value="0" 
                name="indigenous_group" 
                class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600" 
                onchange="indiGroupForm()">

                <label for="default-radio-2" class="ml-2 text-[0.90rem]  font-normal text-gray-900 dark:text-gray-900">Hindi</label>
              </div>

              <span   
                id="input-error3r" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
                            
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
                <input required type="text" id="indigenous_group_name" name="indigenous_group_name" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error6r" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <script>
            function indiGroupForm() {
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
                <option value="">Pumili ng kinagisnang wika</option>
                <option value="1">Filipino</option>
                <option value="2">Bikolano</option>
                <option value="3">Cebuano</option>
                <option value="4">Chinese</option>
                <option value="5">English</option>
                <option value="6">Ilocano</option>
                <option value="7">Kapampangan</option>
                <option value="8">Maguindanaoan</option>
                <option value="9">Manobo</option>
                <option value="10">Hihonggo</option>
                <option value="11">Philippine Sign Language</option>
                <option value="12">Tausug</option>
                <option value="13">Waray</option>
                <option value="14">Ybanag</option>
                <option value="15">Others</option>
              </select>

              <span   
                id="input-error10" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Relihiyon <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Religion -->
              <select id="religion" name="religion" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5  w-full">
                <option value="">Pumili ng Relihiyon</option>
                <option value="1">Christianity</option>
                <option value="2">Aglipayan</option>
                <option value="3">Angelican</option>
                <option value="4">Apostolic</option>
                <option value="5">Baptist</option>
                <option value="6">Buddhism</option>
                <option value="7">Christ Latter Day Saints</option>
                <option value="8">Church of God in Jesus Christ</option>
                <option value="9">Church of God International</option>
                <option value="10">Dating Daan</option>
                <option value="11">El Shaddai</option>
                <option value="12">Full Gospel</option>
                <option value="13">Hinduism</option>
                <option value="14">Iglesia ni Cristo</option>
                <option value="15">Indigenous Religion</option>
                <option value="16">Islam</option>
                <option value="17">Jehovah Witneses</option>
                <option value="18">Judaism</option>
                <option value="19">Kingdom of Jesus Christ</option>
                <option value="20">Lutheran</option>
                <option value="21">others</option>
              </select>

              <span   
                id="input-error11" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 redBorder" data-for="special_needs">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Ang mag-aaral ba ay nangangailangan ng espesyal na tulong sa pag-aaral? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Special Needs -->
              <div class="flex items-center mb-4">

                <input 
                required 
                id="special_needs_no" 
                type="radio" 
                value="0" 
                name="special_needs" 
                class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                onchange="specialNeedsForm()">

                <label for="default-radio-1" class="ml-2 text-[0.90rem] font-normal text-gray-900 dark:text-gray-900">Wala</label>

              </div>
              <div class="flex items-center">

                <input 
                required 
                id="special_needs_yes" 
                type="radio" 
                value="1" 
                name="special_needs" 
                class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                onchange="specialNeedsForm()">

                <label for="default-radio-2" class="ml-2 text-[0.90rem] font-normal text-gray-900 dark:text-gray-900">Meron</label>

              </div>

              <span   
                id="input-error4r" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
                          
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
                <input required type="text" id="special_needs_description" name="special_needs_description" class=" text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error7r" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <script>
            function specialNeedsForm() {
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
                <select name="region" id="region" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5  w-full"></select>
                <input type="hidden" id="region_text" name="region_text" >
              </div>

              <span   
                id="input-error12" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Province <span class="text-red-600">*</span></b>
              
              </div>
            
              <div class="mb-1">
                <select name="province" id="province" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5  w-full"></select>
                <input type="hidden" id="province_text" name="province_text">
              </div>

              <span   
                id="input-error13" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">City/Municipality <span class="text-red-600">*</span></b>
              
              </div>
            
              <div class="mb-1">
                <select name="city" id="city" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5  w-full"></select>
                <input type="hidden" id="city_text" name="city_text">
              </div>

              <span   
                id="input-error14" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Barangay<span class="text-red-600">*</span></b>
              
              </div>
            
              <div class="mb-1">
                <select name="barangay" id="barangay" class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5  w-full"></select>
                <input type="hidden" id="barangay_text" name="barangay_text">
              </div>

              <span   
                id="input-error15" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Street<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Street Text -->
              <div class="mb-1">
                <input required type="text" id="street_text" name="street_text" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error16" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">House Number<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- House Number -->
              <div class="mb-1">
                <input required type="text" id="house_number" name="house_number" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>

              <span   
                id="input-error17" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="flex gap-2 w-full">  

            <div class="self-stretch rounded-lg flex flex-row items-center justify-center py-[1rem] w-1/2 border-[1px] border-solid border-main-brown-primary-500 hover:box-border hover:shadow-darkslategray-200 hover:border-[2px] hover:border-solid hover:border-dimgray-100">
              <button id="backBtn" class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap">Back</button>
            </div>

            <div class="self-stretch rounded-lg bg-main-green-secondary-500 flex flex-row items-center justify-center py-[1rem] w-1/2  hover:bg-darkslategray-200 hover:shadow-darkslategray-200  [&_.next]:hover:text-main-brown-primary-50"> 
                
              <button type="button" id="nextBtn" class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-medium font-button text-main-brown-primary-50 text-center inline-block">next</button>
            
            </div>
          
          </div>
        
        </div>

      </form>
    
    </section>
  
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  
</body>
</html>
