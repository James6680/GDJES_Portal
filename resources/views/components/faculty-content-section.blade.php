<!-- Content Section -->
<div>   
    <!-- Announcement Section -->
    @if (request()->is('faculty.announcements') )
    <div class="md:pl-64 w-full min-h-full sm:py-12 sm:pb-9 sm:pr-[-10rem] py-7 sm:px-16 px-6 bg-yellow-50">

        <section class="min-w-full min-h-full relative grid grid-cols-1 sm:gap-7 gap-5 marker: md:ml-8  items-center">

            <!-- Announcement Main Container -->
            <!-- Backend side: need to connect para magreflect ung icrcreate na announcement ng admin -->
            <div class="rounded-md w-auto h-auto relative container p-6 grid grid-cols-1 bg-yellow-600 shadow shadow-green-500">

                <ul class="m-o p-0 text-white">

                    <li class="p-0 m-0">
                        <span class="font-mulish font-semibold text-2xl sm:text-3xl ">Announcements</span>
                    </li>

                    <li class="py-5 border-b-2 border-white hover:border-b-2 hover:border-brown-200 hover:text-brown-200">
                        <a href="https://www.facebook.com/photo?fbid=772548511547342&set=a.481770427291820"
                        class="flex flex-col justify-between align-middle">
                        <span class="font-mulish font-semibold text-base sm:text-lg">Title of Announcement 1</span>
                        <span class="font-mulish font-normal text-base sm:text-lg">Date Published 1</span>
                        </a>
                    </li>

                    <li class="py-5 border-b-2 border-white hover:border-b-2 hover:border-brown-200 hover:text-brown-200">
                        <a href="https://www.youtube.com/watch?v=rKWLpH1fLMI" class="flex flex-col justify-between align-middle">
                        <span class="font-mulish font-semibold text-base sm:text-lg">Title of Announcement 2</span>
                        <span class="font-mulish font-normal text-base sm:text-lg">Date Published 2</span>
                        </a>
                    </li>

                    <li class="py-5 hover:text-brown-200">
                        <a href="https://tailwindcss.com/docs/height" class="flex flex-col justify-between align-middle">
                        <span class="font-mulish font-semibold text-base sm:text-lg">Title of Announcement 3</span>
                        <span class="font-mulish font-normal text-base sm:text-lg">Date Published 3</span>
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Contact Us Main Container -->
            <div class="rounded-md h-auto w-full container  p-6 grid grid-cols-1 bg-white shadow shadow-brown-100">

                <h2 class="w-full flex font-mulish text-2xl sm:text-3xl text-green-900 font-bold">
                Contact us
                </h2>

                <ul class="m-o  text-green-900">

                    <li class="pt-2">
                        <p class="font-mulish text-base sm:text-lg text-black">
                        Mahalaga sa amin na matulungan kayo sa anumang kailangan ninyo tungkol sa paaralan. Huwag mag-atubiling tawagan,
                    i-email, o bisitahin kami sa tanggapan. Bukas ang aming mga puso at isipan para sagutin ang inyong mga katanungan
                        </p>
                    </li>

                    <li class="py-5">
                        <p class=" font-mulish font-base text-xs md:text-base text-black">
                        <strong>Address:</strong> JXHG+566, Dagupan St, Tondo, Manila, Metro Manila
                        </p>
                        <p class=" font-mulish font-base text-xs md:text-base text-black py-2">
                        <strong>Phone:</strong> +63 914 443 2981
                        </p>
                        <p class=" font-mulish font-base text-xs md:text-base text-black">
                        <strong>Email:</strong> <a class="underline hover:text-green-500"
                            href="mailto: gdjes.manila@deped.gov.ph">gdjes.manila@deped.gov.ph</a>
                        </p>
                    </li>

                </ul>

            </div>
            
        </section>

    </div>

    @elseif (request()->is('faculty.my-students') )
    <!-- Grade Viewing Section -->
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 sm:pb-9 md:px-16 px-12">

        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-4 lg:py-7 bg-white lg:ml-8 ml-6 shadow shadow-brown-100">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">My Students</h3>
                <p class="mt-1 lg:text-base text-sm text-justify text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!-- End of Header Content -->

        </section>
    </div>

    @elseif (request()->is('faculty.enrollments') )
    <!-- Class Schedule Section -->
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">
        
        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-100">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">Enrollments</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!-- End of Header Content -->

        </section>
    </div>

    @elseif (request()->is('faculty.grades') )
    <!-- Student Enrollment Status Section -->
    <div class="md:pl-64 pl-0 min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">

        <section class="self-stretch container lg:p-8 p-7 px-8 grid grid-cols-1 w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-200">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-green-900">Grades</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!-- End of Header Content -->
            
        </section>

    </div>
    @endif
</div>
<!-- Requests Document Section -->

<!-- Student Information Section -->