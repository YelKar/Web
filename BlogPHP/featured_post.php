<?php
global $post
?>

<a
    class="featured-post"
    style="background-image: url('static/images/page-images/<?= $post["preview"] ?>');"
    href="<?= $post["link"] ?>">
  <h4 class="featured-post__title"><?= $post["title"] ?></h4>
  <h5 class="featured-post__subtitle">
    <?= $post["subtitle"] ?>
  </h5>

  <div class="featured-post__info">
    <div class="featured-post__author">
      <img class="featured-post__author-image" src="static/images/author-avatars/<?= $post["author"]["avatar"] ?>"
           alt="<?= $post["author"]["name"] ?>'s avatar">
      <span class="featured-post__author-name">
        <?= $post["author"]["name"] ?>
      </span>
    </div>
    <span class="featured-post__date">
      <?= $post["date"]->format("F d, Y") ?>
    </span>
  </div>
</a>