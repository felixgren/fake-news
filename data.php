<?php

declare(strict_types=1);

require __DIR__ . '/data_old.php';

// Create instance of PDO class
$pdo = new PDO('sqlite:./database/fakenews.db');

// Query DB using the query method from the PDO class.
$statement = $pdo->query('SELECT * FROM articles');

// Fetch all rows with the fetchAll method using the PDO constant FETCH_ASSOC to return data
// as an array indexed by DB column name, effectively turning it into an associative array.
$articlesDB = $statement->fetchAll(PDO::FETCH_ASSOC);

print_r($articlesDB[1]);

echo "Normal array below... \n";

print_r($articles[1]);
