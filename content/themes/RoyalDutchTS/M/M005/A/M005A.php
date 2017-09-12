<div id="M005A" class="whitebg">
<div id="services" class="services">
   <div class="container" >
       <div class="row" id="anchor">
          <?php if( have_rows('homepage_services_blocks', 105) ):
              while ( have_rows('homepage_services_blocks', 105) ) : the_row();
              $serIcon = get_sub_field('service_icon', 105);
              ?>
            <div class="M005A_service col-lg-6 col-md-6 col-sm-12 col-xs-12 animateFadein">
               <div class="M005A_textbox">
                   <h3 class="gray"><a href="<?php the_sub_field('service_page_link' , 105); ?>"><?php if(the_sub_field('homepage_service_title', 105)); ?></a></h3>
                   <p class="midGray"><?php the_sub_field('service_subtext', 105); ?></p>
               </div>
               <a href="<?php the_sub_field('service_page_link', 105); ?>"><div class="M005A_circle"><img src="<?php echo $serIcon['url']; ?>" alt="<?php echo $serIcon['alt']; ?>" height="150" width="150"></div></a>
           </div>
           <?php endwhile; else : endif; ?>
       </div>
   </div>
   </div>
</div>