<?php get_header(); ?>
              <section class="error">
                <div class="error__inner">
                  <div class="error__sentence">
                    <h2>ページが見つかりません</h2>
                    <p>
                      お探しのページは、移動または削除された可能性があります。<br>
                      サイト内検索にて再度お試しください。
                    </p>
                  </div>
                  <form class="searchPage__form" role="search" method="get" action="<?php echo esc_url( home_url() ); ?>">
                      <input type="text" name="s" placeholder="キーワードを入力してください" value="">
                      <button type="submit">検索</button>
                  </form>
                </div>
              </section>
<?php get_footer(); ?>