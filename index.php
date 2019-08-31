<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 text-justify">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
			<?php endwhile; endif;
			?>
		</div><br><br>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>