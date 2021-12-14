<?php get_header(); ?>
			        <section class="searchPage">
                <div class="searchPage__inner">
                  <div class="searchPage__top animate__animated">
                    <form class="searchPage__form" role="search" method="get" action="<?php echo esc_url( home_url() ); ?>">                    
                      <input type="text" name="s" placeholder="キーワードを入力してください" value="<?php the_search_query(); ?>" />
                      <button type="submit" >検索</button>                    
                    </form>
<?php if ( get_search_query() ): ?>
                    <div class="searchPage__header">
                      <h2>「<?php the_search_query(); ?>」の検索結果</h2>
                      <p>全<?php echo $wp_query->found_posts; ?>件</p>
                    </div>
                  </div>
                  <div class="searchPage__result">
<?php endif; ?>
                    <div class="searchPage__box">
<?php
if ( have_posts() && get_search_query() ) :
	while ( have_posts() ) : the_post();
?>
                      <article class="searchPage__article taxonomy__article animate__animated">
                        <div class="searchPage__articleInner taxonomy__articleInner hover-scale">
                          <a href="<?php the_permalink(); ?>">
                            <div class="searchPage__img taxonomy__img">
<?php
$image = get_the_post_thumbnail( $post->ID, 'search' );
if ( $image ):
	echo $image;
else:
	echo '<img src="'. get_template_directory_uri(). '/assets/images/img-noImage.png">';
endif;
?>
                            </div>
                            <div class="searchPage__bottom taxonomy__bottom">
                              <div class="searchPage__content taxonomy__content">
                                <div class="searchPage__title taxonomy__title"><?php the_title(); ?></div>
                                <div class="searchPage__excerpt taxonomy__excerpt"><?php echo get_the_excerpt(); ?></d>
                              </div>
                              <div class="searchPage__button taxonomy__button">
                                  <button type="button">MORE</button>
                              </div>
                            </div>
                          </a>
                        </div>
                      </article>
<?php endwhile; ?>
                    </div>
                    <div class="pager">
                      <ul class="pagerList">
<?php
if ( function_exists( 'page_navi' ) ):
	page_navi();
endif;
?>
                      </ul>
                    </div>
<?php elseif( ! get_search_query() ): ?>
                    <p class="searchPage__lost"> 検索ワードが入力されていません</p>
<?php else: ?>
                    <p class="searchPage__lost"> 該当する記事は見つかりませんでした。</p>
<?php endif; ?>
                  </div>
                </div>
              </section>
<?php get_footer(); ?>