<!DOCTYPE html>
<html lang="en">
  <head>
  @vite(['resources/js/app.js', 'resources/css/style.css'])
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Admin Login Page</title>
    <link rel="icon" href="{{url('assets/GDJES Logo.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank Ruhl Libre:wght@400;700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap"/>
    <style>
        body{
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        
    </script>
  </head>

  <body>

    <div class="bg-white min-w-full min-h-full flex flex-row shrink-0 overflow-hidden">

      <!-- Left section corner -->
      <div class="srelative basis-auto h-auto shrink-0 flex-1 overflow-hidden flex flex-col items-start justify-center text-left text-xl gap-16 pl-7 -mb-2" style="background-image: url({{ asset('./assets/leftdiv@3x.png')}}); background-size: cover; background-repeat: no-repeat;" id="leftSection">

        <div class="flex flex-row items-center justify-center z-[0]">

          <h2 class="flex-1 font-frl font-medium relative lx:text-3xl text-2xl" style="background: conic-gradient(from 223.89deg at 50% 50%, #fffdf9 0deg, #d7ba82 97.77deg, #faf6ef 306.23deg, #fffdf9 360deg, #d7ba82 457.77deg); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 283px 79px rgba(255, 249, 240, 0), 0px 181px 72px rgba(255, 249, 240, 0.01), 0px 102px 61px rgba(255, 249, 240, 0.05), 0px 45px 45px rgba(255, 249, 240, 0.09), 0px 11px 25px rgba(255, 249, 240, 0.1), 0px 0px 0px rgba(255, 249, 240, 0.1); color: transparent;">

            <p>Ang iyong ikalawang tahanan</p>
            <p>tungo sa mahusay na kinabukasan.</p>

          </h2>

        </div>

        <div class="flex flex-row items-center justify-center gap-2 cursor-pointer z-[2] text-4xl">

          <img
          class="relative w-[4rem] h-[4rem] overflow-hidden shrink-0 object-cover"
          alt="Gregoria de Jesus Elementary School logo"
          src="{{ asset('./assets/GDJES Logo.png')}}"
          />

          <div class="flex-1 flex flex-col items-start justify-start">
          
            <h1 
            class="xl:text-5xl text-[40px] relative font-bold font-frl" 
              style="background: conic-gradient(from 223.89deg at 50% 50%, #fffdf9 0deg, #d7ba82 97.77deg, #faf6ef 306.23deg, #fffdf9 360deg, #d7ba82 457.77deg); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 283px 79px rgba(255, 249, 240, 0), 0px 181px 72px rgba(255, 249, 240, 0.01), 0px 102px 61px rgba(255, 249, 240, 0.05), 0px 45px 45px rgba(255, 249, 240, 0.09), 0px 11px 25px rgba(255, 249, 240, 0.1); color: transparent;">
              GREGORIA DE JESUS
            </h1>

            <h3 
            class="relative text-lg font-normal" 
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
      <div class="relative basis-3/12 p-4 min-h-full shrink-0 flex-1 bg-gradient-to-t from-green-500 to-slate-900 text-white overflow-hidden items-center justify-center font-frl text-left text-2xl">

        <div class="w-auto p-2 flex flex-col mx-auto gap-5 items-center my-20 justify-center">
              
          <div class="flex flex-col items-center justify-center gap-2 cursor-pointer z-[1] " >
      
              <img class="relative w-[3rem] h-[3rem] overflow-hidden shrink-0 object-cover" alt="" src="{{ asset('./assets/GDJES Logo.png')}}"/>

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

          <form class="rounded-lg bg-green-50 flex font-frl flex-col items-center justify-center p-8 gap-4 " 
          action="{{ route('admin.login') }}" 
          method="post" 
          novalidate>
          @csrf
          @method('post')

            <h1 class="relative text-3xl mx-12 font-bold text-green-800 text-center ">
              <p>Admin Portal Login</p>
            </h1>

            <div class="self-stretch flex flex-col font-mulish items-start justify-start gap-2 ">

              <h3
              class="m-0 relative text-base font-normal  text-brown-600 text-left flex items-center">
                Welcome back!
              </h3>

              <h4 
              class="self-stretch relative text-xs font-normal text-green-800 text-left"> 
                Login to access admin portal 
              </h4>
            
            </div>

            <div class="self-stretch flex flex-col items-start justify-start gap-4">
              
              <div class="self-stretch relative bg-green-500 h-[0.13rem] overflow-hidden shrink-0"></div>

              <div class="self-stretch flex flex-col items-start justify-start gap-4 >

                <div class="self-stretch flex flex-col items-start justify-start gap-4">

                  <b 
                  class="self-stretch relative text-xs flex font-mulish text-green-800 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap shrink-0">
                    USERNAME
                  </b>
              
                  <div class="flex flex-col self-stretch input-container relative">

                    <input
                    class="font-button text-sm bg-green-50 self-stretch rounded-lg flex items-center justify-start p-4 border-[1px] focus:border-[1px]  border-green-400 text-gray-900 focus:border-green-700 focus:ring-green-700 "
                    placeholder="Enter your username"
                    type="text"
                    required
                    pattern="^[a-zA-Z]+\.[a-zA-Z]+\.2023$"
                    autocomplete="off"
                    id="username"
                    name="username"
                    />
              
                    <span 
                      id="username-error" 
                      class="hidden mt-1 text-sm text-red-600 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                      ❌ Maari bang maglagay ka ng wastong username
                    </span>

                  </div>

                </div>
              
                <div class="relative self-stretch flex flex-col items-start justify-start gap-4">
                  
                  <b 
                  class="self-stretch relative text-xs font-mulish  text-green-800 text-left items-center overflow-hidden text-ellipsis whitespace-nowrapshrink-0">
                    PASSWORD
                  </b>
              
                  <div class="flex flex-col self-stretch relative">

                    <input
                      class="font-button text-sm bg-green-50 self-stretch rounded-lg flex flex-row items-center justify-start p-4 border-[1px] focus:border-[1px]  border-green-400 text-gray-900 focus:border-green-700 focus:ring-green-700 "
                      placeholder="Enter your password"
                      type="password"
                      :type="show ? 'password' : 'text'"
                      required
                      pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                      id="password"
                      autocomplete="off"
                      name="password"
                    />
              
                    <span 
                      id="password-error" 
                      class="hidden mt-1 text-sm text-red-600 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                      ❌ Ang iyong password ay dapat may hindi bababa sa 6 na karakter
                    </span>
              
                    <div class="absolute top-3 right-0 flex flex-row items-center">
                      <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                      <label class="hover:text-green-400 rounded  px-2 py-2 text-xs text-green-900 cursor-pointer js-password-label" for="toggle">Show</label>
                    </div>
              
                  </div>
                
                </div>
              
              </div>
              
              <a class="[text-decoration:none] self-stretch relative text-xs text-green-500 text-center " id="myBtn">

                <span class="font-button">Forgot your password? </span>

                <b class="font-button" id="forgotPasword_link">
                  <span class="[text-decoration:underline] hover:text-brown-900 cursor-pointer">Click here</span>.
                </b>

              </a>

              <!--button id removed id="login-button"-->
              <button type="submit" class="cursor-pointer [border:none] py-4 px-8 bg-gradient-to-t from-green-500 to-slate-900 self-stretch rounded-lg flex flex-row items-center justify-center hover:shadow-lg hover:shadow-neutral-200 group hover:outline hover:outline-1 hover:outline-green-900">
                <div class="relative text-base uppercase font-button text-brown-50 text-left">Login</div>
              </button>

              <div class="self-stretch relative bg-green-500 h-[0.13rem] overflow-hidden shrink-0 "></div>
            
            </div>

          </form>

        </div>  

      </div>

    </div>

    <div id="myModal" class="hidden fixed top-0 left-0 right-0 z-50  w-full p-3 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full items-center justify-center drop-shadow-2xl">

      <form id="forgot_pass_form" class=" rounded-lg bg-green-50 flex flex-col items-center justify-center p-[2.5rem] gap-[1rem] z-[2] lg:w-auto lg:pl-[2.5rem] md:w-auto md:h-auto md:pl-[2.5rem] md:pr-[2.5rem] sm:pl-[2rem] sm:box-border"
      novalidate style="width: 30%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 400px;">
      @csrf
      @method('post')

        <h1 class="m-0 self-stretch relative text-[1.75rem] leading-[110%] font-bold font-heading-2-bold text-green-800 text-center">
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
            
                <div class="flex flex-col self-stretch input-container relative" id="email_error">

                    <input
                    class="font-button text-sm bg-green-50 self-stretch rounded-lg flex items-center justify-start p-4 border-[1px] border-brown-500 focus:border-brown-700 focus:ring-brown-700 border-solid focus:border-[1px] mb-1"
                    placeholder="juandelacruz@gmail.com"
                    type="text" 
                    required=""
                    name="email"
                    autocomplete="off"
                    id="reset_email"
                    />

                </div>

            </div>
            <div class="self-stretch flex flex-col items-start justify-start gap-[1.3rem] ">

              <b 
                  class="self-stretch relative text-[0.81rem] leading-[140%] flex font-button text-green-800 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap h-[1.19rem] shrink-0">
                  EMAIL ADDRESS
              </b>
          
              <div class="flex flex-col self-stretch input-container relative" id="username_error">

                  <input
                  class="font-button text-sm bg-green-50 self-stretch rounded-lg flex items-center justify-start p-4 border-[1px] border-brown-500 focus:border-brown-700 focus:ring-brown-700 border-solid focus:border-[1px] mb-1"
                  placeholder="juandelacruz@gmail.com"
                  type="text" 
                  required=""
                  name="username"
                  autocomplete="off"
                  id="reset_username"
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
            type="button">
            Sign in
        </button>

        </div>

      </form>

    </div>

    <script>
      const form = document.getElementById('forgot_pass_form');
      const requestNewPass = document.getElementById('RequestPassword');

      requestNewPass.addEventListener('click', function(e){
          e.preventDefault();
          const serializedForm = $(form).serialize();
          const error_fields = document.querySelectorAll('#error_message');
          console.log(error_fields);
          error_fields.forEach(element => {
              element.remove();
          });

          $.ajax({
              url: localStorage.getItem('appUrl') + "/admin.changePassword",
              type: "POST",
              data: serializedForm,
              success: function(response) {
                  $('#username_error').addClass('border-green-500');
                  $('#username_error').after('<p id= "error_message" class="text-green-500 text-xs italic error-message"> Check your email for new password</p>');
              },error: function(response) {
                  let error = response.responseJSON;
                  $.each(error.errors, function(key, value) {
                      $('#' + key + "_error").addClass('border-red-500');
                      $('#' + key + "_error").after('<p id= "error_message" class="text-red-500 text-xs italic error-message">' + value + '</p>');
                  });
              }
          });
      });

    </script>

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

    <script>
      var dashboardUrl = "{{ url('admin.dashboard') }}";
    </script>

  </body>

</html>