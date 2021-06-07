<?php

include "database.php";

$query = "SELECT * FROM walking ORDER BY date ASC";
$result = mysqli_query($connect, $query);

// Convert BOOLEAN to SYMBOL
function convBool($boolean) {
    if($boolean == 1) {
        $symbol = 'X';
    } else {
        $symbol = 'O';
    }

    return $symbol;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">

    <title>Tracker</title>
</head>

<body>
    <table id="tracker">
        <thead>
            <tr>
                <th>Date</th>
                <th>Walk</th>
                <th>Reverse K</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo "
                    <tr>
                        <td>" . $row['date'] . "</td>
                        <td>" . convBool($row['walk']) . "</td>
                        <td>" . convBool($row['revk']) . "</td>
                    </tr>
                ";
            }
            ?>
        </tbody>
    </table>
</body>

</html>