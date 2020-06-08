<?php
session_start();
if(!(isset($_SESSION['usr']))){
    die("Not logged in");
}

?>
<h1>Tracking autos for <?php echo $_SESSION['usr']; ?></h1>
<h3>Automobiles</h3>
<a href="autos.php">add new</a> | <a href="logout.php">logout</a>