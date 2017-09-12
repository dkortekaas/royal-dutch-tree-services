<div id="M013A" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <?php
        $type = 'blog';
        $args = array (
         'post_type' => $type,
         'post_status' => 'publish',
         'paged' => $paged,
         'posts_per_page' => 10
        );
        $temp = $wp_query; // assign ordinal query to temp variable for later use
        $wp_query = null;
        $wp_query = new WP_Query($args);
        if ( $wp_query->have_posts() ) :
            while ( $wp_query->have_posts() ) : $wp_query->the_post();

        $imageBpost = get_field('blog_thumbnail'); ?>

        <article class="M013A_blogpost clearfix">
         <a href="<?php the_permalink(); ?>">
         <div class="M013A_thumb">
             <img src="<?php echo $imageBpost['url']; ?>" alt="<?php echo $imageBpost['alt']; ?>" width="780" height="250">
             <div class="M013A_desc">
               <h3 class="M013A_title graybg white"> <?php  the_field('blog_title'); ?> </h3>
               <p class="redbg white"><?php the_time('l, F jS, Y'); ?></p>
             </div>



            </div>
             </a>
                 <?php
                        $content_long = get_field( "blog_content" );
                        $content_short = wp_trim_words( $content_long, 60, " ..." );
                        echo '<p>'.$content_short.'</p>';
                ?>
                <a class="M013A_readMore white redbg" href="<?php the_permalink(); ?>">Read more </a>

        </article>
        <?php
            endwhile;   endif;
            $wp_query = $temp;
        ?>
</div>