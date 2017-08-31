 $(function() {
    $( "#estimate .rowtype" ).on( "keyup", "input", function() {
        
        var rate = parseFloat($(this).attr('data-rate').toString());

        $('#total_price').html(loadingImage);
        
        var val = parseFloat($(this).val());

        var ans = ((rate*val)+"" !="NaN") ? rate * val : 0;

        $(this).parent().parent().find('.result:first').html("&#8369;"+ans);
        var amountNumber = 1;
        var total = 0;

        $(".result").each(function(index) {
            total += parseFloat($(this).text().substring(1))
            console.log(total);
        })
            $('#total_price').html("Subtotal : &#8369;"+total);
    });
    

    //for styling only
    $( "#estimate" ).on( "focus", ".rowtype", function() {
        $(this).addClass("focus");
    });
    $( "#estimate" ).on( "focusout", ".rowtype", function() {
        $(this).removeClass("focus");
    });

});