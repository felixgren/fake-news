'use strict';

let burger = document.querySelector(".burger");
let overlayMobile  = document.querySelector(".overlay-mobile");
let navbarMobileHide = document.querySelector(".navbar-mobile");
let lightOverlay = document.querySelector(".light-overlay");

burger.addEventListener("click", function(){
    burger.classList.toggle("burger-active")
    overlayMobile.classList.toggle("overlay-mobile-active")
    navbarMobileHide.classList.toggle("navbar-mobile-hide")
    lightOverlay.classList.toggle("light-overlay-active")
})

// Based on https://christopheraue.net/design/fading-pages-on-load-and-unload
document.addEventListener('DOMContentLoaded', function() {
    if (!window.AnimationEvent) {
        return;
    }

    let links = document.querySelectorAll('a'); // Array of all a tags

    links.forEach(link => {
        link.addEventListener("click", function(e){
            let fader = document.querySelector('.page-transition'),
            link = e.currentTarget;

            fader.addEventListener('animationend',function() {
                window.location = link.href;
            });

            fader.removeEventListener('animationend');  
            overlayMobile.classList.remove("overlay-mobile-active");
            navbarMobileHide.classList.remove("navbar-mobile-hide");
            e.preventDefault();
            fader.classList.add('fade-in');
        })
    });
})

function fadeInPage() {
    if (!window.AnimationEvent) {
        return;
    }
    let fader = document.querySelector('.page-transition');
    fader.classList.add('fade-out');
}

fadeInPage();