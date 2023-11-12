<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/Enrollment_ValidationP5.js'])
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
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[5.5rem] px-[15rem]  bg-cover bg-no-repeat bg-top lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[11.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border"
  style="background-image: url('./assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-[2rem] text-left text-[1.44rem] text-main-background font-heading-2 md:gap-[1.88rem]">
    
    <!-- Logo Container -->
    <div class="h-[7.31rem] flex flex-col items-center justify-center gap-[0.5rem] cursor-pointer" id="logoContainer">

      <img 
      class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" 
      alt="GDJES Logo" 
      src="./assets/GDJES Logo.png" 
      />

      <div class="flex flex-col items-start justify-start">

        <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-heading-2-bold font-inherit overflow-hidden text-ellipsis whitespace-nowrap">
          GREGORIA DE JESUS
        </h2>

        <div class="self-stretch relative text-[0.69rem] leading-[140%] text-center">
          ELEMENTARY SCHOOL - MANILA
        </div>

      </div>

    </div>

      <!-- Student Registration Form -->
      <form class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center py-[3rem] px-[2rem] gap-[.9rem] w-10/12"
            method="post"
            action="{{ route('enrollment.StudentportalRegistrationPage5.post')}}">

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

          <div class="flex-1 relative bg-main-green-secondary-500 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <div class="rounded-481xl bg-main-green-secondary-500 h-[2.65rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.25rem] leading-[140%] font-heading-2 text-main-background text-left p-4">5</div>

          </div>

        </div> 

        <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100"  id="checkboxRedBorder">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Piliin ang angkop na mga sagot <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Learning Information --> 
              <div class="flex items-center mb-2">
                <input 
                  required 
                  id="cellphone_tablet" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="cellphone/tablet" 
                  class="w-4 h-4 text-green-800 border-2  border-gray-300 rounded focus:ring-green-800  dark:focus:ring-green-800  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('cellphone/tablet', $enrollment->learning_info)) checked @endif
                >
                <label for="cellphone_tablet" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">May sariling Cellphone/Tablet ang Bata</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="computer" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="Computer" 
                  class="w-4 h-4 text-green-800 border-2  border-gray-300 rounded focus:ring-green-800  dark:focus:ring-green-800  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('Computer', $enrollment->learning_info)) checked @endif
                >
                <label for="computer" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">May computer sa bahay</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="no_gadget" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="No_gadget" 
                  class="w-4 h-4 text-green-800 border-2  border-gray-300 rounded focus:ring-green-800  dark:focus:ring-green-800  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('No_gadget', $enrollment->learning_info)) checked @endif
                >
                <label for="no_gadget" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Walang sariling gadget ang bata</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="tv" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="Tv" 
                  class="w-4 h-4 text-green-800 border-2  border-gray-300 rounded focus:ring-green-800  dark:focus:ring-green-800  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('Tv', $enrollment->learning_info)) checked @endif
                >
                <label for="tv" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">May tv sa bahay</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="internet" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="Internet" 
                  class="w-4 h-4 text-green-800 border-2  border-gray-300 rounded focus:ring-green-800  dark:focus:ring-green-800  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('Internet', $enrollment->learning_info)) checked @endif
                >
                <label for="internet" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">May internet connection sa bahay</label>
              </div>

              <div class="flex items-center">
                <input 
                  id="mobile_data" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="Mobile_data" 
                  class="w-4 h-4 text-green-800 border-2  border-gray-300 rounded focus:ring-green-800  dark:focus:ring-green-800  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('Mobile_data', $enrollment->learning_info)) checked @endif
                >
                <label for="mobile_data" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Mobile data lamang ang gamit para makaconnect sa internet</label>
              </div>

              <span   
                  id="learning-error" 
                  class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                  ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>

            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100" id="radioRedBorder">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Kung ang paaralan ay magpapatupad ng distance learning, ano ang nais mo para sa iyong anak? <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Distance Learning Preference -->
              <div class="flex items-center mb-2">
                <input 
                  id="4ps_yes" 
                  type="radio" 
                  value="1" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-800  border-gray-300 focus:ring-green-800 border-2  dark:focus:ring-green-800 first-letter:dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == '1') checked @endif
                >
                <label for="4ps_yes" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Modular Printed</label>
              </div>
              
              <div class="flex items-center mb-2">
                <input 
                  id="modular_printed" 
                  type="radio" 
                  value="Modular_printed" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-800  border-gray-300 focus:ring-green-800 border-2  dark:focus:ring-green-800 first-letter:dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Modular_printed') checked @endif
                >
                <label for="modular_printed" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Modular Digital</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="online" 
                  type="radio" 
                  value="Online" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-800  border-gray-300 focus:ring-green-800 border-2  dark:focus:ring-green-800 first-letter:dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Online') checked @endif
                >
                <label for="online" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Online</label>
              </div>
              
              <div class="flex items-center mb-2">
                <input 
                  id="educational_television" 
                  type="radio" 
                  value="Educational_television" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-800  border-gray-300 focus:ring-green-800 border-2  dark:focus:ring-green-800 first-letter:dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Educational_television') checked @endif
                >
                <label for="educational_television" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Educational Television</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="homeschooling" 
                  type="radio" 
                  value="Homeschooling" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-800  border-gray-300 focus:ring-green-800 border-2  dark:focus:ring-green-800 first-letter:dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Homeschooling') checked @endif
                >
                <label for="homeschooling" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Homeschooling</label>
              </div>
              
              <div class="flex items-center">
                <input 
                  id="blended" 
                  type="radio" 
                  value="Blended" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-800  border-gray-300 focus:ring-green-800 border-2  dark:focus:ring-green-800 first-letter:dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Blended') checked @endif
                >
                <label for="blended" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Blended</label>
              </div>

              <span   
                  id="distance-error" 
                  class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                  ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="flex gap-2 w-full">  

            <div class="self-stretch rounded-lg flex flex-row items-center justify-center py-[1rem] w-1/2 border-[1px] border-solid border-main-brown-primary-500 hover:box-border hover:shadow-darkslategray-200 hover:border-[2px] hover:border-solid hover:border-dimgray-100">
              <button class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap" id="backBtn">Back</button>
            </div>

            <div class="self-stretch rounded-lg bg-main-green-secondary-500 flex flex-row items-center justify-center py-[1rem] w-1/2  hover:bg-darkslategray-200 hover:shadow-darkslategray-200  [&_.next]:hover:text-main-brown-primary-50"> 
              <button type="button" id="nextBtn" class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-medium font-button text-main-brown-primary-50 text-center inline-block">next</button>
            
            </div>
          
          </div>

        </div>

      </form>
    
    </section>
  
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>
</html>