<?php

declare(strict_types=1);

$image = $article['image'];
$imageAlt = $article['image_alt'];
$title = $article['title'];
$date = strtoupper(dateShortFormat($article['published_date']));
$content = $article['content'];
$author = getName($article['author_id'], $authors);
$likes = $article['likes'];
$link = strtolower(str_replace(" ", "-", $title));
