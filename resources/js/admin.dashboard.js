var schoolYearList;
var historicalGender;
var currentModeOfLearning
var currentLearningInfo
////ELEMENTS;
const modeOfLearningDropDown = document.getElementById('mode-of-learning-dropdown');
const motherTongueDropDown = document.getElementById('mother-tongue-dropdown');

function setDropDowns() {
  $(modeOfLearningDropDown).empty();
  $(motherTongueDropDown).empty();
/////////////DELETE BEFORE RENDERING
  schoolYearList.forEach(element => {
    let x = `<li>
                  <a href="## " id="school-year" class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">${element.school_year}</a>
                </li>`;
    $(modeOfLearningDropDown).append(x);
    $(motherTongueDropDown).append(x);

    // Add event listener for each appended element in modeOfLearningDropDown
    $(modeOfLearningDropDown).find('a#school-year').last().click(function() {
      document.getElementById('dropdownSYHoverButton-pmol').innerText = "School year: " + element.school_year
      getModeOfLearningStatistics(element.id).then(() => {
        renderModeOfLearning();
      });
    });

    // Add event listener for each appended element in motherTongueDropDown
    $(motherTongueDropDown).find('a#school-year').last().click(function() {
      document.getElementById('dropdownSYHoverButton-emt').innerText = "School year: " + element.school_year
      getLearningInfoStatistics(element.id).then(() => {
      renderMotherTongue();
      });
    });
  });
}

function getModeOfLearningStatistics(schoolYearId) {
  const url = localStorage.getItem('appUrl') + '/api/modeOfLearningStatistics/' + schoolYearId;
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
          currentModeOfLearning = data;
          resolve();
      });
  });
}

function getLearningInfoStatistics(schoolYearId) {
  const url = localStorage.getItem('appUrl') + '/api/learningInfoStatistics/' + schoolYearId;
  return new Promise((resolve, reject) => {
      $.getJSON(url, function(data) {
          currentLearningInfo = data;
          resolve();
      });
  });
}

function getSchoolYear() {
  const url = localStorage.getItem('appUrl') + '/api/schoolYears';
  const url1 = localStorage.getItem('appUrl') + '/api/schoolYearsWGender';
  return new Promise((resolve, reject) => {
    $.getJSON(url, function(data) {
        schoolYearList = data;
        setCurrentSchoolYear();
        resolve();
    });
    $.getJSON(url1, function(data) {
        historicalGender = data;
        renderHistoricalEnrollment();
        renderHistoricalCompletion();
    });
  });
}

function setCurrentSchoolYear(){
  let currentSchoolYear = schoolYearList.find(current => current.active == 1);

  if(currentSchoolYear){
    const schoolYear = document.getElementById('current-school-year-name');
    const enrollees = document.getElementById('current-school-year-enrollees');
    const male = document.getElementById('current-school-year-male');
    const female = document.getElementById('current-school-year-female');
    const disabled = document.getElementById('current-school-year-disabled');
    const transferredIn = document.getElementById('current-school-year-transferred-in');
    const transferredOut = document.getElementById('current-school-year-transferred-out');
    const dropout = document.getElementById('current-school-year-dropout');
    const url = localStorage.getItem('appUrl') + '/api/currentYearStats/' + currentSchoolYear.id;
    $.getJSON(url, function(data) {
      enrollees.innerHTML = data[0].enrollees;
      male.innerHTML = data[0].male;
      female.innerHTML = data[0].female;
      disabled.innerHTML = data[0].special_assistance;
      transferredIn.innerHTML  = data[0].transferred_in;
      transferredOut.innerHTML = data[0].transferred_out;
      dropout.innerHTML = data[0].dropped;
      // disabled = 
    });
    
    schoolYear.innerHTML = "Academic Year " + currentSchoolYear.school_year + " Data";
  }
}

function renderHistoricalEnrollment(){
  const maleData = [];
  const femaleData = [];
  var total =0;

  for (const entry of historicalGender.reverse()) {
    const maleObject = { x: entry.school_year, y: entry.male_enrolled };
    const femaleObject = { x: entry.school_year, y: entry.female_enrolled };
    total = total + (entry.male_enrolled + entry.female_enrolled);
    maleData.push(maleObject);
    femaleData.push(femaleObject);
  }
  document.getElementById('historical-enrollment-information').innerHTML = (total/ historicalGender.length) + "%";
  const options = { 
          //BACKEND
          //Populate the series data with the data from the db  
          colors: ["#798a79", "#a98f65"],
          series: [
            {
              name: "Male",
              color: "#93733e",
              data: maleData,
            },
            {
              name: "Female",
              color: "#586d58",
              data: femaleData,
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
}

function renderHistoricalCompletion(){
  const completion = [];
  var total =0;

  for (const entry of historicalGender) {
    const completionData = { x: entry.school_year, y: entry.completion };
    total = total + entry.completion;
    completion.push(completionData);
  }
  document.getElementById('historical-completion-information').innerHTML = (total/ historicalGender.length) + "%";
    const options = { 
          //BACKEND
          //Populate the series data with the data from the db  
          colors: ["#798a79", "#a98f65"],
          series: [
            {
              name: "Completion Rate",
              color: "#798a79",
              data: completion,
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
              return value.toFixed(2)  + "%";
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
                return value.toFixed(2) + "%";
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
}



function renderModeOfLearning(){
    const chartContainer = document.getElementById("pmol-pie-chart");
    $(chartContainer).empty();
    const getChartOptions = () => {
      // Combine series and labels into an array of objects

      const combined = [];
        for (const [label, value] of Object.entries(currentModeOfLearning)) {
          combined.push({ label, value });
        }
      
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

    if (chartContainer && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(chartContainer, getChartOptions());
      chart.render();
    }
}

function renderMotherTongue(){
    const chartContainer1 = document.getElementById("emt-pie-chart");
    $(chartContainer1).empty();
    const getChartOptions = () => {
      // Combine series and labels into an array of objects
      var combined = [];

      for (const item of currentLearningInfo) {
        const newAttribute = item.attribute.replace(/_/g, " ").replace(/\b\w/g, function(l) { return l.toUpperCase() });
        combined.push({ label: newAttribute, value: item.true_count });
      }

      // Filter out items with a value of zero
      combined = combined.filter(item => item.value !== 0);

      // Sort the array by value in descending order
      combined.sort((a, b) => b.value - a.value);

      // Split the array back into separate series and labels arrays
      let series = combined.map(item => item.value);
      let labels = combined.map(item => `${item.label}: ${item.value}`);

      return {
        series: series,
        colors: ["#506350", "#303c30", "#cdbfa6", "#a98f65", "#bb9a5a", "#715d36", "#e8d7b7"],
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

    if (chartContainer1 && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(chartContainer1, getChartOptions());
      chart.render();
    }
}

$(document).ready(function() {
  getSchoolYear().then(() => {
    setDropDowns();
  });
});
