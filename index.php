
<<<<<<< HEAD
=======
<?php $logoColor = 'white'; ?>
>>>>>>> b25c3fab13219953bab46cdfa0090007470eb4d2
<?php include 'core/header.php' ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content();?>

<?php endwhile; endif; ?>

<?php include 'core/footer.php' ?>