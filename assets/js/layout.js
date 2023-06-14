//navbar and footerbutton
const nav = document.querySelector(".navbar");
const scrollButton = document.getElementById("footer__button");
window.addEventListener("scroll", function () {
  if (window.scrollY > 16) {
    nav.classList.add("navbar__scrolled");
    scrollButton.classList.add("footer__button-appear");
  } else if (window.scrollY < 16) {
    nav.classList.remove("navbar__scrolled");
    scrollButton.classList.remove("footer__button-appear");
  }
});

window;

//navbar active
const currentPage = window.location.pathname;
if (currentPage === "/property.php") {
  nav.classList.add("custom-nav");
}

//body
const body = document.getElementsByTagName("body")[0];
if (currentPage === "/property.php") {
  body.style.overflow = "hidden";
}

//property-card
let card = document.querySelectorAll("div.property-card__container");
if (currentPage === "/") {
  for (let elem of card) {
    elem.classList.add("col-10", "col-6", "col-lg-4");
  }
} else if (currentPage === "/property.php") {
  for (let elem of card) {
    elem.classList.add("col-12", "col-sm-6", "col-md-12", "col-lg-6");
  }
}
