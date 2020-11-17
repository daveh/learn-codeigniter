<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Task</h1>

<a href="<?= site_url("/tasks") ?>">&laquo; back to index</a>

<dl>
    <dt>ID</dt>
    <dd><?= $task->id ?></dd>
    
    <dt>Description</dt>
    <dd><?= esc($task->description) ?></dd>
    
    <dt>Created at</dt>
    <dd><?= $task->created_at ?></dd>
    
    <dt>Updated at</dt>
    <dd><?= $task->updated_at ?></dd>
</dl>

<a href="<?= site_url('/tasks/edit/' . $task->id) ?>">Edit</a>
<a href="<?= site_url('/tasks/delete/' . $task->id) ?>">Delete</a>

<?= $this->endSection() ?>