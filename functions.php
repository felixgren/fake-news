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

//Console testing below

function comparatorFunc($a, $b)
{
    if ($a === $b)
        return 0; //keep same priority
    if ($a < $b)
        return -1; //a less than b, moving b up
    else
        return 1; //a is more than b, moving b down
}

//Apparently <=> spaceship operator does this exact thing!!

$arr = [2, 6, 7, 3, 5, 4, 4, 1];
print_r($arr);

usort($arr, "comparatorFunc"); //this sorts all the array values, i need to sort the keys depending on publish date
//that's wrong, this sorts the array values by assigning them new keys

print_r($arr); //successfully sorted 1-7

$multiArr = [
    [
        'name' => "Felix0",
        'ID' => 3
    ],
    [
        'name' => "Felix1",
        'ID' => 2
    ],
    [
        'name' => "Felix2",
        'ID' => 1
    ],
    [
        'name' => "Felix3",
        'ID' => 0
    ]
];

print_r($multiArr);

usort($multiArr, function ($a, $b) { //we can use an anonymous function here, i.e no name for the function
    if ($a['ID'] === $b['ID'])
        return 0; //keep same priority
    if ($a['ID'] < $b['ID'])
        return -1; //a less than b, moving b up
    else
        return 1; //a is more than b, moving b down
});

print_r($multiArr); //usort successfully ordered by ID! :)



$multiArr2 = [
    [
        'name' => "Felix0",
        'ID' => 3
    ],
    [
        'name' => "Felix1",
        'ID' => 2
    ],
    [
        'name' => "Felix2",
        'ID' => 1
    ],
    [
        'name' => "Felix3",
        'ID' => 0
    ]
];

print_r($multiArr2);

usort($multiArr2, function ($a, $b) {
    return $a['ID'] <=> $b['ID']; //this is way shorter
});

print_r($multiArr2);
