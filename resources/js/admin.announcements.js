var editButtons = document.querySelectorAll('[data-modal-target="edit-post-modal"]');
var editForm = document.getElementById('edit-form');
var createForm  = document.getElementById('create-form');
var formData = new FormData();
var announcementTitleInput;
var announcementUrlInput;
var announcementIdInput;

$(document).ready(function(e) {
    $('#Create').click(function(e) {
        console.log('create');
    });
    
    $('#Edit').click(function(e) {
      forData = FormData(editForm.serialize());
      console.log(formData);
        $.ajax({
          url: "/admin.announcements.edit",
          type: "POST",
          data: formData,
          success: function(response) {
            // Form submission is successful, prevent default submission
          },
          error: function(response) {
            // Form submission failed, prevent default submission
          }
        });
      
        console.log('edit');
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






