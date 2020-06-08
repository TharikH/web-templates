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
function insertAuto($m,$y,$mil,$pdo){
    $sql="insert into autos (make , year, mileage) values (:m,:y,:mil)";
    $stm=$pdo->prepare($sql);
    $stm->execute(array(
        ':m'=>$m,
        ':y'=>$y,
        ':mil'=>$mil
    ));
    return true;
}
?>
<h1>Tracking autos for <?php echo $_SESSION['usr']; ?></h1>
<p style="color: red;">
<?php
if(isset($_POST['submit'])){
    if($_POST['submit']=="logout"){
        header('Location:/view.php');
        exit();
    }
    $make=$_POST['make'];
    $year=$_POST['year'];
    $mil=$_POST['mileage'];
    if(valid($make,$year,$mil)){
        if(insertAuto($make,$year,$mil,$pdo)){
            $_SESSION['msg']="<span style='color: green';> data inserted succesfully</span>";
        }
    }
    header("Location:autos.php");
    return;

}
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
</p>
<form method="post" style="margin-left: 20px;">

<input type="text" placeholder="make" size="60" name="make"><br>
<input type="text" placeholder="year" size="20" name="year"><br>
<input type="text" placeholder="mileage" size="20" name="mileage"><br>
<input type="submit" name="submit" value="add" id="" class="point">
<input type="submit" name="submit" value="logout" id="" class="point">
</form>

<h3>Automobiles</h3>
<?php
$query="select * from autos";
$res=$pdo->query($query);
echo "<ul>";
while($row=$res->fetch(PDO::FETCH_ASSOC)){
    echo "<li>".$row['year']." ".$row['make']." / ".$row['mileage']."</li>";
}
echo "</ul>";

?>