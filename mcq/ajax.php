
<?php
include 'app.php'; 
if($req=file_get_contents("php://input")){
    $obj=json_decode($req);
    if($obj->val == 1 && isset($obj->id))
    {$choose = $obj->id;
    if($correct == (int)$choose){
        $mark++;
        echo $mark;
    }}
    if($obj->val == 2){
        databaseconnect($obj->count);
    }
    // echo ($obj->count);}
}

?>