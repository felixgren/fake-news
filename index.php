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
</head>

<body>
    <?php foreach ($articles as $article) : ?>
        <article>
            <p><?= $article['title'] ?></p>
            <p><?= $article['content'] ?></p>
            <p><?= $article['authorID'] ?></p>
            <p><?= $authors[$article['authorID']]['fullName'] ?></p>
        </article>
    <?php endforeach ?>
</body>

</html>