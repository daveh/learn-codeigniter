<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit profile image<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Edit profile image</h1>

<?= form_open_multipart("/profileimage/update") ?>

    <div>
        <label for="image">File</label>
        <input type="file" name="image" id="image" />
    </div>
    
    <button>Upload</button>
    <a href="<?= site_url("/profile/show") ?>">Cancel</a>
    
</form>

<?= $this->endSection() ?>
