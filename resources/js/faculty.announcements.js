window.onload = function() {
    getTableData();
  };
function getTableData(){
    const url = localStorage.getItem('appUrl') + '/api/GetAnnouncements';
    const announcementTable = document.getElementById('announcement-list');
    // Populate dropdown with list of regions
    $.getJSON(url, function(data) {
        // Iterate over the JSON data and create a new row in the table for each entry.
        $.each(data, function(index, entry) {
        const createdAt = entry['created_at'];
        const formattedDate = new Date(createdAt);
        const formattedDateString = formattedDate.toLocaleDateString('en-US', {
          month: 'long',
          day: 'numeric',
          year: 'numeric',
          hour: 'numeric',
          minute: 'numeric',
        });
        const x = `<li class="py-5 border-b-2 border-white hover:border-b-2 hover:border-brown-200 hover:text-brown-200">
        <a href="${entry['announcement_url']}" class="flex flex-col justify-between align-middle">
        <span class="font-mulish font-semibold text-base sm:text-lg">${entry['announcement_title']}</span>
        <span class="font-mulish font-normal text-base sm:text-lg">${formattedDateString}</span>
        </a>`;
        const parser = new DOMParser();
        const doc = parser.parseFromString(x, "text/html");
        const desiredHTML = doc.body.innerHTML;
        
        const range = document.createRange();
        const fragment = range.createContextualFragment(desiredHTML); // Convert string to Node fragment
        
        announcementTable.appendChild(fragment);
        });
    });
}