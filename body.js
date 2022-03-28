function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

var nav = document.querySelector(".site-header");
var position = 0;

window.addEventListener("scroll", function () {
  if (window.pageYOffset > 100) {
    nav.classList += " small";
  } else {
    nav.classList = "site-header";
  }
});

window.addEventListener("scroll", function () {
  if (position < window.pageYOffset) {
    console.log("down");
    nav.classList += " up";
    position = window.pageYOffset;
  } else {
    console.log("up");
    nav.classList = "site-header sticky-top py-1 navbar-dark small";
    position = window.pageYOffset;
  }
});
