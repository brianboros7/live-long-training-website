<?php
// Shared page header. Set $pageTitle and $pageDescription before including.
$pageTitle       = isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME . ' | ' . SITE_TAGLINE;
$pageDescription = $pageDescription ?? 'Evidence-based strength coaching for women 25+, women over 45 and men over 60.';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,500;0,9..144,600;1,9..144,500&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <div class="container header-inner">
        <a class="logo" href="/"><img src="/img/logo.png" alt="Live Long Training"></a>
        <button class="nav-toggle" aria-expanded="false" aria-controls="site-nav">Menu</button>
        <nav id="site-nav" class="site-nav" aria-label="Main">
            <ul>
                <?php foreach (NAV as $item): ?>
                    <?php $menuId = 'menu-' . trim($item['href'], '/'); ?>
                    <li class="nav-item">
                        <a href="<?= e($item['href']) ?>"<?= is_current($item['href']) ? ' aria-current="page"' : '' ?>><?= e($item['label']) ?></a>
                        <?php if (!empty($item['items'])): ?>
                            <button class="submenu-toggle" type="button" aria-expanded="false" aria-controls="<?= e($menuId) ?>" aria-label="Open <?= e($item['label']) ?> menu"></button>
                            <ul class="nav-sub" id="<?= e($menuId) ?>">
                                <?php foreach ($item['items'] as $sub): ?>
                                    <li><a href="<?= e($sub['href']) ?>"<?= is_current($sub['href']) ? ' aria-current="page"' : '' ?>><?= e($sub['label']) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a class="btn btn-small" href="/contact">Free consult</a>
        </nav>
    </div>
</header>
<main id="main">
