<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0"> -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>


<div id="content">
	<header>
  		
  		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
  			<div class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"></div>
 		</a>
		 
   		<div class="searchbox">
    		<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    				<input type="text" class="searcher" placeholder="Search…" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
    				<input type="image" src="<?php bloginfo( 'template_directory' ); ?>/img/searchbutton.png" id="searchsubmit" class="searchButton" />
    		</form>   
    	</div>
    	<p class="telephone">Telephone: 01372 389377</p>
    
    <nav>
    <div id="access" role="navigation">
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a>
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		
	</div><!-- #access -->
      <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
    </nav>
    <div class="carousel"> 
    	<ul>
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   					<?php if(c2c_get_custom('cycle1')){?>
						<li><img src="<?php echo c2c_get_custom('cycle1'); ?>" alt="<?php 
						if(c2c_get_custom('cycle1-alt')){
							echo c2c_get_custom('cycle1-alt');
							}else{
								echo ("Ashwell Landscapes");
							};
						?>"></li>
					<?php } ?>
					<?php if(c2c_get_custom('cycle2')){?>
						<li><img src="<?php echo c2c_get_custom('cycle2'); ?>" alt="<?php 
						if(c2c_get_custom('cycle2-alt')){
							echo c2c_get_custom('cycle2-alt');
							}else{
								echo ("Ashwell Landscapes");
							};
						?>"></li>
					<?php } ?>
					<?php if(c2c_get_custom('cycle3')){?>
						<li><img src="<?php echo c2c_get_custom('cycle3'); ?>" alt="<?php 
						if(c2c_get_custom('cycle3-alt')){
							echo c2c_get_custom('cycle3-alt');
							}else{
								echo ("Ashwell Landscapes");
							};
						?>"></li>
					<?php } ?>
					<?php if(c2c_get_custom('cycle4')){?>
						<li><img src="<?php echo c2c_get_custom('cycle4'); ?>" alt="<?php 
						if(c2c_get_custom('cycle4-alt')){
							echo c2c_get_custom('cycle4-alt');
							}else{
								echo ("Ashwell Landscapes");
							};
						?>"></li>
					<?php } ?>
					<?php if(c2c_get_custom('cycle5')){?>
						<li><img src="<?php echo c2c_get_custom('cycle5'); ?>" width=962 height=301 alt="<?php 
						if(c2c_get_custom('cycle5-alt')){
							echo c2c_get_custom('cycle5-alt');
							}else{
								echo ("Ashwell Landscapes");
							};
						?>"></li>
					<?php } ?>
				<?php endwhile; endif; ?>
    	
    	
                    </ul>
        
        

        
        
    </div>
  </header>	
 

	