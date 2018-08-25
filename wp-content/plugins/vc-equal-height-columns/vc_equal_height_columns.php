<?php
/*
Plugin Name: Equal Height Columns for Visual Composer
Plugin URI: http://creativebackpack.com
Description: Extend Visual Composer with your own set of shortcodes.
Version: 0.1.0
Author: CreativeBackpack
Author URI: http://creativebackpack.com
License: GPLv2 or later
*/

if (!defined('ABSPATH')) die('-1');

class VCExtendAddonClass {
    function __construct() {
        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'integrateWithVC' ) );
 
        // Register CSS and JS
        add_action( 'wp_enqueue_scripts', array( $this, 'loadCssAndJs' ) );
    }
 
    public function integrateWithVC() {
        // Check if Visual Composer is installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            // Display notice that Visual Compser is required
            add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
            return;
        }
 
		$attributes = array(
			'type' => 'dropdown',
			'heading' => 'Equal Height Columns',
			'param_name' => 'equal_height_columns',
			'value' => array( "no", "yes" )
		);
		
		vc_add_param( 'vc_row', $attributes ); 
		vc_add_param( 'vc_row_inner', $attributes ); 
		
		$dir = plugin_dir_path( __FILE__ ) . 'assets/templates/';
		vc_set_shortcodes_templates_dir( $dir );	
    }

    /*
    Load plugin css and javascript files which you may need on front end of your site
    */
    public function loadCssAndJs() {
      wp_register_style( 'vc_equal_height_columns_style', plugins_url('assets/styles.min.css', __FILE__) );
      wp_enqueue_style( 'vc_equal_height_columns_style' );

      // If you need any javascript files on front end, here is how you can load them.
      wp_enqueue_script( 'jquerymatchHeight-min.js', plugins_url('assets/jquery.matchHeight-min.js', __FILE__), array('jquery') );
      wp_enqueue_script( 'vc_equal_height_columns_js', plugins_url('assets/scripts.min.js', __FILE__), array('jquery') );
    }

    /*
    Show notice if your plugin is activated but Visual Composer is not
    */
    public function showVcVersionNotice() {
        $plugin_data = get_plugin_data(__FILE__);
        echo '
        <div class="updated">
          <p>'.sprintf(__('<strong>%s</strong> requires <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'vc_extend'), $plugin_data['Name']).'</p>
        </div>';
    }
}

new VCExtendAddonClass();