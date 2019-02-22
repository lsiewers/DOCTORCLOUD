<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"">
	<link rel="stylesheet" href="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/DOCTORCLOUD/style.min.css">
	<link rel="manifest" href="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/DOCTORCLOUD/manifest.json">
	<script src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/DOCTORCLOUD/assets/js/scripts.js"></script>
	<?php
		if (basename(get_permalink()).explode('/').in_array('test')) {
			echo "<script async src='" . get_bloginfo('wpurl') . "/wp-content/themes/DOCTORCLOUD/assets/js/testUI.js'></script>";
		};
		
		if(basename( get_page_template() ) == 'page-content.php'){
			echo "<script async src='" . get_bloginfo('wpurl') . "/wp-content/themes/DOCTORCLOUD/assets/js/content.js'></script>";
		};
	?>
	<link href="https://fonts.googleapis.com/css?family=Biryani:700,900|Raleway:500,700" rel="stylesheet" lazyload>
	<meta http-equiv="Content-Security-Policy" content="style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com data:">

	<?php wp_head(); ?>
</head>

<body class="<?= explode('/', $_SERVER['REQUEST_URI'])[1]; ?>">
<header class="header color--<?php 
				if ($menuColor) { echo $menuColor; }
				else { echo 'white'; }; 
			?>">
	<h1>
		<a class="header__logo color--<?php if ($logoColor) { echo $logoColor; } ?>" href="<?= pll_home_url() ?>">DOCTOR CLOUD</a>
	</h1>

	<nav class="menu header__menu" role="navigation">
		<h1 class="offscreen">Navigation</h1>
		<button 
			class="header__menu__button" 
			onclick="toggleMenu()">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</button>

			<?php
				$currentMenu = 'menu '; 
				wp_nav_menu(array('menu' => 'menu '. strtoupper(pll_current_language())));
				$args = array('hide_current' => 1);
				pll_the_languages($args);
			?>
	</nav>
</header>

<div class="loader">
  <img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/DOCTORCLOUD/assets/img/logo/cloud-kruis.gif" alt="loader">
</div>

