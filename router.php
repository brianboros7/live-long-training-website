<?php
// Local dev router for `php -S localhost:8000 router.php` (mimics .htaccess clean URLs).
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (preg_match('#^/(includes|storage)(/|$)#', $path)) {
    http_response_code(403);
    exit('Forbidden');
}
if ($path !== '/' && is_file(__DIR__ . $path) && !str_ends_with($path, '.php')) {
    return false; // serve static files (css, js, images)
}
if (preg_match('#^/programs/women-50/?$#', $path)) {
    header('Location: /programs/women-45', true, 301);
    return true;
}
if (preg_match('#^/programs/([a-z0-9-]+)/?$#', $path, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/programs.php';
    return true;
}

$page = trim($path, '/') ?: 'index';
$file = __DIR__ . '/' . preg_replace('/\.php$/', '', $page) . '.php';
if (preg_match('/^[a-z0-9-]+$/', basename($file, '.php')) && basename($file) !== 'router.php' && is_file($file)) {
    require $file;
    return true;
}
require __DIR__ . '/404.php';
