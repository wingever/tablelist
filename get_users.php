<?php
include 'conn.php';

$sql = "select * from users;";
$res = $mysqli->query($sql);
if(!$res){
    die("sql error:/n" . $mysqli->error);
}
$result = array();
while ($row = $res->fetch_assoc()){
    array_push($result,$row);
}
echo json_encode($result);
$res->free();
$mysqli->close();
 
?>
