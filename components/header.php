<?php
require dirname(__DIR__, 1) . '/core/functions.php';


require dirname(__DIR__, 1) . '/core/data.php';
//require dirname(__DIR__, 1) . '/data_old.php';

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
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Public+Sans:wght@400;600&family=Roboto&family=Syne:wght@400;600;700&display=swap" rel="stylesheet">
</head>