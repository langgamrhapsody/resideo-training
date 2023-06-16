//property-card

if (currentPage === "/") {
  for (let elem of card) {
    elem.classList.add("col-10", "col-sm-6", "col-lg-4");
  }
} else if (currentPage === "/property.php") {
  for (let elem of card) {
    elem.classList.add("col-12", "col-sm-6");
  }
}
