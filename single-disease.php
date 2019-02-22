<?php 
  /* Template Name: Disease detail 
   * Template Post Type: post
   */
?>

<?php $logoColor = 'blue'; ?>
<?php include 'core/header.php' ?>

<main>
  <article class="disease-detail">
    <header class="disease-detail__header">
      <div>
        <img class="is--loading" onload="loadImg()" src="<?= get_field('disease_image')['url'] ?>" alt="<?= get_field('disease_image')['alt'] ?>">
        <h1><?= get_the_title(); ?></h1>
      </div>
    <main class="disease-detail__folder">
      <figure><img src="<?= get_field('disease_folder_image')['url'] ?>" alt="<?= get_field('disease_folder_image')['alt'] ?>"></figure>
      <figure><img src="<?= get_field('disease_folder_image')['url'] ?>" alt="<?= get_field('disease_folder_image')['alt'] ?>"></figure>
      <figure><img src="<?= get_field('disease_folder_image')['url'] ?>" alt="<?= get_field('disease_folder_image')['alt'] ?>"></figure>
    </main>
    <footer class="disease-detail__buttons">
      <a class="button" href="<?= get_permalink(); ?>">Back to overview</a>
      <a class="button-outline" href="<?= get_bloginfo('wpurl'); ?>/contact">Make appointment</a>
    </footer>
  </article>
</main>
<?php include 'core/footer.php' ?>