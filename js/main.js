document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
    duration:150,
    dist: -80,
    shift: 5,
    padding:5,
    numVisible: 3,
    indicators: true,
    noWrap: true
});
});

(function(){
    const listElements =  document.querySelectorAll(".nav_item--show");
    const list = document.querySelector(".nav_links");

    const addClick =()=>{
        listElements.forEach(element => {
           element.addEventListener('click', ()=>{

             let subnav = element.children[1];
             let height =0;
             element.classList.toggle('nav_item--activ');

             
             if(subnav.clientHeight ===0 ){
                 height = subnav.scrollHeight;
             }
             subnav.style.height = `$(height)px`;
           })
        })
    }
    
    const deleteStyleHeight = () =>{
        listElements.forEach(element=>{
            if(element.children[1].getAttribute('style')){
                element.children[1].removeAttribute('style');
                element.classList.remove('nav_item--activ');
            }
        });
    }

    window.addEventListener('resize', ()=>{
        if(window.innerWidth > 800){
            deleteStyleHeight();
        }else{
            addClick();
        }
    });
    if(window.innerWidth <= 800){
        addClick();
    }
    nav.addEventListener('click', ()=> list.classList.toggle('nav_link--show'))
})();