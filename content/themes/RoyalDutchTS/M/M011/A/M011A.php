<div id="M011A">
    <div class="row">
    <?php if( have_rows('sidebar_services_blocks', 9) ):
        while ( have_rows('sidebar_services_blocks', 9) ) : the_row();
            $serIcon = get_sub_field('sidebar_service_icon', 9); ?>
            <div class="M011A_service col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a href="<?php the_sub_field('sidebar_service_page_link', 9); ?>"><div class="M011A_circle"><img src="<?php echo $serIcon['url']; ?>" alt="<?php echo $serIcon['alt']; ?>" height="100" width="100"></div></a>
                <a href="<?php the_sub_field('sidebar_service_page_link', 9); ?>">
                    <h5 class="red"><?php the_sub_field('sidebar_service_title', 9); ?></h5>
                </a>
            </div>
        <?php endwhile;  
    endif; ?>
    </div>
    <div class="share">
        <h4 class="red share"><?php _e('Share this page'); ?></h5>
        <ul class="share-icons">
            <li class="first"><a href="mailto:?subject=<?php _e('View this page', 'themelogiq' ); ?>: <?php the_title(); ?>&amp;body=<?php the_permalink(); ?>" title="<?php _e('Share this page', 'themelogiq' ); ?>" rel="nofollow"><i class="fa fa-envelope-o"></i></a></li>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" title="<?php _e('Share this page', 'themelogiq' ); ?>" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=<?php the_title(); ?>&amp;source=<?php the_permalink(); ?>" target="_blank" title="<?php _e('Share this page', 'themelogiq' ); ?>" rel="nofollow"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?>" target="_blank" title="<?php _e('Share this page', 'themelogiq' ); ?>" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" title="<?php _e('Share this page', 'themelogiq' ); ?>" rel="nofollow"><i class="fa fa-google-plus"></i> </a></li>
            <li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo $feat_image; ?>&amp;description=<?php the_title(); ?>" target="_blank" title="<?php _e('Share this page', 'themelogiq' ); ?>" rel="nofollow"><i class="fa fa-pinterest"></i> </a></li>
            <li class="hidden-lg"><a href="whatsapp://send?text=<?php _e('View this page', 'themelogiq' ); ?>: <?php the_title(); ?> - <?php the_permalink(); ?>" title="<?php _e('Share this page', 'themelogiq' ); ?>" rel="nofollow"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
</div>