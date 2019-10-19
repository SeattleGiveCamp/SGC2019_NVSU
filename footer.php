<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package web2feel
 */
?>

	</div><!-- #content -->
	
	<div id="bottom">
		<div class="container">
			<div class="row">
			
			<?php if ( !function_exists('dynamic_sidebar')
			        || !dynamic_sidebar("Footer") ) : ?>  
			<?php endif; ?>
			
<!--			<div class="col-6 col-lg-6 mission">
            	<h3>MISSION STATEMENT</h3>
                <p>"Our mission is to provide a full range of employment services to individuals living with neurological conditions and to assist them to work and lead productive lives."</p>
            </div>
            <div class="col-2 col-lg-2">
            sdfdsf
            </div>
            <div class="col-2 col-lg-2">
            sdfdsf
            </div>
            <div class="col-2 col-lg-2">
            	<img src="http://nvsrehab.org/wp-content/uploads/2014/10/carf_le.png">
            </div>
            -->
			</div>
		</div>
	</div>
	
	
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info wrap row">
			<div class="fcred col-12">
				Copyright &copy; 2004 - <?php echo date('Y');?> <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo('name'); ?></a>.<br />
<!--<?php fflink(); ?> | <a href="http://fabthemes.com/<?php echo FT_scope::tool()->themeName ?>/" ><?php echo FT_scope::tool()->themeName ?> WordPress Theme</a>-->
			</div>		

		</div><!-- .site-info -->
	</div>	
</footer><!-- #colophon .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
