<?php

include "database.php";

echo "Connected...";
echo "<br>";

$name = "Jonny";

$query = "SELECT * FROM walking";
$result = mysqli_query($connect, $query);

echo "
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Walked</th>
            </tr>
        </thead>

        <tbody>
    ";

while($row = mysqli_fetch_assoc($result)) {
    echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['date'] . "</td>
            <td>" . $row['walked'] . "</td>
        </tr>
    ";
}

echo "</tbody></table>";