<?php
    $id = intval($_REQUEST['id']);
     
    include 'conn.php';
     
    $sql = "delete from users where id=$id;";
    $mysqli->query($sql);
    echo json_encode(array('success'=>true));
    $mysqli->close();
?>