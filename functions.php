<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

//Loops through $authors array and prints fullName if ID matches AuthorID argument
function getName(int $authorID, array $authors): string
{
    foreach ($authors as $author) {
        if ($authorID === $author['ID']) {
            return $author['fullName'];
        }
    }
}

function sortByDate(array $articlesArray): array
{
    usort($articlesArray, function ($a, $b) {
        return $a['publishedDate'] <=> $b['publishedDate'];
    });
    return $articlesArray;
}

function dateLongFormat(object $DateTime): string
{
    return $DateTime->format('Y-m-d H:i');
}

function dateShortFormat(object $DateTime): string
{
    return $DateTime->format('j F Y');
}
