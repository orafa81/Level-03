

const menuButton = document.getElementById("userMenuButton");
const menu = document.getElementById("userMenu");

menuButton.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});