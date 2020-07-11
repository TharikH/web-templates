$(function () {
    $("#signupbutton").click(function(){
        $("#login").modal('hide');
        $("#signup").modal('show');
    });
    $("#loginbutton").click(function(){
        $("#signup").modal('hide');
        $("#login").modal('show');
    });
});