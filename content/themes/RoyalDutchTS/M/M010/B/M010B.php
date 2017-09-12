<div id="M010B" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="M010B_content" itemscope itemtype="http://schema.org/Article">
        <?php if( $title_page = get_field('title_page') ) : ?>
        <h1 itemprop="headline"><?php echo $title_page; ?></h1>
        <?php else : ?>
        <meta itemprop="headline" content="<?php the_title(); ?>" />
        <?php endif; ?>
        <span itemprop="description">
            <?php if(the_field('content_page')); ?>
        </span>
        <span itemprop="author" itemscope itemtype="https://schema.org/Person" />
            <meta itemprop="name" content="<?php the_author(); ?>" />
        </span>
        <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization" />
            <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <meta itemprop="url" content="<?php echo get_template_directory_uri(); ?>/Library/css/images/RDTS-Logo.png">
            </span>
            <meta itemprop="name" content="<?php bloginfo('title'); ?>" />
        </span>
        <meta itemprop="image" content="<?php the_post_thumbnail(); ?>" />
        <meta itemprop="datePublished" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" />
        <meta itemprop="dateModified" content="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>" />
    </div>
</div>