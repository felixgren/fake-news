<?php

declare(strict_types=1);

$image = $article['image'];
$imageAlt = $article['image_alt'];
$title = $article['title'];
$dateLong = strtoupper(dateLongFormat($article['published_date']));
$dateShort = strtoupper(dateShortFormat($article['published_date']));
$content = $article['content'];
$author = getName($article['author_id'], $authors);
$articleCategory = $article['category'];
$likes = $article['likes'];
$link = linkFormat($title);
