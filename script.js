
const body = document.querySelector('body'),
        sidenav = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        content = body.querySelector('.content'),
        modal = body.querySelector('.modal-content');
toggle.addEventListener("click" , () =>{
    sidenav.classList.toggle("close");
    content.classList.toggle("active-content");
    modal.classList.toggle("active-modal");
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

window.addEventListener("load", function() {
    openPage("usermanagement");
});

// sample
function openModal(modalNumber) {
    var modal = document.getElementById("myModal" + modalNumber);
    modal.style.display = "block";
}

function closeModal(modalNumber) {
    var modal = document.getElementById("myModal" + modalNumber);
    modal.style.display = "none";
    
}

window.onclick = function(event) {
    var modals = document.getElementsByClassName('modal');
    for (var i = 0; i < modals.length; i++) {
        if (event.target == modals[i]) {
            modals[i].style.display = "none";
        }
    }
}
function submitForm(event) {

     // Get the form element
     var form = event.target;

     // Create a new FormData object to store form data
     var formData = new FormData(form);
 
     // Perform an asynchronous POST request using AJAX
     var xhr = new XMLHttpRequest();
     xhr.open("POST", form.action, true);
     xhr.onload = function () {
         if (xhr.status === 200) {
             // Successful response from the server
             console.log(xhr.responseText);
             // Handle the response as needed (e.g., show a success message)
         } else {
             // Error response from the server
             console.error("Form submission error:", xhr.statusText);
             // Handle the error as needed (e.g., show an error message)
         }
     };
     xhr.onerror = function () {
         // Network error
         console.error("Network error during form submission");
         // Handle the error as needed (e.g., show an error message)
     };
 
     // Send the FormData to the server
     xhr.send(formData);
 
} 


