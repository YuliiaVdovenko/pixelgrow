<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="light-back wrapper-section">
	<div class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap align-items-center">
		<?php if( get_sub_field('way_image') ): ?>
			<div class="col-md-6 way-image">
				<img src="<?= get_sub_field('way_image'); ?>" alt="">
			</div>
		<?php endif; ?>

		<div class="col-md-6">
			<?php if( get_sub_field('way_section_title') ): ?>
				<h2 class="section-title"> 
					<?= get_sub_field('way_section_title'); ?>
				</h2>
			<?php endif; ?>
			<?php if( get_sub_field('way_section_description') ): ?>
				<p class="section-description">
					<?= get_sub_field('way_section_description'); ?>
				</p>
			<?php endif; ?>
		</div>

		<?php if( get_sub_field('on-boarding_process') ): ?>
			<p class="on-boarding-process m-auto py-5">
				<?= get_sub_field('on-boarding_process'); ?>
			</p>
		<?php endif; ?>
	</div>
</section>

<section class="wrapper-section process-section">
	<ul class="row flex-wrapjustify-content-between">
		<?php while (have_rows ('process_list')) : the_row(); ?>
			<li class="col-md-6 col-lg-3 px-0 px-xl-4 column process-item text-center">
				<img src="<?= get_sub_field('process_image');?>" alt="" class="process-icon">
				<h3 class="section-subtitle process-name pb-5"><?= get_sub_field('process_title'); ?></h3>
				<div class="process-description"> <?= get_sub_field('process_description'); ?></div>
			</li>
		<?php endwhile;?>
	</ul>

</section>