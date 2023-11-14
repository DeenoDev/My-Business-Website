AOS.init();

const toggle = document.querySelector('.toggle');
const navigation = document.querySelector('.mobile-navigation');

function toggleMenu(){
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
};

function mobileRemoveActive(){
    navigation.classList.remove('active');
    toggle.classList.toggle('active');
};

//Sticky Navigation

window.onscroll = function() {myFunction()};

let navbar = document.getElementById("navbar");

let sticky = navbar.offsetTop;

function myFunction() {
    if (window.scrollY >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }