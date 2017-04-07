<?php
/**
 * Customer processing renewal order email
 *
 * @author	Brent Shepherd
 * @package WooCommerce_Subscriptions/Templates/Emails
 * @version 1.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$invoice_num = $order->id;

$items = $order->get_items();
$items = array_values($items);

$totals = $order->get_order_item_totals();
$totals = array_values($totals);

$subscriptions = wcs_get_subscriptions_for_order( $order, array( 'order_type' => 'any' ) );

foreach ( $subscriptions as $subscription_id => $subscription ) :		
	$next_pay = get_post_meta( $subscription_id, wcs_get_date_meta_key( 'next_payment' ), true );
endforeach;

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php echo "Hi " . $order->billing_first_name; ?></p>
<h2><?php echo "Here is your latest GIYG invoice for:"; ?></h2>
<p><?php echo "Description:"; ?> <?php echo $items[0]['name']; ?></p>
<p><?php echo "Total:"; ?> <?php echo $totals[0]['value']; ?></p>
<p><?php echo "Next Payment:"; ?> <?php echo $next_pay; ?></p>
<p><?php echo "Invoice #" . $invoice_num . " can be viewed here:"; ?></p>
<p><?php echo "<a href='".get_site_url()."/my-account/view-order/".$invoice_num."'>View your invoice</a>"; ?></p>
<p><?php echo "Your credit card was charged " . $totals[0]['value'] . "."; ?></p>
<p><?php echo "Please keep this email for your records. If you have any questions, please contact info@giyg.me.
Thank you for your business!"; ?></p>
<p><?php echo "GIYG Success Team"; ?></p>
<p><?php echo "www.giyg.me"; ?></p>
<p><?php echo "P.S. Did you know you can earn fifty percent off your next bill by simply leaving a review on our Facebook page <a href='https://www.facebook.com/mygiyg'>here</a>."; ?></p>

<!-- <p><?php //esc_html_e( 'Your subscription renewal order has been received and is now being processed. Your order details are shown below for your reference:', 'woocommerce-subscriptions' ); ?></p> -->

<?php //do_action( 'woocommerce_subscriptions_email_order_details', $order, $sent_to_admin, $plain_text, $email ); ?>

<?php //do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email ); ?>

<?php //do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email ); ?>

<?php do_action( 'woocommerce_email_footer', $email ); ?>