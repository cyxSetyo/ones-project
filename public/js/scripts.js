/* -- toggle click #menu-- */
const navbarNav = document.querySelector(".navbar-nav");
/* -- click #menu-- */
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

/* -- Ketika click diluar slide menghilangkan class active navbar menu-- */
const menu = document.querySelector("#menu");

document.addEventListener("click", function (e){
  if(!menu.contains(e.target) && !navbarNav.contains(e.target)){
    navbarNav.classList.remove("active");
  }
});