<?php
/*
Plugin Name: GZip Ninja Speed Compression
Plugin URI: http://wordpress.org/plugins/gzip-ninja-speed-compression/
Description: GZip Ninja Speed Compression
Version: 1.2.3
Author: CustomWPNinjas
Author URI: http://www.CustomWPNinjas.com/
*/

/*  Copyright 2012, CustomWPNinjas.com.

Permission to use, copy, modify, and/or distribute this software for any purpose
with or without fee is strickly prohibited.

*/
// Register the activation hook to install
register_activation_hook( __FILE__, 'GZipNinjaSpeed_install' );
register_deactivation_hook( __FILE__, 'GZipNinjaSpeed_uninstall' );

add_action('admin_menu', 'GZipNinjaSpeed_menu');

function GZipNinjaSpeed_menu() {
	add_menu_page( 'GZip Ninja Speed', 'GZip Ninja Speed', 'activate_plugins', 'gzip-ninja-speed-compression/gzip-ninja-speed-setting.php' );
}

if( !function_exists( 'GZipNinjaSpeed_install' ) ) {
	function GZipNinjaSpeed_install() {
		$status = true;
		$admin_email = get_option( 'admin_email' );
		$backup_filename = 'GZipNinjaSpeed_install_backup' . time() . '.htaccess';
		if(file_exists(ABSPATH . '.htaccess')) {
			if(!copy ( ABSPATH . '.htaccess' , ABSPATH . $backup_filename )) {
				$status = false;
				$msg = 'Can not create backup file.';
			}
			$status = GZipNinjaSpeed_write_file(ABSPATH . '.htaccess');
		} else {
			$status = GZipNinjaSpeed_write_file(ABSPATH . '.htaccess');
		}
		$backup_filename = 'GZipNinjaSpeed_uninstall_backup' . time() . '.htaccess';
		GZipNinjaSpeed_erase_file(false, $backup_filename);
		add_filter( 'wp_mail_content_type', 'set_html_content_type' );
		
		$message = 'Dear User,<br /><br />GZip Ninja Speed Plugin has been successfully installed on '.site_url().' successfully.<br /><br />In case you find any problem after installing this plugin, replace '.$backup_filename.' with .htaccess<br /><br />GZip is a very natural and very simple fix that does not cause problems with your website.  All browsers use it and almost every server uses it. The reason that it will sometimes fail is based on your server\'s restrictions.  The reason you probably installed this software in the first place is because of your website seeming slow or sluggish - we understand. Ours was too.<br /><br />Then we began to understand - wait - not all servers are created equally.  If you are unhappy with your current site speed or server setup, we invite you to give us a try.  We are WordPress only and consider your business to be a valuable resource, not a bother.  <a href="https://www.wphostingninjas.com/">https://www.wphostingninjas.com/</a> shows our three most used setups with FREE transfers and FREE plugin tune ups.<br /><br />If, after installing, you notice that your website is not responding, quickly email us <a href="mailto:ninjas@customwpninjas.com">ninjas@customwpninjas.com</a> or call 1.866.264.6527 in the US.  Send us your FTP login information if you feel comfortable and we will have it fixed right away.<br /><br />Thank you for installing our plugin and we hope your site becomes very fast!<br /><br />-= Ninjas =-<br /><a href="http://www.customwpninjas.com">http://www.customwpninjas.com</a>';
		
		wp_mail( $admin_email, 'GZip Ninja Speed Install Email', $message );
		remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
		if($status) {
			update_option( 'GZipNinjaSpeed_status', 1);
		} else {
			update_option( 'GZipNinjaSpeed_status', 0);
		}
		return $status;
	}
	
	function GZipNinjaSpeed_write_file( $file_path ){
		$status = true;
		$fp = fopen($file_path, "a");
		if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
			fwrite($fp, "# GZip Ninja Speed -- Starts here\n");
			fwrite($fp, "# Do not write anything between \"GZip Ninja Speed -- Starts\" and \"GZip Ninja Speed -- Ends\"\n");
			fwrite($fp, "# It will be deleted while uninstalling GZip Ninja Speed plugin\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE text/plain #GZip Ninja Speed\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE text/html #GZip Ninja Speed\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE text/xml #GZip Ninja Speed\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE text/css #GZip Ninja Speed\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE application/xml #GZip Ninja Speed\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE application/xhtml+xml #GZip Ninja Speed\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE application/rss+xml #GZip Ninja Speed\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE application/javascript #GZip Ninja Speed\n");
			fwrite($fp, "AddOutputFilterByType DEFLATE application/x-javascript #GZip Ninja Speed\n");
			fwrite($fp, "AddType x-font/otf .otf #GZip Ninja Speed\n");
			fwrite($fp, "AddType x-font/ttf .ttf #GZip Ninja Speed\n");
			fwrite($fp, "AddType x-font/eot .eot #GZip Ninja Speed\n");
			fwrite($fp, "AddType x-font/woff .woff #GZip Ninja Speed\n");
			fwrite($fp, "AddType image/x-icon .ico #GZip Ninja Speed\n");
			fwrite($fp, "AddType image/png .png #GZip Ninja Speed\n");
			fwrite($fp, "# GZip Ninja Speed -- Ends here\n");
			fflush($fp);
			flock($fp, LOCK_UN);    // release the lock
		} else {
			$status = false;
		}
		fclose($fp);
		return $status;
	}
	
	function GZipNinjaSpeed_uninstall() {
		$admin_email = get_option( 'admin_email' );
		$backup_filename = 'GZipNinjaSpeed_uninstall_backup' . time() . '.htaccess';
		$status = GZipNinjaSpeed_erase_file(true, $backup_filename);
		add_filter( 'wp_mail_content_type', 'set_html_content_type' );
		
		$message = 'Dear User,<br /><br />GZip Ninja Speed Plugin has been successfully uninstalled on '.site_url().' successfully.<br /><br />In case you find any problem after uninstalling this plugin, replace '.$backup_filename.' with .htaccess <br /><br />If the plugin did not work for you, let us know.  Email <a href="mailto:ninjas@customwpninjas.com">ninjas@customwpninjas.com</a> or call 1-866-264-6527 for assistance. Thank you for trying our plugin and we will be more than happy to help you set it up properly or help you in finding a new hosting account with <a href="https://www.wphostingninjas.com">https://www.wphostingninjas.com</a><br /><br />-= Ninjas =-<br /><a href="http://www.customwpninjas.com">http://www.customwpninjas.com</a>';
		
		wp_mail( $admin_email, 'GZip Ninja Speed Uninstall Email', $message );
		remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
		if($status) {
			update_option( 'GZipNinjaSpeed_status', 0);
		} else {
			update_option( 'GZipNinjaSpeed_status', 1);
		}
		return $status;
	}
	
	function GZipNinjaSpeed_erase_file($backup, $backup_filename){
		
		$status = false;
		if($backup) {
			if(copy ( ABSPATH . '.htaccess' , ABSPATH . $backup_filename )) {
				$status = true;
			} else {
				$status = false;
				$msg = 'Can not create backup file.';
			}
			if(!$status) {
				return;
			}
		}
		if($status) {
			$fp = fopen(ABSPATH . '.htaccess', "w");
			$lines = file( ABSPATH . $backup_filename );
			
			if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
				ftruncate($fp, 0);      // truncate file
				$inLoop = false;
				foreach($lines as $line) {
					if(strpos($line, 'GZip Ninja Speed -- Starts here') !== false) {
						$inLoop = true;
					}
					if(strpos($line, 'GZip Ninja Speed -- Ends here') !== false) {
						$inLoop = false;
						continue;
					}
					if(!$inLoop) {
						fwrite($fp, $line);
						fflush($fp);
					}
				}
				flock($fp, LOCK_UN);    // release the lock
			} else {
				$status = false;
				$msg = 'Couldn\'t get the lock!';
			}
			fclose($fp);
		}
		return $status;
	}
	
	function set_html_content_type() {
		return 'text/html';
	}
}