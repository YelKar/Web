<?php

include "globals.php";
global $navbar_buttons;

$theme_buttons = [
    ["text" => "Nature", "link" => "#"],
    ["text" => "Photography", "link" => "#"],
    ["text" => "Relaxation", "link" => "#"],
    ["text" => "Vacation", "link" => "#"],
    ["text" => "Travel", "link" => "#"],
    ["text" => "Adventure", "link" => "#"],
];

$featured_posts = [
    [
        "title" => "The Road Ahead",
        "subtitle" => "The road ahead might be paved - it might not be.",
        "preview" => "the-road-ahead.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => new DateTime("25.09.2015"),
        "link" => "/post",
    ], [
        "title" => "From Top Down",
        "subtitle" => "Once a year, go someplace you’ve never been before.",
        "preview" => "from-top-down.jpeg",
        "author" => [
            "name" => "William Wong",
            "avatar" => "william-wong.jpeg",
        ],
        "date" => new DateTime("25.09.2015"),
        "link" => "#",
    ],
];

$most_recent_posts = [
    [
        "title" => "Still Standing Tall",
        "subtitle" => "Life begins at the end of your comfort zone.",
        "preview" => "still-standing-tall.jpeg",
        "author" => [
            "name" => "William Wong",
            "avatar" => "william-wong.jpeg",
        ],
        "date" => new DateTime("25.09.2015"),
        "link" => "#",
    ], [
        "title" => "Sunny Side Up",
        "subtitle" => "No place is ever as bad as they tell you it’s going to be.",
        "preview" => "sunny-side-up.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => new DateTime("25.09.2015"),
        "link" => "#",
    ], [
        "title" => "Water Falls",
        "subtitle" => "We travel not to escape life, but for life not to escape us.",
        "preview" => "water-falls.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => new DateTime("25.09.2015"),
        "link" => "#",
    ], [
        "title" => "Through the Mist",
        "subtitle" => "Travel makes you see what a tiny place you occupy in the world.",
        "preview" => "through-the-mist.jpeg",
        "author" => [
            "name" => "William Wong",
            "avatar" => "william-wong.jpeg",
        ],
        "date" => new DateTime("25.09.2015"),
        "link" => "#",
    ], [
        "title" => "Awaken Early",
        "subtitle" => "Not all those who wander are lost.",
        "preview" => "awaken-early.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => new DateTime("25.09.2015"),
        "link" => "#",
    ], [
        "title" => "Try it Always",
        "subtitle" => "The world is a book, and those who do not travel read only one page.",
        "preview" => "try-it-always.jpeg",
        "author" => [
            "name" => "Mat Vogels",
            "avatar" => "mat-vogels.jpeg",
        ],
        "date" => new DateTime("25.09.2015"),
        "link" => "#",
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Let's do it together.</title>
  <link rel="stylesheet" href="fonts.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="index.css">
</head>
<body>
<header class="top-panel navbar">
  <nav class="navbar__inner">
    <a href="#">
      <img class="navbar__logo" src="static/images/light-logo.svg" alt="Logo">
    </a>
    <ul class="navbar__button-container">
        <?php foreach ($navbar_buttons as $navbar_button): ?>
          <li class="navbar__button"><a href="<?= $navbar_button['link'] ?>"
                                        class="navbar__link"><?= $navbar_button['text'] ?></a></li>
        <?php endforeach; ?>
    </ul>
  </nav>
  <section class="page-header">
    <h1 class="page-header__title">Let's do it together.</h1>
    <h2 class="page-header__subtitle">We travel the world in search of stories. Come along for the ride.</h2>
    <button class="page-header__button">View Latest Posts</button>
  </section>
</header>
<main>
  <div class="theme-panel">
    <ul class="theme-panel__inner">
        <?php foreach ($theme_buttons as $theme_button): ?>
          <li class="theme-panel__button"><a href="<?= $theme_button["link"] ?>"
                                             class="theme-panel__link"><?= $theme_button["text"] ?></a></li>
        <?php endforeach; ?>
    </ul>
  </div>
  <div class="page-content">
    <section class="featured-posts blog-pages">
      <h4 class="blog-pages__title">Featured Posts</h4>
      <hr class="blog-pages__title-underline">
      <div class="blog-pages__container">
          <?php foreach ($featured_posts as $post):
              include "featured_post.php";
          endforeach; ?>
      </div>
    </section>
    <section class="most-recent-posts blog-pages">
      <h4 class="blog-pages__title">Most Recent</h4>
      <hr class="blog-pages__title-underline">
      <div class="blog-pages__container">
          <?php foreach ($most_recent_posts as $post):
              include "most_recent_post.php";
          endforeach; ?>
      </div>
    </section>
  </div>
</main>
<footer class="bottom-panel navbar">
  <nav class="navbar__inner">
    <a href="#">
      <img class="navbar__logo" src="static/images/light-logo.svg" alt="Logo">
    </a>
    <ul class="navbar__button-container">
        <?php foreach ($navbar_buttons as $navbar_button): ?>
          <li class="navbar__button"><a href="<?= $navbar_button['link'] ?>"
                                        class="navbar__link"><?= $navbar_button['text'] ?></a></li>
        <?php endforeach; ?>
    </ul>
  </nav>
</footer>
</body>
</html>