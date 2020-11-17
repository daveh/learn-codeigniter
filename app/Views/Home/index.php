<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Welcome</h1>

    <a href="<?= site_url("/signup") ?>">Sign up</a>
    
    <?php if (session()->has('user_id')): ?>
        
        <p>User is logged in</p>
        
        <p>Hello <?= esc(current_user()->name) ?></p>
        
        <a href="<?= site_url("/logout") ?>">Log out</a>
        
    <?php else: ?>
        
        <p>User is not logged in</p>
        
        <a href="<?= site_url("/login") ?>">Log in</a>
        
    <?php endif; ?>

<?= $this->endSection() ?>