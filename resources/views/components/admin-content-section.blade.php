@php
  $currentSchoolYearStart = '2023';
  $currentSchoolYearEnd = '2024';
  $schoolYear = '2023 - 2024';
  $enrollmentPhase = 'Pre-enrollment';
  $enrollmentStatus = 'Open';
@endphp







<!-- Content Section -->
<div class="w-full h-full grid grid-cols-1 md:pl-64">





  <!-- Admin Dashboard -->
  @if (request()->is('admin.dashboard') )
  <!-- Top Bar Dark Green Decor -->
  <section class="absolute top-0 right-0 -z-50 bg-gradient-to-t from-green-700 to-slate-900 w-full h-80">
  </section> <!-- End of Top Bar Dark Green Decor -->
  <!--  Admin Dashboard Main Content Container -->
  <section class="w-full min-h-full gap-4 p-4 grid grid-cols-1">
    <h1 class="text-center w-full px-4 pt-5 pb-3.5 font-mulish font-semibold text-lg sm:text-2xl lg:text-3xl text-white">Academic Year {{ $currentSchoolYearStart }} - {{ $currentSchoolYearEnd }} Data</h1>
    
    <!--  Statistics Container -->
    <div class="sm:mx-4 gap-4 grid grid-cols-1 lg:grid-cols-2 h-auto">
      
      <div class="gap-4 grid grid-cols-3 h-auto">
        <a href="#" class="shadow outline outline-1 outline-green-50 hover:outline-green-200 outline-offset-1 hover:outline-2 flex flex-col flex-wrap w-full p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="text-xs md:text-base font-normal tracking-tight text-black dark:text-white">ENROLLEES</h5>
            <p class="font-semibold text-2xl text-black dark:text-gray-400">1351</p>
        </a>

        <div class="grid md:grid-rows-2 gap-4  ">
          <a href="#" class="shadow outline outline-1 outline-green-50 hover:outline-green-200 outline-offset-1 hover:outline-2 flex flex-col flex-wrap w-full p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="text-xs md:text-base font-normal tracking-tight text-black dark:text-white">MALE</h5>
              <p class="font-semibold text-2xl text-black dark:text-gray-400">1351</p>
          </a>
          <a href="#" class="shadow outline outline-1 outline-green-50 hover:outline-green-200 outline-offset-1 hover:outline-2 flex flex-col flex-wrap w-full p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="text-xs md:text-base font-normal tracking-tight text-black dark:text-white">FEMALE</h5>
              <p class="font-semibold text-2xl text-black dark:text-gray-400">1351</p>
          </a>
        </div>

        <a href="#" class="shadow outline outline-1 outline-green-50 hover:outline-green-200 outline-offset-1 hover:outline-2 flex flex-col w-full p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="text-xs md:text-base font-normal tracking-tight text-black dark:text-white">CUSTOMIZED AID STUDENTS</h5>
            <p class="font-semibold text-2xl text-black dark:text-gray-400">1351</p>
        </a>
      </div>
      
      <div class="gap-4 grid grid-rows-2">
        <div class="grid grid-cols-2 gap-4  ">
          <a href="#" class="shadow outline outline-1 outline-green-50 hover:outline-green-200 outline-offset-1 hover:outline-2 flex flex-col w-full p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="text-xs md:text-base font-normal tracking-tight text-black dark:text-white">TRANSFERRED IN</h5>
              <p class="font-semibold text-2xl text-black dark:text-gray-400">1351</p>
          </a>
          <a href="#" class="shadow outline outline-1 outline-green-50 hover:outline-green-200 outline-offset-1 hover:outline-2 flex flex-col w-full p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="text-xs md:text-base font-normal tracking-tight text-black dark:text-white">TRANSFERRED OUT</h5>
              <p class="font-semibold text-2xl text-black dark:text-gray-400">1351</p>
          </a>
        </div>

        <a href="#" class="shadowoutline outline-1 outline-green-50 hover:outline-green-200 outline-offset-1 hover:outline-2 flex flex-col w-full p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="text-xs md:text-base font-regular tracking-tight text-black dark:text-white">DROPOUTS</h5>
              <p class="font-semibold text-2xl text-black-700 dark:text-gray-400">1351</p>
        </a>
      </div>   
    </div> <!-- End of Statistics Container -->

    <!-- Charts Container for Current School Year -->
    <div class="sm:mx-4 h-full gap-4 grid grid-cols-1 lg:grid-cols-2 ">

      <!-- Preferred Mode of Learning Section -->
      <div class="w-full h-auto shadow font-mulish bg-white rounded-lg outline outline-1 outline-green-50 p-4 md:p-6">
        <div class="flex justify-between items-start w-full">
          <div class="flex-col items-center">
            <div class="flex items-center mb-1">
              <h5 class="text-xl font-semibold leading-none text-black dark:text-white mr-1">PREFERRED MODE OF LEARNING</h5>
              <svg data-popover-target="pmol-chart-info" data-popover-placement="bottom" class="w-4 h-4 text-green-300 dark:text-gray-400 hover:text-black dark:hover:text-white cursor-pointer ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
              </svg>
              <div data-popover id="pmol-chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                <div class="p-4 space-y-2">
                  <h3 class="font-semibold text-black dark:text-white">DEPED's Learning Modalities</h3>
                  <p>The different learning strategies and modalities were devised as part of the Basic Education - Learning Continuity Plan which covers essential
                    requirements of education in the time of COVID-19. The modalities adopted by the schools since SY 2020-2021 depended on the local COVID-19
                    situation and access to the learning platforms. </p>
                  <a href="https://www.deped.gov.ph/wp-content/uploads/2022/08/7-Databits-Learning-Delivery-Modalities-Jul.pdf" class="flex items-center font-semibold text-yellow-600 dark:text-yellow-500 dark:hover:text-yellow-600 hover:text-yellow-700 hover:underline">Read more <svg class="w-2 h-2 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                  </a>
                </div>
                <div data-popper-arrow>
                </div>
              </div>
            </div>

            <!-- Dropdown SY Button for Preferred Mode of Learning -->
            <button id="dropdownSYHoverButton-pmol" data-dropdown-toggle="dropdownSYHover-pmol" data-dropdown-trigger="hover" class="text-green-600 bg-green-50 hover:bg-green-100 hover:text-green-900 focus:ring-2 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 my-2 py-2.5 text-left inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">School Year: {{ $currentSchoolYearStart }} - {{ $currentSchoolYearEnd }} <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>

            <!-- Dropdown menu for Preferred Mode of Learning -->
            <div id="dropdownSYHover-pmol" class="z-10 w-52 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                <ul class="p-2 rounded-xl text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2019 - 2020</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2020 - 2021</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2021 - 2022</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2022 - 2023</a>
                  </li>
                </ul>
            </div>
            
          </div>          
        </div>

        <!-- Pie Chart - Preferred Mode of Learning -->
        <div class="py-6" id="pmol-pie-chart"></div>

        <!-- Script Start of Pie Chart Preferred Mode of Learning -->
        <script> 
        // ApexCharts options and config
        window.addEventListener("load", function() {
          const getChartOptions = () => {
            // Combine series and labels into an array of objects
            let combined = [
              { label: "Blended", value: 50 },
              { label: "Modular Digital", value: 61 },
              { label: "Online", value: 35 },
              { label: "Educational Television", value: 12 },
              { label: "Modular Printed", value: 46 },
            ];

            // Sort the array by value in descending order
            combined.sort((a, b) => b.value - a.value);

            // Split the array back into separate series and labels arrays
            let series = combined.map(item => item.value);
            let labels = combined.map(item => `${item.label}: ${item.value}`);

            return {
              series: series,
              colors: ["#93733e", "#303c30", "#506350", "#798a79", "#b2bcb2"],
                chart: {
                  height: 400,
                  width: "100%",
                  type: "pie",
                  toolbar: {
                    show: true,
                    export: {
                      csv: {
                        filename: "GDJES Students' Preferred Mode of Learning Data",
                        columnDelimiter: ',',
                        headerCategory: 'Preferred MOL',
                        headerValue: 'No. of Students',
                        dateFormatter(timestamp) {
                          return new Date(timestamp).toDateString()
                        }
                      },
                      svg: {
                        filename: "GDJES Students' Preferred Mode of Learning Data",
                      },
                      png: {
                        filename: "GDJES Students' Preferred Mode of Learning Data",
                      }
                    },
                  },
                },
                stroke: {
                  colors: ["white"],
                  lineCap: "",
                },
                plotOptions: {
                  pie: {
                    labels: {
                      show: true,
                    },
                    size: "100%",
                    dataLabels: {
                      offset: -5,
                    }
                  },
                },
              labels: labels,
              dataLabels: {
                  enabled: true,
                  style: {
                    fontFamily: "Mulish, Inter, sans-serif",
                  },
                },
                legend: {
                  position: "right",
                  fontFamily: "Mulish, Inter, sans-serif",
                },
                yaxis: {
                  labels: {
                    formatter: function (value) {
                      return value
                    },
                  },
                },
                xaxis: {
                  labels: {
                    show: false,
                  },
                  axisTicks: {
                    show: false,
                  },
                  axisBorder: {
                    show: false,
                  },
                },
            }
          }

          if (document.getElementById("pmol-pie-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("pmol-pie-chart"), getChartOptions());
            chart.render();
          }
        });
        </script> <!-- Script End of Pie Chart Preferred Mode of Learning -->
      </div> <!-- End of Preferred Mode of Learning Section -->

      <!-- Enrollees Mother Tongue Section -->
      <div class="w-full shadow font-mulish bg-white rounded-lg outline outline-1 outline-green-50 p-4 md:p-6">
        <div class="flex justify-between items-start w-full">
          <div class="flex-col items-center">
            <div class="flex items-center mb-1">
                <h5 class="text-xl font-semibold leading-none text-black dark:text-white mr-1">ENROLLEES MOTHER TONGUE</h5>
                <svg data-popover-target="emt-chart-info" data-popover-placement="bottom" class="w-4 h-4 text-green-300 dark:text-gray-400 hover:text-black dark:hover:text-white cursor-pointer ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
                </svg>
                <div data-popover id="emt-chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                  <div class="p-4 space-y-2">
                    <h3 class="font-semibold text-black dark:text-white">Mother Tongue - Based Multilingual Education (MTB-MLE)</h3>
                    <p>Mother Tongue - Based Multilingual Education (MTB-MLE) is the government's banner program for education as a salient part of the implementation of the K to 12 
                    Basic Education Program. Its significance is underscored by the passing of Republic Act 10523, otherwise known as the “Enhanced Basic Educatiion Act of 2013.</p>
                    <a href="https://www.deped.gov.ph/wp-content/uploads/2019/01/Mother-Tongue-CG.pdf" class="flex items-center font-semibold text-yellow-600 dark:text-yellow-500 dark:hover:text-yellow-600 hover:text-yellow-700 hover:underline">Read more <svg class="w-2 h-2 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                    </a>
                  </div>
                  <div data-popper-arrow>
                  </div>
                </div>
            </div>

            <!-- Dropdown SY Button for Enrollees Mother Tongue -->
            <button id="dropdownSYHoverButton-emt" data-dropdown-toggle="dropdownSYHover-emt" data-dropdown-trigger="hover" class="text-green-600 bg-green-50 hover:bg-green-100 hover:text-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 my-2 py-2.5 text-left inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">School Year: {{ $currentSchoolYearStart }} - {{ $currentSchoolYearEnd }} <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>

            <!-- Dropdown menu for Enrollees Mother Tongue -->
            <div id="dropdownSYHover-emt" class="z-10 w-52 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                <ul class="p-2 rounded-xl text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2019 - 2020</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2020 - 2021</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2021 - 2022</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2022 - 2023</a>
                  </li>
                </ul>
            </div>

            
          </div>          
        </div>

        <!-- Pie Chart - Enrollees Mother Tongue -->
        <div class="py-6" id="emt-pie-chart"></div>

        <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
          const getChartOptions = () => {
            // Combine series and labels into an array of objects
            let combined = [
              { label: "Filipino", value: 1332 },
              { label: "English", value: 16 },
              { label: "Bikolano", value: 25 },
              { label: "Cebuano", value: 15 },
              { label: "Chinese", value: 0 },
              { label: "Ilocano", value: 33 },
              { label: "Kapampangan", value: 0 },
              { label: "Maguindanaoan", value: 0 },
              { label: "Manobo", value: 0 },
              { label: "Nihonggo", value: 0 },
              { label: "PH Sign Language", value: 8 },
              { label: "Tausug", value: 0 },
              { label: "Waray", value: 0 },
              { label: "Ybanag", value: 0 },
              { label: "Others", value: 0 },
            ];

            // Filter out items with a value of zero
            combined = combined.filter(item => item.value !== 0);

            // Sort the array by value in descending order
            combined.sort((a, b) => b.value - a.value);

            // Split the array back into separate series and labels arrays
            let series = combined.map(item => item.value);
            let labels = combined.map(item => `${item.label}: ${item.value}`);

            return {
              series: series,
              colors: ["#506350", "#303c30", "#cdbfa6", "#a98f65", "#bb9a5a", "#715d36", "#e8d7b7", "#d7ba82", "#866938", "#513f22"],
                chart: {
                  height: 400,
                  width: "100%",
                  type: "pie",
                  toolbar: {
                    show: true,
                    export: {
                      csv: {
                        filename: 'GDJES Enrollees Mother Tongue Data',
                        columnDelimiter: ',',
                        headerCategory: 'Enrollees Mother Tongue',
                        headerValue: 'No. of Students',
                        dateFormatter(timestamp) {
                          return new Date(timestamp).toDateString()
                        }
                      },
                      svg: {
                        filename: 'GDJES Enrollees Mother Tongue Data',
                      },
                      png: {
                        filename: 'GDJES Enrollees Mother Tongue Data',
                      }
                    },
                  },
                },
                stroke: {
                  colors: ["white"],
                  lineCap: "",
                },
                plotOptions: {
                  pie: {
                    labels: {
                      show: true,
                    },
                    size: "100%",
                    dataLabels: {
                      offset: -5,
                    },
                  },
                },
              labels: labels,
              dataLabels: {
                  enabled: true,
                  style: {
                    fontFamily: "Mulish, Inter, sans-serif",
                  },
                },
                legend: {
                  position: "right",
                  fontFamily: "Mulish, Inter, sans-serif",
                },
                yaxis: {
                  labels: {
                    formatter: function (value) {
                      return value
                    },
                  },
                },
                xaxis: {
                  labels: {
                    show: false,
                  },
                  axisTicks: {
                    show: false,
                  },
                  axisBorder: {
                    show: false,
                  },
                },
            }
          }

          if (document.getElementById("emt-pie-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("emt-pie-chart"), getChartOptions());
            chart.render();
          }
        });
        </script> <!-- Script End of Pie Chart Enrollees Mother Tongue -->
      </div> <!-- End of Enrollees Mother Tongue Section -->
    </div> <!-- End of Charts Container for Current School Year -->


    <!-- Charts Container for Historical Data -->
    <div class="sm:mx-4 h-full pb-8 gap-4 grid grid-cols-1 lg:grid-cols-2 ">

      <!-- Historical Student Enrollment Data Section -->
      <div class="w-full font-mulish bg-white rounded-lg shadow p-4 md:p-6 outline outline-1 outline-green-50">
        <div class="flex justify-between pb-5 mb-4 border-b border-green-200 dark:border-gray-700">
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-lg bg-green-300 dark:bg-green-700 flex items-center justify-center mr-3">
              <svg class="w-6 h-6 text-white dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
              </svg>
            </div>

            <!-- BACKEND
            Make this dynamic
            fetch the data from the db
            calculate the average
            update the text of the div that displays the average below --> 
            <div>
              <h5 class="leading-none text-2xl font-bold text-black dark:text-white pb-1">3.4k</h5>
              <p class="text-sm font-normal text-black-500 dark:text-black">Average no. of enrollees per year</p>
            </div>
          </div>

          <!-- BACKEND
          Calculate the percentage of the currentSY enrollees compared to the previousSY enrollees
          Add here an if-else statement.
          If currentSY enrollees are greater than previousSY enrollees
          then show the green arrow. Otherwise, show the red arrow. -->
          <div>
            <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" viewBox="0 0 256 256"><path d="M240,56v64a8,8,0,0,1-13.66,5.66L200,99.31l-58.34,58.35a8,8,0,0,1-11.32,0L96,123.31,29.66,189.66a8,8,0,0,1-11.32-11.32l72-72a8,8,0,0,1,11.32,0L136,140.69,188.69,88,162.34,61.66A8,8,0,0,1,168,48h64A8,8,0,0,1,240,56Z"></path></svg>
              42.5%
            </span>
          </div>
          <!-- Downtrend 
          <div>
            <span class="bg-red-100 text-red-800 text-xs font-medium items-center px-2.5 py-1 rounded-md dark:bg-red-900 dark:text-red-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" viewBox="0 0 256 256"><path d="M240,136v64a8,8,0,0,1-8,8H168a8,8,0,0,1-5.66-13.66L188.69,168,136,115.31l-34.34,34.35a8,8,0,0,1-11.32,0l-72-72A8,8,0,0,1,29.66,66.34L96,132.69l34.34-34.35a8,8,0,0,1,11.32,0L200,156.69l26.34-26.35A8,8,0,0,1,240,136Z"></path></svg>
              42.5%
            </span>
          </div>
          -->
          
        </div>
        <div>
          <h5 class="leading-none text-xl font-bold text-black dark:text-white pb-1">HISTORICAL STUDENT ENROLLMENT DATA</h5>
        </div>

        <div id="hsed-column-chart"></div>
      </div> <!-- End of Historical Student Enrollment Data Section -->

      <script>
        
        // ApexCharts options and config
        window.addEventListener("load", function() {

          const options = { 
                //BACKEND
                //Populate the series data with the data from the db  
                colors: ["#798a79", "#a98f65"],
                series: [
                  {
                    name: "Male",
                    color: "#93733e",
                    data: [
                      { x: "2019 - 2020", y: 804 },
                      { x: "2020 - 2021", y: 772 },
                      { x: "2021 - 2022", y: 847 },
                      { x: "2022 - 2023", y: 736 },
                    ],
                  },
                  {
                    name: "Female",
                    color: "#586d58",
                    data: [
                      { x: "2019 - 2020", y: 689 },
                      { x: "2020 - 2021", y: 675 },
                      { x: "2021 - 2022", y: 728 },
                      { x: "2022 - 2023", y: 615 },
                    ],
                  },
                ],
                chart: {
                  type: "bar",
                  stacked: "true",
                  height: "320px",
                  fontFamily: "Mulish, Inter, sans-serif",
                  toolbar: {
                    show: true,
                    export: {
                      csv: {
                        filename: 'GDJES Historical Student Enrollment Data',
                        columnDelimiter: ',',
                        headerCategory: 'Academic Year',
                        headerValue: 'No. of Students',
                        dateFormatter(timestamp) {
                          return new Date(timestamp).toDateString()
                        }
                      },
                      svg: {
                        filename: 'GDJES Historical Student Enrollment Data',
                      },
                      png: {
                        filename: 'GDJES Historical Student Enrollment Data',
                      }
                    },
                  },
                },
                plotOptions: {
                  bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 8,
                    dataLabels: {
                      total: {
                        enabled: true,
                      }
                    }
                  },
                },
                tooltip: {
                  shared: true,
                  intersect: false,
                  style: {
                    fontFamily: "Mulish, Inter, sans-serif",
                  },
                },
                states: {
                  hover: {
                    filter: {
                      type: "darken",
                      value: 1,
                    },
                  },
                },
                stroke: {
                  show: true,
                  width: 0,
                  colors: ["transparent"],
                },
                grid: {
                  show: true,
                  strokeDashArray: 4,
                  padding: {
                    left: 2,
                    right: 2,
                    top: 20,
                  },
                },
                dataLabels: {
                  enabled: true,
                },
                legend: {
                  show: true,
                },
                xaxis: {
                  floating: false,
                  labels: {
                    show: true,
                    style: {
                      fontFamily: "Mulish, Inter, sans-serif",
                      cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    }
                  },
                  axisBorder: {
                    show: false,
                  },
                  axisTicks: {
                    show: false,
                  },
                },
                yaxis: {
                  show: true,
                },
                fill: {
                  opacity: 1,
                },
              }

              if(document.getElementById("hsed-column-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("hsed-column-chart"), options);
                chart.render();
              }
        });

      </script> <!-- End of Script for Historical Student Enrollment Data Section -->

      <!-- Historical Completion Rate Data Section -->
      <div class="w-full font-mulish bg-white rounded-lg shadow p-4 md:p-6 outline outline-1 outline-green-50">
        <div class="flex justify-between pb-5 mb-4 border-b border-green-200 dark:border-gray-700">
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-lg bg-green-300 dark:bg-green-700 flex items-center justify-center mr-3">
              <svg class="w-6 h-6 text-white dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
              </svg>
            </div>

            <!-- BACKEND
            Make this dynamic
            fetch the data from the db
            calculate the average
            update the text of the div that displays the average below --> 
            <div>
              <h5 class="leading-none text-2xl font-bold text-black dark:text-white pb-1">88%</h5>
              <p class="text-sm font-normal text-black-500 dark:text-black">Average completion rate per year</p>
            </div>
          </div>

          <!-- BACKEND
          Calculate the percentage of the currentSY avg completion rate compared to the previousSY
          Add here an if-else statement.
          If currentSY avg completion is greater than previousSY
          then show the green arrow. Otherwise, show the red arrow. -->
          <div>
            <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" viewBox="0 0 256 256"><path d="M240,56v64a8,8,0,0,1-13.66,5.66L200,99.31l-58.34,58.35a8,8,0,0,1-11.32,0L96,123.31,29.66,189.66a8,8,0,0,1-11.32-11.32l72-72a8,8,0,0,1,11.32,0L136,140.69,188.69,88,162.34,61.66A8,8,0,0,1,168,48h64A8,8,0,0,1,240,56Z"></path></svg>
              1.2
            </span>
          </div>
          <!-- Downtrend 
          <div>
            <span class="bg-red-100 text-red-800 text-xs font-medium items-center px-2.5 py-1 rounded-md dark:bg-red-900 dark:text-red-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" viewBox="0 0 256 256"><path d="M240,136v64a8,8,0,0,1-8,8H168a8,8,0,0,1-5.66-13.66L188.69,168,136,115.31l-34.34,34.35a8,8,0,0,1-11.32,0l-72-72A8,8,0,0,1,29.66,66.34L96,132.69l34.34-34.35a8,8,0,0,1,11.32,0L200,156.69l26.34-26.35A8,8,0,0,1,240,136Z"></path></svg>
              42.5%
            </span>
          </div>
          -->
          
        </div>
        <div>
          <h5 class="leading-none text-xl font-bold text-black dark:text-white pb-1">HISTORICAL COMPLETION RATE DATA</h5>
        </div>

        <div id="hcr-column-chart"></div>
      </div> <!-- End of Historical Student Enrollment Data Section -->

      <script>
        
        // ApexCharts options and config
        window.addEventListener("load", function() {

          const options = { 
                //BACKEND
                //Populate the series data with the data from the db  
                colors: ["#798a79", "#a98f65"],
                series: [
                  {
                    name: "Completion Rate",
                    color: "#798a79",
                    data: [
                      { x: "2019 - 2020", y: 95 },
                      { x: "2020 - 2021", y: 85 },
                      { x: "2021 - 2022", y: 92 },
                      { x: "2022 - 2023", y: 93 },
                    ],
                  },
                ],
                chart: {
                  type: "bar",
                  stacked: "false",
                  height: "320px",
                  fontFamily: "Mulish, Inter, sans-serif",
                  toolbar: {
                    show: true,
                    export: {
                      csv: {
                        filename: 'GDJES Historical Completion Rate Data',
                        columnDelimiter: ',',
                        headerCategory: 'Academic Year',
                        headerValue: 'Percentage',
                        dateFormatter(timestamp) {
                          return new Date(timestamp).toDateString()
                        }
                      },
                      svg: {
                        filename: 'GDJES Historical Completion Rate Data',
                      },
                      png: {
                        filename: 'GDJES Historical Completion Rate Data',
                      }
                    },
                  },
                },
                plotOptions: {
                  bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 8,
                  },
                },
                tooltip: {
                  shared: true,
                  intersect: false,
                  style: {
                    fontFamily: "Mulish, Inter, sans-serif",
                  },
                },
                states: {
                  hover: {
                    filter: {
                      type: "darken",
                      value: 1,
                    },
                  },
                },
                stroke: {
                  show: true,
                  width: 0,
                  colors: ["transparent"],
                },
                grid: {
                  show: true,
                  strokeDashArray: 4,
                  padding: {
                    left: 2,
                    right: 2,
                    top: 20,
                  },
                },
                dataLabels: {
                  enabled: true,
                  formatter: function (value) {
                    return value + "%";
                  },
                },
                legend: {
                  show: true,
                  showForSingleSeries: true,
                },
                xaxis: {
                  floating: false,
                  labels: {
                    show: true,
                    style: {
                      fontFamily: "Mulish, Inter, sans-serif",
                      cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    },
                  },
                  axisBorder: {
                    show: false,
                  },
                  axisTicks: {
                    show: false,
                  },
                },
                yaxis: {
                  show: true,
                  labels: {
                    formatter: function (value) {
                      return value + "%";
                    },
                  },
                },
                fill: {
                  opacity: 1,
                },
              }

              if(document.getElementById("hcr-column-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("hcr-column-chart"), options);
                chart.render();
              }
        });

      </script> <!-- End of Script for Historical Completion Rate Data Section -->
    </div> <!-- End of Charts Container for Current School Year -->
  </section> <!-- End of Admin Dashboard Main Content Container -->



  <!-- Admin Announcements -->
  @elseif(request()->is('admin.announcements') )
  <!-- Admin Announcements Main Content Container -->
  <section class="w-full h-full gap-4 md:gap-16 p-8 pt-12 flex flex-col font-mulish">
    <div class="w-full h-full gap-4 md:gap-5 lg:gap-6 p-4 md:p-8 flex flex-col bg-white outline outline-1 outline-brown-100 rounded-lg">
      <!-- Header Content -->
      <div class="flex flex-col gap-2">
        <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">Announcements Editor</h3>
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Empower your administrative communication. This section allows seamless creation, modification, and removal of announcements. Utilize the CRUD operations to keep the school community informed and engaged. Craft timely updates, important notices, and relevant information effortlessly.</p>
      </div> <!-- End of Header Content -->
      
      <button data-modal-target="create-post-modal" data-modal-toggle="create-post-modal" type="button" class="h-auto w-auto p-2 text-white bg-green-500 hover:bg-green-700 focus:ring-2 focus:outline-none focus:ring-green-300 text-sm font-medium rounded-lg gap-2 md:gap-4 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
            <path d="M224,120v88a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h88a8,8,0,0,1,0,16H48V208H208V120a8,8,0,0,1,16,0Zm5.66-50.34-96,96A8,8,0,0,1,128,168H96a8,8,0,0,1-8-8V128a8,8,0,0,1,2.34-5.66l96-96a8,8,0,0,1,11.32,0l32,32A8,8,0,0,1,229.66,69.66Zm-17-5.66L192,43.31,179.31,56,200,76.69Z"></path>
          </svg>
          Create an announcement
      </button>

      <!-- All Posts Container -->
      <div class="gap-4 flex flex-col divide-y divide-brown-100">
        <!-- Individual Post Container -->
        <div class="w-full h-auto gap-8 pt-4 flex flex-col sm:flex-row">
          <!-- Buttons Container -->
          <div class="max-h-[36px] w-auto flex gap-2 flex-row">
            <button data-modal-target="edit-post-modal" data-modal-toggle="edit-post-modal" type="button" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160l90.35-90.35,16.68,16.69L68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188l90.35-90.35h0l16.68,16.69Z"></path>
              </svg>
              <span class="sr-only">Edit</span>
            </button>
            <button data-modal-target="delete-post-modal" data-modal-toggle="delete-post-modal" type="button" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
              <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z"></path>
              </svg>
              <span class="sr-only">Delete</span>
            </button>
          </div> <!-- End of Buttons Container -->
          <!-- Announcement Texts Container -->
          <div class="flex flex-col flex-wrap"> 
            <h3 class="font-semibold text-sm text-black">##Announcement Title (Looking for eligible supplier for the Computer Parts and Accessories)</h3>
            <p class="font-regular text-sm text-black">##Date Posted (Posted: August 16, 2023 or kung ano format keribels)</p>
          </div> <!-- End of Announcement Texts Container -->
        </div>
        <!-- End of Individual Post Container -->

        <!-- Individual Post Container -->
        <div class="w-full h-auto gap-8 pt-8 flex flex-col sm:flex-row">
          <!-- Buttons Container -->
          <div class="max-h-[36px] w-auto flex gap-2 flex-row">
            <button type="button" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160l90.35-90.35,16.68,16.69L68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188l90.35-90.35h0l16.68,16.69Z"></path>
              </svg>
              <span class="sr-only">Edit</span>
            </button>
            <button type="button" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
              <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z"></path>
              </svg>
              <span class="sr-only">Delete</span>
            </button>
          </div> <!-- End of Buttons Container -->
          <!-- Announcement Texts Container -->
          <div class="flex flex-col flex-wrap"> 
            <h3 class="font-semibold text-sm text-black">##Announcement Title (Looking for eligible supplier for the Computer Parts and Accessories)</h3>
            <p class="font-regular text-sm text-black">##Date Posted (Posted: August 16, 2023 or kung ano format keribels)</p>
          </div> <!-- End of Announcement Texts Container -->
        </div>
        <!-- End of Individual Post Container -->

        

      </div> <!-- End of All Posts Container -->
      
      <!-- Create Post Modal -->
      <div id="create-post-modal" tabindex="-1" aria-hidden="true" class="font-mulish fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-6 border-b rounded-t dark:border-gray-600">
              <h3 class="text-md sm:text-lg lg:text-xl font-semibold text-gray-900 dark:text-white">
                Create Announcement Post
              </h3>
              <button type="button" class="text-brown-400 bg-transparent hover:bg-brown-200 hover:text-brown-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create-post-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <div>
                  <label for="announcement-title" class="block mb-2 text-sm md:text-base lg:text-md font-medium text-gray-900 dark:text-white">Announcement Title</label>
                  <input type="text" id="announcement-title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm md:text-base lg:text-md rounded-lg focus:ring-brown-500 focus:border-brown-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-brown-500 dark:focus:border-brown-500" placeholder="Looking for eligible supplier for the Computer Parts and Accessories" required>
              </div>
              <div>
                  <label for="announcement-link" class="block mb-2 text-sm md:text-base lg:text-md font-medium text-gray-900 dark:text-white">Announcement Link</label>
                  <input type="text" id="announcement-link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm md:text-base lg:text-md rounded-lg focus:ring-brown-500 focus:border-brown-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-brown-500 dark:focus:border-brown-500" placeholder="facebook.com" required>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="create-post-modal" type="button" class="text-white bg-brown-500 hover:bg-brown-800 focus:ring-4 focus:outline-none focus:ring-brown-300 font-medium rounded-lg text-sm md:text-base lg:text-md px-5 py-2.5 text-center dark:bg-brown-600 dark:hover:bg-brown-700 dark:focus:ring-brown-800">Save changes</button>
                <button data-modal-hide="create-post-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg border border-gray-200 text-sm md:text-base lg:text-md font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Edit Post Modal -->
      <div id="edit-post-modal" tabindex="-1" aria-hidden="true" class="font-mulish fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-6 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-md sm:text-lg lg:text-xl font-semibold text-gray-900 dark:text-white">
                          Edit Announcement Post
                      </h3>
                      <button type="button" class="text-green-400 bg-transparent hover:bg-green-200 hover:text-green-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-post-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-6 space-y-6">
                    <div>
                        <label for="announcement-title" class="block mb-2 text-sm md:text-base lg:text-md font-medium text-gray-900 dark:text-white">Announcement Title</label>
                        <input type="text" id="announcement-title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm md:text-base lg:text-md rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Looking for eligible supplier for the Computer Parts and Accessories" required>
                    </div>
                    <div>
                        <label for="announcement-link" class="block mb-2 text-sm md:text-base lg:text-md font-medium text-gray-900 dark:text-white">Announcement Link</label>
                        <input type="text" id="announcement-link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm md:text-base lg:text-md rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="facebook.com" required>
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="edit-post-modal" type="button" class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm md:text-base lg:text-md px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-brown-800">Save changes</button>
                      <button data-modal-hide="edit-post-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg border border-gray-200 text-sm md:text-base lg:text-md font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                  </div>
              </div>
          </div>
      </div>

      <!-- Delete Post Modal -->
      <div id="delete-post-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-post-modal">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 pt-8 text-center">
              <svg class="mx-auto mb-4 text-red-500 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
              </svg>
              <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this announcement post called *insert announcement post title*?</h3>
                <button data-modal-hide="delete-post-modal" type="button" class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm md:text-base lg:text-md inline-flex items-center px-5 py-2.5 text-center mr-2">
                  Yes, I'm sure
                </button>
              <button data-modal-hide="delete-post-modal" type="button" class="text-gray-500 bg-white hover:bg-green-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm md:text-base lg:text-md font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
          </div>
      </div>

    </div>

  </section> <!-- End of Admin Announcements Main Content Container -->

    



  @elseif(request()->is('admin.document-request') )
  <p>document-</p>




  <!-- Admin Student Management -->
  @elseif(request()->is('admin.student-management') )
  <!-- Admin Student Management Main Content Container -->
  <section class="w-full h-full gap-4 md:gap-16 p-8 pt-12 flex flex-col font-mulish">

    <div class="w-full h-full gap-2 md:gap-3 lg:gap-4 p-4 md:p-8 flex flex-col bg-white outline outline-1 outline-brown-100 rounded-lg">
            
      <!-- Header Content -->
      <div class="flex flex-col gap-2">
        <h3 class="text-left rtl:text-right font-semibold text-lg sm:text-2xl lg:text-3xl text-black">
          Student Accounts Management
        </h3>
        <p class="mt-1 mb-2 text-sm font-normal text-gray-500 dark:text-gray-400">This section allows administrators to oversee and manage student accounts efficiently. Accessible functions include viewing, adding, and modifying basic user information. Additionally, administrators can manage confidential data, ensuring the security and integrity of user accounts. Exercise caution and adhere to privacy protocols when handling sensitive information.</p>
      </div>
      
      <!-- Table functions - all -->
      <div class="grid grid-cols-1 sm:grid-cols-2">
        <!-- Table functions - search and sort -->
        <div class="flex sm:flex-row gap-4 flex-col w-full py-4 items-center">

          <!-- Sort Dropdown -->
          <div class="flex h-full">

            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
              <path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12c15.23-26.33,38.7-45.21,66.09-54.16a72,72,0,1,1,73.66,0c27.39,8.95,50.86,27.83,66.09,54.16A8,8,0,0,1,230.93,220Z"></path>
              </svg>
              Active
              <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
              <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                <li>
                  <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">All</label>
                  </div>
                </li>
                <li>
                  <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Active</label>
                  </div>
                </li>
                <li>
                  <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Inactive</label>
                  </div>
                </li>
              </ul>
            </div>
          </div> <!-- End of Sort Dropdown -->

          <!-- Search bar -->
          <div class="flex items-center justify-between flex-column md:flex-row flex-wrap bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative w-max-64 mt-0">
              <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
              </div>
              <input type="text" id="table-search-users" class="sm:w-max-64 block ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search for students">
            </div>
          </div> <!-- End of Search bar -->

        </div> <!-- End of Table functions - search and sort -->
        <!-- Table functions - add user -->
        <div class="grid justify-items-center sm:justify-items-end gap-4 w-full pb-4 sm:py-4 ">
          <a href="#insertEnrollmentLinkhere" type="button" class="h-full text-white bg-brown-500 hover:bg-brown-700 focus:ring-4 focus:outline-none focus:ring-brown-300 text-sm font-medium rounded-lg px-3 py-1.5 gap-2 md:gap-4 text-center inline-flex items-center dark:bg-brown-600 dark:hover:bg-brown-700 dark:focus:ring-brown-800">
            <svg class="w-4 h-4" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
              <path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136ZM144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17A8,8,0,0,0,24,208H192a8,8,0,0,0,6.13-13.15C183.18,177.07,164.6,164.44,144,157.68Z"></path>
            </svg>
            Add Student Account
          </a>
        </div> <!-- End of Table functions - add user -->
      </div> <!-- End of Table functions - all -->

      <!-- Table -->
      <div class="relative overflow-x-auto outline outline-2 outline-green-50 rounded-sm">
      
        <table class="w-full text-sm text-left p-4  rtl:text-right text-gray-500 dark:text-gray-400">

          <thead class="text-xs text-white uppercase bg-green-600 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-3 py-3">
                  LAST NAME
              </th>
              <th scope="col" class="px-3 py-3">
                  FIRST NAME
              </th>
              <th scope="col" class="px-3 py-3">
                  MIDDLE NAME
              </th>
              <th scope="col" class="px-3 py-3">
                  NAME EXTENSION
              </th>
              <th scope="col" class="px-3 py-3">
                  USERNAME
              </th>
              <th scope="col" class="px-3 py-3">
                  RETURNEE
              </th>
              <th scope="col" class="px-3 py-3">
                  GRADE LEVEL
              </th>
              <th scope="col" class="px-3 py-3">
                  LRN
              </th>
              <th scope="col" class="px-3 py-3">
                  DATE OF BIRTH
              </th>
              <th scope="col" class="px-3 py-3">
                  AGE
              </th>
              <th scope="col" class="px-3 py-3">
                  INDEGENOUS GROUP
              </th>
              <th scope="col" class="px-3 py-3">
                  MOTHER TONGUE
              </th>
              <th scope="col" class="px-3 py-3">
                  RELIGION
              </th>
              <th scope="col" class="px-3 py-3">
                  SPECIAL ASSISTANCE
              </th>
              <th scope="col" class="px-3 py-3">
                  DISABILITY
              </th>
              <th scope="col" class="px-3 py-3">
                  HOUSE NUMBER, AND STREET
              </th>
              <th scope="col" class="px-3 py-3">
                  BARANGAY
              </th>
              <th scope="col" class="px-3 py-3">
                  CITY
              </th>
              <th scope="col" class="px-3 py-3">
                  FATHER'S FULL NAME
              </th>
              <th scope="col" class="px-3 py-3">
                  FATHER'S CONTACT NUMBER
              </th>
              <th scope="col" class="px-3 py-3">
                  MOTHER'S MAIDEN NAME
              </th>
              <th scope="col" class="px-3 py-3">
                  MOTHER'S CONTACT NUMBER
              </th>
              <th scope="col" class="px-3 py-3">
                  GUARDIAN'S FULL NAME
              </th>
              <th scope="col" class="px-3 py-3">
                  GUARDIAN'S CONTACT NUMBER
              </th>
              <th scope="col" class="px-3 py-3">
                  4P'S BENEFICIARY
              </th>
              <th scope="col" class="px-3 py-3">
                  4P'S HOUSEHOLD ID NO.
              </th>
              <th scope="col" class="px-3 py-3">
                  ACCESS TO TECHNOLOGY
              </th>
              <th scope="col" class="px-3 py-3">
                  PREFFERRED MODE OF LEARNING
              </th>
              <th scope="col" class="px-3 py-3">
                  STATUS
              </th>
              <th scope="col" class="px-3 py-3">
                  DATE CREATED
              </th>
              <th scope="col" class="px-3 py-3">
                  ACTION
              </th>
            </tr>
          </thead>

          <tbody>
            <tr class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
              <td class="px-3 py-3">
                Reyes
              </td>
              <td class="px-3 py-3">
                Alex
              </td>
              <td class="px-3 py-3">
                Pajarellano
              </td>
              <td class="px-3 py-3">
                None
              </td>
              <td class="px-3 py-3">
                lxxMeow
              </td>
              <td class="px-3 py-3">
                No
              </td>
              <td class="px-3 py-3">
                Kinder
              </td>
              <td class="px-3 py-3">
                158514070128
              </td>
              <td class="px-3 py-3">
                09/17/2003
              </td>
              <td class="px-3 py-3">
                20
              </td>
              <td class="px-3 py-3">
                No
              </td>
              <td class="px-3 py-3">
                Tagalog
              </td>
              <td class="px-3 py-3">
                Agnostic
              </td>
              <td class="px-3 py-3">
                No
              </td>
              <td class="px-3 py-3">
                Psychosocial
              </td>
              <td class="px-3 py-3">
                B11, L12
              </td>
              <td class="px-3 py-3">
                Loma de Gato
              </td>
              <td class="px-3 py-3">
                Marilao
              </td>
              <td class="px-3 py-3">
                Lawrence Reyes
              </td>
              <td class="px-3 py-3">
                None
              </td>
              <td class="px-3 py-3">
                Mary Jane Pajarellano
              </td>
              <td class="px-3 py-3">
                None
              </td>
              <td class="px-3 py-3">
                Angelita Pajarellano
              </td>
              <td class="px-3 py-3">
                09154456155
              </td>
              <td class="px-3 py-3">
                No
              </td>
              <td class="px-3 py-3">
                N/A
              </td>
              <td class="px-3 py-3">
                Own phone/tablet, own computer/laptop, own internet connection
              </td>
              <td class="px-3 py-3">
                Modular
              </td>
              <td class="px-3 py-3">
                Active
              </td>
              <td class="px-3 py-3">
                August 23, 2023
              </td>
              <td class="px-3 py-3 gap-2">
                <!-- Modal toggle -->
                <a href="#" data-modal-target="editStudentUserModal" data-modal-show="editStudentUserModal" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                <a href="#" data-modal-target="archiveStudentUserModal" data-modal-show="archiveStudentUserModal" type="button" class="font-medium text-gray-400 dark:text-gray-500 hover:underline">Archive</a>
              </td>
          </tbody>

        </table>

      </div> <!-- End of Table -->

      <!-- Pagination -->
      <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-black dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">345</span></span>
          <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
              <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-green-600 border border-gray-300 bg-green-50 hover:bg-green-100 hover:text-green-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
          </ul>
      </nav> <!-- End of Pagination -->

      <!-- Edit user modal -->
      <div id="editStudentUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-black dark:text-white">
                Edit student user 
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editStudentUserModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-3">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block mb-2 text-sm font-medium text-black dark:text-white">Last Name</label>
                  <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block mb-2 text-sm font-medium text-black dark:text-white">First Name</label>
                  <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-2">
                  <label for="middle-name" class="block mb-2 text-sm font-medium text-black dark:text-white">Middle Name</label>
                  <input type="text" name="middle-name" id="middle-name" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-2">
                  <label for="dropdownNameExtensionlButton" class="block mb-2 text-sm font-medium text-black dark:text-white">Name Extension</label>
                  <button id="dropdownNameExtensionlButton" data-dropdown-toggle="dropdownNameExtension" class="text-black w-full justify-between border border-gray-300 bg-gray-50 focus:ring-blue-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">*Name Extension* <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
                  </button>
                  <!-- Dropdown Name Extension menu -->
                  <div id="dropdownNameExtension" class="z-10 hidden bg-gray-50 border border-gray-300 divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-gray-700">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownNameExtension">
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">N/A</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Junior</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">I</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">II</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">III</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">IV</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">V</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">VI</a>
                        </li>
                      </ul>
                  </div>
                
                </div>
                <div class="col-span-6 sm:col-span-2">
                  <label for="username" class="block mb-2 text-sm font-medium text-black dark:text-white">Username</label>
                  <input type="text" name="username" id="username" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6">
                  <label for="returnee" class="block mb-2 text-sm font-medium text-black dark:text-white">Returnee</label>
                  <div id="returnee" class="z-10 w-full mt-2 border border-gray-300 bg-gray-50 divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="returnee">
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="radio" name="returnee" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">HINDI</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-2" type="radio" name="returnee" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-black dark:text-gray-300">OO dahil sya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="dropdownGradeLevelButton" class="block mb-2 text-sm font-medium text-black dark:text-white">Grade Level</label>
                  <button id="dropdownGradeLevelButton" data-dropdown-toggle="dropdownGradeLevel" class="text-black w-full justify-between border border-gray-300 bg-gray-50 focus:ring-blue-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">*Grade level* <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
                  </button>
                  <!-- Dropdown Grade Level menu -->
                  <div id="dropdownGradeLevel" class="z-10 hidden bg-gray-50 border border-gray-300 divide-y divide-gray-100 rounded-lg shadow w-72 dark:bg-gray-700">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownGradeLevel">
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
                <div class="col-span-6 sm:col-span-3">
                  <label for="lrn" class="block mb-2 text-sm font-medium text-black dark:text-white">LRN</label>
                  <input type="number" name="lrn" id="lrn" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="date-of-birth" class="block mb-2 text-sm font-medium text-black dark:text-white">Date of Birth</label>
                  <input type="date" name="date-of-birth" id="date-of-birth" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="age" class="block mb-2 text-sm font-medium text-black dark:text-white">Age</label>
                  <input type="number" name="age" id="age" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6">
                  <label for="indigenous-group" class="block mb-2 text-sm font-medium text-black dark:text-white">Nabibilang sa indegenous group</label>
                  <div id="indigenous-group" class="z-10 w-full mt-2 border border-gray-300 bg-gray-50 divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="returnee">
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="radio" name="indigenous-group" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Oo</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-2" type="radio" name="indigenous-group" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Hindi</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-span-6">
                  <label for="indigenous-group-name" class="block mb-2 text-sm font-medium text-black dark:text-white">Indegenous group (optional)</label>
                  <input type="text" name="indigenous-group" id="indigenous-group" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="dropdownMotherTongueButton" class="block mb-2 text-sm font-medium text-black dark:text-white">Mother Tongue</label>
                  <button id="dropdownMotherTongueButton" data-dropdown-toggle="dropdownMotherTongue" class="text-black w-full justify-between border border-gray-300 bg-gray-50 focus:ring-blue-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">*Mother tongue* <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
                  </button>
                  <!-- Dropdown Mother Tongue menu -->
                  <div id="dropdownMotherTongue" class="z-10 hidden bg-gray-50 border border-gray-300 divide-y divide-gray-100 rounded-lg shadow w-80 dark:bg-gray-700">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMotherTongue">
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Filipino</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bicolano</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cebuano</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Chinese</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">English</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ilocano</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kapampangan</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Maguindanaoan</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manobo</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nihonggo</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Philippine Sign Language</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tausug</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Waray</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ybanag</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Others</a>
                        </li>
                      </ul>
                  </div> 
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="dropdownReligionButton" class="block mb-2 text-sm font-medium text-black dark:text-white">Religion</label>
                  <button id="dropdownReligionButton" data-dropdown-toggle="dropdownReligion" class="text-black w-full justify-between border border-gray-300 bg-gray-50 focus:ring-blue-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">*Religion* <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
                  </button>
                  <!-- Dropdown Grade Level menu -->
                  <div id="dropdownReligion" class="z-10 hidden bg-gray-50 border border-gray-300 divide-y divide-gray-100 rounded-lg shadow w-72 dark:bg-gray-700">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownReligion">
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Christianity</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Aglipayan</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Angelican</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Apostolic</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Baptist</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Buddhism</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Christ Latter Day Saints</a>
                        </li>

                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Church of God in Jesus Christ</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Church of God International</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dating Daan</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">El Shaddai</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Full Gospel</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hinduism</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Iglesia ni Cristo</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Indigenous Religion</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Islam</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jehovah Witneses</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Judaism</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kingdom of Jesus Christ</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lutheran</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Methodist</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Orthodox Church</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pentecostal</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Presbyterian</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Seventh Day Adventist</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sikhism</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Taoism</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">No Religion</a>
                        </li>
                        <li>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Others</a>
                        </li>
                      </ul>
                  </div>          
                </div>

     
                <div class="col-span-6">
                  <label for="special-assistance" class="block mb-2 text-sm font-medium text-black dark:text-white">Kailangan ng special assistance?</label>
                  <div id="special-assistance" class="z-10 w-full mt-2 border border-gray-300 bg-gray-50 divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="special-assistance">
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="radio" name="indigenous-group" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Oo</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-2" type="radio" name="indigenous-group" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Hindi</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                
                
                
                </div>
                <div class="col-span-6 ">
                  <label for="disability" class="block mb-2 text-sm font-medium text-black dark:text-white">Disability</label>
                  <input type="text" name="disability" id="disability" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-2">
                  <label for="house-no-street" class="block mb-2 text-sm font-medium text-black dark:text-white">House No. and Street</label>
                  <input type="text" name="house-no-street" id="house-no-street" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-2">
                  <label for="barangay" class="block mb-2 text-sm font-medium text-black dark:text-white">Barangay</label>
                  <input type="text" name="barangay" id="barangay" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-2">
                  <label for="city" class="block mb-2 text-sm font-medium text-black dark:text-white">City</label>
                  <input type="text" name="city" id="city" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="father-name" class="block mb-2 text-sm font-medium text-black dark:text-white">Father's Full Name</label>
                  <input type="text" name="father-name" id="father-name" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="father-num" class="block mb-2 text-sm font-medium text-black dark:text-white">Father's Contact Number</label>
                  <input type="number" name="father-num" id="father-num" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="mother-name" class="block mb-2 text-sm font-medium text-black dark:text-white">Mother's Maiden Name</label>
                  <input type="text" name="mother-name" id="mother-name" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="mother-num" class="block mb-2 text-sm font-medium text-black dark:text-white">Mother's Contact Number</label>
                  <input type="number" name="mother-num" id="mother-num" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="guardian-name" class="block mb-2 text-sm font-medium text-black dark:text-white">Guardian's Full Name</label>
                  <input type="text" name="guardian-name" id="guardian-name" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="guardian-num" class="block mb-2 text-sm font-medium text-black dark:text-white">Guardian's Contact Number</label>
                  <input type="number" name="guardian-num" id="guardian-num" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="4ps" class="block mb-2 text-sm font-medium text-black dark:text-white">4P's Beneficiary?</label>
                  <input type="text" name="4ps" id="4ps" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="4ps-no" class="block mb-2 text-sm font-medium text-black dark:text-white">4P's Household ID No.</label>
                  <input type="text" name="4ps-no" id="4ps-no" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div class="col-span-6">
                  <label for="accessToTechnologyButton" class="block text-sm font-medium text-black dark:text-white">Access to Technology</p>
                  <!-- Checkbox  for Access to technology-->
                  <div id="accessToTechnologyCheckbox" class="z-10 w-full mt-2 border border-gray-300 bg-gray-50 divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="accessToTechnologyCheckbox">
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">May sariling Cellphone/Tablet ang Bata</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">May computer sa bahay</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Walang sariling gadget ang bata</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">May tv sa bahay</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">May internet connection sa bahay</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Mobile data lamang ang gamit para makaconnect sa internet</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-span-6">
                  <label for="pmol" class="block mb-2 text-sm font-medium text-black dark:text-white">Preferred Mode of Learning</label>
                  <div id="pmol" class="z-10 w-full mt-2 border border-gray-300 bg-gray-50 divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pmol">
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="radio" name="pmol" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Modular Printed</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-2" type="radio" name="pmol" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Modular Digital</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-3" type="radio" name="pmol" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Online</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-4" type="radio" name="pmol" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-4" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Educational Television</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-5" type="radio" name="pmol" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-5" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Homeschooling</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-6" type="radio" name="pmol" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-6" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Blended</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-span-6">
                  <label for="status" class="block mb-2 text-sm font-medium text-black dark:text-white">Account Status</label>
                  <div id="status" class="z-10 w-full mt-2 border border-gray-300 bg-gray-50 divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="status">
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-1" type="radio" name="status" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Active</label>
                        </div>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <input id="checkbox-item-2" type="radio" name="status" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-black dark:text-gray-300">Inactive</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
              <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
            </div>
          </form>
        </div>
      </div> <!-- End of Edit user modal -->

      <!-- Archive User Modal -->
      <div id="archiveUserModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="archiveUserModal">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 pt-8 text-center">
              <svg class="mx-auto mb-4 text-gray-500 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
              </svg>
              <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-gray-400">Are you sure you want to archive the account of *insert full name*?</h3>
              <button data-modal-hide="archiveUserModal" type="button" class="text-white bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                Yes, I'm sure
              </button>
              <button data-modal-hide="archiveUserModal" type="button" class="text-gray-500 bg-white hover:bg-green-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm  font-medium px-5 py-2.5 hover:text-black focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  
  </section> <!-- End of Admin Student Accounts Main Content Container -->




  <!-- Admin Teacher Management -->
  @elseif(request()->is('admin.teacher-management') )
  <!-- Admin Teacher  Accounts Main Content Container -->
  <section class="w-full h-full gap-4 md:gap-16 p-8 pt-12 flex flex-col font-mulish">

    <div class="w-full h-full gap-2 md:gap-3 lg:gap-4 p-4 md:p-8 flex flex-col bg-white outline outline-1 outline-brown-100 rounded-lg">
            
      <!-- Header Content -->
      <div class="flex flex-col gap-2">
        <h3 class="text-left rtl:text-right font-semibold text-lg sm:text-2xl lg:text-3xl text-black">
          Teacher Accounts Management
        </h3>
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">This section allows administrators to oversee and manage teacher accounts efficiently. Accessible functions include viewing, adding, and modifying basic user information. Additionally, administrators can manage confidential data, ensuring the security and integrity of user accounts. Exercise caution and adhere to privacy protocols when handling sensitive information.</p>
      </div>
      
      <!-- Table functions - all -->
      <div class="grid grid-cols-1 sm:grid-cols-2">
        <!-- Table functions - search and sort -->
        <div class="flex sm:flex-row gap-4 flex-col w-full py-4 items-center">

          <!-- Sort Dropdown -->
          <div class="flex h-full">

            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
              <path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12c15.23-26.33,38.7-45.21,66.09-54.16a72,72,0,1,1,73.66,0c27.39,8.95,50.86,27.83,66.09,54.16A8,8,0,0,1,230.93,220Z"></path>
              </svg>
              Active
              <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
              <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                <li>
                  <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">All</label>
                  </div>
                </li>
                <li>
                  <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Active</label>
                  </div>
                </li>
                <li>
                  <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Inactive</label>
                  </div>
                </li>
              </ul>
            </div>
          </div> <!-- End of Sort Dropdown -->

          <!-- Search bar -->
          <div class="flex items-center justify-between flex-column md:flex-row flex-wrap bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative w-max-64 mt-0">
              <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
              </div>
              <input type="text" id="table-search-users" class="sm:w-max-64 block ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search for users">
            </div>
          </div> <!-- End of Search bar -->


        </div> <!-- End of Table functions - search and sort -->
        <!-- Table functions - add user -->
        <div class="grid justify-items-center sm:justify-items-end gap-4 w-full pb-4 sm:py-4 ">
          <button data-modal-target="createUserModal" data-modal-toggle="createUserModal" type="button" class="h-full text-white bg-brown-500 hover:bg-brown-700 focus:ring-4 focus:outline-none focus:ring-brown-300 text-sm font-medium rounded-lg px-3 py-1.5 gap-2 md:gap-4 text-center inline-flex items-center dark:bg-brown-600 dark:hover:bg-brown-700 dark:focus:ring-brown-800">
            <svg class="w-4 h-4" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
              <path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136ZM144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17A8,8,0,0,0,24,208H192a8,8,0,0,0,6.13-13.15C183.18,177.07,164.6,164.44,144,157.68Z"></path>
            </svg>
            Add Teacher Account
          </button>
        </div> <!-- End of Table functions - add user -->
      </div> <!-- End of Table functions - all -->

      <!-- Table -->
      <div class="relative overflow-x-auto outline outline-2 outline-green-50 rounded-sm">
      
        <table class="w-full text-sm text-left p-4  rtl:text-right text-gray-500 dark:text-gray-400">

          <thead class="text-xs text-white uppercase bg-green-600 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">
                  FULL NAME
              </th>
              <th scope="col" class="px-6 py-3">
                  USERNAME
              </th>
              <th scope="col" class="px-6 py-3">
                  ADDRESS
              </th>
              <th scope="col" class="px-6 py-3">
                  STATUS
              </th>
              <th scope="col" class="px-6 py-3">
                  DATE CREATED
              </th>
              <th scope="col" class="px-6 py-3">
                  ACTION
              </th>
            </tr>
          </thead>

          <tbody>
            <tr class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
              <td class="px-6 py-4">
                Last Name, First Name Middle Name
              </td>
              <td class="px-6 py-4">
                lnfnmn001
              </td>
              <td class="px-6 py-4">
                9th Avenue W, Grace Park West, Caloocan, Metro Manila
              </td>
              <td class="px-6 py-4">
                Active
              </td>
              <td class="px-6 py-4">
                August 23, 2023
              </td>
              <td class="px-6 py-4">
                <!-- Modal toggle -->
                <a href="#" type="button" data-modal-target="editTeacherUserModal" data-modal-show="editTeacherUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                <a href="#" type="button" data-modal-target="archiveTeacherUserModal" data-modal-show="archiveTeacherUserModal" class="font-medium text-gray-400 dark:text-gray-500 hover:underline">Archive</a>
              </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
              <td class="px-6 py-4">
                Canlas, Arlene Marquez
              </td>
              <td class="px-6 py-4">
                sircanlas123
              </td>
              <td class="px-6 py-4">
                Magsaysay Blvd, Corner Santol St, Santa Mesa, Manila, 1008 Metro Manila
              </td>
              <td class="px-6 py-4">
                Active
              </td>
              <td class="px-6 py-4">
                August 23, 2023
              </td>
              <td class="px-6 py-4">
                <!-- Modal toggle -->
                <a href="#" type="button" data-modal-target="editTeacherUserModal" data-modal-show="editTeacherUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                <a href="#" type="button" data-modal-target="archiveTeacherUserModal" data-modal-show="archiveTeacherUserModal" class="font-medium text-gray-400 dark:text-gray-500 hover:underline">Archive</a>
              </td>
            </tr>
          </tbody>

        </table>

      </div> <!-- End of Table -->

      <!-- Pagination -->
      <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-black dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">345</span></span>
          <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
              <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-green-600 border border-gray-300 bg-green-50 hover:bg-green-100 hover:text-green-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
          </ul>
      </nav> <!-- End of Pagination -->
      
      <!-- Create teacher user modal -->
      <div id="createTeacherUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Create user
                      </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-6 space-y-6">
                      <div class="grid grid-cols-6 gap-6">
                          <div class="col-span-6 sm:col-span-3">
                              <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                              <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                              <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                              <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                              <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                              <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                              <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                              <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                              <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                          </div>
                      </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                  </div>
              </form>
          </div>
        </div>
      </div> <!-- End of Create user modal -->

      <!-- Edit teacher user modal -->
      <div id="editTeacherUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Edit teacher user
                      </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editTeacherUserModal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-6 space-y-6">
                      <div class="grid grid-cols-6 gap-6">
                          <div class="col-span-6 sm:col-span-3">
                              <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                              <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                              <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                              <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                              <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                              <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                              <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                              <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                              <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                          </div>
                      </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save all</button>
                  </div>
              </form>
          </div>
        </div>
      </div> <!-- End of Edit teacher user modal -->

      <!-- Archive User Modal -->
      <div id="archiveTeacherUserModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="archiveTeacherUserModal">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 pt-8 text-center">
              <svg class="mx-auto mb-4 text-gray-500 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
              </svg>
              <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-gray-400">Are you sure you want to ARCHIVE the TEACHER ACCOUNT of *insert full name*?</h3>
              <button data-modal-hide="archiveUserModal" type="button" class="text-white bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                Yes, I'm sure
              </button>
              <button data-modal-hide="archiveTeacherUserModal" type="button" class="text-gray-500 bg-white hover:bg-green-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm  font-medium px-5 py-2.5 hover:text-black focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  
  </section> <!-- End of Admin Teacher Accounts Main Content Container -->
  



  <!-- Admin Enrollment Management -->
  @elseif(request()->is('admin.enrollment-management') )
  <!-- Admin Enrollment Management Main Content Container -->
  <section class="w-full h-full gap-4 md:gap-16 p-8 pt-12 flex flex-col font-mulish">
    <div class="w-full divide-y divide-gray-200 h-full gap-2 md:gap-3 lg:gap-4 p-4 md:p-8 flex flex-col bg-white outline outline-1 outline-brown-100 rounded-lg">  
    
      <!-- Header Content -->
      <div class="flex flex-col gap-2">
        <h3 class="text-left rtl:text-right font-semibold text-lg sm:text-2xl lg:text-3xl text-black">
          Enrollment Management
        </h3>
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Effortlessly oversee and control the enrollment process. This section empowers administrators to open or close enrollment based on the school year, ensuring timely and organized admissions. Additionally, manage the enrollees' requirements checklist efficiently. Perform CRUD operations for section management, enabling the configuration of section details such as number, section name, and available slots. The Student Record Management feature facilitates the removal of student records for those who choose not to continue their enrollment.</p>
      </div> <!-- End of Header Content -->
      
      <!-- Enrollment SY Management -->
      <div class="w-full flex flex-col pt-4">
        @if (!is_null($schoolYear) && $enrollmentStatus == 'Closed')
            <h3 class="text-md font-bold text-black">Managing school year: {{ $schoolYear }}</h3>
            <h4 class="text-base font-semibold text-emerald-700">Enrollment status: {{ $enrollmentStatus }}</h4>
        @elseif (!is_null($schoolYear) && $enrollmentStatus == 'Open')
            <h3 class="text-md font-bold text-black">Managing school year: {{ $schoolYear }}</h3>
            <h4 class="text-base font-semibold text-emerald-700">Enrollment status: {{ $enrollmentStatus }}</h4>
            <h4 class="text-base font-regular text-gray-500">Enrollment phase: {{ $enrollmentPhase }}</h4>
        @else
            <h3 class="text-md font-semibold text-red-500">No school year selected to manage.</h3>
            <h4 class="text-base font-regular text-gray-500">Choose from the dropdown to manage an existing one or add a new school year using the button.</h4>
        @endif
        
        <!-- Main functions for SY Management -->
        <div class="flex flex-col sm:flex-row w-full h-auto gap-4 pt-1 sm:justify-between">
            @if (is_null($schoolYear))
            @else
              @if ($enrollmentStatus == 'Open')
                @if ($enrollmentPhase == 'Official')
                <a href="#" data-modal-target="closeOfficialEnrollmentModal" data-modal-show="closeOfficialEnrollmentModal" id="closeOfficialEnrollmentButton" class="text-red-500 hover:text-red-800 bg-red-100 hover:bg-red-200 focus:ring-2 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm px-5 my-2 py-2.5 text-left inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                  Close enrollment
                </a>
                @else
                <a href="#" data-modal-target="closePreEnrollmentModal" data-modal-show="closePreEnrollmentModal" id="closePreEnrollmentButton" class="text-red-500 hover:text-red-800 bg-red-100 hover:bg-red-200 focus:ring-2 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm px-5 my-2 py-2.5 text-left inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                  Close enrollment
                </a>    
                @endif          
              @else
              <a href="#" data-modal-target="closeOfficialEnrollmentModal" data-modal-show="closeOfficialEnrollmentModal" id="openEnrollmentButton" class="text-white bg-green-500 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 my-2 py-2.5 text-left inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
                Open enrollment
              </a>
              @endif
            @endif

            <!-- Close Pre-enrollment Modal -->
            <div id="closePreEnrollmentModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="closePreEnrollmentModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="p-6 pt-8 text-center">
                    <svg class="mx-auto mb-4 text-gray-500 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
                    </svg>
                    <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-gray-400">Are you sure you want to close the pre-enrollment phase of SY {{ $schoolYear }} and start its official enrollment?</h3>
                      <button data-modal-hide="closePreEnrollmentModal" type="button" class="text-white bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                      </button>
                      <button data-modal-hide="closePreEnrollmentModal" type="button" class="text-gray-500 bg-white hover:bg-green-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm  font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                  </div>
                </div>
              </div> 
            </div> <!-- End of Close Pre-enrollment Modal -->

            <!-- Close Official Enrollment Modal -->
            <div id="closeOfficialEnrollmentModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="closeOfficialEnrollmentModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="p-6 pt-8 text-center">
                    <svg class="mx-auto mb-4 text-gray-500 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
                    </svg>
                    <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-gray-400">Are you sure you want to close the official enrollment phase of SY {{ $schoolYear }}?</h3>
                      <button data-modal-hide="closeOfficialEnrollmentModal" type="button" class="text-white bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                      </button>
                      <button data-modal-hide="closeOfficialEnrollmentModal" type="button" class="text-gray-500 bg-white hover:bg-green-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm  font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                  </div>
                </div>
              </div> 
            </div> <!-- End of Close Official Enrollment Modal -->
          
          <!-- SY Functions Container - Select SY and Add SY -->
          <div class="flex flex-col sm:flex-row gap-0 sm:gap-4 w-auto">
            <!-- Dropdown SY Button for Select a SY to Manage -->
            <button id="dropdownSYHoverButton-ocl" data-dropdown-toggle="dropdownSYHover-ocl" data-dropdown-trigger="click" class="text-white bg-brown-500 hover:bg-brown-600 focus:ring-2 focus:outline-none focus:ring-brown-200 font-medium rounded-lg text-sm px-5 my-2 py-2.5 text-left inline-flex items-center dark:bg-brown-600 dark:hover:bg-brown-700 dark:focus:ring-brown-800" type="button">Choose a school year to manage<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>

            <!-- Dropdown menu for Select a SY to Manage -->
            <div id="dropdownSYHover-ocl" class="z-10 w-52 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
              <ul class="p-2 rounded-xl text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2020 - 2021</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2021 - 2022</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2022 - 2023</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">2023 - 2024</a>
                </li>
            </div> <!-- End of Dropdown menu for Open and Close Enrollment -->

            <!-- Create SY Button -->
            <button data-modal-target="createSYModal" data-modal-toggle="createSYModal" type="button" class="my-2 text-black bg-green-50 hover:bg-green-100 focus:ring-2 focus:outline-none focus:ring-green-300 text-sm font-medium rounded-lg px-5 py-2.5 gap-2 md:gap-4 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
              <svg class="w-4 h-4" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136ZM144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17A8,8,0,0,0,24,208H192a8,8,0,0,0,6.13-13.15C183.18,177.07,164.6,164.44,144,157.68Z"></path>
              </svg>
              Add a School Year
            </button> <!-- End of Add School Year Button -->

            <!-- Create SY modal -->
            <div id="createSYModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Add a school year
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="createSYModal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-6 space-y-6">
                    <div class="flex flex-col gap-4">

                      <div class="flex flex-col">
                        <label for="startYearOfSY" class="block mb-2 text-sm font-medium text-black dark:text-white">Start year of school year</label>
                        <input type="number" name="startYearOfSY" id="startYearOfSY" min="2022" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="20XX" required="">
                      </div>
                      <div class="flex flex-col">
                        <label for="requiredDaysOfSY" class="block mb-2 text-sm font-medium text-black dark:text-white">Required days of SY as per DepEd order</label>
                        <input type="number" name="requiredDaysOfSY" id="requiredDaysOfSY" min="200" max="300" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="200" required="">
                      </div>

                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save all</button>
                  </div>
                </form>
              </div>
            </div> <!-- End of Create SY modal -->
          </div>

        </div> 
        
      </div>

      <!-- Sections to Manage for the Current SY -->
      <div class="w-full flex flex-col">

        <!-- Sections Table functions - all -->
        <div class="grid grid-cols-1 sm:grid-cols-2">

          <!-- Table functions - search and sort -->
          <div class="flex sm:flex-row gap-4 flex-col w-full py-4 items-center">

            <!-- Sort Dropdown for Grade Level -->
            <div class="flex h-full">

              <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:ring-2 focus:outline-none hover:bg-gray-100 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12c15.23-26.33,38.7-45.21,66.09-54.16a72,72,0,1,1,73.66,0c27.39,8.95,50.86,27.83,66.09,54.16A8,8,0,0,1,230.93,220Z"></path>
                </svg>
                All
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>

              <!-- Dropdown menu -->
              <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-black rounded dark:text-gray-300">All</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-black rounded dark:text-gray-300">Kinder</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-black rounded dark:text-gray-300">Grade 1</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input checked="" id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-black rounded dark:text-gray-300">Grade 2</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-black rounded dark:text-gray-300">Grade 3</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input checked="" id="filter-radio-example-6" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-6" class="w-full ms-2 text-sm font-medium text-black rounded dark:text-gray-300">Grade 4</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="filter-radio-example-7" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-7" class="w-full ms-2 text-sm font-medium text-black rounded dark:text-gray-300">Grade 5</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="filter-radio-example-8" type="radio" value="" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-8" class="w-full ms-2 text-sm font-medium text-black rounded dark:text-gray-300">Grade 6</label>
                    </div>
                  </li>
                </ul>
              </div>
            </div> <!-- End of Sort Dropdown for Grade Level -->

            <!-- Search bar -->
            <div class="flex items-center justify-between flex-column md:flex-row flex-wrap bg-white dark:bg-gray-900">
              <label for="table-search" class="sr-only">Search</label>
              <div class="relative w-max-64 mt-0">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
                </div>
                <input type="text" id="table-search-users" class="sm:w-max-64 block ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search for a section">
              </div>
            </div> <!-- End of Search bar -->

          </div> <!-- End of Table functions - search and sort -->

          <!-- Table functions - create section -->
          <div class="grid justify-items-center sm:justify-items-end gap-4 w-full pb-4 sm:py-4 ">
            <button data-modal-target="createSectionModal" data-modal-toggle="createSectionModal" type="button" class="h-full text-black bg-green-50 hover:bg-green-200 focus:ring-2 focus:outline-none focus:ring-green-300 text-sm font-medium rounded-lg px-3 py-1.5 gap-2 md:gap-4 text-center inline-flex items-center dark:bg-brown-600 dark:hover:bg-brown-700 dark:focus:ring-brown-800">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"  viewBox="0 0 256 256">
                <path d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z"></path>
              </svg>
              Create a section
            </button>
          </div> <!-- End of Table functions - add user -->

        </div> <!-- End of Sections Table functions - all -->

        <!-- Sections Table -->
        <div class="relative overflow-x-auto outline outline-2 outline-green-50 rounded-sm">
        
          <table class="w-full text-sm text-left p-4  rtl:text-right text-gray-500 dark:text-gray-400">

            <thead class="text-xs text-white uppercase bg-green-600 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">
                    NUMBER
                </th>
                <th scope="col" class="px-6 py-3">
                    SECTION NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    GRADE LEVEL
                </th>
                <th scope="col" class="px-6 py-3">
                    SLOTS
                </th>
                <th scope="col" class="px-6 py-3">
                    ACTION
                </th>
              </tr>
            </thead>

            <tbody>
              <tr class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                  1
                </td>
                <td class="px-6 py-4">
                  Halimuyak
                </td>
                <td class="px-6 py-4">
                  Kinder
                </td>
                <td class="px-6 py-4">
                  12/40
                </td>
                <td class="px-6 py-4 gap-2">
                  <!-- Modal toggle -->
                  <a href="#" data-modal-target="editSectionModal" data-modal-show="editSectionModal" type="button" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  <a href="#" data-modal-target="archiveSectionModal" data-modal-show="archiveSectionModal" type="button" class="px-2 font-medium text-gray-400 dark:text-gray-500 hover:underline">Archive</a>
                  <a href="#" data-modal-target="deleteSectionModal" data-modal-show="deleteSectionModal" type="button" class="px-2 font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
              </tr>
              <tr class="bg-white dark:bg-gray-800 hover:bg-green-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                  2
                </td>
                <td class="px-6 py-4">
                  Mabantut
                </td>
                <td class="px-6 py-4">
                  Kinder
                </td>
                <td class="px-6 py-4">
                  40/40
                </td>
                <td class="px-6 py-4">
                  <!-- Modal toggle -->
                  <a href="#" data-modal-target="editSectionModal" data-modal-show="editSectionModal" type="button" class="px-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  <a href="#" data-modal-target="archiveSectionModal" data-modal-show="archiveSectionModal" type="button" class="px-2 font-medium text-gray-400 dark:text-gray-500 hover:underline">Archive</a>
                  <a href="#" data-modal-target="deleteSectionModal" data-modal-show="deleteSectionModal" type="button" class="px-2 font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
              </tr>
            </tbody>

          </table>

        </div> <!-- End of Sections Table -->

        <!-- Pagination -->
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
          <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-black dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">345</span></span>
            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
              </li>
              <li>
                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-green-600 border border-gray-300 bg-green-50 hover:bg-green-100 hover:text-green-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
              </li>
            </ul>
        </nav> <!-- End of Pagination -->

        <!-- Create section modal -->
        <div id="createSectionModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Create a new section
                        </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="createSectionModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                      <div class="grid grid-cols-1 gap-4">
                        <div class="flex flex-col">
                          <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section Name</label>
                          <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Sampaguita" required="">
                        </div>
                        <div class="flex flex-col">
                          <label for="sectionSlots" class="block mb-2 text-sm font-medium text-black dark:text-white">Students slots of the section (Choose from 15 - 65 as per DepEd order)</label>
                          <input type="number" name="sectionSlots" id="sectionSlots" min="15" max="65" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="15" required="">
                        </div>
                        <div class="flex flex-col">
                          <label for="gradeLevelDropdown" class="block mb-2 text-sm font-medium text-black dark:text-white">Grade level of the section</label>
                          <div class="flex flex-col sm:flex-row w-full h-auto gap-0 sm:gap-4">
                            <!-- Dropdown Button for Grade Level for Edit Section Modal -->
                            <button id="gradeLevelDropdownButton" data-dropdown-toggle="gradeLevelDropdown" data-dropdown-trigger="click" class="justify-between pr-4 text-black w-full border border-gray-300 bg-gray-50  focus:ring-green-600 focus:border-green-600 rounded-lg text-sm p-2.5 text-left inline-flex items-center dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"" type="button">Grade level<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                              </svg>
                            </button> <!-- End of Dropdown Button for Grade Level for Edit Section Modal -->

                            <!-- Dropdown menu for Grade Level for Edit Section Modal -->
                            <div id="gradeLevelDropdown" class="relative z-50 w-52 hidden bg-gray-50 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                              <ul class="p-2 rounded-xl text-sm text-gray-700 dark:text-gray-200" aria-labelledby="gradeLevelDropdown">
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Kinder</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 1</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 2</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 3</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 4</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 5</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 6</a>
                                </li>
                            </div> <!-- End of Dropdown menu for Grade Level for Edit Section Modal -->

                          </div>  
                        </div>    
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                    </div>
                </form>
            </div>
          </div>
        </div> <!-- End of Edit section modal -->

        <!-- Edit section modal -->
        <div id="editSectionModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit section
                        </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editSectionModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                      <div class="grid grid-cols-1 gap-4">
                        <div class="flex flex-col">
                          <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section Name</label>
                          <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Sampaguita" required="">
                        </div>
                        <div class="flex flex-col">
                          <label for="sectionSlots" class="block mb-2 text-sm font-medium text-black dark:text-white">Students slots of the section (Choose from 15 - 65 as per DepEd order)</label>
                          <input type="number" name="sectionSlots" id="sectionSlots" min="15" max="65" class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="15" required="">
                        </div>
                        <div class="flex flex-col">
                          <label for="gradeLevelDropdown" class="block mb-2 text-sm font-medium text-black dark:text-white">Grade level of the section</label>
                          <div class="flex flex-col sm:flex-row w-full h-auto gap-0 sm:gap-4">
                            <!-- Dropdown Button for Grade Level for Edit Section Modal -->
                            <button id="gradeLevelDropdownButton" data-dropdown-toggle="gradeLevelDropdown" data-dropdown-trigger="click" class="justify-between pr-4 text-black w-full border border-gray-300 bg-gray-50  focus:ring-green-600 focus:border-green-600 rounded-lg text-sm p-2.5 text-left inline-flex items-center dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"" type="button">Grade level<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                              </svg>
                            </button> <!-- End of Dropdown Button for Grade Level for Edit Section Modal -->

                            <!-- Dropdown menu for Grade Level for Edit Section Modal -->
                            <div id="gradeLevelDropdown" class="relative z-50 w-52 hidden bg-gray-50 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                              <ul class="p-2 rounded-xl text-sm text-gray-700 dark:text-gray-200" aria-labelledby="gradeLevelDropdown">
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Kinder</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 1</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 2</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 3</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 4</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 5</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">Grade 6</a>
                                </li>
                            </div> <!-- End of Dropdown menu for Grade Level for Edit Section Modal -->

                          </div>  
                        </div>    
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                    </div>
                </form>
            </div>
          </div>
        </div> <!-- End of Edit section modal -->

        <!-- Archive section Modal -->
        <div id="archiveSectionModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="archiveSectionModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
              <div class="p-6 pt-8 text-center">
                <svg class="mx-auto mb-4 text-gray-500 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
                </svg>
                <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-gray-400">Are you sure you want to archive the section called *insert section name*?</h3>
                  <button data-modal-hide="archiveSectionModal" type="button" class="text-white bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                  </button>
                  <button data-modal-hide="archiveSectionModal" type="button" class="text-gray-500 bg-white hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm  font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Delete section Modal -->
        <div id="deleteSectionModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteSectionModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
              <div class="p-6 pt-8 text-center">
                <svg class="mx-auto mb-4 text-red-500 w-12 h-12 dark:text-red-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
                </svg>
                <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-gray-400">Are you sure you want to PERMANENTLY DELETE the section *insert section name*?</h3>
                  <button data-modal-hide="deleteSectionModal" type="button" class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                  </button>
                  <button data-modal-hide="deleteSectionModal" type="button" class="text-gray-500 bg-white hover:bg-green-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm  font-medium px-5 py-2.5 hover:text-black focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
              </div>
            </div>
          </div>
        </div>
        
      </div>


    </div>
  </section> <!-- End of Admin Enrollment Management Main Content Container -->





  @elseif(request()->is('admin.school-information') )
  <p>school-information</p>





  @endif
</div>