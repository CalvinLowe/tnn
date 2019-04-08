<?php

/**
 * Adds Facebook Pixel tracking code to all pages except 'order-received' and 
 * 'thank-you-for-joining-our-team'
 */
function facebook_pixel_default() {
	if( !is_wc_endpoint_url( 'order-received' ) && !is_page( 'thank-you-for-joining-our-team' ) ){
		echo '<!-- Facebook Pixel Code -->';
		echo "
<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '');
	fbq('track', 'PageView');
</script>";
		echo '
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=&ev=PageView&noscript=1"/>
</noscript>';
		echo "
<!-- DO NOT MODIFY -->";
		echo "
<!-- End Facebook Pixel Code -->
";
	  }
  }
  add_action('wp_footer', 'facebook_pixel_default');


/**
 * Add Facebook Pixel tracking code before </body> of 'Order Recieved' WooCommerce endpoint
 */
function facebook_pixel_order_received() {
	if(is_wc_endpoint_url( 'order-received' )){
	  echo '<!-- Facebook Pixel Code -->';
	  echo "
<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '');
	fbq('track', 'PageView');
	fbq('track', 'Purchase');
</script>";
	  echo '
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=&ev=PageView&noscript=1"/>
</noscript>';
	  echo "
<!-- DO NOT MODIFY -->";
	  echo "
<!-- End Facebook Pixel Code -->
";
	}
}
add_action('wp_footer', 'facebook_pixel_order_received');

/**
 * Add Facebook Pixel tracking code before </body> of 'Thank you for joining our team' Mailchimp
 * signup thank you page
 */
function facebook_pixel_mailchimp() {
	if(is_page( 'thank-you-for-joining-our-team' )){
	  echo '<!-- Facebook Pixel Code -->';
	  echo "
<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '');
	fbq('track', 'PageView');
	fbq('track', 'CompleteRegistration');
</script>";
	  echo '
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=&ev=PageView&noscript=1"/>
</noscript>';
	  echo "
<!-- DO NOT MODIFY -->";
	  echo "
<!-- End Facebook Pixel Code -->
";
	}
}
add_action('wp_footer', 'facebook_pixel_mailchimp');



