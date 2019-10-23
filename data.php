<?php

declare(strict_types=1);

require __DIR__.'/functions.php';

$authors = [
    [
        'id' => 1,
        'name' => 'Karl-Gunnar Gren'
    ],
    [
        'id' => 2,
        'name' => 'Steffan Pärsson'
    ],
    [
        'id' => 3,
        'name' => 'Maria Erlandsson'
    ],
    [
        'id' => 4,
        'name' => 'Vasilios Bartziokas'
    ],
    [
        'id' => 5,
        'name' => 'Moa Strandberg'
    ]
];



$posts = [
    [
        'title' => 'The ugly truth about ice cream',
        'image' => 'img1.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[0]['name'],
        'date' => '2019-10-23',
        'likes' => '38'
    ],
    [
        'title' => 'Running is bad for your body',
        'image' => 'img2.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[1]['name'],
        'date' => '2019-10-22',
        'likes' => '201'
    ],
    [
        'title' => 'How to become a better partner',
        'image' => 'img3.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[2]['name'],
        'date' => '2019-10-05',
        'likes' => '11'
    ],
    [
        'title' => 'Trump wants to become the prime minister of Sweden',
        'image' => 'img4.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[3]['name'],
        'date' => '2019-10-15',
        'likes' => '5'
    ],
    [
        'title' => 'Why you should watch more TV',
        'image' => 'img5.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[4]['name'],
        'date' => '2019-10-17',
        'likes' => '877'
    ],
    [
        'title' => 'Elephants escaped from the zoo',
        'image' => 'img6.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[0]['name'],
        'date' => '2019-10-16',
        'likes' => '43'
    ],
    [
        'title' => 'David Letterman does come back at the Tonight Show',
        'image' => 'img7.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[1]['name'],
        'date' => '2019-10-01',
        'likes' => '34'
    ],
    [
        'title' => 'Peanuts is actually a fruit',
        'image' => 'img8.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[2]['name'],
        'date' => '2019-10-14',
        'likes' => '23'
    ],
    [
        'title' => 'The meaning of everything',
        'image' => 'img9.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[3]['name'],
        'date' => '2019-09-12',
        'likes' => '24'
    ],
    [
        'title' => 'McDonalds stops selling meat',
        'image' => 'img10.jpg',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?',
        'author' => $authors[4]['name'],
        'date' => '2019-08-25',
        'likes' => '68'
    ],
];


