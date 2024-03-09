<?php
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
    "image" => "the-road-ahead.jpeg",
    "author" => [
      "name" => "Mat Vogels",
      "image" => "mat-vogels.jpeg",
    ],
    "date" => "9/25/2015",
    "link" => "/post",
  ], [
    "title" => "From Top Down",
    "subtitle" => "Once a year, go someplace you’ve never been before.",
    "image" => "from-top-down.jpeg",
    "author" => [
      "name" => "William Wong",
      "image" => "william-wong.jpeg",
    ],
    "date" => "9/25/2015",
    "link" => "#",
  ],
];

$most_recent_posts = [
  [
    "title" => "Still Standing Tall",
    "subtitle" => "Life begins at the end of your comfort zone.",
    "image" => "still-standing-tall.jpeg",
    "author" => [
      "name" => "William Wong",
      "image" => "william-wong.jpeg",
    ],
    "date" => "9/25/2015",
    "link" => "#",
  ], [
    "title" => "Sunny Side Up",
    "subtitle" => "No place is ever as bad as they tell you it’s going to be.",
    "image" => "sunny-side-up.jpeg",
    "author" => [
      "name" => "Mat Vogels",
      "image" => "mat-vogels.jpeg",
    ],
    "date" => "9/25/2015",
    "link" => "#",
  ], [
    "title" => "Water Falls",
    "subtitle" => "We travel not to escape life, but for life not to escape us.",
    "image" => "water-falls.jpeg",
    "author" => [
      "name" => "Mat Vogels",
      "image" => "mat-vogels.jpeg",
    ],
    "date" => "9/25/2015",
    "link" => "#",
  ], [
    "title" => "Through the Mist",
    "subtitle" => "Travel makes you see what a tiny place you occupy in the world.",
    "image" => "through-the-mist.jpeg",
    "author" => [
      "name" => "William Wong",
      "image" => "william-wong.jpeg",
    ],
    "date" => "9/25/2015",
    "link" => "#",
  ], [
    "title" => "Awaken Early",
    "subtitle" => "Not all those who wander are lost.",
    "image" => "awaken-early.jpeg",
    "author" => [
      "name" => "Mat Vogels",
      "image" => "mat-vogels.jpeg",
    ],
    "date" => "9/25/2015",
    "link" => "#",
  ], [
    "title" => "Try it Always",
    "subtitle" => "The world is a book, and those who do not travel read only one page.",
    "image" => "try-it-always.jpeg",
    "author" => [
      "name" => "Mat Vogels",
      "image" => "mat-vogels.jpeg",
    ],
    "date" => "9/25/2015",
    "link" => "#",
  ],
]

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
      <li class="navbar__button"><a href="#" class="navbar__link">HOME</a></li>
      <li class="navbar__button"><a href="#" class="navbar__link">CATEGORIES</a></li>
      <li class="navbar__button"><a href="#" class="navbar__link">ABOUT</a></li>
      <li class="navbar__button"><a href="#" class="navbar__link">CONTACT</a></li>
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
      <li class="navbar__button"><a href="#" class="navbar__link">HOME</a></li>
      <li class="navbar__button"><a href="#" class="navbar__link">CATEGORIES</a></li>
      <li class="navbar__button"><a href="#" class="navbar__link">ABOUT</a></li>
      <li class="navbar__button"><a href="#" class="navbar__link">CONTACT</a></li>
    </ul>
  </nav>
</footer>
</body>
</html>