<?php
// Site-wide settings. Edit these when the business details are final.
declare(strict_types=1);

const SITE_NAME    = 'Live Long Training';
const SITE_TAGLINE = 'Strength coaching for a longer, stronger life';
const SITE_URL     = 'https://www.livelongtraining.com'; // placeholder domain
const CONTACT_TO   = '';  // where contact form emails go; leave empty to only log messages

// Header navigation. Items with children render as a dropdown.
const NAV = [
    [
        'label' => 'Programs',
        'href'  => '/programs',
        'items' => [
            ['href' => '/programs/women-25', 'label' => 'Women 25+'],
            ['href' => '/programs/women-45', 'label' => 'Women 45+'],
            ['href' => '/programs/men-60', 'label' => 'Men 60+'],
        ],
    ],
    [
        'label' => 'Coaching',
        'href'  => '/coaching',
        'items' => [
            ['href' => '/coaching#weekly', 'label' => '1:1 Weekly'],
            ['href' => '/coaching#monthly', 'label' => 'Monthly'],
        ],
    ],
    [
        'label' => 'Pricing',
        'href'  => '/pricing',
    ],
];

/** Escape output for HTML. */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/** True when $path is the page being viewed (or a section of it). */
function is_current(string $path): bool
{
    $uri = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/') ?: '/';
    return $path === '/' ? $uri === '/' : str_starts_with($uri, $path);
}
