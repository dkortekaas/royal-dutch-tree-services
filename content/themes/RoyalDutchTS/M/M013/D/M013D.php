<div id="M013D" class="col-lg-8 col-md-8 col-sm-12 col-xs-12" itemscope itemtype="http://schema.org/JobPosting">
    <meta itemprop="title" content="<?php the_title(); ?>" />
    <?php if (have_posts()) : while (have_posts()) : the_post();
        $imageBpost = get_field('career_thumbnail'); ?>
        <article class="M013D_blogpost <?php post_class() ?>" id="post-<?php the_ID(); ?>" itemprop="description">
            <p><?php the_field( "career_content" ); ?></p>
        </article>
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <meta itemprop="datePosted" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" />
    <?php endif; ?>
</div>