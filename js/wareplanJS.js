$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $("nav").addClass("solid");
      $(".navbar-brand").addClass("show");
    } else {
      $("nav").removeClass("solid");
      $(".navbar-brand").removeClass("show");
    }
  });
});
