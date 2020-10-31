<?php

require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';
//require __DIR__ . '/data_old.php';

$categoryTest = "";
if (isset($_GET['category'])) {
    $categoryTest = $_GET['category'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News: <?= $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Public+Sans:wght@400;600&family=Roboto&family=Syne:wght@400;600;700&display=swap" rel="stylesheet">
</head>