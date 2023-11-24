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
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Student Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                    Juan Dela Cruz
                                </td>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                 <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
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
                                        <th scope="col" class="px-4 py-3">Student Name</th>
                                        <th scope="col" class="px-4 py-3">Category</th>
                                        <th scope="col" class="px-4 py-3">Brand</th>
                                        <th scope="col" class="px-4 py-3">Description</th>
                                        <th scope="col" class="px-4 py-3">Price</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Mark Dela Cruz</td>                         
                                        <td class="px-4 py-3">PC</td>
                                        <td class="px-4 py-3">Apple</td>
                                        <td class="px-4 py-3">300</td>
                                        <td class="px-4 py-3">$2999</td>

                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Allen Dela CruzA</td>  
                                        <td class="px-4 py-3">PC</td>
                                        <td class="px-4 py-3">Apple</td>
                                        <td class="px-4 py-3">200</td>
                                        <td class="px-4 py-3">$1499</td>

                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Janus Dela Cruz</td>  
                                        <td class="px-4 py-3">Phone</td>
                                        <td class="px-4 py-3">Apple</td>
                                        <td class="px-4 py-3">1237</td>
                                        <td class="px-4 py-3">$999</td>

                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">George Dela Cruz</td>  
                                        <td class="px-4 py-3">Tablet</td>
                                        <td class="px-4 py-3">Apple</td>
                                        <td class="px-4 py-3">4578</td>
                                        <td class="px-4 py-3">$1199</td>

                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">James Dela Cruz</td>  
                                        <td class="px-4 py-3">Gaming/Console</td>
                                        <td class="px-4 py-3">Microsoft</td>
                                        <td class="px-4 py-3">56</td>
                                        <td class="px-4 py-3">$299</td>

                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">Juan Dela Cruz</td>  
                                        <td class="px-4 py-3">Gaming/Console</td>
                                        <td class="px-4 py-3">Sony</td>
                                        <td class="px-4 py-3">78</td>
                                        <td class="px-4 py-3">$799</td>
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
                                                <input id="fitbit" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-green-600 focus:ring-green-500 dark:focus:ring-green-600 focus:ring-2">
                                                <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Enrolled (16)</label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="razor" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-green-600 focus:ring-green-500 dark:focus:ring-green-600 focus:ring-2">
                                                <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Temporary Enrolled (49)</label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="nikon" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-green-600 focus:ring-green-500 dark:focus:ring-green-600 focus:ring-2">
                                                <label for="nikon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Dropped (12)</label>
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
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">Document item #1</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type2"  name="documents1" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-green-900 dark:text-gray-300">Document item #2</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type3"  name="documents1" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">Document item #3</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type4"  name="documents1" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">Document item #4</label>
                                                            </div>

                                                            <div class="flex items-center p-3 border border-gray-200 rounded">
                                                                <input id="document_type5" name="documents1" type="checkbox" value="" class="w-5 h-5 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
                                                                <label for="default-checkbox" class="ms-3 font-medium text-gray-900 dark:text-gray-300">Document item #5</label>
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

                            <!-- Needs to be dynamic for teacher to be able to only navigate the only subject unit in the given grade level that he/she is handling  --
                            <!-- Grade Level Button -->
                            <button id="gradeBtn" data-dropdown-toggle="grade-dropdown" class="text-white min-w-[300px] justify-between focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-500 text-sm px-8 py-2.5 text-center inline-flex items-center" type="button">Subject Class<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="grade-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="gradeBtn">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeGrade('Grade 1: Mathematics (Halimuyak)')">Grade 1: Mathematics (Halimuyak)</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeGrade('Grade 2: Mathematics (Mabantut)')">Grade 2: Mathematics (Mabantut)</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeGrade('Grade 2: Mathematics (Makati)')">Grade 3: Mathematics (Makati)</a>
                                </li>
                                </ul>

                                <script>
                                    function changeGrade(newText) {
                                        document.getElementById('gradeBtn').innerText = newText;
                                        // You can also close the dropdown if needed
                                        // document.getElementById('quarter-dropdown').classList.add('hidden');
                                    }
                                </script>

                            </div>

                            <!-- Needs to be dynamic for teachers to navigate quarters from 1 to 4 of the given subject from the grade and section that he/she handles-->
                            <button id="quarterBtn" data-dropdown-toggle="quarter-dropdown" class="text-black focus:outline-none bg-green-100 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-brown-100 text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                            Grading Quarter
                            <svg class="w-2.5 h-2.5 ms-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>  
                            </button>

                            <!-- Dropdown menu -->
                            <div id="quarter-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="quarterBtn">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('1st Quarter')">1st Quarter</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('2nd Quarter')">2nd Quarter</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('3rd Quarter')">3rd Quarter</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('4th Quarter')">4th Quarter</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('Quarterly Summary')">Quarterly Summary</a>
                                </li>
                                </ul>

                            </div>

                            <script>
                                function changeQuarter(newText) {
                                    document.getElementById('quarterBtn').innerText = newText;

                                    // Hide all tables initially
                                    hideAllTables();

                                    // Update the header text based on the selected quarter
                                    updateHeaderText(newText);

                                    event.preventDefault(newText);

                                    // Show the tables based on the selected quarter
                                    switch (newText) {
                                        case '1st Quarter':
                                            showTable('gSheetTableQ1');
                                            break;
                                        case '2nd Quarter':
                                            showTable('gSheetTableQ2');
                                            break;
                                        case '3rd Quarter':
                                            showTable('gSheetTableQ3');
                                            break;
                                        case '4th Quarter':
                                            showTable('gSheetTableQ4');
                                            break;
                                        case 'Quarterly Summary':
                                            showTable('gSheetSummaryTable');
                                            break;
                                        // Add more cases for additional quarters if needed
                                    }

                                    // You can also close the dropdown if needed
                                    // document.getElementById('quarter-dropdown').classList.add('hidden');
                                }

                                function hideAllTables() {
                                    // Hide all tables
                                    hideTable('gSheetTableQ1');
                                    hideTable('gSheetTableQ2');
                                    hideTable('gSheetTableQ3');
                                    hideTable('gSheetTableQ4');
                                    hideTable('gSheetSummaryTable');
                                    // Add more hideTable calls for additional tables if needed
                                }

                                function hideTable(tableId) {
                                    // Hide a specific table
                                    var table = document.getElementById(tableId);
                                    if (table) {
                                        table.classList.add('hidden');
                                    }
                                }

                                function showTable(tableId) {
                                    // Show a specific table
                                    var table = document.getElementById(tableId);
                                    if (table) {
                                        table.classList.remove('hidden');
                                    }
                                }

                                function updateHeaderText(selectedQuarter) {
                                    // Update the header text based on the selected quarter
                                    var header = document.getElementById('gSheetHeader');
                                    var alert = document.getElementById('LISReady');
                                    if (header) {
                                        if (selectedQuarter === 'Quarterly Summary') {
                                            header.textContent = 'School Year Grade Summary Report';
                                        } else {
                                            // Set the default header text for other quarters
                                            header.textContent = 'Grading Sheet Input for  Studentst';
                                        }
                                    }
                                    if (alert) {
                                        if (selectedQuarter === 'Quarterly Summary') {
                                            alert.classList.remove('hidden');
                                        } else {
                                            // Set the default header text for other quarters
                                            alert.classList.add('hidden');
                                        }
                                    }

                                    event.preventDefault(selectedQuarter);
                                }
                            </script>

                        </div>

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

                        <div class="overflow-x-auto pt-4">
                            <!-- Faculty grading sheet for students table for QUARTER 1 -->
                            <!-- For Backend: The need to connect this table data into the db in orde for inputs to be saved and recorded for students-->
                            <table class="w-full lg:text-sm text-xs text-left text-black " id="gSheetTableQ1">

                                <thead class="lg:text-sm text-xs text-black uppercase border-2 border-yellow-100 rounded-t">
                                    <tr class="text-lg font-light text-center">
                                        <th colspan="1" class=" border-2 border-yellow-100 rounded-tl-md"></th>
                                        <th colspan="1" class="border-2 w-[25%] border-yellow-100">Learner's Name</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Written Works</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Performance Tasks</th>
                                        <th colspan="3" class="text-base border-2 border-yellow-100 ">Quarterly Assessment (20%)</th>
                                        <th colspan="1" class="text-sm  border-2 normal-case border-yellow-100">Initial</th>
                                        <th colspan="1" class="text-sm border-2 normal-case border-yellow-100"> Quarterly</th>
                                        <th class="rounded-tr-md border-2 border-yellow-100"><span class="sr-only"></span></th>                                    
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
                                    <!-- Needs to be dynamic since items number may differ -->
                                    <tr class=" text-center font-medium" id="q1Header">
                                        <th class="border-2 border-yellow-100"></th>
                                        <th class="border-2 border-yellow-100 py-1.5">Highest Possible Score</th>       
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww1' class="p-0 border-none bg-transparent text-center">
                                        </td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww2' class="p-0 border-none bg-transparent text-center" >
                                        </td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww3' class="p-0 border-none bg-transparent text-center" >
                                        </td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww4' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww5' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww6' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww7' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww8' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww9' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww10' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt1' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt2' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt3' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt4' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt5' class="p-0 border-none bg-transparent text-center" ></td> 
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt6' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt7' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt8' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt9' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt10' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2" >
                                            <input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2 ">
                                            <input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 ">
                                            <input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2">
                                            <button type="button" class="text-white border bg-red-500 hover:bg-red-900 font-normal rounded text-xs px-2 py-1" id="editButton1">Edit</button></td>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center bg-white" id="q1row1">
                                        <td class="border-2 border-yellow-100 px-2.5 py-2">1</td>
                                        <td class="border-2 border-yellow-100 px-2">Juan Dela Cruz</td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center"></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="submit" class="text-white border bg-red-500 hover:bg-red-900 font-normal rounded text-xs px-2 py-1" id="editButton2">Edit</button></td>
                                    </tr>
                                    <tr class="text-center bg-white" id="q1row2">
                                        <td class="border-2 border-yellow-100 px-2.5 py-2">1</td>
                                        <td class="border-2 border-yellow-100 px-2">Adrian Fabonan</td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center"></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="submit" class="text-white border bg-red-500 hover:bg-red-900  font-normal rounded text-xs px-2 py-1" id="editButton3">Edit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <!-- Faculty grading sheet for students table for QUARTER 2 -->
                            <!-- For Backend: The need to connect this table data into the db in orde for inputs to be saved and recorded for students-->
                            <table class="w-full lg:text-sm text-xs text-left text-black hidden" id="gSheetTableQ2">
                                <thead class="lg:text-sm text-xs text-black uppercase border-2 border-yellow-100 rounded-t">
                                    <tr class="text-lg font-light text-center">
                                        <th colspan="1" class=" border-2 border-yellow-100 rounded-tl-md"></th>
                                        <th colspan="1" class="border-2 w-[25%] border-yellow-100">Learner's Name</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Written Works</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Performance Tasks</th>
                                        <th colspan="3" class="text-base border-2 border-yellow-100 ">Quarterly Assessment (20%)</th>
                                        <th colspan="1" class="text-sm  border-2 normal-case border-yellow-100">Initial</th>
                                        <th colspan="1" class="text-sm border-2 normal-case border-yellow-100"> Quarterly</th>
                                        <th class="rounded-tr-md border-2 border-yellow-100"><span class="sr-only"></span></th>                                    
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
                                        <th class="border-x-2 border-yellow-100 normal-case">Grade</th>
                                        <!-- Quarterly Grade -->
                                        <th class="border-x-2 border-yellow-100 normal-case">Grade</th> 
                                        <th class=" border-x-2 border-yellow-100"><span class="sr-only"></span></th>                                 
                                    </tr>
                                    <!-- Needs to be dynamic since items number may differ -->
                                    <tr class=" text-center font-medium" id="q2Header">
                                        <th class="border-2 border-yellow-100"></th>
                                        <th class="border-2 border-yellow-100 py-1.5">Highest Possible Score</th>       
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center" ></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="button" class="text-white border bg-red-500 hover:bg-red-900 font-normal rounded text-xs px-2 py-1" id="editButton4">Edit</button></td>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center bg-white" id="q2row1">
                                        <td class="border-2 border-yellow-100 px-2.5 py-2">1</td>
                                        <td class="border-2 border-yellow-100 px-2">Karen Tiro</td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center"></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='qa_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="submit" class="text-white border bg-red-500 hover:bg-red-900  font-normal rounded text-xs px-2 py-1" id="editButton5">Edit</button></td>
                                    </tr>
                                    <tr class="text-center bg-white" id="q2row2">
                                        <td class="border-2 border-yellow-100 px-2.5 py-2">1</td>
                                        <td class="border-2 border-yellow-100 px-2">Alex Reyes</td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center"></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="button" class="text-white border bg-red-500 hover:bg-red-900  font-normal rounded text-xs px-2 py-1" id="editButton6">Edit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <!-- Faculty grading sheet for students table for QUARTER 3 -->
                            <!-- For Backend: The need to connect this table data into the db in orde for inputs to be saved and recorded for students-->
                            <table class="w-full lg:text-sm text-xs text-left text-black hidden" id="gSheetTableQ3">
                                <thead class="lg:text-sm text-xs text-black uppercase border-2 border-yellow-100 rounded-t">
                                    <tr class="text-lg font-light text-center">
                                        <th colspan="1" class=" border-2 border-yellow-100 rounded-tl-md"></th>
                                        <th colspan="1" class="border-2 w-[25%] border-yellow-100">Learner's Name</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Written Works</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Performance Tasks</th>
                                        <th colspan="3" class="text-base border-2 border-yellow-100 ">Quarterly Assessment (20%)</th>
                                        <th colspan="1" class="text-sm  border-2 normal-case border-yellow-100">Initial</th>
                                        <th colspan="1" class="text-sm border-2 normal-case border-yellow-100"> Quarterly</th>
                                        <th class="rounded-tr-md border-2 border-yellow-100"><span class="sr-only"></span></th>                                    
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
                                        <th class="border-x-2 border-yellow-100 normal-case">Grade</th>
                                        <!-- Quarterly Grade -->
                                        <th class="border-x-2 border-yellow-100 normal-case">Grade</th> 
                                        <th class=" border-x-2 border-yellow-100"><span class="sr-only"></span></th>                                 
                                    </tr>
                                    <!-- Needs to be dynamic since items number may differ -->
                                    <tr class=" text-center font-medium" id="q3Header">
                                        <th class="border-2 border-yellow-100"></th>
                                        <th class="border-2 border-yellow-100 py-1.5">Highest Possible Score</th>       
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center" ></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="button" class="text-white border bg-red-500 hover:bg-red-900 font-normal rounded text-xs px-2 py-1" id="editButton7">Edit</button></td>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center bg-white" id="q3row1">
                                        <td class="border-2 border-yellow-100 px-2.5 py-2">1</td>
                                        <td class="border-2 border-yellow-100 px-2">James Motus</td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center"></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="submit" class="text-white border bg-red-500 hover:bg-red-900  font-normal rounded text-xs px-2 py-1" id="editButton8">Edit</button></td>
                                    </tr>
                                    <tr class="text-center bg-white" id="q3row2">
                                        <td class="border-2 border-yellow-100 px-2.5 py-2">1</td>
                                        <td class="border-2 border-yellow-100 px-2">Karen Tiro</td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center"></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="submit" class="text-white border bg-red-500 hover:bg-red-900  font-normal rounded text-xs px-2 py-1" id="editButton9">Edit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <!-- Faculty grading sheet for students table for QUARTER 4 -->
                            <!-- For Backend: The need to connect this table data into the db in orde for inputs to be saved and recorded for students-->
                            <table class="w-full lg:text-sm text-xs text-left text-black hidden" id="gSheetTableQ4">
                                <thead class="lg:text-sm text-xs text-black uppercase border-2 border-yellow-100 rounded-t">
                                    <tr class="text-lg font-light text-center">
                                        <th colspan="1" class=" border-2 border-yellow-100 rounded-tl-md"></th>
                                        <th colspan="1" class="border-2 w-[25%] border-yellow-100">Learner's Name</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Written Works</th>
                                        <th colspan="13" class="border-2 w-[30%] border-yellow-100">Performance Tasks</th>
                                        <th colspan="3" class="text-base border-2 border-yellow-100 ">Quarterly Assessment (20%)</th>
                                        <th colspan="1" class="text-sm  border-2 normal-case border-yellow-100">Initial</th>
                                        <th colspan="1" class="text-sm border-2 normal-case border-yellow-100"> Quarterly</th>
                                        <th class="rounded-tr-md border-2 border-yellow-100"><span class="sr-only"></span></th>                                    
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
                                        <th class="border-x-2 border-yellow-100 normal-case">Grade</th>
                                        <!-- Quarterly Grade -->
                                        <th class="border-x-2 border-yellow-100 normal-case">Grade</th> 
                                        <th class=" border-x-2 border-yellow-100"><span class="sr-only"></span></th>                                 
                                    </tr>
                                    <!-- Needs to be dynamic since items number may differ -->
                                    <tr class=" text-center font-medium" id="q4Header">
                                        <th class="border-2 border-yellow-100"></th>
                                        <th class="border-2 border-yellow-100 py-1.5">Highest Possible Score</th>       
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center" ></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" ></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="button" class="text-white border bg-red-500 hover:bg-red-900 font-normal rounded text-xs px-2 py-1" id="editButton10">Edit</button></td>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center bg-white" id="q4row1">
                                        <td class="border-2 border-yellow-100 px-2.5 py-2">1</td>
                                        <td class="border-2 border-yellow-100 px-2">Alex reyes</td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center"></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="button" class="text-white border bg-red-500 hover:bg-red-900  font-normal rounded text-xs px-2 py-1" id="editButton11">Edit</button></td>
                                    </tr>
                                    <tr class="text-center bg-white" id="q4row2">
                                        <td class="border-2 border-yellow-100 px-2.5 py-2">1</td>
                                        <td class="border-2 border-yellow-100 px-2">Adrian Fabonan</td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww5' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt1' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt2' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt3' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt4' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt5' class="p-0 border-none bg-transparent text-center"></td> 
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt6' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt7' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt8' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt9' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt10' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" ><input type="text" name='pt_total' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='qa' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2 "><input type="text" name='pt_percent' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none bg-transparent text-center"></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none bg-transparent text-center" disabled></td>
                                        <td class="border-2 border-yellow-100 px-2"><button type="button" class="text-white border bg-red-500 hover:bg-red-900  font-normal rounded text-xs px-2 py-1" id="editButton12">Edit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <!-- Faculty grading sheet for students table for QUARTERLY SUMMARY REPORT -->
                            <!-- For Backend: The need to connect this table data into the db in orde for inputs to be saved and recorded for students-->
                            <table class="w-full lg:text-sm text-xs text-left text-black hidden" id="gSheetSummaryTable">
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
                                        <!-- Student Number --> 
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
                                        <td class="border-2 border-yellow-100 px-2 py-2">1</td>
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

                            <!-- Edit/Save Button inside gsheet script -->
                            <script>
                                function setupToggleButton(buttonId) {
                                    var editButton = document.getElementById(buttonId);

                                    if (editButton) {
                                    editButton.addEventListener('click', function() {
                                        editButton.textContent = (editButton.textContent === 'Edit') ? 'Save' : 'Edit';
                                        editButton.classList.toggle('bg-green-500');
                                        editButton.classList.toggle('hover:bg-green-900');
                                        editButton.classList.toggle('bg-red-500');
                                        editButton.classList.toggle('hover:bg-red-900');
                                    });
                                    }
                                }

                                // Setup for multiple buttons
                                setupToggleButton('editButton1');
                                setupToggleButton('editButton2');
                                setupToggleButton('editButton3'); // For 1st Quarter
                                setupToggleButton('editButton4');
                                setupToggleButton('editButton5');
                                setupToggleButton('editButton6'); // For 2nd Quarter
                                setupToggleButton('editButton7');
                                setupToggleButton('editButton8');
                                setupToggleButton('editButton9'); // For 3rd Quarter
                                setupToggleButton('editButton10');
                                setupToggleButton('editButton11');
                                setupToggleButton('editButton12');// For 4th Quarter
                                // Add more buttons as needed
                            </script>

                            <!-- Enable/Disable of input fields in the table -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    // Function to toggle the disabled attribute of input fields
                                    function toggleInputFields(rowId, buttonId) {
                                        var editableRow = document.getElementById(rowId);
                                        var inputFields = editableRow.querySelectorAll('input[type="text"]');
                                        var editButton = document.getElementById(buttonId);


                                        // Set input fields to disabled initially
                                        inputFields.forEach(function (input) {
                                            input.disabled = true;
                                        });

                                        editButton.addEventListener('click', function () {
                                            inputFields.forEach(function (input) {
                                                input.disabled = !input.disabled;
                                            });
                                        });
                                    }

                                    // Call the function for each row and button combination
                                    toggleInputFields('q1Header', 'editButton1');
                                    toggleInputFields('q1row1', 'editButton2');
                                    toggleInputFields('q1row2', 'editButton3');// For Quarter 1 table
                                    toggleInputFields('q2Header', 'editButton4');
                                    toggleInputFields('q2row1', 'editButton5');
                                    toggleInputFields('q2row2', 'editButton6');// For Quarter 2 table
                                    toggleInputFields('q3Header', 'editButton7');
                                    toggleInputFields('q3row1', 'editButton8');
                                    toggleInputFields('q3row2', 'editButton9');// For Quarter 3 table
                                    toggleInputFields('q4Header', 'editButton10');
                                    toggleInputFields('q4row1', 'editButton11');
                                    toggleInputFields('q4row2', 'editButton12');// For Quarter 4 table
                                    // Add more calls for additional rows and buttons as needed
                                });
                            </script>

                        </div>

                    </div>

                </div>

                <!-- Kinder ECCD Checklist Input -->
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
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                              <div class="p-6 space-y-3">
                                <!-- Modal body header -->
                                <div>
                                  <h3 id="ECCD-checklist-student-name" class="text-md font-semibold text-black dark:text-white">Student Name: *Student Name*</h3>
                                  <p id="ECCD-checklist-student-section" class="text-sm font-semibold text-gray-500 dark:text-white">Section: *Section Name*</p>
                                </div> <!-- End of Modal body header -->
                                <!-- Modal body content Individual Student ECCD Tables -->
                                <div class="grid grid-cols-2 gap-6 pt-4">
                                  <!-- Gross Motor Domain Table -->
                                  <div class="relative outline outline-2 outline-green-50 rounded-sm">
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
                                            <input type="checkbox" name="gross-motor-domain-1-posttest" id="gross-motor-domain-1-pretest" class="h-4 w-4 text-green-600 focus:ring-1 focus:ring-green-400 rounded-sm transition duration-150 ease-in-out">
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
                                            <span id="pretest-score">0</span>
                                          </td>
                                          <td class="px-6 py-2">
                                            <span id="posttest-score">0</span>
                                          </td>
                                        </tr>

                                        <!-- Gross Motor Domain Pretest and Postest Score Calculator -->
                                        <script>
                                          // Calculate the sum of pre-test and post-test scores
                                          function calculateScores() {
                                            let pretestScore = 0;
                                            let posttestScore = 0;

                                            // Loop through each checkbox and calculate the scores
                                            for (let i = 1; i <= 13; i++) {
                                              const pretestCheckbox = document.getElementById(`gross-motor-domain-${i}-pretest`);
                                              const posttestCheckbox = document.getElementById(`gross-motor-domain-${i}-posttest`);

                                              if (pretestCheckbox && pretestCheckbox.checked) {
                                                pretestScore++;
                                              }

                                              if (posttestCheckbox && posttestCheckbox.checked) {
                                                posttestScore++;
                                              }
                                            }

                                            // Update the pre-test and post-test scores in the HTML
                                            document.getElementById('pretest-score').textContent = pretestScore;
                                            document.getElementById('posttest-score').textContent = posttestScore;
                                          }

                                          // Call the calculateScores function when a checkbox is clicked
                                          const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                                          checkboxes.forEach(checkbox => {
                                            checkbox.addEventListener('click', calculateScores);
                                          });

                                          // Call the calculateScores function when the modal is opened
                                          document.getElementById('viewECCDChecklistModal').addEventListener('modal:show', function() {
                                            setTimeout(calculateScores, 0);
                                          });
                                        </script>
                                      </tbody>
                                    </table>
                                  </div> <!-- End of Gross Motor Domain Table -->
                                </div> <!-- End of Modal body content -->
                              </div> <!-- End of Modal body -->
                              
                            </div> 
                            
                          </div>
                        </div> <!-- End of View section info modal -->

                    </div>
                </div>
            </div>

        </section>

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