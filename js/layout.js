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

//body
const body = document.getElementsByTagName("body")[0];
if (currentPage === "/property.php") {
  body.style.overflow = "hidden";
}

const readMoreButton = document.getElementById("readmore");
const overview = document.getElementById("overview");
readMoreButton.addEventListener("click", function () {
  overview.classList.toggle("more");
  if (readMoreButton.innerHTML.includes("More")) {
    readMoreButton.innerHTML = "Less";
  } else {
    readMoreButton.innerHTML = "More";
  }
});
