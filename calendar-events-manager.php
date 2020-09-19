<?php
define('atozsites_EM_MIN_VERSION', 5.5); //minimum version for integration

if( defined('EM_VERSION') && atozsites_EM_MIN_VERSION > EM_VERSION ){
	//check that EM is up to date
	add_action('admin_notices','atozsites_em_version_warning');
	add_action('network_admin_notices','atozsites_em_version_warning');
}

function atozsites_em_version_warning(){
	?>
	<div class="error"><p>Please make sure you have the <a href="http://wordpress.org/extend/plugins/events-manager/">latest version</a> of Events Manager installed, as earlier versions may produce errors when integrating with Atozsites FullCalendar. <em>Only admins see this message.</em></p></div>
	<?php
}