window.addEventListener("load", function(){
    
    var iconMenu = document.getElementById("close-pop");
   

    iconMenu.addEventListener("click", function(){

        console.log("Ola mundo")

        var popup = document.querySelector(".popup-box");
        var topo = document.querySelector("main");

        popup.classList.toggle('close-popup');
        topo.classList.toggle('open-form'); 

   });


});