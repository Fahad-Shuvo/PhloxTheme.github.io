<?php
/**
 * Load frontend scripts and styles
 *
 * 
 * @package    Auxin
 * @license    LICENSE.txt
 * @author     
 * @link       http://averta.net/phlox/
 * @copyright  (c) 2010-2017 
 */

/**
* Constructor
*/
class AUXPFO_Frontend_Assets {


	/**
	 * Construct
	 */
	public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'load_styles' ) );
	}

    /**
     * Styles for admin
     *
     * @return void
     */
    public function load_styles() {
        if( current_theme_supports( 'auxin-portfolio' ) ){
            wp_enqueue_style( 'auxin-portfolio' , get_template_directory_uri() . '/css/portfolio.css', array('auxin-main'), AUXPFO_VERSION );
        }
        //wp_enqueue_style( AUXPFO_SLUG .'-main',   AUXPFO_PUB_URL . '/assets/css/main.css',  array(), AUXPFO_VERSION );
    }

    /**
     * Scripts for admin
     *
     * @return void
     */
    public function load_scripts() {
        //wp_enqueue_script( AUXPFO_SLUG .'-main', AUXPFO_PUB_URL . '/assets/js/main.js', array('jquery'), AUXPFO_VERSION, true );
    }

}
return new AUXPFO_Frontend_Assets();
