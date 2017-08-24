 $(function() {
    $( "#estimate .rowtype" ).on( "keyup", "input", function() {
        
        var rate = parseFloat($(this).attr('data-rate').toString());

        $('#total_price').html(loadingImage);

        var val = parseFloat($(this).val());
        var appendToId = $(this).data('target').toString();
        var ans = 0;

        ans = ((rate*val)+"" !="NaN") ? rate * val : 0;

        $('#amount_'+appendToId.charAt(appendToId.length-1) ).html("P"+ans+".00");

        var amountNumber = 1;
        var total = 0;

        while($('#amount_'+amountNumber).length){
            var str = $('#amount_'+amountNumber).text().toString();
            total += parseFloat(str.substring(1)); 
            amountNumber++;
        }

            $('#total_price').html("Subtotal : P"+total);
    });
    

    //for styling only
    $( "#estimate" ).on( "focus", ".rowtype", function() {
        $(this).addClass("focus");
    });
    $( "#estimate" ).on( "focusout", ".rowtype", function() {
        $(this).removeClass("focus");
    });

});