<div id="M013B" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
       <?php if (have_posts()) : while (have_posts()) : the_post();

        $imageBpost = get_field('blog_thumbnail'); ?>

        <article class="M013B_blogpost <?php post_class() ?>" id="post-<?php the_ID(); ?>" itemprop="articleBody">

            <p><?php  the_field( "blog_content" );    ?></p>

        </article>
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>