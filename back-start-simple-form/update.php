<?php 
require_once 'connect.php'; 

if(!isset($_SESSION['usr'])){
    die("not logged in");
}
function valid($m, $y ,$mi)
{
    if ($m == "" or $y == "" or $mi=="") {
        $_SESSION['msg']= "values shouldnt be empty";
        return false;
    } else if (!(is_numeric($mi) && is_numeric($y))){
        $_SESSION['msg']="mileage and year should be numeric";
        return false;
    } else {
        return true;
    }
}
function updateAuto($m,$y,$mil,$pdo,$val){
    $sql="update autos set make=:m , year=:y, mileage=:mil where auto_id=:id";
    $stm=$pdo->prepare($sql);
    $stm->execute(array(
        ':m'=>$m,
        ':y'=>$y,
        ':mil'=>$mil,
        ':id'=>$val
    ));
    return true;
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
    else{
        $make=$row['make'];
        $year=$row['year'];
        $mil=$row['mileage'];
    }
}


?>
<h1>UPDATE</h1>
<p style="color: red;">
<?php
if(isset($_POST['submit'])){
    if($_POST['submit']=="back"){
        header('Location:/autos.php');
        exit();
    }
    $make=$_POST['make'];
    $year=$_POST['year'];
    $mil=$_POST['mileage'];
    if(valid($make,$year,$mil)){
        if(updateAuto($make,$year,$mil,$pdo,$val)){
            $_SESSION['success']="data update succesfully";
            header("Location:autos.php");
            return;
        }
    }
    header("Location:add.php");
    return;

}
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
</p>
<form method="post" style="margin-left: 20px;">

<input type="text" placeholder="make" size="60" name="make" value=<?php echo "$make";?>><br>
<input type="text" placeholder="year" size="20" name="year" value=<?php echo "$year";?>><br>
<input type="text" placeholder="mileage" size="20" name="mileage" value=<?php echo "$mil";?>><br>
<input type="submit" name="submit" value="add" id="" class="point">
<input type="submit" name="submit" value="back" id="" class="point">
</form>