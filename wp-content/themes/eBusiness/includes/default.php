<?php $ebusiness_home_page_1 = str_replace('&amp;','&',$ebusiness_home_page_1);
	  $ebusiness_home_page_2 = str_replace('&amp;','&',$ebusiness_home_page_2);
	  $ebusiness_home_page_3 = str_replace('&amp;','&',$ebusiness_home_page_3); 
	  $ebusiness_home_page_4 = str_replace('&amp;','&',$ebusiness_home_page_4); 
?>
<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/includes/scroller-' . $ebusiness_scroller_number . '.php'); ?>

<div id="home-container">
    <div id="home-wrap">
        <?php if (get_option('ebusiness_home_blog') == 'on') : ?>
        <div id="home-left">
            <?php query_posts('page_id=' . get_pageId($ebusiness_home_page_1) ); while (have_posts()) : the_post(); ?>
            <div class="post-info-wrap-home"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-1-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" />
                <h2 class="home-title-1">
                    <?php the_title(); ?>
                </h2>
                <img src="<?php bloginfo('template_directory'); ?>/images/home-title-1-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
            <div style="clear: both;"></div>
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        <div id="home-right"> <img src="<?php bloginfo('template_directory'); ?>/images/recent-top-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" />
            <div class="recent">
                <div style="position: relative;">
                    <div class="prev2"></div>
                    <div class="next2"></div>
                </div>
                <span class="blog-title"><?php _e('From the Blog','eBusiness') ?></span> <a href="<?php echo $ebusiness_rss; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss.gif" alt="home title" class="rss-button" /></a>
                
				<div class="recent-scroll">
                    <ul>
						<?php $args=array(
							   'showposts'=>get_option('ebusiness_homepage_posts'),
							   'category__not_in' => get_option('ebusiness_exlcats_recent'),
							); ?>
                        <?php query_posts($args);
							while (have_posts()) : the_post(); ?>
                        
						<?php $width = 35;
							  $height = 35;
							  $classtext = 'recent-thumb';
							  $titletext = get_the_title();

							  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
							  $thumb = $thumbnail["thumb"];  ?>
                        <li>
                            <?php if($thumb != '') { ?>
								<a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>">
									<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
								</a>
                            <?php } ?>
                            
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','eBusiness'), get_the_title()) ?>" class="recent-link">
								<?php truncate_title(42) ?>
                            </a>
                            <div class="recent-info">
                                <?php the_time(get_option('ebusiness_date_format')) ?>
                                |
                                <?php comments_popup_link(__('No Comments','eBusiness'), __('1 Comment','eBusiness'), __('% Comments','eBusiness')); ?>
                            </div>
                        </li>
                        <?php endwhile; wp_reset_query(); ?>
                    </ul>
                </div>
				
            </div>
            <img src="<?php bloginfo('template_directory'); ?>/images/recent-bottom-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
        <?php else : ?>
        <?php query_posts('page_id=' . get_pageId($ebusiness_home_page_1) ); while (have_posts()) : the_post(); ?>
        <div class="post-info-wrap-home"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" />
            <h2 class="home-title-1">
                <?php the_title(); ?>
            </h2>
            <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
        <div style="clear: both;"></div>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <img src="<?php bloginfo('template_directory'); ?>/images/line-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-line" />
        <div style="clear: both;"></div>
        
        <?php if (get_option('ebusiness_home_page_number') != '1') : ?>
        <?php query_posts('page_id=' . get_pageId($ebusiness_home_page_2) ); while (have_posts()) : the_post(); ?>
        <div class="post-info-wrap-home"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" />
            <h2 class="home-title-1">
                <?php the_title(); ?>
            </h2>
            <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
        <div style="clear: both;"></div>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        
        <?php if (get_option('ebusiness_home_page_number') == '3') : ?>
        <?php query_posts('page_id=' . get_pageId($ebusiness_home_page_3) ); while (have_posts()) : the_post(); ?>
        <img src="<?php bloginfo('template_directory'); ?>/images/line-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-line" />
        <div style="clear: both;"></div>
        <div class="post-info-wrap-home"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" />
            <h2 class="home-title-1">
                <?php the_title(); ?>
            </h2>
            <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
        <div style="clear: both;"></div>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php if (get_option('ebusiness_home_page_number') == '4') : ?>
        <?php query_posts('page_id=' . get_pageId($ebusiness_home_page_3) ); while (have_posts()) : the_post(); ?>
        <img src="<?php bloginfo('template_directory'); ?>/images/line-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-line" />
        <div style="clear: both;"></div>
        <div class="post-info-wrap-home"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" />
            <h2 class="home-title-1">
                <?php the_title(); ?>
            </h2>
            <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
        <div style="clear: both;"></div>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php query_posts('page_id=' . get_pageId($ebusiness_home_page_4) ); while (have_posts()) : the_post(); ?>
        <img src="<?php bloginfo('template_directory'); ?>/images/line-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-line" />
        <div style="clear: both;"></div>
        <div class="post-info-wrap-home"> <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-left-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" />
            <h2 class="home-title-1">
                <?php the_title(); ?>
            </h2>
            <img src="<?php bloginfo('template_directory'); ?>/images/home-title-2-right-<?php echo $ebusiness_color_scheme; ?>.gif" alt="home title" class="home-title-image" /> </div>
        <div style="clear: both;"></div>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
    </div>
    <div style="clear: both;"></div>
    <img src="<?php bloginfo('template_directory'); ?>/images/content-bg-<?php echo $ebusiness_color_scheme; ?>.gif" alt="line" style="margin-top: 15px;" class="iehack" /> </div>
<?php get_footer(); ?>
</body></html>