</main>
        </div>
        <footer class="footer">
            <div class="footer__inner">
                <div class="footer__middle">
                    <div class="footer__middleInner">
<?php
wp_nav_menu(
	array (
		'theme_location' => 'place_footer',
		'container' => false,
        'menu_class' => 'footer__ul',
	)
);
?>
                        
                    </div>
                </div>
                <div class="footer__copyLight">
                    <small>Copyright © N.masato</small>
                </div>
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>
</html>