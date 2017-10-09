<?php

/**
 * Add Facebook Pixel tracking code to head of 'Order Recieved' WooCommerce endpoint
 *
 * Add Facebook Pixel tracking code to head of 'Order Recieved' WooCommerce endpoint
 */
// Adds to the Facebook Pixel tracking code to the <head> if WooCommerce endpoint is true
function facebook_pixel_order_received_head() {
	if(is_wc_endpoint_url( 'order-received' )){
	  echo '<!-- Facebook Pixel Code -->';
	  echo "<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1224260727689111'); // Insert your pixel ID here.
fbq('track', 'PageView');
fbq('track', 'Purchase');
</script>";
	  echo '<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1224260727689111&ev=PageView&noscript=1"
/></noscript>';
	  echo '<!-- DO NOT MODIFY -->';
	  echo '<!-- End Facebook Pixel Code -->';
	}
}
add_action('wp_head', 'facebook_pixel_order_received_head');

/**
 * Add Facebook Pixel tracking code to head of 'Thank you for joining our team' Mailchimp signup thank you page
 *
 * Add Facebook Pixel tracking code to head of 'Thank you for joining our team' Mailchimp signup thank you page
 */
// Adds to the Facebook Pixel tracking code to the <head> if Page is true
function facebook_pixel_mailchimp_thankyou_head() {
	if(is_page( 'thank-you-for-joining-our-team' )){
	  echo '<!-- Facebook Pixel Code -->';
	  echo "<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1224260727689111'); // Insert your pixel ID here.
fbq('track', 'PageView');
fbq('track', 'CompleteRegistration');
</script>";
	  echo '<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1224260727689111&ev=PageView&noscript=1"
/></noscript>';
	  echo '<!-- DO NOT MODIFY -->';
	  echo '<!-- End Facebook Pixel Code -->';
	}
}
add_action('wp_head', 'facebook_pixel_mailchimp_thankyou_head');



