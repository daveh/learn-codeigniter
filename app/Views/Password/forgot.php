<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Password.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Password.title') ?></h1>

<div class="container">

    <?= form_open("/$locale/password/processforgot") ?>

        <div class="field">
            <label class="label" for="email"><?= lang('Password.email') ?></label>
            <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>
        
        <div class="field">
            <div class="control">
                <button class="button is-primary"><?= lang('Password.send') ?></button>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>
