<?php
session_start();
require 'database.php';

// Dit is het startpunt van je applicatie.

$driverid = $_GET['id'];

$sql = "SELECT * FROM drivers WHERE driverId = $driverid";

$result = mysqli_query($conn, $sql);

$driver = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <h1>Overzicht all drivers</h1>
    <table>
        <thead>
            <tr>
                <th>Id-nummer</th>
                <th>Referentie</th>
                <th>Nummer</th>
                <th>Code</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Geboortedatum</th>
                <th>Nationaliteit</th>
                <th>linkjes</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($driver as $info) : ?>
                <tr>
                    <td><?php echo $info['driverId']; ?></td>
                    <td><?php echo $info['driverRef']; ?></td>
                    <td><?php echo $info['number']; ?></td>
                    <td><?php echo $info['code']; ?></td>
                    <td><?php echo $info['forename']; ?></td>
                    <td><?php echo $info['surname']; ?></td>
                    <td><?php echo $info['dob']; ?></td>
                    <td><?php echo $info['nationality']; ?></td>
                    <td><?php echo $info['url']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>