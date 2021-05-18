
//Adding active class property on click to navbar items
const navbarLinks = document.querySelectorAll(".navbar-link");

navbarLinks.forEach(link=>{
    link.addEventListener("click",()=>{
       alert("clicked")
    })
})