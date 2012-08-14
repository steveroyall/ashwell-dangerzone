<?php get_header(); ?>

<?php if (get_option('ebusiness_categories') == 'on') : ?>
	<div id="categories"> <img src="<?php bloginfo('template_directory'); ?>/images/categories-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left;" />
		<ul class="nav superfish" id="nav2">
			<?php if ($category_menu <> '<li>No categories</li>') echo($category_menu); ?>
		</ul>
		<img src="<?php bloginfo('template_directory'); ?>/images/categories-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left;" />
	</div>
<?php endif; ?>

<div id="container">
    <div id="left-div">
	<?php if (get_option('ebusiness_integration_single_top') <> '' && get_option('ebusiness_integrate_singletop_enable') == 'on') echo(get_option('ebusiness_integration_single_top')); ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!--Begin Post-->
        <div class="home-post-wrap-2">
            <h1 class="titles"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
                <?php the_title() ?>
                </a></h1>
            <?php if (get_option('ebusiness_postinfo1') <> '') : ?>
				<div class="post-info-wrap"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> <span class="post-info"><?php _e('Posted','eBusiness') ?> <?php if (in_array('author', get_option('ebusiness_postinfo1'))) { ?> <?php _e('by','eBusiness') ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('ebusiness_postinfo1'))) { ?> <?php _e('on','eBusiness') ?> <?php the_time(get_option('ebusiness_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('ebusiness_postinfo1'))) { ?> <?php _e('in','eBusiness') ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('ebusiness_postinfo1'))) { ?> | <?php comments_popup_link(__('0 comments','eBusiness'), __('1 comment','eBusiness'), '% '.__('comments','eBusiness')); ?><?php }; ?></span> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
            <?php endif; ?>
            <div style="clear: both;"></div>
            
			<?php if (get_option('ebusiness_thumbnails') == 'on') include(TEMPLATEPATH . '/includes/thumbnail.php'); ?>
            
            <?php the_content(); ?>
			<?php if (get_option('ebusiness_integration_single_bottom') <> '' && get_option('ebusiness_integrate_singlebottom_enable') == 'on') echo(get_option('ebusiness_integration_single_bottom')); ?>
            <?php if (get_option('ebusiness_foursixeight') == 'on') { ?>
            <?php include(TEMPLATEPATH . '/includes/468x60.php'); ?>
            <?php } else { echo ''; } ?>
            <div style="clear: both;"></div>
            <?php if (get_option('ebusiness_show_postcomments') == 'on') { ?>
				<?php comments_template(); ?>
			<?php }; ?>
            <?php endwhile; ?>
        </div>
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
    <?php get_sidebar(); ?>
    <!--End Sidebar-->
    <img src="<?php bloginfo('template_directory'); ?>/images/content-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="float: left; margin-top: 15px;" /> </div>
<!--Begin Footer-->
<?php get_footer(); ?>
<!--End Footer-->
</body></html>