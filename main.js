var glideMulti = new Glide('.multi', {
    type: 'slider',
    autoplay: 4000,
    focusAt: 'center',
    perView: 2
  });
  
  var glideMulti1 = new Glide('.multi1', {
    type: 'carousel',
    autoplay: 3500,
    perView: 3
  });
  
  var glideHeroPeek = new Glide('.heropeek', {
    type: 'carousel',
    animationDuration: 1000,
    autoplay: 3000,
    focusAt: '1',
    startAt: 1,
    perView: 1,
     // set a value to show the previous and next slides peeking in
    peek: {
      before: 20,
      after: 20
    },
    gap: 0
  });
  
  var glideHero = new Glide('.hero', {
    type: 'carousel',
    animationDuration: 2000,
    autoplay: 4500,
    focusAt: '1',
    startAt: 3,
    perView: 1, 
  });
  
  glideMulti.mount();
  glideMulti1.mount();
  glideHeroPeek.mount();
  glideHero.mount();