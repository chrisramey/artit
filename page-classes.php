<?php get_header() ?>

<?php if(have_posts()): $i = 0;?>
	<?php while(have_posts()): the_post() ?>
		<div class="page-wrapper" id="page-<?php echo $post->post_name ?>">
			<div class="section course-overview section-<?php echo $colors[$i%count($colors)] ?>">
				<div class="row">
					<h2><?php the_title() ?></h2>
					<?php the_content() ?>
				</div>
			</div>
			<?php 
			$i++;

			// Get pages for class descriptions
			$classes = get_pages(array(
				'child_of' => $post->ID
			));

			// Display class names & descriptions
			foreach($classes as $class) : ?>
				<div class="section course section-<?php echo $colors[$i%count($colors)] ?>">
					<div class="row">
						<h3><?php echo $class->post_title ?></h3>
						<?php echo apply_filters('the_content',$class->post_content) ?>
					</div>
				</div>
			<?php $i++; endforeach ?>
		</div>
	<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>