<?php get_header(); ?>
<section class="index">
	<div class="index__inner">
<?php
$common_pages = get_child_pages();
if( $common_pages->have_posts() ):
	while( $common_pages->have_posts() ): $common_pages->the_post();
		get_template_part( 'content-common' );
	endwhile;
	wp_reset_postdata();
endif;
?>
	</div>
</section>
<?php get_footer(); ?>
