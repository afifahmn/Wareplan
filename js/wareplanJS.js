$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 860) {
            $("nav").addClass("solid");
        } else {
            $("nav").removeClass("solid");
        }
    });
});
