<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main Widget Template
 *
 *
 * @file           sidebar.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */

/*
 * If this is a full-width page, exit
 */
if( 'full-width-page' == responsive_get_layout() ) {
	return;
}
?>


<?php responsive_widgets_before(); // above widgets container hook ?>

	<div id="widgets" class="<?php echo implode( ' ', responsive_get_sidebar_classes() ); ?>">
		<?php responsive_widgets(); // above widgets hook ?>

		<div class="widget-wrapper">

			<?php if (strpos(get_permalink(),'cleveland') == false): ?>
				<ul>
					<li><a href="#">Past</a></li>
					<li><a href="#">Present</a></li>
					<li><a href="#">Notes</a></li>
					<li><a href="#">Info</a></li>
				</ul>
			
			<?php else: ?>
				
				<ul>
					<li><a href="../">Sara VanDerBeek ></a></li>
				</ul>
			
			<?php endif; ?>
		</div><!-- end of .widget-wrapper -->

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>

