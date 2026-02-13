//*** NAVBAR JS ***//
 
const navbar = document.getElementById("navbar");
const toggle = document.getElementById("menu-toggle");
const navLinksBox = document.getElementById("nav-links");

/* hamburger toggle */
toggle.addEventListener("click", () => {
 navLinksBox.classList.toggle("open");
});

/* CLOSE on scroll */
window.addEventListener("scroll", () => {

 navLinksBox.classList.remove("open");

 /* shrink navbar */
 if(window.scrollY > 40){
   navbar.classList.add("scrolled");
 } else {
   navbar.classList.remove("scrolled");
 }

});

/* active link highlight */
const sections = document.querySelectorAll("section");
const links = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {

 let current = "";

 sections.forEach(section=>{
  const sectionTop = section.offsetTop - 120;
  if(scrollY >= sectionTop){
    current = section.getAttribute("id");
  }
 });

 links.forEach(link=>{
  link.classList.remove("active");
  if(link.getAttribute("href") === `#${current}`){
   link.classList.add("active");
  }
 });

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
