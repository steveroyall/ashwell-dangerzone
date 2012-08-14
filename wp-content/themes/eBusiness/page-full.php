<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>

<?php if (get_option('ebusiness_blog_style') == 'on') : ?>

	<?php if (get_option('ebusiness_categories') == 'on') : ?>
		<div id="categories"> <img src="<?php bloginfo('template_directory'); ?>/images/categories-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left;" />
			<ul class="nav superfish" id="nav2">
				<?php if ($category_menu <> '<li>No categories</li>') echo($category_menu); ?>
			</ul>
			<img src="<?php bloginfo('template_directory'); ?>/images/categories-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left;" /> 
		</div>
	<?php endif; ?>
	
<?php endif; ?>

<div id="container">
    <div id="left-div-full">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!--Start Post-->
        <div class="home-post-wrap-2">
            <h2 class="titles"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
                <?php the_title() ?>
                </a></h2>
            <?php $desc = get_post_meta($post->ID, 'Description', $single = true); ?>
            <?php if($desc != '') { ?>
            <div class="post-info-wrap"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> <span class="post-info"><?php echo $desc; ?></span> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
            <?php } ?>
            <div style="clear: both;"></div>
			
			<?php if (get_option('ebusiness_page_thumbnails') == 'on') { ?>
			
				<?php $width = get_option('ebusiness_thumbnail_width_pages');
					  $height = get_option('ebusiness_thumbnail_height_pages');
					  $classtext = 'thumbnail';
					  $titletext = get_the_title();
				
				      $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
					  $thumb = $thumbnail["thumb"];  ?>
				
				<?php if($thumb != '') { ?>
					<a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
						<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
					</a>
				<?php } ?>
				
			<?php } ?>
			
            <?php the_content(__('Read the rest of this entry &raquo;','eBusiness')); ?>
			<?php if (get_option('ebusiness_foursixeight') == 'on') { ?>
            <?php include(TEMPLATEPATH . '/includes/468x60.php'); ?>
            <?php } ?>
			
			<?php if (get_option('ebusiness_show_pagescomments') == 'on') { ?>
				<div style="clear: both;"></div>
				<?php comments_template('', true); ?>
			<?php }; ?>	
        </div>
        <?php endwhile; ?>
        <!--End Post-->
        <p class="pagination">
            <?php next_posts_link(__('&laquo; Previous Entries','eBusiness')) ?>
		<?php previous_posts_link(__('Next Entries &raquo;','eBusiness')) ?>
        </p>
        <?php else : ?>
        <h2 align="center"><?php _e('Not Found','eBusiness') ?></h2>
        <p align="center"><?php _e('Sorry, but the page you requested could not be found.','eBusiness') ?></p>
        <?php endif; ?>
    </div>
    <img src="<?php bloginfo('template_directory'); ?>/images/content-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left; margin-top: 15px;" /> </div>
<!--Begin Footer-->
<?php get_footer(); ?>
<!--End Footer-->
</body></html>