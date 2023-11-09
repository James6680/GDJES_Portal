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
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[7.5rem] px-[15rem] box-border bg-[url('assets/bg_page.png')] bg-cover bg-no-repeat bg-center lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[11.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border"
  style="background-image: url('assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-[2.5rem] text-center text-[1.44rem] text-main-background font-heading-2 md:gap-[1.88rem]">

      <!-- Logo Container -->
      <div class="h-[7.31rem] flex flex-col items-center justify-center gap-[0.5rem] cursor-pointer" id="logoContainer">

        <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="GDJES Logo" src="{{url('assets/GDJES Logo.png')}}" />

        <div class="flex flex-col items-start justify-start">

          <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-heading-2-bold overflow-hidden text-ellipsis whitespace-nowrap">
            GREGORIA DE JESUS
          </h2>

          <div class="self-stretch  relative text-[0.69rem] leading-[140%] text-center">
            ELEMENTARY SCHOOL - MANILA
          </div>

        </div>

        </div>

        <!-- Student Registration Form -->
        <form class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center py-[2.5rem] px-[2.5rem] gap-[.9rem] w-10/12"
         method="post" 
         action="{{route('enrollment.StudentportalRegistrationPage1.post')}}">
            @csrf
            @method('post')

          <h1 class="m-0 self-stretch relative text-[1.80rem] leading-[110%] font-bold font-heading-2-bold text-main-green-secondary-700 text-center md:text-2xl">Student Registration for First-time Enrollees</h1>
          
          <div class="self-stretch flex flex-col items-center justify-start gap-[0.5rem]">

            <div class="self-stretch relative text-[1rem] leading-[140%] font-button text-main-brown-primary-500 text-center">Welcome to the student portal registration form</div>

            <div class="self-stretch relative text-[0.81rem] leading-[140%] font-button text-main-green-secondary-700 text-center">Please fill out all the necessary information below.</div>

          </div>
          
          <!-- Progress Bar -->
          <div class="self-stretch flex flex-row items-center justify-center py-[1.5rem] px-[4.44rem]">

            <!-- Progress #1 -->
            <div class="rounded-481xl bg-main-green-secondary-500 h-[2.5rem] overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-[1.20rem] leading-[140%] font-heading-2 text-main-background text-left p-4">
                1
              </div>

            </div>

            <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-lifont-light"></div>

            <!-- Progress #2 -->
            <div class="rounded-481xl bg-main-green-secondary-200 h-[2.6rem] overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-[1.20rem] leading-[140%] font-heading-2 text-main-green-secondary-300 text-left p-4">
                2
              </div>

            </div>

            <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

            <!-- Progress #3 -->
            <div class="rounded-481xl bg-main-green-secondary-200 h-[2.67rem] overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-[1.20rem] leading-[140%] font-heading-2 text-main-green-secondary-300 text-left p-4">
                3
              </div>

            </div>

            <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

            <!-- Progress #4 -->
            <div class="rounded-481xl bg-main-green-secondary-200 h-[2.65rem] overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-[1.25rem] leading-[140%] font-heading-2 text-main-green-secondary-300 text-left p-4">
                4
              </div>

            </div>

            <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

            <!-- Progress #5 -->
            <div class="rounded-481xl bg-main-green-secondary-200 h-[2.65rem] overflow-hidden flex flex-col items-center justify-center p-0">

              <div class="relative text-[1.25rem] leading-[140%] font-heading-2 text-main-green-secondary-300 text-left p-4">
                5
              </div>

            </div>

          </div>

          <!-- Enrollment Form #1 -->
          <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">

            <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-start p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 redBorder">
              
            <!--Radio Button Balik Aral -->
              <div id="balikAralInfo" class="self-stretch relative flex-col items-start justify-start">
              
                <div class="self-stretch flex flex-col items-start justify-start pb-4">
                  
                  <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Balik-aral ba ang batang ipapalista? <span class="text-red-600">*</span></b>
                
                </div>
                
                <div class="flex items-center mb-4"> 
                  
                  <input 
                    type="radio" 
                    value="HINDI" 
                    name="aralStatus" 
                    id="balikAralNo"
                    class="w-4 h-4 text-green-800 border-gray-300 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                    @if(isset($enrollment->aralStatus) && $enrollment->aralStatus == 'HINDI') checked @endif
                  >
                  
                  <label for="balikAralNo" class="ml-2 text-[0.85rem] text-gray-900 dark:text-black">HINDI</label>
              
                </div>
                
                <div class="flex items-start">
                  
                  <input 
                    type="radio" 
                    value="OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon" 
                    name="aralStatus" 
                    id="balikAralYes"
                    class="w-4 h-4 text-green-800 border-gray-300 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                    @if(isset($enrollment->aralStatus) && $enrollment->aralStatus == 'OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon') checked @endif
                  >
                  <label for="balikAralYes" class="ml-2  text-[0.85rem]  text-gray-900 dark:text-black">OO dahil sya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon</label>
              
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
            <div class="self-stretch rounded-lg bg-main-green-secondary-500 flex flex-row items-center justify-center py-[1rem] px-[2.13rem] hover:bg-darkslategray-200 hover:shadow-darkslategray-200  [&_.next]:hover:text-main-brown-primary-50">
              
              <button 
              type="button" 
              id="nextButton"
              class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-medium font-button text-main-brown-primary-50 text-center inline-block" 
              onclick="showNextSet()">
              next
              </button>
            
            </div>
            
          </div>
        
          <div class="self-stretch relative bg-main-brown-primary-300 h-[0.13rem] overflow-hidden shrink-0"></div>  
        
          <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">
            
            <div class="self-stretch relative text-[0.81rem] leading-[140%] font-button text-main-brown-primary-500 text-center overflow-hidden text-ellipsis whitespace-nowrap">Already have an account?</div>
            
            <!-- Login Button -->
            <div class="self-stretch rounded-lg flex flex-row items-center justify-center py-[1rem] px-[2.13rem] border-[1px] border-solid border-main-brown-primary-500 hover:box-border hover:shadow-darkslategray-200 hover:border-[2px] hover:border-solid hover:border-dimgray-100 cursor-pointer">

              <button id="loginButton"  class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap">login here</button>
            
            </div>
          
          </div>
      
        </form>
    
    </section>
  
    
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js">
  </script>
</body>

</html> 
