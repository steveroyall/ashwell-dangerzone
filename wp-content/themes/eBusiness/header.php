<?php global $ebusiness_color_scheme, $ebusiness_scroller_number, $ebusiness_home_page_1, $ebusiness_home_page_2, $ebusiness_home_page_3, $ebusiness_home_page_4, $ebusiness_homepage_posts, $ebusiness_rss, $ebusiness_slider_1_button, $ebusiness_slider_1_title, $ebusiness_slider_1_image, $ebusiness_slider_1_video, $ebusiness_slider_1_content, $ebusiness_slider_1_readmore_url, $ebusiness_slider_2_button, $ebusiness_slider_2_title, $ebusiness_slider_2_image, $ebusiness_slider_2_video, $ebusiness_slider_2_content, $ebusiness_slider_2_readmore_url, $ebusiness_thumbnail_size, $ebusiness_thumbnail_quality, $ebusiness_thumbnail_size_index, $ebusiness_content_limit, $ebusiness_sort_cat, $ebusiness_order_cat, $include_cats, $strdepth2, $ebusiness_banner_468_url, $ebusiness_banner_468, $ebusiness_grab_image, $ebusiness_blogstyle_homeposts, $ebusiness_catnum_posts;

global $shortname, $category_menu, $exclude_pages, $exclude_cats, $hide, $strdepth, $strdepth2, $projects_cat, $page_menu; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?> 
<?php elegant_keywords(); ?> 
<?php elegant_canonical(); ?>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if IE 7]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/iestyle-<?php echo $ebusiness_color_scheme; ?>.css" />
<![endif]-->
<!--[if IE 8]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie8style-<?php echo $ebusiness_color_scheme; ?>.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie6style-<?php echo $ebusiness_color_scheme; ?>.css" />
<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/pngfix.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>

<body>
<div id="bg">
<!--This controls pages navigation bar-->
<div id="pages">
    <div id="pages-inside">
	
		<a href="<?php bloginfo('url'); ?>" class="title" title="home again woohoo"><img src="<?php bloginfo('template_directory'); ?>/images/logo-<?php echo $ebusiness_color_scheme; ?>.png" alt="logo" class="logo" /></a>
		
        <ul class="nav superfish">
            <?php if (get_option('ebusiness_home_link') == 'on') { ?>
				<li class="page_item"><a href="<?php bloginfo('url'); ?>"><?php _e('Home','eBusiness') ?></a></li> 
			<?php } ?>
			
            <?php if (get_option('ebusiness_blog_link') == 'on') { ?>
				<?php wp_list_categories("include=".get_catId(get_option('ebusiness_blog_cat'))."&depth=1&title_li="); ?>
				<?php echo $page_menu; ?>
			<?php }; ?>	
        </ul>
		
    </div>
</div>

<div style="clear: both;"></div>
<!--End pages navigation-->

<div id="wrapper2" <?php if (get_option('ebusiness_blog_style') == 'on') : ?><?php else : ?><?php if (is_home()) : ?>class="wrapper2-home"<?php endif; ?><?php endif; ?>>