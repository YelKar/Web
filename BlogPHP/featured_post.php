<a
    class="featured-post"
    style="background-image: url('static/images/page-images/<?= $post["image"] ?>');"
    href="<?= $post["link"] ?>">
  <h4 class="featured-post__title"><?= $post["title"] ?></h4>
  <h5 class="featured-post__subtitle">
    <?= $post["subtitle"] ?>
  </h5>

  <div class="featured-post__info">
    <div class="featured-post__author">
      <img class="featured-post__author-image" src="static/images/author-avatars/<?= $post["author"]["image"] ?>"
           alt="<?= $post["author"]["name"] ?>'s avatar">
      <span class="featured-post__author-name">
        <?= $post["author"]["name"] ?>
      </span>
    </div>
    <span class="featured-post__date">
      <?= $post["date"] ?>
    </span>
  </div>
</a>