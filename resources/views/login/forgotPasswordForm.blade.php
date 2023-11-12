<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js', 'resources/css/style.css'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password Form</title>
    <link rel="icon" href="{{url('assets/GDJES Logo.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Frank Ruhl Libre:wght@400;700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap"/>

</head>

<body class="bg-gray-300">
    <div class=" flex flex-col justify-center min-h-screen">
        
        <form class="mx-auto rounded-lg bg-main-green-secondary-50 flex flex-col items-center justify-center py-11 p-[2.5rem] gap-[1.8rem] z-[2]  lg:pl-[2.5rem] md:pl-[2.5rem] md:pr-[2.5rem] sm:pl-[2rem] sm:box-border" 
        novalidate
        style="width: 26%; min-width: 400px;">

            <h1
            class="m-0 self-stretch relative text-[1.75rem] leading-[110%] font-bold font-heading-2-bold text-main-green-secondary-700 text-center">
            Change Password
            </h1>

            <div class="flex-col items-center justify-center gap-[0.5rem]">

                <h3 class="m-0 relative text-[1rem] leading-[140%] font-normal font-button text-main-green-secondary-700 text-center  items-center ">
                    Enter your new password to commit the changes and provide the new password in your account.
                </h3>
                
            </div>

            <div class="self-stretch relative bg-main-brown-primary-300 h-[0.13rem] overflow-hidden shrink-0"></div>

            <!-- Login Form --
            <div class="self-stretch flex flex-col items-start justify-start gap-[1.5rem]">
                
                <!--New Password input field -->
            <div class="relative self-stretch flex flex-col items-start justify-start gap-[1.3rem]">
                
                <b 
                    class="self-stretch relative text-[0.81rem] leading-[140%] flex font-button text-main-green-secondary-700 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap h-[0.81rem] shrink-0">
                    NEW PASSWORD
                </b>
            
                <div class="flex flex-col self-stretch relative">

                    <input
                    class="font-button text-[0.81rem] bg-main-green-secondary-50 self-stretch rounded-lg flex flex-row items-center justify-start p-[1rem] border-[1px] border-solid border-main-green-secondary-300 focus:border-[1px]"
                    placeholder="Enter new password"
                    type="password"
                    :type="show ? 'password' : 'text'"
                    required
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                    id="newPassword"
                    autocomplete="off"
                    />
            
                    <div class=" absolute top-3 right-0 flex flex-row items-center m-0 p-0">

                        <input class="hidden js-password-toggle" id="newPasswordtoggle" type="checkbox" />
                        
                        <label class="hover:text-gray-200 rounded font-heading-2-bold px-2 py-2 text-[0.81rem] text-main-green-secondary-500 cursor-pointer js-password-label " for="newPasswordtoggle">Show</label>
                        
                    </div>

                    <script>
                        const newPasswordToggle = document.querySelector('#newPasswordtoggle');
                        const newPasswordInput = document.getElementById('newPassword');
                        const passwordLabel= document.querySelector('.js-password-label');

                        newPasswordToggle.addEventListener('change', function() {

                            if (newPasswordInput.type === 'password') {
                            newPasswordInput.type = 'text';
                            passwordLabel.innerHTML = 'Hide';
                            } else {
                            newPasswordInput.type = 'password';
                            passwordLabel.innerHTML = 'Show';
                            }

                            newPasswordInput.focus();
                        });
                    </script>
            
                </div>

                <div class="relative self-stretch flex flex-col items-start justify-start gap-[1.3rem]">
                
                    <b 
                        class="self-stretch relative text-[0.81rem] leading-[140%] flex font-button text-main-green-secondary-700 text-left items-center overflow-hidden text-ellipsis whitespace-nowrap h-[0.81rem] shrink-0">
                        CONFIRM PASSWORD
                    </b>
                
                    <div class="flex flex-col self-stretch relative">
        
                        <input
                        class="font-button text-[0.81rem] bg-main-green-secondary-50 self-stretch rounded-lg flex flex-row items-center justify-start p-[1rem] border-[1px] border-solid border-main-green-secondary-300 focus:border-[1px]"
                        placeholder="Please confirm password"
                        type="password"
                        :type="show ? 'password' : 'text'"
                        required
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                        id="confirmPassword"
                        autocomplete="off"
                        />
                
                        <div class=" absolute top-3 right-0 flex flex-row items-center m-0 p-0">
        
                            <input class="hidden js-password-toggle" id="confirmPasswordToggle" type="checkbox" />
                            
                            <label class="hover:text-gray-200 rounded font-heading-2-bold px-2 py-2 text-[0.81rem] text-main-green-secondary-500 cursor-pointer js-password-label1" for="confirmPasswordToggle">Show</label>
                            
                        </div>
        
                        <script>
                            const confirmPasswordToggle = document.querySelector('#confirmPasswordToggle');
                            const confirmPasswordInput = document.getElementById('confirmPassword');
                            const passwordLabel1 = document.querySelector('.js-password-label1');
        
                            confirmPasswordToggle.addEventListener('change', function() {
        
                                if (confirmPasswordInput.type === 'password') {
                                confirmPasswordInput.type = 'text';
                                passwordLabel1.innerHTML = 'Hide';
                                } else {
                                confirmPasswordInput.type = 'password';
                                passwordLabel1.innerHTML = 'Show';
                                }
        
                                confirmPasswordInput.focus();
                            });
                        </script>
                
                    </div>
                    
                </div>
            
            </div>

            <button
                id="loginBtn"
                type="submit"
                class="mt-2 cursor-pointer [border:none] py-[1rem] px-[2.13rem] bg-main-green-secondary-500 self-stretch rounded-lg flex flex-row items-center justify-center hover:bg-gray-200 relative text-[1rem] leading-[140%] uppercase font-button text-main-brown-primary-50 text-left">
                Reset Password
            </button>

        </form>
    </div>
</body>

</html>