<?php /* Template Name: Content */ ?>

<?php $menuColor = 'blue'; ?>
<?php include 'core/header.php' ?>

<<<<<<< HEAD
<main class="content-container">
  <h1 class="offscreen"><?= the_title(); ?></h1>

  <?php

    for ($i=0; $i < 4; $i++):
      $rows = 'article_' . $i;
      // check if the repeater field has rows of data
      if( have_rows($rows) ):

      // loop through the rows of data
      while ( have_rows($rows) ) : the_row();

      $img = get_sub_field('article_image');
      $video = get_sub_field('article_video');
      $title = get_sub_field('article_title');
      $text = get_sub_field('article_text');
      $youtube = get_sub_field('article_videoBtn');
      $link = get_sub_field('article_link');
      $bg_color = get_sub_field('article_bg_color');

      if($title && $text):

      include 'content-article.php';

    endif;
    endwhile;
    endif;
    endfor;
  ?>
</main>

=======
<main>
  <article>
    <h1 class="offscreen"><?= the_title(); ?></h1>
    <?php

      for ($i=0; $i < 4; $i++):
        $rows = 'article_' . $i;
        // check if the repeater field has rows of data
        if( have_rows($rows) ):

        // loop through the rows of data
        while ( have_rows($rows) ) : the_row();

        $img = get_sub_field('article_image');
        $title = get_sub_field('article_title');
        $text = get_sub_field('article_text');
        $link = get_sub_field('article_link');
        $videoBtn = get_sub_field('article_videoBtn');

          if($img && $title && $text):
    ?>

      <article class="content__article">
        <figure>
          <img src="<?= $img ?>" alt="<?= $title ?>">
        </figure>
        <div class="content__article__text">
          <h1><?= $title ?></h1>
          <p><?= $text ?></p>
          <?php if($link): ?>
            <a
              class="button-outline" 
              href="<?= $link['url'] ?>"
              target="<?= $link['target'] ? $link['target'] : 'self';?>"  
            >
              <?= $link['title'] ?>
            </a>
          <?php endif; ?>
          
          <!-- youtube link -->
          <?php if($videoBtn): ?>
            <button
              class="button-outline" 
              onclick="playVideo('<?= $videoBtn['url'] ?>')"
            >
              <?= $videoBtn['title'] ?>
            </button>
          <?php endif; ?>
          
        </div>
      </article>

    <?php
      endif;
      endwhile;
      endif;
      endfor;
    ?>
    </article>
</main>

<iframe class="modal-video" src="" frameborder="0" rel="0">
</iframe>
<button onclick="closeModal()">
  <div class="line"></div>
  <div class="line"></div>
</button>

>>>>>>> b25c3fab13219953bab46cdfa0090007470eb4d2
<?php include 'core/footer.php' ?>