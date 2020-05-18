$(document).ready(function () {
    var menu=$("#menu-icon");
    menu.click(()=>{
        $(".nav-button-table").slideToggle("slow");
        menu.toggleClass("animate");
        });
    animate_image(".img-div h1","INTERSTELLAR SPACE!",0,100);
});

function animate_image(target, message, index, interval) 
  {    
    if (index < message.length) 
    { 
      $(target).append(message[index++]); 
      setTimeout(function () { animate_image(target, message, index, interval); }, interval); 
    }else{
        $(target).css("color", "black");
        setTimeout(()=>{
        index=0;
        $(target).css("color", "rgb(107, 188, 255)");
        $(target).text('');
        animate_image(target, message, index, interval);
        },2000);
    }
  }