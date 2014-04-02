<?php
	$site_open = $this->settings_lib->item('auth.allow_register');
?>
<p><br/><a href="<?php echo site_url(); ?>">&larr; <?php echo lang('us_back_to') . $this->settings_lib->item('site.title'); ?></a></p>

<div id="login" style="max-width:500px;">
	<h2><?php echo lang('us_google_authentication_login'); ?></h2>

	<?php echo Template::message(); ?>

	<?php
		if (validation_errors()) :
	?>
	<div class="row-fluid">
		<div class="span12">
			<div class="alert alert-error fade in">
			  <a data-dismiss="alert" class="close">&times;</a>
				<?php echo validation_errors(); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php echo form_open('users/login_ga', array('autocomplete' => 'off')); ?>

		<div class="control-group <?php echo iif( form_error('ga_login') , 'error') ;?>">
			<div class="controls">
                            <input style="width: 95%" type="number" name="ga_login" id="login_value" value="" tabindex="1" placeholder="<?php echo lang('us_google_authentication_login')?>"/>
			</div>
		</div>

		<div class="control-group">
                    <div class="controls" style="text-align: center;">
				<input class="btn btn-large btn-primary" type="submit" name="ga-log-me-in" id="submit" value="<?php e(lang('us_let_me_in')); ?>" tabindex="2" />
			</div>
		</div>
	<?php echo form_close(); ?>
</div>