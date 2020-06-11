<?php
require_once 'connect.php';
sleep(1);
$arr=array();
$mark=0;
if(isset($_POST['name'])){
    $count=$_POST['name'];
    $sql="select * from questions where number=:count";
    $stm=$pdo->prepare($sql);
    $stm->execute(array(
        ":count"=>$count
    ));
    $row=$stm->fetch(PDO::FETCH_ASSOC);
    $book=array(
        'question'=>$row['question'],
        'option1'=>$row['option1'],
        'option2'=>$row['option2'],
        'option3'=>$row['option3'],
        'option4'=>$row['option4'],
    );
    echo json_encode($book);
}
if(isset($_POST['arr'])){
    $sql="select number,correct from questions";
    $stm=$pdo->query($sql);
    while($row=$stm->fetch(PDO::FETCH_ASSOC)){
        $arr[$row['number']]=$row['correct'];
    }
    $temp=$_POST['arr'];
    for($i=1;$i<4;$i++){
        if($temp[$i] == $arr[$i]){
            $mark++;
        }
    }
    echo $mark;
}
// var_dump($_POST);

?>