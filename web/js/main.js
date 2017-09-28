function labadoErrorMessage() {
    $('#main-body').hide();
    $('.fail-message').show();
}

function labadoErrorMessage(message) {
    $('#main-body').hide();
    $('.fail-message .message').html(message);
    $('.fail-message').show();
}