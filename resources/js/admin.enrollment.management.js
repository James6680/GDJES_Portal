var schoolYearList;

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
    const schoolYearDropDown = document.getElementById('school-year-dropdown-picker');

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

$(document).ready(function() {
    getSchoolYear().then(updateSchoolYearDropDown);
});