<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('AdminUsers.title_user') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('AdminUsers.title_user') ?></h1>

<a href="<?= site_url("/admin/users") ?>">&laquo; <?= lang('AdminUsers.back_to_index') ?></a>

<div class="content">

    <dl>
        <dt class="has-text-weight-bold"><?= lang('AdminUsers.name') ?></dt>
        <dd><?= esc($user->name) ?></dd>

        <dt class="has-text-weight-bold"><?= lang('AdminUsers.email') ?></dt>
        <dd><?= esc($user->email) ?></dd>

        <dt class="has-text-weight-bold"><?= lang('AdminUsers.active') ?></dt>
        <dd><?= $user->is_active ? lang('AdminUsers.yes') : lang('AdminUsers.no') ?></dd>

        <dt class="has-text-weight-bold"><?= lang('AdminUsers.administrator') ?></dt>
        <dd><?= $user->is_admin ? lang('AdminUsers.yes') : lang('AdminUsers.no') ?></dd>

        <dt class="has-text-weight-bold"><?= lang('AdminUsers.created_at') ?></dt>
        <dd><?= $user->created_at ?></dd>

        <dt class="has-text-weight-bold"><?= lang('AdminUsers.updated_at') ?></dt>
        <dd><?= $user->updated_at ?></dd>
    </dl>

</div>

<a class="button is-link" href="<?= site_url('/admin/users/edit/' . $user->id) ?>"><?= lang('AdminUsers.edit') ?></a>

<?php if ($user->id != current_user()->id): ?>
    
    <a class="button is-link" href="<?= site_url('/admin/users/delete/' . $user->id) ?>"><?= lang('AdminUsers.delete') ?></a>
    
<?php endif; ?>

<?= $this->endSection() ?>






