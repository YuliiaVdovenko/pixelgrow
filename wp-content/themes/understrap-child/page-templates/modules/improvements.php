<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="about-section wrapper-section">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row flex-wrap align-items-center">

			<?php if( get_sub_field('improvements_image') ): ?>
				<div class="col-md-6">
					<img src="<?= get_sub_field('improvements_image'); ?>" alt="">
				</div>
			<?php endif; ?>

			<div class="col-md-6">
				<?php if( get_sub_field('improvements_title') ): ?>
					<h2 class="section-title"> 
						<?= get_sub_field('improvements_title'); ?>
					</h2>
				<?php endif; ?>
				<?php if( get_sub_field('improvements_description') ): ?>
					<p class="section-description pb-5 pb-lg-0">
						<?= get_sub_field('improvements_description'); ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
		<ul class="row flex-wrap padding-bottom">
			<?php while (have_rows ('list')) : the_row(); ?>
				<li class="col-12 col-md-6 col-xl-3 column improvements-item padding-bottom">
					<h3 class="section-subtitle"><?= get_sub_field('powers_title'); ?></h3>
					<p class="section-p"> <?= get_sub_field('powers_description'); ?></p>
				</li>
			<?php endwhile;?>
		</ul>
	</div>
</section>