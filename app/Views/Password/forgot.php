<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Forgot password<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Forgot password</h1>

<div class="container">

    <?= form_open("/password/processforgot") ?>

        <div class="field">
            <label class="label" for="email">email</label>
            <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>
        
        <div class="field">
            <div class="control">
                <button class="button is-primary">Send</button>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>
