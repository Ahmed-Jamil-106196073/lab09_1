<?php
include "settings.php";

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT car_id, make, model, price, yom FROM cars";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Used Car Dealership</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Used Car Dealership</h1>
    <table>
        <thead>
            <tr>
                <th>Car ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Price</th>
                <th>Year of Manufacture</th>
            </tr>
        </thead>
        <tbody>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan=\"5\">There are no cars to display.</td></tr>";
}

mysqli_close($conn);
?>
        </tbody>
    </table>
</body>
</html>
