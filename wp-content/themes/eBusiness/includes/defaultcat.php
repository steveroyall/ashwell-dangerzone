<?php query_posts("showposts=$ebusiness_catnum_posts&paged=$paged&cat=$cat"); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
  if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>

<div class="home-post-wrap-2">
    <h2 class="titles"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
        <?php the_title() ?>
        </a></h2>
    
	<?php if (get_option('ebusiness_postinfo1') <> '') : ?>
		<div class="post-info-wrap"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> <span class="post-info"><?php _e('Posted','eBusiness') ?> <?php if (in_array('author', get_option('ebusiness_postinfo1'))) { ?> <?php _e('by','eBusiness') ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('ebusiness_postinfo1'))) { ?> <?php _e('on','eBusiness') ?> <?php the_time(get_option('ebusiness_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('ebusiness_postinfo1'))) { ?> <?php _e('in','eBusiness') ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('ebusiness_postinfo1'))) { ?> | <?php comments_popup_link(__('0 comments','eBusiness'), __('1 comment','eBusiness'), '% '.__('comments','eBusiness')); ?><?php }; ?></span> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
    <?php endif; ?>
	
    <div style="clear: both;"></div>
	
    <?php if (get_option('ebusiness_thumbnails_index') == 'on') : ?>
		<?php $width = get_option('ebusiness_thumbnail_size_index');
			  $height = get_option('ebusiness_thumbnail_size_index');
			  $classtext = 'thumbnail';
			  $titletext = get_the_title();

			  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
			  $thumb = $thumbnail["thumb"]; ?>
		
		<?php if($thumb != '') { ?>
			<a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
				<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
			</a>
		<?php } ?>
    <?php endif; ?>
    
	<?php if (get_option('ebusiness_excerpt') == 'on') : ?>
		<?php the_excerpt(); ?>
    <?php else : ?>
		<?php truncate_post("$ebusiness_content_limit") ?>
		<div style="clear: both;"></div>
    <?php endif; ?>
	
    <?php if (get_option('ebusiness_readmore_link') == 'false') : ?>
    <?php else : ?>
    <a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>"><img src="<?php bloginfo('template_directory'); ?>/images/readmore-2-<?php echo $ebusiness_color_scheme; ?>.gif" alt="readmore" class="readmore2" /></a>
    <?php endif; ?>
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
<?php wp_reset_query(); ?>