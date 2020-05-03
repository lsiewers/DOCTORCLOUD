<?php /* Template Name: Content */ ?>

<?php $menuColor = 'blue'; ?>
<?php include 'core/header.php' ?>

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

<?php include 'core/footer.php' ?>