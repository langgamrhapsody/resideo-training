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
