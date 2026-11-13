<?php
require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/programs.php';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow">Strength coaching for every decade</p>
        <h1>Train strong now.<span>Live long and well.</span></h1>
        <p class="lead">Three or four sessions a week, about an hour each. Coached for men over 60, women over 45, and women 25+, because the strength work and the wellness needs are not the same.</p>
        <div class="hero-actions">
            <a class="btn" href="/contact">Book a free consult</a>
            <a class="btn btn-ghost" href="/programs">See the three programs</a>
        </div>
    </div>
    <aside class="hero-spec">
        <p class="spec-kicker">The dose</p>
        <p class="spec-figure">3–4×</p>
        <p>sessions a week, about an hour each.</p>
        <ul>
            <?php foreach (PROGRAMS as $slug => $p): ?>
                <li><a href="/programs/<?= e($slug) ?>"><?= e($p['title']) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</section>

<section class="section">
    <div class="container">
        <div class="roster-head">
            <h2>Who we coach</h2>
            <p>Pick the decade you're in. Each program has its own page.</p>
        </div>
        <?php $n = 1; foreach (PROGRAMS as $slug => $p): ?>
            <a class="roster-row" href="/programs/<?= e($slug) ?>">
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

<section class="section section-alt">
    <div class="container">
        <h2 class="section-title">How it works</h2>
        <ol class="steps">
            <li><span class="step-num">01</span><h3>Talk</h3><p>A free call about your goals, history and schedule.</p></li>
            <li><span class="step-num">02</span><h3>Assess</h3><p>A health screen and simple tests of strength, balance and movement.</p></li>
            <li><span class="step-num">03</span><h3>Train</h3><p>A program built for you, with coaching and form feedback every week.</p></li>
            <li><span class="step-num">04</span><h3>Retest</h3><p>Every 8 to 12 weeks we measure again so you can see what's changed.</p></li>
        </ol>
    </div>
</section>

<section class="evidence">
    <div class="evidence-main">
        <strong>10–17%</strong>
        <p>lower risk of early death linked to regular muscle-strengthening activity, in a large review of long-term studies.</p>
        <p class="note">A finding about living longer. It is not our training plan. We'll link the studies on the blog.</p>
    </div>
    <div class="evidence-side">
        <strong>3–4×</strong>
        <p>a week, about an hour each. That is the dose we coach, for strength, bone and the work of daily life.</p>
    </div>
</section>

<section class="cta">
    <div>
        <h2>Ready to get stronger?</h2>
        <p>Start with a free, no-pressure conversation.</p>
    </div>
    <a class="btn btn-light" href="/contact">Book a free consult</a>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
