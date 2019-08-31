<?php get_header(); ?>

	<div class="row">
        <div class="col-sm-1">
        </div>
		<div class="col-sm-10 text-justify">

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile; endif;
			?>

        </div> <!-- /.col -->
        <div class="col-sm-1">
	    </div>
	</div> <!-- /.row -->

<?php get_footer(); ?>