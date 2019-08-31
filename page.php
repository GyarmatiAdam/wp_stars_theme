<?php get_header(); ?>

<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10 text-justify post">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		<?php endwhile; endif; ?>
			
	</div>
	<div class="col-sm-1">
	</div>
</div>

<?php get_footer(); ?>