$(document).ready(function () {
    if (window.location.hash) {
        var target = $(window.location.hash);
        if (target.length) {
            $("html, body").animate({
                scrollTop: target.offset().top
            }, 800); // 800ms para un desplazamiento suave
        }
    }
});
