const container = document.getElementById('container');
const toggle = document.getElementById('toggle');

toggle.addEventListener('click', ()=>{
    document.body.classList.toggle('dark-mode');
    container.classList.toggle('fondo');
    toggle.classList.toggle('active');
})