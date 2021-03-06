<?php 
if (is_archive()) $post_number = get_option('ebusiness_archivenum_posts');
if (is_search()) $post_number = get_option('ebusiness_searchnum_posts');
if (is_tag()) $post_number = get_option('ebusiness_tagnum_posts');
if (is_category()) $post_number = get_option('ebusiness_catnum_posts');
if (is_home()) $post_number = get_option('ebusiness_blogstyle_homeposts');
global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged"); 
?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

<div class="home-post-wrap-2">
    <h1 class="titles"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
        <?php the_title(); ?>
        </a></h1>
    
	<?php if (get_option('ebusiness_postinfo1') <> '') : ?>
		<div class="post-info-wrap"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> <span class="post-info"><?php _e('Posted','eBusiness') ?> <?php if (in_array('author', get_option('ebusiness_postinfo1'))) { ?> <?php _e('by','eBusiness') ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('ebusiness_postinfo1'))) { ?> <?php _e('on','eBusiness') ?> <?php the_time(get_option('ebusiness_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('ebusiness_postinfo1'))) { ?> <?php _e('in','eBusiness') ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('ebusiness_postinfo1'))) { ?> | <?php comments_popup_link(__('0 comments','eBusiness'), __('1 comment','eBusiness'), '% '.__('comments','eBusiness')); ?><?php }; ?></span> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
    <?php endif; ?>
	
    <div style="clear: both;"></div>
	
    <?php if (get_option('ebusiness_thumbnails') == 'on') include(TEMPLATEPATH . '/includes/thumbnail.php'); ?>
    
    <?php the_content(); ?>
</div>
<?php endwhile; ?>
<div style="clear: both;"></div>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
else { ?>
<p class="pagination">
    <?php next_posts_link(__('&laquo; Previous Entries','eBusiness')) ?>
	<?php previous_posts_link(__('Next Entries &raquo;','eBusiness')) ?>
</p>
<?php } ?>
<?php else : ?>
<!--If no results are found-->
<div class="home-post-wrap-2">
    <h1><?php _e('No Results Found','eBusiness') ?></h1>
    <p><?php _e('The page you requested could not be found. Try refining your search, or use the navigation above to locate the post.','eBusiness') ?></p>
</div>
<!--End if no results are found-->
<?php endif; ?>
<?php if (is_home() || is_category()) wp_reset_query(); ?>