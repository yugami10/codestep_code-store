<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title><?= bloginfo('name') ?></title>
    <meta name="description" content="<?= bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= esc_url(get_theme_file_uri('img/favicon.ico')) ?>">

    <?= wp_head() ?>
</head>

<body>
    <header id="header" class="wrapper">
        <h1 class="site-title">
            <a href="<?= esc_url(home_url()) ?>"><img src="<?= esc_url(get_theme_file_uri('img/logo.svg')) ?>" alt="Furniture Design"></a>
        </h1>

        <nav id="navi">
            <ul class="nav-menu">
                <li><a href="<?= esc_url(home_url('products.html')) ?>">PRODUCTS</a></li>
                <li><a href="<?= esc_url(home_url('about')) ?>">ABOUT</a></li>
                <li><a href="<?= esc_url(home_url('company.html')) ?>">COMPANY</a></li>
                <li><a href="mailto:xxxxx@xxx.xxx.com?subject=お問い合わせ">CONTACT</a></li>
            </ul>
        </nav>

        <div class="toggle_btn">
            <span></span>
            <span></span>
        </div>

        <div id="mask"></div>
    </header>
