<?php
/*
Template Name: 摸写詳細
*/
get_header();
?>
<section class="contentDetails">
  <div class="contentDetails__inner">
<?php
$copys = array( 'copy_detail');
foreach ( $copys as $copy ):
  if ( have_rows( $copy ) ):
    while ( have_rows( $copy ) ): the_row();
      get_template_part( 'content-copy-detail' );
    endwhile;
  endif;
endforeach;
?>
  </div>
</section>
<?php get_footer(); ?>









<!-- <?php
if ( have_posts() ):
	while ( have_posts() ): the_post();
		the_content();
	endwhile;
endif;
?> -->
