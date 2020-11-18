<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">New task</h1>

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
                <button class="button is-primary">Save</button>
            </div>
            
            <div class="control">
                <a class="button" href="<?= site_url("/tasks") ?>">Cancel</a>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>
