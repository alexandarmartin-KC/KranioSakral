<?php
require_once __DIR__ . '/api/seo.php';
$_s = dpSEO(
    'priser-booking',
    'Priser & Booking | Kranio Sakral Terapi',
    'Book tid til Kranio-Sakral terapi via telefon, sms eller mail. Se priser, afbudspolitik og praktisk information om klinikken i Gundsømagle nær Roskilde.',
    'https://dpkranio.dk/priser-booking'
);
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($_s['title'], ENT_QUOTES) ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="format-detection" content="telephone=no">
    <meta content="Priser kranio sakral terapi" name="keywords">
    <meta name="description" content="<?= htmlspecialchars($_s['desc'], ENT_QUOTES) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($_s['url'], ENT_QUOTES) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="da_DK">
    <meta property="og:url" content="<?= htmlspecialchars($_s['url'], ENT_QUOTES) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($_s['title'], ENT_QUOTES) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($_s['desc'], ENT_QUOTES) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($_s['og_image_url'], ENT_QUOTES) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="bootstrap/klinik-1.0.0/lib/animate/animate.min.css" rel="stylesheet"><link href="bootstrap/klinik-1.0.0/css/bootstrap.min.css" rel="stylesheet"><link href="bootstrap/klinik-1.0.0/css/style.css" rel="stylesheet"><link href="assets/css/theme-overrides.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s"><div class="row gx-0 d-none d-lg-flex"><div class="col-lg-7 px-5 text-start"><div class="h-100 d-inline-flex align-items-center py-3 me-4"><small class="fa fa-map-marker-alt text-primary me-2"></small><small>Ole Nielsens Vej 7, Gundsømagle, 4000 Roskilde</small></div></div><div class="col-lg-5 px-5 text-end"><div class="h-100 d-inline-flex align-items-center py-3 me-4"><small class="fa fa-phone-alt text-primary me-2"></small><small>22 90 10 25</small></div></div></div></div>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s"><a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5"><h1 class="m-0 text-primary">Kranio Sakral Terapi v/Dorthe Pia</h1></a><button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav ms-auto p-4 p-lg-0"><a href="index.html" class="nav-item nav-link">Forside</a><a href="kranio-sakral-terapi.html" class="nav-item nav-link">Kranio Sakral Terapi</a><a href="priser-booking.html" class="nav-item nav-link active">Priser & Booking</a><a href="om-mig.html" class="nav-item nav-link">Om mig</a></div><a href="tel:+4522901025" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Ring nu<i class="fa fa-arrow-right ms-3"></i></a></div></nav>
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 col-12 p-5 wow fadeIn text-center text-lg-start" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-4">Priser &amp; booking</h1>
                <p class="text-white mb-4">Her finder du information om priser, booking og praktiske forhold i klinikken.</p>
                <a href="tel:+4522901025" class="btn btn-primary rounded-pill py-2 px-4 me-3 d-lg-none">Ring nu</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="therapy-full-card">

                <!-- Book en tid -->
                <div class="therapy-section">
                    <h3 class="therapy-category-title" id="pb-book-title">Book en tid</h3>
                    <p id="pb-book-intro">Når du ønsker at booke en tid til Kranio-Sakral terapi, kan du kontakte mig telefonisk, via sms eller sende en mail. Vi finder sammen et tidspunkt, der passer ind i din hverdag.</p>
                    <p class="card-phone-link"><i class="fa fa-phone-alt text-primary me-2"></i><a id="pb-phone-top-link" href="tel:+4522901025"><span id="pb-phone-top-text">Telefon: 22 90 10 25</span></a></p>
                    <p class="card-phone-link"><i class="fa fa-envelope text-primary me-2"></i><a id="pb-mail-top-link" href="mailto:dp.kranio@gmail.com"><span id="pb-mail-top-text">Mail: dp.kranio@gmail.com</span></a></p>
                    <p id="pb-before-first">Inden første behandling er du velkommen til kort at fortælle, hvad du har af udfordringer.</p>
                    <p id="pb-consultation">Der afsættes god tid til både en indledende samtale og selve behandlingen, så vi kan tage udgangspunkt i din situation.</p>
                    <p id="pb-response">Hvis jeg ikke har mulighed for at svare med det samme, vender jeg tilbage hurtigst muligt.</p>
                </div>

                <!-- Priser -->
                <div class="therapy-section">
                    <h3 class="therapy-category-title" id="pb-prices-title">Priser</h3>
                    <p id="pb-prices-intro">En behandling varer ca. 60 minutter. Tiden inkluderer både samtale og selve behandlingen.</p>
                    <div class="pricing-item">
                        <span class="pricing-label" id="pb-price-single-label">1 behandling (1 time)</span>
                        <span class="pricing-price" id="pb-price-single-value">675 kr.</span>
                    </div>
                    <div class="pricing-item">
                        <span class="pricing-label" id="pb-price-clip-label">Klippekort – 5 behandlinger</span>
                        <span class="pricing-price" id="pb-price-clip-value">3.150 kr.</span>
                    </div>
                    <p class="mt-3" id="pb-price-note">Et klippekort kan være en mulighed, hvis du ønsker et mere sammenhængende forløb. Antallet af behandlinger afhænger altid af den enkelte og af, hvilke symptomer du har.</p>
                    <p class="mb-1"><strong id="pb-payment-title">Betaling:</strong></p>
                    <p id="pb-payment-text">MobilePay eller kontant betaling efter behandlingen.</p>
                </div>

                <!-- Afbudspolitik -->
                <div class="therapy-section">
                    <h3 class="therapy-category-title" id="pb-cancel-title">Afbudspolitik</h3>
                    <p id="pb-cancel-line1">Afbud skal ske senest 24 timer før den aftalte tid.</p>
                    <p id="pb-cancel-line2">Ved senere afbud eller udeblivelse opkræves fuld pris, da tiden er reserveret til dig.</p>
                </div>

                <!-- Praktisk information -->
                <div class="therapy-section">
                    <h3 class="therapy-category-title" id="pb-practical-title">Praktisk information</h3>
                    <p class="mb-1"><strong id="pb-address-title">Adresse:</strong></p>
                    <p class="mb-0" id="pb-address-line1">Ole Nielsens Vej 7, Gundsømagle</p>
                    <p class="mb-3" id="pb-address-line2">4000 Roskilde</p>
                    <p id="pb-practical-text">Klinikken ligger i rolige omgivelser i Gundsømagle nær Roskilde, med gode parkeringsforhold lige uden for døren.</p>
                </div>

                <!-- Ofte stillede spørgsmål -->
                <div class="therapy-section">
                    <h3 class="therapy-category-title" id="pb-faq-title">Ofte stillede spørgsmål</h3>

                    <div class="faq-item">
                        <h4 id="pb-faq1-question">Skal jeg have noget særligt tøj på?</h4>
                        <p id="pb-faq1-answer">Det er en fordel at have blødt og behageligt tøj på, som du kan slappe af i. Behandlingen foregår med let berøring.</p>
                    </div>
                    <div class="faq-item">
                        <h4 id="pb-faq2-question">Hvor mange behandlinger har jeg brug for?</h4>
                        <p id="pb-faq2-answer">Det afhænger af din situation. Nogle har glæde af få behandlinger, mens andre vælger et længere forløb. Vi vurderer det sammen undervejs.</p>
                    </div>
                    <div class="faq-item">
                        <h4 id="pb-faq3-question">Kan Kranio-Sakral terapi bruges sammen med anden behandling?</h4>
                        <p id="pb-faq3-answer">Ja, mange anvender Kranio-Sakral terapi som supplement til anden behandling. Det erstatter ikke lægefaglig udredning, men kan indgå som en del af et samlet forløb.</p>
                    </div>
                </div>

                <!-- Klar til at booke? -->
                <div class="therapy-section therapy-disclaimer">
                    <h3 class="therapy-category-title" id="pb-cta-title">Klar til at booke?</h3>
                    <p id="pb-cta-intro">Ønsker du at bestille en tid eller høre nærmere, er du velkommen til at ringe eller sende en sms.</p>
                    <p class="card-phone-link"><i class="fa fa-phone-alt text-primary me-2"></i><a id="pb-phone-cta-link" href="tel:+4522901025"><span id="pb-phone-cta-text">Telefon: 22 90 10 25</span></a></p>
                    <p class="card-phone-link"><i class="fa fa-envelope text-primary me-2"></i><a id="pb-mail-cta-link" href="mailto:dp.kranio@gmail.com"><span id="pb-mail-cta-text">Mail: dp.kranio@gmail.com</span></a></p>
                    <p id="pb-cta-outro">Jeg ser frem til at høre fra dig.</p>
                    <p class="mb-1" id="pb-signoff">Mvh.</p>
                    <p><strong id="pb-name">Dorthe Pia Rasmussen</strong></p>
                    <div class="text-center d-lg-none mt-4">
                        <a href="tel:+4522901025" class="btn btn-primary rounded-pill py-2 px-4">Book nu<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row g-5"><div class="col-lg-3 col-md-6"><h5 class="text-light mb-4">Klinik</h5><p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ole Nielsens Vej 7, Gundsømagle, 4000 Roskilde</p><p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+4522901025">22 90 10 25</a></p><p class="mb-2">CVR: 37448710</p></div><div class="col-lg-3 col-md-6"><h5 class="text-light mb-4">Sider</h5><a class="btn btn-link" href="index.html">Forside</a><a class="btn btn-link" href="kranio-sakral-terapi.html">Kranio Sakral Terapi</a><a class="btn btn-link" href="priser-booking.html">Priser & Booking</a><a class="btn btn-link" href="om-mig.html">Om mig</a></div><div class="col-lg-3 col-md-6 order-4 order-md-3"><h5 class="text-light mb-4">Juridisk</h5><a class="btn btn-link" href="privatlivspolitik.html">Privatlivspolitik</a><a class="btn btn-link" href="cookiepolitik.html">Cookiepolitik</a></div><div class="col-lg-3 col-md-6 order-3 order-md-4"><h5 class="text-light mb-4">Sociale medier</h5><a class="social-link" href="#" aria-label="Facebook"><img src="billeder/facebook-logo.png" alt="Facebook" class="social-logo"><span>Facebook</span></a><a class="social-link" href="#" aria-label="Instagram"><img src="billeder/instagram-logo.png" alt="Instagram" class="social-logo"><span>Instagram</span></a></div></div></div></div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script src="bootstrap/klinik-1.0.0/lib/wow/wow.min.js"></script><script src="bootstrap/klinik-1.0.0/lib/easing/easing.min.js"></script><script src="bootstrap/klinik-1.0.0/js/main.js"></script>
    <script src="assets/js/cookie-consent.js"></script>
    <script src="assets/js/priser-booking-content.js"></script>
</body>
</html>
