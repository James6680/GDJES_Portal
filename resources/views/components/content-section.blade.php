<!-- Content Section -->
@php
  use Carbon\Carbon;
  use App\Models\DocumentRequest;
  $student = Auth::guard('students')->user();
  $student_id = $student->id;
  $username = $student->first_name . ' ' . $student->last_name;
  $last_name = $student->last_name;
  $first_name = $student->first_name;
  $middle_name = $student->middle_name;
  $age = $student->age;
  $gender = $student->gender;
  $birth_date = $student->birth_date;
  $religion = $student->religion;
  $indigenous_group = $student->indigenous_group;
  $gender = $student->gender;
  $mother_tongue = $student->mother_tongue;

  $region = $student->region;
  $province = $student->province;
  $city = $student->municipality;
  $barangay = $student->barangay;
  $street = $student->street;
  $house_number = $student->house_number;

  $father_first_name = null;
  $father_middle_name = null;
  $father_lastn_name = null;
  $father_email_address = null;
  $father_phone_number = null;

  if ($student->relative && $student->relative->father) {
    $father_first_name = $student->relative->father->first_name;
    $father_middle_name = $student->relative->father->middle_name;
    $father_last_name = $student->relative->father->last_name;
    $father_email_address = $student->relative->father->email_address;
    $father_phone_number = $student->relative->father->phone_number;
  }

  $mother_first_name = null;
  $mother_middle_name = null;
  $mother_lastn_name = null;
  $mother_email_address = null;
  $mother_phone_number = null;

  if ($student->relative && $student->relative->mother) {
    $mother_first_name = $student->relative->mother->first_name;
    $mother_middle_name = $student->relative->mother->middle_name;
    $mother_last_name = $student->relative->mother->last_name;
    $mother_email_address = $student->relative->mother->email_address;
    $mother_phone_number = $student->relative->mother->phone_number;
  }

  $guardian_first_name = null;
  $guardian_middle_name = null;
  $guardian_lastn_name = null;
  $guardian_email_address = null;
  $guardian_phone_number = null;

  if ($student->relative && $student->relative->guardian) {
    $guardian_first_name = $student->relative->guardian->first_name;
    $guardian_middle_name = $student->relative->guardian->middle_name;
    $guardian_last_name = $student->relative->guardian->last_name;
    $guardian_email_address = $student->relative->guardian->email_address;
    $guardian_phone_number = $student->relative->guardian->phone_number;
  }


  $lrn = $student->lrn;

@endphp
<div>   
    <!-- Announcement Section -->
    @if (request()->is('student.announcements') )
    <div class="md:pl-64 w-full min-h-full sm:py-12 sm:pb-9 sm:pr-[-10rem] py-7 sm:px-16 px-6 bg-yellow-50">

        <section class="min-w-full min-h-full relative grid grid-cols-1 sm:gap-7 gap-5 marker: md:ml-8  items-center">

            <!-- Announcement Main Container -->
            <!-- Backend side: need to connect para magreflect ung icrcreate na announcement ng admin -->
            <div class="rounded-md w-auto h-auto relative container p-6 grid grid-cols-1 bg-green-500 shadow shadow-green-500">

                <ul class="m-o p-0 text-white">

                    <li class="p-0 m-0">
                        <span class="font-semibold text-2xl sm:text-3xl ">Announcements</span>
                    </li>
                    @php
                    $announcements = DB::table('announcements')
                    ->select('announcement_title', 'created_at', 'announcement_url')
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
                    @endphp
                    @if (!$announcements->isEmpty())
                        @foreach ($announcements as $announcement)
                        <li class="py-5 border-b-2 border-white hover:border-b-2 hover:border-green-200 hover:text-green-200">
                            <a href="{{$announcement->announcement_url}}"
                            class="flex flex-col justify-between align-middle">
                        <span class="font-mulish font-semibold text-base sm:text-lg">{{$announcement->announcement_title}}</span>
                            <span class="font-mulish font-normal text-base sm:text-lg">{{Carbon::parse($announcement->created_at)->format('F j, Y g:i A')}}</span>
                            </a>
                        </li>
                        @endforeach
                    @else
                        <li class="py-5 border-b-2 border-white">
                            <a href="#"
                            class="flex flex-col justify-between align-middle">
                            <span class="font-mulish font-normal text-base sm:text-lg">There are no Announcements</span>
                            </a>
                        </li>        
                    @endif

                </ul>

            </div>

            <!-- Contact Us Main Container -->
            <div class="rounded-md h-auto w-full container  p-6 grid grid-cols-1 bg-white shadow shadow-brown-100">

                <h2 class="w-full flex text-2xl sm:text-3xl font-mulish text-green-900 font-bold">
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
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 sm:pb-9 md:px-16 px-12">

        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-4 lg:py-7 bg-white lg:ml-8 ml-6 shadow shadow-brown-100">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">Student Grades</h3>
                <p class="mt-1 lg:text-base text-sm text-justify text-gray-500 dark:text-gray-400">Check your progress: Stay informed on your child's academic journey with easy access to grades, learning milestones, observed values, and attendance. Stay informed, stay connected.</p>
            </div> <!-- End of Header Content -->

            <div class="grid w-full grid-cols-1 gap-2">
                <div class="w-auto justify-self-end">

                <form id="enrollmentFormData"action="" method="post">
                    @csrf
                    @method('post')
                    <input type="hidden" id="idValue" name="id" value="{{$student_id}}">
                    <button id="ContinuationEnrollmentButton" type="submit" class="bg-brown-500 text-white rounded-md font-medium hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 inline-flex w-full lg:text-base text-sm py-2 leading-none items-center lg:px-7 px-4" type="button">Enroll for next school year
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/> 
                    </svg>
                    </button>
                </form>
                </div>

                <script>
                    const enrollmentButton = document.getElementById('ContinuationEnrollmentButton');
                    const enrollmentForm = document.getElementById('enrollmentFormData');
                    enrollmentForm.addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent default form submission
                    
                        const formAction = localStorage.getItem('appUrl') + "/enrollment.student-enrollment"; // Get the link from localStorage
                        enrollmentForm.action = formAction; // Set the form's action attribute
                    
                        enrollmentForm.submit(); // Submit the form to the new link
                    });
                </script>

                <div class="w-auto justify-self-end">

                    <!-- Grade Level Dropdown Button -->
                    <button id="dropdownHoverButton" 
                            data-dropdown-toggle="dropdownHover" 
                            data-dropdown-trigger="hover" 
                            class="bg-green-500 text-white rounded-md font-medium hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 inline-flex w-full lg:text-base text-sm py-2 leading-none items-center lg:px-7 px-4" 
                            type="button">
                            @if(!is_null(request('gradeLevelId'))) Grade {{(int)request('gradeLevelId')-1 }} @else Grade Level @endif 
                            <svg class="w-2.5 h-2.5 ml-2.5" 
                                 aria-hidden="true" 
                                 xmlns="http://www.w3.org/2000/svg" 
                                 fill="none" 
                                 viewBox="0 0 10 6">
                            <path stroke="currentColor" 
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/> 
                    </svg>
                    </button>

                    <!-- Grade Level Dropdown Menu -->
                    <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow lg:w-40 w-32 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 font-mulish" aria-labelledby="dropdownHoverButton">
                            @foreach($gradeLevels as $gradeLevel)
                                <li>
                                    <a href="{{route('student.grades') . '?gradeLevelId=' . $loop->index+2}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        {{ $gradeLevel }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-extrabold text-lg ">
                    Learning Progress and Achievement
                </h2>

                <!-- Learning Progress and Achievement Section -->
                <!-- Backend side: Need to connect this table which consists of (Subjects/Teacher/1-4 grade/Final grade/ remarks)  -->
                <div class="relative overflow-x-auto rounded-sm">

                    <table class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto ">

                        <thead class=" text-white items-start justify-start lg:text-sm text-xs text-[10px] leading-tight uppercase">
                            <tr>
                                <th scope="col" class="py-5 md:px-0 px-4 border-collapse border-r border-green-600 bg-green-500">
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

                        <?php
                        if (Auth::guard('students')->check()) {
                            $gradeLevelId = request('gradeLevelId');
                            $school_year;
                            $studentId = Auth::guard('students')->id();
                            if($gradeLevelId == null) {
                                $school_year = DB::table('school_years')
                                                ->join('enrollment','school_years.id','=','enrollment.school_year_id')
                                                ->join('grade_levels','enrollment.grade_level_id','=','grade_levels.id')
                                                ->where('enrollment.student_id',$studentId)
                                                ->where('school_years.active',1)
                                                ->pluck('school_years.id')
                                                ->first();
                            }
                            else{
                                $school_year = DB::table('enrollment')
                                                ->join('grade_levels','enrollment.grade_level_id','=','grade_levels.id')
                                                ->join('school_years','school_years.id','=','enrollment.school_year_id')
                                                ->where('enrollment.student_id',$studentId)
                                                ->where('enrollment.grade_level_id', $gradeLevelId)
                                                ->pluck('enrollment.school_year_id')
                                                ->first();
                            }
                            // Subjects
                            $classIds = DB::table('grading_sheet')
                                ->where('student_id', $studentId)
                                ->pluck('class_id');

                                $classSubjects = DB::table('classes')
                                ->whereIn('classes.id', $classIds)
                                ->leftJoin('subjects', 'classes.subject_id', '=', 'subjects.id')
                                ->leftJoin('teachers', 'classes.teacher_id', '=', 'teachers.id')
                                ->leftJoin('grading_sheet', function ($join) use ($studentId) {
                                    $join->on('classes.id', '=', 'grading_sheet.class_id')
                                        ->where('grading_sheet.student_id', '=', $studentId);
                                })
                                ->select(
                                    'classes.id as class_id',
                                    'subjects.subject_name',
                                    'teachers.first_name as teacher_first_name',
                                    'teachers.last_name as teacher_last_name',
                                    DB::raw('GROUP_CONCAT(grading_sheet.quarter) as quarters'),
                                    DB::raw('GROUP_CONCAT(grading_sheet.quarterly_grade) as grades')
                                )
                                //EDIT THIS
                                ->where('classes.school_year_id',$school_year)
                                ->groupBy('classes.id','subjects.subject_name', 'teachers.first_name', 'teachers.last_name')
                                ->orderBy('subjects.subject_name')
                                ->get();

                        }
                        ?>


                        

                        <tbody>

                            <tr class="bg-white text-white border-b lg:text-sm text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-white whitespace-nowrap dark:text-white border-collapse border-r border-green-600 bg-green-500 py-6">

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

                            @foreach($classSubjects as $classSubject)
                                <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                    <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4 text-start pl-4">
                                        {{ $classSubject->subject_name }}
                                    </th>
                                    <td class=" border-collapse border border-green-600 text-start pl-4">
                                        {{ $classSubject->teacher_first_name }} {{ $classSubject->teacher_last_name }}
                                    </td>
                                    <!-- Quarter Grade Cells -->
                                    @php
                                        $quarters = isset($classSubject->quarters) ? explode(',', $classSubject->quarters) : [];
                                        $grades = isset($classSubject->grades) ? explode(',', $classSubject->grades) : [];
                                        $grades = array_reverse($grades); 
                                    @endphp

                                    @for ($i = 0; $i < count($quarters); $i++)
                                        <td class="border-collapse border border-green-600">
                                            {{ isset($grades[$i]) ? $grades[$i] : '' }}
                                        </td>
                                    @endfor
                                    
                                    <td class=" border-collapse border border-green-600 bg-green-200/50">

                                    </td>
                                    <td class=" border-collapse border border-green-600">

                                    </td>
                                </tr>
                             @endforeach
                            
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-6">
                                    
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

                <h2 hidden class=" font-mulish lg:text-2xl text-gray-950 font-bold mt-3 text-lg ">
                    Learner's Observed Values
                </h2>

                <!-- Learner's Oberserved Values -->
                <!-- Backend Side: Need to connect this table which consists of (Core Values/Behaviour Statement/1-4 mark (SO/AO/--))) -->
                <div hidden class="relative overflow-x-auto rounded-sm">

                    <table class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto font-normal">

                        <thead class=" text-white  bg-gray-50 dark:bg-green-500 dark:text-gray-400 items-start justify-start lg:text-sm text-[10px] leading-tight uppercase">
                            <tr>
                                <th scope="col" class="w-[25%] py-4 md:px-0 px-4 border-collapse border-r border-green-600 bg-green-500">
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
                                <th scope="row" class="  font-normal font-mulish text-white whitespace-nowrap dark:text-white border-collapse border-r border-green-600 bg-green-500 py-6">
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
                                <th scope="row" class="font-normal font-mulish text-black whitespace-nowrap border-collapse border border-green-600 py-4 text-start pl-4">
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
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4 text-start pl-4">
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
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4 text-start pl-4">
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
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4 text-start pl-4">
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
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4 text-start pl-4">
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
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4 text-start pl-4">
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
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4 text-start pl-4">
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

                {{-- <h2 class=" font-mulish lg:text-2xl text-gray-950 font-bold  text-lg mt-3">
                    Student's Attendance
                </h2>

                <!-- Student's Attendance Section -->
                <!-- Backend Side: Need to connect this table which consists of (Col=Attendance/12 months: Row=Days of school/ Days of present/ Days of absent) -->
                <div class="relative overflow-x-auto rounded-sm">

                    <table class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto font-normal">

                        <thead class=" text-white  bg-gray-50 dark:bg-green-500 dark:text-gray-400 items-start justify-start lg:text-sm text-[10px] leading-tight uppercase">
                            <tr>
                                <th scope="col" class="py-4 md:px-0 px-4 border-collapse border border-green-600  bg-green-500">
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
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4">
                                    Days of School
                                </th>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class="border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                      
                                </td>
                                <td class=" border-collapse border border-green-600">
                                      
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                     
                                </td>
                                <td class=" border-collapse border border-green-600">
                                       
                                </td>
                                <td class=" border-collapse border border-green-600 ">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4">
                                    Days of Present
                                </th>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class="border-collapse border border-green-600">
                                
                                </td>
                                <td class=" border-collapse border border-green-600">
                                  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                               
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                         
                                </td>
                                <td class=" border-collapse border border-green-600">
                                  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                            </tr>
                            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700 lg:text-sm  md:text-[10px] text-[10px] leading-tight">
                                <th scope="row" class=" font-normal font-mulish text-black whitespace-nowrap dark:text-white border-collapse border border-green-600 py-4">
                                    Days of Absent
                                </th>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                                <td class="border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                     
                                </td>
                                <td class=" border-collapse border border-green-600">
                                     
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                                <td class=" border-collapse border border-green-600">
                                      
                                </td>
                                <td class=" border-collapse border border-green-600">
                                  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                   
                                </td>
                                <td class=" border-collapse border border-green-600">
                                  
                                </td>
                                <td class=" border-collapse border border-green-600">
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}

                <h2 hidden class=" font-mulish lg:text-2xl text-gray-950 font-bold text-lg mt-3">
                    Mode of Learning
                </h2>
                
                <!-- MOL Section -->
                <!-- Backend side: Need to connect this table which consists of (Type of modality/1 to 4 quarter) -->
                <div class="relative overflow-x-auto rounded-sm">

                    <table hidden class="m-0 p-0 w-full border-collapse text-sm text-black text-center table-auto font-normal">

                        <thead class=" text-white bg-gray-50 dark:bg-green-500 dark:text-gray-400 items-start justify-start lg:text-sm text-[10px] leading-tight uppercase">
                            <tr>
                                <th scope="col" class="w-[28%] py-4 md:px-0 px-4 border-collapse border-r border-green-600 bg-green-500 ">
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

    @include('scripts_with_ajax')

    @elseif (request()->is('student.class-schedule') )
    <!-- Class Schedule Section -->
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">
        
        <section class="lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-100">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">Class Schedule</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">Find your daily class schedule here, so you always know where you need to be. From the first bell to the last, stay informed about your classes. We keep it simple, clear, and always up-to-date, ensuring you have the information you need at your fingertips for a smooth school experience..</p>
            </div> <!-- End of Header Content -->

            <div class="grid w-full grid-cols-1 lg:gap-4 gap-2 mt-8">

                <div id="alert-2" class="flex items-start lg:p-4 lg:py-6 p-5 mb-4 text-brown-600 rounded-md bg-brown-50 dark:bg-gray-800 dark:text-red-400" role="alert">

                    <svg class="flex-shrink-0 lg:w-6 lg:h-6 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    
                    </svg>
                    
                    <span class="sr-only">Info</span>
                    
                    <div class="ml-3 lg:text-base text-xs font-medium font-mulish text-justify pr-2.5 leading-5 ">
                        Incomplete class schedules will be finalized during the week before start of the school year.
                    </div>
                    
                </div>    

                <!-- Backend Side: Need to configure para magreflect ung student name and lrn no. in this part per student -->
                <h2 class=" font-mulish lg:text-2xl text-gray-950 font-extrabold text-base ">
                    {{$username . ' ' . "(" . $lrn . ")"}}
                </h2>

                <div class="relative overflow-x-auto rounded">

                    <table class="w-full lg:text-base text-xs text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-200">

                        <thead class="lg:text-base md:text-sm text-xs text-white uppercase bg-green-500">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Subject
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Teacher
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time Schedule
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                                <th scope="row" class="px-6 py-4 font-normal whitespace-nowrap dark:text-white">
                                    Filipino
                                </th>
                                <td class="px-6 py-4">
                                    Balistreri, Dorothea Kunze I
                                </td>
                                <td class="px-6 py-4">
                                    12:30 PM - 3:00 PM
                                </td>

                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-normal whitespace-nowrap dark:text-white">
                                    
                                </th>
                                <td class="px-6 py-4">
                                   
                                </td>
                                <td class="px-6 py-4">
                                    
                                </td>

                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-normal whitespace-nowrap dark:text-white">
                                   
                                </th>
                                <td class="px-6 py-4">
                                   
                                </td>
                                <td class="px-6 py-4">
                                    
                                </td>
   
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-normal whitespace-nowrap dark:text-white">
                                   
                                </th>
                                <td class="px-6 py-4">
                                  
                                </td>
                                <td class="px-6 py-4">
                                   
                                </td>
   
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-normal whitespace-nowrap dark:text-white">
                                   
                                </th>
                                <td class="px-6 py-4">
                                  
                                </td>
                                <td class="px-6 py-4">
                                    
                                </td>
   
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>

            
        </section>
    </div>

    @elseif (request()->is('student.enrollment-status') )
    @php
        $student = new App\Http\Controllers\Student();
        $student = $student->StudentInfo();
    @endphp

    <!-- Student Enrollment Status Section -->
    <div class="md:pl-64 pl-0 min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">

        <section class="self-stretch container lg:p-8 p-7 px-8 grid grid-cols-1 w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-200">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-green-900">Enrollment Status</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">Stay in the loop with your enrollment. Easily access the enrollment status section to see the needed requirements, see what's submitted, and spot any missing documents. We make it simple to ensure a smooth enrollment process – all the info you need, right when you need it.</p>
            </div> <!-- End of Header Content -->

            <!-- Officially Enrolled Container -->
            <!-- Backend Side: Need to configure for validation if the student really meet the requirement to become officially enrolled and if so is eto lalabas -->
            <div class="flex w-full flex-col gap-6 items-center justify-center mt-8 sm:mb-0 mb-6 hidden">

                <div 
                class="flex flex-col lg:px-10 xl:py-16 py-2 sm:mx-[100vw] my-[10vh] px-2 lg:w-[30rem] sm:w-[20rem] w-[18rem] text-green-500 border-4 border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800 items-center justify-center font-mulish">
                    
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
            <!-- Backend Side: Need to configure this part to update the students whether the list of requirements for enrolling is nasubmit na lahat. checkbox element pala yung list dito and initially is nakadisabled sila para hindi macontrol ni students since for viewing purpose lng dapat sa kanila -->
            <div class="h-auto p-5 lg:px-4 px-0 flex w-full flex-col items-center my-3">

                <div class="flex flex-col w-auto text-yellow-500 rounded-lg dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800 items-center justify-start font-mulish gap-5">

                    <div class="w-full flex justify-end">
                        <button 
                            type="button" 
                            class="focus:outline-none font-mulish text-white border-2 bg-brown-500 font-semibold rounded-md text-base xl:w-[20%] lg:w-[40%] w-full py-2.5 cursor-not-allowed shadow-transparent" 
                            disabled>
                            
                                @if(!is_null($student->enrollment_status)) {{$student->enrollment_status}} @endif 
                        </button>
                    </div>

                    <div class="flex items-start pl-4 p-5 text-md font-mulish text-brown-600 rounded-lg bg-brown-50 dark:bg-gray-800 dark:text-gray-200 dark:border-yellow-800">
                        <svg 
                        class="flex-shrink-0 inline w-6 h-6 mr-3" 
                        aria-hidden="true" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <h2 class="lg:text-xl text-base font-semibold">Reminder</h2>
                            <p class="lg:text-base text-sm font-mulish font-medium">
                                To complete the process, make sure to submit all necessary requirements below. All the unchecked items below are the things you need to submit to complete your enrollment.
                            </p>
                        </div>
                    </div>

                    <div class="w-full self-stretch gap-4">
                        @php
                            $requirements = [];
                            $checklist = [];
                            if(isset($student->requirements))$requirements = json_decode($student->requirements);
                            if(isset($student->checklist)) $checklist = json_decode($student->checklist);
                            $list = array_combine($requirements, $checklist);
                        @endphp

                        @foreach ($list as $key => $value)
                        <div class="w-full flex items-center pl-4  bg-green-50 rounded-lg dark:border-gray-700 ">
                            <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-5 h-5 border border-green-500 text-green-500 bg-white rounded-xl focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled @checked($value)>
                            <label for="bordered-checkbox-1" class="w-full font-mulish lg:py-6 py-4 ml-2 lg:text-md text-sm font-semibold text-green-500 dark:text-gray-300">{{$key}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            
        </section>

    </div>

    @elseif (request()->is('student.request-documents') )
    @vite(['resources/js/student.document.request.js'])
    @php
    $student = new App\Http\Controllers\Student();
    $student = $student->getStudentRequests();

    $forValidationCount = 0;

    foreach ($student as $request) {
      if (strtolower($request->status) == "for validation" || strtolower($request->status) == "for claiming") {
        $forValidationCount++;
      }
    }
    @endphp
    <!-- Student Requests Document Section -->
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">

        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-200">

            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-green-900">Request Document</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">Take control of your paperwork hassle-free. Our document requests page lets you effortlessly request and track documents. See the status of past requests, explore available document options, and ensure you have everything you need. Simple, organized, and designed to make document management a breeze</p>
            </div> <!-- End of Header Content -->

            <div class=" flex min-w-screen flex-col gap-6 items-center ">

                <!-- Document Requests Main Body -->
                <div id="mainBody" class="flex flex-col mx-40 p-4 w-full text-yellow-500 rounded-lg bg-white dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800 justify-start font-mulish ">

                    <!-- My Requests Button Section -->
                    <div class="w-full flex flex-col items-end mb-4 gap-1">

                        <button
                        id="myRequestBtn" 
                        class="block focus:outline-none text-white bg-brown-500 font-semibold lg:text-base text-sm xl:w-[20%] lg:w-[40%] w-full py-2.5 mb-2 rounded-md hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-yellow-600 " 
                        type="button">
                        My Requests
                        </button>

                        <div class="w-full flex items-start p-5 lg:text-base text-xs font-mulish text-yellow-600 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-gray-200 dark:border-yellow-800">
                            <svg 
                                class="flex-shrink-0 inline lg:w-5 lg:h-5 w-4 h-4 mr-3" 
                                aria-hidden="true" 
                                xmlns="http://www.w3.org/2000/svg" 
                                fill="currentColor" 
                                viewBox="0 0 20 20">    
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>

                            <div>
                                
                                <h2 class="mb-2 -mt-1 lg:text-xl text-lg font-semibold text-yellow-800  dark:text-white">
                                    Reminders
                                </h2>
                                <ul class="space-y-1 -ml-3 text-yellow-500  list-decimal">
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

                    </div>

                    <!-- Document Section Body -->
                    <div class="w-full flex flex-col justify-between gap-1">

                        <div class="w-full flex flex-col items-start justify-center pl-4 p-4 mb-3 text-md font-mulish text-green-600 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-gray-200 dark:border-yellow-800 ">  
                            <h2 class="mb-2 lg:text-2xl text-lg font-semibold dark:text-white self-stretch text-left">Lists of Document</h2>
                            <ul class="w-full ml-4 space-y-1 lg:text-base text-xs font-semibold list-disc list-inside text-green-400">
                                <li>
                                    Certificate of Enrollment: scholarships grants, or 4Ps applications.
                                </li>
                                <li>
                                    Certificate of Good Moral
                                </li>
                                <li>
                                    Request of SF10. (Needs the request letter from the school that the student will be transferring.)
                                </li>
                            </ul>

                        </div>

                        <!-- Modal toggle -->
                        <button
                        id="request-document" 
                        data-modal-target="crud-modal" 
                        data-modal-toggle="crud-modal" 
                        class="focus:outline-none font-mulish text-white bg-green-500 font-semibold lg:text-base text-sm px-7 py-2.5 rounded-lg hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 " type="button">
                        Request Document
                        </button>

                        <!-- CRUD modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- CRUD Modal content -->
                                @if($forValidationCount < 5)
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
                                    <!-- Backend Side: Need to connect para pumasok ung data from the input of students (purpose and type documents) -->
                                    <form action=""  method="POST" class="p-4 md:p-5" id="submitDocumentRequestForm">
                                        @csrf
                                        @method('post')
                                        <div class="grid gap-1 mb-1 grid-cols-1 rounded-md p-1">
                                            <div class="flex flex-col items-start gap-2 p-4 ">
                                                <span   
                                                id="purpose-error" 
                                                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                                Please select purpose of request
                                              </span>
                                                <label for="purpose" class="font-mulish mb-2 text-md font-semibold text-green-900 dark:text-white flex">Purpose:</label>
                                                <select  name="purpose" id="purpose" class="font-mulish flex-initial bg-white border border-gray-300 text-green-900 text-md  rounded-lg focus:ring-green-500 focus:border-green-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 gap-2">
                                                    <option selected disabled >Select purpose</option>
                                                    <option value="Scholarship Grand">Scholarship grant</option>
                                                    <option value="Transfer of School">Transfer of school</option>
                                                    <option value="Government Purpose">Government purposes</option>
                                                    <option value="Others">Others</option>
                                                </select>

                                            </div>

                                            <div class="flex flex-col items-start gap-2 p-2">
                                                <span   
                                                id="document-error" 
                                                class="hidden pt-2 pl-0 text-sm font-medium text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                                Please select document to request.
                                              </span>                                                
                                                <label for="purpose" class="font-mulish mb-2 text-md font-semibold  text-green-900 dark:text-white flex">Document:</label>
                                                <div class="pl-2">
                                                    <div class="flex items-center mb-4">
                                                        <input name="document[]" id="default-radio-1" type="radio" value="SF10" name="default-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="default-radio-1" class="ms-2 text-md font-medium text-green-900 dark:text-gray-300">Request of SF10</label>
                                                    </div>

                                                    <div class="flex items-center mb-4">
                                                        <input name="document[]" id="default-radio-2" type="radio" value="Certificate of Good Moral" name="default-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="default-radio-1" class="ms-2 text-md font-medium text-green-900 dark:text-gray-300">Certificate of Good Moral</label>
                                                    </div>

                                                    <div class="flex items-center mb-4">
                                                        <input name="document[]" id="default-radio-3" type="radio" value="Certificate of Enrollment" name="default-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="default-radio-1" class="ms-2 text-md font-medium text-green-900 dark:text-gray-300">Certificate of Enrollment</label>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>

                                            <div class="w-full flex justify-center">
                                                <button 
                                                    type="button" id="submitDocumentRequest"
                                                    class="focus:outline-none font-mulish text-white bg-green-500 font-semibold text-lg px-14 py-2.5 mr-2 mb-2 rounded-lg  hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600">
                                                    Submit
                                                </button>
                                            </div>

                                        </div>

                                    </form>

                                </div>

                                @else
                                <!-- Warning modal content -->
                                <div class=" relative bg-white rounded-lg shadow dark:bg-gray-700">

                                  <button id="closeDeleteSectionModal" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>  
                                    <span class="sr-only">Close modal</span>
                                  </button>
                                  <div class="p-6 pt-8 text-center">
                                    <svg class="mx-auto mb-4 text-yellow-500 w-12 h-12 dark:text-red-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                      <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
                                    </svg>
                                    <div class="gap-3 mb-5">
                                      <h3 class="text-sm font-bold text-yellow-500 dark:text-gray-400">You can only request 5 documents at a time.</h3>
                                      <p class="text-xs font-normal text-yellow-500 dark:text-gray-400">Please wait for the school management to process your request.</p>
                                    </div>
                                  </div>
                                </div>
                                @endif
                            </div>
                        </div> 

                        


                        
                    </div>

                </div>

                <!-- My Request body section -->
                <div id="myRequestBody" class="flex mx-[100vw] py-5 p-0 flex-col w-full h-auto text-yellow-500 rounded-lg bg-white dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800 font-mulish">
                    @php
                        $studentRequest = DocumentRequest::where('student_id', Auth::guard('students')->user()->id)->orderBy('updated_at', 'desc')->get();
                    @endphp
                    <!-- My Requests Body Section -->
                    <div class="w-full flex flex-col items-center justify-center">

                        <div class="justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

                            <div class="relative overflow-x-auto rounded">

                                <table class="w-full lg:text-sm text-xs text-left rtl:text-right text-green-900 dark:text-gray-400">
                                    <thead class="lg:text-base text-sm text-white bg-green-500 dark:bg-gray-700 dark:text-gray-400 uppercase">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Lists
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($studentRequest as $request)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600" data-popover-target="popover-default1" >
                                            <td class="px-6 py-4">
                                                {{$request->document_requests}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$request->status}}
                                            </td>
                                        </tr>

                                        <div data-popover id="popover-default1" role="tooltip" class="absolute z-10 invisible inline-block w-auto text-md text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2">
                                                <p>{{Carbon::parse($request->updated_at)->format('F j, Y g:i A')}}</p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                                
                        </div>

                        <button
                        id="myRequestBckBtn" 
                        class="block focus:outline-none text-green-600 font-bold border border-green-500 lg:text-base mt-4 text-sm px-12 py-2 rounded-xl hover:shadow-lg hover:shadow-neutral-200 hover:outline hover:outline-1 hover:outline-green-600 w-fit" 
                        type="button">
                        <
                        </button>

                    </div>

                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Get references to the buttons and the div elements
                        const myRequestBtn = document.getElementById("myRequestBtn");
                        const myRequestBckBtn = document.getElementById("myRequestBckBtn");
                        const myRequestBody = document.getElementById("myRequestBody");
                        const mainBody = document.getElementById("mainBody");

                        // Set the initial state (mainBody visible, myRequestBody hidden)
                        mainBody.style.display = "flex";
                        myRequestBody.style.display = "none";

                        // Add a click event listener to the "Request" button
                        myRequestBtn.addEventListener("click", function () {
                            // Show the myRequestBody div
                            myRequestBody.style.display = "flex";

                            // Hide the mainBody div
                            mainBody.style.display = "none";
                        });

                        // Add a click event listener to the "Back" button
                        myRequestBckBtn.addEventListener("click", function () {
                            // Show the mainBody div
                            mainBody.style.display = "flex";

                            // Hide the myRequestBody div
                            myRequestBody.style.display = "none";
                        });
                    });
                </script>


            </div>
            
        </section>

    </div>

    @elseif (request()->is('student.student-information') )
    <!-- Student Information Section Container-->
    <div class="md:pl-64 pl-0 w-full min-h-full bg-yellow-50 lg:py-12 py-8 md:px-16 px-12">

        <section class="container container-fluid lg:p-9 p-6 grid grid-cols-1 min-w-full min-h-full relative rounded-md justify-start gap-1 lg:py-7 bg-white md:ml-8 ml-6 shadow shadow-brown-200">
            
            <!-- Header Content -->
            <div class="flex flex-col gap-2">
                <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-green-900">Student Information</h3>
                <p class="mt-1 lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">Dive into the details of your student profile. From personal information to contact details, everything you need is right here. Keep it easy, keep it straightforward - your student info, always available, always clear.</p>
                <h2 class="mt-4 font-semibold text-lg sm:text-xl lg:text-2xl text-brown-600">{{ $last_name }}, {{ $first_name }} {{ $middle_name }} ( {{ $lrn }} )</h2>
            </div> <!-- End of Header Content -->

            <div class=" flex min-w-screen flex-col gap-6 items-center mt-6">
                
                <div id="mainBody" class="flex flex-col mx-40 w-full text-yellow-500 rounded-lg bg-white dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800 justify-start font-mulish">

                    <!-- My Requests Button Section -->
                    <div class="w-full grid grid-cols-1 sm:grid-cols-2 justify-center gap-20  ">
                        
                        <div class="overflow-x-auto w-auto">
                            <table class="bg-white lg:text-base rounded text-xs font-mulish text-left rtl:text-right text-green-900 dark:text-gray-400 font-semibold">
                                <tbody>
                                    <tr class="bg-white">
                                        <th scope="row" class="px-10 py-6 font-semibold text-green-900 whitespace-nowrap dark:text-white uppercase tracking-wide text-lg">
                                            Student Information
                                        </th>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-normal text-gray-500 whitespace-nowrap dark:text-white ">
                                            Learner's Reference Number
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $lrn }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Name
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $last_name }}, {{ $first_name }} {{ $middle_name }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Age
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $age }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Gender
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $gender }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Date of Birth
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $birth_date }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Religion
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $religion }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Indigenous Group
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $indigenous_group }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Mother Tongue
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $mother_tongue }}
                                        </td>
                                    </tr>

                                    <tr class="bg-white">
                                        <th scope="row" class="px-10 py-6 font-semibold text-green-900 whitespace-nowrap dark:text-white uppercase tracking-wide text-lg">
                                            Address
                                        </th>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Region
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $region }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Province
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $province }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            City
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $city }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Barangay
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $barangay }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Street
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $street }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            House number
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $house_number }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="overflow-x-auto w-auto">
                            <table class="white lg:text-base rounded text-xs font-mulish text-left rtl:text-right text-green-900 dark:text-gray-400 font-semibold">
                                <tbody>
                                    <tr class="bg-white">
                                        <th scope="row" class="px-10 py-6 font-semibold text-green-900 whitespace-nowrap dark:text-white uppercase tracking-wide text-lg">
                                            Family Information
                                        </th>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-normal text-gray-500 whitespace-nowrap dark:text-white">
                                            Father's Name
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $father_last_name }}, {{ $father_first_name }} {{ $father_middle_name }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-normal text-gray-500 whitespace-nowrap dark:text-white">
                                            Mobile No.
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $father_phone_number }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-normal text-gray-500 whitespace-nowrap dark:text-white">
                                            Email
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $father_email_address }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Mother's Name
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $mother_last_name }}, {{ $mother_first_name }} {{ $mother_middle_name }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-normal text-gray-500 whitespace-nowrap dark:text-white">
                                            Mobile No.
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $mother_phone_number }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-normal text-gray-500 whitespace-nowrap dark:text-white">
                                            Email
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $mother_email_address }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            Guardian's Name
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $guardian_last_name }}, {{ $guardian_first_name }} {{ $guardian_middle_name }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-normal text-gray-500 whitespace-nowrap dark:text-white">
                                            Mobile No.
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $guardian_phone_number }}
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-l-4 border-green-500">
                                        <th scope="row" class="px-10 py-2 font-normal text-gray-500 whitespace-nowrap dark:text-white">
                                            Email
                                        </th>
                                        <td class="px-10 py-2">
                                            {{ $guardian_email_address }}
                                        </td>
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
<!-- Requests Document Section -->

<!-- Student Information Section -->