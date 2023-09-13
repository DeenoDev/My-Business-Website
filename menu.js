const toggle = document.querySelector('.toggle');
const navigation = document.querySelector('.mobile-navigation');

// toggle.addEventListener('click', () => {
//     toggle.classList.toggle('active');
//     navigation.classList.toggle('active');
// });

function toggleMenu(){
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
};