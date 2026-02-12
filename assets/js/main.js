//*** NAVBAR JS ***//

//* navbar active link on scroll *//

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
  let current = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop - 120;
    if (window.scrollY >= sectionTop) {
      current = section.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");
    if (link.getAttribute("href") === `#${current}`) {
      link.classList.add("active");
    }
  });
});




/* MENU TOGGLE */
const btn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile_menu");

btn.addEventListener("click", ()=>{
 mobileMenu.classList.toggle("show");
});

/* CLOSE ON LINK CLICK */
document.querySelectorAll("#mobile_menu a").forEach(link=>{
 link.addEventListener("click", ()=>{
  mobileMenu.classList.remove("show");
 });
});

/* CLOSE ON SCROLL */
window.addEventListener("scroll", ()=>{
 mobileMenu.classList.remove("show");
});

/* SHRINK NAVBAR */
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", ()=>{
 if(window.scrollY>40){
   navbar.classList.add("scrolled");
 }else{
   navbar.classList.remove("scrolled");
 }
});




//*** NAVBAR JS END ***//


//*** HERO SECTION JS ***//

// HERO STAGGER REVEAL

document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".hero-item");

  items.forEach((item, index) => {
    setTimeout(() => {
      item.classList.add("show");
    }, index * 140);
  });
});

//*** HERO SECTION JS END***//

//*** ABOUT ME SECTION JS ***//

document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".about-item");

  items.forEach((item, index) => {
    setTimeout(() => {
      item.classList.add("show");
    }, index * 120);
  });
});
//*** ABOUT ME SECTION JS END***//



//*** SELECTED PROJECT SECTION JS ***//

// SELECTED PROJECTS REVEAL
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".project-item");

  items.forEach((el, i) => {
    setTimeout(() => {
      el.classList.add("show");
    }, i * 140);
  });
});

//*** SELECTED PROJECT SECTION JS END ***//
