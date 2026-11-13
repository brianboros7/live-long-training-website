<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$pageTitle = 'Page not found';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <h1>Page not found</h1>
        <p class="lead">That page doesn't exist. Try the <a href="/">home page</a> or <a href="/programs">our programs</a>.</p>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
