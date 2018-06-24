<?php
$container = get_theme_mod('understrap_container_type'); ?>

<section class="white-back wrapper-section padding-top padding-bottom">
  <div class="<?php echo esc_attr( $container ); ?> col-md-6 offset-md-3">
    <?php if( get_sub_field('clients_section_title') ): ?>
      <h2 class="section-title text-center"> 
        <?= get_sub_field('clients_section_title'); ?>
      </h2>
    <?php endif; ?>

    <?php
    $args = array(
      'post_type' => 'clients',
      'posts_per_page' => 3,
    );
    $clients = new WP_Query($args);
    if ( $clients->have_posts() ) { ?>
    <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
      <ol class="carousel-indicators home-indicators">
        <?php
        $active = 'active';
        $num = 0;
        while ( $clients->have_posts() ) : $clients->the_post(); ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $num ?>" class="<?php echo $active ?>"></li>
        <?php
        $active = '';
        $num +=1;
        endwhile; ?>
      </ol>

      <div class="carousel-inner" role="listbox">
        <?php
        $active = 'active';
        while ( $clients->have_posts() ) : $clients->the_post(); ?>
        <div class="carousel-item m-auto <?php echo $active ?>">
          <ul class="slider-list">
            <li class="slider-item">
              <div class="clients-says py-3 text-center">
                <?php the_excerpt(); ?>
              </div>
              <div class="row justify-content-center pt-5 padding-bottom">
                <div class="clients-photo">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="pl-3">
                  <h4 class="client-name"><?php the_title();?></h4>
                  <h5 class="client-position"> <?php the_field ('clients_position');?></h5>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <?php $active = '';?>
      <?php endwhile; ?>
    </div>
    <?php
  } else {
  }
  wp_reset_query();
  wp_reset_postdata();
  ?>
</div>

</div>
</section>