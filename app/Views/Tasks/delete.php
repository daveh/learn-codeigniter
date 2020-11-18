<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Delete task</h1>

<p>Are you sure?</p>

<?= form_open("/tasks/delete/" . $task->id) ?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Yes</button>
        </div>

        <div class="control">
            <a class="button" href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancel</a>
        </div>
    </div>

</form>

<?= $this->endSection() ?>
