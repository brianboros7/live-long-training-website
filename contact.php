<?php
require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/programs.php';

session_start();
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(16));
}

$errors = [];
$sent   = false;
$values = ['name' => '', 'email' => '', 'program' => $_GET['program'] ?? '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($values as $key => $_) {
        $values[$key] = trim((string)($_POST[$key] ?? ''));
    }

    if (!hash_equals($_SESSION['csrf'], (string)($_POST['csrf'] ?? ''))) {
        $errors[] = 'Your session expired. Please try again.';
    }
    if (($_POST['website'] ?? '') !== '') { // honeypot: bots fill hidden fields
        $errors[] = 'Message could not be sent.';
    }
    if ($values['name'] === '') {
        $errors[] = 'Please enter your name.';
    }
    if (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($values['program'] !== '' && !isset(PROGRAMS[$values['program']])) {
        $values['program'] = '';
    }
    if (mb_strlen($values['message']) > 5000) {
        $errors[] = 'Please keep your message under 5,000 characters.';
    }

    if (!$errors) {
        $entry = date('c') . ' | ' . json_encode($values, JSON_UNESCAPED_UNICODE) . PHP_EOL;
        @file_put_contents(__DIR__ . '/storage/messages.log', $entry, FILE_APPEND | LOCK_EX);

        if (CONTACT_TO !== '') {
            $subject = 'New consult request from ' . str_replace(["\r", "\n"], '', $values['name']);
            $body    = "Name: {$values['name']}\nEmail: {$values['email']}\nProgram: {$values['program']}\n\n{$values['message']}";
            @mail(CONTACT_TO, $subject, $body, 'Reply-To: ' . $values['email']);
        }
        $sent = true;
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
    }
}

$pageTitle = 'Contact';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <h1>Book a free consult</h1>
        <p class="lead">Tell us a little about yourself and we'll get back to you within two business days.</p>
    </div>
</section>

<section class="section">
    <div class="container narrow">
        <?php if ($sent): ?>
            <div class="alert alert-success" role="status">Thanks, <?= e($values['name']) ?>! We've got your message and will be in touch soon.</div>
        <?php else: ?>
            <?php if ($errors): ?>
                <div class="alert alert-error" role="alert"><ul><?php foreach ($errors as $err): ?><li><?= e($err) ?></li><?php endforeach; ?></ul></div>
            <?php endif; ?>
            <form class="form" method="post" action="/contact" novalidate>
                <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
                <div class="hp" aria-hidden="true"><label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

                <label for="name">Name</label>
                <input id="name" name="name" type="text" required value="<?= e($values['name']) ?>" autocomplete="name">

                <label for="email">Email</label>
                <input id="email" name="email" type="email" required value="<?= e($values['email']) ?>" autocomplete="email">

                <label for="program">Which program interests you?</label>
                <select id="program" name="program">
                    <option value="">Not sure yet</option>
                    <?php foreach (PROGRAMS as $slug => $p): ?>
                        <option value="<?= e($slug) ?>"<?= $values['program'] === $slug ? ' selected' : '' ?>><?= e($p['title']) ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="message">Your goals (optional)</label>
                <textarea id="message" name="message" rows="5"><?= e($values['message']) ?></textarea>

                <button class="btn" type="submit">Send</button>
            </form>
        <?php endif; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
