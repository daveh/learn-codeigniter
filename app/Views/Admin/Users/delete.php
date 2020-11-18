<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete user<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Delete user</h1>

<p>Are you sure?</p>

<?= form_open("/admin/users/delete/" . $user->id) ?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Yes</button>
        </div>

        <div class="control">
            <a class="button" href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancel</a>
        </div>
    </div>
    
</form>

<?= $this->endSection() ?>
