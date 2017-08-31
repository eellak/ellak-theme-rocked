<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Rocked
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="preloader">
    <div class="preloader-inner">
    	<?php $preloader = get_theme_mod('preloader_text', __('Loading&hellip;','rocked')); ?>
    	<?php echo esc_html($preloader); ?>
    </div>
</div>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rocked' ); ?></a>

	<header id="header" class="header">
		<div class="header-wrap">
			<div class="container">
				<div class="row">
					<div class="site-branding col-md-3 col-sm-3 col-xs-3">
						<?php rocked_branding(); ?>
					</div><!-- /.col-md-2 -->
					<div class="menu-wrapper col-md-9 col-sm-9 col-xs-9">
						
						<!-- START OF CUSTOMIZED EELLAK SECTION!!! TO BE REPRODUCED IN EVERY THEME UPDATE FOR ROCKED!!!  -->
						<!-- Define the two EELLAK menu locations for ellak.gr  -->
						<nav id="main-nav" class="mainnav">
							<?php wp_nav_menu(array('theme_location' => 'usermenu', 'menu_id' => 'usermenu')); ?>
						</nav><!-- #site-navigation -->
						<div class="btn-menu">
							<i class="fa fa-bars"></i>
						</div>
						<nav id="mainnav" class="mainnav">
							<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
						</nav><!-- #site-navigation -->
						<!-- END OF CUSTOMIZED EELLAK SECTION -->
						
					</div><!-- /.col-md-10 -->
				</div><!-- /.row -->
			</div><!-- /container -->
		</div>
		
		<!-- START OF CUSTOMIZED EELLAK SECTION!!! TO BE REPRODUCED IN EVERY THEME UPDATE FOR ROCKED!!!  -->
		
		<!-- Define the embedd code for the *.ellak.gr domain-wide Duck-Duck-Go search form. -->
		<div class="ellak-rocked search-form-wrap">
			<div class='ellak-rocked search-icon-padding-wrap'>
					<div class='ellak-rocked search-icon'>
							<span class='ellak-rocked dashicon-search'></span>
					</div>
			</div>
			<div class='ellak-rocked search-form-padding-wrap' id='collapsible-search-form'>
					<form name="duckduckremote" action="https://www.duckduckgo.com/" method="GET" id='duckduckremote'target='_frame'>
							<input id='duckduckgo-search-field' type="text" name="q">
<!--                            <input type="hidden" name='kn' value='1'>-->
							<input id='duckduckgo-search-button' type="submit" value="&#xf179">
					</form>
					<script type='text/javascript'>
							jQuery('#duckduckremote').submit(function(){
								 val_to_send=jQuery('#duckduckremote input[name="q"]').val()+' site:ellak.gr';
								 jQuery('#duckduckremote input[name="q"]').val(val_to_send);
							});
							jQuery('#duckduckremote').click(function(){
								 //jQuery('#duckduckremote input[name="q"]').val()+' site:ellak.gr';
								 jQuery(this).select();
							});
					</script>
			</div>
	</div>
		
	<!-- Define the 'diadose' campaign banner bar -->
	<div class="ellak-diadose-wrap">
			<!-- the diadose banner bar -->
			<div id="ellak-diadose-bar" class="ellak-diadose">
					<div class='ellak-diadose-text-wrap'><a href="http://opensource.ellak.gr/ine-elefthero-ke-simferi">ΤΟ ΕΛΕΥΘΕΡΟ ΛΟΓΙΣΜΙΚΟ ΣΥΜΦΕΡΕΙ!</a></div>
					<div class="ellak-diadose-non-text-wrap">
							<div class='ellak-diadose-logo-wrap'>
									<a href="http://opensource.ellak.gr"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diadose-bar/logow.png"></a>
							</div>
							<div class="ellak-diadose-orange-frame"></div>
							<div class='ellak-diadose-birds'>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diadose-bar/birds-custom.png" alt="freedom">
							</div>
					</div>
			</div>
	</div>
	<!-- END OF CUSTOMIZED EELLAK SECTION -->
		
	</header>
	
	<?php if ( get_header_image() && ( get_theme_mod('front_header_type' ,'image') == 'image' && is_front_page() || get_theme_mod('site_header_type', 'image') == 'image' && !is_front_page() ) ) : ?>
	<div class="header-image parallax">
		<?php rocked_header_text(); ?>		
	</div>
	<?php endif; ?>

	<div class="main-content">
		<div class="container">
			<div class="row">