$(document).ready(function() {
    checkStatus();

    function checkStatus(){ 
        setTimeout(function() {
            $.ajax({
                dataType: "json",
                method: 'post',
                url: "/bookingrequest/"+id+"/status", 
                success: function(data) {
                    data.status= "No Labadoer Found";
                    if (data.status == "In Progress") {
                        checkStatus();
                    } else if (data.status == "Confirmed") {
                    //redirect user to Booking Page /booking/current
                    
                    } else if (data.status == "No Labadoer Found") {
                    //

                    } 
                }
            }).fail(function (e) {
                labadoErrorMessage();
            });
            
        }, 2000);
    }
    
});