var count=0;
var data={};
var timerVal=true;
const auto = function(e){
    option(e);
    var choosen=e.target.id;
    data['id']=choosen;
    data['val']=1;
}
const ajaxCall=function(val){
    ajx=new XMLHttpRequest();
    ajx.open('post','ajax.php',true);
    ajx.onload=function(){
        if(ajx.status!=200){
            console.log("ERRORS");
        }
        else{
            console.log(this.responseText);
        }
    }
    ajx.setRequestHeader("Content-Type","application/json");
    
    ajx.send(JSON.stringify(val));
}
const getValue=function(){
    var temp=document.getElementsByClassName("button");
    for(i=0;i<temp.length;i++){
        temp[i].addEventListener('click',auto);
    }
}
const incr=function(){
    count++;
    // return true;
}
const decr=()=>{--count;}
const option=function(e){
    setall();
    document.getElementById(e.target.id).style.backgroundColor="rgb(19, 60, 63)";
    
}
const setall=function(){
    var temp=document.getElementsByClassName("button");
    for(i=0;i<temp.length;i++){
        temp[i].style.backgroundColor="rgb(0, 0, 0)";
    }
}
const Next=function(){
    var val=document.getElementById('next');
    val.addEventListener('click',nextBut);
}
const nextBut=()=>{
    timerVal=false;
        incr();
    // if(ajaxCall(data)){
        ajaxCall({'count':count,'val':2});
    };
const Prev=function(){
    var val=document.getElementById('prev');
    val.addEventListener('click',()=>{
        if(decr()){
            console.log("working aahn")
        }
    // if(ajaxCall(data)){
        ajaxCall({'count':count,'val':2});
    });
}
getValue();
Next();
Prev();



const time= function(){
    if(timerVal){
    var str=document.getElementById('count').innerHTML;
    str=parseInt(str);
    str++;
    if(str == 10)
        nextBut();
    else{
        document.getElementById('count').innerHTML=str;
    }
}
}
setInterval(time, 1000);