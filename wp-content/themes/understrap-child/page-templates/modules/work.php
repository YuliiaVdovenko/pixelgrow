<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="light-back wrapper-section">
	<div class="<?php echo esc_attr( $container ); ?> padding-bottom padding-top">

		<div class="row flex-wrap align-items-center">
			<div class="col-md-6 padding-bottom padding-top">
				<?php if( get_sub_field('work_together_title') ): ?>
					<h2 class="section-title pb-5"> 
						<?= get_sub_field('work_together_title'); ?>
					</h2>
				<?php endif; ?>
				<?php if( get_sub_field('work_together_subtitle') ): ?>
					<p class="section-description">
						<?= get_sub_field('work_together_subtitle'); ?>
					</p>
				<?php endif; ?>
				<div class="pt-5">
					<?php echo do_shortcode('[contact-form-7 id="147" title="Contact form 1"]'); ?>
				</div>
			</div>

			<?php if( get_sub_field('work_together_image') ): ?>
				<div class="col-md-6">
					<img src="<?= get_sub_field('work_together_image'); ?>" alt="">
				</div>
			<?php endif; ?>
		</div>

	</div>
</section>