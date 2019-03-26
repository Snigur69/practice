<?php get_header(); ?>
<section class="head-1">
		<div class="category">
			<h1><?php the_category(); ?></h1>
			<hr>
		</div>
</section>
<div class="category-wrap">
	<div class="help">
		<div class="wrap-posts">
			<?php if(have_posts()) { while (have_posts()) {	the_post(); ?>
			<article class="posts">
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<p class="date"><?php the_time('F jS Y') ?> / <?php the_author_posts_link(); ?></p>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
				<p><?php the_excerpt(); ?></p>	
				<button class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></button>
			<hr>
			</article>
			<?php } ?>
			<?php the_posts_pagination(); ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
	<?php } ?>
	<?php get_footer(); ?>