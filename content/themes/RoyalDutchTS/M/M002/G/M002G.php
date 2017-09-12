 <div id="M002G">
    <div class="M002G_slider">
        <ul class="M002G_slides" style="width:100%; overflow: hidden;">
  <?php
        $paged = $wp_query->get( 'paged' );

        if ( is_page( 'tree-health' ) )
        {
            $args = array(
                'posts_per_page' => 5,
                'post_type' => 'slider',
                'category_name'=>'treehealth'
            );
        }
        elseif ( is_page( 'tree-support' ))  {
             $args = array(
                'posts_per_page' => 5,
                'post_type' => 'slider',
                'category_name'=>'treesupport'
            );
         }
         elseif ( is_page( 'tree-pruning' ))  {
             $args = array(
                'posts_per_page' => 5,
                'post_type' => 'slider',
                'category_name'=>'treepruning'
            );
         }
         elseif ( is_page( 'tree-removal' ))  {
             $args = array(
                'posts_per_page' => 5,
                'post_type' => 'slider',
                'category_name'=>'treeremoval'
            );
         }else{

         }

            query_posts($args);
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                $sliderImage = get_field('slider_afbeelding');
            ?>
            <li class="M002G_slide">
              <img src="<?php  echo $sliderImage['url']; ?>" alt="<?php echo $sliderImage['alt']; ?>">
            </li>
            <?php  endwhile; else: ?>
            <p class="M002G_error"><?php _e('Sorry, there are no slides yet.'); ?></p>
            <?php  endif;  wp_reset_query();
            ?>
        </ul>
    </div>
</div>