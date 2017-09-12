<?php get_header(); ?>
<!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div id="T001A_wrapper">
        <header id="T001A_header" class="brownbg">
            <div class="container clearfix">
                <div class="row">

                    <?php include 'M/M001/A/M001A.php'; ?>

                  <div class="M001A_mobilemenu whitebg">
                         <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
                    </div>
                </div>
            </div>
        </header>

        <div id="T001A_content" itemscope itemtype="http://schema.org/Article">
			<?php include 'M/M002/C/M002C.php'; ?>
			<div class="whitebg" style="position:relative; width:100%; z-index: 10;">
              <div class="container">
                  <?php if ( function_exists('yoast_breadcrumb') ) {?>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
                      </div>
                    </div>
                  <?php } ?>
				
				<div class="row">
					<?php include 'M/M013/B/M013B.php'; ?>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sticky">
					<?php include (TEMPLATEPATH . '/O/O002/A/O002A.php'); ?>
					<?php include 'M/M011/A/M011A.php'; ?>
					<?php include 'M/M014/A/M014A.php'; ?>
					</div>
				</div>
			</div>
        </div>
        <?php get_footer(); ?>