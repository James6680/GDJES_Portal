

$(document).ready(function(){
    const url = localStorage.getItem('appUrl') + '/api/studentAccounts';
    $.getJSON(url, function(data) {
        console.log(data);
    });
});