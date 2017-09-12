<div id="M012B" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <?php
            $current_page_template = get_option('current_page_template');
                if (have_posts()) : while (have_posts()) : the_post();

                $imageProj = get_field('project_full_photo');
                $imageRef  = get_field('references_full_photo');

                    if($current_page_template == "single-projects"){
        ?>

        <div class="M012B_project <?php post_class() ?>" id="post-<?php the_ID(); ?>">
            <img src="<?php echo $imageProj['url']; ?>" alt="<?php echo $imageProj['alt']; ?>">
                <h1 class="red"> <?php  the_field('project_title'); ?></h1>
                <p><?php  the_field('project_content'); ?></p>
                <?php echo do_shortcode('[ultimatesocial networks="facebook, twitter, google, linkedin" count="true" align="left"]'); ?>
        </div>
        <?php
                    }elseif($current_page_template == "single-references"){
        ?>
        <div class="M012B_reference <?php post_class() ?>" id="post-<?php the_ID(); ?>">
            <img src="<?php echo $imageRef['url']; ?>" alt="<?php echo $imageRef['alt']; ?>">
                <h1 class="red"> <?php  the_field('references_title'); ?></h1>
                <p><?php  the_field('references_content'); ?></p>
        </div>
        <? }  endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif;  ?>
</div>