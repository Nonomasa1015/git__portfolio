<?php get_header(); ?>
<section class="taxonomy">
  <div class="taxonomy__inner">
<?php
$term = get_specific_posts( 'my_achivement', 'kinds', $term, -1 );
if ( $term->have_posts() ):
	while ( $term->have_posts() ): $term->the_post();
		get_template_part( 'content-tax' );
	endwhile;
	wp_reset_postdata();
endif;
?>
  </div>
</section>
<?php get_footer(); ?>
