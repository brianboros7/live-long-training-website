<?php
// /programs lists all programs; /programs/{slug} shows one (see .htaccess).
require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/programs.php';

$slug    = $_GET['slug'] ?? '';
$program = $slug !== '' ? (PROGRAMS[$slug] ?? null) : null;

if ($slug !== '' && $program === null) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

if ($program) {
    $pageTitle       = $program['title'] . ' Strength Coaching';
    $pageDescription = $program['intro'];
} else {
    $pageTitle = 'Programs';
}
require __DIR__ . '/includes/header.php';
?>
<?php if ($program): ?>
<section class="page-hero">
    <div class="container">
        <p class="eyebrow"><?= e($program['title']) ?></p>
        <h1><?= e($program['headline']) ?></h1>
        <p class="lead"><?= e($program['intro']) ?></p>
        <a class="btn" href="/contact?program=<?= e($slug) ?>">Book a free consult</a>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="focus-grid">
            <?php foreach (['strength' => 'Strength', 'wellness' => 'Wellness'] as $key => $label): ?>
                <article class="focus-card">
                    <h2><?= e($label) ?></h2>
                    <p><?= e($program[$key]['lead']) ?></p>
                    <ul class="checklist">
                        <?php foreach ($program[$key]['points'] as $point): ?>
                            <li><?= e($point) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container narrow">
        <h2>Common questions</h2>
        <?php foreach ($program['faq'] as [$q, $a]): ?>
            <details class="faq">
                <summary><?= e($q) ?></summary>
                <p><?= e($a) ?></p>
            </details>
        <?php endforeach; ?>
    </div>
</section>
<?php else: ?>
<section class="page-hero">
    <div class="container">
        <h1>Programs</h1>
        <p class="lead">Three programs, because strength and wellness needs are not the same at 25, 45 and 60. Same standard of evidence. Different work.</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <?php $n = 1; foreach (PROGRAMS as $s => $p): ?>
            <a class="roster-row" href="/programs/<?= e($s) ?>">
                <span class="roster-index"><?= sprintf('%02d', $n++) ?></span>
                <div>
                    <h3><?= e($p['title']) ?></h3>
                    <p><?= e($p['card']) ?></p>
                </div>
                <span class="roster-go" aria-hidden="true">&rarr;</span>
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
