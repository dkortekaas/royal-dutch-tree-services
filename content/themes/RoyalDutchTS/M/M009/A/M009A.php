<div id="full-width-slider">
<?php include (TEMPLATEPATH . '/O/O001/A/O001A.php'); ?>
    <div class="slider-container">
        <ul class="dots"></ul>
        <ul class="full-width-slides" style="max-height:550px; width: auto; max-width: 100%; overflow: hidden;">
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
         }else {
               $args = array(
                    'posts_per_page' => 5,
                    'post_type' => 'slider',
                    'category_name'=>'default'
                );
            }


            query_posts($args);
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                $sliderImage = get_field('slider_afbeelding');
        ?>
            <li class="slide-container">
                <img src="<?php  echo $sliderImage['url']; ?>" alt="<?php echo $sliderImage['alt']; ?>">

            </li>
            <?php  endwhile; else: ?>
            <p class="slider-error"><?php _e('Sorry, er zijn nog geen slides toegevoegd.'); ?></p>
            <?php  endif;  wp_reset_query();
            ?>
        </ul>
    </div>
</div>