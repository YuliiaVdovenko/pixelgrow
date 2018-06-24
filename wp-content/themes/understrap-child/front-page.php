<?php
/**
 * The template for displaying front-page.
 *
 * @package understrap
 */
?>

<?php get_header();

$container = get_theme_mod( 'understrap_container_type' );?>

<?php if( have_rows('front_sections') ):
    while ( have_rows('front_sections') ) : the_row();
        if( get_row_layout() == 'welcome_section' ): ?>

    <div class="<?php echo esc_attr( $container ); ?> d-flex flex-wrap align-items-center pb-5">

        <div class="col-md-6 px-0">
            <?php if( get_sub_field('welcome_section_title') ): ?>
                <h1 class="welcome-title"> 
                    <?php the_sub_field('welcome_section_title'); ?>
                </h1>
            <?php endif; ?>
            <?php if( get_sub_field('welcome_section_description') ): ?>
                <p class="section-description welcome-description padding-top padding-bottom">
                    <?php the_sub_field('welcome_section_description'); ?>
                </p>
            <?php endif; ?>
        </div>

        <?php if( get_sub_field('welcome_section_back_image') ): ?>
            <div class="col-md-6">
                <img src="<?php the_sub_field('welcome_section_back_image'); ?>">
            </div>
        <?php endif; ?>
    </div>

    <div class="d-flex flex-wrap justify-content-between py-5 align-items-center border-top">
       <?php if( get_sub_field('additional_text_load') ): ?>
        <a href="#" class="add-text pb-3 pb-xl-0" >
            <?php the_sub_field('additional_text_load'); ?>
        </a>
    <?php endif; ?>

    <?php
    $args = array(
        'post_type' => 'brands',
        'posts_per_page' => 5,
    );
    $brands = new WP_Query($args);
    $array_rev = array_reverse($brands->posts);
    $brands->posts = $array_rev;
    if ( $brands->have_posts() ) { ?>
    <ul class="d-flex flex-wrap align-items-center justify-content-center justify-content-xl-between">
        <?php
        while ( $brands->have_posts() ) {
            $brands->the_post();
            ?>
            <li class="px-4 py-3 py-xl-0">
                <a class="clients-link" href="<?= get_permalink();?>">
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

</div>
</section>
    <?php endif;
        endwhile;
            endif; ?>

<?php
while (have_rows ('other_sections')) :the_row ();
    switch (get_row_layout()) {
        case 'improvements_section' :
        get_template_part ('page-templates/modules/improvements');
        break;
        case 'help_section' :
        get_template_part ('page-templates/modules/help');
        break;
        case 'cases_section' :
        get_template_part ('page-templates/modules/projects-list');
        break;
        case 'clients_section' :
        get_template_part ('page-templates/modules/clients');
        break;
        case 'get_in_touch_section' :
        get_template_part ('page-templates/modules/touch');
        break;
        case 'about_section' :
        get_template_part ('page-templates/modules/about');
        break;
        case 'way_section' :
        get_template_part ('page-templates/modules/way');
        break;
        case 'will_get_section' :
        get_template_part ('page-templates/modules/will-get');
        break;
        case 'customers_section' :
        get_template_part ('page-templates/modules/customers');
        break;
        case 'work_together_section' :
        get_template_part ('page-templates/modules/work');
        break;
        default: break;
    }
    endwhile; ?>



    <?php get_footer(); ?>