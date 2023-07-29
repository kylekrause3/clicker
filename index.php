<!DOCTYPE html>

<?php
// echo phpinfo();
include 'db_connection.php';

$conn = OpenCon();

?>

<html>

<head>
    <link rel="stylesheet" href="css\styles.css">
    <script type="text/javascript" src="js\main.js"></script>
</head>
<body>
    <p class="content">MySQL Table:</p>
    <?php
    echo '<div class="content mysqltable">';
        $q = "SELECT * FROM clickerdata;";
        $result = $conn->query($q);

        echo "<table>";

        echo "<tr> <th>id</th> <th>username</th> </tr>";
        
        if ($result->num_rows > 0) {
            echo "<tr>";
            while($row = $result->fetch_assoc()){
                echo "<td>" . $row["id"]. "</td><td>" . $row["username"]. "</td>";
            }
            echo "</tr>";
        } else {
            echo "0 results";
        }

        echo "</table>";
        
        CloseCon($conn);
    echo '</div>';
    ?>
    <div class="content centeredText">
        <h1>Clicker Game</h1>
        <button onclick="addone()">Click Me</button>
    </div>
</body>
</html>