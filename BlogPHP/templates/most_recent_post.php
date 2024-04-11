<?php
global $post
?>

<a class="most-recent-post" href="/post?id=<?= $post["id"] ?>" title="<?= $post["title"] ?>">
  <img class="most-recent-post__image"
       src="<?= $post["preview_url"] ?>" alt="<?= $post["title"] ?>">
  <div class="most-recent-post__header">
    <h4 class="most-recent-post__title"><?= $post["title"] ?></h4>
    <h5 class="most-recent-post__subtitle">
      <?= $post["subtitle"] ?>
    </h5>
  </div>
  <div class="most-recent-post__info">
    <div class="most-recent-post__author">
      <img class="most-recent-post__author-image" src="<?= $post["author_avatar_url"] ?>"
           alt="<?= $post["author"] ?>'s avatar">
      <span class="most-recent-post__author-name">
        <?= $post["author"] ?>
      </span>
    </div>
    <span class="most-recent-post__date">
      <?= date("n/d/Y", strtotime($post["publish_date"])) ?>
    </span>
  </div>
</a>