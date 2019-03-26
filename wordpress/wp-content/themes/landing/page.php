<?php get_header() ?>


	
	<div class="content-area">
			<div class="post">
				<div class="category">
					<h1>
						<?php the_title()?>
					</h1>
					<hr>
				</div>
				<?php if(have_posts()) { while (have_posts()) {	the_post(); ?>
					<p class="date">Published: <?php the_time('F jS Y'); ?>, by: <?php the_author_posts_link(); ?></p>
					<?php the_post_thumbnail('post_thumb') ?>
					<p><?php the_content(); ?></p>
					<?php }
				 } ?>
			</div>	
	</div>
	<?php get_footer(); ?>

