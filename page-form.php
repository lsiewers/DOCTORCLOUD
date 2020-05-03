<?php /* Template Name: Form */ ?>

<<<<<<< HEAD
<?php $logoColor = 'white'; $menuColor = 'blue'?>
=======
<?php $menuColor = 'blue'?>
>>>>>>> b25c3fab13219953bab46cdfa0090007470eb4d2
<?php include 'core/header.php' ?>


<main class="contact">
  <header class="contact__header">
    <figure class="contact__header__background">
      <img class="is--loading" onload="loadImg()" src="<?= get_field('header_image')['url']; ?>" alt="<?= get_field('header_image')['alt'] ?>">
    </figure>

    <div class="contact__header__content">
      <h1>Contact</h1>
    </div>
  </header>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php do_shortcode( the_content() );?>

  <?php endwhile; endif; ?>
</main>

<?php include 'core/footer.php' ?>