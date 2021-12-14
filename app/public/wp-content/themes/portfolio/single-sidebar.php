<?php
/*
Template Name: サイドバーあり
Template Post Type: my_achivement
*/
get_header(); ?>
			  <div class="page-inner two-column">
                <div class="page-main" id="pg-company">
                  <div class="content2">
                    <div class="content-main">

<section class="content">

<?php
if( have_posts() ):
	while(have_posts()):the_post();
		get_template_part('content-single');
	endwhile;
endif;
?>

</section>

                    </div>
<?php get_sidebar(); ?>
                  </div>
                </div>
              </div>
<?php get_footer(); ?>
