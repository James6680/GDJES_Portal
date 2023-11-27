<!DOCTYPE html>
<html lang="en">
  <head>
    @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/js/student_Login_validation.js'])
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Student Login Page</title>
    <link rel="icon" href="{{url('assets/GDJES Logo.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank Ruhl Libre:wght@400;700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap"/>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .background-effect {
            filter: blur(4px) brightness(75%);
            margin: -3px;
        }

        @media screen and (max-width: 1024px) {
            #leftSection {
                display: none; /* Hide when screen width is 768px or less */
            }
        }
  </style>

  </head>

  <body>
    <!-- Main Container -->
    <div class="bg-white min-w-full min-h-full flex flex-row shrink-0 overflow-hidden">
    
        <!-- Left section container -->
        <div class="relative basis-auto h-auto shrink-0 flex-1 overflow-hidden flex flex-col items-start justify-center text-left text-xl gap-16 pl-7 -mb-2" style="background-image: url({{ asset('./assets/leftdiv@3x.png')}}); background-size: cover; background-repeat: no-repeat;" id="leftSection">

            <div class="flex flex-row items-center justify-center z-[0]">

                <h2 class="flex-1 font-frl font-medium relative lx:text-3xl text-2xl" style="background: conic-gradient(from 223.89deg at 50% 50%, #fffdf9 0deg, #d7ba82 97.77deg, #faf6ef 306.23deg, #fffdf9 360deg, #d7ba82 457.77deg); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 283px 79px rgba(255, 249, 240, 0), 0px 181px 72px rgba(255, 249, 240, 0.01), 0px 102px 61px rgba(255, 249, 240, 0.05), 0px 45px 45px rgba(255, 249, 240, 0.09), 0px 11px 25px rgba(255, 249, 240, 0.1), 0px 0px 0px rgba(255, 249, 240, 0.1); color: transparent;">
                    <p>Ang iyong ikalawang tahanan</p>
                    <p>tungo sa mahusay na kinabukasan.</p>
                </h2>

            </div>

            <div class="flex flex-row items-center justify-center gap-2 cursor-pointer z-[2] text-4xl">
            
                <img
                class="relative w-[4rem] h-[4rem] overflow-hidden shrink-0 object-cover"
                alt=""
                src="{{ asset('./assets/GDJES Logo.png')}}"
                />

                <div class="flex-1 flex flex-col items-start justify-start">
                
                <h1 class="xl:text-5xl text-[40px] relative font-bold font-frl" 
                style="background: conic-gradient(from 223.89deg at 50% 50%, #fffdf9 0deg, #d7ba82 97.77deg, #faf6ef 306.23deg, #fffdf9 360deg, #d7ba82 457.77deg); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 283px 79px rgba(255, 249, 240, 0), 0px 181px 72px rgba(255, 249, 240, 0.01), 0px 102px 61px rgba(255, 249, 240, 0.05), 0px 45px 45px rgba(255, 249, 240, 0.09), 0px 11px 25px rgba(255, 249, 240, 0.1); color: transparent;">
                    GREGORIA DE JESUS
                </h1>

                <h3 class="relative text-lg font-normal" 
                style="background: conic-gradient(from 223.89deg at 50% 50%, #fffdf9 0deg, #d7ba82 97.77deg, #faf6ef 306.23deg, #fffdf9 360deg, #d7ba82 457.77deg); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 283px 79px rgba(255, 249, 240, 0), 0px 181px 72px rgba(255, 249, 240, 0.01), 0px 102px 61px rgba(255, 249, 240, 0.05), 0px 45px 45px rgba(255, 249, 240, 0.09), 0px 11px 25px rgba(255, 249, 240, 0.1); color: transparent;">
                    ELEMENTARY SCHOOL - MANILA
                </h3>

                </div>

            </div>

        </div>

        <script>
            // JavaScript to toggle the visibility of the leftSection div
            function toggleLeftSection() {
            var leftSection = document.getElementById('leftSection');
            if (window.innerWidth <= 768) {
                leftSection.style.display = 'none';
            } else {
                leftSection.style.display = '';
            }
            }

            // Initial call to set the initial state based on the screen width
            toggleLeftSection();

            // Attach the toggleLeftSection function to the window resize event
            window.addEventListener('resize', toggleLeftSection);
        </script>
        
        <!-- Right section container -->
        <div class="relative basis-2/6 p-[1rem] min-h-full shrink-0 flex-1 bg-green-700 text-white overflow-hidden items-center justify-center font-frl text-left text-2xl">

            <div class="w-auto p-2 flex flex-col mx-auto gap-5 items-center my-20 justify-center">
                
                <div class="flex flex-col items-center justify-center gap-2 cursor-pointer z-[1]" >
            
                    <img
                        class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover"
                        alt=""
                        src="{{ asset('./assets/GDJES Logo.png')}}"
                    />

                    <div class="flex flex-col items-center justify-start font-frl">

                        <h2 class="relative text-inherit font-bold ">
                        GREGORIA DE JESUS
                        </h2>
                        
                        <h4 class=" relative text-xs font-normal text-center">
                        ELEMENTARY SCHOOL - MANILA
                        </h4>
                        
                    </div>
                    
                </div>






                <!--Added Access Error Message-->
                @if (Session::has('error'))
                <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                    <span class="font-medium">{{ Session::get('error') }}</span> 
                    </div>
                </div>
                @endif
                <!--End Added Access Error Message-->




                
                <form class="rounded-lg bg-green-50 flex font-frl flex-col items-center justify-center p-8 md:gap-4 gap-2"
                      action="{{ route('login.StudentLoginPage') }}" 
                      method="post" 
                      novalidate>

                    @csrf

                    <h1
                        class="relative text-3xl font-bold text-green-800 text-center">
                        Student Portal Login
                    </h1>

                    <div class="self-stretch flex flex-col font-mulish items-start justify-start md:gap-2 gap-0">

                        <h3
                        class="m-0 relative text-base font-normal  text-brown-600 text-left flex items-center">
                         Welcome back!
                        </h3>

                        <h4 
                        class="self-stretch relative text-xs font-normal text-green-800 text-left"> 
                        Login to access your student portal 
                        </h4>
                    
                    </div>

                    <!-- Login Form -->
                    <div class="self-stretch flex flex-col items-start justify-start md:gap-4 gap-3">
                        
                        <div class="self-stretch relative bg-brown-400 h-[0.13rem] overflow-hidden shrink-0"></div>
            
                        <div class="self-stretch flex flex-col items-start justify-start gap-4 ">

                            <!-- Username Address Field -->
                            <div class="self-stretch flex flex-col items-start justify-start md:gap-4 gap-2.5">

                                <b 
                                class="self-stretch relative text-xs flex font-mulish text-green-800 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap shrink-0">
                                USERNAME
                                </b>
                            
                                <div class="flex flex-col self-stretch input-container relative">

                                    <input
                                        class="font-button text-sm bg-green-50 self-stretch rounded-lg flex items-center justify-start md:p-4 p-3 border-[1px] focus:border-[1px] focus:ring-green-700 focus:border-green-700 text-gray-900"
                                        placeholder="Enter your username"
                                        type="text"
                                        required
                                        pattern="^[a-zA-Z]+\.[a-zA-Z]+\.2023$"
                                        autocomplete="off"
                                        id="username"
                                        name="username"
                                    />
                                    
                                    <!-- The Error Message for Email input -->
                                    <span 
                                        id="username-error" 
                                        class="hidden mt-1 text-sm font-medium text-red-600 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                        ❌ Maari bang maglagay ka ng wastong username
                                    </span>

                                </div>

                            </div>
                            
                            <!-- Password input field -->
                            <div class="relative self-stretch flex flex-col items-start justify-start md:gap-4 gap-2.5">
                                
                                <b 
                                class="self-stretch relative text-xs  lex font-mulish  text-green-800 text-left items-center overflow-hidden text-ellipsis whitespace-nowrapshrink-0">
                                PASSWORD
                                </b>
                            
                                <div class="flex flex-col self-stretch relative">

                                    <input
                                        class="font-button text-sm bg-green-50 self-stretch rounded-lg flex flex-row items-center justify-start md:p-4 p-3 border-[1px] focus:border-[1px] focus:ring-green-700 focus:border-green-700 text-gray-900"
                                        placeholder="Enter your password"
                                        type="password"
                                        :type="show ? 'password' : 'text'"
                                        required
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                        id="password"
                                        name="password"
                                        autocomplete="off"
                                    />
                                    
                                    <!-- The error message for password field -->
                                    <span 
                                        id="password-error" 
                                        class="hidden mt-1 text-sm text-red-600 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                        ❌ Ang iyong password ay dapat may hindi bababa sa 6 na karakter
                                    </span>
                                
                                    <div class="absolute top-3 right-0 flex flex-row items-center">

                                        <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                                        
                                        <label class="hover:text-green-400 rounded font-heading-2-bold px-2 md:py-2 py-1 text-xs text-green-900 cursor-pointer js-password-label " for="toggle">Show</label>
                                    
                                    </div>
                                
                                </div>
                            
                            </div>
                            
                        </div>
                        
                        <a class="[text-decoration:none] self-stretch relative text-xs text-green-500 text-center" id="myBtn">
                        <span class="font-button">Forgot your password? </span>

                            <b class="font-button" id="forgotPasword_link">
                                
                                <span class="[text-decoration:underline] hover:text-brown-900 cursor-pointer">Click here</span>
                            
                            </b>
                        </a>

                        <!-- commnet out id="loginBtn"-->
                        <button
                        
                        type="submit"
                        class="cursor-pointer [border:none] md:py-4 py-3 px-8 bg-green-500 self-stretch rounded-lg flex flex-row items-center justify-center hover:bg-green-900">
                        
                        <div class="relative text-base uppercase font-button text-brown-50 text-left">Login</div>

                        </button>
                    
                    </div>

                    <div class="self-stretch relative bg-brown-400 h-[0.13rem] overflow-hidden shrink-0"></div>
                    
                    <div class="self-stretch flex flex-col items-start justify-start gap-4">
                        
                        <div
                        class="self-stretch relative text-xs font-button text-brown-500 text-center">

                        <p>Are you a first-time enrollee?</p>
                        <p> Click the button below to register and enroll at GDJES.</p>
                        
                        </div>

                        <!--<button-->
                        <a href="/student-registration-1"
                            class="cursor-pointer md:py-4 py-3 md:px-8 px-2 bg-[transparent] self-stretch rounded-lg flex flex-row items-center justify-center border-[1px] border-solid border-brown-500 hover:border-[2px] hover:border-solid hover:border-brown-700"
                            >
                                <div
                                    class="flex-1 relative md:text-base text-sm uppercase font-button text-brown-500 text-center"
                                    id="createAccount">
                                    create your student account here
                                </div>

                        </a>
                        <!--</button>-->

                    </div>

                </form>

            </div>

        </div>

    </div>

    <div id="myModal" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-3 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full items-center justify-center drop-shadow-2xl">

        <form
        class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center w-auto h-auto justify-center md:p-10 p-7 md:gap-4 gap-2 z-[2] " novalidate style="width: 30%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 400px">

            <h1
            class=" self-stretch relative md:text-3xl text-2xl font-bold font-frl text-main-green-secondary-700 text-center">
            Forgot Password?
            </h1>

            <div class="self-stretch flex-col items-center justify-center gap-2">

                <h3
                    class="relative md:text-base text-sm font-normal font-button text-main-green-secondary-700 text-center  items-center self-stretch">
                    Enter your email address, and we'll send you an email with a unique link to reset your password.
                </h3>
            
            </div>

            <div class="self-stretch flex flex-col items-start justify-start md:gap-6 gap-4">
            
            <div class="self-stretch relative bg-main-brown-primary-300 h-[0.13rem] overflow-hidden shrink-0"></div>

            <div class="self-stretch flex flex-col items-start justify-start gap-5 ">

                <div class="self-stretch flex flex-col items-start justify-start md:gap-5 gap-4">

                    <b 
                        class="self-stretch relative text-[0.81rem] leading-[140%] flex font-button text-main-green-secondary-700 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap h-[1.19rem] shrink-0">
                        EMAIL ADDRESS
                    </b>
                
                    <div class="flex flex-col self-stretch input-container relative font-mulish">

                        <input
                        class=" text-sm  bg-green-50 self-stretch rounded-lg flex items-center justify-start p-4 border-[1px] border-solid focus:border-[1px] mb-1 focus:ring-green-700 focus:border-green-700 "
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
                class="cursor-pointer py-[1rem] px-[2.13rem] bg-green-500 self-stretch rounded-lg flex flex-row items-center justify-center relative text-[1rem] leading-[140%] uppercase font-button text-brown-50  hover:bg-green-900"
                style="border: none;">
                Request New Password
            </button>

            
            </div>

            
            <div class="self-stretch flex flex-col items-start justify-start">

            <button
                class="cursor-pointer py-[1rem] px-[2.13rem] bg-[transparent] self-stretch rounded-lg flex flex-row items-center justify-center border-[1px] border-solid border-brown-500 hover:border-[2px] hover:border-solid hover:border-darkolivegreen flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-brown-500 text-center"
                type="button">
                Sign in
            </button>

            </div>

        </form>

      </section>

    </main>

    <div id="myModal" class="hidden fixed top-0 left-0 right-0 z-50  w-full p-3 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full items-center justify-center drop-shadow-2xl">

      <form
      class=" rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center p-[2.5rem] gap-[1rem] z-[2] lg:w-auto lg:pl-[2.5rem] md:w-auto md:h-auto md:pl-[2.5rem] md:pr-[2.5rem] sm:pl-[2rem] sm:box-border"
      novalidate
      style="width: 30%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 400px;">

          <h1
          class="m-0 self-stretch relative text-[1.75rem] leading-[110%] font-bold font-heading-2-bold text-main-green-secondary-700 text-center">
          Forgot Password?
          </h1>

          <div class="self-stretch flex-col items-center justify-center gap-[0.5rem]">

              <h3
                  class="m-0 relative text-[1rem] leading-[140%] font-normal font-button text-main-green-secondary-700 text-center  items-center self-stretch">
                  Enter your email address, and we'll send you an email with a unique link to reset your password.
              </h3>
          
          </div>

          <div class="self-stretch flex flex-col items-start justify-start gap-[1.5rem]">
          
          <div class="self-stretch relative bg-main-brown-primary-300 h-[0.13rem] overflow-hidden shrink-0"></div>

          <div class="self-stretch flex flex-col items-start justify-start gap-[1.3rem]">

              <div class="self-stretch flex flex-col items-start justify-start gap-[1.3rem] ">

                  <b 
                      class="self-stretch relative text-[0.81rem] leading-[140%] flex font-button text-main-green-secondary-700 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap h-[1.19rem] shrink-0">
                      EMAIL ADDRESS
                  </b>
              
                  <div class="flex flex-col self-stretch input-container relative">

                      <input
                      class="font-button text-sm bg-green-50 self-stretch rounded-lg flex items-center justify-start p-4 border-[1px] border-solid focus:border-[1px] mb-1  focus:ring-green-700 focus:border-green-700 "
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
              class="cursor-pointer py-[1rem] px-[2.13rem] bg-green-500 self-stretch rounded-lg flex flex-row items-center justify-center relative text-[1rem] leading-[140%] uppercase font-button text-brown-50  hover:bg-green-900"
              style="border: none;">
              Request New Password
          </button>

          
          </div>

          
          <div class="self-stretch flex flex-col items-start justify-start">

          <button
              class="cursor-pointer py-[1rem] px-[2.13rem] bg-[transparent] self-stretch rounded-lg flex flex-row items-center justify-center border-[1px] border-solid border-brown-500 hover:border-[2px] hover:border-solid hover:border-darkolivegreen flex-1 relative text-[1rem] leading-[140%] uppercase font-button text-brown-500 text-center"
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