
<?php

include 'connect.php';

if(!(isset($_SESSION['usr']))){
    die("Not logged in");
}

echo "<h3>Automobiles</h3>";
$query="select * from autos";
$res=$pdo->query($query);
echo "<p style='color:green'>";
if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
echo "</p><p style='color:red'>";
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
</p>
<table style="border:2px black solid">
    <thead>
        <tr>
            <th>id</th>
            <th>make</th>
            <th>year</th>
            <th>mileage</th>
            <th>actions</th>
        </tr>
    </thead>
<?php

while($row=$res->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>".htmlentities($row['auto_id'])."</td><td>".htmlentities($row['make'])."</td><td>".htmlentities($row['year'])."</td><td>".htmlentities($row['mileage'])."</td>";
    echo "<td><a href='update.php?id=".$row['auto_id']."'>update</a> / <a href='delete.php?id=".$row['auto_id']."'>delete</a>";
}

?>
</table>
<hr>
<p>
<a href="add.php">add new</a>?
<a href="logout.php"><button class="point">logout</button></a>
</p>