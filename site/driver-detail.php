<?php
session_start();
require 'database.php';

// Dit is het startpunt van je applicatie.

$driverid = $_GET['id'];

$sql = "SELECT * FROM drivers WHERE driverId = $driverid";

$result = mysqli_query($conn, $sql);

// info van de rij ophalen
$driver = mysqli_fetch_assoc($result);

// print_r($driver);
// die;

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
            <tr>
                    <!-- alle informatie tonen -->
                    <?php foreach ($driver as $info) : ?>
                        <td><?php echo $info; ?></td>
                    <?php endforeach; ?>
                
                </tr>
        </tbody>
    </table>
</body>
</html>