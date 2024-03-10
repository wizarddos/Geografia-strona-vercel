const buttonOpen = document.querySelector("#menu-open");
const navabar = document.querySelector("#navbar")

buttonOpen.addEventListener('click', ()=>{
    navabar.classList.toggle("hidden");
})