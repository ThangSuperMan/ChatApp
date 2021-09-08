const searchBar = document.querySelector(".users .search input");
const searchButton = document.querySelector(".users .search button");

searchButton.addEventListener("click", () => {
  // show the search bar
  searchBar.classList.toggle("active");

  //   show the background color of button search
  searchButton.classList.toggle("active");
});
