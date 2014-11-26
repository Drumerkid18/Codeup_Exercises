<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'pages' => 310,
        'author' => array(
            'first' => 'J.',
            'middle' => 'R. R. ',
            'last' => 'Tolkien'
        )
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'pages' => 835,
        'author' => array(
            'first' => 'George',
            'middle'=> 'R. R. ',
            'last' => 'Martin'
        )
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'pages' => 220,
        'author' => array(
            'first' => 'J. D.',
            'middle' => '',
            'last' => 'Salinger'
        )
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'pages' => 544,
        'author' => array(
            'first' => 'Charles',
            'middle' => '',
            'last' => 'Dickens'
        )
    )
);


foreach ($books as $title => $book){
    echo "Title: $title" . PHP_EOL;
    echo "Published: {$book['published']}" . PHP_EOL;
    echo "Pages: {$book['pages']}" . PHP_EOL;

    if (is_array($book)){
            echo "Author: {$book['author']['first']} ";
            echo "{$book['author']['middle']}";
            echo "{$book['author']['last']}" . PHP_EOL;

    }
}