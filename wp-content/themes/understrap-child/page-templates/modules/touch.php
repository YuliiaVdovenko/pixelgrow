<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="primary-back wrapper-section padding-bottom padding-top">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row flex-wrap align-items-center">

			<?php if( get_sub_field('get_image') ): ?>
				<div class="col-md-6 get-image">
					<img src="<?= get_sub_field('get_image'); ?>" alt="">
				</div>
			<?php endif; ?>

			<div class="col-md-6 pt-5 pt-md-0">
				<?php if( get_sub_field('get_in_touch_text') ): ?>
					<p class="get-text">
						<?= get_sub_field('get_in_touch_text'); ?>
					</p>
				<?php endif; ?>
				<?php if( get_sub_field('get_section_title') ): ?>
					<h2 class="get-title"> 
						<?= get_sub_field('get_section_title'); ?>
					</h2>
				<?php endif; ?>
			</div>
			
		</div>
		
	</div>
</section>