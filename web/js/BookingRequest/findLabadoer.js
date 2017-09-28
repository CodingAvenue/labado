$(document).ready(function() {
    checkStatus();

    function checkStatus(){ 
        setTimeout(function() {
            $.ajax({
                dataType: "json",
                method: "post",
                url: "/bookingrequest/"+id+"/status", 
                success: function(data) {
                    if (data.status == "In Progress" || data.status == "Pending") {
                        checkStatus();
                    } else if (data.status == "Confirmed") {
                        location.href="/booking/current";
                    } else if (data.status == "No Labadoer Found") {
                        $('#main-view').hide();
                        $('#no-labadoer-message').show();
                    } 
                }
            }).fail(function (e) {
                labadoErrorMessage();
            });
        }, 5000);
    }
});