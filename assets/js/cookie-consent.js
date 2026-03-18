(function () {
  // Check if consent already given
  if (localStorage.getItem('cookie_consent')) return;

  // Build banner
  var banner = document.createElement('div');
  banner.id = 'cookie-banner';
  banner.innerHTML =
    '<div class="cookie-banner-inner">' +
      '<p class="cookie-banner-text">Vi bruger cookies for at sikre, at hjemmesiden fungerer korrekt. ' +
      '<a href="cookiepolitik.html">Læs vores cookiepolitik</a></p>' +
      '<div class="cookie-banner-buttons">' +
        '<button id="cookie-accept-all" class="btn btn-primary rounded-pill cookie-btn">Acceptér alle</button>' +
        '<button id="cookie-accept-necessary" class="btn btn-outline-primary rounded-pill cookie-btn">Kun nødvendige</button>' +
      '</div>' +
    '</div>';

  document.body.appendChild(banner);

  // Fade in
  requestAnimationFrame(function () {
    banner.classList.add('cookie-banner-visible');
  });

  function closeBanner(consent) {
    localStorage.setItem('cookie_consent', consent);
    banner.classList.remove('cookie-banner-visible');
    setTimeout(function () {
      banner.remove();
    }, 350);
  }

  document.getElementById('cookie-accept-all').addEventListener('click', function () {
    closeBanner('all');
  });

  document.getElementById('cookie-accept-necessary').addEventListener('click', function () {
    closeBanner('necessary');
  });
})();
