<?php 
require_once 'connect.php';
session_start();

if(isset($_POST['count'])){
    $temp=$_POST['count'];
    $count=($temp+1)*6;
    $start=$temp*6;
    $query="select * from news order by newsid desc limit :start,:count";
    $stm=$pdo->prepare($query);
    $stm->bindValue(':start',$start,PDO::PARAM_INT);
    $stm->bindValue(':count',$count,PDO::PARAM_INT);
    $stm->execute();
    $res=$stm->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
}

?>