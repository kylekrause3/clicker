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
    }

    $conn->query("USE clicker;");
 
    return $conn;
}
 
function CloseCon($conn){
    $conn -> close();
}
?>