document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(
    "[data-collapse-toggle='navbar-sticky']"
  );
  const menu = document.getElementById("navbar-sticky");
  const menuItems = menu.querySelectorAll("a");

  // Function to toggle menu visibility
  function toggleMenu() {
    menu.classList.toggle("hidden");
  }

  // Toggle menu when button is clicked
  menuToggle.addEventListener("click", toggleMenu);

  // Close menu when an item is clicked
  menuItems.forEach((item) => {
    item.addEventListener("click", function () {
      if (!menu.classList.contains("hidden")) {
        toggleMenu();
      }
    });
  });
});



// $(document).ready(function(){
//   $('.slider').slick({
//     setting-name: setting-value
//   });
// });
		