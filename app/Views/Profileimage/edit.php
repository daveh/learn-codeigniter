<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Profileimage.edit_title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Profileimage.edit_title') ?></h1>

<?= form_open_multipart("/profileimage/update") ?>

    <div class="file">
        <label class="file-label">
            <input class="file-input" type="file" name="image">
            <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                    <?= lang('Profileimage.choose_a_file') ?>
                </span>
            </span>
        </label>
    </div>
    
    <div class="field is-grouped mt-4">
        <div class="control">
            <button class="button is-primary"><?= lang('Profileimage.upload') ?></button>
        </div>

        <div class="control">
            <a class="button" href="<?= site_url("/profile/show") ?>"><?= lang('Profileimage.cancel') ?></a>
        </div>
    </div>
    
</form>

<?= $this->endSection() ?>
