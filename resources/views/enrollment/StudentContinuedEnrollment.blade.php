<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css'])
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Added initial-scale for responsiveness -->
  <title>Student Enrollment</title>
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
            action="{{ route('enrollment.StudentContinuedEnrollment.post')}}">
    @csrf
    @method('post')
        <input type="hidden" id="idValue" name="id" value="{{$enrollment->student_id}}">
        <h1 class="m-0 self-stretch relative md:text-2xl text-base leading-[110%] font-extrabold font-frl text-green-700 text-center">Student Enrollment for Students Who Finished School Year</h1>

        <div class="self-stretch flex flex-col items-center justify-start md:gap-2 gap-0">

          <div class="self-stretch relative md:text-base text-sm leading-[140%] font-mulish text-brown-500 text-center">Welcome to the student portal enrollment form</div>

          <div class="self-stretch relative text-xs leading-[140%] font-mulish text-green-700 text-center">Please fill out all the necessary information below.</div>

        </div>
        <div class="self-stretch flex flex-col items-start justify-start md:gap-4 gap-2">

            <div class="self-stretch rounded-[5px] bg-white flex flex-col items-start justify-center md:p-8 p-5 gap-6 border-[1px] border-solid border-green-100 w-full">
              
              <div id="balikAralInfo" class="flex flex-col w-full">
               
                <div class="self-stretch flex flex-col items-start justify-start md:pb-4 pb-3">
                  
                  <b class="relative md:text-sm text-xs font-medium leading-[140%] font-mulish text-black text-left" for="balikAral">Baitang na papasukan sa susunod na taon<span class="text-red-600">*</span></b>
                
                </div>
                <!-- Grade Level -->
                <select id="grade_level" disabled
                  name="grade_level" 
                  class="bg-white border border-gray-300 text-gray-900 md:text-sm text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500  block md:p-2.5 md:py-2.5 p-2.5 py-2 w-full">
                  <option value=""  @if(isset($enrollment->grade_level) && $enrollment->grade_level == null) selected @endif>Pumili ng huling baitang na nais pasukan</option>
                  <option value="0" @if(isset($enrollment->grade_level) && $enrollment->grade_level == 0 ) selected @endif>Kinder pero hindi natapos</option>
                  <option value="1" @if((isset($enrollment->grade_level) && $enrollment->grade_level == 1 && $enrollment->aralStatus == "HINDI")  || $enrollment->aralStatus != "HINDI" && $enrollment->returnee+1 == 1) selected @endif>KINDER</option>
                  <option value="2" @if((isset($enrollment->grade_level) && $enrollment->grade_level == 2 && $enrollment->aralStatus == "HINDI")  || $enrollment->aralStatus != "HINDI" && $enrollment->returnee+1 == 2) selected @endif>Grade 1</option>
                  <option value="3" @if((isset($enrollment->grade_level) && $enrollment->grade_level == 3 && $enrollment->aralStatus == "HINDI")  || $enrollment->aralStatus != "HINDI" && $enrollment->returnee+1 == 3) selected @endif>Grade 2</option>
                  <option value="4" @if((isset($enrollment->grade_level) && $enrollment->grade_level == 4 && $enrollment->aralStatus == "HINDI")  || $enrollment->aralStatus != "HINDI" && $enrollment->returnee+1 == 4) selected @endif>Grade 3</option>
                  <option value="5" @if((isset($enrollment->grade_level) && $enrollment->grade_level == 5 && $enrollment->aralStatus == "HINDI")  || $enrollment->aralStatus != "HINDI" && $enrollment->returnee+1 == 5) selected @endif>Grade 4</option>
                  <option value="6" @if((isset($enrollment->grade_level) && $enrollment->grade_level == 6 && $enrollment->aralStatus == "HINDI")  || $enrollment->aralStatus != "HINDI" && $enrollment->returnee+1 == 6) selected @endif>Grade 5</option>
                  <option value="7" @if((isset($enrollment->grade_level) && $enrollment->grade_level == 7 && $enrollment->aralStatus == "HINDI")  || $enrollment->aralStatus != "HINDI" && ($enrollment->returnee + 1 == 7 || $enrollment->returnee + 1 == 8)) selected @endif>Grade 6</option>
                </select>
                <!-- Error Message for Ano ang huling baitang na natapos? -->
                <span   
                  id="input-error1" 
                  class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                  ❌ Maari bang punan muna ang katanungan bago lumipat sa sunod na pahina.
                </span>
              
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
            <div class="self-stretch md:rounded-lg rounded-md bg-green-500 flex flex-row items-center justify-center md:py-3.5 py-2.5  hover:text-white hover:shadow-md w-full hover:shadow-green-700/50 hover:bg-green-900"> 
              <button type="button" id="nextBtn" class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-base leading-[140%] uppercase font-medium font-mulish  text-brown-50 text-center inline-block">next</button>
            </div>
          
          </div>

        </div>

      </form>
    
    </section>
  
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script>
//--------------------------------------------------------|
// Main Form Validation SEction
// Get references to the form elements and the div element
var submitButton = document.getElementById("nextBtn");
var learningCheckboxes = document.querySelectorAll('input[name="learning_info[]"]');
var distanceRadioButtons = document.querySelectorAll('input[name="distance_learning"]');
var learningErrorSpan = document.getElementById("learning-error");
var distanceErrorSpan = document.getElementById("distance-error");
var radioRedBorderDiv = document.getElementById("radioRedBorder");
var checkboxRedBorderDiv = document.getElementById("checkboxRedBorder");

// Function to hide error messages for learning checkboxes
function hideLearningError() {
  learningErrorSpan.style.display = "none";
  checkboxRedBorderDiv.style.border = "none"; // Remove the red border
}

// Function to hide error messages for distance radio buttons
function hideDistanceError() {
  distanceErrorSpan.style.display = "none";
  radioRedBorderDiv.style.border = "none"; // Remove the red border
}

// Function to submit the form and redirect to the next page
function submitForm() {
  // Check if at least one checkbox is checked
  var isCheckboxChecked = Array.from(learningCheckboxes).some(function (checkbox) {
    return checkbox.checked;
  });

  // Check if at least one radio button is selected
  var isRadioButtonSelected = Array.from(distanceRadioButtons).some(function (radio) {
    return radio.checked;
  });

  // If both requirements are met, submit the form and redirect
  if (isCheckboxChecked && isRadioButtonSelected) {
    document.getElementById("enrollment-page-5").submit() // Redirect to the next page
  } 
  else {
    if (!isCheckboxChecked) {
      learningErrorSpan.style.display = "block"; // Display the checkbox error message
      checkboxRedBorderDiv.style.border = "2px solid #ff4d6d"; // Add a red border
    } else {
      hideLearningError(); // Hide the checkbox error message
    }

    if (!isRadioButtonSelected) {
      distanceErrorSpan.style.display = "block"; // Display the radio button error message
      radioRedBorderDiv.style.border = "2px solid #ff4d6d"; // Add a red border
    } else {
      hideDistanceError(); // Hide the radio button error message
    }
  }
}
// Add click event listener to the submit button
submitButton.addEventListener("click", function (e) {
  submitForm();
});

// Add change event listener to checkboxes and radio buttons to hide their respective error messages and remove the red border on interaction
learningCheckboxes.forEach(function (checkbox) {
  checkbox.addEventListener("change", hideLearningError);
});

distanceRadioButtons.forEach(function (radio) {
  radio.addEventListener("change", hideDistanceError);
});

  </script>
</body>
</html>
