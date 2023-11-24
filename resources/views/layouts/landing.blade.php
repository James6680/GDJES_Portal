@php
  use Carbon\Carbon;
@endphp
<!doctype html>
<html lang="en">

<head>
  @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/ph-address-selector.js'])
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GDJES Landing Page</title>

  <link rel="shortcut icon" href="{{ asset('assets/GDJES Logo.png') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;700&family=Mulish:wght@400;700&display=swap"
    rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />


  <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
  
<body
  class="container overflow-x-hidden w-screen container-fluid flex flex-col justify-start h-screen m-0 pt-16 bg-black">
  <!-- Navigation bar -->
  <nav class="fixed top-0 z-10 w-screen h-auto flex justify-between p-4 xl:px-60 xl:py-4 items-center mx-0 bg-brown-50">
    <!-- Logo container -->
    <div class="justify-start items-center gap-2 flex w-auto">
      <img aria-label="GDJES Manila logo" class="w-10 h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 relative"
        src="./assets/GDJES Logo.png" />
      <div class="flex-col justify-start items-start gap-0 inline-flex">
        <h2 class="font-frl text-lg md:text-xl font-bold leading-none">
          GREGORIA DE JESUS
        </h2>
        <p class="self-stretch text-2xs font-mulish lg:text-xs font-normal leading-none">
          ELEMENTARY SCHOOL - MANILA
        </p>
      </div>
    </div>

    <!-- Navigation buttons -->
    <div
      class="md:bg-transparent z-998 p-4 bg-yellow-50 nav-links duration-500 md:static absolute md:min-h-fit min-h-auto left-0 top-[-1070%] md:w-auto h-auto w-full flex justify-center md:items-center md:p-0 ">
      <ul class="flex md:flex-row flex-col items-center content-center md:items-center md:gap-[2vw] gap-4 p-0">
        <li>
          <a class="hover:text-green-900 hover:underline text-sm md:text-base font-mulish text-green-700"
            href="#hero">Home</a>
        </li>
        <li>
          <a class="hover:text-green-900 hover:underline text-sm md:text-base font-mulish text-green-700"
            href="#announcement">Announcements</a>
        </li>
        <li>
          <a class="hover:text-green-900 hover:underline text-sm md:text-base font-mulish text-green-700"
            href="#missionvision">Mission & Vision</a>
        </li>
        <!-- CTA Button -->
        <div class="flex items-center gap-6">
          <button onclick=" window.location.href = 'students/login'"
            class="px-4 py-2.5 lg:px-8 lg:py-3 bg-green-500 text-sm md:text-base text-white rounded-lg hover:bg-green-900 uppercase font-mulish hover:shadow-md hover:shadow-green-700/50">
            Student Portal
          </button>
        </div>
      </ul>
    </div>

    <ion-icon onclick="onToggleMenu(this)" name="menu"
      class="text-3xl color-green-500 cursor-pointer md:hidden"></ion-icon>
  </nav>

  <!-- Hero section -->

  <section id="hero"
    class="w-screen z-0 flex-col justify-center items-center gap-3 lg:gap-10 flex h-4/6 lg:h-full pt-40 px-18 pb-24 lg:pt-80 lg:py-60 bg-no-repeat bg-cover bg-center bg-[url(../assets/content-schoolgrounds.jpg)]">
    <div class="h-auto p-2.5 justify-center items-center gap-2.5 inline-flex">
      <span
        class="w-auto text-center bg-gradient-to-tr from-brown-200 via-brown-50 to-yellow-100 bg-clip-text text-transparent font-frl text-xl md:text-2xl lg:text-4xl font-bold leading-10">Ang
        iyong ikalawang tahanan<br />tungo sa mahusay na
        kinabukasan.</span>
    </div>
    <a href="#announcement" class="button material-symbols-rounded text-brown-50 size-24 lg:size-40">
      arrow_downward
    </a>
  </section>

  <!-- Announcement section -->
  <section id="announcement"
    class="z-0 w-screen flex relative flex-col justify-start gap-2.5 h-auto p-8 md:p-16 lg:py-28 lg:px-60 bg-yellow-50">
    <h2 class="w-auto flex font-frl text-xl lg:text-3xl text-black font-bold">
      Announcements
    </h2>
    <hr class="bg-green-500 flex h-1 border-0 my-6 relative" />
    <ul class="m-o p-0 w-full h-auto" id="announcement_list">
      @if ($announcements->isNotEmpty())
      @foreach ($announcements->slice(0, 3) as $announcement)
          <li class="py-5 border-b border-black">
              <a href="{{$announcement->announcement_url}}" class="flex flex-col justify-between align-middle">
                  <span class="font-mulish font-semibold text-xs md:text-sm lg:text-base">{{$announcement->announcement_title}}</span>
                  <span class="font-mulish font-normal text-xs md:text-sm lg:text-base">{{ Carbon::parse($announcement->created_at)->format('F j, Y g:i A') }}</span>
              </a>
          </li>
      @endforeach
      @else
      @endif
    </ul>

    <img src="{{ asset ('assets/announcement-gradient-blob.svg') }}" alt="SVG image"
      class="-z-10 w-2/3 lg:w-2/5 absolute bottom-0 right-0 h-auto" />
  </section>

  <!-- Mission and Vision section -->
  <section id="missionvision"
    class="grid w-screen relative gap-6 h-auto p-8 md:p-16 lg:py-28 lg:px-60 lg:gap-12 bg-yellow-50 bg-no-repeat bg-cover bg-center  bg-[url(../assets/content-teacher.jpg)]">
    <h2 class="w-auto flex justify-center font-frl text-xl lg:text-3xl text-black font-bold">
      Mission and Vision
    </h2>
    <p class="font-mulish text-xs md:text-sm lg:text-base text-black font-normal">Bilang isang paaralan na bahagi ng
      Kagawaran ng
      Edukasyon,
      sumusuporta kami sa misyon at bisyon nito na bigyan
      ang bawat mag-aaral ng dekalidad na edukasyon at mabuting kinabukasan. <br class="md:hidden"><br
        class="md:hidden">Sa
      pamamagitan ng pagtuturo mula sa
      puso at
      pagsasanay sa kakayanan, naniniwala kaming maaabot ng aming mga mag-aaral ang kanilang mga pangarap sa buhay.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 h-auto p-0 lg:gap-6">
      <div class="bg-green-500 flex flex-col p-6 lg:p-10 rounded-lg gap-6">
        <h3 class="w-auto font-frl text-lg lg:text-2xl text-white font-semibold">The DepEd Mission</h3>
        <p class="font-mulish text-xs md:text-sm text-white font-normal lg:text-base">To protect and promote the right
          of every
          Filipino to quality,
          equitable, culture-based, and complete basic
          education where:</p>
        <ul class="list-disc list-inside text-white">
          <li class="font-mulish text-xs md:text-sm text-white mb-2 font-normal lg:text-base">
            Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.
          </li>
          <li class="font-mulish lg:text-base text-xs md:text-sm text-white mb-2 font-normal">
            Teachers facilitate learning and constantly nurture every learner.
          </li>
          <li class="font-mulish text-xs md:text-sm text-white mb-2 font-normal lg:text-base">
            Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for
            effective learning to happen.
          </li>
          <li class="font-mulish text-xs md:text-sm text-white font-normal lg:text-base">
            Family, community, and other stakeholders are actively engaged and share responsibility for developing
            life-long learners.
          </li>
      </div>

      <div class="p-0 m-0 gap-6 flex flex-col">
        <div class="bg-green-500 flex flex-col p-6 lg:p-10 rounded-lg gap-6">
          <h3 class="w-auto font-frl text-lg lg:text-2xl text-white font-semibold">The DepEd Vision</h3>
          <p class="font-mulish text-xs md:text-sm text-white font-normal lg:text-base">We dream of Filipinos who
            passionately love
            their country and whose values and competencies enable them to realize their full potential and contribute
            meaningfully to building the nation.</p>
          <p class="font-mulish text-xs md:text-sm text-white font-normal lg:text-base">As a learner-centered public
            institution, the
            Department of Education continuously improves itself to better serve its stakeholders.</p>
        </div>

        <div class="bg-yellow-100 flex flex-col p-6 lg:p-10 rounded-lg gap-6 ">
          <h3 class="w-auto font-frl text-lg lg:text-2xl text-black font-semibold">Our Core Values</h3>
          <p class="font-mulish font-normal text-xs md:text-sm text-black lg:text-base">Maka-Diyos<br>
            Maka-tao<br>
            Makakalikasan<br>
            Makabansa</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs section -->
  <section id="faqs" class="z-0 grid w-screen relative gap-3 h-auto p-8 md:p-16 lg:py-28 lg:px-60 lg:gap-12 bg-white">
    <h2 class="w-auto flex justify-start font-frl text-xl lg:text-3xl text-black font-bold">
      Frequently Asked Questions
    </h2>
    <hr class="bg-black flex h-1 border-0 my-4 relative" />
    <div id="accordion-flush" data-accordion="collapse"
      data-active-classes="text-black font-mulish text-sm lg:text-xl border-gray-200"
      data-inactive-classes="text-black font-mulish text-sm lg:text-xl border-black">
      <!-- Accordion item 1 -->
      <h2 id="accordion-flush-heading-1" class="text-black font-mulish text-sm lg:text-xl">
        <button type="button"
          class="flex items-center justify-between w-full py-5 text-left text-black font-mulish font-normal border-b border-black dark:border-gray-700 dark:text-gray-400"
          data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
          <span>Tuwing oras at kailan bukas ang paaralan?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5 5 1 1 5" />
          </svg>
        </button>
      </h2>
      <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
        <div class="py-5 border-b border-black dark:border-gray-700">
          <p class="mb-2 text-gray-600 font-mulish dark:text-gray-400 font-light text-xs lg:text-base">Lunes hanggang
            Biyernes, mula
            7:30 ng
            umaga hanggang 4:00 ng
            hapon ang mga oras ng paaralan.</p>
        </div>
      </div>
      <!-- Accordion item 2 -->
      <h2 id="accordion-flush-heading-2" class="text-black font-mulish text-sm lg:text-xl">
        <button type="button"
          class="flex items-center justify-between w-full py-5 text-left text-black font-mulish font-normal border-b border-black dark:border-gray-700 dark:text-gray-400"
          data-accordion-target="#accordion-flush-body-2" aria-expanded="true" aria-controls="accordion-flush-body-2">
          <span>May dress code ba sa paaralan?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5 5 1 1 5" />
          </svg>
        </button>
      </h2>
      <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
        <div class="py-5 border-b border-black dark:border-gray-700">
          <p class="mb-2 text-gray-600 font-mulish dark:text-gray-400 font-light text-xs lg:text-base">Nangangailangan
            ng official school uniform ang mga mag-aaral. Tingnan ang detalye sa dress code policy.</p>
        </div>
      </div>
      <!-- Accordion item 3 -->
      <h2 id="accordion-flush-heading-3" class="text-black font-mulish text-sm lg:text-xl">
        <button type="button"
          class="flex items-center justify-between w-full py-5 text-left text-black font-mulish font-normal border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
          data-accordion-target="#accordion-flush-body-3" aria-expanded="true" aria-controls="accordion-flush-body-3">
          <span>Paano ko maeenroll ang aking anak?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5 5 1 1 5" />
          </svg>
        </button>
      </h2>
      <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
        <div class="py-5 border-b border-black dark:border-gray-700">
          <p class="mb-2 text-gray-600 font-mulish dark:text-gray-400 font-light text-xs lg:text-base">Bukas ang
            pag-eenroll mula August 26 para sa school year 2023-2024. Magtungo sa student portal upang makapagrehistro
            at makita ang mga kinakailangang dokumento para maproseso ang enrollment ng bata.</p>
        </div>
      </div>
      <!-- Accordion item 4 -->
      <h2 id="accordion-flush-heading-4" class="text-black font-mulish text-sm lg:text-xl">
        <button type="button"
          class="flex items-center justify-between w-full py-5 text-left text-black font-mulish font-normal border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
          data-accordion-target="#accordion-flush-body-4" aria-expanded="true" aria-controls="accordion-flush-body-4">
          <span>Paano ako makakapagrequest ng dokumento?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5 5 1 1 5" />
          </svg>
        </button>
      </h2>
      <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
        <div class="py-5 border-b border-black dark:border-gray-700">
          <p class="mb-2 text-gray-600 font-mulish dark:text-gray-400 font-light text-xs lg:text-base">Ang pagproseso
            ng mga dokumento ng mga kasulukyang mag-aaral ay maaaccess sa loob ng student portal. Para naman sa mga
            graduate na hindi umabot sa paggawa ng student account, kinakailangan namin kayong magtungo sa ating
            paaralan para sa mas mabilis na pagproses ng inyong mga dokumento.
          </p>
        </div>
      </div>
      <!-- Accordion item 5 -->
      <h2 id="accordion-flush-heading-5" class="text-black font-mulish text-sm lg:text-xl">
        <button type="button"
          class="flex items-center justify-between w-full py-5 text-left text-black font-mulish font-normal border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
          data-accordion-target="#accordion-flush-body-5" aria-expanded="true" aria-controls="accordion-flush-body-5">
          <span>Paano ako makakapagrequest ng dokumento?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5 5 1 1 5" />
          </svg>
        </button>
      </h2>
      <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
        <div class="py-5 border-b border-black dark:border-gray-700">
          <p class="mb-2 text-gray-600 font-mulish dark:text-gray-400 font-light text-xs lg:text-base">Ang pagproseso
            ng mga dokumento ng mga kasulukyang mag-aaral ay maaaccess sa loob ng student portal. Para naman sa mga
            graduate na hindi umabot sa paggawa ng student account, kinakailangan namin kayong magtungo sa ating
            paaralan para sa mas mabilis na pagproses ng inyong mga dokumento.
          </p>
        </div>
      </div>


      <img src="{{ asset ('assets/faqs-gradient-blob.svg') }}" alt="SVG image"
        class="-z-10 w-2/3 lg:w-2/5 absolute bottom-0 left-0 h-auto opacity-50" />
  </section>

  <!-- Contact Us section -->
  <section id="contactus"
    class="z-0 grid w-screen relative gap-4 md:gap-8 h-auto p-8 md:p-16 lg:py-28 lg:px-60 lg:gap-12 bg-yellow-50">
    <h2 class="w-auto flex justify-start font-frl text-xl lg:text-3xl text-black font-bold">
      Contact Us
    </h2>
    <p class="font-mulish font-base text-xs md:text-base text-black">
      Mahalaga sa amin na matulungan kayo sa anumang kailangan ninyo tungkol sa paaralan. Huwag mag-atubiling tawagan,
      i-email, o bisitahin kami sa tanggapan. Bukas ang aming mga puso at isipan para sagutin ang inyong mga katanungan.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 h-auto p-0 lg:gap-8">
      <div class="md:col-span-1 flex flex-col justify-start md:gap-5">
        <p class=" font-mulish font-base text-xs md:text-base text-black">
          <strong>Address:</strong> JXHG+566, Dagupan St, Tondo, Manila, Metro Manila
        </p>
        <p class=" font-mulish font-base text-xs md:text-base text-black">
          <strong>Phone:</strong> +63 914 443 2981
        </p>
        <p class=" font-mulish font-base text-xs md:text-base text-black">
          <strong>Email:</strong> <a class="underline"
            href="mailto: gdjes.manila@deped.gov.ph">gdjes.manila@deped.gov.ph</a>
        </p>
      </div>

      <iframe class="md:col-span-2 rounded-lg"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.493496917568!2d120.97292997494964!3d14.627905385861643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5e8a4b8bfb9%3A0x221a1ea6814d1090!2sGregoria%20De%20Jesus%20Elementary%20School!5e0!3m2!1sen!2sph!4v1695742099196!5m2!1sen!2sph"
        width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <img src="{{ asset ('assets/contactus-gradient-blob.svg') }}" alt="SVG image"
      class="-z-10 w-2/3 lg:w-2/5 absolute self-center h-auto opacity-40" />
  </section>

  <!-- Faculty and Admin Access section -->
  <section id="facultyAndAdminAccess"
    class="z-0 grid w-screen relative gap-4 md:gap-6 h-auto p-8 md:p-16 lg:py-28 lg:px-60 lg:gap-12 bg-white">
    <div class="gap-4 flex flex-col">
      <h2 class="w-auto flex justify-start font-frl text-xl lg:text-3xl text-black font-bold">
        Faculty and Admin Access
      </h2>
      <p class="w-auto md:w-2/3 lg:w-3/4 font-mulish font-base text-xs md:text-base text-black">
        Hello, beloved faculty member! Log in here with your credentials to access your portal and manage classes,
        students, schedules and more.
      </p>
    </div>
    <button
      class="px-4 py-2.5 lg:px-8 lg:py-3 w-auto md:max-w-fit bg-brown-500 text-sm md:text-base lg:text-lg text-white rounded-lg hover:bg-brown-900 uppercase font-mulish hover:shadow-md hover:shadow-green-700/50">
      Go to faculty and admin portal
    </button>

    <img src="{{ asset ('assets/facultyandadminaccess-gradient-blob.svg') }}" alt="SVG image"
      class="-z-10 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-30" />
  </section>

  <!-- Footer section -->
  <section id="footer"
    class="z-0 grid grid-cols-1 md:grid-cols-3 w-screen relative gap-6 md:gap-9 h-auto p-8 md:p-16 lg:px-60 lg:gap-12 bg-green-700">
    <!-- Logo container -->
    <div class="md:col-span-1 flex-start items-center md:items-start gap-2 flex  w-auto">
      <img aria-label="GDJES Manila logo" class="w-10 h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 relative"

        src="{{ asset ('assets/GDJES Logo.png') }}" />
      <div class="flex-col justify-start items-start gap-0 inline-flex">
        <h2 class="font-frl text-sm md:text-base font-bold leading-none text-white">
          GREGORIA DE JESUS
        </h2>
        <p class="self-stretch text-2xs font-mulish lg:text-xs font-normal leading-none text-white">
          ELEMENTARY SCHOOL - MANILA
        </p>
      </div>
    </div>

    <div
      class="md:col-span-2 md:grid-cols-2 grid grid-cols-1 lg:justify-self-end items-start gap-6 md:gap-12 max-w-fit">
      <div class="grid grid-cols-1 col-span-1 gap-4 md:gap-5 lg:gap-6">
        <a class="hover:text-white hover:underline text-xs md:text-sm lg:text-base font-mulish text-white"
          href="#hero">Home</a>
        <a class="hover:text-white hover:underline text-xs md:text-sm lg:text-base font-mulish text-white"
          href="#announcement">Announcements</a>
        <a class="hover:text-white hover:underline text-xs md:text-sm lg:text-base font-mulish text-white"
          href="#missionvision">Mission and Vision</a>
        <a class="hover:text-white hover:underline text-xs md:text-sm lg:text-base font-mulish text-white"
          href="#faqs">Frequently
          Asked Questions</a>
      </div>
      <div class="grid grid-cols-1 col-span-1 gap-4 md:gap-5 lg:gap-6">
        <a class=" hover:text-white hover:underline text-xs md:text-sm lg:text-base font-mulish text-white" href="#">
          Student Portal</a>
        <a class="hover:text-white hover:underline text-xs md:text-sm lg:text-base font-mulish text-white"
          href="#facultyAndAdminAccess">Faculty and Admin Portal</a>
      </div>
    </div>
  </section>

  <!-- Copyright Section -->
  <section id="copyright" class="z-0 w-screen relative gap-6 h-auto p-8 bg-green-900 flex justify-center items-center">
    <p
      class="text-2xs lg:text-xs max-w-fit font-mulish text-center bg-gradient-to-tr from-brown-200 via-brown-50 to-yellow-100 bg-clip-text text-transparent ">
      Copyright © Gregoria de Jesus Elementary School - Manila 2023. All rights reserved.
    </p>
  </section>


  <!-- Navigation button responsiveness -->
  <script>
    const navLinks = document.querySelector(".nav-links");
    function onToggleMenu(e) {
      e.name = e.name === "menu" ? "close" : "menu";
      navLinks.classList.toggle("top-[100%]");
    }

    // $(document).ready(function() {
    //         getTableData();
    //     });

    // function getTableData(){
    //         const url = '/api/GetAnnouncements';
    //         const table = $('#myTable');
    //         table.find("tr").remove();
    //       // Populate dropdown with list of regions
    //         $.getJSON(url, function(data) {
    //             console.log(data);
    //             // Iterate over the JSON data and create a new row in the table for each entry.
    //             $.each(data, function(index, entry) {
    //             });
    //         });
    //     }
  </script>

</body>
</html>