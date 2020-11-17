<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Welcome</h1>

    <a href="<?= site_url("/signup") ?>">Sign up</a>
    
    <a href="<?= site_url("/login") ?>">Log in</a>

    <?php if (session()->has('user_id')): ?>
        
        <p>User is logged in</p>
        
    <?php else: ?>
        
        <p>User is not logged in</p>
        
    <?php endif; ?>

<?= $this->endSection() ?>