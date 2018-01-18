<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.webkomplet.cz/
 * @since      1.0.0
 *
 * @package    Mail_Komplet
 * @subpackage Mail_Komplet/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

	<h2><?php echo esc_html(get_admin_page_title());?></h2>
	
	<fieldset style="padding: 25px;border: 2px solid #efefef; margin-bottom: 15px;">
		<div style="width: 340px; height: 205px; border: dashed 1px #666; padding: 8px; margin-left: 12px; margin-top:-15px;">
			<h3 style="color:#aad03d;"><?php _e('Contact Mail Komplet', $this->plugin_name)?></h3>
			<div style="clear: both;"></div>
			<p>
				<?php _e('Email', $this->plugin_name) ?>:
				<a href="<?php _e('info@mail-komplet.cz', $this->plugin_name)?>" style="color:#aad03d;">
					<?php _e('info@mail-komplet.cz', $this->plugin_name)?>
				</a>
				<br/>
				<?php _e('Phone', $this->plugin_name)?>: <?php _e('+420 517 070 000', $this->plugin_name)?>
			</p>
			<p style="padding-top:20px;">
				<b><?php _e('Visit us for more info', $this->plugin_name)?>: </b><br/><a href="<?php _e('http://www.mail-komplet.cz', $this->plugin_name)?>" target="_blank" style="color:#aad03d;"><?php _e('http://www.mail-komplet.cz', $this->plugin_name)?></a>
			</p>
		</div>
	</fieldset>

    <form method="post" name="mail_komplet_options" action="options.php">
    
        <?php
            // Grab all options
            $options = get_option($this->plugin_name);
    
            $api_key = (isset($options['api-key']) ? $options['api-key'] : '');
            $base_crypt = (isset($options['base-crypt']) ? $options['base-crypt'] : '');
            $mailing_list_id = (isset($options['mailing-list-id']) ? $options['mailing-list-id'] : null);
        ?>

    	<?php
    	   settings_fields($this->plugin_name);
    	   do_settings_sections($this->plugin_name);
    	?>

    	<!-- set API key -->
    	<fieldset>
    		<legend class="screen-reader-text"><span><?php _e('API key', $this->plugin_name)?></span></legend>
    		<label for="<?php echo $this->plugin_name?>-api-key">
    			<input type="text" size="50" id="<?php echo $this->plugin_name?>-api-key" name="<?php echo $this->plugin_name?>[api-key]" value="<?php if(!empty($api_key)) echo $api_key; ?>"/>
    			<span><?php _e('API key', $this->plugin_name)?></span>
    		</label>
    	</fieldset>
    	
    	<!-- set base crypt -->
    	<fieldset id="<?php echo $this->plugin_name?>-base-crypt-fieldset">
    		<legend class="screen-reader-text"><span><?php _e('Base crypt', $this->plugin_name)?></span></legend>
    		<label for="<?php echo $this->plugin_name?>-base-crypt">
    			<input type="text" size="50" id="<?php echo $this->plugin_name?>-base-crypt" name="<?php echo $this->plugin_name?>[base-crypt]"value="<?php if(!empty($base_crypt)) echo $base_crypt; ?>" />
    			<span><?php _e('Base crypt', $this->plugin_name)?></span>
    		</label>
    	</fieldset>
    	
    	<!-- set mailing list id -->
    	<fieldset>
    		<legend class="screen-reader-text"><span><?php _e('Mailing List', $this->plugin_name)?></span></legend>
    		<label for="<?php echo $this->plugin_name?>-mailing-list-id">
    			<select id="<?php echo $this->plugin_name?>-mailing-list-id" name="<?php echo $this->plugin_name?>[mailing-list-id]" ></select>
    			<span><?php _e('Mailing List', $this->plugin_name)?></span>
    		</label>
    	</fieldset>
    	
    	<fieldset>
        	<input type="hidden" id="plugin-name" value="<?php echo $this->plugin_name?>" />
        	<input type="hidden" id="<?php echo $this->plugin_name?>-module-path" value="<?php echo $this->path?>" />
        	<input type="hidden" id="<?php echo $this->plugin_name?>-str-connect" value="<?php _e('Connect', $this->plugin_name)?>" />
        	<input type="hidden" id="<?php echo $this->plugin_name?>-str-connecting" value="<?php _e('Connecting', $this->plugin_name)?>" />
        	<input type="hidden" id="<?php echo $this->plugin_name?>-mailing-list-id_" value="<?php echo $mailing_list_id?>" />
        	<input type="hidden" id="<?php echo $this->plugin_name?>-str-ajax-error" value="<?php _e('Unable to download mailing lists. Probably API key or base crypt string is wrong. Try to set it again please', $this->plugin_name)?>" />
    	
    		<?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>
    	</fieldset>
    </form>
</div>