<?php
require_once 'connect.php';

function valid($nam, $pass)
{
    if ($nam == "" or $pass == "") {
        echo "email and password shouldnt be empty";
        return false;
    } else if (!filter_var($nam, FILTER_VALIDATE_EMAIL)) {
        // !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $nam)
        echo "email not valid";
        return false;
    } else {
        return true;
    }
}
function  insertData($email, $pass,$pdo)
{
    var_dump($pdo);
    echo "<br>===<br>";
    $val = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (email, password) VALUES (:email, :pass)";
    $stm=$pdo->prepare($sql);
    var_dump($stm);
    echo "<br>".$val."<br>".$email."<br>";
    $stm->execute(array(
        ':email' => $email ,
        ':pass' => $val
    ));
    return true;
}

?>


<h2>Please sign up</h2>
<p style="color: red;">
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == 'cancel') {
            header("Location: /index.php");
            exit();
        } else if ($_POST['submit'] == 'submit') {
            $email = $_POST['name'];
            $pass = $_POST['pass'];
            if (valid($email, $pass)) {
                insertData($email, $pass, $pdo);
                header('Location:login.php');
            }
        }
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