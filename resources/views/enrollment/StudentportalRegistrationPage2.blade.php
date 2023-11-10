<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/Enrollment_ValidationP2.js'])
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Added initial-scale for responsiveness -->
  <title>Student Registration Page 2</title>
  <link rel="icon" href="{{url('assets/GDJES Logo.png')}}" type="image/x-icon"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;700&family=Mulish:wght@400;700&display=swap" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
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
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[3.5rem] px-[15rem] bg-cover bg-no-repeat lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[11.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border"
  style="background-image: url('./assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-[2.5rem] text-left text-[1.44rem] text-main-background font-heading-2 md:gap-[1.88rem]">
    
    <!-- Logo Container -->
    <div class="h-[7.31rem] flex flex-col items-center justify-center gap-[0.5rem] cursor-pointer" id="logoContainer">

      <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="" 
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
      <form class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center px-[2rem] py-[2.5rem] gap-[.9rem] w-10/12" 
      id="enrollment-page-2" 
      method="post" 
      action="{{route('enrollment.StudentportalRegistrationPage2.post')}}">
      @csrf
      @method('post')

        <h1 class="m-0 self-stretch relative text-[1.80rem] leading-[110%] font-extrabold font-heading-2 text-main-green-secondary-700 text-center font-heading-2-bold">
          Student Registration for First-time Enrollees
        </h1>

        <div class="self-stretch flex flex-col items-center justify-start gap-[0.5rem">

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

          <div class="flex-1 relative bg-main-green-secondary-500 h-[0.31rem] overflow-hidden mix-blend-lifont-light"></div>

          <!-- Progress #2 -->
          <div class="rounded-481xl bg-main-green-secondary-500 h-[2.6rem] overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative text-[1.20rem] leading-[140%] font-heading-2 text-main-background text-left p-4">
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

        <!-- Registration Form #2 -->
        <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[1.5rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Ano ang huling baitang na natapos? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Returnee -->
              <select id="returnee" 
                name="returnee" 
                class="bg-main-background border border-gray-300 text-gray-900 text-[0.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block gap-2  px-2.4 py-2.5 w-full">
                <option value="0"></option>
                <option value="1" @if(isset($enrollment->returnee) && $enrollment->returnee == 1) selected @endif>KINDER</option>
                <option value="2" @if(isset($enrollment->returnee) && $enrollment->returnee == 2) selected @endif>Grade 1</option>
                <option value="3" @if(isset($enrollment->returnee) && $enrollment->returnee == 3) selected @endif>Grade 2</option>
                <option value="4" @if(isset($enrollment->returnee) && $enrollment->returnee == 4) selected @endif>Grade 3</option>
                <option value="5" @if(isset($enrollment->returnee) && $enrollment->returnee == 5) selected @endif>Grade 4</option>
                <option value="6" @if(isset($enrollment->returnee) && $enrollment->returnee == 6) selected @endif>Grade 5</option>
                <option value="7" @if(isset($enrollment->returnee) && $enrollment->returnee == 7) selected @endif>Grade 6</option>
                <option value="8" @if(isset($enrollment->returnee) && $enrollment->returnee == 8) selected @endif>ALS</option>
              </select>

              <!-- Error Message for Ano ang huling baitang na natapos? -->
              <span   
                id="input-error" 
                class="hidden p-1 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[1.3rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Ano ang huling paaralan na pinasukan? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Last school attended -->
              <div class="mb-2">
                
                <input required 
                  type="text" 
                  id="lastSchoolAttended" 
                  name="lastSchoolAttended" 
                  class=" text-[1rem] block w-full px-4 py-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->lastSchoolAttended) ? $enrollment->lastSchoolAttended : old('lastSchoolAttended') }}"
                >
                <!-- Error Message for Ano ang huling paaralan na pinasukan? -->
                <span   
                  id="input-error" 
                  class="hidden p-1 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                </span> 

              </div>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[1.3rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <!-- 3rd Part -->
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[0.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Anong panuruang taon ang natapos ng mag-aaral? <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Last school year attended -->
              <div class="mb-2">
                
                <input 
                  required 
                  type="text" 
                  id="lastSchoolYearAttended" 
                  name="lastSchoolYearAttended" 
                  class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->lastSchoolYearAttended) ? $enrollment->lastSchoolYearAttended : old('lastSchoolYearAttended') }}"
                >
                <!-- Error Message for Anong panuruang taon ang natapos ng mag-aaral? -->
                <span   
                  id="input-error" 
                  class="hidden p-1 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">

                </span> 

              </div>
            
            </div>
            
          </div>

          <div class="flex gap-2 w-full">  

            <div class="self-stretch rounded-lg flex flex-row items-center justify-center py-[1rem] w-1/2 border-[1px] border-solid border-main-brown-primary-500 hover:box-border hover:shadow-darkslategray-200 hover:border-[2px] hover:border-solid hover:border-dimgray-100">
              
              <button 
              class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap" 
              type="button" 
              id="backBtn">
              Back
              </button>

            </div>

            <div class="self-stretch rounded-lg bg-main-green-secondary-500 flex flex-row items-center justify-center py-[1rem] w-1/2  hover:bg-darkslategray-200 hover:shadow-darkslategray-200  [&_.next]:hover:text-main-brown-primary-50"> 

              <button 
              type="button" 
              id="nextBtn" 
              class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-medium font-button text-main-brown-primary-50 text-center inline-block">
              next
              </button>

            </div>

          </div>

        </div>

      </form>
    
    </section>
  
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>
