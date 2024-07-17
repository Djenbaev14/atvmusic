const header_bar_btn = document.querySelector(".header-bar");
const headerMenuCloseBtn = document.querySelector(".close-header_menu__bar");

header_bar_btn.addEventListener("click", () => {
  document.querySelector(".header-menu").classList.toggle("active");
});

headerMenuCloseBtn.addEventListener("click", () => {
  document.querySelector(".header-menu").classList.remove("active");
});
