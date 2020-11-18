<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Password reset<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Password reset</h1>

<p>Password reset successful.</p>

<p><a href="<?= site_url("/login") ?>">Login</a></p>

<?= $this->endSection() ?>