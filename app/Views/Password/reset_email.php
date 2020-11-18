<h1><?= lang('Password.title_reset') ?></h1>

<p><?= lang('Password.reset_email_body') ?>:</p>

<p><a href="<?= site_url("/$locale/password/reset/$token") ?>"><?= lang('Password.reset_password') ?></a></p>
