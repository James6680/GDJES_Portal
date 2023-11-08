<!-- Content Section -->
<div>   
    <!-- Announcement Section -->
    @if (request()->is('student.announcements') )
    <div class="md:pl-64 w-full min-h-full sm:py-8 sm:pb-[-10rem] sm:pr-[-10rem] py-7 sm:px-10 px-6 bg-gray-200">

        <section class="min-w-full min-h-full relative grid grid-cols-1 sm:gap-6 gap-5 marker: md:ml-5 items-center">

            <!-- Announcement Main Container -->
            <div class="rounded-md w-auto h-auto relative container lg:p-9 p-6 grid grid-cols-1 bg-green-500">

                <ul class="m-o p-0 text-white">

                    <li class="p-0 m-0">
                        <span class="font-mulish font-semibold text-2xl sm:text-3xl ">Announcements</span>
                    </li>

                    <li class="py-5 border-b-2 border-white hover:border-b-2 hover:border-green-200 hover:text-green-200">
                        <a href="https://www.facebook.com/photo?fbid=772548511547342&set=a.481770427291820"
                        class="flex flex-col justify-between align-middle">
                        <span class="font-mulish font-semibold text-base sm:text-lg">Title of Announcement 1</span>
                        <span class="font-mulish font-normal text-base sm:text-lg">Date Published 1</span>
                        </a>
                    </li>

                    <li class="py-5 border-b-2 border-white hover:border-b-2 hover:border-green-200 hover:text-green-200">
                        <a href="https://www.youtube.com/watch?v=rKWLpH1fLMI" class="flex flex-col justify-between align-middle">
                        <span class="font-mulish font-semibold text-base sm:text-lg">Title of Announcement 2</span>
                        <span class="font-mulish font-normal text-base sm:text-lg">Date Published 2</span>
                        </a>
                    </li>

                    <li class="py-5 hover:text-green-200">
                        <a href="https://tailwindcss.com/docs/height" class="flex flex-col justify-between align-middle">
                        <span class="font-mulish font-semibold text-base sm:text-lg">Title of Announcement 3</span>
                        <span class="font-mulish font-normal text-base sm:text-lg">Date Published 3</span>
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Contact Us Main Container -->
            <div class="rounded-md h-auto w-full container lg:p-9 p-6 grid grid-cols-1 bg-white">

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

    @elseif (request()->is('student.grades') )
    <!-- Grade Viewing Section -->
    <div class="md:pl-64 w-full min-h-full bg-gray-200 sm:py-8 py-7 sm:pb-[-10rem] sm:px-10 px-6 sm:pr-[-10rem]">

        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-5">

            <div class="grid w-full grid-cols-1 gap-6">

                <div class="flex md:flex-row gap-3 flex-col justify-between md:items-start items-end">

                    <div class="flex flex-col gap-3 md:w-[80%] lg:text-base md:text-sm text-xs text-justify">

                        <p class=" font-normal font-mulish text-black">
                            Dear Parent,
                        </p>

                        <p class=" font-normal font-mulish text-black indent-7">
                        The information provided here shows the ability and progress your child has made in the different learning areas as well as their core values. The school welcomes you should you desire to know more about your child’s progress. 
                        </p>

                    </div>

                    <div>
                        
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="bg-green-500 text-white font-mulish font-bold rounded-lg  hover:shadow-lg hover:shadow-neutral-200 group hover:outline hover:outline-1 hover:outline-green-900 inline-flex w-full px-3 py-2 lg:text-sm items-center justify-center lg:px-6 lg:py-3 text-[10px]" type="button">Grade Level<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 font-mulish" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kinder</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade 1</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade 2</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade 3</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade 4</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade 5</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grade 6</a>
                            </li>

                            </ul>
                        </div>

                    </div>

                </div>

                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-extrabold -mb-3 text-lg ">
                    Learning Progress and Achievement
                </h2>
    
                <div class="relative overflow-x-auto lg:rounded-xl rounded-md">

                    <table class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto font-normal">

                        <thead class=" text-white font-normal font-mulish items-start justify-start lg:text-sm text-[12px] leading-tight">
                            <tr>
                                <th scope="col" class="lg:py-6 sm:py-3 py-3.5 md:px-0 px-4 border-collapse border-r border-green-600 bg-green-500">
                                    Subjects
                                </th>
                                <th scope="col" class="md:px-0 px-4 border-collapse border-r border-green-600 bg-green-500">
                                    Teacher
                                </th>
                                <th scope="col" class="w-[8%] md:px-0 px-5 border-collapse   bg-green-500">
                                    
                                </th>
                                <th scope="col" class="w-[8%] md:px-0 px-5 border-collapse  bg-green-500">
                                    
                                </th>
                                <th scope="col" class="w-[8%] md:px-0 px-5 border-collapse  bg-green-500">
                                    
                                </th>
                                <th scope="col" class="w-[8%] md:px-0 px-5 border-collapse bg-green-500">
                                    
                                </th>
                                <th scope="col" class="w-[12%] md:px-0 px-3  border-collapse border-x border-green-600 bg-green-500">
                                    Final Grade
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border-l border-green-500 bg-green-500">
                                    Remarks
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr class="bg-white text-white border-b lg:text-sm md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class="  font-normal font-mulish text-white whitespace-nowrap dark:text-white border-collapse border-r border-green-600 bg-green-500 lg:py-8 sm:py-5 py-5">

                                </th>
                                <td class=" border-collapse border-r border-green-600 bg-green-500">

                                </td>
                                <td class=" px-3 border-collapse border-r border-t border-green-600 bg-green-500">
                                    1
                                </td>
                                <td class=" px-3 border-collapse border-r border-t border-green-600 bg-green-500">
                                    2
                                </td>
                                <td class=" px-3 border-collapse border-r border-t border-green-600 bg-green-500">
                                    3
                                </td>
                                <td class="border-collapse border-r border-t border-green-600 bg-green-500">
                                    4    
                                </td>
                                <td class="border-collapse border-r border-green-600 bg-green-500">

                                </td>
                                <td class="border-collapse border-l border-green-600 bg-green-500">

                                </td>
                            </tr>

                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">

                                <th scope="row" class="font-normal font-mulish text-black whitespace-nowrap border-collapse border border-green-600 lg:py-6 sm:py-3 py-3 mt-3 text-start pl-4">
                                    Filipino
                                </th>
                                <td class=" border-collapse border border-green-600 text-start pl-4">
                                    Juan Dela Cruz
                                </td>
                                <td class="border-collapse border border-green-600">
                                    87
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    87
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    89
                                </td>
                                <td class=" border-collapse border border-green-600">
                                        
                                </td>
                                <td class=" border-collapse border border-green-600 bg-green-200/50">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3 text-start pl-4">
                                    English
                                </th>
                                <td class=" border-collapse border border-green-600 text-start pl-4">
                                    Adrian Fabonan
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    88
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    90   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    90  
                                </td>
                                <td class="border-collapse border border-green-600">
                                        
                                </td>
                                <td class=" border-collapse border border-green-600 bg-green-200/50">

                                </td>
                                <td class=" border-collapse border border-green-600">

                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3 text-start pl-4">
                                    Mathematics
                                </th>
                                <td class=" border-collapse border border-green-600 text-start pl-4">
                                    Karen Tiro
                                </td>
                                <td class="border-collapse border border-green-600">
                                    82  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    78    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    78    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                            
                                </td>
                                <td class=" border-collapse border border-green-600 bg-green-200/50">

                                </td>
                                <td class=" border-collapse border border-green-600">

                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3 text-start pl-4">
                                    Makabansa
                                </th>
                                <td class="border-collapse border border-green-600 text-start pl-4">
                                    Alex Reyes
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    88  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    88
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    88   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                        
                                </td>
                                <td class=" border-collapse border border-green-600 bg-green-200/50">

                                </td>
                                <td class=" border-collapse border border-green-600">

                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3 text-start pl-4">
                                    GMRC
                                </th>
                                <td class="border-collapse border border-green-600 text-start pl-4">
                                    Anne Curtis
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    79
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    81   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    77   
                                </td>
                                <td class="border-collapse border border-green-600">
                                        
                                </td>
                                <td class=" border-collapse border border-green-600 bg-green-200/50">

                                </td>
                                <td class=" border-collapse border border-green-600">

                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-7 sm:py-5 py-5">
                                    
                                </th>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class="border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600 ">
                                    GWA
                                </td>
                                <td class=" border-collapse border border-green-600 bg-green-200/50">

                                </td>
                                <td class=" border-collapse border border-green-600">

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-bold -mb-3 mt-3 text-lg ">
                    Learner's Observed Values
                </h2>
    
                <div class="relative overflow-x-auto lg:rounded-xl rounded-md">

                    <table class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto font-normal">

                        <thead class=" text-white font-normal font-mulish bg-gray-50 dark:bg-green-500 dark:text-gray-400 items-start justify-start lg:text-sm text-[12px] leading-tight ">
                            <tr>
                                <th scope="col" class="w-[25%] lg:py-6 sm:py-3 py-3.5 md:px-0 px-4 border-collapse border-r border-green-600 bg-green-500">
                                    Core Values
                                </th>
                                <th scope="col" class="w-[43%] md:px-0 px-4 border-collapse border-r border-green-600 bg-green-500">
                                    Behaviour Statement
                                </th>
                                <th scope="col" class="w-[8%] md:px-0 px-5 border-collapse border-l border-green-600 bg-green-500">
                                    
                                </th>
                                <th scope="col" class="w-[8%] md:px-0 px-5 border-collapse bg-green-500">
                                    
                                </th>
                                <th scope="col" class="w-[8%] md:px-0 px-5 border-collapse bg-green-500">
                                    
                                </th>
                                <th scope="col" class="w-[8%] md:px-0 px-5  border-collapse  bg-green-500">
                                    
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr class="bg-white text-white border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class="  font-normal font-mulish text-white whitespace-nowrap dark:text-white border-collapse border-r border-green-600 bg-green-500  lg:py-8 sm:py-5 py-5">
                                </th>
                                <td class=" border-collapse border-r  border-green-600 bg-green-500">

                                </td>
                                <td class=" px-3 border-collapse border-x border-t border-green-600 bg-green-500">
                                    1
                                </td>
                                <td class=" px-3 border-collapse border-x border-t border-green-600 bg-green-500">
                                    2
                                </td>
                                <td class=" px-3 border-collapse border-x border-t border-green-600 bg-green-500">
                                    3
                                </td>
                                <td class="border-collapse border-l border-t border-green-600 bg-green-500">
                                    4    
                            </tr>

                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class="font-normal font-mulish text-black whitespace-nowrap border-collapse border border-green-600 lg:py-6 sm:py-3 py-3 text-start pl-4">
                                    x
                                </th>
                                <td class=" border-collapse border border-green-600 text-start pl-4">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3 text-start pl-4">
                                    x
                                </th>
                                <td class=" border-collapse border border-green-600 text-start pl-4">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x  
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x     
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3 text-start pl-4">
                                    x
                                </th>
                                <td class=" border-collapse border border-green-600 text-start pl-4">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x         
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3 text-start pl-4">
                                x
                                </th>
                                <td class="border-collapse border border-green-600 text-start pl-4">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x       
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3 text-start pl-4">
                                    x
                                </th>
                                <td class="border-collapse border border-green-600 text-start pl-4">
                                x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x   
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x       
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-7 sm:py-5 py-5 text-start pl-4">
                                    x
                                </th>
                                <td class=" border-collapse border border-green-600 text-start pl-4">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600 ">
                                    x
                                </td>

                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-7 sm:py-5 py-5 text-start pl-4">
                                    x
                                </th>
                                <td class=" border-collapse border border-green-600 text-start pl-3">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600 ">
                                    x
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-bold -mb-3 text-lg mt-3">
                    Student's Attendance
                </h2>
    
                <div class="relative overflow-x-auto lg:rounded-xl rounded-md">

                    <table class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto font-normal">

                        <thead class=" text-white font-normal font-mulish bg-gray-50 dark:bg-green-500 dark:text-gray-400 items-start justify-start lg:text-sm text-[12px] leading-tight">
                            <tr>
                                <th scope="col" class="lg:py-6 sm:py-3 py-3.5 md:px-0 px-4 border-collapse border border-green-600  bg-green-500">
                                    Attendance
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    AUG
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    SEP
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    OCT
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    NOV
                                </th>   
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    DEC
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    JAN
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    FEB
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    MAR
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    APR
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    MAY
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    JUN
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    JLY
                                </th>
                                <th scope="col" class="md:px-0 px-4  border-collapse border border-green-600 bg-green-500">
                                    TOTAL
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3">
                                    Days of School
                                </th>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x        
                                </td>
                                <td class=" border-collapse border border-green-600 ">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3">
                                    Days of Present
                                </th>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600">
                                x   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                x     
                                </td>
                                <td class=" border-collapse border border-green-600">
                                x     
                                </td>
                                <td class=" border-collapse border border-green-600">
                                x     
                                </td>
                                <td class=" border-collapse border border-green-600">
                                x     
                                </td>
                                <td class=" border-collapse border border-green-600">
                                x     
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x        
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-3 py-3">
                                    Days of Absent
                                </th>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-bold -mb-3 text-lg mt-3">
                    Mode of Learning
                </h2>
    
                <div class="relative overflow-x-auto lg:rounded-xl rounded-md">

                    <table class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto font-normal">

                        <thead class=" text-white font-normal font-mulish bg-gray-50 dark:bg-green-500 dark:text-gray-400 items-start justify-start lg:text-sm text-[12px] leading-tight">
                            <tr>
                                <th scope="col" class="w-[28%] lg:py-6 sm:py-3 py-3.5 md:px-0 px-4 border-collapse border-r border-green-600 bg-green-500 ">
                                    Modality
                                </th>
                                <th scope="col" class=" w-[18%] md:px-0 px-4  border-collapse border-r border-green-600 bg-green-500">
                                    1st Quarter
                                </th>
                                <th scope="col" class="w-[18%] md:px-0 px-4  border-collapse border-r border-green-600 bg-green-500">
                                    2nd Quarter
                                </th>
                                <th scope="col" class="w-[18%] md:px-0 px-4  border-collapse border-r border-green-600 bg-green-500">
                                    3rd Quarter
                                </th>
                                <th scope="col" class="w-[18%] md:px-0 px-4  border-collapse border-l border-green-600 bg-green-500">
                                    4th Quarter
                                </th>   
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border-r border-green-600 lg:py-5 sm:py-3 py-3 bg-green-500">
                                </th>
                                <td class=" border-collapse border border-green-600 ">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600">
                                    x  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    x    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

    </section>
    </div>

    @elseif (request()->is('student.class-schedule') )
    <!-- Class Schedule Section -->
    <div class="p-4 sm:ml-64 w-full h-auto ">
        
        <section id="announcement" class="z-0 w-full flex relative flex-col rounded-md justify-start gap-1 h-auto p-5 md:p-8 lg:py-7 lg:px-10 bg-white shadow-md shrink-0"
        style=" margin-top: 10px; margin-bottom: 10px;">

            <div class="flex w-full flex-col gap-6">

                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-bold -mb-3 text-sm text-center">
                    Enrollment Status content
                </h2>

            </div>

        </section>

        <section id="announcement" class="z-0 w-full flex relative flex-col rounded-md justify-start gap-1 h-auto p-5 md:p-8 lg:py-7 lg:px-10 bg-white shadow-md shrink-0"
        style=" margin-top: 10px; margin-bottom: 10px;">

            <div class="flex w-full flex-col gap-6">

                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-bold -mb-3 text-sm ">
                    Dela Cruz, Juan Reyes ( xxxx-xxxx-xxxx )
                </h2>

                <div class="relative overflow-x-auto lg:rounded-xl rounded-md">

                    <table class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto font-normal">

                        <thead>

                            <tr class="bg-green-500 text-white border-b dark:bg-gray-800 dark:border-gray-700 lg:text-base md:text-[10px] text-[10px] leading-tight text-start">

                                <th scope="col" class="w-[5%] lg:py-6 sm:py-3 py-3.5 md:px-0 px-4 border-collapse border border-green-600 bg-green-500">
                                    #
                                </th>
                                <th scope="col" class="w-[25%] border-collapse border border-green-600 bg-green-500 text-start md:pl-4 pl-2">
                                    Subject
                                </th>
                                <th scope="col" class="w-[35%] border-collapse border border-green-600 bg-green-500 text-start md:pl-4 pl-2">
                                    Teacher
                                </th>
                                <th scope="col" class="w-[35%] border-collapse border border-green-600 bg-green-500 text-start md:pl-4 pl-2">
                                    Time Schedule
                                </th>
                            </tr>
                            
                        </thead>

                        <tbody>

                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-base  md:text-[10px] text-[10px] leading-tight text-start">

                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-5 py-2.5">
                                    1
                                </th>
                                
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                    Filipino
                                </td>
                                <td class="border-collapse border border-green-600 md:pl-4 pl-2">
                                    Juan Dela Cruz
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                    12:30 PM - 3:00 PM
                                </td>
                            </tr>

                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-base  md:text-[10px] text-[10px] leading-tight text-start">

                                <th scope="row" class="font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-5 py-2.5">
                                    x
                                </th>
                                <td class=" border-collapse border border-green-600  md:pl-4 pl-2">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                    x
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                    x   
                                </td>
                            </tr>

                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-base  md:text-[10px] text-[10px] leading-tight text-start">
                                <th scope="row" class="  font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-5 py-2.5">
                                x 
                                </th>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                    x
                                </td>
                                <td class="border-collapse border border-green-600 md:pl-4 pl-2">
                                x   
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                x     
                                </td>
                            </tr>

                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-base  md:text-[10px] text-[10px] leading-tight text-start">
                                <th scope="row" class="font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-5 py-2.5">
                                x 
                                </th>
                                <td class="border-collapse border border-green-600 md:pl-4 pl-2">
                                x 
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                x   
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                x 
                                </td>
                            </tr>

                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-base  md:text-[10px] text-[10px] leading-tight text-start">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-5 py-2.5">
                                x 
                                </th>
                                <td class="border-collapse border border-green-600 md:pl-4 pl-2">
                                x 
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                x 
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                x    
                                </td>
                            </tr>

                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-base  md:text-[10px] text-[10px] leading-tight text-start">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 lg:py-5 sm:py-5 py-2.5">
                                x 
                                </th>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                x  
                                </td>
                                <td class="border-collapse border border-green-600 md:pl-4 pl-2">
                                x  
                                </td>
                                <td class=" border-collapse border border-green-600 md:pl-4 pl-2">
                                x  
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div>

        </section>
    </div>
    @endif
</div>
<!-- Requests Document Section -->

<!-- Student Information Section -->