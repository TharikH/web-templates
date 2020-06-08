<?php 
require_once 'connect.php';
function valid($nam,$pass){
    if($nam == "" or $pass == ""){
        $_SESSION['msg']="email and password shouldnt be empty";
        return false;
    }
    else if(!filter_var($nam,FILTER_VALIDATE_EMAIL)){
        $_SESSION['msg']="email not valid";
        return false;
    }
    else{
        return true;
    }
}
function validDB($nam,$pass,$pdo){
    $sql="select * from user where email=:email";
    $stm=$pdo->prepare($sql);
    $stm->execute(array(
        ":email"=>$nam
    ));
    $row=$stm->fetch(PDO::FETCH_ASSOC);
    // var_dump($row);
    if($row == false){
        $_SESSION['msg']= "not a valid user";
        return false;
    }
    else{
    $val=$row['password'];
    if(!password_verify($pass,$val)){
        $_SESSION['msg']="Password wrong";
        return false;
    }
    else{
        return true;
    }
    }
}
?>

<h2>Please Log in</h2>
<p style="color: red;">
<?php 
if(isset($_POST['submit'])){
    if($_POST['submit'] == 'cancel'){
        header("Location: /index.php");
        exit();
    }
    else if($_POST['submit'] == 'submit'){
        $email=$_POST['name'];
        $pass=$_POST['pass'];
        if(valid($email,$pass)){
            if(validDB($email,$pass,$pdo)){
                $_SESSION['usr']=$email;
                // $_SESSION['msg']="Successfully entered";
                header("Location: autos.php");
                return;
            }
        }
    }
    header("Location:login.php");
    return;
}
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}


?>

</p>
<form method="post">
    <input type="text" name="name" id="" placeholder="email"><br>
    <input type="password" name="pass" id="" placeholder="password"><br>
    <input type="submit" name="submit" value="submit" class="point">
    <input type="submit" name="submit" value="cancel" class="point">
</form>
<p>
    For a password hint, view source and find a password hint in the HTML comments.
    </p>