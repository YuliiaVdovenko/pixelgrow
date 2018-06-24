<?php
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="light-back wrapper-section">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row flex-wrap align-items-center">
			
			<div class="col-md-6">
				<?php if( get_sub_field('help_section_title') ): ?>
					<h2 class="section-title pt-5 pt-md-0"> 
						<?= get_sub_field('help_section_title'); ?>
					</h2>
				<?php endif; ?>
				<?php if( get_sub_field('help_section_description') ): ?>
					<p class="section-description">
						<?= get_sub_field('help_section_description'); ?>
					</p>
				<?php endif; ?>
			</div>

			<?php if( get_sub_field('help_imge') ): ?>
				<div class="col-md-6">
					<img src="<?= get_sub_field('help_imge'); ?>" alt="">
				</div>
			<?php endif; ?>
			
		</div>
		<ul class="row flex-wrap pb-5">
			<?php while (have_rows ('help_list')) : the_row(); ?>
				<li class="col-12 col-md-4 column help-list padding-bottom">
					<div class="help-item">
					<h3 class="section-subtitle"><?= get_sub_field('help_list_title'); ?></h3>
					<p class="section-p"> <?= get_sub_field('help_list_description'); ?></p>
				</div>
				</li>
			<?php endwhile;?>
		</ul>
	</div>
</section>