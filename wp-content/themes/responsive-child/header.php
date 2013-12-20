<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<script type="text/javascript" src="//use.typekit.net/cxu0mrc.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Sara VanDerBeek</title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>

<?php if(strpos(get_permalink(),'cleveland') != false) : ?>
	<div id="widgets_top" class="<?php echo implode( ' ', responsive_get_sidebar_classes() ); ?>">
		<?php responsive_widgets(); // above widgets hook ?>
	
		<div class="widget-wrapper">
			<ul><li><a href="http://www.mocacleveland.org/exhibitions/sara-vanderbeek">< MOCA Cleveland</a></li></ul>
		</div><!-- end of .widget-wrapper -->
	
		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #widgets -->

<?php endif; ?>


<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>
		<?php responsive_in_header(); // header hook ?>

		<?php if(strpos(get_permalink(),'cleveland') == false) : ?>

			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"><?php echo bloginfo( 'name' ); ?></a>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed ?>

		
		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>