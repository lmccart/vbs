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

			<?php if ((strpos(get_permalink(),'cleveland') == false) && !is_front_page()){ ?>
				<ul>
				
				<?php 
					$items = array("Recent", "Past", "Notes", "Info"); 
					foreach ($items as $i) {
						$class = ((strpos(get_permalink(),strtolower($i)) == true) ? 'style="text-decoration:underline;"' : '');
						echo '<li><a '.$class.' href="#">'.$i.'</a></li>';
					}
					?>
				</ul>
			
			<?php } ?>

		</div><!-- end of .widget-wrapper -->

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>

