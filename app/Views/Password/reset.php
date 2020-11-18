<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Password.title_reset') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Password.title_reset') ?></h1>

<?php if (session()->has('errors')) : ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">

    <?= form_open("/$locale/password/processreset/$token") ?>

        <div class="field">
            <label class="label" for="password"><?= lang('Password.password') ?></label>
            <input class="input" type="password" name="password">
        </div>
        
        <div class="field">
            <label class="label" for="password_confirmation"><?= lang('Password.repeat_password') ?></label>
            <input class="input" type="password" name="password_confirmation">
        </div>
        
        <div class="field">
            <div class="control">
                <button class="button is-primary"><?= lang('Password.reset_password') ?></button>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>







