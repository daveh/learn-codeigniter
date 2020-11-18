<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Forgot password<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Forgot password</h1>

<?= form_open("/password/processforgot") ?>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <button>Send</button>

</form>

<?= $this->endSection() ?>