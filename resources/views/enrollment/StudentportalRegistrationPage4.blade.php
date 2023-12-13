
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
  <!-- Form Background  -->
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-20 md:px-60 px-52 bg-cover bg-repeat-y bg-top"
  style="background-image: url('./assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-8 text-left text-2xl text-white font-heading-2 md:gap-7">
    
      <!-- Logo Container -->
      <div class="h-[7.31rem] flex flex-col items-center justify-center gap-2 cursor-pointer" id="logoContainer">

        <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" 
        alt="" 
        src="./assets/GDJES Logo.png" />

        <div class="flex flex-col items-start justify-start ">

          <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-frl font-inherit overflow-hidden text-ellipsis whitespace-nowrap">GREGORIA DE JESUS</h2>

          <div class="self-stretch relative text-xs leading-[140%] text-center">ELEMENTARY SCHOOL - MANILA</div>
        
        </div>

      </div>

      <!-- Student Registration Form -->
      <form class=" rounded-lg bg-green-50 flex flex-col items-center justify-center lg:p-8 md:p-7 p-5 md:gap-4 gap-2 lg:w-[56rem] md:w-[43rem] w-[23rem]" 
      id="enrollment-page-4";
      method="post" 
      action="{{route('enrollment.StudentportalRegistrationPage4.post')}}">
      @csrf
      @method('post')

        <h1 class="m-0 self-stretch relative md:text-2xl text-base leading-[110%] font-extrabold text-green-700 text-center font-frl">Student Registration for First-time Enrollees</h1>

        <div class="self-stretch flex flex-col items-center justify-start md:gap-2 gap-1">

          <div class="self-stretch relative md:text-base text-sm leading-[140%] font-button text-brown-500 text-center">Welcome to the student portal registration form</div>

          <div class="self-stretch relative text-xs leading-[140%] font-mulish text-green-700 text-center">Please fill out all the necessary information below.</div>

        </div>

        <!-- Progress Bar -->
        <div class="self-stretch flex flex-row items-center justify-center md:py-6 py-3 lg:px-44 md:px-28 px-16">

          <!-- Progress #1 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-5  overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-1.5 p-4">
              1
            </div>

          </div>

          <div class="flex-1 relative bg-green-500 h-[0.31rem] overflow-hidden"></div>

          <!-- Progress #2 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-1.5 p-4">
              2
            </div>

          </div>

          <div class="flex-1 relative bg-green-500 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <!-- Progress #3 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-1.5 p-4">
              3
            </div>

          </div>

          <div class="flex-1 relative bg-main-green-secondary-500 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <!-- Progress #4 -->
          <div class="rounded-481xl bg-green-500 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-white text-left lg:px-3.5 md:px-2.5 px-1.5 p-4">
              4
            </div>

          </div>

          <div class="flex-1 relative bg-main-green-secondary-200 h-[0.31rem] overflow-hidden mix-blend-normal"></div>

          <!-- Progress #5 -->
          <div class="rounded-481xl bg-green-200 lg:h-9 md:h-7 h-5 overflow-hidden flex flex-col items-center justify-center p-0">

            <div class="relative md:text-sm text-xs leading-[140%] font-mulish text-green-300 text-left lg:px-3.5 md:px-2.5 px-1.5 p-4">
              5
            </div>

          </div>

        </div>

        <div class="self-stretch flex flex-col items-start justify-start md:gap-4 gap-2">

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Lastname (Apelyido ng Ama ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              <!-- Father's Information -->   
              <!-- Last Name -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="lastName_ng_ama" 
                  name="lastName_ng_ama" 
                  class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500"
                  value="{{ isset($enrollment->lastName_ng_ama) ? $enrollment->lastName_ng_ama : old('lastName_ng_ama') }}"
              ></div>

              <span   
                id="input_error1" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Firstname (Pangalan ng Ama ng bata)<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- First Name -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="firstName_ng_ama" 
                  name="firstName_ng_ama" 
                  class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-green-500 focus:border-green-500"
                  value="{{ isset($enrollment->firstName_ng_ama) ? $enrollment->firstName_ng_ama : old('firstName_ng_ama') }}"
                ></div>

              <span   
                id="input_error2" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Middlename (Gitnang pangalan ng Ama ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middle Name -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="middleName_ng_ama" 
                  name="middleName_ng_ama" 
                  class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-green-500 focus:border-green-500"
                  value="{{ isset($enrollment->middleName_ng_ama) ? $enrollment->middleName_ng_ama : old('middleName_ng_ama') }}"
                ></div>

              <span   
                id="input_error3" 
                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="balikAral">Extension Name ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              <script>
                console.log("{{session('enrollment')}}")
              </script>
              <select id="extensionName_ng_ama" name="extensionName_ng_ama" class="bg-transparent border-gray-300 text-gray-900 md:text-sm text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 w-full">
                <option value=""></option>
                <option value="None" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == "None") selected @endif>None</option>
                <option value="Jr" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == "Jr") selected @endif>Jr</option>
                <option value="I" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == "I") selected @endif>I</option>
                <option value="II" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == "II") selected @endif>II</option>
                <option value="III" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == "III") selected @endif>III</option>
                <option value="IV" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == "IV") selected @endif>IV</option>
                <option value="V" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == "V") selected @endif>V</option>
                <option value="VI" @if(isset($enrollment->extensionName_ng_ama) && $enrollment->extensionName_ng_ama == "VI") selected @endif>VI</option>
              </select>

              <span   
                id="input_error4" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Numero sa Telepono or Cellphone ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Tel Number -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="father_phone" 
                  name="father_phone" 
                  class=" md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500"
                  value="{{ isset($enrollment->father_phone) ? $enrollment->father_phone : old('father_phone') }}"
                ></div>

              <span   
                id="input_error5" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">

            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Email ng Ama ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" 
                id="email_ng_ama" 
                name="email_ng_ama" 
                class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-green-500 focus:border-green-500"
                value="{{ isset($enrollment->email_ng_ama) ? $enrollment->email_ng_ama : old('email_ng_ama') }}"
                ></div>

              <span   
                id="input_error6" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Lastname (Apelyido ng Ina ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Mother's Information --> 
              <!-- Lastname -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="lastName_ng_ina"  
                  name="lastName_ng_ina" 
                  class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-green-500 focus:border-green-500"
                  value="{{ isset($enrollment->lastName_ng_ina) ? $enrollment->lastName_ng_ina : old('lastName_ng_ina') }}"
                ></div>

              <span   
                id="input_error7" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Firstname (Pangalan ng Ina ng bata)<span class="text-red-600">*</span></b>
              
              </div>

              <!-- Firstname -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="firstName_ng_ina" 
                  name="firstName_ng_ina" 
                  class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500"
                  value="{{ isset($enrollment->firstName_ng_ina) ? $enrollment->firstName_ng_ina : old('firstName_ng_ina') }}"
                ></div>

              <span   
                id="input_error8" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Middlename (Gitnang pangalan ng Ina ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middlename -->
              <div class="mb-1">
                <input 
                  required 
                  type="text" 
                  id="middleName_ng_ina" 
                  name="middleName_ng_ina" 
                  class=" md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500"
                  value="{{ isset($enrollment->middleName_ng_ina) ? $enrollment->middleName_ng_ina : old('middleName_ng_ina') }}"
                ></div>

              <span   
                id="input_error9" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="balikAral">Extension Name ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Extension Name -->
              <select id="extensionName_ng_ina" name="extensionName_ng_ina" class="bg-transparent border border-gray-300 text-gray-900 md:text-sm text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 w-full">
                <option value=""></option>
                <option value="None" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == "None") selected @endif>None</option>
                <option value="jr" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == "jr") selected @endif>Jr</option>
                <option value="I" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == "I") selected @endif>I</option>
                <option value="II" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == "II") selected @endif>II</option>
                <option value="III" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == "III") selected @endif>III</option>
                <option value="IV" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == "IV") selected @endif>IV</option>
                <option value="V" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == "V") selected @endif>V</option>
                <option value="VI" @if(isset($enrollment->extensionName_ng_ina) && $enrollment->extensionName_ng_ina == "VI") selected @endif>VI</option>
              </select>

              <span   
                id="input_error10" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Numero sa Telepono or Cellphone ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Tel Number -->
                <input required type="text" 
                    id="mother_phone" 
                    name="mother_phone" 
                    class=" md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500"
                    value="{{ isset($enrollment->mother_phone) ? $enrollment->mother_phone : old('mother_phone') }}"
                  ></div>

              <span   
                id="input_error11" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Email ng Ina ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" 
                  id="email_ng_ina" 
                  name="email_ng_ina" 
                  class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500" 
                  value="{{ isset($enrollment->email_ng_ina) ? $enrollment->email_ng_ina : old('email_ng_ina') }}"
                  ></div>

              <span   
                id="input_error12" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Lastname (Apelyido ng Guardian ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Guardian's Information --> 
              <!-- Lastname -->
              <div class="mb-1">
                <input required type="text" id="lastName_ng_guardian" name="lastName_ng_guardian" class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500" value="{{ isset($enrollment) ? $enrollment->lastName_ng_guardian : old('lastName_ng_guardian') }}">
              </div>  
                
              <span   
                id="input_error13" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Firstname (Pangalan ng Guardian ng bata)<span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Firstname -->
              <div class="mb-1">
                <input required type="text" 
                id="firstName_ng_guardian" 
                name="firstName_ng_guardian" 
                class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500" 
                value="{{ isset($enrollment->firstName_ng_guardian) ? $enrollment->firstName_ng_guardian : old('firstName_ng_guardian') }}">
              </div>

              <span   
                id="input_error14" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Middlename (Gitnang pangalan ng Guardian ng bata) <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Middlename -->
              <div class="mb-1">
                <input required type="text" 
                id="middleName_ng_guardian" 
                name="middleName_ng_guardian" 
                class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500" 
                value="{{ isset($enrollment->middleName_ng_guardian) ? $enrollment->middleName_ng_guardian : old('middleName_ng_guardian') }}">
              </div>

              <span   
                id="input_error15" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">

            <div id="balikAralInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="balikAral">Extension Name ng Guardian ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <select id="extensionName_ng_guardian" name="extensionName_ng_guardian" class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500">
                <option value=""></option>
                <option value="None" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == "None" ? 'selected' : '' }}>None</option>
                <option value="jr" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == "jr" ? 'selected' : '' }}>Jr</option>
                <option value="I" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == "I" ? 'selected' : '' }}>I</option>
                <option value="II" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == "II" ? 'selected' : '' }}>II</option>
                <option value="III" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == "III" ? 'selected' : '' }}>III</option>
                <option value="IV" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == "IV" ? 'selected' : '' }}>IV</option>
                <option value="V" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == "V" ? 'selected' : '' }}>V</option>
                <option value="VI" {{ isset($enrollment->extensionName_ng_guardian) && $enrollment->extensionName_ng_guardian == "VI" ? 'selected' : '' }}>VI</option>
              </select>

              <span   
                id="input_error16" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Numero sa Telepono or Cellphone ng TAGAPAGALAGA/GUARDIAN ng bata
                  ang numerong ito ay kinakailangang TAMA dahil dito magpapadala ng mensahe ang paaralan kung kinakailangan <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Tel Number -->
              <div class="mb-1">
                <input required type="text" 
                id="guardian_phone" 
                name="guardian_phone" 
                class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500" 
                value="{{ isset($enrollment->guardian_phone) ? $enrollment->guardian_phone : old('guardian_phone') }}">
              </div>

              <span   
                id="input_error17" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Email ng Guardian ng bata <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- Email -->
              <div class="mb-1">
                <input required type="email" 
                id="email_ng_guardian" 
                name="email_ng_guardian" 
                class="md:text-sm text-xs] block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500" 
                value="{{ isset($enrollment->email_ng_guardian) ? $enrollment->email_ng_guardian : old('email_ng_guardian') }}">
              </div>

              <span   
                id="input_error18" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
            
            </div>
            
          </div>

          <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full redBorder">
            
            <div id="panuruangTao" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="panuruangTao">Kabilang ba ang pamilya ng bata sa 4ps ng DSWD?
                  <span class="text-red-600">*</span></b>
              
              </div>

              <!-- 4ps -->
              <div class="flex items-center mb-2">

                <input 
                  required 
                  id="4ps_yes" 
                  type="radio" 
                  value="1" 
                  name="fourps" 
                  class="w-4 h-4 text-green-500 border-gray-300 border-2 focus:ring-green-500 dark:focus:ring-green-800 dark:ring-offset-gray-500 focus:ring-1"
                  onchange="fourPsForm()"
                  {{ isset($enrollment->fourps) && $enrollment->fourps == 1 ? 'checked' : '' }}
                >
                
                <label for="default-radio-1" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Oo</label>
              
              </div>
              
              <div class="flex items-center">
              
                <input 
                  required 
                  id="4ps_no" 
                  type="radio" 
                  value="0" 
                  name="fourps" 
                  class="w-4 h-4 text-green-500 border-gray-300 border-2 focus:ring-green-500 dark:focus:ring-green-800 dark:ring-offset-gray-500 focus:ring-1"
                  onchange="fourPsForm()"
                  {{ isset($enrollment->fourps) && $enrollment->fourps == 0 ? 'checked' : '' }}
                >
              
                <label for="default-radio-2" class="ml-2 md:text-sm text-xs font-normal text-gray-900 dark:text-gray-900">Hindi</label>
              
              </div>

              <span   
                id="input_error-radio" 
                class="hidden pt-2 pl-0 font-medium text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
              </span>
                          
            </div>
            
          </div>

          <div id="4ps_form" class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full" style="display: none;">
            
            <div id="paaralanInfo" class="flex flex-col w-full">
             
              <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                
                <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="paaralan">Kung kabilang ang bata sa 4ps, Ilagay ang "HOUSEHOLD ID NUMBER". <span class="text-red-600">*</span></b>
              
              </div>
              
              <!-- 4ps Household ID --> 
              <!-- if others is selected get user input--> 
              <div class="mb-1">
                <input type="text" 
                id="fourps_id" 
                name="fourps_id"
                placeholder="123456789-1234-1234"
                class="md:text-sm text-xs block w-full p-2.5 text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-green-500 focus:border-green-500" 
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

            <div class="self-stretch md:rounded-lg rounded-md flex flex-row items-center justify-center md:py-3.5 py-2.5 w-1/2 border-[1px] border-solid border-brown-500 hover:box-border hover:border-brown-600 hover:border-[2px] hover:border-solid">
              <button type="button" class="cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-mulish text-brown-500 text-center inline-block overflow-hidden text-ellipsis whitespace-nowrap" id="backBtn">Back</button>
            </div>

            <div class="self-stretch md:rounded-lg rounded-md bg-green-500 flex flex-row items-center justify-center md:py-3.5 py-2.5 w-1/2  hover:text-white hover:shadow-md hover:shadow-green-700/50 hover:bg-green-900"> 
              <button type="button" id="nextBtn" class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-medium font-mulish text-brown-50 text-center inline-block">next</button>
            
            </div>

          </div>
        
        </div>

      </form>
    
    </section>
  
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>  
</body>
</html>
