<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>

		<!-- FONTS -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php #bloginfo('template_directory'); ?>/fonts/PlantinWebFontsKit/MyFontsWebfontsKit.css"> -->
		<!-- <link type="text/css" rel="stylesheet" href="<?php #bloginfo('template_directory'); ?>/fonts/unionFont/stylesheet.css" charset="utf-8" /> -->
		<!-- web font -->
		<link href="http://webfonts.radimpesko.com/RP-W-53e883b7934c2b1271000005.css" rel="stylesheet" type="text/css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/masonry.pkgd.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/isotope.​pkgd.​min.js"></script>
		

		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/bootstrap-3.3.5-dist/css/bootstrap.min.css">


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> class="container">

<!-- 
		<script>
			$("body").click(function(){
				$("body").toggleClass("inverse");
			});
			$("body").click(function(){
				$("a").toggleClass("invertNav");
			});
		</script> -->


		<section class="site-header-nav">
			<nav class="site-nav">
				<?php
					$args = array(
						/*menu location named PRIMARY within array*/
						'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
		</section>