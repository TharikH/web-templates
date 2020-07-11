var n = 0;
function ob(num) {
    $.ajax({
        type: "POST",
        url: "valuefetch.php",
        // dataType: 'json',
        data: { 'count': num },
        success: function (data) {
            console.log(data);
        },
        error: function () {
            console.log("error");
        }
    });
}
$(function () {
    $(window).scroll(function () {
        if ($('body').height() <= ($(window).height() + $(window).scrollTop())) {
            console.log("poiuy");
            ob(n);
        }
    });
});