<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Tasks.new_task') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Tasks.new_task') ?></h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<div class="container">

    <?= form_open("/tasks/create") ?>

        <?= $this->include('Tasks/form') ?>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('Tasks.save') ?></button>
            </div>
            
            <div class="control">
                <a class="button" href="<?= site_url("/tasks") ?>"><?= lang('Tasks.cancel') ?></a>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>
