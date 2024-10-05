window.addEventListener('scroll',function(){
    let navbar = document.querySelector('.navbar');
    if(this.window.scrollY > 50){
        navbar.classList.add('scrolled')
    }else{
        navbar.classList.remove('scrolled')
    }
})


//navbar toggle

const menuBtn = document.getElementById('menu_btn')
const navLinks = document.getElementById('nav_links')
const menuIcon = document.querySelector('i')
const btn = document.querySelector('.nav_btns')

menuBtn.addEventListener('click',(e)=>{
    navLinks.classList.toggle('open')
    btn.classList.toggle('open')

    const isOpen = navLinks.classList.contains('open')
    menuIcon.setAttribute('class', isOpen ? 'ri-close-line' : 'ri-menu-line')
})

// Animasi


const scrollRevealOptions = {
    distance: '50px',
    origin: 'bottom',
    duration: 1000
};

// Pastikan ScrollReveal() dengan "S" besar di awal
ScrollReveal().reveal('.left h1', {
    ...scrollRevealOptions,
    delay: 500
});

ScrollReveal().reveal('.left p', {
    ...scrollRevealOptions,
    delay: 1000
});

ScrollReveal().reveal('.right img', {
    ...scrollRevealOptions,
    origin: 'right',
});

ScrollReveal().reveal('.btnmain', {
    ...scrollRevealOptions,
    delay: 1500
});

ScrollReveal().reveal('.sub_heading',{
    ...scrollRevealOptions,
    delay:500,
});
ScrollReveal().reveal('.heading',{
    ...scrollRevealOptions,
    delay:500,
});
ScrollReveal().reveal('.para',{
    ...scrollRevealOptions,
    delay:500,
});
ScrollReveal().reveal('.box',{
    ...scrollRevealOptions,
    delay:1000,
});
ScrollReveal().reveal('.left_box li',{
    ...scrollRevealOptions,
    delay:500,
});
ScrollReveal().reveal('.right_box li',{
    ...scrollRevealOptions,
    delay:500,
});
ScrollReveal().reveal('.box_1',{
    ...scrollRevealOptions,
    delay:1000,
});
ScrollReveal().reveal('.box_2',{
    ...scrollRevealOptions,
    delay:1000,
});
ScrollReveal().reveal('.footer_col',{
    ...scrollRevealOptions,
    delay:500,
});
ScrollReveal().reveal('.footer_bar',{
    ...scrollRevealOptions,
    delay:500,
});