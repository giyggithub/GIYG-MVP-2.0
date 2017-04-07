<?php
/**
 * Cancelled Subscription email
 *
 * @author	Prospress
 * @package WooCommerce_Subscriptions/Templates/Emails
 * @version 2.1
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php _e( "Hi " . $subscription->get_formatted_billing_full_name() ); ?></p>
<p><?php _e( "Here's confirmation that your GIYG subscription has been cancelled." ); ?></p>
<p><?php _e( "We're sorry to see you go but we still wish you the best in your career journey. " ); ?></p>
<p><?php _e( "You will not be billed further. " ); ?></p>
<p><?php _e( "If you see an unauthorized charge on your statement, please contact us IMMEDIATELY." ); ?></p>
<p><?php _e( "E-mail: info@giyg.me" ); ?></p>
<p><?php _e( "Phone: 813-370-0929 M-F 9:00am-5:00pm ET" ); ?></p>
<p><?php _e( "Thank you for your business." ); ?></p>
<p><?php _e( "Best," ); ?></p>
<p><?php _e( "The GIYG Team" ); ?></p>

<?php /*
<h2><?php _e( "Here's your upgrade details:" ); ?></h2>
<p><strong><?php _e( "Description:" ); ?></strong> <?php echo $items[0]['name']; ?></p>
<p><strong><?php _e( "Total:" ); ?> <?php echo $totals[0]['value']; ?></strong></p>
<p><strong><?php _e( "Next Payment:" ); ?></strong></p>
<p><?php _e( "And remember, you're not alone.  So if you get stuck or have any feedback, simply reach out.  We want to help you look your best so you can find a job where you do your best. :" ); ?></p>
<p><?php _e( "You got this." ); ?></p>
<p><?php _e( "Your GIYG Success Team" ); ?></p>
<p><?php _e( "P.S. Did you know you can earn fifty percent off your next bill by simply leaving a review on our Facebook page here." ); ?></p>

<p>
	<?php
	// translators: $1: customer's billing first name and last name
	printf( esc_html__( 'A subscription belonging to %1$s has been cancelled. Their subscription\'s details are as follows:', 'woocommerce-subscriptions' ), esc_html( $subscription->get_formatted_billing_full_name() ) );
	?>
</p>

<table class="td" cellspacing="0" cellpadding="6" style="width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;" border="1">
	<thead>
		<tr>
			<th class="td" scope="col" style="text-align:left;"><?php esc_html_e( 'Subscription', 'woocommerce-subscriptions' ); ?></th>
			<th class="td" scope="col" style="text-align:left;"><?php echo esc_html_x( 'Price', 'table headings in notification email', 'woocommerce-subscriptions' ); ?></th>
			<th class="td" scope="col" style="text-align:left;"><?php echo esc_html_x( 'Last Payment', 'table heading', 'woocommerce-subscriptions' ); ?></th>
			<th class="td" scope="col" style="text-align:left;"><?php echo esc_html_x( 'End of Prepaid Term', 'table headings in notification email', 'woocommerce-subscriptions' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td" width="1%" style="text-align:left; vertical-align:middle;">
				<a href="<?php echo esc_url( wcs_get_edit_post_link( $subscription->id ) ); ?>">#<?php echo esc_html( $subscription->get_order_number() ); ?></a>
			</td>
			<td class="td" style="text-align:left; vertical-align:middle;">
				<?php echo wp_kses_post( $subscription->get_formatted_order_total() ); ?>
			</td>
			<td class="td" style="text-align:left; vertical-align:middle;">
				<?php
				$last_payment_time = $subscription->get_time( 'last_payment', 'site' );
				if ( ! empty( $last_payment_time ) ) {
					echo esc_html( date_i18n( wc_date_format(), $last_payment_time ) );
				} else {
					esc_html_e( '-', 'woocommerce-subscriptions' );
				}
				?>
			</td>
			<td class="td" style="text-align:left; vertical-align:middle;">
				<?php echo esc_html( date_i18n( wc_date_format(), $subscription->get_time( 'end', 'site' ) ) ); ?>
			</td>
		</tr>
	</tbody>
</table>
<br/>

<?php do_action( 'woocommerce_subscriptions_email_order_details', $subscription, $sent_to_admin, $plain_text, $email ); ?>

<?php do_action( 'woocommerce_email_customer_details', $subscription, $sent_to_admin, $plain_text, $email ); ?>

*/ ?>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
