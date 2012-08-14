<?php if (get_option('ebusiness_footer') == 'false') : ?>
<?php else : ?>
	<div id="footer">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
		<?php endif; ?>
		<div style="clear: both;"></div>
	</div>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-bottom-<?php echo(get_option('ebusiness_color_scheme')); ?>.gif" alt="footer" style="float: left;" />
	<div style="clear: both;"></div>
<?php endif; ?>

<div class="credits"> <?php _e('Powered by','eBusiness')?> <a href="http://www.wordpress.org">Wordpress</a> | &copy; 2010 Ashwell Landscapes </div>
</div>
</div>

<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>
<?php wp_footer(); ?>