// Fries Menu
const friesMenu = document.getElementsByClassName("fries-menu")[0];

friesMenu.addEventListener("click", () => {
  let mobileNavContents = document.getElementsByClassName("nav-mobile-content")[0];
  mobileNavContents.classList.toggle("show");
});
