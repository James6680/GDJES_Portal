<!-- Content Section -->
<div>   
    <!-- Faculty Announcement Section -->
    @if (request()->is('faculty.announcements') )
    @vite(['resources/js/faculty.announcements.js'])
    <div class="md:pl-64 w-full min-h-full sm:py-12 sm:pb-9 sm:pr-[-10rem] py-7 sm:px-16 px-6 bg-yellow-50">

        <section class="min-w-full min-h-full relative grid grid-cols-1 sm:gap-7 gap-5 marker: md:ml-8  items-center">

            <!-- Announcement Main Container -->
            <!-- Backend side: need to connect para magreflect ung icrcreate na announcement ng admin -->
            <div class="rounded-md w-auto h-auto relative container p-6 grid grid-cols-1 bg-yellow-600 shadow shadow-brown-100">

                <ul class="m-o p-0 text-white" id="announcement-list">

                    <li class="p-0 m-0">
                        <span class="font-semibold text-2xl sm:text-3xl ">Announcements</span>
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
    <!-- Faculty Class & Advisory List Section -->
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 sm:pb-9 md:px-16 px-12">

        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-6 lg:py-7 bg-white lg:ml-8 ml-6 shadow shadow-brown-100">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">My Students</h3>
                <p class="mt-1 lg:text-base text-sm text-gray-500">This section offers faculty seamless academic oversight. It comprises two tables—one for advisory class details, another for subject class student lists. This dual-view feature streamlines management, empowering educators with efficient, comprehensive tools for enhanced teaching and advising.</p>
            </div> <!-- End of Header Content -->

            <div class="flex flex-col gap-2">

                <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl text-black">Advisory Class</h1>

                <div class="relative overflow-x-auto">
                    <!-- Advisory Classlist Table -->
                    <!-- For Backend: Needs to connect in order for list of students to reflect within the table -->
                    <table class="w-full lg:text-sm text-xs text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-200" >
                        <thead class=" lg:text-sm text-xs text-white uppercase bg-yellow-600 ">
                            <tr class="header">
                                <th scope="col" class="px-4 py-3">Last Name</th>
                                <th scope="col" class="px-4 py-3">First Name</th>
                                <th scope="col" class="px-4 py-3">Middle Name</th>
                                <th scope="col" class="px-4 py-3">Extension Name</th>
                                <th scope="col" class="px-4 py-3">lrn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">Dela Cruz</td>                         
                                <td class="px-4 py-3">Mark</td>
                                <td class="px-4 py-3">Dustin</td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3">059503095670</td>
                            </tr>
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">Dela Vega</td>                         
                                <td class="px-4 py-3">Justin</td>
                                <td class="px-4 py-3">Bailey</td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3">15357112411</td>
                            </tr>
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">Frando</td>                         
                                <td class="px-4 py-3">James</td>
                                <td class="px-4 py-3">Cheska</td>
                                <td class="px-4 py-3">IV</td>
                                <td class="px-4 py-3">85256212521</td>
                            </tr>
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">Franco</td>                         
                                <td class="px-4 py-3">Rain</td>
                                <td class="px-4 py-3">Mark</td>
                                <td class="px-4 py-3">Jr.</td>
                                <td class="px-4 py-3">27391281522</td>
                            </tr>
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">Egay</td>                         
                                <td class="px-4 py-3">Daniel</td>
                                <td class="px-4 py-3">Zamora</td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3">399620943403</td>
                            </tr>
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">Qira</td>                         
                                <td class="px-4 py-3">Joseph</td>
                                <td class="px-4 py-3">Cruz</td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3">167467923595</td>
                            </tr>
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">Yugo</td>                         
                                <td class="px-4 py-3">Mary</td>
                                <td class="px-4 py-3">Joy</td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3">885610844170</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

            <div class="flex flex-col gap-2">

                <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl text-black">Subject Class</h1>

                <div class="mx-auto w-full">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative overflow-hidden">
                        
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-2 py-1 pb-2.5 px-1">

                            <div class="w-full md:w-1/2">
                                <!-- Seach input field form container -->
                                <form class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="myInput" onkeyup="myFunction()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-400 focus:border-green-400 block w-full pl-10 p-3 py-2" placeholder="Search" required="">
                                    </div>
                                </form>

                            </div>
                            
                            <!-- 1 Filter dropdown for Subject Class -->
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                                <div class="flex items-center lg:space-x-3 space-x-1 w-full md:w-auto">
                                    
                                    <!-- Needs to be dynamic for teachers to be able to navigate the subject classes he/she handles -->
                                    <!-- Subject Class Button -->
                                    <button id="subjecUnitBtn" data-dropdown-toggle="grade-dropdown" class="text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 text-sm px-7 py-2.5 text-center inline-flex items-center" type="button">Subject Class<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                    </button>

                                    <!-- Subject Class Dropdown menu -->
                                    <div id="grade-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="subjecUnitBtn">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeText('Grade 1: Mathematics (Halimuyak)')">Grade 1: Mathematics (Halimuyak)</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeText('Grade 2: Mathematics (Mabantut)')">Grade 2: Mathematics (Mabantut)</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeText('Grade 3: Mathematics (Makati)')">Grade 3: Mathematics (Makati)</a>
                                        </li>
                                        </ul>

                                        <script>
                                            function changeText(newText) {
                                                document.getElementById('subjecUnitBtn').innerText = newText;
                                                event.preventDefault(newText);
                                                // You can also close the dropdown if needed
                                                // document.getElementById('quarter-dropdown').classList.add('hidden');
                                            }
                                        </script>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="overflow-x-auto">
                            <!-- Faculty Subject Classlist Table -->
                            <!-- For Backend: needs to be connected enable for subject student classlist to reflect in the table -->
                            <table class="w-full lg:text-sm text-xs text-left text-gray-500 border border-gray-200" id="myTable">
                                <thead class="lg:text-sm text-xs text-white uppercase bg-yellow-600 ">
                                    <tr class="header">
                                        <th scope="col" class="px-4 py-3">Last Name</th>
                                        <th scope="col" class="px-4 py-3">First Name</th>
                                        <th scope="col" class="px-4 py-3">Middle Name</th>
                                        <th scope="col" class="px-4 py-3">Extension Name</th>
                                        <th scope="col" class="px-4 py-3">lrn</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Dela Cruz</td>                         
                                        <td class="px-4 py-3">Mark</td>
                                        <td class="px-4 py-3">Dustin</td>
                                        <td class="px-4 py-3"></td>
                                        <td class="px-4 py-3">059503095670</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Dela Vega</td>                         
                                        <td class="px-4 py-3">Justin</td>
                                        <td class="px-4 py-3">Bailey</td>
                                        <td class="px-4 py-3"></td>
                                        <td class="px-4 py-3">15357112411</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Frando</td>                         
                                        <td class="px-4 py-3">James</td>
                                        <td class="px-4 py-3">Cheska</td>
                                        <td class="px-4 py-3">IV</td>
                                        <td class="px-4 py-3">85256212521</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Franco</td>                         
                                        <td class="px-4 py-3">Rain</td>
                                        <td class="px-4 py-3">Mark</td>
                                        <td class="px-4 py-3">Jr.</td>
                                        <td class="px-4 py-3">27391281522</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Egay</td>                         
                                        <td class="px-4 py-3">Daniel</td>
                                        <td class="px-4 py-3">Zamora</td>
                                        <td class="px-4 py-3"></td>
                                        <td class="px-4 py-3">399620943403</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Qira</td>                         
                                        <td class="px-4 py-3">Joseph</td>
                                        <td class="px-4 py-3">Cruz</td>
                                        <td class="px-4 py-3"></td>
                                        <td class="px-4 py-3">167467923595</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Yugo</td>                         
                                        <td class="px-4 py-3">Mary</td>
                                        <td class="px-4 py-3">Joy</td>
                                        <td class="px-4 py-3"></td>
                                        <td class="px-4 py-3">885610844170</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Search input field script -->
                            <script>
                                function myFunction() {
                                // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable");
                                tr = table.getElementsByTagName("tr");

                                // Loop through all table rows, and hide those who don't match the search query
                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[0];
                                    if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                    }
                                }
                                }
                            </script>
                        </div>
                        
                    </div>
                </div>
            </div>

        </section>
    </div>

    @elseif (request()->is('faculty.enrollments') )
    <!-- Faculty Enrollment List Section -->
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">
        
        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-7 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-100">

            <div class="flex flex-col gap-2">  
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">Enrollments</h3>
                <p class="mt-1 lg:text-base text-sm text-gray-500 pr-4">This section provides crucial enrollment insights, displaying the status of each student. Faculty can easily identify whether students are officially enrolled, track completion of enrollment requirements, ensuring a streamlined and informed academic management process.</p>
            </div> <!-- End of Header Content -->

            <div class="flex flex-col gap-2">

                <div class="mx-auto w-full ">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative overflow-hidden">
                        
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-2 py-2 px-1">

                            <div class="w-full md:w-1/2">
                                <!-- Search input field form container -->
                                <form class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="myInput" onkeyup="myFunction()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-400 focus:border-green-400 block w-full pl-10 p-3 py-2" placeholder="Search" required="">
                                    </div>
                                </form>

                            </div>
                            
                            <!-- Filter for student based on their enrollment status -->
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                                <div class="flex items-center lg:space-x-3 space-x-1 w-full md:w-auto">

                                    <!-- Needs to be dynamic navigating the exact number of officially enrolled, temporarily enrolled, and dropped mark on the table below -->
                                    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto font-mulish items-center justify-center lg:text-sm text-xs py-2.5 lg:px-6 md:px-2 px-4 flex text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-3.5 w-3.5 mr-2 text-gray-400 items-center" viewbox="0 0 20 20" fill="white">
                                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                        </svg>
                                        Filter
                                        <svg class="-mr-1 ml-1.5 w-5 h-5" fill="white" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                    </button>

                                    <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose Status</h6>
                                        <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                            <li class="flex items-center">
                                                <input id="enrolled_num" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-green-600 focus:ring-green-500 dark:focus:ring-green-600 focus:ring-2">
                                                <label for="enrolled_num" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Enrolled (2)</label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="temp_enrolled_num" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-green-600 focus:ring-green-500 dark:focus:ring-green-600 focus:ring-2">
                                                <label for="temp_enrolled_num" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Temporary Enrolled (198)</label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="dropped_num" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-green-600 focus:ring-green-500 dark:focus:ring-green-600 focus:ring-2">
                                                <label for="dropped_num" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Dropped (0)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <!-- Faculty Enrollment list table -->
                            <!-- For Backend: Needs to be connected to enable the number of enrolees to reflect in the table upon completing the student registration/enrollment form -->
                            <table class="w-full lg:text-sm text-xs text-left text-gray-500 border border-gray-200" id="myTable">
                                <thead class="lg:text-sm text-xs text-white uppercase bg-yellow-600 ">
                                    <tr class="header">
                                        <th scope="col" class="px-4 py-3">No.</th>
                                        <th scope="col" class="px-4 py-3">Name</th>
                                        <th scope="col" class="px-4 py-3">Gender</th>
                                        <th scope="col" class="px-4 py-3">Birthday</th>
                                        <th scope="col" class="px-4 py-3">Requirements</th>
                                        <th scope="col" class="px-4 py-3">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">1</td>                         
                                        <td class="px-4 py-3">Juan Dela Cruz</td>
                                        <td class="px-4 py-3">Male</td>
                                        <td class="px-4 py-3">10-26-2001</td>
                                        <td class="px-4 py-3">
                                            <p data-modal-target="small-modal" data-modal-toggle="modal1" class="inline-flex items-center cursor-pointer text-sm font-medium text-center text-blue-700 hover:text-blue-400">
                                                Edit
                                            </p>

                                            <div id="modal1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-sm   ax-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-2 rounded-t-lg  bg-yellow-500 font-mulish">
                                                            <h3 class="text-lg font-semibold text-white">
                                                                Required Documents
                                                            </h3>
                                                            <button type="button" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal1">    
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class=" p-4 space-y-3 font-mulish text-base">

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type1" name="documents1" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">PSA Birth Certificate</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type2"  name="documents1" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-green-900 dark:text-gray-300">Form 138 / School Form 10 / Report Card</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type3"  name="documents1" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">2 pcs. 2x2 colored ID picture</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">
                                            <button data-popover-target="popover-click" data-popover-placement="left" data-popover-trigger="click" type="button" class="text-blue-700 border  border-blue-700 hover:bg-blue-100 font-medium rounded text-sm px-4 py-1 text-center" id="statusButton1">
                                                Null
                                            </button>

                                            <div data-popover id="popover-click" role="tooltip" class="absolute z-10 invisible inline-block w-auto h-auto p-2 text-sm text-gray-500 transition-opacity duration-300 bg-white rounded-lg  opacity-0 font-mulish text-center font-medium popOver2">
                                                <div class="px-2 py-1.5 text-green-500  border border-green-500 rounded hover:bg-green-100 mb-1 cursor-pointer">
                                                    <p onclick="changeStatus('Enrolled', 'statusButton1')">Enrolled</p>
                                                </div>
                                                <div class="px-2 py-1.5 text-yellow-500  border border-yellow-500 rounded hover:bg-yellow-100 mb-1 cursor-pointer">
                                                    <p onclick="changeStatus('Temporary', 'statusButton1')">Temporarily Enrolled</p>
                                                </div>
                                                <div class="px-2 py-1.5 text-red-600  border border-red-600 rounded hover:bg-red-100 cursor-pointer">
                                                    <p onclick="changeStatus('Dropped', 'statusButton1')">Dropped</p>
                                                </div>
                                                <div data-popper-arrow></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">2</td>                         
                                        <td class="px-4 py-3">James Motus</td>
                                        <td class="px-4 py-3">Male</td>
                                        <td class="px-4 py-3">10-36-2001</td>
                                        <td class="px-4 py-3">
                                            <p data-modal-target="small-modal" data-modal-toggle="modal2" class="inline-flex items-center cursor-pointer  text-sm font-medium text-center text-blue-700 hover:text-blue-400">
                                                Edit
                                            </p>

                                            <div id="modal2" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-sm  max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-2 rounded-t-lg  bg-yellow-500 font-mulish">
                                                            <h3 class="text-lg font-semibold text-white">
                                                                Required Documents
                                                            </h3>
                                                            <button type="button" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal2">    
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class=" p-4 space-y-3 font-mulish text-base">

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type1" name="documents2" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">Document item #1</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type2"  name="documents2" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-green-900 dark:text-gray-300">Document item #2</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type3"  name="documents2" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">Document item #3</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type4"  name="documents2" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">Document item #4</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type5" name="documents2" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">Document item #5</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">
                                            <button data-popover-target="popover-click2" data-popover-placement="left" data-popover-trigger="click" type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-100 font-medium rounded text-sm px-4 py-1 text-center btn2" id="statusButton2">
                                                Null
                                            </button>

                                            <div data-popover id="popover-click2" role="tooltip" class="absolute z-10 invisible inline-block w-auto h-auto p-2 text-sm text-gray-500 transition-opacity duration-300 bg-white rounded-lg  opacity-0 font-mulish text-center font-medium data popOver2">
                                                <div class="px-2 py-1.5 text-green-500 border border-green-500 rounded hover:bg-green-100 mb-1 cursor-pointer">
                                                    <p onclick="changeStatus('Enrolled', 'statusButton2')">Enrolled</p>
                                                </div>
                                                <div class="px-2 py-1.5 text-yellow-500  border border-yellow-500 rounded hover:bg-yellow-100 mb-1 cursor-pointer">
                                                    <p onclick="changeStatus('Temporary', 'statusButton2')">Temporarily Enrolled</p>
                                                </div>
                                                <div class="px-2 py-1.5 text-red-600  border border-red-600 rounded hover:bg-red-100 cursor-pointer">
                                                    <p onclick="changeStatus('Dropped', 'statusButton2')">Dropped</p>
                                                </div>
                                                <div data-popper-arrow></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                                <!-- Enrollment status changer script -->
                                <script>
                                    function changeStatus(status, buttonId) {
                                    var button = document.getElementById(buttonId);

                                    // Remove existing classes
                                    button.className = "text-sm px-4 py-1 text-center";

                                    // Add classes based on selected status
                                    switch (status) {
                                        case "Enrolled":
                                        button.classList.add("text-green-500", "border", "border-green-500", "hover:bg-green-100", "focus:ring-1", "focus:ring-gray-700", "rounded");
                                        break;
                                        case "Temporary":
                                        button.classList.add("text-yellow-500", "border", "border-yellow-500", "hover:bg-yellow-100", "focus:ring-1", "focus:ring-gray-700", "rounded");
                                        break;
                                        case "Dropped":
                                        button.classList.add("text-red-600", "border", "border-red-600", "hover:bg-red-100", "focus:ring-1", "rounded");
                                        break;
                                        default:
                                        // If None or other value is selected, keep default classes
                                        button.classList.add("text-gray-700", "border", "border-gray-700", "hover:bg-gray-100", "focus:ring-1", "focus:ring-gray-700", "rounded");
                                    }
                                    button.textContent = status; // Update button text
                                    }
                                </script>
                            </table>
                            
                            <!-- Search input field script -->
                            <script>
                                function myFunction() {
                                // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("myInput");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTable");
                                tr = table.getElementsByTagName("tr");

                                // Loop through all table rows, and hide those who don't match the search query
                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[1];
                                    if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                    }
                                }
                                }
                            </script>
                        </div>
                        
                    </div>
                </div>

            </div>

        </section>
        
    </div>

    @elseif (request()->is('faculty.grades') )
    <!-- Faculty Grade Input Section -->
    <div class="md:pl-64 pl-0 min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">

        <section class="self-stretch container lg:p-8 p-7 px-8 grid grid-cols-1 w-full min-h-full relative rounded-md justify-start gap-5 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-200">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-green-900">Grades</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">In this section, a user-friendly table streamlines raw score input for student grades, automatically calculated by the system. The convenience is further amplified with a dropdown button, allowing faculty to effortlessly switch between grading sheets for different subject classes, catering to the multifaceted roles of teachers.</p>
            </div> <!-- End of Header Content -->

            <div class="flex flex-col">

                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-2 p-3 px-1">
                                
                    <!-- 2 filter dropdowns for Grade level, Section, Subject, and Quarter -->
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0 ">

                        <div class="flex items-center lg:space-x-3 space-x-1 w-full md:w-auto">

                            <!-- Grade Level Button -->
                            <button id="gradeBtn" 
                                    data-dropdown-toggle="grade-dropdown" 
                                    class="text-white min-w-[300px] justify-between focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-500 text-sm px-8 py-2.5 text-center inline-flex items-center" 
                                    type="button">
                                    Subject Class
                                    <svg class="w-2.5 h-2.5 ms-3" 
                                    aria-hidden="true" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                            </button>

                            <div id="grade-dropdown" 
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="gradeBtn">
                                    @foreach($dropdownOptions as $option)
                                        <li>
                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-id="{{ $option['id'] }}" onclick="getID(this.dataset.id)">{{ $option['name'] }}</a>                                        
                                        </li>
                                    @endforeach
                                </ul>
                            </div>    

                            <!--Grade Quarter Button-->
                            <button id="quarterBtn" 
                                    data-dropdown-toggle="quarter-dropdown" 
                                    class="text-black focus:outline-none bg-green-100 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-brown-100 text-sm px-5 py-2.5 text-center inline-flex items-center" 
                                    type="button">
                                    Grading Quarter
                            <svg class="w-2.5 h-2.5 ms-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>  
                            </button>

                            <div id="quarter-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="quarterBtn">
                                    @foreach($quarters as $quarter)
                                        <li>
                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-quarter="{{ $quarter['number']}}" onclick="getQuarter(this.dataset.quarter)">{{ $quarter['text']}}</a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-quarter="FINAL" onclick="handleDropdownSelection('FINAL', 'quarter')">FINAL</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            <!--Grade Level & Quarter Script-->
                            <script>
                                var class_id=null;
                                var quarter_value=null;                            

                                function getID(id) {
                                // Construct the URL using the ID
                                class_id=id;
                                console.log(class_id);
                                checkIfNotNull();
                                }

                                function getQuarter(quarter){
                                    quarter_value=quarter
                                    console.log(quarter_value);
                                    checkIfNotNull();
                                }

                                function checkIfNotNull(){
                                    if(class_id != null && quarter_value != null){
                                        window.location.href = "?quarter=" + quarter_value + '&class_id=' + class_id;
                                        console.log("both are not null");
                                    }
                                }
                            </script>
                    </div>

                    <div class=" items-center py-2.5 px-4 text-sm text-green-500 rounded-md bg-green-100 hidden"  id="LISReady">
                        <div class="font-normal">
                            Final Grades are ready for LIS Encoding
                        </div>
                    </div>

                </div>

                <!-- Grade 1 - 6 Grading Input -->
                <h1 class="font-semibold pt-4 text-lg sm:text-xl lg:text-2xl text-black " id="gSheetHeader">Grading Sheet Input for Students</h1>
                <div class="mx-auto w-full ">
                    
                    <div class="bg-white dark:bg-gray-800 relative overflow-hidden">

                        <div class="overflow-x-auto pt-4 ">
                            <!-- Faculty grading sheet for students table for QUARTER  -->                        
                            <table id="tableBody" class="w-full lg:text-sm text-xs text-left text-black " id="gSheetTableQ1">

                                <!-- Field Title--> 
                                <thead class="lg:text-sm text-xs text-black uppercase border-2 border-yellow-100 rounded-t">
                                    <tr class="text-lg font-light text-center">
                                        <th colspan="1" class=" border-2 border-yellow-100 rounded-tl-md"></th>
                                        <th colspan="1" class="border-2 w-[25%] border-yellow-100">Learner's Name</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Written Works</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Performance Tasks</th>
                                        <th colspan="3" class="text-base border-2 border-yellow-100 ">Quarterly Assessment (20%)</th>
                                        <th colspan="1" class="text-sm  border-2 normal-case border-yellow-100">Initial</th>
                                        <th colspan="1" class="text-sm border-2 normal-case border-yellow-100"> Quarterly</th>
                                        <th class="rounded-tr-md border-2 border-yellow-100">Action<span class="sr-only"></span></th>                                    
                                    </tr>
                                    <tr class="text-center px-4">
                                        <!-- Student Number --> 
                                        <th class="border-2 border-yellow-100 py-4"></th>
                                        <!-- Student Name --> 
                                        <th class="border-2 border-yellow-100 px-28"></th>
                                        <!--Written Works  -->
                                        <th class="border-2 border-yellow-100">1</th>  
                                        <th class="border-2 border-yellow-100">2</th> 
                                        <th class="border-2 border-yellow-100">3</th>
                                        <th class="border-2 border-yellow-100">4</th>
                                        <th class="border-2 border-yellow-100">5</th>
                                        <th class="border-2 border-yellow-100">6</th>
                                        <th class="border-2 border-yellow-100">7</th>
                                        <th class="border-2 border-yellow-100">8</th>
                                        <th class="border-2 border-yellow-100">9</th>
                                        <th class="border-2 border-yellow-100">10</th>
                                        <th class="normal-case border-2 border-yellow-100">Total</th>
                                        <th class="border-2 border-yellow-100 w-7">PS</th>
                                        <th class="border-2 border-yellow-100">WS</th>
                                        <!-- PerFormance Tasks -->
                                        <th class="border-2 border-yellow-100">1</th>
                                        <th class="border-2 border-yellow-100">2</th>
                                        <th class="border-2 border-yellow-100">3</th>
                                        <th class="border-2 border-yellow-100">4</th>
                                        <th class="border-2 border-yellow-100">5</th>
                                        <th class="border-2 border-yellow-100">6</th>
                                        <th class="border-2 border-yellow-100">7</th>
                                        <th class="border-2 border-yellow-100">8</th>
                                        <th class="border-2 border-yellow-100">9</th>
                                        <th class="border-2 border-yellow-100">10</th>
                                        <th class="normal-case border-2 border-yellow-100">Total</th>
                                        <th class="border-2 border-yellow-100">PS</th>
                                        <th class="border-2 border-yellow-100">WS</th>
                                        <!-- Quarterly Assessment (20%) -->
                                        <th class="border-2 border-yellow-100">1</th>
                                        <th class="border-2 border-yellow-100">PS</th>
                                        <th class="border-2 border-yellow-100">WS</th>
                                        <!-- Initial Grade -->
                                        <th class="border-2 border-yellow-100 normal-case">Grade</th>
                                        <!-- Quarterly Grade -->
                                        <th class="border-2 border-yellow-100 normal-case">Grade</th> 
                                        <th class=" border-2 border-yellow-100"><span class="sr-only"></span></th>                                 
                                    </tr>
                            
                                    <!--Highest Possible Score-->
                                    <form action="faculty.grades.edit" 
                                            method="POST" 
                                            id="edit_hps" >
                                        @csrf                    
                                        @if($highestPossibleScore != null)
                                        @foreach($highestPossibleScore as $hps)
                                        <input type="hidden" name="edit_id" value="{{ $hps->id }}">
                                            <tr class="text-center font-medium" id="q1Header">
                                                <th class="border-2 border-yellow-100"></th>
                                                <th class="border-2 border-yellow-100 py-1.5">Highest Possible Score</th>
                                    
                                                @php $fields = ['ww1', 'ww2', 'ww3', 'ww4', 'ww5', 'ww6', 'ww7', 'ww8', 'ww9', 'ww10',
                                                                'hps_ww_total', 'hps_ww_ps', 'ww_weighted_score', 'pt1', 'pt2', 'pt3', 
                                                                'pt4', 'pt5', 'pt6', 'pt7', 'pt8', 'pt9', 'pt10', 'hps_pt_total', 
                                                                'hps_pt_ps', 'pp_weighted_score', 'qa10', 'hps_qa_ps', 'qa_weighted_score', 
                                                                'initial_grade', 'quarterly_grade'
                                                                ]; 
                                                @endphp
                                    
                                                @foreach($fields as $field)
                                                    <td class="border-2 border-yellow-100 px-2">
                                                        <input type="text" 
                                                                name='{{ "edit_" . $field }}' 
                                                                id='{{ "edit_" . $field }}' 
                                                                class="p-0 border-none bg-transparent text-center" 
                                                                value="{{ $hps->$field }}" readonly>
                                                    </td>
                                                @endforeach
                                    
                                                <td class="border-2 border-yellow-100 px-2">
                                                    <button type="button" 
                                                            class="text-white border bg-green-500 hover:bg-green-900 font-normal rounded text-xs px-2 py-1 
                                                                    editHPS" 
                                                            id="editButton1">
                                                        Edit
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </form>
                                    <!--End Highest Possible Score-->
                                </thead>

                                <!--Post Grading Sheet Button-->    
                                <button id="openModal" 
                                        class="button text-black focus:outline-none bg-green-100 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-brown-100 text-sm px-5 py-2.5 text-center inline-flex items-center mt-2 mb-4 ml-auto">
                                    Post Student Grade
                                </button>

                                <!--Grading Sheet Table-->
                                <tbody class="grading-sheets-body">
                                    @if ($gradingSheets && count($gradingSheets) > 0)
                                    @php
                                        $gradingSheets = $gradingSheets->sortBy(function($sheet) {
                                            return $sheet->student->last_name . $sheet->student->first_name . $sheet->student->middle_name;
                                        });
                                    @endphp
                                        @foreach ($gradingSheets as $id => $gradingSheet)
                                            <tr class="text-center bg-white">
                                                @php 
                                                    $quarterValue = $quarterValue ?? null;
                                                    $class_idValue = $class_idValue ?? null;
                                                    $fields = ['ww1', 'ww2', 'ww3', 'ww4', 'ww5', 'ww6', 'ww7', 'ww8', 'ww9', 'ww10',
                                                               'ww_total', 'ww_ps', 'ww_weighted_score', 'pt1', 'pt2', 'pt3', 
                                                               'pt4', 'pt5', 'pt6', 'pt7', 'pt8', 'pt9', 'pt10', 'pt_total', 
                                                               'pt_ps', 'pp_weighted_score', 'qa10', 'qa_ps', 'qa_weighted_score', 
                                                               'initial_grade', 'quarterly_grade'
                                                            ];
                                                @endphp
                                                <form action="{{ url('faculty.grades.edit_student_grading_sheet/' . $gradingSheet->id) }}"
                                                    method="POST" 
                                                    class="editGradingSheetForm" data-id="{{ $gradingSheet->id }}">
                                                    @csrf 
                                                    <input type="hidden" name="id" value="{{ $gradingSheet->id }}">
                                                    <input type="hidden" name="class_id" value="{{ $class_idValue }}">
                                                    <input type="hidden" name="quarter" value="{{ $quarterValue }}">
                                                    
                                                    <td class="border-2 border-yellow-100 px-2.5 py-2">{{ $loop->iteration }}</td>
                                                    <td class="border-2 border-yellow-100 px-2 text-left">
                                                        {{ $gradingSheet->student->last_name }}, {{ $gradingSheet->student->first_name }} {{ $gradingSheet->student->middle_name }}
                                                    </td>
                                            
                                                    @foreach($fields as $field)
                                                        <td class="border-2 border-yellow-100 px-2">
                                                            <input type="text" 
                                                                name="{{ $field }}" 
                                                                id="{{ $field }}" 
                                                                class="p-0 border-none bg-transparent text-center"
                                                                value="{{ $gradingSheet->$field }}" readonly>
                                                        </td>
                                                    @endforeach
                                            
                                                    <td class="border-2 border-yellow-100 px-2">
                                                        <button type="button" 
                                                                class="text-white border bg-green-500 hover:bg-green-900 font-normal rounded text-xs px-2 py-1 
                                                                        editGradingSheet" 
                                                                data-id= "{{ $gradingSheet->id }}"
                                                                >
                                                            Edit
                                                        </button>
                                                    </td>
                                                
                                                </form>
                                                </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                            <!-- Modal Container Post Grading Sheet Button  -->
                            <div id="myModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
                                <!-- Modal content -->
                                <div class="bg-white p-8 rounded-md shadow-md">
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-exclamation-triangle text-red-500 mr-4 text-3xl"></i>
                                        <p class="text-lg font-bold">Are you sure you want to post the grade to the student portal?</p>
                                    </div>
                                    <div class="flex center items-center">
                                        <p class="text-sm text-gray-600 mb-4">This action will make the quarter grades visible to the students on the portal and cannot be undone. <br>
                                            Please review the grades carefully before proceeding.</p>
                                    </div>                                        
                                    <div class="flex justify-end">
                                        <!-- Yes button -->
                                        <button id="confirmYes" 
                                                class="mr-2 pt-2 pb-2 pl-10 pr-10 button bg-green-500 text-white"
                                                data-quarter="{{ $quarterValue }}">
                                                Yes
                                        </button>
                                        <!-- No button -->
                                        <button id="confirmNo" 
                                                class="button pt-2 pb-2 pl-10 pr-10 bg-red-500 text-white">
                                                No
                                        </button>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <br>
                          <br>
                          <br>
                          <br>
                            <div class="mx-auto w-full ">
                            <!-- Faculty grading sheet for students table for QUARTERLY SUMMARY REPORT -->
                            <table class="w-full lg:text-sm text-xs text-left text-black " 
                                    id="gSheetSummaryTable">
                                <thead class="lg:text-sm text-xs text-black uppercase border-2 border-yellow-100 rounded-t">
                                    <tr class="text-sm text-center">
                                        <th class="border-x-2 border-yellow-100 rounded-tl-md"></th>
                                        <th class="border-x-2 border-yellow-100"></th>
                                        <th class="border-2 py-1.5 border-yellow-100">Grade & Section:</th>
                                        <th colspan="2" class="border-2 border-yellow-100 font-normal">Marilag</th>                                  
                                        <th class="border-2 border-yellow-100">School year:</th>                                  
                                        <th colspan="2" class="border-2 border-yellow-100 font-normal">2023-2024</th>                                  
                                    </tr>
                                    <tr class="text-sm font-light text-center">
                                        <th class=" border-x-2 border-yellow-100 rounded-tl-md"></th>
                                        <th class="border-x-2 text-xl border-yellow-100">Learner's Name</th>
                                        <th class="border-2 py-1.5 border-yellow-100">teacher:</th>
                                        <th colspan="2" class="border-2 border-yellow-100 font-normal">Juan Dela Crux</th>                                  
                                        <th class="border-2 border-yellow-100">Subject:</th>                                  
                                        <th colspan="2" class="border-2 border-yellow-100 font-normal">Filipino</th>                                  
                                    </tr>
                                    <tr class="text-center">
                                        <!-- Student Number 
                                        <th class="border-x-2 border-yellow-100 py-4"></th>
                                        <!-- Student Name -->
                                        <th class="border-x-2 border-yellow-100 px-28"></th>
                                        <th class="border-2 py-1.5 border-yellow-100">1st Quarter</th>  
                                        <th class="border-2 px-2 border-yellow-100">2nd Quarter</th> 
                                        <th class="border-2 border-yellow-100 px-2">3rd Quarter</th>
                                        <th class="border-2 border-yellow-100">4th Quarter</th>
                                        <th class="border-2 border-yellow-100">Final Grade</th>
                                        <th class="border-2 border-yellow-100 px-3">Remark</th>                             
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center bg-white">
                                        <td class="border-2 border-yellow-100 px-2 py-2"></td>
                                        <td class="border-2 border-yellow-100 px-2">Alex reyes</td>
                                        <td class="border-2 border-yellow-100 px-2">90</td>
                                        <td class="border-2 border-yellow-100 px-2">92</td>
                                        <td class="border-2 border-yellow-100 px-2">89</td>
                                        <td class="border-2 border-yellow-100 px-2">90</td>
                                        <td class="border-2 border-yellow-100 px-2">91</td>
                                        <td class="border-2 border-yellow-100 px-2">PASSED</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>

                    </div>

                </div>

                
                <!-- Kinder ECCD Checklist Input -->
                <div class="hidden">
                <h1 class="font-semibold pt-4 text-lg sm:text-xl lg:text-2xl text-black hidden" id="">Early Childhood and Development Care (ECCD) Checklist for Kindergarteners</h1>
                <div class="mx-auto w-full">
                    <div class="bg-white dark:bg-gray-800 relative overflow-hidden">
                        <!-- Kinder ECCD Checklist Table -->
                        <div class="overflow-x-auto pt-4">
                            <!-- Faculty Early Childhood Care and Development (ECCD) Checklist for kinder students table -->
                            <!-- For Backend: Need to connect this table data into the db in order for inputs to be saved and recorded for kinder students-->
                            <table class="w-full lg:text-sm text-xs text-left text-black py-4" id="gSheetTableECCDTable">
                                <thead class="lg:text-sm text-xs text-black uppercase border-2 border-yellow-100 rounded-t">
                                    <tr class="text-lg font-light text-center border-yellow-100">
                                        <th class="border-2 border-yellow-100 w-auto py-2"></th>
                                        <th class="border-2 border-yellow-100 w-auto py-2">Learner's Name</th>
                                        <th class="border-2 border-yellow-100 w-auto py-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center text-black bg-white border-yellow-100">
                                        <td class="border-2 border-yellow-100 w-auto">1</td>
                                        <td class="border-2 border-yellow-100 px-2 pl-4 py-2 text-left">Alex reyes</td>
                                        <td class="border-2 border-yellow-100 px-3 py-3">
                                            <!-- Modal toggle -->
                                            <a href="#" data-modal-target="viewECCDChecklistModal" data-modal-show="viewECCDChecklistModal" type="button" class="px-2 font-medium text-emerald-600 dark:text-emerald-500 hover:underline">View ECCD Checklist</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- End of ECCD Checklist Table -->

                        <!-- ECCD Checklist Modal -->
                        <div id="viewECCDChecklistModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto lg:inset-0 h-[calc(100%-1rem)] max-h-full">
                          <div class="relative w-full max-w-5xl max-h-full">
                            <!-- Modal content -->
                            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                              <!-- Modal header -->
                              <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="pl-2 text-xl font-semibold text-black dark:text-white">
                                  Early Childhood Care and Development Checklist 
                                </h3>
                                <button id="closeECCDChecklistModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="viewECCDChecklistModal">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                                </button>
                              </div> <!-- End of Modal header -->
                              <!-- Modal body -->
                              <div class="p-6 space-y-3 overflow-x-auto max-h-[450px]">
                                <!-- Modal body header -->
                                <div>
                                  <h3 id="ECCD-checklist-student-name" class="text-md font-semibold text-black dark:text-white">Student Name: *Student Name*</h3>
                                  <p id="ECCD-checklist-student-section" class="text-sm font-semibold text-gray-500 dark:text-white">Section: *Section Name*</p>
                                </div> <!-- End of Modal body header -->
                                <!-- Modal body content Individual Student ECCD Tables -->
                                <div class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-6 pt-4 items-start">

                                  <!-- Gross Motor Domain Table -->
                                  <div class="flex h-auto outline outline-2 outline-green-50 rounded-sm">
                                    <table class="w-full text-sm p-4 text-black dark:text-gray-400">
                                      <thead class="text-sm text-white uppercase bg-green-600 dark:bg-gray-700 dark:text-gray-400">
                                        <tr class="text-center ">
                                          <th scope="col" class="text-left px-6 py-3 w-[80%] border-r border-white">
                                              Gross Motor Domain
                                          </th>
                                          <th scope="col" class="px-2 py-3 w-[10%] border-r border-white">
                                              Pre-test
                                          </th>
                                          <th scope="col" class="px-2 py-3 w-[10%] ">
                                              Post-test
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
                                        <!-- Gross Motor Domain 1 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakaaakyat sa upuan o iba pang maaakyatang bagay/kasangkapan gaya ng kama nang walang tulong
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-1-pretest" id="gross-motor-domain-1-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-1-posttest" id="gross-motor-domain-1-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 2 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakalalakad nang paatras
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-2-pretest" id="gross-motor-domain-2-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-2-posttest" id="gross-motor-domain-2-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 3 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakatatakbo nang hindi nadadapa
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-3-pretest" id="gross-motor-domain-3-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-3-posttest" id="gross-motor-domain-3-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 4 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakabababa sa hagdan nang dalawang paa sa bawat hakbang na nakahawak ang isang kamay sa gabay ng hagdanan
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-4-pretest" id="gross-motor-domain-4-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-4-posttest" id="gross-motor-domain-4-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 5 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakaakyat sa hagdan nang dalawang paa sa bawat hakbang na nakahawak ang isang kamay sa gabay ng hagdanan
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-5-pretest" id="gross-motor-domain-5-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-5-posttest" id="gross-motor-domain-5-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 6 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakaaakyat sa hagdan nang salitan ang mga paa at hindi hunahawak sa gabay ng hagdanan
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-6-pretest" id="gross-motor-domain-6-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-6-posttest" id="gross-motor-domain-6-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 7 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakababa sa hagdan nang salitan ang mga paa at hindi humahawak sa gabay ng hagdanan
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-7-pretest" id="gross-motor-domain-7-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-7-posttest" id="gross-motor-domain-7-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 8 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Naigagalaw ang bahagi ng katawan na tinutukoy
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-8-pretest" id="gross-motor-domain-8-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-8-posttest" id="gross-motor-domain-8-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 9 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakatatalon
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-9-pretest" id="gross-motor-domain-9-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-9-posttest" id="gross-motor-domain-9-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 10 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Naihahagis ang bola nang paitaas na may direksyon
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-10-pretest" id="gross-motor-domain-10-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-10-posttest" id="gross-motor-domain-10-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 11 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakalulundag nang isa hanggang tatlong beses gamit ang mas gustong paa
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-11-pretest" id="gross-motor-domain-11-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-11-posttest" id="gross-motor-domain-11-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 12 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakatatalon at nakaiikot
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-12-pretest" id="gross-motor-domain-12-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-12-posttest" id="gross-motor-domain-12-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain 13 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakasasayaw nang may pinaparisan o tinutularan/ nakalalahok sa mga gawaing ukol sa kilos o galaw na para sa grupo
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="gross-motor-domain-13-pretest" id="gross-motor-domain-13-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="gross-motor-domain-13-posttest" id="gross-motor-domain-13-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- Gross Motor Domain Scores -->
                                        <tr class="text-center font-bold odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-right uppercase border-r border-green-200">
                                            Iskor
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <span id="gross-motor-domain-pretest-score">0</span>
                                          </td>
                                          <td class="px-6 py-2">
                                            <span id="gross-motor-domain-posttest-score">0</span>
                                          </td>
                                        </tr>

                                        
                                      </tbody>

                                      <!-- Gross Motor Domain Pretest and Postest Score Calculator -->
                                      <script>
                                        // Calculate the sum of pre-test and post-test scores
                                        function calculateScores() {
                                          let grossMotorDomainPretestScore = 0;
                                          let grossMotorDomainPosttestScore = 0;

                                          // Loop through each checkbox and calculate the scores
                                          for (let i = 1; i <= 13; i++) {
                                            const pretestCheckbox = document.getElementById(`gross-motor-domain-${i}-pretest`);
                                            const posttestCheckbox = document.getElementById(`gross-motor-domain-${i}-posttest`);

                                            if (pretestCheckbox && pretestCheckbox.checked) {
                                              grossMotorDomainPretestScore++;
                                            }

                                            if (posttestCheckbox && posttestCheckbox.checked) {
                                              grossMotorDomainPosttestScore++;
                                            }
                                          }

                                          // Update the pre-test and post-test scores in the HTML
                                          document.getElementById('gross-motor-domain-pretest-score').textContent = grossMotorDomainPretestScore;
                                          document.getElementById('gross-motor-domain-posttest-score').textContent = grossMotorDomainPosttestScore;
                                        }

                                        // Call the calculateScores function when a checkbox is clicked
                                        const grossMotorCheckboxes = document.querySelectorAll('input[type="checkbox"]');
                                        grossMotorCheckboxes.forEach(checkbox => {
                                          checkbox.addEventListener('click', calculateScores);
                                        });

                                        // Call the calculateScores function when the modal is opened
                                        document.getElementById('viewECCDChecklistModal').addEventListener('modal:show', function() {
                                          setTimeout(calculateScores, 0);
                                        });
                                      </script>
                                    </table>
                                  </div> <!-- End of Gross Motor Domain Table -->

                                  <!-- Fine Motor Domain Table -->
                                  <div class="flex h-auto outline outline-2 outline-green-50 rounded-sm ">
                                    <table class="w-full text-sm p-4 text-black dark:text-gray-400">
                                      <thead class="text-sm text-white uppercase bg-green-600 dark:bg-gray-700 dark:text-gray-400">
                                        <tr class="text-center ">
                                          <th scope="col" class="text-left px-6 py-3 w-[80%] border-r border-white">
                                              Fine Motor Domain
                                          </th>
                                          <th scope="col" class="px-2 py-3 w-[10%] border-r border-white">
                                              Pre-test
                                          </th>
                                          <th scope="col" class="px-2 py-3 w-[10%] ">
                                              Post-test
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
                                        <!-- fine Motor Domain 1 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nagagamit ang lahat ng limang daliri at kamay upang makuha ang pagkain/ laruan na nakalagay sa patag na espasyo.
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-1-pretest" id="fine-motor-domain-1-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-1-posttest" id="fine-motor-domain-1-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 2 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakukuha ang mga bagay gamit ang hinlalaki at hintuturo.
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-2-pretest" id="fine-motor-domain-2-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-2-posttest" id="fine-motor-domain-2-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 3 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Naipakikita ang gustong kamay na laging ginagamit.
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-3-pretest" id="fine-motor-domain-3-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-3-posttest" id="fine-motor-domain-3-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 4 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nalalagay/ natatanggal ang mga maliliit na bagay mula sa lalagyan.
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-4-pretest" id="fine-motor-domain-4-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-4-posttest" id="fine-motor-domain-4-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 5 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nahahawakan ang krayola nang nakatikom ang mga daliri sa palad.
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-5-pretest" id="fine-motor-domain-5-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-5-posttest" id="fine-motor-domain-5-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 6 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Natatanggal ang takip ng bote lalagyan o inaalis ang mga balot ng mga pagkain.
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-6-pretest" id="fine-motor-domain-6-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-6-posttest" id="fine-motor-domain-6-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 7 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakaguguhit nang kusa
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-7-pretest" id="fine-motor-domain-7-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-7-posttest" id="fine-motor-domain-7-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 8 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakaguguhit nang patayo at pahalang na linya.
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-8-pretest" id="fine-motor-domain-8-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-8-posttest" id="fine-motor-domain-8-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 9 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakaguguhit ng hugis bilog.
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-9-pretest" id="fine-motor-domain-9-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-9-posttest" id="fine-motor-domain-9-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 10 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakaguguhit ang larawan ng tao (ulo, mata, katawan, braso, kamay o paa).
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-10-pretest" id="fine-motor-domain-10-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-10-posttest" id="fine-motor-domain-10-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>
                                        <!-- fine Motor Domain 11 -->
                                        <tr class="text-center odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-left border-r border-green-200">
                                            Nakaguguhit ang bahay gamit ang iba't-ibang uri ng hugis (parisukat, tatsulok).
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <input type="checkbox" name="fine-motor-domain-11-pretest" id="fine-motor-domain-11-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                          <td class="px-6 py-2">
                                            <input type="checkbox" name="fine-motor-domain-11-posttest" id="fine-motor-domain-11-posttest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
                                          </td>
                                        </tr>                                        
                                        <!-- fine Motor Domain Scores -->
                                        <tr class="text-center font-bold odd:bg-white even:bg-green-50 border-b">
                                          <td class="px-6 py-2 text-right uppercase border-r border-green-200">
                                            Iskor
                                          </td>
                                          <td class="px-6 py-2 border-r border-green-200">
                                            <span id="fine-motor-domain-pretest-score">0</span>
                                          </td>
                                          <td class="px-6 py-2">
                                            <span id="fine-motor-domain-posttest-score">0</span>
                                          </td>
                                        </tr>
                                      </tbody>

                                      <!-- Fine Motor Domain Pretest and Postest Score Calculator -->
                                      <script>
                                        // Calculate the sum of pre-test and post-test scores
                                        function fineMotorCalculateScores() {
                                          let fineMotorDomainPretestScore = 0;
                                          let fineMotorDomainPosttestScore = 0;

                                          // Loop through each checkbox and calculate the scores
                                          for (let i = 1; i <= 13; i++) {
                                            const pretestCheckbox = document.getElementById(`fine-motor-domain-${i}-pretest`);
                                            const posttestCheckbox = document.getElementById(`fine-motor-domain-${i}-posttest`);

                                            if (pretestCheckbox && pretestCheckbox.checked) {
                                              fineMotorDomainPretestScore++;
                                            }

                                            if (posttestCheckbox && posttestCheckbox.checked) {
                                              fineMotorDomainPosttestScore++;
                                            }
                                          }

                                          // Update the pre-test and post-test scores in the HTML
                                          document.getElementById('fine-motor-domain-pretest-score').textContent = fineMotorDomainPretestScore;
                                          document.getElementById('fine-motor-domain-posttest-score').textContent = fineMotorDomainPosttestScore;
                                        }

                                        // Call the calculateScores function when a checkbox is clicked
                                        const fineMotorCheckboxes = document.querySelectorAll('input[type="checkbox"]');
                                        fineMotorCheckboxes.forEach(checkbox => {
                                          checkbox.addEventListener('click', fineMotorCalculateScores);
                                        });

                                        // Call the calculateScores function when the modal is opened
                                        document.getElementById('viewECCDChecklistModal').addEventListener('modal:show', function() {
                                          setTimeout(fineMotorCalculateScores, 0);
                                        });
                                      </script>
                                    </table>
                                  </div> <!-- End of fine Motor Domain Table -->

                                  



                                </div> <!-- End of Modal body content -->
                              </div> <!-- End of Modal body -->
                              <!-- Modal footer -->
                              <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button id="submit-student-assignment-to-section" data-modal-hide="viewECCDChecklistModal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save student list</button>
                                <button data-modal-hide="viewECCDChecklistModal" type="button" class="text-gray-500 bg-white hover:bg-gray-50 focus:ring-2 focus:outline-none focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-black focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                              </div> <!-- End of Modal footer -->
                            </form>  <!-- End of Modal content -->
                            
                          </div>
                        </div> <!-- End of View section info modal -->

                    </div>
                </div>
                </div>
            </div>

        </section>

        @include('scripts_with_ajax')

    </div>

    @elseif (request()->is('faculty.Attendance') )
    <!-- Faculty Attendance Input Section -->
    <div class="md:pl-64 pl-0 min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">

        <section class="self-stretch container lg:p-8 p-7 px-8 grid grid-cols-1 w-full min-h-full relative rounded-md justify-start gap-5 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-200">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-green-900">Attendance</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">In this section, a user-friendly table streamlines raw score input for student grades, automatically calculated by the system. The convenience is further amplified with a dropdown button, allowing faculty to effortlessly switch between grading sheets for different subject classes, catering to the multifaceted roles of teachers.</p>
            </div> <!-- End of Header Content -->

            <div class="flex flex-col gap-2">

                <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl text-black">Attendance Sheet Input for Students</h1>

                <div class="mx-auto w-full ">
                    
                    <div class=" dark:bg-gray-800 relative overflow-hidden">

                        <div class="overflow-x-auto">
                            <!-- Faculty attendance sheet input for students table -->
                            <!-- For Backend: Need these table to be connected in db in order input data to be saved and recordeds -->
                            <table class="w-full lg:text-sm text-xs text-left text-black">
                                <thead class="lg:text-sm text-xs text-black uppercase border-2 border-yellow-100 rounded-t">
                                    <tr class="text-lg font-light text-center">
                                        <th colspan="1" class=" border-2 border-yellow-100"></th>
                                        <th colspan="1" class="border-2 border-yellow-100 py-4">Learner's Name</th>
                                        <th colspan="12" class="border-2 border-yellow-100">Attendance</th>                                
                                    </tr>
                                    <tr class="text-center">
                                        <!-- Student Number --> 
                                        <th class="border-2 border-yellow-100 py-4"></th>
                                        <!-- Student Name --> 
                                        <th class="border-2 border-yellow-100"></th>
                                        <!--Written Works  -->
                                        <th class="border-2 border-yellow-100">Aug</th>  
                                        <th class="border-2 border-yellow-100">Sep</th> 
                                        <th class="border-2 border-yellow-100">Oct</th>
                                        <th class="border-2 border-yellow-100">Nov</th>
                                        <th class="border-2 border-yellow-100">Dec</th>
                                        <th class="border-2 border-yellow-100">Jan</th>
                                        <th class="border-2 border-yellow-100">Feb</th>
                                        <th class="border-2 border-yellow-100">Mar</th>
                                        <th class="border-2 border-yellow-100">Apr</th>
                                        <th class="border-2 border-yellow-100">May</th>
                                        <th class="border-2 border-yellow-100">Jun</th>
                                        <th class="border-2 border-yellow-100">Jly</th>                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td class="border-2 border-yellow-100 py-2 px-1">1</td>
                                        <td class="border-2 border-yellow-100 px-2">Juan Dela Cruz</td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww1' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww2' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww3' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww4' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww5' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww6' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww7' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww8' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww9' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww10' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_total' class="p-0 border-none text-center bg-transparent" disabled></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_percent' class="p-0 border-none text-center bg-transparent" disabled></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="border-2 border-yellow-100 py-2 px-1">2</td>
                                        <td class="border-2 border-yellow-100 px-2">Adrian Fabonan</td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww1' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww2' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww3' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww4' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww5' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww6' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww7' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww8' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww9' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww10' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_total' class="p-0 border-none text-center bg-transparent" disabled></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_percent' class="p-0 border-none text-center bg-transparent" disabled></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="border-2 border-yellow-100 py-2 px-1">3</td>
                                        <td class="border-2 border-yellow-100 px-2">Alex Reyes</td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww1' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww2' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww3' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww4' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww5' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww6' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww7' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww8' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww9' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww10' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_total' class="p-0 border-none text-center bg-transparent" disabled></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_percent' class="p-0 border-none text-center bg-transparent" disabled></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="border-2 border-yellow-100 py-2 px-1">4</td>
                                        <td class="border-2 border-yellow-100 px-2">Karen Tiro</td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww1' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww2' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww3' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww4' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww5' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww6' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww7' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww8' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww9' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww10' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_total' class="p-0 border-none text-center bg-transparent" disabled></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_percent' class="p-0 border-none text-center bg-transparent" disabled></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td class="border-2 border-yellow-100 py-2 px-1">5</td>
                                        <td class="border-2 border-yellow-100 px-2">James Motus</td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww1' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww2' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww3' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww4' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww5' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww6' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww7' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww8' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww9' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww10' class="p-0 border-none text-center bg-transparent"></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_total' class="p-0 border-none text-center bg-transparent" disabled></td>
                                        <td class="border-2 border-yellow-100"><input type="text" name='ww_percent' class="p-0 border-none text-center bg-transparent" disabled></td>
                                    </tr>
                                    <tr class="text-end">
                                        <td colspan="14" class="border-2 border-yellow-100 px-2 py-1.5"><button type="submit" class="text-white border bg-green-500 hover:bg-green-900 rounded text-base px-6 py-1.5">Save</button></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>

        </section>

    </div>

    @endif
    
</div>