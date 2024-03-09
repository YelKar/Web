<a class="most-recent-post" href="<?= $post["link"] ?>">
  <img class="most-recent-post__image"
       src=".//static/images/page-images/<?= $post["image"] ?>" alt="<?= $post["title"] ?>">
  <div class="most-recent-post__header">
    <h4 class="most-recent-post__title"><?= $post["title"] ?></h4>
    <h5 class="most-recent-post__subtitle">
      <?= $post["subtitle"] ?>
    </h5>
  </div>
  <div class="most-recent-post__info">
    <div class="most-recent-post__author">
      <img class="most-recent-post__author-image" src="/static/images/author-avatars/<?= $post["author"]["image"] ?>"
           alt="<?= $post["author"]["name"] ?>'s avatar">
      <span class="most-recent-post__author-name">
                  <?= $post["author"]["name"] ?>
                </span>
    </div>
    <span class="most-recent-post__date">
                <?= $post["date"] ?>
              </span>
  </div>
</a>