<?php get_header(); ?>
<!--[if lt IE 9]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div id="T001A_wrapper">
        <header id="T001A_header" class="brownbg nav-down">
            <div class="container clearfix">
                <div class="row">

                    <?php include 'M/M001/A/M001A.php'; ?>

                    <div class="M001A_mobilemenu whitebg">
                        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
                    </div>
                </div>
            </div>
        </header>

        <div id="T001A_content">
            <?php // include 'M/M009/A/M009A.php'; ?>
            <?php putRevSlider( "default" ) ?>	
                    
            <?php include 'M/M005/A/M005A.php'; ?>

            <?php include 'M/M006/A/M006A.php'; ?>

            <?php // include 'M/M007/A/M007A.php'; ?>

            <!-- Meet our Arborist Team - Disabled 17-07-2015 -->
            <?php // include 'M/M008/A/M008A.php'; ?>

        <?php get_footer(); ?>