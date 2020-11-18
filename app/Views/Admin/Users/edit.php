<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('AdminUsers.edit_user') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('AdminUsers.edit_user') ?></h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<div class="container">

    <?= form_open("/admin/users/update/" . $user->id) ?>

        <?= $this->include('Admin/Users/form') ?>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('AdminUsers.save') ?></button>
            </div>
            
            <div class="control">
                <a class="button" href="<?= site_url("/admin/users/show/" . $user->id) ?>"><?= lang('AdminUsers.cancel') ?></a>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>
