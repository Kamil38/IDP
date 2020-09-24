const navbar = document.querySelector(".navbar");
const navbarOffsetTop = navbar.offsetTop;
const switchKeuze = document.getElementById('keuzeCB');
const k1 = document.getElementById('k1');
const k2 = document.getElementById('k2');
const sections = document.querySelectorAll("section");
const navbarLinks = document.querySelectorAll(".navbar-link");
mybutton = document.getElementById("myBtn");

window.addEventListener("scroll", () => {
  mainFn();
});

const mainFn = () => {
  if (window.pageYOffset >= navbarOffsetTop) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }

  sections.forEach((section, i) => {
    if (window.pageYOffset >= section.offsetTop - 10) {
      navbarLinks.forEach((navbarLink) => {
        navbarLink.classList.remove("change");
      });
      navbarLinks[i].classList.add("change");
    }
  });
};

mainFn();

selecteerEen = () => {
    // haal class actief bij 2 weg, uncheck de checkbox en maak label 1 actief
    switchKeuze.checked = false;
    k1.classList.add('keus-uit-2--actief');
    k2.classList.remove('keus-uit-2--actief');
}
selecteerTwee = () => {
    // haal class actief bij 1 weg, check de checkbox en maak label 2 actief
    console.log('keuze 2');
    switchKeuze.checked = true;
    k1.classList.remove('keus-uit-2--actief');
    k2.classList.add('keus-uit-2--actief');
}

k1.addEventListener('click', selecteerEen);
k2.addEventListener('click', selecteerTwee);
switchKeuze.addEventListener('click', ()=> {
    switchKeuze.checked ? selecteerTwee() : selecteerEen();
})


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}


var slideIndex = 1;
showSlides(slideIndex);
 
function plusSlides(n) {
  showSlides(slideIndex += n);
}
 
function currentSlide(n) {
  showSlides(slideIndex = n);
}
 
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("slide");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
