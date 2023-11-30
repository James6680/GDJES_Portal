var editButtons = document.querySelectorAll('[data-modal-target="edit-post-modal"]');
var deleteButtons = document.querySelectorAll('[data-modal-target="delete-post-modal"]');
var editForm = document.getElementById('edit-form');
var createForm  = document.getElementById('create-form');
var deleteForm  = document.getElementById('delete-form');
var formData;
var announcementTitleInput;
var announcementUrlInput;
var announcementIdInput;

$(document).ready(function(e) {
    $('#Create').click(function(e) {
      const serializeData = $('#Create-form').serialize();
      console.log(serializeData);
      $.ajax({
        url: "/public/admin.announcements.create",
        type: "POST",
        data: serializeData,
        success: function(response) {
          // Form submission is successful, prevent default submission
          location.reload();
        },
        error: function(response) {
          // Form submission failed, prevent default submission
        }
      });  
    });
    
    $('#Edit').click(function(e) {
      const serializeData = $('#edit-form').serialize();
      console.log(serializeData);
        $.ajax({
          url: "/public/admin.announcements.edit",
          type: "POST",
          data: serializeData,
          success: function(response) {
            // Form submission is successful, prevent default submission
            location.reload();
          },
          error: function(response) {
            // Form submission failed, prevent default submission
          }
        });  
      });

      $('#Delete').click(function(e) {
        const serializeData = $('#delete-form').serialize();
        console.log(serializeData);
        $.ajax({
          url: "/public/admin.announcements.delete",
          type: "POST",
          data: serializeData,
          success: function(response) {
            // Form submission is successful, prevent default submission
            location.reload();
          },
          error: function(response) {
            // Form submission failed, prevent default submission
          }
        });  
      });
});



for (const editButton of editButtons) {
  editButton.addEventListener('click', () => {
    const announcementTitle = editButton.closest('#indiv_announcement').querySelector('#announcement_title').textContent;
    const announcementUrl = editButton.closest('#indiv_announcement').querySelector('#announcement_url').textContent;
    const id = editButton.closest('#indiv_announcement').querySelector('#announcement_id').textContent;


    announcementIdInput = editForm.querySelector('input[name="id"]');
    announcementIdInput.value = id;

    announcementTitleInput = editForm.querySelector('input[name="announcement_title"]');
    announcementTitleInput.value = announcementTitle;

    announcementUrlInput = editForm.querySelector('input[name="announcement_url"]');
    announcementUrlInput.value = announcementUrl;
    // Use the extracted data to populate the edit modal
  });
}

for (const deleteButton of deleteButtons) {
  deleteButton.addEventListener('click', () => {
    const id = deleteButton.closest('#indiv_announcement').querySelector('#announcement_id').textContent;

    announcementIdInput = deleteForm.querySelector('input[name="id"]');
    announcementIdInput.value = id;

    // Use the extracted data to populate the edit modal
  });
}