<?php

include __DIR__ . "/util/globals.php";
require_once __DIR__ . "/database.php";
global $navbar_buttons;

$theme_buttons = [
    ["text" => "Nature", "link" => "#"],
    ["text" => "Photography", "link" => "#"],
    ["text" => "Relaxation", "link" => "#"],
    ["text" => "Vacation", "link" => "#"],
    ["text" => "Travel", "link" => "#"],
    ["text" => "Adventure", "link" => "#"],
];

$conn = connectDatabase();
$featured_posts = getPostsPreviews($conn, 1);

$most_recent_posts = getPostsPreviews($conn, 0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Escape </title>
  <link rel="stylesheet" href="/static/css/fonts.css">
  <link rel="stylesheet" href="/static/css/style.css">
  <link rel="stylesheet" href="/static/css/home.css">
  <link rel="icon" href="/static/images/favicon.ico">
</head>
<body>
<header class="top-panel navbar">
  <nav class="navbar__inner">
    <a href="#">
      <img class="navbar__logo" src="/static/images/light-logo.svg" alt="Logo">
    </a>
    <ul class="navbar__button-container">
        <?php foreach ($navbar_buttons as $navbar_button): ?>
          <li class="navbar__button">
            <a href="<?= $navbar_button['link'] ?>" class="navbar__link">
                <?= $navbar_button['text'] ?>
            </a>
          </li>
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
          <li class="theme-panel__button">
            <a href="<?= $theme_button["link"] ?>" class="theme-panel__link">
                <?= $theme_button["text"] ?>
            </a>
          </li>
        <?php endforeach; ?>
    </ul>
  </div>
  <div class="page-content">
    <section class="featured-posts blog-pages">
      <h4 class="blog-pages__title">Featured Posts</h4>
      <hr class="blog-pages__title-underline">
      <div class="blog-pages__container">
          <?php foreach ($featured_posts as $post):
              include "templates/featured_post.php";
          endforeach; ?>
      </div>
    </section>
    <section class="most-recent-posts blog-pages">
      <h4 class="blog-pages__title">Most Recent</h4>
      <hr class="blog-pages__title-underline">
      <div class="blog-pages__container">
          <?php foreach ($most_recent_posts as $post):
              include "templates/most_recent_post.php";
          endforeach; ?>
      </div>
    </section>
  </div>
</main>
<footer class="bottom-panel navbar">
  <nav class="navbar__inner">
    <a href="#">
      <img class="navbar__logo" src="/static/images/light-logo.svg" alt="Logo">
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