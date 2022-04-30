// function togglebar()
// {
//     document.getElementById("menu").classList.toggle("icon");
//     document.getElementById("nav").classList.toggle("change");
    
// }
jQuery(document).ready(function () {
    $("#menu-icon").on("click",function(){
        $("#mobile-menu").addClass("show");
        $("#primary-menu").clone().appendTo(".mobile-menu-wrapper");
    });
  
    $("#mobile-menu-close").on("click",function(){
        $("#mobile-menu").removeClass("show");
        $("#mobile-menu #primary-menu").remove();
    });
}); 
