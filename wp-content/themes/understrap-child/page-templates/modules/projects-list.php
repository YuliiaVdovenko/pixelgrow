<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="dark-back wrapper-section">
	<div class="<?php echo esc_attr( $container ); ?> padding-top">
		<?php if( get_sub_field('cases_section_title') ): ?>
			<h2 class="section-title white-title"> 
				<?= get_sub_field('cases_section_title'); ?>
			</h2>
		<?php endif; ?>
		<?php if( get_sub_field('cases_section_subtitle') ): ?>
			<p class="section-description white-title padding-bottom">
				<?= get_sub_field('cases_section_subtitle'); ?>
			</p>
		<?php endif; ?>
		

		<div class="row align-items-center">
			<?php
			$args = array(
				'post_type' => 'projects',
				'posts_per_page' => 2,
			);
			$projects = new WP_Query($args);
			if ( $projects->have_posts() ) { ?>
			<ul class="col-xl-10 d-flex flex-wrap padding-bottom">
				<?php
				while ( $projects->have_posts() ) {
					$projects->the_post(); ?>
					<li class="col-md-6 projects-item pb-5 pb-md-0">
						<a class="d-block projects-link" href="<?= get_permalink();?>">
							<?php the_post_thumbnail('large'); ?>
						</a>
						<h3 class="section-subtitle white-title py-4">
							<?php the_title();?>
						</h3>
						<div class="excerpt">
							<?php the_excerpt();?>
						</div>
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


		<a href="<?php echo get_post_type_archive_link('projects'); ?>" class="all-projects col-xl-2 pb-5 pb-xl-0">
			<?= get_sub_field('button_label'); ?>
		</a>
	</div>
</div>


</section>


