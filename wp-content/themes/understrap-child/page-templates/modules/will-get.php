<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="will-section wrapper-section">
	<div class="<?php echo esc_attr( $container ); ?> padding-bottom padding-top" style="background-image: url('<?= get_sub_field('section_backround_image');?>'); background-size: contain; background-repeat: no-repeat;">

		<div class="col-md-8 col-xl-4 padding-bottom padding-top">
			<?php if( get_sub_field('will_get_section_title') ): ?>
				<h2 class="section-title white-title pb-5"> 
					<?= get_sub_field('will_get_section_title'); ?>
				</h2>
			<?php endif; ?>
			<?php if( get_sub_field('will_get_section_description') ): ?>
				<p class="section-description white-title">
					<?= get_sub_field('will_get_section_description'); ?>
				</p>
			<?php endif; ?>
		</div>

		<ul class="row flex-wrap padding-bottom">
			<?php while (have_rows ('get_list')) : the_row(); ?>
				<li class="col-12 col-sm-6 col-lg-4 column padding-bottom">
					<div class="get-list-item">
						<img src="<?= get_sub_field('get_item_icon');?>" alt="" class="will-get-image">
						<h3 class="section-subtitle"><?= get_sub_field('get_title'); ?></h3>
						<p class="section-p"> <?= get_sub_field('get_description'); ?></p>
					</div>
				</li>
			<?php endwhile;?>
		</ul>
	</div>
</section>