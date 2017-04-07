<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author         WooThemes
 * @package     WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( $order ) : ?>

    <?php if ( $order->has_status( 'failed' ) ) : ?>
    
        <p class="woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

        <p class="woocommerce-thankyou-order-failed-actions">
            <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
            <?php if ( is_user_logged_in() ) : ?>
                <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
            <?php endif; ?>
        </p>

    <?php else : ?>

        <p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'THANK YOU FOR PURCHASING YOUR GIYGGRAPH<sup>SM</sup>', 'woocommerce' ), $order ); ?></p>
        
        <p class="woocommerce-thankyou-order-para">We're excited to support you as you progress through your career journey.</p>
        
        <ul class="woocommerce-thankyou-order-details order_details">
            <li class="order">
                <?php _e( 'Order Number:', 'woocommerce' ); ?>
                <strong><?php echo $order->get_order_number(); ?></strong>
            </li>
            <li class="date">
                <?php _e( 'Date:', 'woocommerce' ); ?>
                <strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong>
            </li>
            <li class="total">
                <?php _e( 'Total:', 'woocommerce' ); ?>
                <strong><?php echo $order->get_formatted_order_total(); ?></strong>
            </li>
            <?php if ( $order->payment_method_title ) : ?>
            <li class="method">
                <?php _e( 'Payment Method:', 'woocommerce' ); ?>
                <strong><?php echo $order->payment_method_title; ?></strong>
            </li>
            <?php endif; ?>
        </ul>
        <div class="clear"></div>

    <?php endif; ?>

    <?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
    <?php do_action( 'woocommerce_thankyou', $order->id ); ?>
    <div class="thank_submit">
        <a class="btn btn-lg btn-green" href="<?php echo get_site_url();?>/build-your-infographic/"><span>FINISH GIYGGRAPH DESIGN</span></a>
    </div>
    <hr>
    <div class="thank_social">
        <p class="woocommerce-thankyou-order-para">Excited to Share Your Personal GIYGgraph<sup>SM</sup> Website?</p>
        <?php echo do_shortcode('[DISPLAY_ULTIMATE_PLUS]'); ?>
    </div>
    <p class="thank_social_assitance">If you need any further assistance, simply let us know.</p>
<?php else : ?>

    <p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>
