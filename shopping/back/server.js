const express=require("express");
var app=express();
var mongo=require("mongodb").MongoClient;
var bodyParser=require("body-parser");
// var cors=requir("cors");
app.listen(8000);

app.use(
    bodyParser.urlencoded({extended:false})
);


var dburl="mongodb://localhost:27017";
var dbname="shop"

// app.use(cors());
app.get("/total",(req,response)=>{
    console.log("hello");
    mongo.connect(dburl,{ useUnifiedTopology: true },function(err,client){
        if(err){
            throw error;
        }
        var db=client.db(dbname);
        var query={};
    
        db.collection("users").find(query).toArray((err,res)=>{
            response.send(res);
            client.close();
        })
    })
})