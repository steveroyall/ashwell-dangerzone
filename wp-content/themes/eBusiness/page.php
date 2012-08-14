<?php get_header(); ?>

<?php if (get_option('ebusiness_blog_style') == 'Blog Based') : ?>

	<?php if (get_option('ebusiness_categories') == 'on') : ?>
	<div id="categories"> <img src="<?php bloginfo('template_directory'); ?>/images/categories-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left;" />
		<ul class="nav superfish" id="nav2">
			<?php if ($category_menu <> '<li>No categories</li>') echo($category_menu); ?>
		</ul>
		<img src="<?php bloginfo('template_directory'); ?>/images/categories-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left;" /> </div>
	<?php endif; ?>
	
<?php endif; ?>

<div id="container">
    <div id="left-div">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!--Start Post-->
        <div class="home-post-wrap-2">
            <h1 class="titles"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
                <?php the_title() ?>
                </a></h1>
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
			
            <?php the_content(''); ?>
            <?php if (get_option('ebusiness_foursixeight') == 'on') { ?>
            <?php include(TEMPLATEPATH . '/includes/468x60.php'); ?>
            <?php } else { echo ''; } ?>
			
			<?php if (get_option('ebusiness_show_pagescomments') == 'on') { ?>
				<div style="clear: both;"></div>
				<?php comments_template('', true); ?>
			<?php }; ?>	
        </div>
        <?php endwhile; ?>
        <!--End Post-->
        <?php else : ?>
        <!--If no results are found-->
        <div class="home-post-wrap-2">
            <h1><?php _e('No Results Found','eBusiness') ?></h1>
            <p><?php _e('The page you requested could not be found. Try refining your search, or use the navigation above to locate the post.','eBusiness') ?></p>
        </div>
        <!--End if no results are found-->
        <?php endif; ?>
    </div>
    <!--Begin Sidebar-->
    <div id="sidebar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Pages") ) : ?>
        <?php endif; ?>
    </div>
    <!--End Sidebar-->
    <img src="<?php bloginfo('template_directory'); ?>/images/content-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left; margin-top: 15px;" /> </div>
<!--Begin Footer-->
<?php get_footer(); ?>
<!--End Footer-->
</body></html>