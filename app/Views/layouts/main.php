<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/satoshi-fonts.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/navbar.css'); ?>">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <title>Shop.co</title>
</head>

<body>
    
    <?= $this->include('partials/navbar') ?>
    <main>
        <?= $content ?? '' ?>
    </main>
</body>

</html>