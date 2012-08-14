</div>
<footer>
	<div class="alignright">&copy; 2012 | <?php bloginfo( 'name' ); ?> - All rights reserved </div>  <div class="alignleft">Ashwell Landscapes, Oyster Hill Forge, Clay Lane, Headley KT18 6JX | Tel: 01372 389377 </div>
</footer>
<div class="clearfix"></div>

</div> <!-- end of div class conent -->
</div> <!-- end of div roll main -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php bloginfo( 'template_directory' );?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="<?php bloginfo( 'template_directory' );?>/js/plugins.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/cycle.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/equalHeights.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/script.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/libs/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4061431-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
//	get_sidebar( 'footer' );
?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>