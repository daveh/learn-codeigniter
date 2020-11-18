<?= $this->extend("layouts/default") ?>

<?= $this->section('title') ?><?= lang('Home.title') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title"><?= lang('Home.welcome') ?></h1>

<?= $this->endSection() ?>
