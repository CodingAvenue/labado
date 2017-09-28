$(function () {

    var laundry_shops = [];
    laundry_shops = JSON.parse(sessionStorage.getItem("laundryshops"));

    var ul_id = $('#laundry-list');
    laundry_shops.map(function (laundry) {
        var row = '<li><div class="laundry-header collapsible-header" data-target=' + laundry.place_id
        + '><p><span>'
        + laundry.name + '</span><span id="vici">'
        + laundry.vicinity + '</span></p></div><div class="collapsible-body"></div></li>';

        ul_id.append(row);
    });

    $("#laundry-list").on('click', '.laundry-header', function () {
        var placeId = $(this).data('target');
        var theUrl = "laundryshop/" + placeId + "/details";
        var body = $(this).next('.collapsible-body');
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
