<?php
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel </title>
  <link rel="stylesheet" href="/static/css/fonts.css">
  <link rel="stylesheet" href="/static/css/style.css">
  <link rel="stylesheet" href="/static/css/admin.css">
  <link rel="icon" href="/static/images/favicon.ico">
</head>
<body>
<header class="top-panel navbar">
  <nav class="navbar__inner">
    <a href="#">
      <img class="navbar__logo" src="/static/images/admin-logo.svg" alt="Logo">
    </a>
    <ul class="navbar__button-container">
      <li class="navbar__button">
        <a href="#" class="navbar__link">

        </a>
      </li>
    </ul>
  </nav>
</header>
<main>
  <form action="" class="post-form">
    <div class="heading">
      <h1 class="title">New Post</h1>
      <h2 class="subtitle">Fill out the form bellow and publish your article</h2>
    </div>
    <section class="fields-group">
      <h3 class="fields-group__title">Main Information</h3>
      <div class="fields-group__inputs">
        <label for="title" class="field__label">Title</label>
        <input placeholder="" type="text" class="field" id="title">

        <label for="short-description" class="field__label">Short description</label>
        <input placeholder="" type="text" class="field" id="short-description">

        <label for="author-name" class="field__label">Author name</label>
        <input placeholder="" type="text" class="field" id="author-name">

        <label for="author-avatar" class="field__label">Author Photo</label>
        <input placeholder="" type="file" class="field file-input" id="author-avatar" accept="image/png, image/jpg, image/gif">
        <label for="author-avatar" class="file-input__button">
          <span>Upload</span>
        </label>
        <div class="file-input__loaded-buttons">
          <label for="author-avatar" class="file-input__button file-input__loaded-button">Upload New</label>
          <button class="file-input__remove-button file-input__loaded-button">Remove</button>
        </div>

        <label for="publish-date" class="field__label">Publish Date</label>
        <input placeholder="dd/mm/yyyy" type="date" required class="field" id="publish-date">

        <label for="page-image" class="field__label">Hero Image</label>
        <input placeholder="" type="file" class="field file-input" id="page-image" accept="image/png, image/jpg, image/gif">
        <label for="page-image" class="file-input__button">
          <img src="/static/images/camera.svg" alt=""><span>Upload</span>
        </label>
        <div class="file-input__loaded-buttons">
          <label for="author-avatar" class="file-input__button file-input__loaded-button">Upload New</label>
          <button class="file-input__remove-button file-input__loaded-button">Remove</button>
        </div>
        <label for="page-image" class="field__label_under">Size up to 10mb. Format: png, jpeg, gif.</label>

        <label for="page-preview" class="field__label">Hero Image</label>
        <input placeholder="" type="file" class="field file-input" id="page-preview" accept="image/png, image/jpg, image/gif">
        <label for="page-preview" class="file-input__button">
          <img src="/static/images/camera.svg" alt=""><span>Upload</span>
        </label>
        <div class="file-input__loaded-buttons">
          <label for="author-avatar" class="file-input__button file-input__loaded-button">Upload New</label>
          <button class="file-input__remove-button file-input__loaded-button">Remove</button>
        </div>
        <label for="page-preview" class="field__label_under">Size up to 5mb. Format: png, jpeg, gif.</label>
      </div>
      <div class="fields-group__previews">
        <div class="preview-elt__label">Article preview</div>
        <div class="preview-elt">
          <div class="page-demo">
            <div class="page-demo__top-panel"></div>
            <div class="page-demo__heading">
              <h3 class="page-demo__title">New Post</h3>
              <h4 class="page-demo__subtitle">Please, enter any description</h4>
            </div>
            <div class="page-demo__image"></div>
          </div>
        </div>

        <div class="preview-elt__label">Post card preview</div>
        <div class="preview-elt">
          <div class="preview-demo">
            <div class="preview-demo__image"></div>
            <div class="preview-demo__heading">
              <h3 class="preview-demo__title">New Post</h3>
              <h4 class="preview-demo__subtitle">Please, enter any description</h4>
            </div>
            <div class="preview-demo__info">
              <div class="preview-demo__author">
                <div class="preview-demo__author-avatar"></div>
                <span class="preview-demo__author-name">Enter author name</span>
              </div>
              <span class="preview-demo__publish-date"><?= (new DateTimeImmutable()) -> format("n/j/Y") ?></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="fields-group">
      <h3 class="fields-group__title">Content</h3>

      <label for="content" class="field__label">Post content (plain text)</label>
      <textarea name="content" class="content-field" id="content" placeholder="Type anything you want ..."></textarea>
    </section>
  </form>
</main>
<script src="/static/js/admin.js"></script>
</body>
</html>
