var express = require('express')
var app = express()
// var cors=require("cors");
// app.cors();
port=5001;
// respond with "hello world" when a GET request is made to the homepage
app.get('/', function (req, res) {
  res.send('hello world')
})

app.listen(
    port,()=>console.log("backend run")
);
app.post('/data', function (req, res) {
    console.log(res)
  })