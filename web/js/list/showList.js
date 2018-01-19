$(function () {

    var laundry_shops = [];
    laundry_shops = JSON.parse(sessionStorage.getItem("laundryshops"));

    if (! laundry_shops) {
        location.href = "/location/search";
    }

    var ul_id = $('#accordion-one');
    var shopNumber = 0;
    laundry_shops.map(function (laundry) {
        var shop = '<div class="panel panel-default" data-target="' + laundry.place_id +'" >'
            + '<div class="panel-heading">'
                + '<h3 class="panel-title">'
                    + '<a class="collapsed" data-toggle="collapse" data-parent="#accordion-'+ (shopNumber) +'" href="#shop-panel-'+ (shopNumber) +'">'
                        + laundry.name + ' ('
                        + laundry.vicinity  + ')'
                    + '</a>'
                + '</h3>'
            + '</div>'
            + '<div id="shop-panel-'+ (shopNumber) +'" class="panel-collapse collapse"><div class="panel-body"></div></div>'
        + '</div>';

        shopNumber++;
        ul_id.append(shop);
    });


    $("#accordion-one").on('click', '.panel', function () {
        var placeId = $(this).data('target');
        var theUrl = "laundryshop/" + placeId + "/details";
        var body = $(this).find('.panel-collapse .panel-body');
        $.ajax({
            url: theUrl,
        }).done(function (data) {
            body.html(data);
        }).fail(function (e) {
            var errorMessage = "Cannot retrieve data";
            body.html(errorMessage);
        });
    });
});
