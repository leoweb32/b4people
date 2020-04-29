<?php $options = get_option('ordino'.'_theme_options');?>
<footer class="main-footer">
        <div class="auto-container">
            <!--Widgets Section-->
            <?php if ( is_active_sidebar( 'footer-sidebar' ) ): ?>
			<div class="widgets-section">
                <div class="row clearfix">
                    <?php dynamic_sidebar( 'footer-sidebar' );?>
                </div>
            </div>
			<?php endif;?>
        </div>
        
        <!--Footer Bottom-->
        <?php if(!(ordino_set($options, 'bottom_footer_show'))):?>
		<div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bottom-links">
                        <li><a href="<?php echo esc_url(ordino_set($options, '$footer_link1')); ?> "><?php echo wp_kses_post(ordino_set($options, 'footer_title1')); ?></a></li>
                        <li><a href="<?php echo esc_url(ordino_set($options, '$footer_link2')); ?> "><?php echo wp_kses_post(ordino_set($options, 'footer_title2')); ?></a></li>
                        <li><a href="<?php echo esc_url(ordino_set($options, '$footer_link3')); ?> "><?php echo wp_kses_post(ordino_set($options, 'footer_title3')); ?></a></li>
                    </ul>
                    
					<?php if(!ordino_set($options, 'copy_show')):?>
					<div class="copyright-text"><?php echo wp_kses_post(ordino_set($options, 'copy_right')); ?></div>
					<?php endif;?>
                </div>
            </div>
        </div>
		<?php endif;?>
    </footer>
<!--End pagewrapper-->
</div>
</div>
<?php if(!(ordino_set($options, 'footer_to_top'))):?>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<?php endif;?>
<?php wp_footer(); ?>
</body>
</html>