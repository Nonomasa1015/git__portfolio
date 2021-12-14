<?php get_header(); ?>
<section class="index">
	<div class="index__inner">

<?php
$terms = get_terms( 'kinds' );
foreach ( $terms as $term ) :
	include 'content-achivement.php';
endforeach;
?>
	</div>
</section>
<?php get_footer(); ?>
