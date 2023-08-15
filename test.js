const body = document.querySelector('body'),
      sidenav = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      content = body.querySelector('.content');

toggle.addEventListener("click", () => {
  sidenav.classList.toggle("close");
  content.classList.toggle("collapsed"); // Toggle the class on main content
});
