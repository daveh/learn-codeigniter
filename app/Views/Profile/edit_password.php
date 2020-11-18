<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit password<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Edit password</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<div class="container">

    <?= form_open("/profile/updatepassword") ?>

        <div class="field">
            <label class="label" for="current_password">Current password</label>
            <input class="input" type="password" name="current_password">
        </div>
        
        <div class="field">
            <label class="label" for="password">New password</label>
            <input class="input" type="password" name="password">
        </div>
        
        <div class="field">
            <label class="label" for="password_confirmation">Repeat new password</label>
            <input class="input" type="password" name="password_confirmation">
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Save</button>
            </div>

            <div class="control">
                <a class="button" href="<?= site_url("/profile/show") ?>">Cancel</a>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>









