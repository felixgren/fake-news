<?php

require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

$link = $_GET['magic'];

$article = getArticle($link, $articles);

print_r($article);
