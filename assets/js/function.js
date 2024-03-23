var nav = document.getElementById("navigation");
var menu = nav.getElementsByClassName("item");
for (var i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
function goback(){
    window.history.back()
}
function conf(){
    alert("You are Going to delete Data!");
}