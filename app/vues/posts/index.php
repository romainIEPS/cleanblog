<?php
/*
  ./app/vues/template/posts/index.php

  Variable disponible:
        - $posts = ARRAY(ARRAY(id, titre, sousTitre, datePublication, texte, user, image, created_at, update_at))
 */
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Textes -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="clearfix">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit placeat repudiandae maiores sequi nemo aliquid libero dolores ab debitis commodi, veniam fuga iste nulla impedit ea nam itaque optio, quibusdam.</p>
        <p>Eveniet optio tempore beatae, nulla voluptatibus repudiandae, rem dolor, sunt neque perferendis pariatur. Placeat nobis explicabo, maxime soluta magnam ullam mollitia voluptatibus, quia in, autem molestias voluptatem ducimus fuga error.</p>
      </div>

      <!-- ADD A POST -->
      <div class="clearfix">
        <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
      </div>

      <!-- POSTS LIST -->
      <div class="post-preview">
        <?php foreach ($posts as $post): ?>
          <a href="posts/<?php echo $post['id']; ?>/<?php echo \slugify($post['titre']); ?>.html">
            <h2 class="post-title">
              <?php echo $post['titre']; ?>
            </h2>
            <h3 class="post-subtitle">
              <?php echo $post['sousTitre']; ?>
            </h3>
          </a>
          <p class="post-meta">Posted On <?php echo date_format(date_create($post['datePublication']), "F j, Y"); ?></p>
          <hr>
        <?php endforeach; ?>
      </div>
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>