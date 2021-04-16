$(function() {
    $("img.lazy").lazyload();
});

$(document).ready(function () {
    $(".filter").click(function () {
        $(".filter").removeClass("btn-info");
        $(this).addClass("btn-info");
        var site = String($(this).attr("site"));
        if (site == "all") {
            $(".room-wrapper").show();
        }
        else {
            $(".room-wrapper[data-site='" + site + "']").show();
            $(".room-wrapper[data-site!='" + site + "']").hide();
        }
    });

    $(function() {
        var $divWidth = $('.img-wrapper:first').width();
        $('.lazy').css({'height':$divWidth * 0.56});
    });

    $(window).resize(function() {
        var $divWidth = $('.img-wrapper:first').width();
        $('.lazy').css({'height':$divWidth * 0.56});
    });
});