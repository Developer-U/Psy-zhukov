<?php
/**
 * The header for our theme
 *
 *
 * @package Blocksy
 */



?><!doctype html>
<html <?php language_attributes(); ?><?php echo blocksy_html_attr() ?>>

<head>
	<?php do_action('blocksy:head:start') ?>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Montserrat:wght@200;300;400;600&family=Poiret+One&display=swap"
		rel="stylesheet">
	<?php wp_head(); ?>
	<?php do_action('blocksy:head:end') ?>
</head>


<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>



	<?php
	$logo_color = get_field('logo_color', 'options');
	$tel = get_field('tel-link', 'options');
	$phone_num = get_field('tel', 'options');

	?>

	<header class="header">
		<div class="container-fluid">
			<div class="header__wrapper d-flex justify-content-between align-items-center">
				<a href="/" class="header__logo">
					<?php
					if ($logo_color) { ?>
						<img src="<?php echo $logo_color['url']; ?>" alt="<?php echo $logo_color['alt']; ?>">
					<?php } ?>
				</a>

				<?php get_template_part('template-parts/nav', 'menu'); ?>

				<?php
				get_template_part('template-parts/social');
				?>
			</div>
		</div>
	</header>