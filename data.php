<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.


$authors = [
    [
        'fullName' => 'Felix'
    ],
    [
        'fullName' => 'Josef'
    ]
];


$articles = [
    [
        'title' => 'The first article',
        'content' => 'Bla bla bla',
        'authorID' => 0,
        'publishedDate' => '2020-10-01',
        'likes' => 10
    ],
    [
        'title' => 'The second article',
        'content' => 'Bla bla bla',
        'authorID' => 0,
        'publishedDate' => '2020-10-02',
        'likes' => 20
    ],
    [
        'title' => 'The third article',
        'content' => 'Bla bla bla',
        'authorID' => 0,
        'publishedDate' => '2020-10-03',
        'likes' => 30
    ],
    [
        'title' => 'The fourth article',
        'content' => 'Bla bla bla',
        'authorID' => 1,
        'publishedDate' => '2020-10-04',
        'likes' => 40
    ],
    [
        'title' => 'The fifth article',
        'content' => 'Bla bla bla',
        'authorID' => 1,
        'publishedDate' => '2020-10-05',
        'likes' => 50
    ],
];

/*
foreach ($articles as $article) {
    echo $article['title'] . "\n";
    echo $article['content'] . "\n";
    echo $article['authorID'] . "\n";
    echo $article['publishedDate'] . "\n";
    echo $article['likes'] . "\n";
}
*/
