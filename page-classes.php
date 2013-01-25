<?php get_header() ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post()?>
		<div class="page-wrapper">
			<h2><?php the_title() ?></h2>
			<?php the_content() ?>
			<?php 
			// Get pages for class descriptions

			// Display class names & descriptions

			// Get page for schedule

			// Display schedule
			?>
		</div>
	<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>