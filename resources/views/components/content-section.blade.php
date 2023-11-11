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

            <h2 class="text-3xl -mt-5 mb-1 -ml-6 text-green-900/60">Grades</h2>

            <div class="border-b p-[1px] bg-gray-200  mx-[-2.3rem]"></div>

            <div class="grid w-full grid-cols-1 gap-6 ">

                <div class="flex gap-6 flex-col justify-between items-end">

                    <div class="flex flex-col gap-3 lg:text-lg text-sm text-justify mt-6">

                        <p class=" font-normal font-mulish text-black">
                            Dear Parent,
                        </p>

                        <p class=" font-normal font-mulish text-black indent-7 leading-tight">
                        The information provided here shows the ability and progress your child has made in the different learning areas as well as their core values. The school welcomes you should you desire to know more about your child’s progress. 
                        </p>

                    </div>

                    <div>
                        
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="bg-green-500 text-white font-mulish font-bold rounded-lg  hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-900 inline-flex w-full xl:text-sm md:text-[13px] text-xs md:py-3 leading-none items-center px-7 py-0 -mb-3" type="button">Grade Level<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
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
    <div class="md:pl-64 w-full min-h-full bg-gray-200 sm:py-8  sm:pb-[-10rem]  py-7 sm:px-10 px-6 sm:pr-[-10rem] mb-0">
        
        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-5">

            <h2 class="text-3xl -mt-5 mb-1 lg:-ml-6 md:-ml-2 -ml-1 text-green-900/60">Class Schedule</h2>

            <div class="border-b p-[1px] bg-gray-200 mx-[-2.3rem]"></div>

            <div class="grid w-full grid-cols-1 gap-6 mt-8">

                <div id="alert-2" class="flex items-start lg:p-4 lg:py-8 p-5 mb-4 text-yellow-600 rounded-md bg-yellow-50 dark:bg-gray-800 dark:text-red-400" role="alert">

                    <svg class="flex-shrink-0 lg:w-6 lg:h-6 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    
                    </svg>
                    
                    <span class="sr-only">Info</span>
                    
                    <div class="ml-3 lg:text-base text-sm font-medium font-mulish text-justify pr-2.5 leading-5 ">
                        Uh-oh! It seems there might be a missing piece in your class schedule puzzle. As we approach the opening day, it's vital to have everything in place. If your schedule is still incomplete tomorrow, kindly contact the school management. Your education is important, and we want to ensure a seamless start. Reach out and let's get this sorted out together!
                    </div>
                    
                </div>    

                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-extrabold -mt-6 -mb-3 text-lg ">
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

    @elseif (request()->is('student.enrollment-status') )
    <!-- Student Enrollment Status Section -->
    <div class=" md:pl-64 sm:w-screen min-h-full bg-gray-200 sm:py-8 py-7 sm:pb-[20px] sm:px-11 px-6">

        <section class="self-stretch container lg:p-8 p-7 px-12 grid grid-cols-1 w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-5">

            <h2 class="lg:text-3xl text-xl -mt-5 mb-1 lg:-ml-3 -ml-6 text-green-900/60">Enrollment Status</h2>

            <div class="border-b p-[1px] bg-gray-200 lg:mx-[-2.3rem] mx-[-3rem]"></div>

            <!-- Officially Enrolled Container -->
            <div class="flex w-full flex-col gap-6 items-center self-stretch" 
            style="margin-top: 108px; margin-bottom: 98px">

                <div 
                class="flex flex-col lg:px-10 xl:py-16 py-2 mb-4 px-2 lg:w-[30rem] sm:w-[20rem] w-[18rem]  text-green-500 border-4 border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800 items-center justify-center font-mulish" 
                role="alert">
                    
                    <div class="flex items-center justify-center text-center hover:text-green-900" data-tooltip-target="tooltip-no-arrow">   
                        <svg xmlns="http://www.w3.org/2000/svg" width="115" height="115" fill="currentColor" viewBox="0 0 256 256" class="lg:w-40 lg:h-40 sm:w-28 sm:h-28 w-16 h-16">
                            <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    </div>

                    <div id="tooltip-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-md font-semibold font-mulish text-green-700 bg-green-100 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        You've completed all the required credentials needed for enrolling in GDJES!
                    </div>

                    <div class="px-2 mt-2 mb-4 lg:text-xl text-xs text-center font-semibold self-stretch">
                        Congratulations! 🎉 You've successfully enrolled in GDJES! 📚 Get ready for an exciting learning journey. Should you have any questions or need assistance, feel free to reach out.
                    </div>
                </div>

            </div>
            
            <!-- Temporarily Enrolled Container -->
            <div class="h-auto p-5 px-4 flex w-full flex-col gap-6 items-center self-stretch my-12 mb-7 hidden">

                <div 
                class="flex flex-col p-7 w-auto text-yellow-500 border-2 border-green-500 rounded-lg bg-white dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800 items-center justify-start  font-mulish shadow-md" 
                role="alert">

                    <div class="w-full flex justify-end mb-5">
                        <button 
                            type="button" 
                            class="focus:outline-none font-mulish text-yellow-400 border-2 border-yellow-400 font-semibold rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 cursor-not-allowed shadow-transparent" 
                            disabled>
                            Temporary Enrolled
                        </button>
                    </div>

                    <div 
                    class="flex items-start pl-4 p-4 mb-4 text-md font-mulish text-yellow-600 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-gray-200 dark:border-yellow-800" 
                    role="alert">
                        <svg 
                        class="flex-shrink-0 inline w-5 h-5 mr-3" 
                        aria-hidden="true" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <p class="text-md font-mulish font-medium">
                                To complete the process, make sure to submit all necessary requirements below. All the unchecked items below are the things you need to submit to complete your enrollment.
                            </p>
                        </div>
                    </div>

                    <div class="w-full self-stretch">

                        <div class="w-full flex items-center pl-4 border-b border-green-500 rounded-lg dark:border-gray-700 shadow">

                            <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-5 h-5 text-green-500 bg-white border-white rounded-xl focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled checked>


                            <label for="bordered-checkbox-1" class="w-full font-mulish py-4 ml-2 text-lg font-semibold text-green-500 dark:text-gray-300">Needed Requirements #1</label>

                        </div>

                        <div class="w-full flex items-center pl-4 border-b border-green-500 rounded-lg dark:border-gray-700 shadow">

                            <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-5 h-5 text-green-500 bg-white border-white rounded-xl focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled checked>

                            <label for="bordered-checkbox-2" class="w-full font-mulish py-4 ml-2 text-lg font-semibold text-green-500 dark:text-gray-300">Needed Requirements #2</label>

                        </div>

                        <div class="w-full flex items-center pl-4 border-b border-green-500 rounded-lg dark:border-gray-700 shadow">

                            <input id="bordered-checkbox-3" type="checkbox" value="" name="bordered-checkbox" class="w-5 h-5 text-green-500 bg-white border-white rounded-xl focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled checked>

                            <label for="bordered-checkbox-3" class="w-full font-mulish py-4 ml-2 text-lg font-semibold text-green-500 dark:text-gray-300">Needed Requirements #3</label>

                        </div>

                        <div class="w-full flex items-center pl-4 border-b border-green-500 rounded-lg dark:border-gray-700 shadow" disabled checked>

                            <input id="bordered-checkbox-4" type="checkbox" value="" name="bordered-checkbox" class="w-5 h-5 text-green-500 bg-white border-white rounded-xl focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled checked>

                            <label for="bordered-checkbox-4" class="w-full font-mulish py-4 ml-2 text-lg font-semibold text-green-500 dark:text-gray-300">Needed Requirements #4</label>

                        </div>

                        <div class="w-full flex items-center pl-4 border-b border-green-500 rounded-lg dark:border-gray-700 shadow">

                            <input id="bordered-checkbox-5" type="checkbox" value="" name="bordered-checkbox" class="w-5 h-5 text-green-500 bg-white border-white rounded-xl focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled >

                            <label for="bordered-checkbox-5" class="w-full font-mulish py-4 ml-2 text-lg font-semibold text-green-500 dark:text-gray-300">Needed Requirements #5</label>

                        </div>

                    </div>
                </div>

            </div>


            </div>
            
        </section>

    </div>

    @elseif (request()->is('student.request-documents') )
    <!-- Student Requests Document Section -->
    <div class="md:pl-64 w-full min-h-full bg-gray-200 sm:py-8 py-7 sm:pb-[-10rem] sm:px-10 px-6 sm:pr-[-10rem]">

        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-5">

        <h2 class="text-3xl -mt-5 mb-1 lg:-ml-6 -ml-3 text-green-900/60">Document Requests</h2>

        <div class="border-b p-[1px] bg-gray-200 mx-[-2.3rem]"></div>

        <div class=" flex min-w-screen flex-col gap-6 items-center self-stretch my-10 ">

            <div class="flex flex-col mx-11 p-4 w-full text-yellow-500 rounded-lg bg-white dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800 justify-start font-mulish ">

                <!-- My Requests Button Section -->
                <div class="w-full flex flex-row justify-between mb-5 gap-20">

                    <div class="w-full flex items-start p-6 text-md font-mulish text-yellow-600 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-gray-200 dark:border-yellow-800">
                        <svg 
                            class="flex-shrink-0 inline w-7 h-7 mr-3" 
                            aria-hidden="true" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="currentColor" 
                            viewBox="0 0 20 20">    
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>

                        <div>
                            
                            <h2 class="mb-2 -mt-1 text-2xl font-semibold text-yellow-800  dark:text-white">
                                Reminders
                            </h2>
                            <ul class="space-y-2 -ml-3 text-yellow-500  list-decimal">
                                <li>
                                    See the available documents to request from the school below.
                                </li>
                                <li>
                                    Click the "Request Document" button to start the process of document request.
                                </li>
                                <li>
                                    Answer the necessary information needed for document request in order to effectively process your request.
                                </li>
                                <li>
                                    Click the "My Request" button to know the status of your request.
                                </li>
                                <li>
                                    Then wait for 1-3 working days to process your request by the school management.
                                </li>
                            </ul>

                        </div>

                    </div>

                    <!-- Modal toggle -->
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class=" block focus:outline-none font-mulish text-white bg-green-500 font-semibold text-lg px-9 py-2.5 
                    mb-2  rounded-lg hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 w-[20%] h-11" type="button">
                    My Requests
                    </button>

                    <!-- Main modal -->
                    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-3xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-2 border-b rounded-t dark:border-gray-600 bg-green-500">
                                    <h3 class="text-xl font-semibold font-mulish text-white dark:text-white">
                                        My Requests
                                    </h3>
                                    <button type="button" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="relative overflow-x-auto sm:rounded-lg m-4 pb-4">

                                    <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-200">
                                        <thead class="text-md text-white uppercase bg-green-500 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">
                                                    Lists
                                                </th>
                                                <th scope="col" class="px-6 py-4">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-green-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-green-100 dark:hover:bg-gray-600" data-popover-target="popover-default1">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    X
                                                </th>
                                                <td class="px-6 py-4">
                                                    X
                                                </td>
                                            </tr>

                                            <div data-popover id="popover-default1" role="tooltip" class="absolute z-10 invisible inline-block w-auto text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2">
                                                    <p>h-mm AM/PM mm-dd-yyyy</p>
                                                </div>
                                                <div data-popper-arrow></div>
                                            </div>

                                            <tr class="bg-green-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-green-100 dark:hover:bg-gray-600" data-popover-target="popover-default2">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    X
                                                </th>
                                                <td class="px-6 py-4">
                                                    X
                                                </td>
                                            </tr>

                                            <div data-popover id="popover-default2" role="tooltip" class="absolute z-10 invisible inline-block w-auto text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2" >
                                                    <p>h-mm AM/PM mm-dd-yyyy</p>
                                                </div>
                                                <div data-popper-arrow></div>
                                            </div>

                                            <tr class="bg-green-50 dark:bg-gray-800 hover:bg-green-100 dark:hover:bg-gray-600" data-popover-target="popover-default3">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" >
                                                    X
                                                </th>
                                                <td class="px-6 py-4">
                                                    X
                                                </td>
                                            </tr>

                                            <div data-popover id="popover-default3" role="tooltip" class="absolute z-10 invisible inline-block w-auto text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2">
                                                    <p>h-mm AM/PM mm-dd-yyyy</p>
                                                </div>
                                                <div data-popper-arrow></div>
                                            </div>

                                            <tr class="bg-green-50 dark:bg-gray-800 hover:bg-green-100 dark:hover:bg-gray-600" data-popover-target="popover-default4">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" >
                                                    X
                                                </th>
                                                <td class="px-6 py-4">
                                                    X
                                                </td>
                                            </tr>

                                            <div data-popover id="popover-default4" role="tooltip" class="absolute z-10 invisible inline-block w-auto text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2">
                                                    <p>h-mm AM/PM mm-dd-yyyy</p>
                                                </div>
                                                <div data-popper-arrow></div>
                                            </div>

                                            <tr class="bg-green-50 dark:bg-gray-800 hover:bg-green-100 dark:hover:bg-gray-600" data-popover-target="popover-default5">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    X
                                                </th>
                                                <td class="px-6 py-4">
                                                    X
                                                </td>
                                            </tr>

                                            <div data-popover id="popover-default5" role="tooltip" class="absolute z-10 invisible inline-block w-auto text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2">
                                                    <p>h-mm AM/PM mm-dd-yyyy</p>
                                                </div>
                                                <div data-popper-arrow></div>
                                            </div>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- Document Section Body -->
                <div class="w-full flex flex-row justify-between mb-5 gap-7">

                    <div class="w-full flex flex-col items-start justify-center pl-4 p-4 mb-4 text-md font-mulish text-green-600 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-gray-200 dark:border-yellow-800 ">  
                        <h2 class="mb-2 text-2xl font-semibold dark:text-white self-stretch text-center">Lists of Document</h2>
                        <ul class="max-w-md space-y-2 text-md list-disc list-inside dark:text-gray-400">
                            <li>
                                Document Requirement #1
                            </li>
                            <li>
                                Document Requirement #2
                            </li>
                            <li>
                                Document Requirement #3
                            </li>
                            <li>
                                Document Requirement #4
                            </li>
                            <li>
                                Document Requirement #5
                            </li>
                        </ul>

                    </div>

                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="focus:outline-none font-mulish text-white bg-green-500 font-semibold text-lg px-7 py-2.5 mr-2 mb-2 rounded-lg  hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 h-11 w-[25%]" type="button">
                    Request Document
                    </button>

                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 font-mulish">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t dark:border-gray-600 bg-green-500">
                                    <h3 class="text-xl font-semibold text-white dark:text-white">
                                        Request Document
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-green-50 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="#" class="p-4 md:p-5">

                                    <div class="grid gap-1 mb-1 grid-cols-1 rounded-md p-1 shadow-md shadow-gray-300">
                                        
                                        <div class="flex items-center gap-2 p-4 ">
                                            
                                            <label for="purpose" class="font-mulish mb-2 text-md font-semibold text-green-900 dark:text-white flex">Purpose:</label>

                                            <select id="purpose" class="font-mulish flex-initial bg-white border border-gray-300 text-green-900 text-md  rounded-lg focus:ring-primary-500 focus:border-primary-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 gap-2">
                                                <option selected="0">Select purpose</option>
                                                <option value="1">Purpose #1</option>
                                                <option value="2">Purpose #2</option>
                                                <option value="3">Purpose #3</option>
                                                <option value="4">Purpose #4</option>
                                                <option value="5">Purpose #5</option>
                                            </select>

                                        </div>

                                        <div class="flex flex-col items-start gap-2 p-2">
                                            
                                            <label for="purpose" class="font-mulish mb-2 text-md font-semibold  text-green-900 dark:text-white flex">Document:</label>

                                            <div class="pl-2">
                                                <div class="flex items-center mb-4">
                                                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="default-radio-1" class="ms-2 text-md font-medium text-green-900 dark:text-gray-300">Document Item #1</label>
                                                </div>

                                                <div class="flex items-center mb-4">
                                                    <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="default-radio-1" class="ms-2 text-md font-medium text-green-900 dark:text-gray-300">Document Item #2</label>
                                                </div>

                                                <div class="flex items-center mb-4">
                                                    <input id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="default-radio-1" class="ms-2 text-md font-medium text-green-900 dark:text-gray-300">Document Item #3</label>
                                                </div>

                                                <div class="flex items-center mb-4">
                                                    <input id="default-radio-4" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="default-radio-1" class="ms-2 text-md font-medium text-green-900 dark:text-gray-300">Document Item #4</label>
                                                </div>

                                                <div class="flex items-center mb-4">
                                                    <input id="default-radio-5" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="default-radio-1" class="ms-2 text-md font-medium text-green-900 dark:text-gray-300">Document Item #5</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="w-full flex justify-end">
                                            <button 
                                                type="button" 
                                                class="focus:outline-none font-mulish text-white bg-green-500 font-semibold text-lg px-14 py-2.5 mr-2 mb-2 rounded-lg  hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600">
                                                Submit
                                            </button>
                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div> 
                
                </div>

            </div>

        </div>
            
        </section>

    </div>

    @elseif (request()->is('student.student-information') )
    <!-- Student Information Section -->
    <div class="md:pl-64 w-full min-h-full bg-gray-200 sm:py-8 py-7 sm:pb-[-10rem] sm:px-10 px-6 sm:pr-[-10rem]">
        
        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-5">

            <h2 class="text-[38px] -mt-6 -ml-6 text-green-900/60">Student Information</h2>

            <div class="border-b p-[1px] bg-gray-200  mx-[-2.3rem]"></div>

            <div class="grid w-full grid-cols-1 gap-6">

                <div class="flex gap-6 flex-col justify-between items-end">

                    <div class="flex flex-col gap-3 lg:text-lg text-sm text-justify mt-6">

                        <p class=" font-normal font-mulish text-black">
                            Dear Parent,
                        </p>

                        <p class=" font-normal font-mulish text-black indent-7 leading-tight">
                        The information provided here shows the ability and progress your child has made in the different learning areas as well as their core values. The school welcomes you should you desire to know more about your child’s progress. 
                        </p>

                    </div>

                    <div>
                        
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="bg-green-500 text-white font-mulish font-bold rounded-lg  hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-900 inline-flex w-full xl:text-sm md:text-[13px] text-xs md:py-4 leading-none items-center px-7 py-0 -mb-3" type="button">Grade Level<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
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