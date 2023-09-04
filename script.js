
const body = document.querySelector('body'),
        sidenav = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        content = body.querySelector('.content');
toggle.addEventListener("click" , () =>{
    sidenav.classList.toggle("close");
    content.classList.toggle("active-content");
})


const navlinks = document.querySelectorAll(".navlink");

function deactivateActiveClass() {
    navlinks.forEach(navlink => {
        navlink.classList.remove("active");
    })
}

navlinks.forEach(navlink => {
    navlink.addEventListener("click", () => {
        deactivateActiveClass(); 
        navlink.classList.add("active");
    })
})


// Function to open a page and show its content
function openPage(pageId) {
    // Hide all pages
    var pages = document.getElementsByClassName("page");
    for (var i = 0; i < pages.length; i++) {
      pages[i].classList.remove("active");
    }
  
    var page = document.getElementById(pageId);
    page.classList.add("active");
}
 
