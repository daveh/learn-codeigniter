<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Tasks.delete_task') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Tasks.delete_task') ?></h1>

<p><?= lang('Tasks.are_you_sure') ?></p>

<?= form_open("/tasks/delete/" . $task->id) ?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary"><?= lang('Tasks.yes') ?></button>
        </div>

        <div class="control">
            <a class="button" href="<?= site_url('/tasks/show/' . $task->id) ?>"><?= lang('Tasks.cancel') ?></a>
        </div>
    </div>

</form>

<?= $this->endSection() ?>
