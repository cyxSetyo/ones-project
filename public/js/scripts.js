/* -- toggle click #menu-- */
const navbarNav = document.querySelector(".navbar-nav");
/* -- click #menu-- */
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};