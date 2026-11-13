<?php
require __DIR__ . '/includes/config.php';
$pageTitle = 'Pricing';
$pageDescription = '1:1 Weekly and Monthly coaching. A custom periodization program, with your coach available three times a week.';
require __DIR__ . '/includes/header.php';

// Prices stay TBD until the business sets them. The two plans match the coaching page.
$tiers = [
    [
        'name' => '1:1 Weekly',
        'price' => 'TBD',
        'per' => 'per month',
        'featured' => false,
        'features' => [
            'Custom periodization program',
            'In-person session once a week',
            'Coach available three times a week',
            'Form feedback from video uploads',
            'Retest every 8 to 12 weeks',
        ],
    ],
    [
        'name' => 'Monthly',
        'price' => 'TBD',
        'per' => 'per month',
        'featured' => true,
        'features' => [
            'Custom periodization program',
            'Monthly review to set the next block',
            'Coach available three times a week',
            'Form feedback from video uploads',
            'Retest every 8 to 12 weeks',
        ],
    ],
];
?>
<section class="page-hero">
    <div class="container">
        <h1>Pricing</h1>
        <p class="lead">Both plans include a custom periodization program and a coach available three times a week for questions and form support from the videos you upload. You train three or four sessions a week, about an hour each. The number is confirmed on your free consult.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="tiers tiers-two">
            <?php foreach ($tiers as $t): ?>
                <div class="tier<?= $t['featured'] ? ' tier-featured' : '' ?>">
                    <?php if ($t['featured']): ?><span class="badge">Most popular</span><?php endif; ?>
                    <h3><?= e($t['name']) ?></h3>
                    <p class="price"><?= e($t['price']) ?> <small><?= e($t['per']) ?></small></p>
                    <ul class="checklist">
                        <?php foreach ($t['features'] as $f): ?><li><?= e($f) ?></li><?php endforeach; ?>
                    </ul>
                    <a class="btn<?= $t['featured'] ? '' : ' btn-ghost' ?>" href="/contact">Get started</a>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="price-note">Every plan starts with a health screen and a movement assessment.</p>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
