<?php 
/**
* The template for displayings page
**/

get_header(); ?>

	<div class="row">
		<div class="col">

			<?php
				// Start the loop.
				while (have_posts()): the_post();
			?>

			<?php
				// End the loop.
				endwhile;
			?>
		</div>
	</div>

<?php get_footer(); ?>
