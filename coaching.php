<?php
require __DIR__ . '/includes/config.php';
$pageTitle = 'Coaching';
require __DIR__ . '/includes/header.php';

// Draft tiers from research/04-business-takeaways.md. Prices are placeholders until decided.
$tiers = [
    ['name' => 'Starter Program', 'price' => 'TBD', 'per' => 'one-time', 'features' => ['12-week program', 'Exercise video library', 'Email support'], 'featured' => false],
    ['name' => 'Online Coaching', 'price' => 'TBD', 'per' => 'per month', 'features' => ['Custom program', 'Weekly check-ins', 'Form video feedback', 'Retests every 8–12 weeks'], 'featured' => true],
    ['name' => 'Coaching + Nutrition', 'price' => 'TBD', 'per' => 'per month', 'features' => ['Everything in Online Coaching', 'Protein-focused nutrition plan', 'Priority messaging'], 'featured' => false],
];
?>
<section class="page-hero">
    <div class="container">
        <h1>Coaching options</h1>
        <p class="lead">Every option starts with a health screen and a movement assessment. Pricing is coming soon.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="tiers">
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
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
