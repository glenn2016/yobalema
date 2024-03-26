let sidebarToggle = document.querySelector(".sidebarToggle"); /*réccupération du bouton */
sidebarToggle.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("active");/*attribut à la balise body la classe "active"*/
    document.getElementById("sidebarToggle").classList.toggle("active");
});