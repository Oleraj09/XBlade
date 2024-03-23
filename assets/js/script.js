toggle = document.querySelector(".toggle_btn")
toggle.onclick = function () {
    navbar = document.querySelector(".toggle_menu")
    navbar.classList.toggle("open")
}

function clicked() {
    dnn = document.body;
    cercle = document.getElementById('cercles');
    bg = document.getElementById('bgs');
    barch = document.getElementById('barchng');
    barch.classList.toggle('barch');
    cercle.classList.toggle('mood');
    bg.classList.toggle('bgcolor');
    dnn.classList.toggle('dark');
    cngimg = document.getElementById('cngimg');
    if (cngimg.src.endsWith("assets/img/pngwing.com.png")) {
        cngimg.src = "./assets/img/moon-icon.png";
    } else {
        cngimg.src = "./assets/img/pngwing.com.png";
    }
}
function scrollToTop() {
    window.scrollTo(0, 0);
}

let mybutton = document.getElementById("myBtn");
window.onscroll = function () { 
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
 };
