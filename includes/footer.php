</main>
<footer class="site-footer">
    <div class="container footer-inner">
        <div>
            <a class="logo" href="/"><img src="/img/logo-footer.png" alt="Live Long Training"></a>
            <p><?= e(SITE_TAGLINE) ?></p>
        </div>
        <nav aria-label="Footer">
            <ul>
                <li><a href="/programs/men-60">Men over 60</a></li>
                <li><a href="/programs/women-45">Women over 45</a></li>
                <li><a href="/programs/women-25">Women 25+</a></li>
                <li><a href="/coaching">Coaching</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="container footer-legal">
        <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Information on this site is general and not medical advice. Check with your doctor before starting a new exercise program.</p>
    </div>
</footer>
<script src="/js/main.js" defer></script>
</body>
</html>
