var schoolYearList;
const schoolYearDropDown = document.getElementById('school-year-dropdown-picker');




function getSchoolYear() {
    const url = '/api/schoolYears';
    return new Promise((resolve, reject) => {
        $.getJSON(url, function(data) {
            schoolYearList = data;
            resolve();
        });
    });
}

function updateSchoolYearDropDown() {

    $.each(schoolYearList, function(index, entry) {
        let x = `<li>
            <a class="block px-4 py-2 hover:bg-brown-50 dark:hover:bg-gray-600 dark:hover:text-white">${entry['school_year']}</a>
        </li>`;

        const parser = new DOMParser();
        const doc = parser.parseFromString(x, "text/html");
        const desiredHTML = doc.body.innerHTML;

        const range = document.createRange();
        const fragment = range.createContextualFragment(desiredHTML); // Convert string to Node fragment
        schoolYearDropDown.append(fragment);
    });
}

schoolYearDropDown.addEventListener('click', function(event) {
    if (event.target.tagName === 'A') {
        // Handle click event on the `<a>` element
        const valueOfYear = event.target.textContent;
        console.log('Clicked on school year:', valueOfYear);

        const selectedObject = schoolYearList.find(entry => entry['school_year'] === valueOfYear);
        document.getElementById('sample-clicker').textContent = selectedObject['school_year'];
        
        console.log(selectedObject);
    }    
});

$(document).ready(function() {
    getSchoolYear().then(updateSchoolYearDropDown);
});