<?php
$validation_errors = validation_errors();
$errorClass = ' error';
$controlClass = 'span6';
$fieldData = array(
    'errorClass' => $errorClass,
    'controlClass' => $controlClass,
);
?>
<section id="profile">
    <h1 class="page-header"><?php echo lang('us_add_google_authentication_to_account'); ?></h1>
    <?php if ($validation_errors) : ?>
        <div class="alert alert-error">
            <?php echo $validation_errors; ?>
        </div>
    <?php endif; ?>
    <?php if (isset($user) && $user->role_name == 'Banned') : ?>
        <div data-dismiss="alert" class="alert alert-error">
            <?php echo lang('us_banned_admin_note'); ?>
            <?php return; ?>
        </div>
    <?php endif; ?>
    <div class="row-fluid">
        <div class="span12">
            <?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal', 'autocomplete' => 'off')); ?>
            <h3><?php echo lang('us_google_auth_step_1'); ?></h3>
            <?php echo lang('us_google_auth_instruction_1'); ?>
            <br>
            <br>
            <?php echo lang('us_google_auth_instruction_2'); ?>
            <br>
            <a href="https://itunes.apple.com/au/app/google-authenticator/id388497605?mt=8" >iPhone</a><br>
            <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2">Android</a><br>
            <a href=" Google Authenticator">BlackBerry</a><br>
            <br>
            <h3><?php echo lang('us_google_auth_step_2'); ?></h3>
            <?php echo lang('us_google_auth_instruction_3'); ?><br>
            <ol>
                <li><?php echo lang('us_google_auth_instruction_step_1'); ?><br></li>
                <li><?php echo lang('us_google_auth_instruction_step_2'); ?><br></li>
                <li><?php echo lang('us_google_auth_instruction_step_3'); ?><br></li>
            </ol>
            <br>
            <img src=" <?php echo $ga_qr_url ?>">
            <br>
            <br>
            <?php echo lang('us_google_auth_instruction_step_3_alt'); ?><br>
            <ol>
                <li><?php echo lang('us_google_auth_instruction_step_3_alt_1'); ?><br></li>
                <li><?php echo lang('us_google_auth_instruction_step_3_alt_2'); ?><br></li>
                <li><?php echo lang('us_google_auth_instruction_step_3_alt_3'); ?><?php echo ' '. $salt ?><br></li>
            </ol>
            <br>
            <h3><?php echo lang('us_google_auth_step_3'); ?></h3>
            <?php echo form_input('ga_code', '', lang('us_google_auth_verify')) ?>
            <?php echo form_submit('submit_ga', lang('us_google_authentication_verify'), 'class="btn btn-primary"') ?>
            <?php echo lang('bf_or') . ' ' . anchor('/', lang('bf_action_cancel')); ?>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>