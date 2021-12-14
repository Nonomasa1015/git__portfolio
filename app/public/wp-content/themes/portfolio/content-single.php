    <div class="contentDetails__title">
        <div class="contentDetails__top">
            <p><?php echo get_main_title(); ?></p>
            <time><?php the_time( 'Y.m.d' ); ?></time>
        </div>
        <div class="contentDetails__bottom">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
    </div>
    <div class="contentDetails__img"><?php the_post_thumbnail(''); ?></div>
    <div class="contentDetails__moreNews">
<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
if ( $prev_post ):
?>
            <div class="contentDetails__prev">
                <a href="<?php echo get_permalink( $prev_post->ID ); ?>">PREV</a>
            </div>
<?php
endif;
if ( $next_post ):
?>
            <div class="contentDetails__next">
                <a href="<?php echo get_permalink( $next_post->ID ); ?>">NEXT</a>
            </div>
<?php endif; ?>
    </div>