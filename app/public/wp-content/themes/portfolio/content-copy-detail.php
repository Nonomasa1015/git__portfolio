<div class="contentDetails__title">
    <div class="contentDetails__top">
        <p><?php echo get_main_title(); ?></p>
        <time><?php the_time( 'Y.m.d' ); ?></time>
    </div>
    <div class="contentDetails__bottom">
        <h2><?php the_sub_field( 'copy_name' ); ?></h2>
        <p><?php the_content(); ?></p>
    </div>
</div>
<div class="contentDetails__img">
<?php
$image_id = get_sub_field( 'copy_img' );
echo wp_get_attachment_image( $image_id, 'copy-detail' );
?>
</div>
<div class="contentDetails__strength">
    <h3><?php the_sub_field( 'copy_strength' ); ?></h3>
    <p><?php the_sub_field( 'copy_strength_detail' ); ?></p>
</div>