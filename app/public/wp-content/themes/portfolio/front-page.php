<?php get_header(); ?>
                <section class="achivement">
                    <div class="achivement__inner">
                        <div class="achivement__header">
<?php
$achivement_obj = get_page_by_path( 'achivement' );
$post = $achivement_obj;
setup_postdata( $post );
$achivement_title = get_the_title();
?>
                            <h1 class="heading animate__animated">
                                <span class="heading__line"></span>
                                <span class="heading__title"><?php the_title(); ?></span>
                                <span class="heading__subtitle"><?php echo get_the_excerpt(); ?></span>
                            </h1>
<?php wp_reset_postdata(); ?>
                            <div class="achivement__header-right animate__animated">
                                <span class="achivement__lBtn">お知らせ</span>
                                <span class="achivement__rBtn">プレリリース</span>
                            </div>
                        </div>
                        <div class="achivement__article">
<?php
$achivement_pages = get_specific_posts( 'my_achivement', 'kinds', '', 4 );
if ( $achivement_pages->have_posts() ) :
	while ( $achivement_pages->have_posts() ) : $achivement_pages->the_post();
?>
                            <article class="article animate__animated hover-darken">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="article__top">
                                        <time class="time">
                                            <span class="time__year">2021 MON</span>
                                            <div class="time__days"><span class="month">09</span>/<span class="date">13</span></div>
                                        </time>
                                        <div class="article__img"><?php the_post_thumbnail( 'common' ); ?></div>
                                    </div>
                                    <div class="article__bottom">
                                        <div class="article__header">
                                            <p class="announce"><?php echo $term->name; ?></p>
                                            <span class="new">NEW</span>
                                        </div>
                                        <p class="article__title"><?php the_title(); ?></p>
                                        <p class="article__subtitle"><?php echo get_the_excerpt(); ?></p>
                                    </div>
                                </a>
                            </article>
<?php
	endwhile;
	wp_reset_postdata();
endif;
?>
                        </div>
                        <div class="achivement__footer animate__animated">
                            <a href="<?php echo esc_url( home_url('achivement' )); ?>" class="hover-darken">
                                <?php echo $achivement_title; ?>へ　<span>ー</span>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="portfolio">
                    <div class="portfolio__inner">
<?php
$portfolio_obj = get_page_by_path( 'portfolio' );
$post = $portfolio_obj;
setup_postdata( $post );
$portfolio_title = get_the_title();
?>
                        <h3 class="heading animate__animated">
                            <span class="heading__line"></span>
                            <span class="heading__title"><?php the_title(); ?></span>
                            <span class="heading__subtitle"><?php echo get_the_excerpt(); ?></span>
                        </h3>
<?php wp_reset_postdata(); ?>
                        <div class="portfolio__boxes">
<?php
$portfolio_pages = get_child_pages( 4, $portfolio_obj->ID );
if ( $portfolio_pages->have_posts() ) :
	while ( $portfolio_pages->have_posts() ) : $portfolio_pages->the_post();
?>
                            <div class="portfolio__box animate__animated">
                                <div class="hover-scale">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="portfolio__img"><?php the_post_thumbnail( 'common' ); ?></div>
                                        <p class="portfolio__title"><?php the_title(); ?></p>
                                        <p class="portfolio__text"><?php echo get_the_excerpt(); ?></p>
                                    </a>
                                </div>
                            </div>
<?php
	endwhile;
	wp_reset_postdata();
endif;
?>
                        </div>
                        <div class="portfolio__footer animate__animated">
                            <a href="<?php echo esc_url( home_url('portfolio' )); ?>" class="hover-darken">
                                <?php echo $portfolio_title; ?>へ　<span>ー</span>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="copy">
                    <div class="copy__inner">
<?php
$copy_obj = get_page_by_path( 'copy' );
$post = $copy_obj;
setup_postdata( $post );
$copy_title = get_the_title();
?>
                        <h4 class="heading animate__animated">
                            <span class="heading__line"></span>
                            <span class="heading__title"><?php the_title(); ?></span>
                            <span class="heading__subtitle"><?php echo get_the_excerpt(); ?></span>
                        </h4>
<?php wp_reset_postdata(); ?>
                        <div class="copy__contents">
<?php
$copy_pages = get_child_pages( 4, $copy_obj->ID );
if ( $copy_pages->have_posts() ) :
	while ( $copy_pages->have_posts() ) : $copy_pages->the_post();
?>
                            <div class="copy__box animate__animated hover-darken">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="copy__img"><span>個別インタビュー</span><?php the_post_thumbnail( 'common' ); ?></div>
                                    <div class="copy__text">
                                        <time><?php the_time('Y.m.d'); ?></time>
                                        <p><?php the_title(); ?></p>
                                        <p><?php echo get_the_excerpt();?></p>
                                    </div>
                                </a>
                            </div>
<?php
	endwhile;
	wp_reset_postdata();
endif;
?>
                        </div>
                        <div class="copy__footer animate__animated">
                            <a href="<?php echo esc_url( home_url('copy' )); ?>" class="hover-darken">
                                <?php echo $copy_title; ?>へ　<span>ー</span>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="myself">
                    <div class="myself__inner">
                        <h2 class="heading animate__animated">
                            <span class="heading__line"></span>
                            <span class="heading__title">自己紹介</span>
                            <span class="heading__subtitle">私について</span>
                        </h2>
                        <div class="myself__box animate__animated">
                            <div class="myself__img"><img src="<?php echo get_template_directory_uri(); ?>/images/masato.jpg" alt="nonoshita-masato"></div>
                            <div class="myself__right">
                                <div class="myself__header">
                                    <time class="time-600down">
                                        <span class="time-600down__year">1999</span>
                                        <div class="time-600down__days"><span class="month">10</span>/<span class="date">15</span></div>
                                        <span class="time-600down__title">生年月日</span>
                                    </time>
                                    <div class="myself__title">野々下　維斗（ののした　まさと）</div>
                                </div>
                                <div class="myself__contents">
                                    <time class="time">
                                        <span class="time__year">1999</span>
                                        <div class="time__days"><span class="month">10</span>/<span class="date">15</span></div>
                                        <span class="time__title">生年月日</span>
                                    </time>
                                    <div class="myself__shaft">
                                        <div><span class="myself__shaftTitle">筋肉</span><p class="myself__shaftText">体脂肪率は変わらず体重を20kg増やしました。</p></div>
                                        <div><span class="myself__shaftTitle">自然</span><p class="myself__shaftText">日本一周、離島暮らし、ソロキャンプなどを一人で満喫しています。</p></div>
                                        <div><span class="myself__shaftTitle">お金</span><p class="myself__shaftText">一人でマネタイズできるスキルを得るためwebデザインをしています。</p></div>
                                        <p class="myself__text">Society5.0の実現に向けた科学技術・イノベーション第6期基本計画（2021年4月より）やDX（デジタル・トランスフォーメーション）推進により、具体的にIoT やAI の活用が期待されています。本セミナーではIoTの概要について、市場の予測を含めて解説し、次にIoTによるスマート農業の事例と技術をご紹介します。最後に応用アイデア創出のためのIoTプロトタイピングの勧めについてお話しします。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sns">
                    <div class="sns__inner">
                        <h5 class="heading animate__animated">
                            <span class="heading__line"></span>
                            <span class="heading__title">SNS</span>
                            <span class="heading__subtitle">私のSNSです。</span>
                        </h5>
                        <div class="sns__box">
                            <?php dynamic_sidebar( 'sns-area' ); ?>
                        </div>
                    </div>
                </section>
<?php get_footer(); ?>



<!-- <section class="copy">
                    <div class="copy__inner">
<?php $term_obj = get_term_by( 'slug', 'achivement', 'category' ); ?>
                        <h4 class="heading animate__animated">
                            <span class="heading__line"></span>
                            <span class="heading__title"><?php echo $term_obj->name; ?></span>
                            <span class="heading__subtitle"><?php echo $term_obj->description; ?></span>
                        </h4>
                        <div class="copy__contents">
<?php
$achivement_posts = get_specific_posts( 'post', 'category', 'achivement', 3 );
if( $achivement_posts->have_posts() ):
	while( $achivement_posts->have_posts() ): $achivement_posts->the_post();
?>
                            <div class="copy__box">
                                <a href="<?php the_permalink(); ?>"></a>
                                <div class="copy__img"><span>個別インタビュー</span><img src="<?php echo get_template_directory_uri(); ?>/images/akashi_main-800x560.jpg" alt="mr.akashi"></div>
                                <div class="copy__text">
                                    <time><?php the_time('Y.m.d'); ?></time>
                                    <p><?php the_title(); ?></p>
                                    <p><?php echo get_the_excerpt();?></p>
                                </div>
                            </div>  
<?php
	endwhile;
	wp_reset_postdata();
endif;
?>
                    </div>
                </section> -->