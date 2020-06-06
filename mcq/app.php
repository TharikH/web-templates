<?php
session_start();
$con=new mysqli("localhost","root","","mcq") or die("COnnection failed");
$mark=0;
$question="d";
$option1="1";
$option2="2";
$option3="3";
$option4="4";
$correct=1;
// $con=new mysqli("localhost","root","","mcq") or die("COnnection failed");
//     $query="select * from questions where number=".$num;
//     $res=$con->query($query);
//     if($res==false){
//         die("error");
//     }
//     $row=$res->fetch_array();
//     $question =$row['question'];
//     $option1=$row['option1'];
//     $option2=$row['option2'];
//     $option3=$row['option3'];
//     $option4=$row['option4'];

//     $correct=$row['correct'];
function databaseconnect($count){
    // $con=new mysqli("localhost","root","","mcq") or die("COnnection failed");
    $query="select * from questions where number=".$count;
    $res=$GLOBALS['con']->query($query);
    if($res==false){
        die("error");
    }
    $row=$res->fetch_array();
    $GLOBALS['question'] =$row['question'];
    $GLOBALS['option1']=$row['option1'];
    $GLOBALS['option2']=$row['option2'];
    $GLOBALS['option3']=$row['option3'];
    $GLOBALS['option4']=$row['option4'];

    $GLOBALS['correct']=$row['correct'];
}
echo $correct;

// header("Content-Type: application/json; charset=UTF-8");


?>