<?php
/**
 * Contact Form
 *
 * @package MKP
 * @since 0.1.0
 */
?>

<div class="tinymce">

	<form id="contact-form" method="post" action="#">
		<ul>
			<li class="field">
				<input type="text" name="real_name" class="input required" id="real_name" placeholder="Your Name">
			</li>
			<li class="field">
				<input type="text" name="organization" class="input" id="organization" placeholder="Organization">
			</li>
			<li class="field">
				<input type="text" name="email" class="input required" id="email" placeholder="Email Address">
			</li>
			<li class="field">
				<input type="text" name="subject" class="input required" id="subject" placeholder="Subject">
			</li>
			<li class="field">
				<textarea class="input textarea required" rows="5" name="message" id="message"></textarea>
			</li>
		</ul>
		<div class="medium pretty primary btn"><input type="submit" name="contact_submit" id="contact-submit" value="Submit"></div>
		<img src="<?php bloginfo('template_url'); ?>/assets/images/loader-long.gif" class="loader-long" alt="Loading" style="display: none;">
		<p class="danger alert" id="contact-messaging" style="display: none;"></p>
	</form>

</div>