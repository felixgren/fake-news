<?php

declare(strict_types=1);

// Create instance of PDO class
$pdo = new PDO('sqlite:./database/fakenews.db');

// Query DB using the query method from the PDO class.
$statement = $pdo->query('SELECT * FROM articles');

// Fetch all rows with the fetchAll method using the PDO constant FETCH_ASSOC to return data
// as an array indexed by DB column name, turning it into an associative array as the one in data_old
$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

// Same but shortened
$authors = $pdo->query('SELECT * FROM authors')->fetchAll(PDO::FETCH_ASSOC);
