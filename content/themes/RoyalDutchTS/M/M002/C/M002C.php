<div id="M002C" class="" >
    <div class="M002C_background" style="background-image: url('<?php the_field('blog_slider_image'); ?>');">
        <meta itemprop="headline" content="<?php the_title(); ?>" />
        <meta itemprop="image" content="<?php the_post_thumbnail(); ?>" />
        <span itemprop="author" itemscope itemtype="https://schema.org/Person" />
            <meta itemprop="name" content="<?php the_author(); ?>" />
        </span>
        <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization" />
            <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <meta itemprop="url" content="<?php echo get_template_directory_uri(); ?>/Library/css/images/RDTS-Logo.png">
            </span>
            <meta itemprop="name" content="<?php bloginfo('title'); ?>" />
        </span>
        <meta itemprop="genre" content="<?php the_category(); ?>" />
        <div class="container">
            <div class="row">
                <h1 class="M002C_title white" itemprop="name"> <?php  the_field('blog_title'); ?> </h1>
                <p class="redbg white"><?php the_time('l, F jS, Y'); ?></p>
                <meta itemprop="datePublished" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" />
                <meta itemprop="dateModified" content="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>" />
            </div>
        </div>
    </div>
</div>