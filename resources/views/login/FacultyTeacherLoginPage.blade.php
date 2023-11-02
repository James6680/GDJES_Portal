<!DOCTYPE html>
<html lang="en">
  <head>
  @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/teacher_Login_validation.js'])
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Faculty/Teacher Login Page</title>
    <link rel="icon" href="{{url('assets/GDJES Logo.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank Ruhl Libre:wght@400;700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap"/>

    <style>
      .background-effect {
        filter: blur(4px) brightness(75%);
        margin: -3px;
      }
    </style>

  </head>

  <body class="m-0 p-0">

    <main
      class="relative w-full min-h-full overflow-hidden flex flex-row items-center justify-center lg:w-auto lg:[align-self:unset] lg:gap-[0.38rem] md:flex md:flex-col md:gap-[-2.25rem] sm:h-auto sm:pt-[0rem] sm:pr-[0rem] sm:pb-[0-]"
    >

    <section
      class="shrink-0 self-stretch flex-1 overflow-hidden flex flex-col items-start justify-center py-[10rem] px-[6.25rem] relative gap-[4rem] bg-cover bg-no-repeat  text-left  text-[1.25rem] font-heading-2-bold lg:flex-1 lg:gap-[3.94rem] lg:pr-[5rem] lg:box-border md:hidden md:pl-[2.5rem] md:pr-[6.25rem] md:box-border md:flex-[unset] md:self-stretch"
      style="background-image: url('./assets/leftdiv1@3x.png'); "
    >

        <div class="self-stretch flex flex-row items-center justify-center z-[0]">

          <h2 class="m-0 flex-1 relative leading-[140%] font-normal font-inherit lg:text-[1.55rem]" style="background: conic-gradient(from 223.89deg at 50% 50%, #fffdf9 0deg, #d7ba82 97.77deg, #faf6ef 306.23deg, #fffdf9 360deg, #d7ba82 457.77deg); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 283px 79px rgba(255, 249, 240, 0), 0px 181px 72px rgba(255, 249, 240, 0.01), 0px 102px 61px rgba(255, 249, 240, 0.05), 0px 45px 45px rgba(255, 249, 240, 0.09), 0px 11px 25px rgba(255, 249, 240, 0.1), 0px 0px 0px rgba(255, 249, 240, 0.1); color: transparent;">
            <p class="m-0">Ang iyong ikalawang tahanan</p>
            <p class="m-0">tungo sa mahusay na kinabukasan.</p>
          </h2>

        </div>

        <div class="self-stretch flex flex-row items-center justify-center gap-[0.5rem] cursor-pointer z-[2] text-[2.06rem]">

          <img
            class="relative w-[4rem] h-[4rem] overflow-hidden shrink-0 object-cover"
            alt=""
            src="./assets/GDJES Logo.png"
          />

          <div class="flex-1 flex flex-col items-start justify-start  ">
           
            <h1 
            class="m-0 text-[2.90rem] self-stretch relative leading-[140%] font-bold font-inherit lg:text-[2.4rem]" style="background: conic-gradient(from 223.89deg at 50% 50%, #fffdf9 0deg, #d7ba82 97.77deg, #faf6ef 306.23deg, #fffdf9 360deg, #d7ba82 457.77deg); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 283px 79px rgba(255, 249, 240, 0), 0px 181px 72px rgba(255, 249, 240, 0.01), 0px 102px 61px rgba(255, 249, 240, 0.05), 0px 45px 45px rgba(255, 249, 240, 0.09), 0px 11px 25px rgba(255, 249, 240, 0.1); color: transparent;">
              GREGORIA DE JESUS
            </h1>

            <h3 
            class="m-0 self-stretch relative text-[1.19rem] leading-[100%] font-normal font-button lg:text-[1rem]" style="background: conic-gradient(from 223.89deg at 50% 50%, #fffdf9 0deg, #d7ba82 97.77deg, #faf6ef 306.23deg, #fffdf9 360deg, #d7ba82 457.77deg); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 283px 79px rgba(255, 249, 240, 0), 0px 181px 72px rgba(255, 249, 240, 0.01), 0px 102px 61px rgba(255, 249, 240, 0.05), 0px 45px 45px rgba(255, 249, 240, 0.09), 0px 11px 25px rgba(255, 249, 240, 0.1); color: transparent;">
              ELEMENTARY SCHOOL - MANILA
            </h3>

          </div>

        </div>

      </section>

      <section
      class="self-stretch bg-yellow-400 w-[46rem] overflow-hidden shrink-0 flex flex-col items-center justify-center py-10 px-[7.25rem] box-border relative gap-[3rem] ml-[-2.25rem] text-left text-[1.44rem] text-brown-50 font-heading-2-bold lg:w-auto lg:[align-self:unset] lg:pl-[3.75rem] lg:pr-[3.75rem] lg:box-border md:self-stretch md:w-auto md:flex-1 md:gap-[3rem] md:items-center md:justify-center md:pl-[4.69rem] md:pt-[7.25rem] md:pr-[2.5rem] md:box-border sm:self-stretch sm:w-auto sm:items-center sm:justify-center sm:py-[6.25rem] sm:pr-[1.56rem] sm:pl-[3.75rem] sm:box-border"
      >

      <div class="flex flex-col items-center justify-center gap-[0.5rem] cursor-pointer z-[1]">
        
        <img
          class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover"
          alt=""
          src="./assets/GDJES Logo.png"
        />

        <div class="flex flex-col items-start justify-start ">
          
          <h2 class="m-0 relative text-inherit leading-[140%] font-bold font-inherit">
            GREGORIA DE JESUS
          </h2>

          <h4 class="m-0 self-stretch relative text-[0.69rem] leading-[140%] font-normal font-button text-center">
            ELEMENTARY SCHOOL - MANILA
          </h4>

        </div>

      </div>

      <form
        class="self-stretch rounded-lg bg-green-50 flex flex-col items-center justify-center p-[2.1rem] gap-[1.5rem] z-[2] lg:self-stretch lg:w-auto lg:pl-[2.5rem] md:self-stretch md:w-auto md:h-auto md:pl-[2.5rem] md:pr-[2.5rem] sm:pl-[2rem] sm:box-border"
        novalidate>

        <h1
          class="m-0 self-stretch relative text-[1.75rem] leading-[110%] font-bold font-heading-2-bold text-green-800 text-center">
          <p class="m-0">Admin and Faculty</p>
          <p class="m-0">Portal Login</p>
        </h1>

        <div class="self-stretch flex flex-col items-start justify-start gap-[0.5rem]">
          <h3
            class="m-0 relative text-[1rem] leading-[140%] font-normal font-button text-brown-500 text-left flex items-center w-[19.13rem]">
            Welcome back!
          </h3>

          <h4 
            class="m-0 self-stretch relative text-[0.81rem] leading-[140%] font-normal font-button text-green-800 text-left"> 
            Login to access your student portal 
          </h4>
        
        </div>

        <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">
          
          <div class="self-stretch relative bg-brown-300 h-[0.13rem] overflow-hidden shrink-0"></div>

          <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">

            <div class="self-stretch flex flex-col items-start justify-start gap-[1rem] ">

              <b 
                class="self-stretch relative text-[0.81rem] leading-[140%] flex font-button text-green-800 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap h-[1.19rem] shrink-0">
                EMAIL ADDRESS
              </b>
          
              <div class="flex flex-col self-stretch input-container relative">

                <input
                  class="font-button text-[0.81rem] bg-green-50 self-stretch rounded-lg flex items-center justify-start p-[1rem] border-[1px] border-brown-400 text-gray-900 focus:border-brown-700 focus:ring-brown-700 focus:border-[1px]"
                  placeholder="juandelacruz@gmail.com"
                  type="text"
                  required
                  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                  autocomplete="off"
                  id="email"
                />
          
                <span 
                  id="email-error" 
                  class="hidden mt-1 text-sm text-red-600 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                  ❌ Maari bang maglagay ka ng wastong email address
                </span>

              </div>

            </div>
          
            <div class="self-stretch flex flex-col items-start justify-start gap-[1rem]">
              
              <b 
                class="self-stretch relative text-[0.81rem] leading-[140%] flex font-button text-main-green-secondary-700 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap h-[0.81rem] shrink-0">
                PASSWORD
              </b>
          
              <div class="flex flex-col self-stretch relative">

                <input
                  class="font-button text-[0.81rem] bg-green-50 self-stretch rounded-lg flex flex-row items-center justify-start p-[1rem] border-[1px] focus:border-[1px] border-brown-400 text-gray-900 focus:border-brown-700 focus:ring-brown-700"
                  placeholder="Enter your password"
                  type="password"
                  :type="show ? 'password' : 'text'"
                  required
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                  id="password"
                  autocomplete="off"
                />
          
                <span 
                  id="password-error" 
                  class="hidden mt-1 text-sm text-red-600 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                  ❌ Ang iyong password ay dapat may hindi bababa sa 6 na karakter
                </span>
          
                <div class="absolute top-3 right-0 flex flex-row items-center m-0 p-0">
                  <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                  <label class="hover:text-gray-900 rounded font-heading-2-bold px-2 py-2 text-[0.81rem] text-green-500 cursor-pointer js-password-label relative" for="toggle">Show</label>
                </div>
          
              </div>
            
            </div>
          
          </div>
          
          <a
            class="[text-decoration:none] self-stretch relative text-[0.81rem] leading-[100%] text-green-500 text-center"
            id="myBtn"
          >

            <span class="font-button">Forgot your password? </span>

            <b class="font-button" id="forgotPasword_link">
              <span class="[text-decoration:underline] hover:text-gray-900 cursor-pointer">Click here</span>.
            </b>

          </a>

          <button
            id="login-button"
            type="submit"
            class="cursor-pointer [border:none] py-[1rem] px-[2.13rem] bg-brown-500 self-stretch rounded-lg flex flex-row items-center justify-center hover:bg-yellow-400">
            
            <div class="relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-50 text-left">Login</div>
          </button>
        
        </div>

        <div class="self-stretch relative bg-brown-300 h-[0.13rem] overflow-hidden shrink-0"></div>
        
        <div class="self-stretch flex flex-col items-start justify-start gap-[.9rem]">
          
          <div
            class="self-stretch relative text-[0.81rem] leading-[140%] font-button text-brown-500 text-center">
            <p class="m-0">Don't have an account yet?</p>
          </div>

          <button
            class="cursor-pointer py-[1rem] px-[2.13rem] bg-[transparent] self-stretch rounded-lg flex flex-row items-center justify-center border-[1px] border-solid border-brown-500 hover:border-[2px] hover:border-solid hover:border-brown-900"
            id="adminContact">
            <div
              class="flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-brown-500 text-center">
              contact our admin here
            </div>

          </button>

        </div>

      </form>

    </section>

    </main>

    <div id="myModal" class="hidden fixed top-0 left-0 right-0 z-50  w-full p-3 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full items-center justify-center drop-shadow-2xl">

      <form
      class=" rounded-lg bg-green-50 flex flex-col items-center justify-center p-[2.5rem] gap-[1rem] z-[2] lg:w-auto lg:pl-[2.5rem] md:w-auto md:h-auto md:pl-[2.5rem] md:pr-[2.5rem] sm:pl-[2rem] sm:box-border"
      novalidate
      style="width: 30%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 400px;">

          <h1
          class="m-0 self-stretch relative text-[1.75rem] leading-[110%] font-bold font-heading-2-bold text-green-800 text-center">
          Forgot Password?
          </h1>

          <div class="self-stretch flex-col items-center justify-center gap-[0.5rem]">

              <h3
                  class="m-0 relative text-[1rem] leading-[140%] font-normal font-button text-green-800 text-center  items-center self-stretch">
                  Enter your email address, and we'll send you an email with a unique link to reset your password.
              </h3>
          
          </div>

          <div class="self-stretch flex flex-col items-start justify-start gap-[1.5rem]">
          
          <div class="self-stretch relative bg-green-500 h-[0.13rem] overflow-hidden shrink-0"></div>

          <div class="self-stretch flex flex-col items-start justify-start gap-[1.3rem]">

              <div class="self-stretch flex flex-col items-start justify-start gap-[1.3rem] ">

                  <b 
                      class="self-stretch relative text-[0.81rem] leading-[140%] flex font-button text-green-800 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap h-[1.19rem] shrink-0">
                      EMAIL ADDRESS
                  </b>
              
                  <div class="flex flex-col self-stretch input-container relative">

                      <input
                      class="font-button text-sm bg-green-50 self-stretch rounded-lg flex items-center justify-start p-4 border-[1px] border-brown-500 focus:border-brown-700 focus:ring-brown-700 border-solid focus:border-[1px] mb-1"
                      placeholder="juandelacruz@gmail.com"
                      type="text" 
                      required=""
                      pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                      autocomplete="off"
                      id="email"
                      />

                  </div>

              </div>
          
          </div>

          <button
              id="RequestPassword"
              type="button"
              class="cursor-pointer py-[1rem] px-[2.13rem] bg-brown-500 self-stretch rounded-lg flex flex-row items-center justify-center relative text-[1rem] leading-[140%] uppercase font-button text-brown-50 hover:bg-yellow-400"
              style="border: none;">
              Request New Password
          </button>

          
          </div>

          
          <div class="self-stretch flex flex-col items-start justify-start">

          <button
              class="cursor-pointer py-[1rem] px-[2.13rem] bg-[transparent] self-stretch rounded-lg flex flex-row items-center justify-center border-[1px] border-solid border-brown-500 hover:border-[2px] hover:border-solid hover:border-brown-700 flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-brown-500 text-center"
              data-modal-hide="default-modal"
              type="button">
              Sign in
          </button>

          </div>

      </form>

    </div>

    <script>
      var modal = document.getElementById("myModal");
      var btn = document.getElementById("myBtn");
      var backgroundContent = document.querySelector("body > :not(#myModal)");

      // When the user clicks the button, open the modal and add the blur class to the background content
      btn.onclick = function() {
        modal.style.display = "block";
        backgroundContent.classList.add("background-effect"); // Add the blur class to the background content
      }

      // When the user clicks anywhere outside of the modal, close it and remove the blur class from the background content
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
          backgroundContent.classList.remove("background-effect"); // Remove the blur class from the background content
        }
      }
    </script>

  </body>

</html>