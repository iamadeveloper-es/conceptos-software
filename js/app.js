const ulMenu = document.querySelector('#nav-ul');
const navLinks = document.querySelectorAll('#nav-ul a');
const btnMenu = document.querySelector('.burger-menu');
const btnScrollTop = document.querySelector('.btn-scroll-top');

btnMenu.addEventListener('click', () => {
    ulMenu.classList.toggle('open');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        ulMenu.classList.remove('open')
    });
});

window.addEventListener('scroll', () => {
    let y = window.scrollY

    if(y > 100){
        btnScrollTop.classList.add('show');
    }else{
        btnScrollTop.classList.remove('show');
    }
    console.log(y)
});

btnScrollTop.addEventListener('click', () => {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});