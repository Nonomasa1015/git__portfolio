<article class="index__article hover-scale">
  <div class="animate__animated">
    <a class="index__a" href="<?php the_permalink(); ?>">
      <div class="index__body">
        <div class="index__bodyTop">
          <p class="index__title"><?php the_title(); ?></p>
          <p class="index__excerpt"><?php echo get_flexible_excerpt( 40 ); ?></p>
        </div>
        <div class="index__bodyBottom">
          <time><?php the_time( 'Y.m.d' ); ?></time>
          <button type="button" class="index__seeDetail">MORE</button>
        </div>
      </div>
      <div class="index__img"><?php the_post_thumbnail(''); ?></div>
    </a>
  </div>
</article>