<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Login.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Login.title') ?></h1>

<div class="container">

    <?= form_open("/$locale/login/create") ?>

        <div class="field">
            <label class="label" for="email"><?= lang('Login.email') ?></label>
            <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>
        
        <div class="field">
            <label class="label" for="password"><?= lang('Login.password') ?></label>
            <input class="input" type="password" name="password">
        </div>
        
        <div class="field">
            <label class="checkbox" for="remember_me">
                <input type="checkbox" id="remember_me" name="remember_me"
                    <?php if (old('remember_me')): ?>checked<?php endif; ?>> <?= lang('Login.remember_me') ?>
            </label>
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('Login.log_in') ?></button>
            </div>

            <a href="<?= site_url("/$locale/password/forgot") ?>"><?= lang('Login.forgot_password') ?></a>
        </div>

    </form>

</div>

<?= $this->endSection() ?>








