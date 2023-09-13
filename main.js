const slider = new A11YSlider(document.querySelector('.slider'), {
  adaptiveHeight: true,
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 1000,
  autoplayHoverPause: true,
  // responsive: {
  //   768: {
  //     slidesToShow: 2,
  //     arrows: false
  //   },
  //   960: {
  //     disable: true // slider disabled 960px to 1279px
  //   },
  //   1280: {
  //     disable: false,
  //     slidesToShow: 4,
  //     dots: true // dots enabled 1280px and up
  //   }
  // }
  
});

//Particle Effect
particlesJS("particles-js", {"particles":{"number":{"value":47,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":4},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":176.3753266952075,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"grab"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":170.53621458328246,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);; //


//Menu Interactivity
// const toggle = document.querySelector('.toggle');
// const navigation = document.querySelector('.mobile-navigation');

// toggle.addEventListener('click', () => {
//   console.log('FUCKER!!!')
// })

