let dropdown = document.querySelector(".menu"), //ul
  submenu = document.querySelectorAll(".sub-menu"), //ul li a
  buttonClick = document.querySelector(".check-button"), //button
  hamburger = document.querySelector(".menu-icon"),
  items = document.querySelectorAll(".menu li");

buttonClick.addEventListener("click", () => {
  dropdown.classList.toggle("show-dropdown");
  hamburger.classList.toggle("animate-button");
});

// items.forEach((item) => {
//   // item.addEventListener("mouseleave", (e) => {
//   //   item.classList.remove("show-dropdown");
//   // });
//   item.addEventListener("click", (e) => {
//     //   this checks if there is a ul within the li element!
//     if (item.querySelector("ul")) {
//       e.preventDefault();
//       item.querySelector("ul").classList.toggle("show-dropdown");
//     } else {
//       return;
//     }
//   });
// });
