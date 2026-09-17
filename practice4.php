<?php
$size = $_POST["size"];

echo "<table border='1'>";

for ($i = 0; $i <= $size; $i++) {
    echo "<tr>";

    for ($j = 0; $j <= $size; $j++) {

        if ($i == 0 && $j == 0) {
            echo "<td></td>";   // top-left empty corner
        }
        else if ($i == 0) {
            echo "<td>$j</td>"; // first row
        }
        else if ($j == 0) {
            echo "<td>$i</td>"; // first column
        }
        else {
            echo "<td>" . ($i * $j) . "</td>"; // multiplication values
        }
    }

    echo "</tr>";
}

echo "</table>";
?>