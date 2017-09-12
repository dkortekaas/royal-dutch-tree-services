		<footer id="T001A_footer">
			<div class="bg-footer">
				<img class="bg-image" src="<?php echo get_template_directory_uri(); ?>/Library/images/Skyline-Calgary-Royal-Dutch-Tree-Services.jpg">
			</div>
			<?php include 'M/M004/A/M004A.php'; ?>
			<?php include 'M/M003/A/M003A.php'; ?>
		</footer>
	</div>
</div><!-- Close Wrapper -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/Library/scripts/main.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/Library/scripts/jquery.sticky-kit.min.js"></script>
<script type="text/javascript">
jQuery(function(){sticky();jQuery(window).resize(function(){sticky();});});
function sticky(){if (jQuery(window).width() > 992) {jQuery(".sticky").stick_in_parent({offset_top: 100,bottoming: false});}}
jQuery(function() {var loc = window.location.href;if(/career/.test(loc)) {jQuery('.M001A_mainmenu li').removeClass('current_page_parent');jQuery('.M001A_mainmenu li.career').addClass('current_page_parent');}});
jQuery(document).ready(function(){jQuery(".tel").attr("onclick", "ga('send', 'event', 'call')");});
function hasScrolled(){var l=jQuery(this).scrollTop();Math.abs(lastScrollTop-l)<=delta||(l>lastScrollTop&&l>navbarHeight?jQuery("header").removeClass("nav-down").addClass("nav-up"):l+jQuery(window).height()<jQuery(document).height()&&jQuery("header").removeClass("nav-up").addClass("nav-down"),lastScrollTop=l)}var didScroll,lastScrollTop=0,delta=5,navbarHeight=jQuery("header").outerHeight();jQuery(window).scroll(function(l){didScroll=!0}),setInterval(function(){didScroll&&(hasScrolled(),didScroll=!1)},250);
</script>
</body>
</html>