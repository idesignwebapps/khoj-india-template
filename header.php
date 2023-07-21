<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- header START -->
	<header>
		<h1><?php bloginfo('name'); ?></a></h1>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/khoj-logo-7.png" alt="khoj india logo">
		</div>
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