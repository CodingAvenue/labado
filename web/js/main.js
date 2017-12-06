function labadoErrorMessage() {
    $('#main-body').hide();
    $('.fail-message').show();
}

function labadoErrorMessage(message) {
    $('.fail-message .message').html(message);
    labadoErrorMessage();
}