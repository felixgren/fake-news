<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Public+Sans:wght@400;600&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php foreach (sortByDate($articles) as $article) : ?>

        <?php
        $image = $article['image'];
        $imageAlt = $article['imageAlt'];
        $title = $article['title'];
        $date = strtoupper(dateShortFormat($article['publishedDate']));
        $content = $article['content'];
        $author = getName($article['authorID'], $authors);
        $likes = $article['likes'];
        ?>

        <article>
            <img src="<?= $image ?>" alt="<?= $imageAlt ?>">
            <h2><?= $title ?></h2>
            <p class="published-date"><?= $date ?></p>
            <div class="article-text">
                <?= $content ?>
            </div>
            <p class="author"><?= $author ?></p>
            <p><?= $likes ?></p>
            <a href="/<?= $title ?>">
                <p>Read more</p>
            </a>
        </article>
        <br>

    <?php endforeach ?>
</body>

</html>