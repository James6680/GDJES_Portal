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
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-14 md:px-60 px-52 bg-cover bg-no-repeat"
  style="background-image: url('./assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-5 text-left text-2xl text-white font-frl md:gap-7">
    
    <!-- Logo Container -->
    <div class="h-28 flex flex-col items-center justify-center gap-2 cursor-pointer" id="logoContainer">

      <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="" 
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
      <form class="rounded-lg bg-green-50 flex flex-col items-center justify-center lg:p-9 md:p-7 p-5 md:gap-2 gap-1 lg:w-[56rem] md:w-[43rem] w-[23rem]" id="enrollment-page-2" method="post" action="{{route('enrollment.StudentportalRegistrationPage2.post')}}">
      @csrf
      @method('post')

        <h1 class="m-0 self-stretch relative md:text-2xl text-base leading-[110%] font-extrabold font-frl text-green-700 text-center ">
          Student Registration for First-time Enrollees
        </h1>

        <div class="self-stretch flex flex-col items-center justify-start md:gap-2 gap-1">

          <div class="self-stretch relative md:text-base text-sm leading-[140%] font-button text-brown-500 text-center">Welcome to the student portal registration form</div>

          <div class="self-stretch relative text-xs leading-[140%] font-button text-green-700 text-center">Please fill out all the necessary information below.</div>

        </div>

        <!-- Progress Bar -->
        <div class="self-stretch flex flex-row items-center justify-center md:py-6 py-3 xl:px-44 lg:px-20 md:px-18 px-16">

          <!-- Progress #1 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative lg:text-base md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-1.5 p-4">
              1
            </div>

          </div>

          <div class="flex-1 relative bg-green-500 h-[0.31rem] overflow-hidden"></div>

          <!-- Progress #2 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative lg:text-base md:text-sm text-xs leading-[140%] font-mulish text-white text-left  lg:px-3.5 md:px-2.5 px-1.5 p-4">
              2
            </div>

          </div>

          <div class="flex-1 relative bg-green-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <!-- Progress #3 -->
          <div class="rounded-481xl bg-green-200 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative lg:text-base md:text-sm text-xs leading-[140%] font-mulish text-green-300 text-left  lg:px-3.5 md:px-2.5 px-1.5 p-4">
              3
            </div>

          </div>

          <div class="flex-1 relative bg-green-200 h-[0.31rem] overflow-hidden"></div>

          <!-- Progress #4 -->
          <div class="rounded-481xl bg-green-200 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative lg:text-base md:text-sm text-xs leading-[140%] font-mulish text-green-300 text-left  lg:px-3.5 md:px-2.5 px-1.5 p-4">
              4
            </div>

          </div>

          <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <!-- Progress #5 -->
          <div class="rounded-481xl bg-green-200 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative lg:text-base md:text-sm text-xs leading-[140%] font-mulish text-green-300 text-left  lg:px-3.5 md:px-2.5 px-1.5 p-4">
              5
            </div>

          </div>

        </div>

        <!-- Registration Form #2 -->
        <div class="self-stretch flex flex-col items-start justify-start md:gap-4 gap-2">

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-6 gap-6  border-[1px] border-solid border-green-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="balikAral">Anong baitang ang huling pinasukan ng mag-aaral? <span class="text-red-600">*</span></b>
              
              </div>

                <!-- Returnee -->
                <select id="returnee" 
                  name="returnee" 
                  class="bg-white border border-gray-300 text-gray-900 md:text-sm text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block gap-2 md:px-2.4 px-2 md:py-2.5 py-2 w-full">
                  <option value=""></option>
                  <option value="0" @if(isset($enrollment->returnee) && $enrollment->returnee == 1) selected @endif>Kinder pero hindi natapos</option>
                  <option value="1" @if(isset($enrollment->returnee) && $enrollment->returnee == 2) selected @endif>KINDER</option>
                  <option value="2" @if(isset($enrollment->returnee) && $enrollment->returnee == 3) selected @endif>Grade 1</option>
                  <option value="3" @if(isset($enrollment->returnee) && $enrollment->returnee == 4) selected @endif>Grade 2</option>
                  <option value="4" @if(isset($enrollment->returnee) && $enrollment->returnee == 5) selected @endif>Grade 3</option>
                  <option value="5" @if(isset($enrollment->returnee) && $enrollment->returnee == 6) selected @endif>Grade 4</option>
                  <option value="6" @if(isset($enrollment->returnee) && $enrollment->returnee == 7) selected @endif>Grade 5</option>
                  <option value="7" @if(isset($enrollment->returnee) && $enrollment->returnee == 8) selected @endif>Grade 6 pero hindi natapos</option> 
                </select>

              <!-- Error Message for Ano ang huling baitang na natapos? -->
              <span   
                id="input-error" 
                class="hidden p-1 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center p-5  gap-6 border-[1px] border-solid border-green-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Ano ang huling paaralan na pinasukan? <span class="text-red-600">*</span></b>
              
              </div>

              <!-- Last school attended -->
              <div class="mb-2">
                
                <input required 
                  type="text" 
                  id="lastSchoolAttended" 
                  name="lastSchoolAttended" 
                  class=" md:text-sm text-xs block w-full md:px-2.4 px-2 md:py-2.5 py-2 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
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

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center p-5 gap-6 border-[1px] border-solid border-green-100">
            
            <!-- 3rd Part -->
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="panuruangTao">Anong panuruang taon ang natapos ng mag-aaral? <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Last school year attended -->
              <div class="mb-2">
                
                <input 
                  required 
                  type="text" 
                  id="lastSchoolYearAttended" 
                  name="lastSchoolYearAttended"
                  placeholder="{{date('Y')}}" 
                  class=" md:text-sm text-xs block w-full md:px-2.4 px-2 md:py-2.5 py-2 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
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

            <div class="self-stretch rounded-lg flex flex-row items-center justify-center md:py-3.5 py-2.5 w-1/2 border-[1px] border-solid border-brown-500 hover:box-border hover:border-brown-600 hover:border-[2px] hover:border-solid">
              
              <button 
              class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-button text-brown-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap" 
              type="button" 
              id="backBtn"
              >
              Back
              </button>

            </div>

            <div class="self-stretch rounded-lg bg-green-500 flex flex-row items-center justify-center md:py-3.5 py-2.5 w-1/2  hover:text-white hover:shadow-md hover:shadow-green-700/50 hover:bg-green-900"> 

              <button 
              type="button" 
              id="nextBtn" 
              class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-medium font-mulish text-brown-50 text-center inline-block">
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
