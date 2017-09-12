<div id="M012A" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <?php
            $current_page_template = get_option('current_page_template');
                if($current_page_template == "archive-projects"){ 
                    $type = 'projects';
                    $args = array (
                     'post_type' => $type,
                     'post_status' => 'publish',
                     'paged' => $paged,
                     'posts_per_page' => 12
                    );
                    $temp = $wp_query; 
                    // assign ordinal query to temp variable for later use
                    $wp_query = null;
                    $wp_query = new WP_Query($args);
                }
                elseif($current_page_template == "archive-references"){ 
                    $type = 'reference';
                    $args = array (
                     'post_type' => $type,
                     'post_status' => 'publish',
                     'paged' => $paged,
                     'posts_per_page' => 12
                    );
                    $temp = $wp_query; 
                    // assign ordinal query to temp variable for later use
                    $wp_query = null;
                    $wp_query = new WP_Query($args);
                }
        ?>
        <div class="row">
            <?php
                if ( $wp_query->have_posts() ) :
                while ( $wp_query->have_posts() ) : $wp_query->the_post();

                $imageProj = get_field('project_thumbnail'); 
                $imageRef = get_field('references_thumbnail'); 

                if($current_page_template == "archive-projects"){ 
            ?>
        
            <a href="<?php the_permalink(); ?>" class="M012A_projects" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background-image: url('<?php echo $imageProj['url']; ?>');">
            <?php 
                }elseif($current_page_template == "archive-references"){ 
            ?>
               
               <a href="<?php the_permalink(); ?>" class="M012A_reference" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background-image: url('<?php echo $imageRef['url']; ?>');">
               <?php } ?>
                <div class="M012A_overlay">
                    <p class="red"> 
                       
                            <?php  
                                if($current_page_template == "archive-projects"){ 
                                    the_field('project_title'); 
                                }elseif($current_page_template == "archive-references"){ 
                                    the_field('references_title'); 
                                }
                            ?>
                        
                    </p>
              </div>
            </a>
           
            <?php
                endwhile;   endif;
                $wp_query = $temp;
            ?>
        </div>      
</div>