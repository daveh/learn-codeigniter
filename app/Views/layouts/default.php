<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection("title") ?></title>
</head>
<body>

    <?php if (session()->has('warning')): ?>
        <div class="warning">
            <?= session('warning') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('info')): ?>
        <div class="info">
            <?= session('info') ?>
        </div>
    <?php endif; ?>

    <?= $this->renderSection("content") ?>
    
</body>
</html>