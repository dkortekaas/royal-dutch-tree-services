<div id="M011B">
    <?php
    if( have_rows('sidebar_content') ):
        while ( have_rows('sidebar_content') ) : the_row(); ?>
        <h5 class="red"><?php the_sub_field('sidebar_title'); ?></h5>
        <p><?php echo html_entity_decode(get_sub_field('sidebar_content')); ?></p>
    <?php endwhile; else : endif; ?>
</div>