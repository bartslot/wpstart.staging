<?php
/**
 * Quote Content Template
 * This template is used for displaying posts in the Quote post format.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php if ( is_single() ) { ?>

<?php do_action('wpstart_entry_before'); ?>
						
	<?php
	wpstart_entry_content_start();
	wpstart_entry_content();
	wpstart_entry_content_end();
	
	wpstart_entry_footer_start();
	wpstart_meta_date();
	wpstart_meta_categories();
	wpstart_meta_tags();
	wpstart_meta_comments();
	wpstart_edit_post_link();
	wpstart_entry_footer_end();
	?>

<?php do_action('wpstart_entry_after'); ?>

<?php } else { ?>

<?php do_action('wpstart_entry_before'); ?>
				
	<?php
	wpstart_entry_content_start();
	wpstart_entry_content();
	wpstart_entry_content_end();
	
	wpstart_entry_footer_start();
	wpstart_meta_date();
	wpstart_meta_categories();
	wpstart_meta_tags();
	wpstart_meta_comments();
	wpstart_edit_post_link();
	wpstart_entry_footer_end();
	?>

<?php do_action('wpstart_entry_after'); ?>

<?php } ?>