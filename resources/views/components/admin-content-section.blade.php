@php
  $currentSchoolYearStart = '2023';
  $currentSchoolYearEnd = '2024';
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
    <h1 class="text-center w-full px-4 pt-5 pb-3.5 font-mulish font-semibold text-lg sm:text-2xl lg:text-3xl text-white">ACADEMIC YEAR {{ $currentSchoolYearStart }} - {{ $currentSchoolYearEnd }} DATA</h1>
    
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
    <div class="w-full h-full gap-4 md:gap-8 lg:gap-12 p-4 md:p-8 flex flex-col bg-white outline outline-1 outline-brown-100 rounded-lg">
      <!-- Header Content -->
      <div class="w-full h-auto flex flex-col md:flex-row gap-4 justify-left  md:justify-between md:items-center">
        <h1 class="font-semibold text-lg sm:text-2xl lg:text-3xl text-black">ANNOUNCEMENTS EDITOR</h3>
        <button data-modal-target="create-post-modal" data-modal-toggle="create-post-modal" type="button" class="text-white bg-brown-500 hover:bg-brown-700 focus:ring-4 focus:outline-none focus:ring-brown-300 font-medium rounded-lg text-md lg:text-lg p-4 gap-2 md:gap-4 text-center inline-flex items-center dark:bg-brown-600 dark:hover:bg-brown-700 dark:focus:ring-brown-800">
          <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
            <path d="M224,120v88a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h88a8,8,0,0,1,0,16H48V208H208V120a8,8,0,0,1,16,0Zm5.66-50.34-96,96A8,8,0,0,1,128,168H96a8,8,0,0,1-8-8V128a8,8,0,0,1,2.34-5.66l96-96a8,8,0,0,1,11.32,0l32,32A8,8,0,0,1,229.66,69.66Zm-17-5.66L192,43.31,179.31,56,200,76.69Z"></path>
          </svg>
          Create an announcement
        </button>
      </div> <!-- End of Header Content -->
      

      <!-- All Posts Container -->
      <div class="gap-4 flex flex-col divide-y divide-brown-100">
        <!-- Individual Post Container -->
        <div class="w-full h-auto gap-8 pt-4 flex flex-col sm:flex-row">
          <!-- Buttons Container -->
          <div class="max-h-[52px] w-auto flex gap-4 flex-row">
            <button data-modal-target="edit-post-modal" data-modal-toggle="edit-post-modal" type="button" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-4 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160l90.35-90.35,16.68,16.69L68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188l90.35-90.35h0l16.68,16.69Z"></path>
              </svg>
              <span class="sr-only">Edit</span>
            </button>
            <button data-modal-target="delete-post-modal" data-modal-toggle="delete-post-modal" type="button" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-4 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
              <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z"></path>
              </svg>
              <span class="sr-only">Delete</span>
            </button>
          </div> <!-- End of Buttons Container -->
          <!-- Announcement Texts Container -->
          <div class="flex flex-col flex-wrap"> 
            <h3 class="font-semibold text-md sm:text-lg lg:text-xl text-black">##Announcement Title (Looking for eligible supplier for the Computer Parts and Accessories)</h3>
            <p class="font-regular text-sm sm:text-md lg:text-lg text-black">##Date Posted (Posted: August 16, 2023 or kung ano format keribels)</p>
          </div> <!-- End of Announcement Texts Container -->
        </div>
        <!-- End of Individual Post Container -->

        <!-- Individual Post Container -->
        <div class="w-full h-auto gap-8 pt-8 flex flex-col sm:flex-row">
          <!-- Buttons Container -->
          <div class="max-h-[52px] w-auto flex gap-4 flex-row">
            <button type="button" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-4 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160l90.35-90.35,16.68,16.69L68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188l90.35-90.35h0l16.68,16.69Z"></path>
              </svg>
              <span class="sr-only">Edit</span>
            </button>
            <button type="button" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-4 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
              <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z"></path>
              </svg>
              <span class="sr-only">Delete</span>
            </button>
          </div> <!-- End of Buttons Container -->
          <!-- Announcement Texts Container -->
          <div class="flex flex-col flex-wrap"> 
            <h3 class="font-semibold text-md sm:text-lg lg:text-xl text-black">##Announcement Title (Looking for eligible supplier for the Computer Parts and Accessories)</h3>
            <p class="font-regular text-sm sm:text-md lg:text-lg text-black">##Date Posted (Posted: August 16, 2023 or kung ano format keribels)</p>
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
            <button type="button" class="absolute top-3 right-2.5 text-red-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm md:text-base lg:text-md w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-post-modal">
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

    </div>

  </section> <!-- End of Admin Announcements Main Content Container -->

    



  @elseif(request()->is('admin.user-accounts') )
  <p>user-accounts</p>





  @elseif(request()->is('admin.document-request') )
  <p>document-</p>





  @elseif(request()->is('admin.student-management') )
  <p>student-management</p>





  @elseif(request()->is('admin.teacher-management') )
  <p>teacher-management</p>





  @elseif(request()->is('admin.enrollment-management') )
  <p>enrollment-management</p>





  @elseif(request()->is('admin.school-information') )
  <p>school-information</p>





  @endif
</div>