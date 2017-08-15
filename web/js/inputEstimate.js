$(function() {
    $( "#estimate" ).on( "keyup", "#estimate_quantity", function() {
        //this is a temp rate
        var rate = 29;
        var val = parseFloat($("#estimate_quantity").val());
        $('#result').html(rate*val);
    });
});