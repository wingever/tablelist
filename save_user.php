<?php
    include 'conn.php';

    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    
    $sql = "insert into users(firstname,lastname,phone,email) values('$firstname','$lastname','$phone','$email');";
    mysqli_query($mysqli,$sql);
    echo json_encode(array( 
        'id' => mysqli_insert_id($mysqli),  
        'firstname' => $firstname,  
        'lastname' => $lastname,  
        'phone' => $phone,  
        'email' => $email  
    ));  
    $mysqli->close();
?>
