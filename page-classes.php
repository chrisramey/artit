<?php get_header() ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post() ?>
		<div class="page-wrapper">
			<h2><?php the_title() ?></h2>
			<?php the_content() ?>

			<?php 
			// Get pages for class descriptions
			$classes = get_pages(array(
				'child_of' => $post->ID
			));

			// Display class names & descriptions
			foreach($classes as $class) : ?>
				<div class="course">
					<h3><?php echo $class->post_title ?></h3>
					<?php echo apply_filters('the_content',$class->post_content) ?>
				</div>
			<?php endforeach ?>
		</div>
	<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>