const express=require("express");
const mongoclient=require("mongodb").MongoClient;
var app=express();
var bodyParser=require("body-parser");


app.listen(8000);
app.use(
    bodyParser.urlencoded({extended:false})
);
var url="/login"
const conn="mongodb://localhost:27017/";
app.post(
    url,(req,response)=>{
        mongoclient.connect(conn,{ useUnifiedTopology: true },(err,client)=>{
            if(err){
                throw error;
            }
            var db=client.db("users");
            var query={name:req.body.name};
            console.log(query);
            db.collection("details").find(query).toArray((err,res)=>{
                response.send(res);
            client.close();
            })
            
            
        });
    }
);







