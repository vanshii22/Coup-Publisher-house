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


// For contact btn
    var button = document.getElementById("navbar-btn");
    button.addEventListener("click", function() {
        window.location.href = "couppublishinghouse/contact.php"; // Navigate up one directory to contact.php
    });



// Add active class
