//navbar
const nav = document.querySelector(".navbar");
window.addEventListener("scroll", function () {
  if (window.scrollY > 64) {
    nav.classList.add("navbar__scrolled");
  } else if (window.scrollY < 64) {
    nav.classList.remove("navbar__scrolled");
  }
});
