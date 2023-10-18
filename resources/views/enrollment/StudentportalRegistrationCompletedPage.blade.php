
<!DOCTYPE html>
<html>
<head>
  @vite(['resources/js/app.js', 'resources/css/style.css'])
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <title>Student Registration Page 1</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank Ruhl Libre:wght@400;700&display=swap"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
  <link rel="icon" href="{{url('assets/frame-21@2x.png')}}" type="image/x-icon" />
</head>

<body class="m-0 p-0">

  <!-- Form Background  -->
  <div class="relative w-full h-full overflow-hidden flex flex-row items-center justify-center py-[7.5rem] px-[15rem] box-border bg-[url('/assets/studentportalregistrationpage101@3x.png')] bg-cover bg-no-repeat bg-center lg:flex-row lg:gap-[0rem] lg:items-center lg:justify-center lg:py-[11.25rem] lg:px-[9.38rem] lg:box-border md:flex-row md:gap-[0rem] md:items-center md:justify-center md:py-[8.75rem] md:px-[4.38rem] md:box-border sm:flex-row sm:gap-[0rem] sm:items-center sm:justify-center sm:py-[14.38rem] sm:px-[3.13rem] sm:box-border">

    <section class="flex-1 flex flex-col items-center justify-center gap-[2.5rem] text-center text-[1.44rem] text-main-background font-heading-2 md:gap-[1.88rem]">

    
    <!-- Logo Container -->
      <div class="h-[7.31rem] flex flex-col items-center justify-center gap-[0.5] cursor-pointer" id="logoContainer">

        <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="" src="assets/frame-21@2x.png" />

        <div class="flex flex-col items-start justify-start gap-[0rem]">

          <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-heading-2-bold overflow-hidden text-ellipsis whitespace-nowrap">GREGORIA DE JESUS</h2>

          <div class="self-stretch  relative text-[0.69rem] leading-[140%] text-center">ELEMENTARY SCHOOL - MANILA</div>

        </div>

      </div>

      <form class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center py-[2.5rem] px-[2.5rem] gap-[1.4rem] w-10/12 ">

        <h1 class="m-0 self-stretch relative text-[1.80rem] leading-[110%] font-bold font-heading-2-bold text-main-green-secondary-700 text-center md:text-2xl">Pagbati!</h1>
        
        <div class="self-stretch flex flex-col items-center justify-start gap-[2rem]">

          <div class="flex flex-col gap-[.7rem]">
            <div class="self-stretch relative text-[1.11rem] leading-[140%] font-button text-main-brown-primary-500 text-center font-semibold">Tagumpay na Naipasa ang Iyong Aplikasyon para sa Pag-eenroll!</div>

            <div class="self-stretch relative text-[0.81rem] leading-[160%] font-button text-main-green-secondary-700  text-start">Salamat sa pagpili mo sa Gregoria de Jesus Elementary School - Manila! Natanggap namin ang iyong aplikasyon para sa pag-eenroll at may kasiyahan kaming inaanyayahan ka sa aming komunidad ng paaralan.</div>
          
          </div>

          <div class="flex flex-col self-stretch gap-[.6rem]">
            
            <div class="self-stretch relative text-[.90rem] leading-[140%] font-button text-green-700 text-start font-semibold">Ano ang Susunod:</div>

            <div class="flex flex-col gap-[0rem] px-2">

              <div class="self-stretch relative text-[0.75rem] leading-[160%] font-button text-main-green-secondary-700 text-start">1. Mag-abang sa Iyong Inbox: Ipadadala namin ang iyong mga kredensyal para sa pag-login at karagdagang mga tagubilin sa email na iyong ibinigay. Siguruhing regular mong tinitingnan ang iyong email!
              </div>

              <div class="self-stretch relative text-[0.75rem] leading-[160%] font-button text-main-green-secondary-700 text-start">2. Ihanda ang Iyong mga Dokumento: Sa unang araw ng paaralan, mangyaring dalhin ang kinakailangang mga dokumento para sa pagsusuri. Ituturo ng aming koponan ang proseso at tiyakin na magkakaroon ka ng maayos na simula.</div>

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

  <script>
    var logoContainer = document.getElementById("logoContainer");
    if (logoContainer) {
      logoContainer.addEventListener("click", function (e) {
        // Please sync "landing-page" to the project
      });
    }
  </script>

 
</body>
</html>