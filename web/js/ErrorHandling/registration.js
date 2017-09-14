$(document).ready(function() {
    var timeout = null

    $("#registration").on('focusout keyup', '.validate', function(e) {
        // this will avoid the keyup key 9 which is the "Tab" key 
        // this is to avoid double request when the focusout event triggered cause of keyup event
        if(!(e.type == 'keyup' && e.which == 9)) {
            target = $(this);
            var url = (target.attr('name') == "form_user_registration_form_email") ? "/registration/exist/email" : "/registration/exist/username";
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                $.ajax({
                    dataType: "json",
                    method: 'post',
                    data: target.val(),
                    url: url,
                    success: function(data) {
                        if(data['status']) {
                            target.addClass("invalid");
                            target.next('.formlabel').attr('data-error', target.next('.formlabel').text() + ' Already Taken');
                        } else {
                            target.addClass("valid");
                            target.next('.formlabel').attr('data-error', 'Invalid ' + target.next('.formlabel').text());
                        }
                    },
                });
            }, 500);
        }
    });

    $("#registration").on('focusout keyup', '.password-input', function(e) {
        target = $('#fos_user_registration_form_plainPassword_second'); 
        target.next('.formlabel').attr('data-error', 'Password did not match ');

        var first = $('#fos_user_registration_form_plainPassword_first').val();
        var second = target.val();

        if(first && second ) {
            target.addClass( (first!=second)? "invalid": "valid" );
        }else{
            target.addClass("valid");
        }
    });

});
