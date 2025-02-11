// responsive navbar
const navbarDiv = document.getElementById("resp-nav");
const navButton = document.getElementById("menu-button");
const navButton2 = document.getElementById("menu-button2");

// Click listeners
navButton.addEventListener("click", () => navbarDiv.classList.toggle("active"));
navButton2.addEventListener("click", () => navbarDiv.classList.toggle("active"));

if (document.location.href.endsWith("index.php")) {
    carousel()
    favoriteItem()
}