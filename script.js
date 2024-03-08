
document.addEventListener("DOMContentLoaded",function(){
    window.addEventListener("scroll", function(){
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scrollY > 0);
    });
});

const cards = document.querySelectorAll(".card");

cards.forEach((card) => {
  card.addEventListener("click", () => {
    removeActiveClasses();
    card.classList.add("active");
  });
});

const removeActiveClasses = () => {
  cards.forEach((card) => {
    card.classList.remove("active");
  });
};

function contactBtn(){
  document.getElementById("contact-modal-bg").classList.toggle("active");
  document.getElementById("contact-content").classList.toggle("e");
}

// var TrandingSlider = new Swiper('.tranding-slider', {
//   effect: 'coverflow',
//   centeredSlides: true,
//   grabCursor: true,
//   loop: true,
//   slidesPerView: 'auto',
//   coverflowEffect: {
//     rotate:0,
//     stretch: 0,
//     scale:1,
//     depth: 150,
//     modifier: 2,
//     slideShadows: true,
//   },
//   pagination: {
//     el: '.swiper-pagination',
//     clickable: true,
//   },
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   }
// });

var swiper = new Swiper(".slide-content", {
  slidesPerView: 1,
  centeredSlides:true,
  loop:true,
  spaceBetween: 500,
  grabCursor: true,
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  }
});

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function(e){
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior:"smooth"
    });
  });
});

// check window active state
// const activePage = window.location.pathname;
// const navLinks = document.querySelectorAll('.floating-anchors').forEach(link => {
//   if(link.href.includes('${activePage}')){
//     link.classList.add('active');
//     console.log('active');
//   }
// })

// 
const floatingLinks= document.querySelectorAll('.floating-anchors');
const sectionEl = document.querySelectorAll('section');
let currentSection = 'hero-container';
window.addEventListener('scroll',() => {
  
  sectionEl.forEach(section =>{
    
    if(window.scrollY >= (section.offsetTop - section.clientHeight/2)){
      currentSection = section.id;
      console.log('current section: '+currentSection);
    }
  });

  floatingLinks.forEach(floatingLinksEl =>{
    if (floatingLinksEl.href.includes(currentSection)){
      document.querySelector('.float-active').classList.remove('float-active');
      floatingLinksEl.classList.add('float-active');
    }
  });
});