import "./bootstrap";

import "flowbite";

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
const toTop = document.querySelector("#to-top");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

// Klik diluar Hamburger
window.addEventListener("clik", function (e) {
  if (e.target != hamburger && e.target != navMenu) {
    hamburger.classList.remove("hamburger-active");
    navMenu.classList.add("hidden");
  }
});

// Navbar Fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const fixedNav = header.offsetTop;
  const brand = document.querySelector("#brand");
  const hamburgerLine = document.querySelector("hamburger-line");

  if (window.pageYOffset > fixedNav) {
    header.classList.add("navbar-fixed");
    brand.classList.add("brand-fixed");
    brand.classList.remove("dark:text-blue-700");
    toTop.classList.remove("hidden");
  } else {
    header.classList.remove("navbar-fixed");
    brand.classList.remove("brand-fixed");
    brand.classList.add("dark:text-blue-700");
    toTop.classList.add("hidden");
  }
};

//dark mode Toggle
const darkToggle = document.querySelector('#dark-toggle');
const html = document.querySelector('html');

darkToggle.addEventListener('click',function(){
    if(darkToggle.checked){
        html.classList.add('dark');
    } else {
        html.classList.remove('dark');
    }
})