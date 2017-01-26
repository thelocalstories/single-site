<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Single Site
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="google-site-verification" content="J6aiTcJTwSwAKF1sEdevXrRtS8lSHdlfUMBloIDE8hA" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" />
<!--[if IE]><link rel="shortcut icon" href="/img/favicon.ico"><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,600,800,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
     <div id="wrapper">
	   <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'single-site' ); ?></a>

		<nav>
            <div class="main-nav">
                <div class="grid-container">
                     <div class="nav-button"><span>menu</span></div>
                    <div class="logo-container">
                        <a class="navScroll" href="#" data-target="header" ><img id="logo" alt="" src=" <?php echo get_template_directory_uri() ?>/img/stubbfrasning_logo_transp.png">
                          <h1 id="company-name">Stubbfräsning<br>i Sörmland</h1>
                        </a>

                    </div>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'top_menu' ) ); ?>
                   
                    
                </div>
            </div>
        </nav><!-- #site-navigation -->
    <!--  =========   Header Content  =========   -->
    <a id="header"></a>
    <header class="main-header">
        <div class="grid-container">
            <div class="col-6" >
                <h2 id="site-description" class="fade"><?php bloginfo( 'description' ); ?></h1>
                <h3 class="fade"cl>Vi har lösningen för dig!</h3>
            </div>
            <p class="col-6"><a id="offer-btn" href="#offert">Skicka offertförfrågan</a></p>
        </div>
    </header>   
         
	<div id="content" class="site-content">
       

      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        