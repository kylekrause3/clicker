<?php
function OpenCon(){
    $server = 'localhost';
    $username = 'root';
    $password = 'P@55word';

    // Create connection
    $conn = new mysqli($server, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
<<<<<<< HEAD
    }
=======
    }6
>>>>>>> cf6e17c6e67517c31f69a9d79818da3b9d7d0421
 
    return $conn;
}
 
function CloseCon($conn){
    $conn -> close();
}
?>