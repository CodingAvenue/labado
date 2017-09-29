$(document).ready(function() {
    checkStatus();

    function checkStatus() { 
        $.ajax({
            dataType: "json",
            method: "post",
            url: "/bookingrequest/" + id + "/status", 
            success: function(data) {
                if (data.status == "Confirmed") {
                    location.href = "/booking/current";
                } else if (data.status == "No Labadoer Found") {
                    $('#main-view').hide();
                    $('#no-labadoer-message').show();
                } else { 
                    setTimeout(checkStatus, 5000);
                }
            }
        }).fail(function (e) {
            labadoErrorMessage();
        });
    }

    $("#main-view").on( "click", "#cancel-request", function() {
        $('#cancel-request').addClass('disabled');
        $.ajax({
            dataType: "json",
            method: "post",
            url: "/bookingrequest/" + id + "/cancel", 
            success: function(data){
                if (data.status == 'Cancelled') {
                    location.href = "/laundryshop";
                } 
            }
        });
    });

});