<?php
/**
 * Template part for displaying the mail chimp opt in
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<?php
/* Variables */
$optIn = get_field('mailchimp_opt_in_message');
?>
<div id="subscribe" class="mailchimp-opt-in">
  <!-- Begin MailChimp Signup Form -->
  <div id="mc_embed_signup">
    <form action="//thenaturalnutritionist.us7.list-manage.com/subscribe/post?u=62607cf7c4829eff92f2773b1&amp;id=2f8f17bcdf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mailchimp-opt-in-form" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
        <h2 class="section-title"><?php esc_html_e($optIn); ?></h2>
        <div class="form-wrapper">
          <div class="mc-field-group form-element">
            <label for="mce-FNAME"><?php esc_html_e('First Name ', 'tnn'); ?></label>
            <input type="text" value="" name="FNAME" class="mailchimp-input mailchimp-opt-in-name-input" id="mce-FNAME" placeholder="First Name">
          </div>
          <div class="mc-field-group form-element">
            <label for="mce-EMAIL"><?php esc_html_e('Email Address ', 'tnn'); ?></label>
            <input type="email" value="" name="EMAIL" class="required email mailchimp-input mailchimp-opt-in-name-input" id="mce-EMAIL" placeholder="Your Email Address">
          </div>
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_62607cf7c4829eff92f2773b1_2f8f17bcdf" tabindex="-1" value=""></div>
          <div class="clear form-element"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      </div>
    </form>
  </div>
  <!--End mc_embed_signup-->
</div>
