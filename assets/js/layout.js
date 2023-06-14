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

// property-card
// const propertyCard = document.getElementById("property-card-container");
// if (currentPage == "/property.php") {
//   propertyCard.forEach(function (card) {
//     card.classList.add("col-12");
//     card.classList.add("col-sm-6");

//     card.classList.add("col-md-12");

//     card.classList.add("col-lg-6");
//   });
// } else if (currentPage == "/") {
//   propertyCard.forEach(function (card) {
//     card.classList.add("col-10");
//     card.classList.add("col-sm-6");
//     card.classList.add("col-lg-4");
//   });
// }
