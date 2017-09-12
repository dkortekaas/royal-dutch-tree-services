<div id="M008A" class="whitebg hidden-xs">
  <div class="container">
    <div class="row">
      <h1 class="red"><?php the_field('team_title_homepage'); ?></h1>
      <h5 class="midGray"><?php the_field('team_subtitle_homepage'); ?></h5>
        <?php if( have_rows('team_homepage') ):
            while( have_rows('team_homepage') ): the_row();
              $memberPic = get_sub_field('member_picture');
        ?>
      <div class="fadein M008A_member col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="M008A_member_circle graybg"><img src="<?php echo $memberPic['url']; ?>" alt="<?php echo $memberPic['alt'] ?>" width="150" height="150" /></div>
        <div class="M008A_member_name red"><?php the_sub_field('member_name'); ?></div>
        <div class="M008A_member_function gray"><?php the_sub_field('member_function'); ?></div>
      </div>
          <?php endwhile; endif; ?>
    </div>
  </div>
</div>