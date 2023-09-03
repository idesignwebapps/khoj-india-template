<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-MDCFMN317L"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-MDCFMN317L');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- header START -->
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<a href="<?php echo get_home_url(); ?>" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/khoj-full-logo-main-ver2.png" alt="khoj india logo">
		</a>
		<!-- main nav -->
		<input type="checkbox" id="nav-toggle" class="nav-toggle">
		<nav class="sitenav" role="navigation">
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'menu_class'     => 'nav-menu',
			)); ?>
		</nav>
		<label for="nav-toggle" class="nav-toggle-label"><span></span></label>
	</header>