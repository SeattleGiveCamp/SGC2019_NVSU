<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package web2feel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header container" role="banner">
		<div class="row">
		<div class="site-branding col-sm-6">
			
	<?php if (get_theme_mod(FT_scope::tool()->optionsName . '_logo', '') != '') { ?>
				<h1 class="site-title logo"><a class="mylogo" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img relWidth="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxWidth', 0)); ?>" relHeight="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxHeight', 0)); ?>" id="ft_logo" src="<?php echo get_theme_mod(FT_scope::tool()->optionsName . '_logo', ''); ?>" alt="" /> <!--<?php bloginfo( 'name' ); ?>--></a></h1>
	<?php } else { ?>
				<h1 class="site-title logo"><a id="blogname" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php } ?>

		
		</div>
        <div class="col-xs-12">
                <div class="site-branding col-sm-4 text-center">
                    <?php dynamic_sidebar('header-widget'); ?>
                </div>
                
                    <ul class="social">
                        <li><a href="http://www.facebook.com/pages/Neurological-Vocational-
Services/341864037647" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/fbook.png"></a></li>
                        <li><a href="http://www.twitter.com/nvsrehab" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/twitter.png"></a></li>
                        <li><a href="http://www.youtube.com/nvsrehab" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/ytube.png"></a></li>
                    </ul>  

        </div>
     </div>
     <div class="row">
		<div class="col-xs-8 mainmenu">
		<div class="mobilenavi"></div>
				<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','container_class' => 'topmenu','menu_id'=>'topmenu' ,'menu_class'=>'sfmenu' ) ); ?>
		</div>
        
                      
<!--                
               <div class="col-xs-4"> <button class="donate"><a href="google.com"> Donate </a></button></div>
               
                <div class="col-xs-1"> <a href="google.com"> Donate </a></div>-->
		
		</div> <!-- end row -->
	</header><!-- #masthead -->
	
	
	<?php if( is_page_template('homepage.php') ){ get_template_part( 'inc/feature' ); } ?>

	<div id="content" class="site-content ">
	