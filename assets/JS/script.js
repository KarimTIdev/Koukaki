const swiper = new Swiper('.swiper', {
    effect: 'coverflow',
    grabCursor: true,
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 10,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 10,
        modifier: 1,
        slideShadows: false,
    },
    loop: true,
  });

function initializeSkrollrOnDesktop() {
    const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  
    if (screenWidth > 1191) {
        var s = skrollr.init({
            forceHeight: false
        });
    }
}
  
window.addEventListener('load', initializeSkrollrOnDesktop);

let root=document.querySelector(':root');

window.addEventListener('scroll',function(){
    root.style.setProperty('--speed','1s')
})
window.addEventListener('scrollend',function(){
    root.style.setProperty('--speed','8s')
})