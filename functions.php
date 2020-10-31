<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

//Loops through $authors array and prints name if ID matches Author_ID argument
function getName(int $author_id, array $authors)
{
    foreach ($authors as $author) {
        if ($author_id === intval($author['id'])) { // DB fetch converts all ints to strings so intval is required to convert back to int
            return $author['name'];
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
    sortByDate($articles);

    if ($category != "") {
        $filteredArray = array_filter($articles, function (array $articles) use ($category): bool {
            return ($category === $articles['category']) ? true : false;
        });
        return $filteredArray;
    }
    return $articles;
}

function sortByDate(array $articlesArray): array
{
    usort($articlesArray, function ($a, $b) {
        return $a['published_date'] <=> $b['published_date'];
    });
    return $articlesArray;
}

function dateLongFormat(object $DateTime): string
{
    return $DateTime->format('Y-m-d H:i');
}

function dateShortFormat(int $unixTime): string
{
    $date = new DateTime("@$unixTime");
    return $date->format('Y-m-d H:i');
}
