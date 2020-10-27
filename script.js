let burger = document.querySelector(".burger");
let overlayMobile  = document.querySelector(".overlay-mobile");
let navbarMobileHide = document.querySelector(".navbar-mobile");

burger.addEventListener("click", function(){
    burger.classList.toggle("burger-active")
    overlayMobile.classList.toggle("overlay-mobile-active")
    navbarMobileHide.classList.toggle("navbar-mobile-hide")
})
