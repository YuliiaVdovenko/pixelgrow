<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="about-section wrapper-section padding-bottom padding-top">

		<?php if( get_sub_field('customers_list_title') ): ?>
			<h2 class="section-subtitle text-center pb-5"> 
				<?= get_sub_field('customers_list_title'); ?>
			</h2>
		<?php endif; ?>

		<?php
		$args = array(
			'post_type' => 'brands',
		);
		$brands = new WP_Query($args);
		$array_rev = array_reverse($brands->posts);
		$brands->posts = $array_rev;
		if ( $brands->have_posts() ) { ?>
		<ul class="d-flex flex-wrap align-items-center justify-content-around">
			<?php
			while ( $brands->have_posts() ) {
				$brands->the_post();
				?>
				<li class="p-5">
					<a class="" href="<?= get_permalink();?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</li>

				<?php
			}
			?>

		</ul>
		<?php
	}
	wp_reset_query();
	wp_reset_postdata();
	?>


</section>