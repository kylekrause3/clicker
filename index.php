<!DOCTYPE html>

<?php
// echo phpinfo();
include 'db_connection.php';
include 'phpfunctions.php';

$conn = OpenCon();

?>

<html>

<head>
    <title> Clicker Game </title>
    <link rel="stylesheet" href="css\styles.css">
    <script type="text/javascript" src="js\main.js"></script>
</head>
<body>
    <p class="centeredText"> Email: kyle@untethered.biz&emsp;<a href="https://untethered.biz/">https://untethered.biz/</a></p>
    <p class="content">MySQL Table:</p>
    <?php
    echo '<div class="content">';
        /*
        COLUMN   DATA TYPE
        id       int
        username varchar(30)
        clicks   int
        */
        displayTable($conn, 'clickerdata');
    echo '</div>';
    CloseCon($conn);
    ?>
    <div class="content centeredText">
        <h1>Clicker Game</h1>
        <button id="mainbutton">start main loop</button>
        <script>mainbutton.addEventListener("click", startloop, false);</script>
        <button id="secondbutton">stop main loop</button>
        <script>secondbutton.addEventListener("click", stoploop, false);</script>
    </div>
</body>
</html>