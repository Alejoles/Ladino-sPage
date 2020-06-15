const navSlide = () =>{
    const bars = document.querySelector('.fa-bars');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');    

    bars.addEventListener('click', ()=>{
        nav.classList.toggle('nav-active');
        bars.classList.toggle('fa-window-close')
        navLinks.forEach((link, index)=>{
            if(link.style.animation){
                link.style.animation = ''
            }else{
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.65}s`
            }
        })
    })
    
}

navSlide()

