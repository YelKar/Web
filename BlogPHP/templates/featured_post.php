<?php
global $post
?>

<a
    class="featured-post"
    style="background-image: url('/static/images/page-previews/<?= $post["preview_url"] ?>');"
    href="/post?id=<?= $post['id'] ?>"
    title="<?= $post["title"] ?>">
  <h4 class="featured-post__title"><?= $post["title"] ?></h4>
  <h5 class="featured-post__subtitle">
    <?= $post["subtitle"] ?>
  </h5>
  <?php if (!empty($post["type"])): ?>
    <span class="featured-post__type"><?= $post["type"] ?></span>
  <?php endif; ?>
  <div class="featured-post__info">
    <div class="featured-post__author">
      <img class="featured-post__author-image" src="/static/images/author-avatars/<?= $post["author_avatar_url"] ?>"
           alt="<?= $post["author"] ?>'s avatar">
      <span class="featured-post__author-name">
        <?= $post["author"] ?>
      </span>
    </div>
    <span class="featured-post__date">
      <?= date("F d, Y", strtotime($post["publish_date"])) ?>
    </span>
  </div>
</a>