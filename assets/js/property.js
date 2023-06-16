let mapButton = document.getElementById("map-button");
let offcanvasButton = document.getElementById("offcanvas-button");
let propertyItem = document.getElementById("property-item");
let propertyMap = document.getElementById("property-map");
let offcanvasMap = document.getElementById("offcanvasMap");
let desktopWidth = window.matchMedia("(min-width: 992px)");
let tabletWidth = window.matchMedia("(max-width: 991.98px)");

if (currentPage === "/property.php") {
  nav.classList.add("custom-nav");
}

mapButton.addEventListener("click", function () {
  if (currentPage === "/property.php") {
    propertyItem.classList.toggle("full");
    for (let elem of card) {
      if (elem.classList.contains("col-lg-6")) {
        elem.classList.remove("col-lg-6");
        elem.classList.add("col-lg-4");
      } else {
        elem.classList.remove("col-lg-4");
        elem.classList.add("col-lg-6");
      }
    }
  }
});

offcanvasButton.addEventListener("click", function () {
  if (currentPage === "/property.php") {
    propertyItem.classList.add("full");
    for (let item of card) {
      item.classList.remove("col-lg-6");
      item.classList.add("col-lg-4");
    }
  }
});

if (desktopWidth.matches) {
  offcanvasMap.classList.add("show");
} else if (tabletWidth.matches) {
  offcanvasMap.setAttribute("data-bs-backdrop", true);
}
