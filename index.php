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
        $link = strtolower(str_replace(" ", "-", $title));
        ?>

        <article>
            <img src="<?= $image ?>" alt="<?= $imageAlt ?>">
            <h2><?= $title ?></h2>
            <p class="published-date"><?= $date ?></p>
            <div class="article-text">
                <?= $content ?>
            </div>
            <footer>
                <div class="likes">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="30" height="26" viewBox="0 0 48 48">
                        <path fill="#F44336" d="M34 9c-4.2 0-7.9 2.1-10 5.4C21.9 11.1 18.2 9 14 9C7.4 9 2 14.4 2 21c0 11.9 22 24 22 24s22-12 22-24c0-6.6-5.4-12-12-12z" /></svg>
                    <p><?= $likes ?></p>
                </div>
                <a class="read-more" href="/article.php?magic=<?= $link ?>">
                    <p>Read more</p>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="30" height="30" viewBox="0 0 16 16">
                        <g fill="#000">
                            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                        </g>
                    </svg>
                </a>
            </footer>
            <hr />
        </article>

    <?php endforeach ?>
</body>

</html>