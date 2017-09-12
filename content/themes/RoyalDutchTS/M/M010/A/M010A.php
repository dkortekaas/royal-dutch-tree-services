<div id="M010A" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <?php $servIcon = get_field('servicepage_icon');
    if( !empty($servIcon) ): ?>
        <div class="M010A_circle">
            <img src="<?php echo $servIcon['url']; ?>" alt="<?php echo $servIcon['alt']; ?>" height="100" width="100">
        </div>
    <?php endif;   ?>
    <h1 class="red"><?php the_field('servicepage_title'); ?></h1>
    <div class="M010A_content"><?php the_field('servicepage_content'); ?></div>
</div>