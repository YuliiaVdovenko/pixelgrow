<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<footer class="wrapper-section padding-top padding-bottom dark-back">

	<div class="row flex-wrap">
		
		<div class="col-xl-3 footer-brand pb-5 pb-xl-0">
			<?php if ( ! has_custom_logo() ) { ?>

			<?php if ( is_front_page() && is_home() ) : ?>

				<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

			<?php endif; ?>


			<?php } else {
				the_custom_logo();
			} ?>
			<div class="pt-4 footer-copyright">
				<span> &copy; </span>
				<time datetime="<?php echo date('Y');?>"> <?php echo date('Y');?> </time>
				<?php if (get_theme_mod('copyright')): ?>
					<span class="before"> <?php echo get_theme_mod('copyright'); ?> </span>
				<?php endif; ?>
			</div>
		</div>


		<div class="col-sm-6 col-lg-4 col-xl-3 pb-5 pb-xl-0">
			<address>
				<?php if (get_theme_mod('address_country')): ?>
					<span class="d-block"> <?php echo get_theme_mod('address_country'); ?> </span>
				<?php endif; ?>

				<?php if (get_theme_mod('address_str')): ?>
					<span class="d-block"> <?php echo get_theme_mod('address_str'); ?> </span>
				<?php endif; ?>

				<?php if (get_theme_mod('address_ind')): ?>
					<span class="d-block"><?php echo get_theme_mod('address_ind'); ?></span>
				<?php endif; ?>
			</address>
		</div>

		<div class="col-sm-6 col-lg-4 col-xl-3 pb-5 pb-xl-0">
			<address>
				<?php if (get_theme_mod('address_country_ua')): ?>
					<span class="d-block"> <?php echo get_theme_mod('address_country_ua'); ?></span>
				<?php endif; ?>

				<?php if (get_theme_mod('address_str_ua')): ?>
					<span class="d-block"> <?php echo get_theme_mod('address_str_ua'); ?></span>
				<?php endif; ?>

				<?php if (get_theme_mod('address_ind_ua')): ?>
					<span class="d-block"> <?php echo get_theme_mod('address_ind_ua'); ?></span>
				<?php endif; ?>
			</address>
		</div>


	</footer>

	<?php wp_footer(); ?>

</body>

</html>

