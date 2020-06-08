<?php   
require_once 'connect.php';
if(!isset($_SESSION['usr'])){
    die("not logged in");
}
if(isset($_GET['id'])){
    $val=$_GET['id'];
    $sql="select * from autos where auto_id=:id";
    $stm=$pdo->prepare($sql);
    $stm->execute(array(
        ":id"=>$val
    ));
    $row=$stm->fetch(PDO::FETCH_ASSOC);
    if($row == false){
        $_SESSION["error"]="no such id";
        header('Location:autos.php');
        return;
    }
}

if(isset($_POST['id'])){
    $sql="delete from autos where auto_id=:id";
    $stm=$pdo->prepare($sql);
    $stm->execute(array(
        ":id"=>$val
    ));
    $_SESSION['success']="Deleted successfully";
    header('Location:autos.php');
    return;
}

?>
<p>are you sure you wanna delete?</p>
<form method="post">
    <?="<input type='hidden' name='id' value".$val.">";?>
    <input type="submit" value="delete" class="point">
</form>
<a href="autos.php">cancel</a>
