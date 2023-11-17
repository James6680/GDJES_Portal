<!-- Content Section -->
<div>   
    <!-- Announcement Section -->
    @if (request()->is('faculty.announcements') )
    @vite(['resources/js/faculty.announcements.js'])
    <div class="md:pl-64 w-full min-h-full sm:py-12 sm:pb-9 sm:pr-[-10rem] py-7 sm:px-16 px-6 bg-yellow-50">

        <section class="min-w-full min-h-full relative grid grid-cols-1 sm:gap-7 gap-5 marker: md:ml-8  items-center">

            <!-- Announcement Main Container -->
            <!-- Backend side: need to connect para magreflect ung icrcreate na announcement ng admin -->
            <div class="rounded-md w-auto h-auto relative container p-6 grid grid-cols-1 bg-yellow-600 shadow shadow-green-500">

                <ul class="m-o p-0 text-white" id="announcement-list">

                    <li class="p-0 m-0">
                        <span class="font-mulish font-semibold text-2xl sm:text-3xl ">Announcements</span>
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

            <div class="flex flex-col gap-2">

                <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl text-black">Advisory Class</h1>

                <div class="relative overflow-x-auto font-mulish">

                    <table class="w-full lg:text-sm text-xs text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-200" >

                        <thead class="lg:text-sm text-xs text-white uppercase bg-yellow-600 ">
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
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Juan Dela Cruz
                                </th>
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
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
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
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
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
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
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
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
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
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
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

            <div class="flex flex-col gap-2">.

                <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl text-black">Subject Class</h1>

                <div class="mx-auto w-full">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative overflow-hidden">
                        
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-2 p-3 px-1">

                            <div class="w-full md:w-1/2">

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
                            
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                                <div class="flex items-center lg:space-x-3 space-x-1 w-full md:w-auto">

                                    <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto font-mulish items-center justify-center lg:text-sm text-xs py-2.5 lg:px-4 md:px-2 px-4 font-medium flex text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600" type="button">
                                        <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                        Grade & Section
                                    </button>

                                    <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade & Section #1</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade & Section #2</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade & Section #3</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade & Section #4</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade & Section #5</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto font-mulish items-center justify-center lg:text-sm text-xs py-2.5 lg:px-4 md:px-2 px-4 font-medium flex text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600" type="button">
                                        Subject
                                        <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                    </button>

                                    <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Subject #1</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Subject #2</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Subject #3</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Subject #4</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Subject #5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-x-auto">

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
    <!-- Class Schedule Section -->
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">
        
        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-100">

            <div class="flex flex-col gap-2">  
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">Enrollments</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!-- End of Header Content -->

            <div class="flex flex-col gap-2">.

                <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl text-black">Subject Class</h1>

                <div class="mx-auto w-full ">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative overflow-hidden">
                        
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-2 p-3 px-1">

                            <div class="w-full md:w-1/2">

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
                            
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                                <div class="flex items-center lg:space-x-3 space-x-1 w-full md:w-auto">

                                    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto font-mulish items-center justify-center lg:text-sm text-xs py-2.5 lg:px-6 md:px-2 px-4 font-medium flex text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="white">
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
                                            <p data-modal-target="small-modal" data-modal-toggle="modal1" class="inline-flex items-center cursor-pointer uppercase text-base font-medium text-center text-blue-700 hover:text-blue-400">
                                                edit
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
                                            <button data-popover-target="popover-click" data-popover-placement="left" data-popover-trigger="click" type="button" class="text-blue-700 border     border-blue-700 hover:bg-blue-100 font-medium rounded text-sm  px-4 py-1 text-center " id="statusButton1">
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
                                            <p data-modal-target="small-modal" data-modal-toggle="modal2" class="inline-flex items-center cursor-pointer uppercase text-base font-medium text-center text-blue-700 hover:text-blue-400">
                                                edit
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
                                            <button data-popover-target="popover-click2" data-popover-placement="left" data-popover-trigger="click" type="button" class="text-blue-700 border     border-blue-700 hover:bg-blue-100 font-medium rounded text-sm px-4 py-1 text-center btn2" id="statusButton2">
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
                                <script>
                                    function changeStatus(status, buttonId) {
                                    var button = document.getElementById(buttonId);

                                    // Remove existing classes
                                    button.className = "text-sm px-4 py-1 text-center";

                                    // Add classes based on selected status
                                    switch (status) {
                                        case "Enrolled":
                                        button.classList.add("text-green-500", "border", "border-green-500", "hover:bg-green-100", "focus:ring-1", "focus:outline-none", "focus:ring-gray-700", "font-medium", "rounded");
                                        break;
                                        case "Temporary":
                                        button.classList.add("text-yellow-500", "border", "border-yellow-500", "hover:bg-yellow-100", "focus:ring-1", "focus:outline-none", "focus:ring-gray-700", "font-medium", "rounded");
                                        break;
                                        case "Dropped":
                                        button.classList.add("text-red-600", "border", "border-red-600", "hover:bg-red-100", "focus:ring-1", "focus:outline-none", "font-semibold", "rounded");
                                        break;
                                        default:
                                        // If None or other value is selected, keep default classes
                                        button.classList.add("text-gray-700", "border", "border-gray-700", "hover:bg-gray-100", "focus:ring-1", "focus:outline-none", "focus:ring-gray-700", "font-medium", "rounded");
                                    }
                                    button.textContent = status; // Update button text
                                    }
                                </script>
                            </table>

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
    <!-- Student Enrollment Status Section -->
    <div class="md:pl-64 pl-0 min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">

        <section class="self-stretch container lg:p-8 p-7 px-8 grid grid-cols-1 w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-200">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-green-900">Grades</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!-- End of Header Content -->

            <div class="flex flex-col gap-2">

                <h1 class="font-semibold text-lg sm:text-xl lg:text-2xl text-black">Class Record</h1>

                <div class="mx-auto w-full ">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative overflow-hidden">
                        
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-2 p-3 px-1">

                            <div class="w-full md:w-1/2">

                                <form class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="myInput" onkeyup="myFunction()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-400 focus:border-green-400 block w-full pl-10 p-3 py-2" placeholder="Search" >
                                    </div>
                                </form>

                            </div>
                            
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                                <div class="flex items-center lg:space-x-3 space-x-1 w-full md:w-auto">

                                    <button id="quarterBtn" data-dropdown-toggle="quarter-dropdown" class="text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 text-sm px-4 py-2 text-center inline-flex items-center" type="button">
                                    Quarter
                                    <svg class="w-2.5 h-2.5 ms-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="quarter-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="quarterBtn">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('Quarter 1')">Quarter 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('Quarter 2')">Quarter 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('Quarter 3')">Quarter 3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeQuarter('Quarter 4')">Quarter 4</a>
                                        </li>
                                        </ul>

                                        <script>
                                            function changeQuarter(newText) {
                                                document.getElementById('quarterBtn').innerText = newText;
                                                // You can also close the dropdown if needed
                                                // document.getElementById('quarter-dropdown').classList.add('hidden');
                                            }
                                        </script>
                                    </div>

                                    <!-- Subject Button -->
                                    <button id="subjectBtn" data-dropdown-toggle="subject-dropdown" class="text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 text-sm px-4 py-2 text-center inline-flex items-center" type="button">
                                    Subject
                                    <svg class="w-2.5 h-2.5 ms-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="subject-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="subjectBtn">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeSubject('Subject 1')">Subject 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeSubject('Subject 2')">Subject 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeSubject('Subject 3')">Subject 3</a>
                                        </li>
                                        </ul>

                                        <script>
                                            function changeSubject(newText) {
                                                document.getElementById('subjectBtn').innerText = newText;
                                                // You can also close the dropdown if needed
                                                // document.getElementById('quarter-dropdown').classList.add('hidden');
                                            }
                                        </script>

                                    </div>

                                    <!-- Section Level Button -->
                                    <button id="sectionBtn" data-dropdown-toggle="section-dropdown" class="text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 text-sm px-4 py-2 text-center inline-flex items-center" type="button">Section<svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="section-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="sectionBtn">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeSection('Section 1')">Section 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeSection('Section 2')">Section 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeSection('Section 3')">Section 3</a>
                                        </li>
                                        </ul>

                                        <script>
                                            function changeSection(newText) {
                                                document.getElementById('sectionBtn').innerText = newText;
                                                // You can also close the dropdown if needed
                                                // document.getElementById('quarter-dropdown').classList.add('hidden');
                                            }
                                        </script>

                                    </div>
                                    
                                    <!-- Grade Level Button -->
                                    <button id="gradeBtn" data-dropdown-toggle="grade-dropdown" class="text-white focus:outline-none bg-green-500 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 text-sm px-4 py-2 text-center inline-flex items-center" type="button">Grade<svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="grade-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="gradeBtn">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeGrade('Grade 1')">Grade 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeGrade('Grade 2')">Grade 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="changeGrade('Grade 3')">Grade 3</a>
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

                                </div>
                            </div>
                        </div>

                        <div class="overflow-x-auto">

                            <table class="w-full lg:text-sm text-xs text-left text-black " id="myTable">
                                <thead class="lg:text-base text-xs text-white uppercase bg-yellow-600 rounded-t">
                                    <tr class=" text-lg text-center ">
                                        <th colspan="1" class="border-x border-gray-100 rounded-tl-md"></th>
                                        <th colspan="1" class="border-x w-[25%] border-gray-100">Student Name</th>
                                        <th colspan="13" class="border-x w-[30%]  border-gray-100">Written Works</th>
                                        <th colspan="13" class="border-x w-[30%]  border-gray-100">Performance Tasks</th>
                                        <th colspan="3" class="text-base border-x border-gray-100 ">Quarterly Assessment (20%)</th>
                                        <th colspan="1" class="text-sm border-r normal-case border-gray-100">Initial Grade</th>
                                        <th colspan="1" class="text-sm border-r normal-case border-gray-100"> Quarterly Grade</th>
                                        <th class="rounded-tr-md"><span class="sr-only"></span></th>                                    
                                    </tr>
                                    <tr class="text-center px-4">
                                        <!-- Student Number --> 
                                        <th class="border border-gray-100 py-4"></th>
                                        <!-- Student Name --> 
                                        <th class="border border-gray-100 px-28"></th>
                                        <!--Written Works  -->
                                        <th class="border border-gray-100">1</th>  
                                        <th class="border border-gray-100">2</th> 
                                        <th class="border border-gray-100">3</th>
                                        <th class="border border-gray-100">4</th>
                                        <th class="border border-gray-100">5</th>
                                        <th class="border border-gray-100">6</th>
                                        <th class="border border-gray-100">7</th>
                                        <th class="border border-gray-100">8</th>
                                        <th class="border border-gray-100">9</th>
                                        <th class="border border-gray-100">10</th>
                                        <th class="normal-case border border-gray-100">Total</th>
                                        <th class="border border-gray-100 w-7">PS</th>
                                        <th class="border border-gray-100">WS</th>
                                        <!-- PerFormance Tasks -->
                                        <th class="border border-gray-100">1</th>
                                        <th class="border border-gray-100">2</th>
                                        <th class="border border-gray-100">3</th>
                                        <th class="border border-gray-100">4</th>
                                        <th class="border border-gray-100">5</th>
                                        <th class="border border-gray-100">6</th>
                                        <th class="border border-gray-100">7</th>
                                        <th class="border border-gray-100">8</th>
                                        <th class="border border-gray-100">9</th>
                                        <th class="border border-gray-100">10</th>
                                        <th class="normal-case border-t border border-gray-100">Total</th>
                                        <th class="border border-gray-100">PS</th>
                                        <th class="border border-gray-100">WS</th>
                                        <!-- Quarterly Assessment (20%) -->
                                        <th class="border border-gray-100">1</th>
                                        <th class="border border-gray-100">PS</th>
                                        <th class="border border-gray-100">WS</th>
                                         <!-- Initial Grade -->
                                        <th class="border border-gray-100"></th>
                                         <!-- Quarterly Grade -->
                                        <th class="border border-gray-100"></th> 
                                        <th><span class="sr-only"></span></th>                                 
                                    </tr>
                                    <!-- Needs to be dynamic since items number may differ -->
                                    <tr class=" text-center font-medium">
                                        <th class="border border-gray-100 py-4  "></th>
                                        <th class="border border-gray-100">Highest Possible Score</th>                    
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">100</th>
                                        <th class="border border-gray-100">PS</th>
                                        <th class="border border-gray-100">WS</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">100</th>
                                        <th class="border border-gray-100">PS</th>
                                        <th class="border border-gray-100">WS</th>
                                        <th class="border border-gray-100">20</th>
                                        <th class="border border-gray-100">PS</th>
                                        <th class="border border-gray-100">WS</th>
                                        <th class="border border-gray-100"></th>     
                                        <th class="border border-gray-100"></th>
                                        <th><span class="sr-only"></span></th>                                       
                                    </tr>
                                    <!-- Gender Separation -->
                                    <tr class="text-center">
                                        <th class="border border-gray-100 "></th>
                                        <th class="border border-gray-100 text-start font-semibold py-2">Male</th>                    
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>     
                                        <th class="border border-gray-100"></th>
                                        <th class="border border-gray-100"></th>
                                        <th><span class="sr-only"></span></th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center bg-white">
                                        <td class="border border-yellow-500 px-2 py-2">1</td>
                                        <td class="border border-yellow-500 px-2">Juan Dela Cruz</td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww1' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww2' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww3' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww4' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww5' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww6' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww7' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww8' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww9' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww10' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww_total' class="p-0 border-none" disabled></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww_percent' class="p-0 border-none" disabled></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='ww_weighted_score' class="p-0 border-none" disabled></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt1' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt2' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt3' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt4' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt5' class="p-0 border-none"></td> 
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt6' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt7' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt8' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt9' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt10' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2" ><input type="text" name='pt_total' class="p-0 border-none" disabled></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt_percent' class="p-0 border-none" disabled></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none" disabled></td>
                                        <td class="border border-yellow-500 px-2 "><input type="text" name='qa' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2 "><input type="text" name='pt_percent' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2"><input type="text" name='pt_weighted_score' class="p-0 border-none"></td>
                                        <td class="border border-yellow-500 px-2" disabled><input type="text" name='initial_grade' class="p-0 border-none" disabled></td>
                                        <td class="border border-yellow-500 px-2" disabled><input type="text" name='quarterly_grade' class="p-0 border-none" disabled></td>
                                        <td class="border border-yellow-500 px-2"><button type="submit" class="text-blue-700 border border-blue-700 hover:bg-blue-100 ring-1 focus:ring-blue-800 font-normal rounded text-sm px-2 py-1 ">Save</button></td>
                                    </tr>
                                </tbody>
                            </table>

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
    @endif
</div>
<!-- Requests Document Section -->

<!-- Student Information Section -->