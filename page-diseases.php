<?php /* Template Name: Diseases */ ?>

<?php $menuColor = 'blue'; ?>
<?php include 'core/header.php' ?>

<main class='diseases'>
  <article>
    <h1 class='diseases__title'><?= the_title(); ?></h1>
    <ul class="diseases__list">


      <?php 

        global $post;
        if(get_locale() == 'nl_NL') {
          $args = array( 'category_name'=> 'digitale_ziekten',
          'posts_per_page'   => -1);
        }
        else if (get_locale() == 'en_GB') {
          $args = array( 'category_name'=> 'digital_diseases', 
          'posts_per_page'   => -1);
        } 

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <li class="diseases__list__item">

          <article>
            <figure>
              <img class="is--loading" onload="loadImg()" src="<?php echo get_field('disease_image')['url'] ?>" alt="<?php echo get_field('disease_image')['alt'] ?>" />
            </figure>
            <h1><?php echo get_the_title(); ?></h1>
            
            <a href='<?= get_post_permalink(); ?>'>
              <?php
                if (get_locale() == 'nl_NL') {
                    echo 'Meer over ';
                }
                else if (get_locale() == 'en_GB') {
                    echo 'More about ';
                };
                
                echo get_the_title(); ?>
              </a>
          </article>

        </li>

      <?php endforeach; ?>

    </ul>
  </article>
</main>

<?php include 'core/footer.php' ?>