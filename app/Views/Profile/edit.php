<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Profile.title_edit') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Profile.title_edit') ?></h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<div class="container">

    <?= form_open("/profile/update") ?>

        <div class="field">
            <label class="label" for="name"><?= lang('Profile.name') ?></label>
            <input class="input" type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
        </div>

        <div class="field">
            <label class="label" for="email"><?= lang('Profile.email') ?></label>
            <input class="input" type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
        </div>    
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('Profile.save') ?></button>
            </div>
            
            <div class="control">
                <a class="button" href="<?= site_url("/profile/show") ?>"><?= lang('Profile.cancel') ?></a>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>
