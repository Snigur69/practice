<?php get_header() ?>
	
<section class="head-1">
		<div class="category">
			<h1>Get In Touch</h1>
			<hr>
		</div>
</section>
<div class="category-wrap">
	<div class="help">
		<div class="wrap-posts">
			<p class="form-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatibus odio nam dolor fugit optio dolores voluptatem. Veritatis quas illum dolorem distinctio corporis optio, consequuntur reiciendis sequi, beatae aut tenetur ratione inventore. Ad veniam beatae cum sapiente, maiores fugiat cumque minima enim, ullam consectetur ipsam, molestiae unde ex corporis doloribus!</p>
			<?php echo do_shortcode('[contact-form-7 id="89" title="test-form"]'); ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer() ?>