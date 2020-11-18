<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Profile.title_edit') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Profile.title_edit') ?></h1>

<p><?= lang('Profile.enter_password') ?></p>

<div class="container">

    <?= form_open("/profile/processauthenticate") ?>

        <div class="field">
            <label class="label" for="password"><?= lang('Profile.password') ?></label>
            <input class="input" type="password" name="password">
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('Profile.send') ?></button>
            </div>

            <div class="control">
                <a class="button" href="<?= site_url('/profile/show') ?>"><?= lang('Profile.cancel') ?></a>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>
