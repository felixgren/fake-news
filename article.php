<?php

require __DIR__ . '/head.php';

$link = $_GET['magic'];
$article = getArticle($link, $articles);
require __DIR__ . '/variables.php';
?>

<body>
    <header>
        <?php require __DIR__ . '/navbar.php'; ?>
    </header>

    <article class="article-page">
        <img src="<?= $image ?>" alt="<?= $imageAlt ?>">
        <h2><?= $title ?></h2>
        <p class="published-date"><?= $date ?></p>
        <div class="article-text">
            <?= $content ?>
        </div>
        <div class="likes-article">
            <p><?= $likes ?></p>
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="30" height="26" viewBox="0 0 48 48">
                <path fill="#F44336" d="M34 9c-4.2 0-7.9 2.1-10 5.4C21.9 11.1 18.2 9 14 9C7.4 9 2 14.4 2 21c0 11.9 22 24 22 24s22-12 22-24c0-6.6-5.4-12-12-12z" /></svg>
        </div>
        <hr class="hr-space" />
        <footer>
            <div>
                <div class=author>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="24px" height="24px" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5l8-5v10zm-8-7L4 6h16l-8 5z" fill="#000" /></svg>
                    <p><?= $author ?></p>
                </div>
                <div>
                    <p class="published-date-article">Published <?= $date ?></p>
                </div>
            </div>

            <a class="read-more" href="/">
                <p>Go back</p>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="30" height="30" viewBox="0 0 16 16">
                    <g fill="#000">
                        <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
                    </g>
                </svg>
            </a>
        </footer>

    </article>
    <?php require __DIR__ . '/footer.php'; ?>