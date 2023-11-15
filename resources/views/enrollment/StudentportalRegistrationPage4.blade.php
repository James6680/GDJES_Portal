
<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/Enrollment_ValidationP4.js'])
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Added initial-scale for responsiveness -->
  <title>Student Registration Page 4</title>
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
  <script>
    console.log('{{$enrollment}}');
  </script>
  <!-- Form Background  -->
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[5.5rem] px-[15rem] bg-cover bg-repeat-y bg-topz lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[11.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border"
  style="background-image: url('./assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-[2rem] text-left text-[1.44rem] text-main-background font-heading-2 md:gap-[1.88rem]">
    
      <!-- Logo Container -->
      <div class="h-[7.31rem] flex flex-col items-center justify-center gap-[0.5rem] cursor-pointer" id="logoContainer">

        <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="" src="./assets/GDJES Logo.png" />

        <div class="flex flex-col items-start justify-start ">

          <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-heading-2-bold font-inherit overflow-hidden text-ellipsis whitespace-nowrap">GREGORIA DE JESUS</h2>

          <div class="self-stretch relative text-[0.69rem] leading-[140%] text-center">ELEMENTARY SCHOOL - MANILA</div>
        
        </div>

      </div>

      <!-- Student Registration Form -->
      <form class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center py-[3rem] px-[2rem] gap-[.9rem] w-10/12" 
      id="enrollment-page-4";
      method="post" 
      action="{{route('enrollment.StudentportalRegistrationPage4.post')}}">
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
                <input 
                  required 
                  type="text" 
                  id="lastName_ng_ama" 
                  name="lastName_ng_ama" 
                  class="text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->lastName_ng_ama) ? $enrollment->lastName_ng_ama : old('lastName_ng_ama') }}"
              ></div>

              <span   
                id="input_error1" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Firstname (Pangalan ng Ama ng bata)<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- First Name -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="firstName_ng_ama" 
                  name="firstName_ng_ama" 
                  class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->firstName_ng_ama) ? $enrollment->firstName_ng_ama : old('firstName_ng_ama') }}"
                ></div>

              <span   
                id="input_error2" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Middlename (Gitnang pangalan ng Ama ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middle Name -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="middleName_ng_ama" 
                  name="middleName_ng_ama" 
                  class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->middleName_ng_ama) ? $enrollment->middleName_ng_ama : old('middleName_ng_ama') }}"
                ></div>

              <span   
                id="input_error3" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Extension Name ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <select id="extensionName_ng_ama" name="extensionName_ng_ama" class="bg-main-background border border-gray-300 text-gray-900 text-[.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5 w-full">
                <option value=""></option>
                <option value="0" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == 0) selected @endif>None</option>
                <option value="1" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == 1) selected @endif>Jr</option>
                <option value="2" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == 2) selected @endif>I</option>
                <option value="3" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == 3) selected @endif>II</option>
                <option value="4" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == 4) selected @endif>III</option>
                <option value="5" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == 5) selected @endif>IV</option>
                <option value="6" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == 6) selected @endif>V</option>
                <option value="7" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == 7) selected @endif>VI</option>
              </select>

              <span   
                id="input_error4" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>


          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Numero sa Telepono or Cellphone ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Tel Number -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="father_phone" 
                  name="father_phone" 
                  class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->father_phone) ? $enrollment->father_phone : old('father_phone') }}"
                ></div>

              <span   
                id="input_error5" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">

            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Email ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" 
                id="email_ng_ama" 
                name="email_ng_ama" 
                class="text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                value="{{ isset($enrollment->email_ng_ama) ? $enrollment->email_ng_ama : old('email_ng_ama') }}"
                ></div>

              <span   
                id="input_error6" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
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
                <input 
                  required 
                  type="text" 
                  id="lastName_ng_ina"  
                  name="lastName_ng_ina" 
                  class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->lastName_ng_ina) ? $enrollment->lastName_ng_ina : old('lastName_ng_ina') }}"
                ></div>

              <span   
                id="input_error7" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Firstname (Pangalan ng Ina ng bata)<span class="text-red-600">*</span></b>
              
              </div>

              <!-- Firstname -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="firstName_ng_ina" 
                  name="firstName_ng_ina" 
                  class=" text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->firstName_ng_ina) ? $enrollment->firstName_ng_ina : old('firstName_ng_ina') }}"
                ></div>

              <span   
                id="input_error8" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Middlename (Gitnang pangalan ng Ina ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middlename -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="middleName_ng_ina" 
                  name="middleName_ng_ina" 
                  class=" text-[.90rem] block w-full p-.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                  value="{{ isset($enrollment->middleName_ng_ina) ? $enrollment->middleName_ng_ina : old('middleName_ng_ina') }}"
                ></div>

              <span   
                id="input_error9" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Extension Name ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Extension Name -->
              <select id="extensionName_ng_ina" name="extensionName_ng_ina" class="bg-main-background border border-gray-300 text-gray-900 text-[1rem] rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-full">
                <option value=""></option>
                <option value="0" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == 0) selected @endif>None</option>
                <option value="1" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == 1) selected @endif>Jr</option>
                <option value="2" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == 2) selected @endif>I</option>
                <option value="3" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == 3) selected @endif>II</option>
                <option value="4" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == 4) selected @endif>III</option>
                <option value="5" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == 5) selected @endif>IV</option>
                <option value="6" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == 6) selected @endif>V</option>
                <option value="7" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == 7) selected @endif>VI</option>
              </select>

              <span   
                id="input_error10" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Numero sa Telepono or Cellphone ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Tel Number -->
                <input required type="text" 
                    id="mother_phone" 
                    name="mother_phone" 
                    class="text-[.94rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                    value="{{ isset($enrollment->mother_phone) ? $enrollment->mother_phone : old('mother_phone') }}"
                  ></div>

              <span   
                id="input_error11" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Email ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" 
                  id="email_ng_ina" 
                  name="email_ng_ina" 
                  class="text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" 
                  value="{{ isset($enrollment->email_ng_ina) ? $enrollment->email_ng_ina : old('email_ng_ina') }}"
                  ></div>

              <span   
                id="input_error12" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
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
                <input required type="text"
                                id="lastName_ng_guardian"
                                name="lastName_ng_guardian"
                                class="text-[.90rem] block w-full p-25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500"
                                value="{{ isset($enrollment) ? $enrollment->lastName_ng_guardian : old('lastName_ng_guardian') }}"
                                >

              <span   
                id="input_error13" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Firstname (Pangalan ng Guardian ng bata)<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Firstname -->
              <div class="mb-1">
                <input required type="text" 
                id="firstName_ng_guardian" 
                name="firstName_ng_guardian" 
                class="text-[0.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" 
                value="{{ isset($enrollment->firstName_ng_guardian) ? $enrollment->firstName_ng_guardian : old('firstName_ng_guardian') }}">
              </div>

              <span   
                id="input_error14" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Middlename (Gitnang pangalan ng Guardian ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middlename -->
              <div class="mb-1">
                <input required type="text" 
                id="middleName_ng_guardian" 
                name="middleName_ng_guardian" 
                class="text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" 
                value="{{ isset($enrollment->middleName_ng_guardian) ? $enrollment->middleName_ng_guardian : old('middleName_ng_guardian') }}">
              </div>

              <span   
                id="input_error15" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 w-full">

            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="balikAral">Extension Name ng Guardian ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <select id="extensionName_ng_guardian" name="extensionName_ng_guardian" class="bg-main-background border border-gray-300 text-gray-900 text-[.90rem] rounded-lg focus:ring-blue-500 focus:border-blue-500  block  p-2.5 w-full">
                <option value=""></option>
                <option value="0" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == 0 ? 'selected' : '' }}>None</option>
                <option value="1" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == 1 ? 'selected' : '' }}>Jr</option>
                <option value="2" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == 2 ? 'selected' : '' }}>I</option>
                <option value="3" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == 3 ? 'selected' : '' }}>II</option>
                <option value="4" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == 4 ? 'selected' : '' }}>III</option>
                <option value="5" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == 5 ? 'selected' : '' }}>IV</option>
                <option value="6" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == 6 ? 'selected' : '' }}>V</option>
                <option value="7" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == 7 ? 'selected' : '' }}>VI</option>
              </select>

              <span   
                id="input_error16" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
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
                <input required type="text" 
                id="guardian_phone" 
                name="guardian_phone" 
                class="text-[.90rem] block w-full p.25 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" 
                value="{{ isset($enrollment->guardian_phone) ? $enrollment->guardian_phone : old('guardian_phone') }}">
              </div>

              <span   
                id="input_error17" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="paaralan">Email ng Guardian ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" 
                id="email_ng_guardian" 
                name="email_ng_guardian" 
                class="text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" 
                value="{{ isset($enrollment->email_ng_guardian) ? $enrollment->email_ng_guardian : old('email_ng_guardian') }}">
              </div>

              <span   
                id="input_error18" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-main-background flex flex-col items-start justify-center p-[2rem] gap-[1.5rem] border-[1px] border-solid border-main-green-secondary-100 redBorder">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start pb-4">
                
                <b class="relative text-[.94rem] font-medium leading-[140%] font-button text-main-text text-left" for="panuruangTao">Kabilang ba ang pamilya ng bata sa 4ps ng DSWD?
                  <span class="text-red-600">*</span></b>
              
              </div>

              <!-- 4ps -->
              <div class="flex items-center mb-4">

                <input 
                  required 
                  id="4ps_yes" 
                  type="radio" 
                  value="1" 
                  name="fourps" 
                  class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  onchange="fourPsForm()"
                  {{ isset($enrollment->fourps) && $enrollment->fourps == 1 ? 'checked' : '' }}
                >
                
                <label for="default-radio-1" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Oo</label>
              
              </div>
              
              <div class="flex items-center">
              
                <input 
                  required 
                  id="4ps_no" 
                  type="radio" 
                  value="0" 
                  name="fourps" 
                  class="w-4 h-4 text-green-800 border-gray-300 border-2 focus:ring-green-800 dark:focus:ring-green-800 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-600"
                  onchange="fourPsForm()"
                  {{ isset($enrollment->fourps) && $enrollment->fourps == 0 ? 'checked' : '' }}
                >
              
                <label for="default-radio-2" class="ml-2 text-sm font-normal text-gray-900 dark:text-gray-900">Hindi</label>
              
              </div>

              <span   
                id="input_error-radio" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
                          
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
                <input type="text" 
                id="fourps_id" 
                name="fourps_id"
                placeholder="123456789-1234-1234"
                class="text-[.90rem] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-main-background sm:text-md focus:ring-blue-500 focus:border-blue-500" 
                value="{{ isset($enrollment->fourps_id) ? $enrollment->fourps_id : old('fourps_id') }}">
              </div>

              <span   
                id="input_error19" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <script>
            function fourPsForm() {
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
              <button type="button" class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap" id="backBtn">Back</button>
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
