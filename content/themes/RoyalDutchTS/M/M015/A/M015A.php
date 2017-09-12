<div id="M015A" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
    <?php if( have_rows('contact_tiles') ):
        while( have_rows('contact_tiles') ): the_row();
    ?>
        <div class="M015A_tile col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="M015A_icon redbg">
                <span class="white fa <?php the_sub_field('tile_icon'); ?>"></span>
            </div>
            <p class="M015A_title"><?php the_sub_field('tile_title');?></p>
            <p><?php echo html_entity_decode(get_sub_field('tile_content'));?></p>
        </div>
         <?php endwhile;  endif; ?>
    </div>
</div>