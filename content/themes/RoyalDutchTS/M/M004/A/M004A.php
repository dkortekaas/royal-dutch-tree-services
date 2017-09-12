<div id="M004A" class="graybg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 M004A_widget1">
        <a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/M/M004/A/img/M004A_logo.png" alt="Royal Dutch Tree Services" width="201" height="133"/></a>
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-1')) : else :   endif; ?>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 M004A_widget1">
      <!-- <h4 class="red">ISA Certified Arborist</h4> -->
      <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-2')) : else :   endif; ?>
       <?php
      $titlewidget = get_field("footer_widget_title", widget_acf_widget_4);
      if( !empty($titlewidget) ): ?>
        <span class="footer-header"><?php echo $titlewidget; ?></span>
      <?php endif; ?>

      <?php
      $image = get_field("footer_logo_links", widget_acf_widget_4);
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  M004A_widget2">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-3')) : else :   endif;
           ?>
           <div class="M004A_recentposts">
            <span class="footer-header">Arborist Blog</span>
                <?php
                $type = 'blog';
                $args = array (
                 'post_type' => $type,
                 'post_status' => 'publish',
                 'paged' => $paged,
                 'posts_per_page' => 6
                );
                $temp = $wp_query; // assign ordinal query to temp variable for later use
                $wp_query = null;
                $wp_query = new WP_Query($args);
                if ( $wp_query->have_posts() ) :
                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                     <a class="M004A_blogcontent white" href="<?php the_permalink(); ?>">
                       <?php  the_field('blog_title'); ?>
                      </a>
                <?php  endwhile;   endif; $wp_query = $temp; ?>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 M004A_widget4">
        <span class="footer-header">Contact</span>
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-4')) : else :   endif; ?>
        <?php get_template_part( 'menu', 'social' ); ?>
      </div>
    </div>
  </div>
</div>