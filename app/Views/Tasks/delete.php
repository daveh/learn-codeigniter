<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Delete task</h1>

<p>Are you sure?</p>

<?= form_open("/tasks/delete/" . $task->id) ?>

    <button>Yes</button>
    <a href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancel</a>
    
</form>

<?= $this->endSection() ?>
