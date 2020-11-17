<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Login</h1>

<?= form_open("/login/create") ?>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    
    <button>Log in</button>

</form>

<?= $this->endSection() ?>