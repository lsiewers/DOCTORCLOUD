<?php /* Template Name: Front page */ ?>

<?php $logoColor = 'white'; $menuColor = 'white'?>
<?php include 'core/header.php' ?>

<main class="home">
  <article>
  <header class="home__header">
    <figure class="home__header__background">
      <img class="is--loading" onload="loadImg()" src="<?= get_field('homepage_header_image')['url']; ?>" alt="<?= get_field('homepage_header_image')['alt']; ?>">
    </figure>

    <div class="home__header__content">
      <h1><?= get_field('homepage_header_title'); ?></h1>
      <h3><?= get_field('homepage_header_subtitle'); ?></h3>

      <a 
        class="start-test" 
        href="<?php the_permalink() ?><?= get_field('homepage_header_test-button')['url'] ?>"
        target="<?php get_field('homepage_header_test-button')['target'] ? get_field('homepage_header_test-button')['target'] : 'self';?>"  
      >
        <?= get_field('homepage_header_test-button')['title'] ?>
      </a>
    </div>
  </header>

    
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
      $link = get_sub_field('article_link');
      $youtube = get_sub_field('article_videoBtn');
      $bg_color = get_sub_field('article_bg_color');

      if($title && $text):

      include 'content-article.php';

    endif;
    endwhile;
    endif;
    endfor;
    ?>

  <footer class="home__contact">
    <a class="button-outline" href="/contact-<?= pll_current_language() ?>">
      <?php 
        if (get_locale() == 'en_GB') {
          echo 'Make an appointment';
        } else if (get_locale() == 'nl_NL') {
          echo 'Maak een afspraak';
        }
      ?>
    </a>
  </footer>
  </article>
</main>

<?php include 'core/footer.php' ?>