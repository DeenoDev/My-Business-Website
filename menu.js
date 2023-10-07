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
}