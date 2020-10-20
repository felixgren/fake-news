<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.


$authors = [
    'ID' => 1,
    'FullName' => 'Josef Duck'
];

/*
$articles = [
    [
        'title' => 'The first article',
        'content' => 'Bla bla bla',
        'author' => 'Felixcool123',
        'publishedDate' => '2020-10-20',
        'likes' => 10
    ],
    [
        'title' => 'The second article',
        'content' => 'Bla bla bla',
        'author' => 'Felixcool123',
        'publishedDate' => ['2020-10-20'],
        'likes' => [10, 50, 30, 60]
    ]
];
*/

$articles = [
    'title' => ['The first article', 'The second article']
];

$articles2 = [
    [
        'title' => 'The first article'
    ],
    [
        'title' => 'The second article'
    ]
];

//echo $articles['title'][1];

echo "Forloop: \n";
for ($i = 0; $i < 2; $i++) {
    echo $articles['title'][$i] . "\n";
}

for ($i = 0; $i < 2; $i++) {
    echo $articles2[$i]['title'] . "\n";
}

echo "\nForeach: \n";
foreach ($articles as $article) {
    //echo $articles['title'][$article];
    //this no work 
    print_r($article);
}

foreach ($articles2 as $article) {
    echo $article['title'];
}
