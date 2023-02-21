<?php
$host = 'db';
$user = 'gerson';
$pass = 'hprf35';
$db = 'bd-01';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Connected to MySQL successfully!";
mysqli_close($conn);
?>