<?php get_header(); ?>
    <div class="page">
        <div class="page__inner">
<?php
if( have_posts() ):
	while( have_posts() ):the_post();
		the_content();
	endwhile;
endif;
?>
        </div>
    </div>
<?php get_footer(); ?>