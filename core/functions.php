<?php

declare(strict_types=1);

// Loops through $authors array and prints name if ID matches author_id argument
function getName(string $author_id, array $authors): string
{
    foreach ($authors as $author) {
        if ($author_id === $author['id']) {
            return $author['name'];
        }
    }
}

function getArticle(string $link, array $articles): array
{
    foreach ($articles as $article) {
        if ($link === linkFormat($article['title'])) {
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

function dateFormat(string $unixTime, bool $isShort = false): string
{
    $date = new DateTime("@$unixTime");
    return $date = $date->format($isShort ? 'j M H:i' : 'Y-m-d H:i');
}

// Replace incompatible characters and spaces from link
function linkFormat(string $link): string
{
    $formatTable = [' ' => '-', ':' => '-', '’' => '-', ',' => '-', '‘' => '-', 'ä' => 'a', 'å' => 'a', 'ö' => 'o', 'Ä' => 'A', 'Å' => 'A', 'Ö' => 'O'];
    $link = strtolower(str_replace(array_keys($formatTable), array_values($formatTable), $link));
    return $link;
}
