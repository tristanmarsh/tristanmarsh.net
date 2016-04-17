<?php

$GZipNinjaSpeed_image_path = site_url() . '/wp-content/plugins/gzip-ninja-speed-compression/images/';

$GZipNinjaSpeed_banner_1 = '<div class="img"><a href="http://wphostingninjas.com/" target="_blank"><img src="' . $GZipNinjaSpeed_image_path . 'wphostingninjas-banner.jpg' . '" /></a></div>';
$GZipNinjaSpeed_banner_2 = '<div class="img"><a href="http://customwpninjas.com/" target="_blank"><img src="' . $GZipNinjaSpeed_image_path . 'customwpninjas-banner.jpg' . '" /></a></div>';

$send_mail_status = ''; 

if(isset($_POST['GZipNinjaSpeed_status_submit'])) {
	if($_POST['GZipNinjaSpeed_status'] == 1) {
		$status = GZipNinjaSpeed_install();
	} else {
		$status = GZipNinjaSpeed_uninstall();
	}
	if($status) {
		$settings_status = '<div class="settings-form-msg-success">Settings saved successfully.</div>';
	} else {
		$settings_status = '<div class="settings-form-msg-error">Error applying settings.</div>';
	}
} else if(isset($_POST['GZipNinjaSpeed_submit'])) {
	
	$message  = 'URL : ' . site_url() . '<br />';
	$message .= 'Name : ' . $_POST['GZipNinjaSpeed_name'] . '<br />';
	$message .= 'Email : ' . $_POST['GZipNinjaSpeed_email'] . '<br />';
	$message .= 'Subject : ' . $_POST['GZipNinjaSpeed_sub'] . '<br />';
	$message .= 'Message : ' . $_POST['GZipNinjaSpeed_msg'] . '<br />';
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	if(mail ( 'work@rawnuke.com' , 'Msg from GZip Ninja Speed Plugin' , $message, $headers )) {
		$send_mail_status = '<div class="contact-form-msg-success">Thank you for contacting us.<br />We will get back to you soon.</div>';
	} else {
		$send_mail_status = '<div class="contact-form-msg-error">Error sending details.</div>';
	}

}
?>
<div class="wrap">
<?php
include('css/stylesheet.php');
include('js/script.php');
?>
<h2>GZip Ninja Speed</h2>

<div class="GZipNinjaSpeed_left">
	<div class="banner-img">
	<?php
	echo $GZipNinjaSpeed_banner_1;
	?>
	</div>
	<div class="GZipNinjaSpeed_check_wrap">
	<?php
			echo $settings_status;
	?>
	<div class="GZipNinjaSpeed_check_label">
	<form method="post">
	<?php 
	$GZipNinjaSpeed_status = get_option( 'GZipNinjaSpeed_status', 0 );
	?> 
	<h3><input type="checkbox" name="GZipNinjaSpeed_status" value="1" <?php echo ($GZipNinjaSpeed_status==0)?'':'checked="checked"' ?> /> Enable</h3>
	<input type="submit" name="GZipNinjaSpeed_status_submit" value="Update" />
	</form>
	</div>
	</div>
	
	<div class="banner-img">
		<div class="img">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="E9STJGRYXRH24">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	<?php
	echo $GZipNinjaSpeed_banner_2;
	?>
	</div>
	
</div>
<div class="GZipNinjaSpeed_right">
	<div class="contact-form-wrap">
		<div class="contact-form-title">Subscribe To Our FREE SEO News Letter</div>
		<div class="contact-form-content">
			<form action="https://madmimi.com/signups/subscribe/97451" id="mad_mimi_signup_form" method="post" target="_blank">
			   <p>Name:<br/><input data-required-field="This field is required" id="signup_name" name="signup[name]" type="text"/></p>
			   <p>Email:<br/><input data-invalid-email="This field is invalid" data-required-field="This field is required" id="signup_email" name="signup[email]" placeholder="you@example.com" type="text"/></p>
			   <p><input data-choose-list="&#8593; Choose a list" data-default-text="Subscribe" data-invalid-text="&#8593; You forgot some required fields" data-submitting-text="Sending..." id="webform_submit_button" name="commit" type="submit" value="Subscribe"/></p>
			</form>
		</div>
		<hr />
		<div class="contact-form-title">Ask A Ninja</div>
		<?php
			echo $send_mail_status;
		?>
		<div class="contact-form-content">
			<form method="post">
				<p>Name:<br /><input type="text" name="GZipNinjaSpeed_name" value="" /></p>
				<p>Email:<br /><input type="text" name="GZipNinjaSpeed_email" value="" /></p>
				<p>Subject:<br /><input type="text" name="GZipNinjaSpeed_sub" value="" /></p>
				<p>Message:<br /><textarea name="GZipNinjaSpeed_msg"></textarea></p>
				<p><input type="submit" name="GZipNinjaSpeed_submit" value="Submit" /></p>
				Not sure how to improve your site? Want help to increase your site's performance from a Ninja? Ask us a question and we will be glad to help!
			</form>
		</div>
	</div>
</div>
