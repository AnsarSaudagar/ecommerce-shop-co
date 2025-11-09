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
    <nav id="navbar">
        <p id="main-logo">SHOP.CO</p>
        <ul>
            <li>Shop<i style="margin-top: 4px; margin-left: 5px;" class="ph ph-caret-down"></i></li>
            <li>On Sale</li>
            <li>New Arrivals</li>
            <li>Brand</li>
        </ul>
        <div id="search-bar">
            <i class="ph ph-magnifying-glass"></i>
            <p>Search For Products...</p>
        </div>
        <ul id="actions">
            <li><i class="ph ph-shopping-cart-simple"></i></li>
            <li><i class="ph ph-user-circle"></i></li>
        </ul>
    </nav>
    <main>
        <?= $content ?? '' ?>
    </main>
</body>

</html>