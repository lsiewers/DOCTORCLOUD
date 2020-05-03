<?php 
  /* Template Name: Disease detail 
   * Template Post Type: post
   */
?>

<?php $menuColor = 'blue'; ?>
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
      <?php 
        $cats=get_the_category();
        if(get_locale() == 'nl_NL') {
          $text = 'Terug naar overzicht';
        } else if (get_locale() == 'en_GB') {
          $text = 'Back to overview';
        }
        foreach($cats as $cat){
          /*check for category having parent or not except category id=1 which is wordpress default category (Uncategorized)*/
          if($cat->category_parent == 0 && $cat->term_id != 1){
            echo "<a class='button' href='/". $cat->slug ."'>".
            $text ."</a>";
          }
          break;
        }
      ?>
      <a class="button-outline" href="<?= get_bloginfo('wpurl'); ?>/contact">
        <?php
          if(get_locale() == 'nl_NL') {
            echo 'Maak afspraak';
          } else if (get_locale() == 'en_GB') {
            echo 'Make an appointment';
          }
        ?>
      </a>
    </footer>
  </article>
</main>
<?php include 'core/footer.php' ?>