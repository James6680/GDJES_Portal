
<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css'])
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Added initial-scale for responsiveness -->
  <title>Student Registration Page 1</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;700&family=Mulish:wght@400;700&display=swap" />
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

  <link rel="icon" href="{{url('assets/frame-21@2x.png')}}" type="image/x-icon" />
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
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[5.5rem] px-[15rem] bg-[url('/assets/studentportalregistrationpage101@3x.png')] bg-auto bg-repeat-y bg-top lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[11.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border"
  id="householdInfo">

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
      <form class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center py-[3rem] px-[2rem] gap-[.9rem] w-10/12" method="post" action="{{route('post.enrollment3')}}">
      @csrf
      @method('post')
        <h1 class="m-0 self-stretch relative text-[1.80rem] leading-[110%] font-extrabold font-heading-2 text-main-green-secondary-700 text-center font-heading-2-bold">Student Registration for First-time Enrollees</h1>

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

          <div class="flex-1 relative bg-main-green-secondary-500 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <div class="rounded-481xl bg-main-green-secondary-500 h-[2.65rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.25rem] leading-[140%] font-heading-2 text-main-background text-left p-4">4</div>

          </div>

          <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <div class="rounded-481xl bg-main-green-secondary-200 h-[2.65rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.25rem] leading-[140%] font-heading-2 text-main-green-secondary-300 text-left p-4">5</div>

          </div>

        </div> 

        <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Lastname (Apelyido ng Ama ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              <!-- Father's Information -->   
              <!-- Last Name -->
              <div class="mb-1">
                <input required type="text" id="father_last_name" name="father_last_name" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Firstname (Pangalan ng Ama ng bata)<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- First Name -->
              <div class="mb-1">
                <input required type="text" id="father_first_name" name="father_first_name" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Middlename (Gitnang pangalan ng Ama ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middle Name -->
              <div class="mb-1">
                <input required type="text" id="father_middle_name" name="father_middle_name" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Extension Name ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Extension Name -->
              <select id="father_extension_name" name="father_extension_name" class="bg-main-background border border-gray-300 text-gray-900 text-[.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5 w-full">
                <option value="wala">Wala</option>
                <option value="jr">Jr</option>
                <option value="1">I</option>
                <option value="2">II</option>
                <option value="3">III</option>
                <option value="4">IV</option>
                <option value="5">V</option>
                <option value="6">VI</option>
              </select>
            
            </div>
            
          </div>


          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Numero sa Telepono or Cellphone ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Tel Number -->
              <div class="mb-1">
                <input required type="text" id="father_phone" name="father_phone" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">

            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Email ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" id="email" name="email" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Lastname (Apelyido ng Ina ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Mother's Information --> 
              <!-- Lastname -->
              <div class="mb-1">
                <input required type="text" id="mother_last_name" name="mother_last_name" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Firstname (Pangalan ng Ina ng bata)<span class="text-red-600">*</span></b>
              
              </div>

              <!-- Firstname -->
              <div class="mb-1">
                <input required type="text" id="mother_first_name" name="mother_first_name" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Middlename (Gitnang pangalan ng Ina ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middlename -->
              <div class="mb-1">
                <input required type="text" id="mother_middle_name" name="mother_middle_name" class=" text-[.90rem] block w-full p-.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Extension Name ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Extension Name -->
              <select id="mother_extension_name" name="mother_extension_name" class="bg-main-background border border-gray-300 text-gray-900 text-[1rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5 w-full">
                <option value="wala">Wala</option>
                <option value="jr">Jr</option>
                <option value="1">I</option>
                <option value="2">II</option>
                <option value="3">III</option>
                <option value="4">IV</option>
                <option value="5">V</option>
                <option value="6">VI</option>
              </select>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Numero sa Telepono or Cellphone ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Tel Number -->
              <div class="mb-1">
                <input required type="text" id="mother_phone" name="mother_phone" class=" text-[.94rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Email ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" id="email" name="email" class=" text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Lastname (Apelyido ng Guardian ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Guardian's Information --> 
              <!-- Lastname -->
              <div class="mb-1">
                <input required type="text" id="guardian_last_name" name="guardian_last_name" class=" text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Firstname (Pangalan ng Guardian ng bata)<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Firstname -->
              <div class="mb-1">
                <input required type="text" id="guardian_first_name" name="guardian_first_name" class=" text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Middlename (Gitnang pangalan ng Guardian ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middlename -->
              <div class="mb-1">
                <input required type="text" id="guardian_middle_name" name="guardian_middle_name" class=" text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">

            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Extension Name ng Guardian ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Extension Name -->
              <select id="guardian_extension_name" name="guardian_extension_name" class="bg-main-background border border-gray-300 text-gray-900 text-[.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5 py-4 w-full">
                <option value="wala">Wala</option>
                <option value="jr">Jr</option>
                <option value="1">I</option>
                <option value="2">II</option>
                <option value="3">III</option>
                <option value="4">IV</option>
                <option value="5">V</option>
                <option value="6">VI</option>
              </select>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Numero sa Telepono or Cellphone ng TAGAPAGALAGA/GUARDIAN ng bata
                  ang numerong ito ay kinakailangang TAMA dahil dito magpapadala ng mensahe ang paaralan kung kinakailangan <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Tel Number -->
              <div class="mb-1">
                <input required type="text" id="guardian_phone" name="guardian_phone" class=" text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Email ng Guardian ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" id="email" name="email" class=" text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Kabilang ba ang pamilya ng bata sa 4ps ng DSWD?
                  <span class="text-red-600">*</span></b>
              
              </div>

              <!-- 4ps -->
              <div class="flex items-center mb-4">

                <input required id="4ps_yes" type="radio" value="1" name="4ps" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleForm3()">
                
                <label for="default-radio-1" class="ml-2 text-sm font-light text-gray-900 dark:text-gray-300">Oo</label>
              
              </div>
              
              <div class="flex items-center">
              
                <input required id="4ps_no" type="radio" value="0" name="4ps" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="toggleForm3()">
              
                <label for="default-radio-2" class="ml-2 text-sm font-light text-gray-900 dark:text-gray-300">Hindi</label>
              
              </div>
                          
            </div>
            
          </div>

          <div id="4ps_form" class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100" style="display: none;">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Kung kabilang ang bata sa 4ps, Ilagay ang "HOUSEHOLD ID NUMBER". <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- 4ps Household ID --> 
              <!-- if others is selected get user input--> 
              <div class="mb-1">
                <input required type="text" id="4ps_id" name="4ps_id" class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500">
              </div>
            
            </div>
            
          </div>

          <script>
            function toggleForm3() {
                var fourps_yes = document.getElementById("4ps_yes");
                var conditionalForm = document.getElementById("4ps_form");
    
                if (fourps_yes.checked) {
                    conditionalForm.style.display = "block";
                } else {
                    conditionalForm.style.display = "none";
                }
            }
          </script>

          <div class="flex gap-2 w-full">  

            <div class="self-stretch rounded-lg flex flex-row items-center justify-center py-[1rem] w-1/2 border-[1px] border-solid border-main-brown-primary-500 hover:box-border hover:shadow-darkslategray-200 hover:border-[2px] hover:border-solid hover:border-dimgray-100">
              <button 
              class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap" 
              id="backBtn"
              type="button"
              onclick="window.location = '{{URL::route('get.enrollment2')}}'"
              >Back</button>
            </div>

            <div class="self-stretch rounded-lg bg-main-green-secondary-500 flex flex-row items-center justify-center py-[1rem] w-1/2  hover:bg-darkslategray-200 hover:shadow-darkslategray-200  [&_.next]:hover:text-main-brown-primary-50"> 
              <button 
              type="submit" 
              id="nextBtn" 
              class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-medium font-button text-main-brown-primary-50 text-center inline-block"
              onclick="showNextSet('learningInfo')"
              >next</button>
            
            </div>
          
          </div>
        
        </div>

      </form>
    
    </section>
  
  </div>

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