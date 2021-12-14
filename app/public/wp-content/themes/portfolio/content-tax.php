<article class="taxonomy__article animate__animated">
    <div class="taxonomy__articleInner hover-scale">
      <a href="<?php the_permalink(); ?>">
        <div class="taxonomy__img"><?php the_post_thumbnail('detail'); ?></div>
        <div class="taxonomy__bottom">
          <div class="taxonomy__content">
            <p class="taxonomy__title"><?php the_title(); ?></p>
            <p class="taxonomy__excerpt"><?php echo get_the_excerpt(); ?></p>
          </div>
          <div class="taxonomy__button">
              <button type="button">MORE</button>
          </div>
        </div>
      </a>
    </div>
  </article>