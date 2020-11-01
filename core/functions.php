<?php

declare(strict_types=1);

// Loops through $authors array and prints name if ID matches author_id argument
function getName(string $author_id, array $authors): string
{
    foreach ($authors as $author) {
        if ($author_id === $author['id']) { // DB fetch converts all ints to strings so intval is required to convert back to int
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

// Not used yet
function dateLongFormat(object $DateTime): string
{
    return $DateTime->format('Y-m-d H:i');
}

function dateShortFormat(string $unixTime): string
{
    $date = new DateTime("@$unixTime");
    return $date->format('Y-m-d H:i');
}
