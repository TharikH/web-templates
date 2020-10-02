var exp=require("express");

var app=exp();

app.listen(8000)
app.get("/",function(req,res){
    res.send("index page")
})
app.get("/about",function(req,res){
    res.send("about page");
})