<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.


$authors = [
    [
        'fullName' => 'Felix',
        'ID' => 1
    ],
    [
        'fullName' => 'Josef',
        'ID' => 2
    ]
];

$articles = [
    [
        'image' => 'https://i.kinja-img.com/gawker-media/image/upload/c_scale,f_auto,fl_progressive,pg_1,q_80,w_800/rxqv0gtluylqsy5ckqka.jpg',
        'imageAlt' => 'Neurosurgeon staring into the camera',
        'title' => 'The first article',
        'content' => 'Bla bla bla',
        'authorID' => 1,
        'publishedDate' => new DateTime('@1601562060'), //UNIX time stamp
        'likes' => 10
    ],
    [
        'image' => 'https://i.kinja-img.com/gawker-media/image/upload/c_scale,f_auto,fl_progressive,pg_1,q_80,w_800/o1mvoz4e4vlucohbor8z.jpg',
        'imageAlt' => 'A photoshopped pine tree on the surface of the moon with earth visible in the background',
        'title' => 'The second article',
        'content' => 'Bla bla bla',
        'authorID' => 1,
        'publishedDate' => new DateTime('@1601596800'),
        'likes' => 20
    ],
    [
        'image' => 'https://media3.giphy.com/media/ACVoiOEjbA6nC/giphy.gif',
        'imageAlt' => 'Cat dancing',
        'title' => 'The third article',
        'content' => 'Bla bla bla',
        'authorID' => 1,
        'publishedDate' => new DateTime('@1601683200'),
        'likes' => 30
    ],
    [
        'image' => 'https://media3.giphy.com/media/ACVoiOEjbA6nC/giphy.gif',
        'imageAlt' => 'Cat dancing',
        'title' => 'The fourth article',
        'content' => 'Bla bla bla',
        'authorID' => 2,
        'publishedDate' => new DateTime('@1601769600'),
        'likes' => 40
    ],
    [
        'image' => 'https://media3.giphy.com/media/ACVoiOEjbA6nC/giphy.gif',
        'imageAlt' => 'Cat dancing',
        'title' => 'The fifth article',
        'content' => 'Bla bla bla',
        'authorID' => 2,
        'publishedDate' => new DateTime('@1601856000'),
        'likes' => 50
    ],
];
