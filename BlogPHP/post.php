<?php
global $navbar_buttons;
include_once __DIR__ . "/util/globals.php";
require_once __DIR__ . "/database.php";

$post_id = (int) $_GET['id'];

$connection = connectDatabase();
$post = getPostContent($connection, $post_id);

if ($post === null) {
    header('Location: ' . '/');
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $post["title"] ?></title>
  <link rel="stylesheet" href="static/css/fonts.css">
  <link rel="stylesheet" href="static/css/style.css">
  <link rel="stylesheet" href="static/css/post.css">
  <link rel="icon" href="/static/images/favicon.ico">
</head>
<body>
<header class="top-panel navbar">
  <nav class="navbar__inner">
    <a href="/">
      <img class="navbar__logo" src="static/images/dark-logo.svg" alt="Logo">
    </a>
    <ul class="navbar__button-container">
      <?php foreach ($navbar_buttons as $navbar_button): ?>
        <li class="navbar__button"><a href="<?= $navbar_button['link'] ?>" class="navbar__link"><?= $navbar_button['text'] ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>
<main>
  <section class="page-header">
    <h1 class="page-header__title"><?= $post["title"] ?></h1>
    <h2 class="page-header__subtitle"><?= $post["subtitle"] ?></h2>
  </section>
  <img
      src="/static/images/page-images/<?= $post["image_url"] ?>"
      class="page-image"
      alt="<?= $post["title"] ?> image"
  >
  <div class="page-content">
    <?= $post["content"] ?>
  </div>
</main>
<footer class="bottom-panel navbar">
  <nav class="navbar__inner">
    <a href="/">
      <img class="navbar__logo" src="static/images/light-logo.svg" alt="Logo">
    </a>
    <ul class="navbar__button-container">
      <?php foreach ($navbar_buttons as $navbar_button): ?>
      <li class="navbar__button"><a href="<?= $navbar_button['link'] ?>" class="navbar__link"><?= $navbar_button['text'] ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
</footer>
</body>
</html>