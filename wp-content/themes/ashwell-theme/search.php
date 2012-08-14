<?php
/*
 * The template for displaying Search Results pages.
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>
				<h1><?php printf( __( 'Search Results for: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
<div role="main">
<div class="content">
<div class="mainContent equal">
					<h2><?php _e( 'Whoops nothing found...', 'twentyten' ); ?></h2>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try searching again with some different keywords.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
					
					
		</div> <!- end of mainContent -->
<div class="aside equal">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php endif; ?>



<?php get_sidebar(); ?>

<?php get_footer(); ?>