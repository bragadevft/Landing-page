$(document).ready(function () {
  $(".hamburger-menu").click(function () {
    $(this).toggleClass("active");
    $(".nav-links").toggleClass("active");
  });
});
