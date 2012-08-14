<?php
/**
 Template Name: Tabs Page
 
*/

get_header(); ?>
<div role="main">
<div class="content">
<div class="mainContent equal tabbed">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<h1 class="mainTitle"><?php the_title(); ?></h1>
					<?php } else { ?>	
						<h1 class="mainTitle"><?php the_title(); ?></h1>
					<?php } ?>				

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php // comments_template( '', true ); ?>

<?php endwhile; ?>
</div> <!- end of mainContent -->
<div class="aside equal tabbed">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
