
<div id="full-width-slider">
<?php include (TEMPLATEPATH . '/O/O001/A/O001A.php'); ?>
    <div class="slider-container">
        <ul class="dots"></ul>
        <ul class="full-width-slides" style="max-height:500px; width:100%; overflow: hidden;">
        <?php
              $args = array(
                'posts_per_page' => 5,
                'post_type' => 'slider',
                'category_name'=>'default'
            );

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