<?php  
session_start();
$pdo =new PDO('mysql:host=localhost;port=3306;dbname=demo','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>
<style>
    .point{
        cursor: pointer;
    }
</style>