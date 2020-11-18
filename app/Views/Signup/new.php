<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Signup<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Signup</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/signup/create") ?>

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= old('name') ?>">
    </div>
    
    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    
    <div>
        <label for="password_confirmation">Repeat password</label>
        <input type="password" name="password_confirmation">
    </div>
    
    <button>Sign up</button>
    <a href="<?= site_url("/") ?>">Cancel</a>

</form>

<?= $this->endSection() ?>