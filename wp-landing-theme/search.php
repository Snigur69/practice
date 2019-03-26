<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package landing
 */

get_header();
?>
		<header class="page-header">
				<div class="category">
					<h1><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'landing' ), get_search_query());
					?></h1>
					<hr>
				</div>
			</header><!-- .page-header -->


	<div class="category-wrap">
		<div class="help">
			<div class="wrap-posts">
				<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
					?>

					<hr>
					
					<?php 

				endwhile;


				the_posts_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php
// get_sidebar();
get_footer();
