$(document).ready(function() {
    getTableData();

    $('#Create').click(function(e) {
        console.log('create');
        // e.preventDefault();
        // submitForm(this);
    });

    $('#Edit').click(function(e) {
        console.log('edit');
        // e.preventDefault();
        // submitForm(this);
    });
});


function getTableData(){
    const url = '/api/GetAnnouncements';
    const table = $('#myTable');
    table.find("tr").remove();
  // Populate dropdown with list of regions
    $.getJSON(url, function(data) {
        console.log(data);
        // Iterate over the JSON data and create a new row in the table for each entry.
        $.each(data, function(index, entry) {
// Existing container with id "announcement-table"
const existingContainer = document.getElementById('announcement-table');

// Creating the main container div
const mainContainer = document.createElement('div');
mainContainer.className = 'w-full h-auto gap-8 pt-4 flex flex-col sm:flex-row';

// Creating the Buttons Container div
const buttonsContainer = document.createElement('div');
buttonsContainer.className = 'max-h-[36px] w-auto flex gap-2 flex-row';

// Button 1: Edit Post
const editPostButton = createButton('edit-post-modal', 'edit-post-modal', 'Edit', 'green');
buttonsContainer.appendChild(editPostButton);

// Button 2: Delete Post
const deletePostButton = createButton('delete-post-modal', 'delete-post-modal', 'Delete', 'red');
buttonsContainer.appendChild(deletePostButton);

// Adding Buttons Container to the main container
mainContainer.appendChild(buttonsContainer);

// Creating Announcement Texts Container div
const announcementContainer = document.createElement('div');
announcementContainer.className = 'flex flex-col flex-wrap';

// Hidden paragraph for announcement_id
const announcementId = createParagraph('announcement_id', 'id',);
announcementContainer.appendChild(announcementId);

// Heading for announcement title
const announcementTitle = createHeading('announcement_title', 'Hello Announcement Title', 'font-semibold text-sm text-black');
announcementContainer.appendChild(announcementTitle);

// Paragraph for announcement URL
const announcementUrl = createParagraph('announcement_url', 'Hello Announcement URL', 'font-regular text-sm text-black');
announcementContainer.appendChild(announcementUrl);

// Adding Announcement Texts Container to the main container
mainContainer.appendChild(announcementContainer);

// Appending the main container to the existing container
existingContainer.appendChild(mainContainer);

// Function to create button element
function createButton(dataTarget, dataToggle, buttonText, color) {
  const button = document.createElement('button');
  button.setAttribute('data-modal-target', dataTarget);
  button.setAttribute('data-modal-toggle', dataToggle);
  button.type = 'button';
  button.className = `text-white bg-${color}-500 hover:bg-${color}-700 focus:ring-4 focus:outline-none focus:ring-${color}-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center dark:bg-${color}-600 dark:hover:bg-${color}-700 dark:focus:ring-${color}-800`;

  // Adding SVG icon
  const svg = document.createElement('svg');
  svg.className = 'w-5 h-5';
  svg.setAttribute('aria-hidden', 'true');
  svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
  svg.setAttribute('fill', 'currentColor');
  svg.setAttribute('viewBox', '0 0 256 256');

  // Adding path to SVG
  const path = document.createElement('path');
  path.setAttribute('d', getPathData(buttonText.toLowerCase()));
  svg.appendChild(path);

  // Adding span for accessibility
  const span = document.createElement('span');
  span.className = 'sr-only';
  span.textContent = buttonText;

  // Appending SVG and span to the button
  button.appendChild(svg);
  button.appendChild(span);

  return button;
}

// Function to create heading element
function createHeading(id, textContent, className) {
  const heading = document.createElement('h3');
  heading.id = id;
  heading.className = className;
  heading.textContent = textContent;
  return heading;
}

// Function to create paragraph element
function createParagraph(id, textContent, className, hidden = false) {
  const paragraph = document.createElement('p');
  paragraph.id = id;
  paragraph.className = className;
  paragraph.textContent = textContent;
  if (hidden) {
    paragraph.hidden = true;
  }
  return paragraph;
}

// Function to get path data for SVG based on button type
function getPathData(buttonType) {
  if (buttonType === 'edit') {
    return "M227.31,73.37L182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160l90.35-90.35,16.68,16.69L68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188l90.35-90.35h0l16.68,16.69Z";
  } else if (buttonType === 'delete') {
    return "M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z";
  }
}

        });
    });
}