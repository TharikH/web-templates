$(document).ready(function () {
    var menu=$("#menu-icon");
    menu.click(()=>{
        $(".nav-button-table").slideToggle("slow");
        menu.toggleClass("animate");
        });
    });