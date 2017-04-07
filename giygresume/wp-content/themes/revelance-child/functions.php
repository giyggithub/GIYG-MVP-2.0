<?php
/**
 * Added custom styles and scripts.
 */
function revelance_child_theme_scripts() {
	$deps = array();
	if ( in_array( 'the-creator-vpb/the-creator-vpb.php', get_option( 'active_plugins' ) ) ) {
		$deps[] = 'tcvpb_css';
	}

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', $deps );
	wp_enqueue_style( 'revelance-child-style', get_stylesheet_uri(), array( 'main_css' ) );
	wp_enqueue_style( 'revelance-child-userpro-style', get_stylesheet_directory_uri() . '/userpro/skins/elegant/style.css' );
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'revelance_child_theme_scripts' );

/**
 * Language setup.
 */
function revelance_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'ABdev_revelance', $lang );
}
add_action( 'after_setup_theme', 'revelance_lang_setup' );

/* Added by tag team */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_before_main_content', 'revelance_child_theme_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'revelance_child_theme_wrapper_end', 10 );

/**
 * Added custom element of the Main wrapper.
 */
function revelance_child_theme_wrapper_start() {
	echo '<section class="page_main_section"><div class="container">';
}

/**
 * Added custom close element of the Main wrapper.
 */
function revelance_child_theme_wrapper_end() {
	echo '</div></section>';
}

/**
 * Add woocommerce support to the theme.
 */
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

/**
 * Custom classes added to the body element for styling.
 */
function custom_body_class( $classes ) {
	if ( is_page( 'preview-page' ) ) {
		$classes[] = 'preview_fullwidth';
	}

	if ( is_page( 'share-infographic' ) ) {
		$classes[] = 'preview_fullwidth';
	}

	if ( is_page( 'pricing' ) ) {
		$classes[] = 'pricing-page';
	}

	return $classes;
}
add_filter( 'body_class', 'custom_body_class' );

/**
 * GIYGgraph Share link template redirect.
 */
function revelance_child_do_stuff_on_404() {
	if ( is_404() ) {
		$share_url = explode( '/', $_SERVER['REQUEST_URI'] );
		if ( count( $share_url ) === 3 ) {
			$share_url_params = base64_decode( $share_url[1] );
			$share_url_params_arr = explode( ':', $share_url_params );
			if ( ! empty( $share_url_params_arr ) && count( $share_url_params_arr ) === 4 ) {
				wp_redirect( add_query_arg( array(
					'wr-resume-id' => $share_url_params_arr[0],
					'wr-theme' => $share_url_params_arr[1],
					'wr-color' => $share_url_params_arr[2],
					'wr-font' => $share_url_params_arr[3],
					), get_permalink( get_page_by_title( 'Share Infographic' ) ) ) );
			}
		}
	}
}
add_action( 'template_redirect', 'revelance_child_do_stuff_on_404' );

/**
 * Add the new end point for myaccount page to display the user created GIYGgraphs.
 */
function revelance_child_theme_my_custom_endpoints() {
	add_rewrite_endpoint( 'my-giyg', EP_ROOT | EP_PAGES );
}
add_action( 'init', 'revelance_child_theme_my_custom_endpoints' );

/**
 * Add the query variables.
 */
function revelance_child_theme_my_custom_query_vars( $vars ) {
	$vars[] = 'my-giyg';
	return $vars;
}
add_filter( 'query_vars', 'revelance_child_theme_my_custom_query_vars', 0 );

/**
 * After switch theme flush the rewrite rules.
 */
function revelance_child_theme_my_custom_flush_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'revelance_child_theme_my_custom_flush_rewrite_rules' );

/**
 * Woocommerce rearrange menus in the myaccount page.
 */
function revelance_child_theme_my_account_menu_items( $items ) {
	unset( $items['dashboard'] );

	$orders = $items['orders'];
	$subscriptions = $items['subscriptions'];
	$downloads = $items['downloads'];
	$edit_address = $items['edit-address'];
	$payment_methods = $items['payment-methods'];
	$edit_account = $items['edit-account'];
	$customer_logout = $items['customer-logout'];

	unset( $items['orders'] );
	unset( $items['subscriptions'] );
	unset( $items['downloads'] );
	unset( $items['edit-address'] );
	unset( $items['payment-methods'] );
	unset( $items['edit-account'] );
	unset( $items['customer-logout'] );

	$items['my-giyg'] = __( 'My Giyggraphs', 'woocommerce' );
	$items['orders'] = $orders;
	$items['subscriptions'] = $subscriptions;
	$items['payment-methods'] = $payment_methods;
	$items['edit-address'] = __( 'Billing', 'woocommerce' );
	$items['edit-account'] = $edit_account;
	$items['customer-logout'] = $customer_logout;
	return $items;
}
add_filter( 'woocommerce_account_menu_items', 'revelance_child_theme_my_account_menu_items' );

/**
 * Woocommerce create new menu and page in myaccount page.
 */
function revelance_child_theme_my_custom_endpoint_content() {
	include 'woocommerce/myaccount/my-giyg.php';
}
add_action( 'woocommerce_account_my-giyg_endpoint', 'revelance_child_theme_my_custom_endpoint_content' );

/**
 * Woocommerce to hide the cart page and directly move to checkout page.
 */
function revelance_child_theme_redirect_to_checkout() {
	global $woocommerce;
	wc_clear_notices();
	$checkout_url = $woocommerce->cart->get_checkout_url();
	return $checkout_url;
}
add_filter( 'add_to_cart_redirect', 'revelance_child_theme_redirect_to_checkout' );

/**
 * Shop button redirect.
 */
function revelance_child_theme_change_return_shop_url() {
	return home_url();
}
add_filter( 'woocommerce_return_to_shop_redirect', 'revelance_child_theme_change_return_shop_url' );

/**
 * When an item is added to the cart, remove other products
 */
function revelance_child_theme_maybe_empty_cart( $valid, $product_id, $quantity ) {
	if ( ! empty( WC()->cart->get_cart() ) && $valid ) {
		WC()->cart->empty_cart();
	}
	wc_clear_notices();
	return $valid;
}
add_filter( 'woocommerce_add_to_cart_validation', 'revelance_child_theme_maybe_empty_cart', 10, 3 );

/**
 * Added the custom menu link, login and signup button with default popup register.
 */
function revelance_child_theme_add_loginout_link( $items, $args ) {
	if ( ! is_user_logged_in() && $args->theme_location == 'header-menu' ) {
		$items .= '<li><button class="popup-login login_menu btn-green">LOGIN</button></li>' . '<li><button class="popup-register signup_menu btn-green">SIGN UP</button></li>';
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'revelance_child_theme_add_loginout_link', 10, 2 );

/**
 * Existing user login redirect based on if he/she has created graph or not.
 */
function revelance_child_theme_my_login_redirect( $redirect_to, $request, $user ) {
	$last_post_id = '';
	$_SESSION['is_first_resume'] = 0;
	$args = array(
		'author' => get_current_user_id(),
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'resume',
		'posts_per_page' => -1, // no limit.
	);
	$current_user_posts = get_posts( $args );

	$last_post_id = $current_user_posts[0]->ID;
	$pometa = get_post_meta( $last_post_id );

	if ( ! current_user_can( 'administrator' ) ) {
		if ( array_key_exists( 'giyg_wr_impact_statement', $pometa ) ) {
			$redirect_to = get_site_url() . '/preview-page/?wr-resume-id=' . $last_post_id;
			$_SESSION['is_first_resume'] = 1;
		} else {
			$last = array_slice( $pometa, -1, 1, true );
			$last_key = key( $last );
			if ( in_array( $last_key, array( 'first_name', 'last_name', 'email', 'phone', 'giyg_wr_title', 'giyg_wr_title2' ) ) ) {
				$form = 2;
			} elseif ( in_array( $last_key, array( 'giyg_wr_category_0', 'giyg_wr_category_1', 'giyg_wr_custom_category' ) ) ) {
				$form = 3;
			} elseif ( in_array( $last_key, array( 'giyg_wr_ideal_company', 'giyg_wr_ideal_company_description', 'giyg_wr_custom_ideal_company' ) ) ) {
				$form = 4;
			} elseif ( in_array( $last_key, array( 'giyg_wr_company_name_0', 'giyg_wr_company_name_1', 'giyg_wr_company_name_2', 'giyg_wr_location_0', 'giyg_wr_location_1', 'giyg_wr_location_2' ) ) ) {
				$form = 5;
			} elseif ( in_array( $last_key, array( 'giyg_wr_skill_name_0', 'giyg_wr_skill_name_1', 'giyg_wr_skill_name_2', 'giyg_wr_skill_name_3', 'giyg_wr_skill_name_4', 'giyg_wr_rating_0', 'giyg_wr_rating_1', 'giyg_wr_rating_2', 'giyg_wr_rating_3', 'giyg_wr_rating_4' ) ) ) {
				$form = 6;
			} elseif ( in_array( $last_key, array( 'giyg_wr_activity_name_0', 'giyg_wr_activity_name_1', 'giyg_wr_activity_name_2' ) ) ) {
				$form = 7;
			} elseif ( in_array( $last_key, array( 'giyg_wr_professional_personality', 'giyg_wr_professional_personality_description', 'giyg_wr_professional_personality_attr_0', 'giyg_wr_professional_personality_attr_1', 'giyg_wr_professional_personality_attr_2', 'giyg_wr_professional_personality_attr_3', 'giyg_wr_professional_personality_attr_4', 'giyg_wr_professional_personality_attr_5' ) ) ) {
				$form = 8;
			} elseif ( in_array( $last_key, array( 'giyg_wr_core_value_0', 'giyg_wr_core_value_1', 'giyg_wr_core_value_2', 'giyg_wr_core_value_3', 'giyg_wr_core_value_4', 'giyg_wr_core_value_5', 'giyg_wr_core_value_6', 'giyg_wr_core_value_7', 'giyg_wr_core_value_8', 'giyg_wr_core_value_9', 'giyg_wr_custom_core_value_0', 'giyg_wr_custom_core_value_1', 'giyg_wr_custom_core_value_2', 'giyg_wr_custom_core_value_3', 'giyg_wr_custom_core_value_4', 'giyg_wr_custom_core_value_5' ) ) ) {
				$form = 9;
			} elseif ( in_array( $last_key, array( 'giyg_wr_corporate_culture', 'giyg_wr_corporate_culture_description', 'giyg_wr_corporate_culture_attr_0', 'giyg_wr_corporate_culture_attr_1', 'giyg_wr_corporate_culture_attr_2', 'giyg_wr_corporate_culture_attr_3', 'giyg_wr_corporate_culture_attr_4', 'giyg_wr_corporate_culture_attr_5' ) ) ) {
				$form = 10;
			} elseif ( in_array( $last_key, array( 'giyg_wr_team_attribute_0', 'giyg_wr_team_attribute_1', 'giyg_wr_team_attribute_2', 'giyg_wr_team_attribute_3', 'giyg_wr_team_attribute_4', 'giyg_wr_custom_team_attribute_0', 'giyg_wr_custom_team_attribute_1', 'giyg_wr_custom_team_attribute_2', 'giyg_wr_custom_team_attribute_3', 'giyg_wr_custom_team_attribute_4' ) ) ) {
				$form = 11;
			} elseif ( in_array( $last_key, array( 'giyg_wr_impact_statement' ) ) ) {
				$form = 12;
			} else {
				$form = 1;
			}

			$_SESSION['woocommerce_resumes']['post_id'] = $last_post_id;
			$redirect_to = get_site_url() . '/build-your-infographic/survey-pages/?survey-form=' . $form . '&survey-form-status=unfinished';
			if ( count( $current_user_posts ) === 1 ) {
				$_SESSION['is_first_resume'] = 0;
			} else {
				$_SESSION['is_first_resume'] = 1;
			}
		} // End if().
	} // End if().

	return $redirect_to;
}
add_filter( 'userpro_login_redirect', 'revelance_child_theme_my_login_redirect', 10, 3 );

/**
 * Create woocommerce free order after the registration.
 */
function revelance_child_theme_my_userpro_registration( $user_id ) {
	$_SESSION['is_first_resume'] = 0;

	$user = get_user_by( 'ID', $user_id );

	if ( ! empty( $user ) ) {

		$address = array(
			'first_name' => $user->first_name,
			'last_name'  => $user->last_name,
			'email'      => $user->user_email,
			'address_1'  => '3902 Henderson Blvd STE 242',
			'address_2'  => '',
			'city'       => 'Tampa',
			'state'      => 'FL',
			'postcode'   => '33629',
			'country'    => 'US',
		);

		$order = wc_create_order();
		$order->add_product( wc_get_product( '1692' ), 1 ); // (get_product with id and next is for quantity).
		$order->set_address( $address, 'billing' );
		$order->set_address( $address, 'shipping' );
		$order->calculate_totals();
		$order->update_status( 'Processing', 'Imported order', TRUE );

	}
}
add_action( 'userpro_after_new_registration', 'revelance_child_theme_my_userpro_registration' );

/**
 * Woocommerce checkout page remove email, phone, company name and additional information fields.
 */
function revelance_child_theme_custom_override_checkout_fields( $fields ) {
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_phone'] );
	unset( $fields['order']['order_comments'] );
	unset( $fields['billing']['billing_email'] );
	$order = array(
		'billing_first_name',
		'billing_last_name',
		'billing_address_1',
		'billing_address_2',
		'billing_city',
		'billing_state',
		'billing_postcode',
		'billing_country',
	);
	foreach ( $order as $field ) {
		$ordered_fields[$field] = $fields['billing'][$field];
	}

	$fields['billing'] = $ordered_fields;
	return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'revelance_child_theme_custom_override_checkout_fields' );

/**
 * Processing before the checkout form to:
 * 1. Hide the existing Click here link at the top of the page.
 * 2. Instantiate the jQuery dialog with contents of
 *    form.checkout_coupon which is in checkout/form-coupon.php.
 * 3. Bind the Click here link to toggle the dialog.
 **/
function revelance_child_theme_ttp_wc_show_coupon_js() {
	/* Hide the Have a coupon? Click here to enter your code section
	* Note that this flashes when the page loads and then disappears.
	* Alternatively, you can add a filter on
	* woocommerce_checkout_coupon_message to remove the html. */
	wc_enqueue_js( '$("a.showcoupon").parent().hide();' );

	/* Use jQuery UI's dialog feature to load the coupon html code
	* into the anchor div. The width controls the width of the
	* modal dialog window. Check here for all the dialog options:
	* http://api.jqueryui.com/dialog/ */
	wc_enqueue_js( 'dialog = $("form.checkout_coupon").dialog({
				   autoOpen: false,
				   width: 500,
				   minHeight: 0,
				   modal: false,
				   appendTo: "#coupon-anchor",
				   position: { my: "left", at: "left", of: "#coupon-anchor"},
				   draggable: false,
				   resizable: false,
				   dialogClass: "coupon-special",
				   closeText: "",
				   buttons: {}});' );

	/* Bind the Click here to enter coupon link to load the
	* jQuery dialog with the coupon code. Note that this
	* implementation is a toggle. Click on the link again
	* and the coupon field will be hidden. This works in
	* conjunction with the hidden close button in the
	* optional CSS in style.css shown below. */
	wc_enqueue_js( '$("#show-coupon-form").click( function() {
				   if (dialog.dialog("isOpen")) {
					  $(".checkout_coupon").hide();
					  dialog.dialog( "close" );
				   } else {
					  $(".checkout_coupon").show();
					  dialog.dialog( "open" );
				   } 
				   return false;});' );
}
add_action( 'woocommerce_before_checkout_form', 'revelance_child_theme_ttp_wc_show_coupon_js', 10 );

/**
 * Show a coupon link above the order details section.
 * This is the 'coupon-anchor' div which the modal dialog
 * window will attach to.
 **/
function revelance_child_theme_ttp_wc_show_coupon() {
	global $woocommerce;

	if ( $woocommerce->cart->needs_payment() ) {
		echo '<div class="woocommerce-info">Have a coupon? <a href="#" id="show-coupon-form">Click here to enter your code</a></div><div id="coupon-anchor"></div>';
	}
}
add_action( 'woocommerce_checkout_after_customer_details', 'revelance_child_theme_ttp_wc_show_coupon', 10 );

/**
 * Get the current user created resume count.
 */
function revelance_child_theme_user_post_count() {
	$args = array(
		'author'        => get_current_user_id(),
		'orderby'       => 'post_date',
		'order'         => 'DESC',
		'post_type'     => 'resume',
		'posts_per_page' => -1, // no limit.
	);
	$current_user_posts = count( get_posts( $args ) );

	return $current_user_posts;
}

/**
 * Destroy the session when user logout.
 */
function revelance_child_theme_EndSession() {
	session_destroy();
}
add_action( 'wp_logout', 'revelance_child_theme_EndSession' );

/**
 * Disable chat option for the share graph page to anonymous users.
 */
function revelance_child_theme_disable_live_chat(){
	if ( is_page( 'share-infographic' ) ) {
	?>
	<script>
		jQuery(document).ready(function(){
			setTimeout(function(){
				if ( jQuery('#wplc_hovercard').length > 0 && jQuery('#wp-live-chat').length >0 ) {
					jQuery('#wplc_hovercard').remove();
					jQuery('#wp-live-chat').remove();
				}
			},4000);
		});
	</script>
	<?php
	}
}
add_action( 'wp_footer', 'revelance_child_theme_disable_live_chat' );

/**
 * Check if the user has active subscription.
 */
function revelance_child_has_woocommerce_subscription( $the_user_id, $the_product_id, $the_status ) {
	$current_user = wp_get_current_user();
	if ( empty( $the_user_id ) ) {
		$the_user_id = $current_user->ID;
	}
	if ( WC_Subscriptions_Manager::user_has_subscription( $the_user_id, $the_product_id, $the_status ) ) {
		return true;
	}
}

/**
 * Modify woocommerce subscription pending cancel to cancel.
 */
function revelance_child_cancel_subscription( $subscription ) {
	$subscription->update_status( 'cancelled', 'Moved from "pending cancellation" to "cancelled" by custom function' );
}
add_action( 'woocommerce_subscription_status_pending-cancel', 'revelance_child_cancel_subscription', 10, 1 );

/**
 * Adds the customer email on the receipient list for cancelled orders notifications.
 */
function revelance_child_cancel_subscription_notification_to_customer( $email_classes ) {
	class My_WC_Email_Cancelled_Order extends WCS_Email_Cancelled_Subscription {
		public function trigger( $subscription ) {
			// $this->recipient .= (empty($this->recipient) ? '' : ',').wc_get_order($subscription->id)->billing_email;
			$this->recipient = wc_get_order( $subscription->id )->billing_email;
			return parent::trigger( $subscription );
		}
	}
	$email_classes['WCS_Email_Cancelled_Subscription'] = new My_WC_Email_Cancelled_Order();
	return $email_classes;
}
add_filter( 'woocommerce_email_classes', 'revelance_child_cancel_subscription_notification_to_customer', 10 );

/*Added by tag team*/
