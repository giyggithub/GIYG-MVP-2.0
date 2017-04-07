<?php
/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php //_e( "Your order has been received and is now being processed. Your order details are shown below for your reference:", 'woocommerce' ); ?></p>

<?php
	$items = $order->get_items();
	$items = array_values($items);

	$totals = $order->get_order_item_totals();
	$totals = array_values($totals);

	$subscriptions = wcs_get_subscriptions_for_order( $order, array( 'order_type' => 'any' ) );

	foreach ( $subscriptions as $subscription_id => $subscription ) :		
		$next_pay = get_post_meta( $subscription_id, wcs_get_date_meta_key( 'next_payment' ), true );
	endforeach;
	
?>

<p><?php _e( "Hi " . $order->billing_first_name ); ?></p>
<p><?php _e( "Here's a big <strong>THANK YOU</strong> for your recent GIYG upgrade.  We’re excited to help you tell your amazing story." ); ?></p>
<p><?php _e( "By unlocking all of GIYG's features, you now have the tools to create a brilliant, eye-popping personal infographic sure to stand out from the stack and land you your dream gig...we mean, \"GIYG.\"" ); ?></p>
<h2><?php _e( "Here's your upgrade details:" ); ?></h2>
<p><?php _e( "Description:" ); ?> <?php echo $items[0]['name']; ?></p>
<p><?php _e( "Total:" ); ?> <?php echo $totals[0]['value']; ?></p>
<p><?php _e( "Next Payment:" ); ?> <?php echo $next_pay; ?></p>
<p><?php _e( "And remember, you're not alone.  So if you get stuck or have any feedback, simply reach out.  We want to help you look your best so you can find a job where you do your best. :" ); ?></p>
<p><?php _e( "You got this." ); ?></p>
<p><?php _e( "Your GIYG Success Team" ); ?></p>
<p><?php _e( "P.S. Did you know you can earn fifty percent off your next bill by simply leaving a review on our Facebook page <a href='https://www.facebook.com/mygiyg'>here</a>." ); ?></p>

<?php

/**
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Emails::order_schema_markup() Adds Schema.org markup.
 * @since 2.5.0
 */
//do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
//do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
//do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
