<?php if(!defined('ABSPATH')) die('Direct access denied.'); ?>

<div class="wrap">
    <div id="icon-tools" class="icon32"><br></div>
    
	<?php $this->render('export-import-tabs.php', array('tabs'=>$tabs)); ?>
	
	<h2><?php _e('Cyclone Slider Importer', $textdomain); ?></h2>
	
	<?php $this->render('error-message.php', array('error'=>$error)); ?>
	
	<form enctype="multipart/form-data" method="post" action="<?php echo $import_page_url; ?>">
		<input type="hidden" name="<?php echo $nonce_name; ?>" value="<?php echo $nonce; ?>" />
		<input type="hidden" name="cycloneslider_import_step" value="1" />
		<table class="form-table">
			<tr>
				<th><label for="cycloneslider_import"><?php _e('Import Zip File:', $textdomain); ?></label></th>
				<td>
					<input id="cycloneslider_import" type="file" name="cycloneslider_import" />
				</td>
			</tr>
		</table>
		<br /><br />
		<?php submit_button( __('Upload', $textdomain), 'primary', 'submit', false) ?>
	</form>
</div>