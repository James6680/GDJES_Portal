<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/Enrollment_ValidationP5.js'])
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Added initial-scale for responsiveness -->
  <title>Student Registration Page 5</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;700&family=Mulish:wght@400;700&display=swap" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <link rel="icon" href="{{url('assets/GDJES Logo.png')}}" type="image/x-icon" />
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
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-20 md:px-60 px-52 bg-cover bg-no-repeat bg-top"
  style="background-image: url('./assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-8 text-left text-2xl text-white font-frl md:gap-7">
    
    <!-- Logo Container -->
    <div class="h-[7.31rem] flex flex-col items-center justify-center gap-2 cursor-pointer" id="logoContainer">

      <img 
      class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" 
      alt="GDJES Logo" 
      src="./assets/GDJES Logo.png" 
      />

      <div class="flex flex-col items-start justify-start">

        <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-frl font-inherit overflow-hidden text-ellipsis whitespace-nowrap">
          GREGORIA DE JESUS
        </h2>

        <div class="self-stretch relative text-xs leading-[140%] text-center">
          ELEMENTARY SCHOOL - MANILA
        </div>

      </div>

    </div>

      <!-- Student Registration Form -->
      <form class="rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center lg:p-8 md:p-7 p-5 gap-2 lg:w-[56rem] md:w-[41rem] w-[23rem]"
            method="post"
            id="enrollment-page-5"
            action="{{ route('enrollment.StudentportalRegistrationPage5.post')}}">
    @csrf
    @method('post')
        <h1 class="m-0 self-stretch relative md:text-2xl text-base leading-[110%] font-extrabold font-frl text-green-700 text-center">Student Registration for First-time Enrollees</h1>

        <div class="self-stretch flex flex-col items-center justify-start md:gap-2 gap-0">

          <div class="self-stretch relative md:text-base text-sm leading-[140%] font-mulish text-brown-500 text-center">Welcome to the student portal registration form</div>

          <div class="self-stretch relative text-xs leading-[140%] font-mulish text-green-700 text-center">Please fill out all the necessary information below.</div>

        </div>

        <!-- Progress Bar -->
        <div class="self-stretch flex flex-row items-center justify-center md:py-6 py-3 lg:px-44 md:px-28 px-16">

          <!-- Progress #1 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-6 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-2 p-4">
              1
            </div>

          </div>

          <div class="flex-1 relative bg-green-500 h-[0.31rem] overflow-hidden"></div>

          <!-- Progress #2 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-6 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-2 p-4">
              2
            </div>

          </div>

          <div class="flex-1 relative bg-green-500 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <!-- Progress #3 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-6 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-2 p-4">
              3
            </div>

          </div>

          <div class="flex-1 relative bg-green-500 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <!-- Progress #4 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-6 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-2 p-4">
              4
            </div>

          </div>

          <div class="flex-1 relative bg-green-500 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <!-- Progress #5 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-6 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-2 p-4">
              5
            </div>

          </div>

        </div>

        <div class="self-stretch flex flex-col items-start justify-start md:gap-4 gap-2">

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-7 p-5 gap-6 border-[1px] border-solid border-green-100"  id="checkboxRedBorder">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Piliin ang angkop na mga sagot <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Learning Information --> 
              <div class="flex items-center mb-2">
                <input 
                  required 
                  id="cellphone_tablet" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="cellphone/tablet" 
                  class="w-4 h-4 text-green-500 border-2  border-gray-300 rounded focus:ring-green-500  dark:focus:ring-green-500  dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('cellphone/tablet', $enrollment->learning_info)) checked @endif
                >
                <label for="cellphone_tablet" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">May sariling Cellphone/Tablet ang Bata</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="computer" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="Computer" 
                  class="w-4 h-4 text-green-500 border-2  border-gray-300 rounded focus:ring-green-500  dark:focus:ring-green-500  dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('Computer', $enrollment->learning_info)) checked @endif
                >
                <label for="computer" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">May computer sa bahay</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="no_gadget" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="No_gadget" 
                  class="w-4 h-4 text-green-500 border-2  border-gray-300 rounded focus:ring-green-500  dark:focus:ring-green-500  dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('No_gadget', $enrollment->learning_info)) checked @endif
                >
                <label for="no_gadget" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Walang sariling gadget ang bata</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="tv" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="Tv" 
                  class="w-4 h-4 text-green-500 border-2  border-gray-300 rounded focus:ring-green-500  dark:focus:ring-green-500  dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('Tv', $enrollment->learning_info)) checked @endif
                >
                <label for="tv" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">May tv sa bahay</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="internet" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="Internet" 
                  class="w-4 h-4 text-green-500 border-2  border-gray-300 rounded focus:ring-green-500  dark:focus:ring-green-500  dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('Internet', $enrollment->learning_info)) checked @endif
                >
                <label for="internet" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">May internet connection sa bahay</label>
              </div>

              <div class="flex items-center">
                <input 
                  id="mobile_data" 
                  name="learning_info[]"  
                  type="checkbox" 
                  value="Mobile_data" 
                  class="w-4 h-4 text-green-500 border-2  border-gray-300 rounded focus:ring-green-500  dark:focus:ring-green-500  dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->learning_info) && in_array('Mobile_data', $enrollment->learning_info)) checked @endif
                >
                <label for="mobile_data" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Mobile data lamang ang gamit para makaconnect sa internet</label>
              </div>

              <span   
                  id="learning-error" 
                  class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                  ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>

            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-7 p-5 gap-6 border-[1px] border-solid border-green-100" id="radioRedBorder">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Kung ang paaralan ay magpapatupad ng distance learning, ano ang nais mo para sa iyong anak? <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Distance Learning Preference -->
              <div class="flex items-center mb-2">
                <input 
                  id="4ps_yes" 
                  type="radio" 
                  value="Modular Printed" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-500 border-gray-300 focus:ring-green-500 border-2  dark:focus:ring-green-500 first-letter:dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == '1') checked @endif
                >
                <label for="4ps_yes" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Modular Printed</label>
              </div>
              
              <div class="flex items-center mb-2">
                <input 
                  id="modular_printed" 
                  type="radio" 
                  value="Modular Digital" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-500  border-gray-300 focus:ring-green-500 border-2  dark:focus:ring-green-500 first-letter:dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Modular_printed') checked @endif
                >
                <label for="modular_printed" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Modular Digital</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="online" 
                  type="radio" 
                  value="Online" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-500  border-gray-300 focus:ring-green-500 border-2  dark:focus:ring-green-500 first-letter:dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Online') checked @endif
                >
                <label for="online" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Online</label>
              </div>
              
              <div class="flex items-center mb-2">
                <input 
                  id="educational_television" 
                  type="radio" 
                  value="Educational television" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-500  border-gray-300 focus:ring-green-500 border-2  dark:focus:ring-green-500 first-letter:dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Educational_television') checked @endif
                >
                <label for="educational_television" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Educational Television</label>
              </div>

              <div class="flex items-center mb-2">
                <input 
                  id="homeschooling" 
                  type="radio" 
                  value="Homeschooling" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-500  border-gray-300 focus:ring-green-500 border-2  dark:focus:ring-green-500 first-letter:dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Homeschooling') checked @endif
                >
                <label for="homeschooling" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Homeschooling</label>
              </div>
              
              <div class="flex items-center">
                <input 
                  id="blended" 
                  type="radio" 
                  value="Blended" 
                  name="distance_learning" 
                  class="w-4 h-4 text-green-500  border-gray-300 focus:ring-green-500 border-2  dark:focus:ring-green-500 first-letter:dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                  @if(isset($enrollment->distance_learning) && $enrollment->distance_learning == 'Blended') checked @endif
                >
                <label for="blended" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Blended</label>
              </div>

              <span   
                  id="distance-error" 
                  class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                  ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="flex gap-2 w-full">  

            <div class="self-stretch md:rounded-lg rounded-md flex flex-row items-center justify-center md:py-3.5 py-2.5 w-1/2 border-[1px] border-solid border-brown-500 hover:box-border hover:border-brown-600 hover:border-[2px] hover:border-solid">
              <button type="button" class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-mulish text-brown-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap" id="backBtn">Back</button>
            </div>

            <div class="self-stretch md:rounded-lg rounded-md bg-green-500 flex flex-row items-center justify-center md:py-3.5 py-2.5 w-1/2  hover:text-white hover:shadow-md hover:shadow-green-700/50 hover:bg-green-900"> 
              <button type="button" id="nextBtn" class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-medium font-mulish  text-brown-50 text-center inline-block">next</button>
            
            </div>
          
          </div>

        </div>

      </form>
    
    </section>
  
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>
</html>
