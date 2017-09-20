$(document).ready(function() {
    $("#registration").on('focusout', '.validate', function(e) {
        target = $(this);
        var url = (target.attr('id') == "fos_user_registration_form_email") ? "/registration/exist/email" : "/registration/exist/username";
        $.ajax({
            dataType: "json",
            method: 'post',
            data: target.val(),
            url: url,
            success: function(data) {
                if (data['status']) {
                    target.addClass("invalid");
                    target.removeClass("valid");
                    target.next('.formlabel').attr('data-error', target.next('.formlabel').text() + ' Already Taken');
                } else {
                    target.addClass("valid");
                    target.next('.formlabel').attr('data-error', (url == "/registration/exist/email" ) ? 'Invalid Email' : 'Username must be atleast 4 characters' );
                }
            }
        }).fail(function (e) {
            console.log("Something went wrong");
        });
    });

    $("#registration").on('focusout keyup', '.password-input', function(e) {
        shortPasswordTarget = $('#fos_user_registration_form_plainPassword_first'); 
        matchPasswordTarget = $('#fos_user_registration_form_plainPassword_second'); 

        var firstPassword = shortPasswordTarget.val(); 
        var secondPassword = matchPasswordTarget.val();

       if ($(this).attr('id') == shortPasswordTarget.attr('id') && firstPassword) {
            if (firstPassword.length < 8) {
                shortPasswordTarget.addClass('invalid');
                shortPasswordTarget.next('.formlabel').attr('data-error', 'Password must be atleast 8 characters ');
            } else {
                shortPasswordTarget.removeClass('invalid');
                shortPasswordTarget.addClass('valid');
            }
       } else {
            if (firstPassword != secondPassword && firstPassword && secondPassword) {
                matchPasswordTarget.addClass('invalid');
                matchPasswordTarget.next('.formlabel').attr('data-error', 'Passwords did not match');
            } else {
                matchPasswordTarget.removeClass('invalid');
                matchPasswordTarget.addClass('valid'); 
            }
       }
    });
});
