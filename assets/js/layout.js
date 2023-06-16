//navbar and footerbutton
const nav = document.querySelector(".navbar");
let card = document.querySelectorAll("div.property-card__container");
const currentPage = window.location.pathname;

//body
const body = document.getElementsByTagName("body")[0];
if (currentPage === "/property.php") {
  body.style.overflow = "hidden";
}
