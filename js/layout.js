//navbar
const nav = document.querySelector(".navbar");
window.addEventListener("scroll", function () {
  if (window.scrollY > 16) {
    nav.classList.add("navbar__scrolled");
  } else if (window.scrollY < 16) {
    nav.classList.remove("navbar__scrolled");
  }
});

//navbar active

const currentPage = window.location.pathname;
if (currentPage === "/property.php") {
  nav.classList.add("custom-nav");
}
