<?php
/**
 * Plugin Name: WooCommerce Resumes
 * Plugin URI:  http://woocommerce.com/products/woocommerce-extension/
 * Description: This plugin will help you to create a resume
 * Version:     1.0
 * Author:      WooCommerce
 * Author URI:  http://woocommerce.com/
 * Text Domain: woocommerce-resumes
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: giyg-wr
 *
 * @package WooCommerce Resumes
 * @category Core
 * @author WooThemes
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
define( 'GIYG_WR_BASEPATH', plugin_dir_path( __FILE__ ) );
define( 'GIYG_WR_BASEURL', plugin_dir_url( __FILE__ ) );

/**
 * Check if WooCommerce is active
 */
if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	add_action( 'admin_notices', 'giyg_wr_woo_admin_notice' );

	/**
	 * Function to let the user to install woocommerce.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function giyg_wr_woo_admin_notice() {
	?>
		<div class="update-nag notice">
			<p><?php esc_html_e( 'Please install/activate WooCommerce, it is required for the plugin WooCommerce Resumes to work properly!', 'giyg-wr' ); ?></p>
		</div>
	<?php
	}
}

/**
 * Woocommerce_Resumes
 *
 * An base class.
 */
class Woocommerce_Resumes {
	/**
	 * The error messages
	 *
	 * Potential values are list of errors.
	 *
	 * @var array
	 */
	public $errors;
	/**
	 * Function which is used as contructor.
	 */
	function __construct() {
		add_action( 'init', array( $this, 'check_survey_form_submit' ) );
		add_action( 'init', array( $this, 'create_resume_post_type' ) );
		add_action( 'init', array( $this, 'create_resume_taxonomies' ), 0 );
		add_action( 'admin_menu', array( $this, 'create_admin_menus' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );
		add_shortcode( 'GIYG-WR-BUILD-RESUME', array( $this, 'build_resume_form' ) );
		add_shortcode( 'GIYG-WR-PREVIEW-RESUME', array( $this, 'preview_resume_form' ) );
		add_shortcode( 'GIYG-WR-SHARE-RESUME', array( $this, 'share_resume_form' ) );
		add_filter( 'query_vars', array( $this, 'query_vars' ) , 10, 1 );
		
		add_action( 'wp_ajax_theme_submit', array( $this, 'giyg_wr_theme_submit' ) );
		add_action( 'wp_ajax_nopriv_theme_submit', array( $this, 'giyg_wr_theme_submit' ) );
		add_action( 'wp_ajax_dashboard_tips_popup', array( $this, 'dashboard_tips_popup' ) );
		add_action( 'wp_ajax_nopriv_dashboard_tips_popup', array( $this, 'dashboard_tips_popup' ) );
		add_action( 'wp_ajax_theme_icon_update', array( $this, 'giyg_wr_theme_icon_update' ) );
		add_action( 'wp_ajax_nopriv_theme_icon_update', array( $this, 'giyg_wr_theme_icon_update' ) );
		add_action( 'wp_ajax_success_popup', array( $this, 'giyg_wr_theme_success_popup' ) );
		add_action( 'wp_ajax_nopriv_success_popup', array( $this, 'giyg_wr_theme_success_popup' ) );

		add_action( 'wp_ajax_socialshare_popup', array( $this, 'giyg_wr_socialshare_popup' ) );
		add_action( 'wp_ajax_nopriv_socialshare_popup', array( $this, 'giyg_wr_socialshare_popup' ) );

		add_action( 'wp_ajax_download_popup', array( $this, 'giyg_wr_download_popup' ) );
		add_action( 'wp_ajax_nopriv_download_popup', array( $this, 'giyg_wr_download_popup' ) );
		add_action( 'wp_ajax_survey_form_incompletion_popup', array( $this, 'giyg_wr_theme_survey_form_incompletion_popup' ) );
		add_action( 'wp_ajax_nopriv_survey_form_incompletion_popup', array( $this, 'giyg_wr_theme_survey_form_incompletion_popup' ) );
		add_action( 'wp_ajax_giyggraph_image_update', array( $this, 'giyggraph_image_update' ) );
		add_action( 'wp_ajax_nopriv_giyggraph_image_update', array( $this, 'giyggraph_image_update' ) );
		add_action( 'wp_ajax_theme_flname_fontsize_update', array( $this, 'theme_flname_fontsize_update' ) );
		add_action( 'wp_ajax_nopriv_theme_flname_fontsize_update', array( $this, 'theme_flname_fontsize_update' ) );
	}

	/**
	 * Function which is used as contructor.
	 */
	public function check_survey_form_submit() {
		$survey_form = giyg_wr_get( 'survey-form' );

		if ( ! empty( $survey_form ) ) {
			$this->check_session( $survey_form );
		}

		if ( giyg_wr_post( 'giyg_wr_form' ) ) {
			require_once( 'controllers/giyg-wr-build-controller.php' );
			$giyg_wr_errors = new GIYG_WR_Controller();
			$this->errors = $giyg_wr_errors->error;
		}
		if ( giyg_wr_get( 'wr-download' ) ) {
			$resume_id = giyg_wr_get( 'wr-resume-id' );
			$wr_theme = giyg_wr_get( 'wr-theme' );
			if ( ! $wr_theme ) {
				$wr_theme = 'traditional';
			}
			$wr_color = giyg_wr_get( 'wr-color' );
			if ( ! $wr_color ) {
				if ( 'traditional' === $wr_theme ) {
					$wr_color = 'black';
				}
				if ( 'conservative' === $wr_theme ) {
					$wr_color = 'blue';
				}
				if ( 'classic' === $wr_theme ) {
					$wr_color = 'light-blue';
				}
				if ( 'bold' === $wr_theme ) {
					$wr_color = 'blue';
				}
			}
			$wr_font = giyg_wr_get( 'wr-font' );
			if ( ! $wr_font ) {
				$wr_font = 'roboto';
			}
			$image_directory = GIYG_WR_BASEURL . 'templates/themes/' . $wr_theme . '/images/';
			$image__with_color_directory = GIYG_WR_BASEURL . 'templates/themes/' . $wr_theme . '/images/' . $wr_color . '/';

			if ( revelance_child_has_woocommerce_subscription( '','','active' ) ) {
				if ( 'true' === giyg_wr_get( 'wr-download' ) ) {
					require_once( 'download.php' );
				}
				exit;
			} elseif ( 'traditional' === $wr_theme ) {
				if ( 'true' === giyg_wr_get( 'wr-download' ) ) {
					require_once( 'download.php' );
				}
				exit;
			}
		} // End if().
	}

	/**
	 * Register a resume post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function create_resume_post_type() {
		$labels = array(
			'name'               => _x( 'Resumes', 'post type general name', 'giyg-wr-textdomain' ),
			'singular_name'      => _x( 'Resume', 'post type singular name', 'giyg-wr-textdomain' ),
			'menu_name'          => _x( 'Resumes', 'admin menu', 'giyg-wr-textdomain' ),
			'name_admin_bar'     => _x( 'Resume', 'add new on admin bar', 'giyg-wr-textdomain' ),
			'add_new'            => _x( 'Add New', 'resume', 'giyg-wr-textdomain' ),
			'add_new_item'       => __( 'Add New Resume', 'giyg-wr-textdomain' ),
			'new_item'           => __( 'New Resume', 'giyg-wr-textdomain' ),
			'edit_item'          => __( 'Edit Resume', 'giyg-wr-textdomain' ),
			'view_item'          => __( 'View Resume', 'giyg-wr-textdomain' ),
			'all_items'          => __( 'All Resumes', 'giyg-wr-textdomain' ),
			'search_items'       => __( 'Search Resumes', 'giyg-wr-textdomain' ),
			'parent_item_colon'  => __( 'Parent Resumes:', 'giyg-wr-textdomain' ),
			'not_found'          => __( 'No resumes found.', 'giyg-wr-textdomain' ),
			'not_found_in_trash' => __( 'No resumes found in Trash.', 'giyg-wr-textdomain' ),
		);
		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'giyg-wr-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'resume' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
		);
		register_post_type( 'resume', $args );
	}

	/**
	 * Register a resume category taxonomy type.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
	 */
	function create_resume_taxonomies() {

		$taxonomies = array(
						array(
							'name' => 'Resume Categories',
							'singular_name' => 'Resume Category',
							'slug' => 'resume-category',
						),
						array(
							'name' => 'Ideal Companies',
							'singular_name' => 'Ideal Company',
							'slug' => 'resume-ideal-company',
						),
						array(
							'name' => 'Professional Personalities',
							'singular_name' => 'Professional Personality',
							'slug' => 'resume-professional-personality',
						),
						array(
							'name' => 'Core Values',
							'singular_name' => 'Core Value',
							'slug' => 'resume-core-value',
						),
						array(
							'name' => 'Corporate Cultures',
							'singular_name' => 'Corporate Culture',
							'slug' => 'resume-corporate-culture',
						),
						array(
							'name' => 'Team Attributes',
							'singular_name' => 'Team Attribute',
							'slug' => 'resume-team-attribute',
						),
					);

		foreach ( $taxonomies as $taxonomy ) {
			$labels = array(
				'name'              => _x( $taxonomy['name'], 'taxonomy general name', 'textdomain' ),
				'singular_name'     => _x( $taxonomy['singular_name'], 'taxonomy singular name', 'textdomain' ),
				'search_items'      => __( 'Search ' . $taxonomy['name'], 'textdomain' ),
				'all_items'         => __( 'All ' . $taxonomy['name'], 'textdomain' ),
				'parent_item'       => __( 'Parent ' . $taxonomy['singular_name'], 'textdomain' ),
				'parent_item_colon' => __( 'Parent ' . $taxonomy['singular_name'] . ':', 'textdomain' ),
				'edit_item'         => __( 'Edit ' . $taxonomy['singular_name'], 'textdomain' ),
				'update_item'       => __( 'Update ' . $taxonomy['singular_name'], 'textdomain' ),
				'add_new_item'      => __( 'Add New ' . $taxonomy['singular_name'], 'textdomain' ),
				'new_item_name'     => __( 'New ' . $taxonomy['singular_name'] . ' Name', 'textdomain' ),
				'menu_name'         => __( $taxonomy['name'], 'textdomain' ),
			);
			$args = array(
				'hierarchical'      => false,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => $taxonomy['slug'] ),
			);
			register_taxonomy( $taxonomy['slug'], array( 'resume' ), $args );
		}
	}

	/**
	 * Register a admin menu.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_options_page
	 */
	function create_admin_menus() {
		add_options_page( 'WooCommerce Resumes Settings', 'WooCommerce Resumes Settings', 'manage_options', 'giyg-wr-settings', array( $this, 'admin_settings' ) );
		// call register settings function.
		add_action( 'admin_init', array( $this, 'register_giyg_wr_settings_group' ) );
	}

	/**
	 * Function which is used as contructor.
	 */
	public function register_scripts() {
		wp_register_script( 'giyg_wr_bootstrap_js', GIYG_WR_BASEURL . 'bootstrap/js/bootstrap.min.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_jquery_ui_min_js', GIYG_WR_BASEURL . 'jquery-ui/jquery-ui.min.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_validate_min_js', GIYG_WR_BASEURL . 'js/validations/jquery.validate.min.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_additional_validate_min_js', GIYG_WR_BASEURL . 'js/validations/additional-methods.min.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_tag_custom_js', GIYG_WR_BASEURL . 'js/tag-custom.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_jquery_icheck_js', GIYG_WR_BASEURL . 'checkbox/icheck.min.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_jquery_bootstrap_editable_min_js', GIYG_WR_BASEURL . 'bootstrap-editable/bootstrap-editable.min.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_jquery_barrating_js', GIYG_WR_BASEURL . 'jquery-bar-rating/jquery.barrating.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_mcustom_scrollbar_js', GIYG_WR_BASEURL . 'js/jquery.mCustomScrollbar.js', array(), '1.0.0', true );
		wp_register_script( 'giyg_wr_jquery_select2_js', GIYG_WR_BASEURL . 'select2/select2.full.min.js', array(), '1.0.0', true );
		wp_register_style( 'giyg_wr_bootstrap_css', GIYG_WR_BASEURL . 'bootstrap/css/bootstrap.min.css' );
		wp_register_style( 'giyg_wr_bootstrap_editable_css', GIYG_WR_BASEURL . 'bootstrap-editable/bootstrap-editable.css' );
		wp_register_style( 'giyg_wr_jquery_ui_min_css', GIYG_WR_BASEURL . 'jquery-ui/jquery-ui.min.css' );
		wp_register_style( 'giyg_wr_theme_conservative_css', GIYG_WR_BASEURL . 'templates/themes/conservative/style.css' );
		wp_register_style( 'giyg_wr_theme_classic_css', GIYG_WR_BASEURL . 'templates/themes/classic/style.css' );
		wp_register_style( 'giyg_wr_theme_traditional_css', GIYG_WR_BASEURL . 'templates/themes/traditional/style.css' );
		wp_register_style( 'giyg_wr_theme_bold_css', GIYG_WR_BASEURL . 'templates/themes/bold/style.css' );
		wp_register_style( 'giyg_wr_checkbox_all_css', GIYG_WR_BASEURL . 'checkbox/_all.css' );
		wp_register_style( 'giyg_wr_checkbox_green_css', GIYG_WR_BASEURL . 'checkbox/green.css' );
		wp_register_style( 'giyg_wr_bar_rating_css', GIYG_WR_BASEURL . 'jquery-bar-rating/bars-square.css' );
		wp_register_style( 'giyg_wr_select2_css', GIYG_WR_BASEURL . 'select2/select2.min.css' );
		wp_register_style( 'giyg_wr_style_css', GIYG_WR_BASEURL . 'css/style.css' );
		wp_register_style( 'giyg_wr_mcustom_scrollbar_css', GIYG_WR_BASEURL . 'css/jquery.mCustomScrollbar.css' );
		wp_register_style( 'giyg_wr_google_fonts', 'https://fonts.googleapis.com/css?family=Cairo|Lato|Oswald|PT+Sans|Roboto|Source+Sans+Pro|Titillium+Web', false );
		/**
		 * Start Spell Check..
		 */
		wp_register_style( 'giyg_wr_fancy_css', GIYG_WR_BASEURL . 'lib/spellcheck/extensions/fancybox/jquery.fancybox-1.3.4.css' );
		wp_register_script( 'giyg_wr_fancyt_js', GIYG_WR_BASEURL . 'lib/spellcheck/extensions/fancybox/jquery.fancybox-1.3.4.js' );
		wp_register_script( 'giyg_wr_spellcheck_js', GIYG_WR_BASEURL . 'lib/spellcheck/include.js', array(), '1.0.0', true );
		/**
		 * End Spell Check..
		 */
		wp_register_script( 'giyg_wr_mask_js', GIYG_WR_BASEURL . 'js/jquery.maskedinput.min.js' );

		wp_enqueue_style( 'giyg_wr_bootstrap_css' );
		wp_enqueue_style( 'giyg_wr_jquery_ui_min_css' );
		wp_enqueue_style( 'giyg_wr_style_css' );
		wp_enqueue_script( 'giyg_wr_bootstrap_js' );
		wp_enqueue_script( 'giyg_wr_jquery_ui_min_js' );

		wp_enqueue_script( 'giyg_wr_mask_js' );

	}

	/**
	 * Function used for adding the survey form.
	 */
	public function build_resume_form() {
		wp_enqueue_script( 'giyg_wr_validate_min_js' );
		wp_enqueue_script( 'giyg_wr_additional_validate_min_js' );
		wp_enqueue_script( 'giyg_wr_jquery_icheck_js' );
		wp_enqueue_script( 'giyg_wr_jquery_barrating_js' );
		wp_enqueue_style( 'giyg_wr_checkbox_all_css' );
		wp_enqueue_style( 'giyg_wr_checkbox_green_css' );
		wp_enqueue_style( 'giyg_wr_bar_rating_css' );

		//wp_enqueue_script( 'giyg_wr_mask_js' );

		if ( is_plugin_active( 'userpro/index.php' ) ) {
			wp_register_style( 'userpro_min', GIYG_WR_BASEURL . '../userpro/css/userpro.min.css' );
			wp_enqueue_style( 'userpro_min' );
			wp_enqueue_script( 'giyg_wr_custom_userpro_script', GIYG_WR_BASEURL . 'js/custom_userpro_script.js', array(), '1.0.0', true );
		}

		$form = 1;
		$errors = $this->errors;
		if ( get_query_var( 'survey-form' ) ) {
			$form = get_query_var( 'survey-form' );
		}
		$current_user = wp_get_current_user();

		require_once( 'templates/survey-forms/form-' . $form . '.php' );
	}

	/**
	 * Function used for preview the resume.
	 */
	public function preview_resume_form() {
		wp_enqueue_script( 'giyg_wr_validate_min_js' );
		wp_enqueue_script( 'giyg_wr_additional_validate_min_js' );
		wp_enqueue_script( 'giyg_wr_tag_custom_js' );
		wp_enqueue_script( 'giyg_wr_jquery_barrating_js' );
		wp_enqueue_script( 'giyg_wr_mcustom_scrollbar_js' );
		wp_enqueue_style( 'giyg_wr_bar_rating_css' );
		wp_enqueue_style( 'giyg_wr_mcustom_scrollbar_css' );
		wp_enqueue_style( 'giyg_wr_google_fonts' );
		wp_enqueue_script( 'giyg_wr_spellcheck_js' );
		wp_enqueue_style( 'giyg_wr_fancy_css' );
		wp_enqueue_script( 'giyg_wr_fancyt_js' );
		wp_enqueue_script( 'giyg_wr_mask_js' );

		wp_enqueue_script( 'giyg_wr_pinterest_js', '//assets.pinterest.com/js/pinit.js', array(), '1.0.0', true );

		if ( is_plugin_active( 'userpro/index.php' ) ) {
			wp_register_style( 'userpro_min', GIYG_WR_BASEURL . '../userpro/css/userpro.min.css' );
			wp_enqueue_style( 'userpro_min' );
			wp_enqueue_script( 'giyg_wr_custom_userpro_script', GIYG_WR_BASEURL . 'js/custom_userpro_script.js', array(), '1.0.0', true );
		}

		wp_enqueue_script( 'giyg_wr_custom_image_area_select', GIYG_WR_BASEURL . 'image-crop/jquery.imgareaselect.js', array(), '0.9.11-rc.1', true );
		wp_enqueue_script( 'giyg_wr_custom_image_crop_jform', GIYG_WR_BASEURL . 'image-crop/jquery.form.js', array(), '3.51.0', true );
		wp_register_style( 'giyg_wr_custom_image_crop_css', GIYG_WR_BASEURL . 'image-crop/imgareaselect.css' );
		wp_enqueue_style( 'giyg_wr_custom_image_crop_css' );

		if ( ! get_query_var( 'wr-resume-id' ) ) {
			echo '<p class="text-center">Invalid Access</p>';
		} else {
			$resume_id = get_query_var( 'wr-resume-id' );
			$resume = get_post( $resume_id );
			if ( 'resume' === $resume->post_type && get_current_user_id() == $resume->post_author ) {
				$admin_ajax_url = admin_url( 'admin-ajax.php' );
				$ajax_nonce = wp_create_nonce( 'Wordpress@123' );
				$preview_page = add_query_arg( 'wr-resume-id', $resume_id, get_permalink( get_option( 'giyg_wr_preview_page_id' ) ) );
				$wr_theme = get_query_var( 'wr-theme' );

				if ( ! $wr_theme ) {
					$wr_theme = 'traditional';
				}
				wp_enqueue_style( 'giyg_wr_bootstrap_editable_css' );
				wp_enqueue_style( 'giyg_wr_select2_css' );
				wp_enqueue_script( 'giyg_wr_jquery_bootstrap_editable_min_js' );
				wp_enqueue_script( 'giyg_wr_jquery_select2_js' );
				$wr_color = get_query_var( 'wr-color' );
				if ( ! $wr_color ) {
					if ( 'traditional' === $wr_theme ) {
						$wr_color = 'black';
					}
					if ( 'conservative' === $wr_theme ) {
						$wr_color = 'blue';
					}
					if ( 'classic' === $wr_theme ) {
						$wr_color = 'light-blue';
					}
					if ( 'bold' === $wr_theme ) {
						$wr_color = 'blue';
					}
				}
				$wr_icon = get_query_var( 'wr-icon' );
				
				if ( 'classic' === $wr_theme || 'bold' === $wr_theme ) {
					wp_enqueue_script( 'giyg_wr_jquery_barrating_js' );
				}
				$wr_font = giyg_wr_get( 'wr-font' );
				if ( ! $wr_font ) {
					$wr_font = 'roboto';
				}

				wp_enqueue_style( 'giyg_wr_theme_' . $wr_theme . '_css' );
				require_once( 'templates/themes.php' );

			} else {
				echo '<p class="text-center">Invalid Access</p>';
			} // End if().
		} // End if().
	}
	/**
	 * Function used for share the resume to the user for view.
	 */
	public function share_resume_form() {
		wp_enqueue_script( 'giyg_wr_tag_custom_js' );
		wp_enqueue_script( 'giyg_wr_jquery_barrating_js' );
		wp_enqueue_script( 'giyg_wr_mcustom_scrollbar_js' );
		wp_enqueue_style( 'giyg_wr_bar_rating_css' );
		wp_enqueue_style( 'giyg_wr_mcustom_scrollbar_css' );
		wp_enqueue_style( 'giyg_wr_google_fonts' );

		if ( ! get_query_var( 'wr-resume-id' ) ) {
			echo '<p class="text-center">Invalid Access</p>';
		} else {
			$resume_id = get_query_var( 'wr-resume-id' );
			$resume = get_post( $resume_id );
			
			if ( 'resume' === $resume->post_type ) {

				$admin_ajax_url = admin_url( 'admin-ajax.php' );
				$ajax_nonce = wp_create_nonce( 'Wordpress@123' );

				$preview_page = add_query_arg( 'wr-resume-id', $resume_id, get_permalink( get_option( 'giyg_wr_preview_page_id' ) ) );
				$wr_theme = get_query_var( 'wr-theme' );

				if ( ! $wr_theme ) {
					$wr_theme = 'traditional';
				}

				$wr_color = get_query_var( 'wr-color' );
				if ( ! $wr_color ) {
					if ( 'traditional' === $wr_theme ) {
						$wr_color = 'black';
					}
					if ( 'conservative' === $wr_theme ) {
						$wr_color = 'blue';
					}
					if ( 'classic' === $wr_theme ) {
						$wr_color = 'light-blue';
					}
					if ( 'bold' === $wr_theme ) {
						$wr_color = 'blue';
					}
				}

				if ( 'classic' === $wr_theme || 'bold' === $wr_theme ) {
					wp_enqueue_script( 'giyg_wr_jquery_barrating_js' );
				}
				$wr_font = giyg_wr_get( 'wr-font' );
				if ( ! $wr_font ) {
					$wr_font = 'roboto';
				}

				wp_enqueue_style( 'giyg_wr_theme_' . $wr_theme . '_css' );

				if ( ! revelance_child_has_woocommerce_subscription($resume->post_author,'','active') && 'traditional' != $wr_theme && 'black' != $wr_color ) {
					echo '<p class="text-center">Invalid Access</p>';
				} else {
					require_once( 'templates/share.php' );
				}					

			} else {
				echo '<p class="text-center">Invalid Access</p>';
			} // End if().			

		} // End if().
	}

	/**
	 * Function which is used as contructor.
	 *
	 * @param array $qvars url parameters.
	 */
	public function query_vars( $qvars ) {
		$qvars[] = 'survey-form';
		$qvars[] = 'wr-resume-id';
		$qvars[] = 'wr-theme';
		$qvars[] = 'wr-color';
		$qvars[] = 'wr-font';
		$qvars[] = 'wr-icon';
		$qvars[] = 'wr-icon-color';
		$qvars[] = 'wr-download';
		$qvars[] = 'survey-status';
		$qvars[] = 'survey-form-status';
		return $qvars;
	}

	/**
	 * Function to be used for checking the sessions.
	 *
	 * @param string $survey_form current page.
	 */
	public function check_session( $survey_form ) {
		$check_session = giyg_wr_session( 'woocommerce_resumes' );
		if ( $survey_form ) {
			if ( ! $check_session || 1 === $survey_form ) {
				wp_redirect( remove_query_arg( 'survey-form', get_permalink( get_option( 'giyg_wr_survey_page_id' ) ) ) );
				exit;
			} elseif ( 12 >= $survey_form ) {
				/*if ( ! array_key_exists( 'form_'.( $survey_form - 1 ), $check_session ) && giyg_wr_post( 'giyg_wr_form' ) ) {
					wp_redirect( add_query_arg( 'survey-form', ($survey_form - 1), remove_query_arg( 'survey-form', get_permalink( get_option( 'giyg_wr_survey_page_id' ) ) ) ) );
					exit;
				}*/
			} else {
				echo '<p class="text-center">Invalid Access</p>';
				exit;
			}
		}
	}

	/**
	 * Function to be used as a callback function for settings page.
	 */
	public function register_giyg_wr_settings_group() {
		register_setting( 'giyg-wr-settings-group', 'giyg_wr_survey_page_id' );
		register_setting( 'giyg-wr-settings-group', 'giyg_wr_preview_page_id' );
		register_setting( 'giyg-wr-settings-group', 'giyg_wr_login_page_id' );
		register_setting( 'giyg-wr-settings-group', 'giyg_wr_pdf_crowd_username' );
		register_setting( 'giyg-wr-settings-group', 'giyg_wr_pdf_crowd_apikey' );
	}

	/**
	 * Function to be used for displaying settings page in admin end.
	 */
	public function admin_settings() {
	?>
		<div class="wrap">
			<h1>WooCommerce Resumes Settings</h1>
			<form method="post" action="options.php">
				<?php settings_fields( 'giyg-wr-settings-group' ); ?>
				<?php do_settings_sections( 'giyg-wr-settings-group' ); ?>
				<table class="form-table">
					<tr valign="top">
						<th scope="row">Survey Page</th>
						<td>
							<select name="giyg_wr_survey_page_id">
								<option value="">Select Page</option>
								<?php
								$page_ids = get_all_page_ids();
								$str = '';
								foreach ( $page_ids as $page ) {
									$str .= '<option value="' . $page . '"';
									if ( get_option( 'giyg_wr_survey_page_id' ) == $page ) {
										$str .= ' selected="selected"';
									}
									$str .= '>' . get_the_title( $page ) . '</option>';
								}
								echo $str;
								?>
							</select>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Preview Page</th>
						<td>
							<select name="giyg_wr_preview_page_id">
								<option value="">Select Page</option>
								<?php
								$page_ids = get_all_page_ids();
								$str = '';
								foreach ( $page_ids as $page ) {
									$str .= '<option value="' . $page . '"';
									if ( get_option( 'giyg_wr_preview_page_id' ) == $page ) {
										$str .= ' selected="selected"';
									}
									$str .= '>' . get_the_title( $page ) . '</option>';
								}
								echo $str;
								?>
							</select>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Login Page</th>
						<td>
							<select name="giyg_wr_login_page_id">
								<option value="">Select Page</option>
								<?php
								$page_ids = get_all_page_ids();
								$str = '';
								foreach ( $page_ids as $page ) {
									$str .= '<option value="' . $page . '"';
									if ( get_option( 'giyg_wr_login_page_id' ) == $page ) {
										$str .= ' selected="selected"';
									}
									$str .= '>' . get_the_title( $page ) . '</option>';
								}
								echo $str;
								?>
							</select>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">PDF Crowd Username</th>
						<td>
							<input name="giyg_wr_pdf_crowd_username" value="<?php echo get_option( 'giyg_wr_pdf_crowd_username' ); ?>" />                            
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">PDF Crowd API Key</th>
						<td>
							<input name="giyg_wr_pdf_crowd_apikey" value="<?php echo get_option( 'giyg_wr_pdf_crowd_apikey' ); ?>" />                            
						</td>
					</tr>
				</table>
				<?php submit_button(); ?>
			</form>
		</div>
	<?php
	}	

	/**
	 * Function to be used as a callback ajax function for saving the theme data.
	 */
	public function giyg_wr_theme_submit() {
		check_ajax_referer( 'Wordpress@123', 'security' );
		require_once( 'controllers/giyg-wr-theme-controller.php' );
	}

	/**
	 * Function to be used as a callback ajax function for dashboard page tip popup.
	 */
	function dashboard_tips_popup() {
		$id = giyg_wr_post( 'id' );

		$tips['response'] = '<a href="#" class="userpro-close-popup"></a>
		<div class="userpro-custom-wrap"><div class="userpro">';

		require_once( 'dashboard-tips.php' );

		$tips['response'] .= '</div></div>';
		echo json_encode( $tips );
		die;
	}

	/**
	 * Function to be used as a callback ajax function for updating the icon.
	 */
	public function giyg_wr_theme_icon_update() {
		check_ajax_referer( 'Wordpress@123', 'security' );
		$data = giyg_wr_post_all();
		$name = $data['name'];
		$value = $data['value'];
		$status = array();
		$_SESSION['giyg_wr_theme_icon'][$name] = $value;
		$status['status'] = 'success';
		echo json_encode( $status );
	}

	/**
	 * Function to be used as a callback ajax function for survey success message.
	 */
	function giyg_wr_theme_success_popup() {
		$id = giyg_wr_post( 'id' );

		$success_popup['response'] = '';
		if ( $id = 'survey_success' ) {
			$success_popup['response'] = '<a href="#" class="userpro-close-popup"></a>
			<div class="userpro-custom-wrap success-popup"><div class="userpro">';

			$success_popup['response'] .= '<div class="userpro-head">
			<h1 class="media-heading">Nice Job!</h1>
			</div>
			<div class="userpro-body">';

			$success_popup['response'] .= '<p>The black and white "Traditional" style has been pre-loaded and is free to customize, download or share! Simply click on the text to edit. To help you visualize other samples, you may use all the GIYGgraph feature tools for free. If you wish to download, print or share any other styles or colors, please upgrade your account.</p>';
			$success_popup['response'] .= '<p>Have fun!</p>';

			$success_popup['response'] .= '<a href="#" class="btn btn-sm btn-green continue" title="Continue">CONTINUE FREE</a>';

			$success_popup['response'] .= '</div>';

			$success_popup['response'] .= '</div></div>';
		}

		echo json_encode( $success_popup );
		die;
	}

	/**
	 * Function to be used as a callback ajax function for social icons share popup.
	 */
	function giyg_wr_socialshare_popup() {

		$resume_id = giyg_wr_post( 'resume_id' );
		$wr_theme = giyg_wr_post( 'wr_theme' );
		$wr_color = giyg_wr_post( 'wr_color' );
		$wr_font = giyg_wr_post( 'wr_font' );

		$theme_options = $resume_id . ':' . $wr_theme . ':' . $wr_color . ':' . $wr_font;

		$theme_options_encode = base64_encode( $theme_options );

		$all_meta_for_user = get_user_meta( get_current_user_id() );
		$username = $all_meta_for_user['first_name'][0] . $all_meta_for_user['last_name'][0];
		$share_url = get_site_url() . '/' . $theme_options_encode . '/' . $username;
		$image_socialicons = GIYG_WR_BASEURL . 'images/socialicons/';

		$socialshare_popup['response'] = '<a href="#" class="userpro-close-popup"></a>
		<div class="userpro-custom-wrap"><div class="userpro">';

		$socialshare_popup['response'] .= '<div class="userpro-head">
		<h1 class="media-heading">Get noticed instantly!</h1>
		</div>
		<div class="userpro-body"><div class="social-sharing-list">';

		$socialshare_popup['response'] .= '<p>Share your custom GIYGgraph now.</p>';

		$socialshare_popup['response'] .= '<p style="word-wrap:break-word;">Share URL: ' . $share_url . '</p>';

		//$socialshare_popup['response'] .= '<a href="http://www.facebook.com/sharer/sharer.php?u='.urlencode($share_url).'" target="_blank"><img src="'.$image_socialicons.'flat_facebook.png"></a>';

		$socialshare_popup['response'] .= '<a href="' . $share_url . '" class="btnShareFB" target="_blank"><img src="' . $image_socialicons . 'flat_facebook.png"></a>';

		$socialshare_popup['response'] .= '<a href="http://twitter.com/share?text=' . urlencode( 'Check out my NEW eye-popping career infographic' ) . '&url=' . urlencode( $share_url ) . '" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600\');return false;"><img src="' . $image_socialicons . 'flat_twitter.png"></a>';

		$socialshare_popup['response'] .= '<a href="https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode( $share_url ) . '&title=' . urlencode( 'Check out my NEW eye-popping career infographic' ) . '" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600\');return false;"><img src="' . $image_socialicons . 'flat_linkedin.png"></a>';

		$socialshare_popup['response'] .= '<a href="https://plus.google.com/share?url=' . urlencode( $share_url ) . '&text=' . urlencode( 'Check out my NEW eye-popping career infographic' ) . '" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600\');return false;"><img src="' . $image_socialicons . 'flat_google.png"></a>';

		$socialshare_popup['response'] .= '<a data-pin-do="buttonPin" data-pin-custom="true" href="http://pinterest.com/pin/create/button/?url=' . urlencode( $share_url ) . '&description=' . urlencode( 'Check out my NEW eye-popping career infographic' ) . '&media=' . urlencode( GIYG_WR_BASEURL . 'images/common/' . ucfirst( esc_attr( $wr_theme ) ) . '.png' ) . '" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600\');return false;"><img src="' . $image_socialicons . 'flat_pinterest.png"></a>';

		$socialshare_popup['response'] .= '</div></div>';

		$socialshare_popup['response'] .= '</div></div>';

		echo json_encode( $socialshare_popup );
		die;
	}

	/**
	 * Function to be used as a callback ajax function for download popup.
	 */
	function giyg_wr_download_popup() {  
		$image_folder = GIYG_WR_BASEURL . 'images/';
		$download_popup['response'] = '<a href="#" class="userpro-close-popup"></a>
		<div class="userpro-custom-wrap"><div class="userpro">';

		$download_popup['response'] .= '<div class="userpro-head">
		<h1 class="media-heading">Upgrade Options</h1>
		</div>
		<div class="userpro-body">';

		$download_popup['response'] .= '<img src="' . $image_folder . 'download-arrow.png">';

		$download_popup['response'] .= '<p>To use this feature, please upgrade your account</p>';

		$download_popup['response'] .= '<a href="' . get_site_url() . '/pricing" class="btn btn-sm btn-green upgrade" title="Upgrade">Upgrade</a>';

		$download_popup['response'] .= '</div>';

		$download_popup['response'] .= '</div></div>';

		echo json_encode( $download_popup );
		die;
	}

	/**
	 * Function to be used as a callback ajax function for survey form incompletion message.
	 */
	function giyg_wr_theme_survey_form_incompletion_popup() {
		$id = giyg_wr_post( 'id' );

		$survey_form_incompletion_popup['response'] = '';
		if ( 'survey_unfinished' === $id ) {
			$survey_form_incompletion_popup['response'] = '<a href="#" class="userpro-close-popup"></a>
			<div class="userpro-custom-wrap survey-unfinished-popup"><div class="userpro">';

			$survey_form_incompletion_popup['response'] .= '<div class="userpro-head">
			<h1 class="media-heading">Welcome Back!</h1>
			</div>
			<div class="userpro-body">';

			$survey_form_incompletion_popup['response'] .= '<p>You can pick up where you left off right here. All your answers from previous profile questions have been saved.</p>';
			$survey_form_incompletion_popup['response'] .= '<p>Your time invested will pay off. You\'re doing great!</p>';

			$survey_form_incompletion_popup['response'] .= '</div>';

			$survey_form_incompletion_popup['response'] .= '</div></div>';
		}

		echo json_encode( $survey_form_incompletion_popup );
		die;
	}

	/**
	 * Function to be used as a callback ajax function for image update and cropping.
	 */
	function giyggraph_image_update() {
		check_ajax_referer( 'Wordpress@123', 'security' );
		require_once( 'image-crop/profile.php' );
	}

	/**
	 * Function to be used as a callback ajax function for dynamically change the firstname lastname font size.
	 */
	public function theme_flname_fontsize_update() {
		check_ajax_referer( 'Wordpress@123', 'security' );
		$data = giyg_wr_post_all();
		$name = $data['name'];
		$value = $data['value'];
		$status = array();
		$_SESSION[$name] = $value;
		$status['status'] = 'success';
		echo json_encode( $status );
		die;
	}
}

/**
 * Function to be used post data.
 *
 * @param string $var variable.
 */
function giyg_wr_get( $var ) {
	return array_key_exists( $var, $_GET )?$_GET[ $var ]:false;
}

/**
 * Function to be used post data.
 *
 * @param string $var variable.
 */
function giyg_wr_post( $var ) {
	return array_key_exists( $var, $_POST )?$_POST[ $var ]:false;
}

/**
 * Function to be used get all post data.
 */
function giyg_wr_post_all() {
	return $_POST;
}

/**
 * Function to be used get all post data.
 *
 * @param string $var variable.
 */
function giyg_wr_session( $var ) {
	return array_key_exists( $var, $_SESSION )?$_SESSION[ $var ]:false;
}

/**
 * Function to be used get all post data.
 */
function giyg_wr_session_all() {
	return $_SESSION;
}

/**
 * Function to be used display submit button.
 */
function giyg_wr_navigation_button() {
	echo '<div class="nav-btn-wrap"><div class="row">
				<a href="' . remove_query_arg( 'survey-form-status', add_query_arg( 'survey-form', ( giyg_wr_get( 'survey-form' ) - 1 ) ) ) . '" class="btn btn-md btn-default" role="button" title="BACK">BACK</a>' . wp_nonce_field( 'giyg_wr_nonce_action', 'giyg_wr_nonce_field' ) . '
				<input type="hidden" value="' . giyg_wr_get( 'survey-form' ) . '" name="giyg_wr_form">
				<button type="submit" name="next" class="btn btn-md btn-success" title="NEXT">NEXT</button>
		  </div></div>';
}

/**
 * Function to be used for checking session and getting form values.
 */
function giyg_wr_check_session_and_get_form_values() {
	$check_form_submit = giyg_wr_post( 'giyg_wr_form' );
	$check_session = giyg_wr_session( 'woocommerce_resumes' );
	$current_form = get_query_var( 'survey-form' );
	if ( $check_form_submit ) {
		$form_values = giyg_wr_post_all();
	} elseif ( array_key_exists( 'form_' . $current_form, $_SESSION['woocommerce_resumes'] ) ) {
		$form_values = $check_session[ 'form_' . $current_form ];
	} elseif ( $check_session['post_id'] ) {
		$last_post_id = $check_session['post_id'];
		if ( 'form_4' == 'form_' . $current_form ) {
			$form_values_array = array();
			for ( $i = 0; $i < 3; $i++ ) {
				$form_values_array[ 'giyg_wr_company_name_' . $i ] = get_post_meta( $last_post_id, 'giyg_wr_company_name_' . $i, true );
				$form_values_array[ 'giyg_wr_location_' . $i ] = get_post_meta( $last_post_id, 'giyg_wr_location_' . $i, true );
			}
			$form_values = $form_values_array;
		}
		if ( 'form_5' == 'form_' . $current_form ) {
			$form_values_array = array();
			for ( $i = 0; $i < 5; $i++ ) {
				$form_values_array[ 'giyg_wr_skill_name_' . $i ] = get_post_meta( $last_post_id, 'giyg_wr_skill_name_' . $i, true );
				$form_values_array[ 'giyg_wr_rating_' . $i ] = get_post_meta( $last_post_id, 'giyg_wr_rating_' . $i, true );
			}
			$form_values = $form_values_array;
		}
		if ( 'form_6' == 'form_' . $current_form ) {
			$form_values_array = array();
			for ( $i = 0; $i < 3; $i++ ) {
				$form_values_array[ 'giyg_wr_activity_name_' . $i ] = get_post_meta( $last_post_id, 'giyg_wr_activity_name_' . $i, true );
			}
			$form_values = $form_values_array;
		}
		if ( 'form_11' == 'form_' . $current_form ) {
			$form_values_array = array();
			$form_values_array['giyg_wr_impact_statement'] = get_post_meta( $last_post_id, 'giyg_wr_impact_statement', true );
			$form_values = $form_values_array;
		}
		if ( 'form_12' == 'form_' . $current_form ) {
			$form_values_array = array();
			$form_values_array['giyg_wr_facebook_url'] = get_post_meta( $last_post_id, 'giyg_wr_facebook_url', true );
			$form_values_array['giyg_wr_twitter_url'] = get_post_meta( $last_post_id, 'giyg_wr_twitter_url', true );
			$form_values_array['giyg_wr_other_url'] = get_post_meta( $last_post_id, 'giyg_wr_other_url', true );
			$form_values_array['giyg_wr_linkedin_url'] = get_post_meta( $last_post_id, 'giyg_wr_linkedin_url', true );
			$form_values = $form_values_array;
		}
	} else {
		$form_values = array();
	} // End if().
	return $form_values;
}

/**
 * Function to be used for showing error message.
 */
function giyg_wr_show_error() {
	echo '<div class="row"><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>The form has error fields.</div></div>';
}

/**
 * Function to be used to get the user last creates resume.
 */
function giyg_wr_user_last_post() {
	$args = array(
		'author'        => get_current_user_id(),
		'orderby'       => 'post_date',
		'order'         => 'DESC',
		'post_type'     => 'resume',
		'posts_per_page' => -1, // no limit.
	);
	$current_user_posts = get_posts( $args );

	return $current_user_posts;
}

new woocommerce_resumes();
