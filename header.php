<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=311641142285753";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<?php do_action( 'foundationpress_after_body' ); ?>

	<div id="header">
		<div class="row rel">
			<div class="small-12 columns">
				<figure class="float-left logo">
					<a href="<?php echo home_url(); ?>" title="Página principal">
						<img src="<?php echo get_assets_directory() . 'logo.png'; ?>" alt="">
					</a>
				</figure>

				<nav id="main-menu" class="float-right">
					<ul class="menu">
						<li class="current">
							<a href="#" title="">Início</a>
						</li>

						<li>
							<a href="#" title="">Galeria</a>
						</li>

						<li>
							<a href="#" title="">Sobre a empresa</a>
						</li>

						<li>
							<a href="#" title="">Contato</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' ); ?>
