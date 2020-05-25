$(document).ready(function () {
    $('.content-expand').on('click',function (e) { 
        $('#collapsecontent').toggleClass('d-none');
        if($('#read-more').text()=="more"){
            $('#read-more').text("less");
        }
        else{
            $('#read-more').text("more");
        }
        
    });
});