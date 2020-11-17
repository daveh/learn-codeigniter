<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Welcome</h1>

    <a href="<?= site_url("/signup") ?>">Sign up</a>
    
    <a href="<?= site_url("/login") ?>">Log in</a>

<?= $this->endSection() ?>