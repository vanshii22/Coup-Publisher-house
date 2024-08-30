window.onscroll = function() {makeSticky()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function makeSticky() {
  if (window.scrollY > sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

