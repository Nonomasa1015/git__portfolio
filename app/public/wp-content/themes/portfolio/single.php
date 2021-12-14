<?php get_header(); ?>
<section class="contentDetails">
	<div class="contentDetails__inner">
<?php
if ( have_posts() ):
	while ( have_posts() ) : the_post();
		get_template_part( 'content-single' );
	endwhile;
endif;
?>
	</div>
</section>
<?php get_footer(); ?>