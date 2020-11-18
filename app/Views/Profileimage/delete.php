<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete profile image<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Delete profile image</h1>

<p>Are you sure?</p>

<?= form_open("/profileimage/delete") ?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Yes</button>
        </div>

        <div class="control">
            <a class="button" href="<?= site_url("/profile/show") ?>">Cancel</a>
        </div>
    </div>
    
</form>

<?= $this->endSection() ?>
