<?php
require dirname(__DIR__, 1) . '/core/functions.php';
require dirname(__DIR__, 1) . '/core/data.php';

$activeCategory = "";
if (isset($_GET['category'])) {
    $activeCategory = $_GET['category'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News</title>
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/fade.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/fonts.css">
</head>