<?php
    /**
     * Plugin Name: Pattern Box
     * Plugin URI: https://dragwp.com/
     * Description: A WordPress pattern library plugin for block editor. 
     * Version: 1.0.6
     * Author: Drag WP
     * Author URI: https://dragwp.com
     * Text Domain: pattern-box
     * License: GPLv2 or later
     * License URI: http://www.gnu.org/licenses/gpl-2.0.html
     * Requires at least: 6.0
     * Requires PHP: 7.0
     * Tags: patterns, blocks, Gutenberg, design, WordPress
     * Category: design
     */

    // Exit if accessed directly.
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }
      
    use PatternBox\PatternBoxMain;
    use PatternBox\PatternBoxDashboard;

    if(!class_exists('PatternBox')){

    require __DIR__ . '/vendor/autoload.php';

    final class PatternBox {

        /*
        * plugin version
        */
        const version = '1.0.0';
        
        private static $instance = null;

        private function __construct() {
            $this->define_constants();	
            add_action('init', [$this, 'dwpb_main_init']);
            add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
            add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_scripts']);
        }

        public static function get_instance() {
            if (self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * define constractors
         *
         * @return void
        **/
        public function define_constants(){

            define('DWPB_PREFIX', 'DWPB_' ); 
            define('DWPB_VERSION', self::version ); 
            define('DWPB_FILE', __FILE__ ); 
            define('DWPB_BASENAME', plugin_basename( DWPB_FILE ) );
            define('DWPB_PATH', __DIR__ ); 
            define('DWPB_DIR', dirname(DWPB_FILE).'/' ); 
            define('DWPB_URL', plugins_url('', DWPB_FILE) ); 
            define('DWPB_IMAGE', DWPB_URL.'/assets/images' ); 
            define('DWPB_TIME', time() ); 
        }

        public function dwpb_main_init() {
            new PatternBoxMain();
            new PatternBoxDashboard();
        }

        /**
         * enqueue scripts
         *
         * @return void
        **/

        public function enqueue_scripts() {

            wp_register_style(
                'pattern-box-css',
                plugin_dir_url(__FILE__) . 'assets/css/style.css',
                [],
                DWPB_VERSION
            );

            wp_register_script(
                'pattern-box-js',
                plugin_dir_url(__FILE__) . 'assets/js/index.js',
                [],
                DWPB_VERSION,
                true
            );

            wp_enqueue_style('pattern-box-css');
        }
        
        /**
         * enqueue scripts
         *
         * @return void
        **/
        public function enqueue_admin_scripts() {
            wp_enqueue_style('pattern-box-admin-style', plugin_dir_url(__FILE__) . 'assets/css/admin-styles.css', [] , DWPB_VERSION);
            wp_enqueue_script('pattern-box-admin-script', plugin_dir_url(__FILE__) . 'assets/js/admin-scripts.js',['jquery'], DWPB_VERSION, true);
        }
        
    }

    /**
     * Inisialize the main plugin	
     *
     * @return \PatternBox
    **/
    function pattern_box_init(){
        return PatternBox::get_instance();
        
    }

    /*
    * Run the plugin
    */
    pattern_box_init();
    
}