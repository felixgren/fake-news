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

function getArticle(string $link, array $articles): array
{
    foreach ($articles as $article) {
        if ($link === strtolower(str_replace(" ", "-", $article['title']))) {
            return $article;
        }
    }
}

function getSortedArticles(string $category, array $articles): array
{
    //sortByDate($articles);

    //if category === "" IGNORE foreach
    //if category != "" RUN foreach...

    // $category != "" will print error if there is no specified category defined in array     
    // $category === "career" || "technology" || "local" is longer but will handle error..?
    // won't work, $category is simply the variable fetched from the URL.

    if ($category != "") {
        foreach ($articles as $article) {
            if ($category === $article['category']) { // Lacks support for multiple matching articles, 
                return array($article); // Need it as an array so it can loop through the foreach
                //array push till filtereredarray
            }
        }
    }
    return $articles;

    //IN PROGRESS...

    /*
    array_filter($articles, function (array $articles) use ($category): bool {
        if ($category === $articles['category']) {
            return true;
        } else return false;
    });
    return $articles;
    */

    /*
    array_filter($articles, function (array $articles) use ($category): bool {
        foreach ($articles as $article) {
            if ($category === $article['category']) {
                return true;
            }
        }
    });
    return $articles;
    */

    /*
    function callback(array $articles, string $category): bool
    {
        foreach ($articles as $article) {
            if ($category === $article['category']) {
                return true;
            }
        }
    }

    array_filter($articles, "callback");
    return $articles;
    */
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
