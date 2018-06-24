<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="white-back wrapper-section">
	<div class="<?php echo esc_attr( $container ); ?> padding-bottom padding-top">
		<div class="col-md-6 offset-md-3 px-0 text-center">
				<?php if( get_sub_field('about_title') ): ?>
					<h2 class="section-title"> 
						<?= get_sub_field('about_title'); ?>
					</h2>
				<?php endif; ?>
				<?php if( get_sub_field('about_description') ): ?>
					<p class="section-description">
						<?= get_sub_field('about_description'); ?>
					</p>
				<?php endif; ?>
			

			<video class="w-100 padding-top" controls type="video/mp4"> 
				<source src="wp-content/themes/understrap-child/video/main-video.mp4">
			</video>

			<a href="#" class="d-inline-block team-button padding-top">
				<?= get_sub_field('meet_team_button_label'); ?>
			</a>
		</div>
	</div>
</section>