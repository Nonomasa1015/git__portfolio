<article class="index__article hover-scale">
  <div class="animate__animated">                 
    <a class="index__a" href="<?php echo get_term_link( $term ); ?>">
      <div class="index__body">
        <div class="index__bodyTop">
          <p class="index__title"><?php echo $term->name; ?></p>
          <p class="index__excerpt"><?php echo $term->description; ?></p>
        </div>
        <div class="index__bodyBottom">
          <time><?php the_time( 'Y.m.d' ); ?></time>
          <button type="button" class="index__seeDetail">MORE</button>
        </div>
      </div>
      <div class="index__img">
<?php
$image_id = get_field( 'kinds_image', $term->taxonomy. '_'. $term->term_id );
echo wp_get_attachment_image( $image_id);
?>
      </div>
    </a>
  </div>
</article>
