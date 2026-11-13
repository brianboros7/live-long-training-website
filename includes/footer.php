</main>
<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-brand">
            <a class="logo" href="/"><img src="/img/logo-footer.png" alt="Live Long Training"></a>
            <p><?= e(SITE_TAGLINE) ?></p>
        </div>
        <div class="footer-cols">
            <nav aria-label="Programs">
                <h2>Programs</h2>
                <ul>
                    <li><a href="/programs/women-25">Women 25+</a></li>
                    <li><a href="/programs/women-45">Women 45+</a></li>
                    <li><a href="/programs/men-60">Men 60+</a></li>
                </ul>
            </nav>
            <nav aria-label="Coaching">
                <h2>Coaching</h2>
                <ul>
                    <li><a href="/coaching#weekly">1:1 Weekly</a></li>
                    <li><a href="/coaching#monthly">Monthly</a></li>
                    <li><a href="/pricing">Pricing</a></li>
                </ul>
            </nav>
            <nav aria-label="Company">
                <h2>Company</h2>
                <ul>
                    <li><a href="/about">About</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container footer-legal">
        <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Information on this site is general and not medical advice. Check with your doctor before starting a new exercise program.</p>
        <a href="/contact">Contact</a>
    </div>
</footer>
<script src="/js/main.js" defer></script>
</body>
</html>
