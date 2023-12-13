const submitDocumentRequest = document.getElementById('submitDocumentRequest');
const submitDocumentRequestForm = document.querySelector('#submitDocumentRequestForm');
const requestDocumentForm = document.getElementById('request-document');
const error1 = document.getElementById('purpose-error');
const error2 = document.getElementById('document-error');

requestDocumentForm.addEventListener('click', function(){
    $(error1).css("display", "none");
    $(error2).css("display", "none");    
});

submitDocumentRequest.addEventListener('click', function(e){
    let passed1 = false;
    let passed2 = false;
    const formData = $(submitDocumentRequestForm).serialize();
    if(!formData.includes("purpose")){
        $(error1).css("display", "block");
    }else{
        $(error1).css("display", "none");
        passed1 = true;
    }
    if(!formData.includes("document")){
        $(error2).css("display", "block");
    }else{
        $(error2).css("display", "none");
        passed2 = true;
    }

    if(passed1 == true && passed2 == true){
        console.log(formData);
        $.ajax({
            url: localStorage.getItem('appUrl') + "/student.requestDocument",
            type: "POST",
            data: formData,
            success: function (response) {
                location.reload();
            },
            error: function (response) {
            }
        });
    }
});

