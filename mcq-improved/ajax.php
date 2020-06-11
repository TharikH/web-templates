<?php
require_once 'connect.php';
sleep(1);
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
        'correct'=>$row['correct'],
    );
    echo json_encode($book);
}
// var_dump($_POST);

?>