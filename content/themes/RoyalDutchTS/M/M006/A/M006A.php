<div id="M006A" class="lightGraybg hidden-xs">
  <div class="container">
    <div class="row">
      <h1 class="red"><?php the_field('title_about_rdts'); ?></h1>
      <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
        <div class="M006A_slider">
            <ul class="dots"></ul>
            <ul class="M006A_slides">
              <?php
                  if( have_rows('slider_about_rdts') ):
                  while ( have_rows('slider_about_rdts') ) : the_row();
                    $aboutImg = get_sub_field('slider_about_image');
                    $aboutUrl = get_sub_field('slider_about_link');
              ?>
              <li class="M006A_slide" onclick="javascript:window.open('<?php echo $aboutUrl; ?>','_self');" style="background: #fafafa url('<?php  echo $aboutImg['url']; ?>') no-repeat; background-position: center center; height:100%; width:100%;" title="<?php echo $aboutImg['alt']; ?>">
              </li>
              <?php  endwhile; else : endif; ?>
            </ul>
        </div>

      </div>
      <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
        <div class="midGray">
        <?php the_field('content_about_rdts'); ?>
        </div>
        <a href="<?php the_field('linkpage_about_rdts'); ?>" class="btn redbg white"><?php the_field('button_text_about_rdts'); ?></a>
      </div>
    </div>
  </div>
</div>