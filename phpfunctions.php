<?php
    // doesn't work rn, fix after getting ajax requests working
    function updateTable($conn, $table, $name1, $val1, $name2, $val2){
        $q = "UPDATE ".$table." SET ".$name1." = $val1 WHERE ".$name2." = $val2;";
        $conn->query($q);
    }

    function getColumnNames($conn, $table){
        $q = 'DESCRIBE '.$table.';';
        $result = $conn->query($q);

        $column_names = array();
        while($row = $result->fetch_assoc()){
            array_push($column_names, $row['Field']);
        }

        return $column_names;
    }

    function displayTable($conn, $table){
        $q = "SELECT * FROM ".$table.";";
        $result = $conn->query($q);

        echo "<table>";

        echo "<tr>";

        $columnnames = getColumnNames($conn, $table);
        foreach($columnnames as $columnname){
            echo '<th>'.$columnname.'</th>';
        }

        echo "</tr>";
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr>";

                foreach($columnnames as $columnname){
                    echo '<td>'.$row[$columnname].'</td>';
                }

                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

        echo "</table>";
    }
?>