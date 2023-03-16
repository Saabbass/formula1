<?php

require 'database.php';

// Dit is het startpunt van je applicatie.

echo 'Welkom bij Dé Formule 1 Database';


$sql = "SELECT * FROM drivers ";

$result = mysqli_query($conn, $sql);

$drivers = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
                <th>Referentie</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Geboortedatum</th>
                <th>links</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($drivers as $driver) : ?>
                <tr>
                    <td><?php echo $driver['driverRef']; ?></td>
                    <td><?php echo $driver['forename']; ?></td>
                    <td><?php echo $driver['surname']; ?></td>
                    <td><?php echo $driver['dob']; ?></td>
                    <td><a href="driver-detail.php?id=<?php echo $driver['driverId']; ?>">Geef details</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>