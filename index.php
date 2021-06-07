<?php

include "database.php";

$query = "SELECT * FROM walking";
$result = mysqli_query($connect, $query);

echo "
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Walk</th>
                <th>Reverse K</th>
            </tr>
        </thead>

        <tbody>
    ";

while($row = mysqli_fetch_assoc($result)) {
    echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['date'] . "</td>
            <td>" . $row['walk'] . "</td>
            <td>" . $row['revk'] . "</td>
        </tr>
    ";
}

echo "</tbody></table>";