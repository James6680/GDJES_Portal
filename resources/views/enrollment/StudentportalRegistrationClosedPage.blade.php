
<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css'])
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
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[7.5rem] px-[15rem] box-border bg-cover bg-no-repeat bg-center lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[10.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border"
  style="background-image: url('./assets/bg_page.png');">

    <section class="flex-1 flex flex-col items-center justify-center gap-[2.5rem] text-center text-[1.44rem] text-main-background font-heading-2 md:gap-[1.88rem]">

    
    <!-- Logo Container -->
    <div class="h-[7.31rem] flex flex-col items-center justify-center gap-[0.5] cursor-pointer" id="logoContainer">

      <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="GDJES Logo" src="./assets/GDJES Logo.png" />

      <div class="flex flex-col items-start justify-start gap-[0rem]">

        <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-heading-2-bold overflow-hidden text-ellipsis whitespace-nowrap">GREGORIA DE JESUS</h2>

        <div class="self-stretch  relative text-[0.69rem] leading-[140%] text-center">ELEMENTARY SCHOOL - MANILA</div>

      </div>

    </div>


      <form class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center py-[2.5rem] px-[2.5rem] gap-[1.4rem] w-10/12 
            "
            action="StudentportalRegistrationCompletedPage">

        <h1 class="m-0 self-stretch relative text-[1.80rem] leading-[110%] font-bold font-heading-2-bold text-main-green-secondary-700 text-center md:text-2xl">Magandang Araw!</h1>
        
        <div class="self-stretch flex flex-col items-center justify-start gap-[2rem]">

          <div class="flex flex-col gap-[.7rem]">
            <div class="self-stretch relative text-[1.11rem] leading-[140%] font-button text-main-brown-primary-500 text-center font-semibold">
              Hindi pa bukas ang enrollment sa ating school year.
            </div>
            <div class="self-stretch relative text-[0.81rem] leading-[160%] font-button text-main-green-secondary-700  text-start">
              Sa ngalan ng Gregoria de Jesus Elementary School - Manila, kami'y nagpapasalamat sa iyong interes na maging bahagi ng aming pamilya ng paaralan! Sa kasalukuyan, wala pa pong bukas na enrollment period para sa susunod na school year. Pero huwag mag-alala, ipapaalam namin sa'yo kapag handa na.
            </div>
          </div>


          <div class="flex flex-col gap-[2rem]">

            <div class="self-stretch relative text-[0.81rem] leading-[160%] font-button text-main-green-secondary-700 text-start">Nagmamalasakit kaming makasama ka sa aming pamilya ng paaralan. Kung may mga katanungan, huwag kang mag-atubiling magtanong sa aming koponan ng admissions sa <a href="#" class="underline hover:text-green-700"> gdjes.manila@deped.gov.ph.</a></div>

            <div class="self-stretch relative text-[.81rem] leading-[140%] font-button text-main-brown-primary-500 text-start font-semibold">Hanggang sa muli!</div>

            <div class="self-stretch rounded-lg bg-main-green-secondary-500 flex flex-row items-center justify-center px-[2.13rem] py-[1rem] hover:bg-darkslategray-200 hover:shadow-darkslategray-200  [&_.next]:hover:text-main-brown-primary-50">
            
              <button id="homepageBtn" type="button" class="next cursor-pointer p-0 bg-[transparent] flex-1 relative text-[1rem] leading-[140%] uppercase font-medium font-button text-main-brown-primary-50 text-center inline-block" >GO BACK TO HOMEPAGE</button>
            
            </div>

            <script>
              // Get a reference to the button element
              var navigateButton = document.getElementById("homepageBtn");
      
              // Add a click event listener to the button
              navigateButton.addEventListener("click", function() {
                  // Set the new URL to navigate to
                  var newURL = "StudentLoginPage.html"; // Replace with the desired URL
      
                  // Navigate to the new URL
                  window.location.href = newURL;
              });
            </script>

          </div>  

        </div>  
      
        
    
      </form>
    
    </section>
  
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>
</html>