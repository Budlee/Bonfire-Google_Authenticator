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
            <?php echo form_input('ga_code', '', lang('us_google_auth_verify')) ?>
            <?php echo form_submit('submit_ga', lang('us_google_authentication_remove'), 'class="btn btn-danger"') ?>
            <?php echo lang('bf_or') . ' ' . anchor('/', lang('bf_action_cancel')); ?>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>