<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/Enrollment_ValidationP1.js'])
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <title>Student Registration Page 1</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank Ruhl Libre:wght@400;700&display=swap"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <link rel="icon" href="{{url('assets/GDJES Logo.png')}}" type="image/x-icon" />
</head>
<body class="m-0 p-0">
  <!-- Form Background  -->
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-24 px-48 box-border bg-[url('assets/bg_page.png')] bg-cover bg-no-repeat bg-center">

    <section class="flex-1 flex flex-col items-center justify-center gap-5 text-center text-xl text-white font-frl">

      <!-- Logo Container -->
      <div class="h-28 flex flex-col items-center justify-center gap-[0.5rem] cursor-pointer" id="logoContainer">

        <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="GDJES Logo" src="{{url('assets/GDJES Logo.png')}}" />

        <div class="flex flex-col items-start justify-start">

          <h2 class="m-0 relative text-lg  leading-[140%] font-bold font-frl overflow-hidden text-ellipsis whitespace-nowrap">
            GREGORIA DE JESUS
          </h2>

          <div class="self-stretch relative text-xs leading-[140%] text-center">
            ELEMENTARY SCHOOL - MANILA
          </div>

        </div>

        </div>

        <!-- Student Registration Form -->
        <form class=" rounded-lg bg-green-50 flex flex-col items-center justify-center p-10 gap-2"
        style="width: 900px"
        id="enrollment-page-1"  
        method="post" 
         action="{{route('enrollment.StudentportalRegistrationPage1.post')}}">
            @csrf
            @method('post')

          <h1 class="m-0 self-stretch relative text-2xl leading-[110%] font-bold font-frl  text-green-700 text-center ">Student Registration for First-time Enrollees</h1>
          
          <div class="self-stretch flex flex-col items-center justify-start gap-2">

            <div class="self-stretch relative text-[1rem] leading-[140%] font-button text-main-brown-primary-500 text-center">Welcome to the student portal registration form</div>

            <div class="self-stretch relative text-[0.81rem] leading-[140%] font-button text-main-green-secondary-700 text-center">Please fill out all the necessary information below.</div>

          </div>
          
          <!-- Progress Bar -->
          <div class="self-stretch flex flex-row items-center justify-center py-6 xl:px-44 lg:px-20 md:px-16 px-20">

            <!-- Progress #1 -->
            <div class="rounded-481xl bg-green-500 h-9  overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-base leading-[140%] font-mulish text-white text-left px-3.5 p-4">
                1
              </div>

            </div>

            <div class="flex-1 relative bg-green-200 h-[0.31rem] overflow-hidden"></div>

            <!-- Progress #2 -->
            <div class="rounded-481xl bg-green-200 h-9 overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-base leading-[140%] font-mulish text-green-300 text-left px-3.5 p-4">
                2
              </div>

            </div>

            <div class="flex-1 relative bg-green-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

            <!-- Progress #3 -->
            <div class="rounded-481xl bg-green-200 h-9 overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-base leading-[140%] font-mulish text-green-300 text-left px-3.5 p-4">
                3
              </div>

            </div>

            <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

            <!-- Progress #4 -->
            <div class="rounded-481xl bg-green-200 h-9 overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-base leading-[140%] font-mulish text-green-300 text-left px-3.5 p-4">
                4
              </div>

            </div>

            <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

            <!-- Progress #5 -->
            <div class="rounded-481xl bg-green-200 h-9 overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-base leading-[140%] font-mulish text-green-300 text-left px-3.5 p-4">
                5
              </div>

            </div>

          </div>

          <!-- Enrollment Form #1 -->
          <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">

            <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-start p-6 gap-6 border-[1px] border-solid border-green-100 redBorder">
              
            <!--Radio Button Balik Aral -->
              <div id="balikAralInfo" class="self-stretch relative flex-col items-start justify-start">
              
                <div class="self-stretch flex flex-col items-start justify-start pb-4">
                  
                  <b class="relative text-sm font-medium leading-[140%] font-mulish text-black text-left" for="balikAral">Balik-aral ba ang batang ipapalista? <span class="text-red-600">*</span></b>
                
                </div>
                
                <div class="flex items-center mb-4 font-mulish"> 
                  
                  <input 
                    type="radio" 
                    value="HINDI" 
                    name="aralStatus" 
                    id="balikAralNo"
                    class="w-4 h-4 text-green-500 border-gray-300 focus:ring-green-500 dark:focus:ring-green-500 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                    @if(isset($enrollment->aralStatus) && $enrollment->aralStatus == 'HINDI') checked @endif
                  >
                  
                  <label for="balikAralNo" class="ml-2 text-sm text-gray-900 dark:text-black">HINDI</label>
              
                </div>
                
                <div class="flex items-start font-mulish">
                  
                  <input 
                    type="radio" 
                    value="OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon" 
                    name="aralStatus" 
                    id="balikAralYes"
                    class="w-4 h-4 text-green-500 border-gray-300 focus:ring-green-500 dark:focus:ring-green-500 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-100 dark:border-gray-600"
                    @if(isset($enrollment->aralStatus) && $enrollment->aralStatus == 'OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon') checked @endif
                  >
                  <label for="balikAralYes" class="ml-2 text-sm text-gray-900 dark:text-black">OO dahil sya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon</label>
              
                </div>

                <div class="flex items-start">

                  <span   
                    id="input-error" 
                    class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                    ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
                    
                  </span>

              </div>

              </div>
              
            </div>

            <!-- Next Button -->
            <div class="self-stretch rounded-lg bg-green-500 flex flex-row items-center justify-center py-3 px-8 hover:text-white hover:shadow-md hover:shadow-green-700/50 hover:bg-green-900">
              
              <button 
              type="button" 
              id="nextButton"
              class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-medium font-mulish text-brown-50 text-center inline-block" 
              onclick="showNextSet()">
              Next
              </button>
            
            </div>
            
          </div>
        
          <div class="self-stretch relative bg-brown-300 h-[0.13rem] overflow-hidden shrink-0"></div>  
        
          <div class="self-stretch flex flex-col items-start justify-start gap-3">
            
            <div class="self-stretch relative text-sm leading-[140%] font-mulish text-brown-500 text-center overflow-hidden text-ellipsis whitespace-nowrap">Already have an account?</div>
            
            <!-- Login Button -->
            <div class="self-stretch rounded-lg flex flex-row items-center justify-center py-2.5 px-8 border-[1px] border-solid border-brown-500 hover:box-border hover:border-brown-600 hover:border-[2px] hover:border-solid hover:border-dimgray-100 cursor-pointer">

              <!--id="loginButton"  -->
              <a href="{{ route('students_login_from') }}"
                
                class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-mulish text-brown-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap">
                login here
              </a>
            
            </div>
          
          </div>
      
        </form>
    
    </section>
  
    
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js">
  </script>
</body>

</html> 
