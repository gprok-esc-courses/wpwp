<?php

$dbuser = 'test';
$dbpass = 'test';

$pdo = new PDO('mysql:host=localhost;dbname=wpwp', $dbuser, $dbpass);

$result = $pdo->query('SELECT * FROM products');
foreach ($result as $row) {
    echo "<li>".$row['description']." - ".$row['price']."</li>";
}

$pdo = null;

?>