<?PHP
/**
* Plugin Name: Hosting Website Speed Check
* Plugin URI: https://www.dnr.nl/hosting-speed-check
* Description: Check the loadtime for your webpage
* Version: 1.0
* Author: DNR Hosting
* Author URI: https://www.dnr.nl
**/

$start_time = round(microtime(true) * 1000);

add_action('wp_loaded', 'krijg_speed_website');



function krijg_speed_website(){
	
	
	$start_time = round(microtime(true) * 1000);
	$tekst = "Seconden : $start_time";
	global $start_time;
}





add_action('wp_footer', 'krijg_speed_website_eind');



function krijg_speed_website_eind(){
	global $start_time;
	
	$tijd1 = round(microtime(true) * 1000) - $start_time;
	$tijd2 = $tijd1/1000;
	//echo "-|$start_time|--$tijd2--<BR>";
	echo "<div style='display: block; padding: 10px; color: #fff; background-color: #333; text-align: center;'>Page loaded in $tijd2 seconds</div>";

	
}





?>