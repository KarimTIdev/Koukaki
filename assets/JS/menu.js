const menuBurger = document.getElementById("menu_burger");
const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openMenu;
closeBtn.onclick = closeMenu;

function openMenu() {
   menuBurger.classList.add("active");
}

function closeMenu() {
   menuBurger.classList.remove("active");
}

document.querySelectorAll(".lien_burger").forEach(n => n.addEventListener("click", () => {
   menuBurger.classList.remove("active");
 }));

document.addEventListener('DOMContentLoaded',function(){
    const titleElements = this.querySelectorAll('.titleFade')
    function titleFading(entries,observer){
        entries.forEach(function(entry){
            if(entry.isIntersecting){
                entry.target.classList.add('animated');
                observer.unobserve(entry.target)
            }
        })
    }
    const titleObserver = new IntersectionObserver(titleFading,{
        threshold:0.5
    });
    titleElements.forEach(function(element){
        titleObserver.observe(element)
    })
})