<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://dmitrymayorov.com
 * @since      0.1.0
 *
 * @package    Insert_Code_Lite
 * @subpackage Insert_Code_Lite/admin/partials
 */
?>

<div class="wrap">
	<h2><?php _ex( 'Insert Code', 'Name of the plugin on the admin dashboard page.', 'insert-code-lite' ); ?></h2>
	<form method="post" action="options.php">
		<?php settings_fields( 'iclp_code' );?>
		<?php do_settings_sections( 'iclp_code' );?>
		<?php submit_button(); ?>
	</form>
</div>
