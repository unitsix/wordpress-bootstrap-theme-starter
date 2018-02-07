<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid p-3 p-md-5">
            <div class="site-info row">
            	<div class="col-xs-12 col-md-4 col-lg-3">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                
                &nbsp;|&nbsp;
                
               		<a class="credits small" href="https://stackoverflow.com/story/unitsix" target="_blank" title="Site by unitsix" alt="Site by unitsix"><?php echo esc_html__('u6','wp-bootstrap-starter'); ?></a>
                
                </div>
                <div class="col-xs-12 col-md-6">
                    <span id="social_items">
                    <?php if ( get_theme_mod( 'social_menu_facebook' ) &&  get_theme_mod( 'social_menu_facebook' ) !== ''): ?>	
                    &nbsp;<a class="credits" title="facebook" href="<?php echo esc_url( get_theme_mod( 'social_menu_facebook' )); ?>" class="nav-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;
                    
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'social_menu_twitter' ) &&  get_theme_mod( 'social_menu_twitter' ) !== ''): ?>	
                    &nbsp;<a class="credits" title="twitter" href="<?php echo esc_url( get_theme_mod( 'social_menu_twitter' )); ?>" class="nav-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;
                    
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'social_menu_instagram' ) &&  get_theme_mod( 'social_menu_instagram' ) !== ''): ?>	
                    &nbsp;<a class="credits" title="instagram" href="<?php echo esc_url( get_theme_mod( 'social_menu_instagram' )); ?>" class="nav-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;
                    
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'social_menu_bandcamp' ) &&  get_theme_mod( 'social_menu_bandcamp' ) !== ''): ?>	
                    &nbsp;<a class="credits" title="bandcamp" href="<?php echo esc_url( get_theme_mod( 'social_menu_bandcamp' )); ?>" class="nav-link"><i class="fa fa-bandcamp" aria-hidden="true"></i></a>&nbsp;
                    
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'social_menu_youtube' ) &&  get_theme_mod( 'social_menu_youtube' ) !== ''): ?>	
                    &nbsp;<a class="credits" title="youtube" href="<?php echo esc_url( get_theme_mod( 'social_menu_youtube' )); ?>" class="nav-link"><i class="fa fa-youtube" aria-hidden="true"></i></a>&nbsp;
                    
                    <?php endif; ?>
                    </span>
				</div>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->
<script>
jQuery('#main_nav_items ul').append('<li class="nav-item">' + jQuery('#social_items').html() + '</li>');

jQuery( "h1, h2, h3, a" ).each(function( index ) {
	if( jQuery(this).text() !== '' ){
  		jQuery( this ).attr( "data-text", jQuery(this).text() );
	} else {
		jQuery( this ).attr( "data-text", '-_' );
	}
});

</script>
<?php wp_footer(); ?>
</body>
</html>
