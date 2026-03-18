/**
 * Generic content loader – henter indhold fra PHP-API og indsætter i elementer
 * med data-content="section_key" attributten.
 *
 * Brug: <script src="/assets/js/content-loader.js" data-page="index"></script>
 *
 * Elementer med data-content="hero_title" får deres textContent opdateret.
 * Elementer med data-content-html="main_text" får paragraf-formatering (tom linje = <p>).
 */
(function () {
    'use strict';

    var script = document.currentScript;
    var page = script && script.getAttribute('data-page');
    if (!page) return;

    fetch('/api/content.php?page=' + encodeURIComponent(page))
        .then(function (res) { return res.ok ? res.json() : Promise.reject(); })
        .then(function (data) {
            if (!data || typeof data !== 'object') return;

            // Enkelt tekst: data-content="key"
            var textEls = document.querySelectorAll('[data-content]');
            for (var i = 0; i < textEls.length; i++) {
                var key = textEls[i].getAttribute('data-content');
                if (data[key] !== undefined && data[key] !== '') {
                    textEls[i].textContent = data[key];
                }
            }

            // Multi-paragraf: data-content-html="key"  (tom linje = nyt <p>)
            var htmlEls = document.querySelectorAll('[data-content-html]');
            for (var j = 0; j < htmlEls.length; j++) {
                var hKey = htmlEls[j].getAttribute('data-content-html');
                if (data[hKey] !== undefined && data[hKey] !== '') {
                    var paragraphs = data[hKey].split(/\n\s*\n/);
                    var html = '';
                    for (var p = 0; p < paragraphs.length; p++) {
                        var text = paragraphs[p].trim();
                        if (text) {
                            html += '<p>' + escapeHtml(text) + '</p>';
                        }
                    }
                    htmlEls[j].innerHTML = html;
                }
            }
        })
        .catch(function () {
            // Stille fejl – behold HTML-fallback
        });

    function escapeHtml(str) {
        var d = document.createElement('div');
        d.textContent = str;
        return d.innerHTML;
    }
})();
