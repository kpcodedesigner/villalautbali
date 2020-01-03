<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
		<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
        
        
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body>
	
	
	<header class="header_main">
		<div class="container">
			<div class="header_top">
				<div class="row">
					<div class="col-sm-6 text-sm-left text-center">
					<span>Call Us :<?php echo of_get_option('header_top_lable'); ?></span>
					<!--	<span class="title">Call Us :</span> <a href="tel:5555894567" class="content"> 555-589-4567</a> 
					
					-->
					</div>
					<div class="col-sm-6 text-sm-right text-center"> 
					<span>Email Us :<?php echo of_get_option('header_topright_lable'); ?></span>
						<!-- <span class="title">Email Us :</span> <a href="mailto:info@villalautbali.com" class="content">info@villalautbali.com</a> -->
					</div>
				</div>
			</div>
			<div class="header_bottom">
				<div class="row">
					<div class="col-10 col-lg-4">
						 <a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo of_get_option('header_logo'); ?>" class="img-responsive" alt="header logo"/> 
						</a>
					</div>
					<div class="col-2 d-lg-none">
						<a href="javascript:void(0);" class="menu_icon list-link header_menu_click d-flex h-100 justify-content-end align-items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 43 28"><g><g><path fill="#2c353b" d="M0 1.646C0 .736.727 0 1.623 0h39.754c.896 0 1.623.738 1.623 1.647 0 .91-.727 1.647-1.623 1.647H1.623A1.636 1.636 0 0 1 0 1.646zM0 14c0-.91.727-1.647 1.623-1.647h39.754c.896 0 1.623.738 1.623 1.647 0 .91-.727 1.648-1.623 1.648H1.623A1.636 1.636 0 0 1 0 13.999zm0 12.353c0-.91.727-1.647 1.623-1.647h39.754c.896 0 1.623.738 1.623 1.647 0 .91-.727 1.648-1.623 1.648H1.623A1.636 1.636 0 0 1 0 26.352z"></path></g></g></svg>
						</a>
					</div>
					<div class="col-lg-8 col-12 header_main_navbar">
						<nav class="navbar navbar-expand-lg p-0 justify-content-lg-end h-100">
							   <?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	
	

