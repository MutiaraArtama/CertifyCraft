<html>

<head>
    <?= $this->include('layouts/head2') ?>
</head>

<body>
    <?= $this->include('layouts/navbar') ?>

    <?= $this->include('layouts/sidebar2') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layouts/footer') ?>

    <?= $this->renderSection('scripts') ?>

    <?= $this->include('layouts/scripts') ?>
</body>

</html>