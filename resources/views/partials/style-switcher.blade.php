<div class="style-switcher">
    <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
    <h3>Layout Options</h3>
    <div class="language-feature">
        <button class="ltr-switcher" onclick="translateLanguage('en|en')">ENG</button><!-- /.ltr-switcher -->
        <button class="rtl-switcher" onclick="translateLanguage('en|si')">SIN</button><!-- /.rtl-switcher -->
    </div><!-- /.language-feature -->
    <div class="layout-feature" id="colorMode">
        <a href="#" class="dark-switcher" data-theme="agriox-dark">Dark</a>
        <a href="#" class="light-switcher" data-theme="agriox-light">Light</a>
        <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
    </div><!-- /.language-feature -->
</div>


<script type="text/javascript">
    function translateLanguage(lang) {
        var googleTranslateElement = document.querySelector('.goog-te-combo');
        if (googleTranslateElement) {
            googleTranslateElement.value = lang;
            googleTranslateElement.dispatchEvent(new Event('change'));
        }
    }
</script>
