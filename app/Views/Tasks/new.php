<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>New task</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/tasks/create") ?>

    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="">
    </div>
    
    <button>Save</button>
    <a href="<?= site_url("/tasks") ?>">Cancel</a>

</form>

<?= $this->endSection() ?>