<?php
$most_recent_posts = [
    [
        "id" => 3,
        "title" => "Still Standing Tall",
        "subtitle" => "Life begins at the end of your comfort zone.",
        "preview" => "still-standing-tall.jpeg",
        "author" => [
            "name" => "William Wong",
            "avatar" => "william-wong.jpeg",
        ],
        "date" => 1443139200,
    ], [
        "id" => 4,
        "title" => "Sunny Side Up",
        "subtitle" => "No place is ever as bad as they tell you it’s going to be.",
        "preview" => "sunny-side-up.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => 1443139200,
    ], [
        "id" => 5,
        "title" => "Water Falls",
        "subtitle" => "We travel not to escape life, but for life not to escape us.",
        "preview" => "water-falls.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => 1443139200,
    ], [
        "id" => 6,
        "title" => "Through the Mist",
        "subtitle" => "Travel makes you see what a tiny place you occupy in the world.",
        "preview" => "through-the-mist.jpeg",
        "author" => [
            "name" => "William Wong",
            "avatar" => "william-wong.jpeg",
        ],
        "date" => 1443139200,
    ], [
        "id" => 7,
        "title" => "Awaken Early",
        "subtitle" => "Not all those who wander are lost.",
        "preview" => "awaken-early.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => 1443139200,
    ], [
        "id" => 8,
        "title" => "Try it Always",
        "subtitle" => "The world is a book, and those who do not travel read only one page.",
        "preview" => "try-it-always.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => 1443139200,
    ],
];

header('Content-type: text/javascript');
echo json_encode($most_recent_posts, JSON_PRETTY_PRINT);
