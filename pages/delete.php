<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require __DIR__ . "/../Database/Connection.php";


$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo $user["name"] . "<br>";
}
?>