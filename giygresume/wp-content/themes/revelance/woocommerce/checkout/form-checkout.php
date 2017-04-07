<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="checkout-page">
<div class="close-wrap"><a href="<?php echo get_site_url(); ?>/pricing" class="close-page" title="Close"></a></div>
    <h3 class="title">Order Summary</h3>
    <div class="col-md-3 testimonail-section testimonail-section-left">
        <div class="testimonail-wrap">
            <div class="testimonail-block">
                <?php
                $testimonials = get_post_meta(474);
                $post_thumbnail_id = get_post_thumbnail_id(474);
                $testimonials_image = wp_get_attachment_image_src(get_post_thumbnail_id(474), 'thumbnail');
                ?>
                <div class="testimonail-block-contnet">
                <p><?php echo $testimonials['ABt_testimonial_text'][0] ?></p>
                </div>
                <img src="<?php echo $testimonials_image[0]; ?>" alt="Image">
                <span class="source"><a class="ABt_author" href="#" target="_self" "=""><?php echo $testimonials['ABt_testimonial_client'][0] ?></a>  <a class="ABt_company" href="#" target="_self" "=""><?php echo $testimonials['ABt_testimonial_company'][0] ?></a></span>
            </div>
        </div>
    </div>
    <div class="col-md-6 form-wrap">
        <div class="form-section">
            <?php
            wc_print_notices();

            do_action('woocommerce_before_checkout_form', $checkout);

            // If checkout registration is disabled and not logged in, the user cannot checkout
            if (!$checkout->enable_signup && !$checkout->enable_guest_checkout && !is_user_logged_in()) {
                echo apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce'));
                return;
            }
            ?>

            <form  name="" method="" class="" action="">
                <div class="col2-set" id="customer_details">
                    <?php do_action('woocommerce_checkout_billing'); ?></div>
            </form>
            <?php woocommerce_checkout_coupon_form(); ?>
            <form id="chk" name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
                <?php do_action('woocommerce_checkout_before_customer_details'); ?>
                <?php if (sizeof($checkout->checkout_fields) > 0) : ?>
                      <input type="hidden" id="bfname"  name="billing_first_name"  />                  
                      <input type="hidden" id="blname"  name="billing_last_name"  />                  
                    <input type="hidden" id="bcountry" name="billing_country"  />
                    <input type="hidden" id="ba1" name="billing_address_1" />
                    <input type="hidden" id="ba2" name="billing_address_2"  />
                    <input type="hidden"  id="bstate" name="billing_state"  />
                    <input type="hidden"  id="bpost" name="billing_postcode"  />
                    <input type="hidden" id="bcity" name="billing_city"  />
                   
                    <?php do_action('woocommerce_checkout_shipping'); ?>
                    <?php do_action('woocommerce_checkout_after_customer_details'); ?>

                <?php endif; ?>
                <h3 id="order_review_heading"><?php _e('Your order', 'woocommerce'); ?></h3>

                <?php do_action('woocommerce_checkout_before_order_review'); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
                    <?php do_action('woocommerce_checkout_order_review'); ?>
                </div>

                <?php do_action('woocommerce_checkout_after_order_review'); ?>

            </form>

            <?php do_action('woocommerce_after_checkout_form', $checkout); ?>
        </div>
    </div>
    <div class="col-md-3 testimonail-section testimonail-section-right">
        <div class="testimonail-wrap">
            <div class="testimonail-block">
                <?php
                $testimonials = get_post_meta(669);
                $post_thumbnail_id = get_post_thumbnail_id(669);
                $testimonials_image = wp_get_attachment_image_src(get_post_thumbnail_id(669), 'thumbnail');
                ?>
                <div class="testimonail-block-contnet">
                    <p><?php echo $testimonials['ABt_testimonial_text'][0] ?></p>
                </div>
                <img src="<?php echo $testimonials_image[0]; ?>" alt="Image">
                <span class="source"><a class="ABt_author" href="#" target="_self" "=""><?php echo $testimonials['ABt_testimonial_client'][0] ?></a>  <a class="ABt_company" href="#" target="_self" "=""><?php echo $testimonials['ABt_testimonial_company'][0] ?>669</a></span>
            </div>
        </div>
    </div>
</div>
