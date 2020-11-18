<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Signup<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Signup.title') ?></h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<div class="container">

<?= form_open("/signup/create") ?>

    <div class="field">
        <label class="label" for="name">Name</label>
        <div class="control">
            <input class="input" type="text" name="name" id="name" value="<?= old('name') ?>">
        </div>
    </div>
    
    <div class="field">
        <label class="label" for="email">email</label>
        <div class="control">
            <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>
    </div>
    
    <div class="field">
        <label class="label" for="password">Password</label>
        <div class="control">
            <input class="input" type="password" name="password">
        </div>
    </div>
    
    <div class="field">
        <label class="label" for="password_confirmation">Repeat password</label>
        <div class="control">
            <input class="input" type="password" name="password_confirmation">
        </div>
    </div>
    
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Sign up</button>
        </div>
        
        <div class="control">
            <a class="button" href="<?= site_url("/") ?>">Cancel</a>
        </div>
    </div>

</form>

</div>

<?= $this->endSection() ?>





