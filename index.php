<?php
require_once __DIR__ . '/api/seo.php';
$_s = dpSEO(
    'index',
    'Kranio Sakral Terapi Roskilde | Kranio Sakral Terapi v/Dorthe Pia',
    'Kranio Sakral Terapi i Gundsømagle nær Roskilde. Rolig og professionel behandling med fokus på tryghed.',
    'https://dpkranio.dk/'
);
?>
<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($_s['title'], ENT_QUOTES) ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="format-detection" content="telephone=no">
    <meta content="Kranio Sakral Terapi Roskilde, Kranio sakral behandling" name="keywords">
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="bootstrap/klinik-1.0.0/lib/animate/animate.min.css" rel="stylesheet">
    <link href="bootstrap/klinik-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="bootstrap/klinik-1.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/klinik-1.0.0/css/style.css" rel="stylesheet">
    <link href="assets/css/theme-overrides.css" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
    </div>

    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Ole Nielsens Vej 7, Gundsømagle, 4000 Roskilde</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>22 90 10 25</small>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary">Kranio Sakral Terapi v/Dorthe Pia</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Forside</a>
                <a href="kranio-sakral-terapi.html" class="nav-item nav-link">Kranio Sakral Terapi</a>
                <a href="priser-booking.html" class="nav-item nav-link">Priser & Booking</a>
                <a href="om-mig.html" class="nav-item nav-link">Om mig</a>
            </div>
            <a href="priser-booking.html" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Book tid<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 col-12 p-5 wow fadeIn text-center text-lg-start" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-4" data-content="hero_title">Kranio Sakral Terapi i Gundsømagle nær Roskilde</h1>
                <p class="text-white mb-4" data-content="hero_description">Rolig og professionel behandling med fokus på nærvær, tryghed og individuel tilpasning.</p>
                <a href="priser-booking.html" class="btn btn-primary rounded-pill py-2 px-4 me-3">Book tid</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <p class="welcome-script" data-content="welcome_text">Velkommen</p>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="service-item bg-light rounded h-100 p-5 info-card">
                        <h4 class="mb-3" data-content="main_heading">Har du spændinger eller smerter?</h4>
                        <p>Så kan Kranio-Sakral Terapi være relevant for dig, der oplever spændinger, stress eller indre uro og som ønsker en blid tilgang til kroppen.</p>
                        <p>Mange oplever, at behandlingen kan støtte dem i perioder med fysisk eller mental belastning, hvor kroppen føles på overarbejde. Behandlingen genopretter balancen i kroppen.</p>
                        <p>Du kan have glæde af kranio-sakral behandling i forbindelse med nakke- og skulderspændinger, eller hvis du et sted i livet, hvor du har brug for mere ro i kroppen.</p>
                        <p>Behandlingen kan tilpasses helt efter behov og det er vigtigt at understrege, at Kranio-Sakral Terapi ikke erstatter lægefaglig udredning eller behandling, men kan bruges som et supplement for dig, der ønsker en nænsom støtte.</p>

                        <h4 class="mb-3 mt-4" data-content="therapy_heading">Hvad er Kranio-Sakral Terapi?</h4>
                        <p>Kranio-Sakral Terapi er en blid manuel behandlingsform med fokus på centralnervesystemet, ro og kropslig balance. Behandlingen foregår med lette, rolige berøringer og i et tempo, hvor kroppen får plads til at reagere uden pres.</p>
                        <p>Mange beskriver det som en nænsom måde at skabe mere afspænding og nærvær i kroppen.</p>
                        <p>I klinikken er rammerne rolige og uforstyrrede, og der er tid til at lande.</p>
                        <p>Kranio-Sakral behandling tager udgangspunkt i sammenhængen mellem kranie, rygsøjle og korsben – og den måde kroppen kan holde på spændinger, når den har været belastet over tid eller der er sket et traume. Formålet er ikke at “fikse” noget hurtigt, men at støtte kroppen i at finde tilbage til mere ro og balance.</p>

                        <h4 class="mb-3 mt-4" data-content="approach_heading">Tryg og nærværende tilgang</h4>
                        <p class="mb-0" data-content="approach_text">I klinikken bliver du mødt i et roligt tempo med plads til spørgsmål og forventningsafstemning. Behandlingen starter typisk med en kort samtale, så vi kan tage udgangspunkt i det, du kommer med. Jeg lægger vægt på tryghed, nærvær og respekt for kroppens grænser. Behandlingen tilpasses dig – og der er fokus på at skabe et roligt rum, hvor du kan give slip på spændinger og finde mere balance i kroppen, i det omfang det giver mening for dig.</p>

                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <a href="priser-booking.html" class="btn btn-primary rounded-pill py-2 px-4">Book tid</a>
                            <a href="kranio-sakral-terapi.html" class="btn btn-outline-primary rounded-pill py-2 px-4">Læs mere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h2 class="mb-3" data-content="help_title">Områder jeg ofte arbejder med</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="help-group-card h-100">
                        <h4 class="help-group-title">Spændinger &amp; smerter</h4>
                        <ul class="help-group-list">
                            <li><a href="kranio-sakral-terapi.html#hovedpine">Hovedpine</a></li>
                            <li><a href="kranio-sakral-terapi.html#nakke-skuldersmerter">Nakke- &amp; skuldersmerter</a></li>
                            <li><a href="kranio-sakral-terapi.html#ryg-hoftesmerter">Ryg- &amp; hoftesmerter</a></li>
                            <li><a href="kranio-sakral-terapi.html#kaebespaendinger">Kæbespændinger</a></li>
                        </ul>
                        <a class="btn btn-primary rounded-pill py-2 px-4 mt-3" href="kranio-sakral-terapi.html#spaendinger-smerter">Læs mere</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="help-group-card h-100">
                        <h4 class="help-group-title">Nervesystem &amp; regulering</h4>
                        <ul class="help-group-list">
                            <li><a href="kranio-sakral-terapi.html#stress">Stress</a></li>
                            <li><a href="kranio-sakral-terapi.html#angst-depression">Angst &amp; depression</a></li>
                            <li><a href="kranio-sakral-terapi.html#svimmelhed">Svimmelhed</a></li>
                            <li><a href="kranio-sakral-terapi.html#tinnitus">Tinnitus</a></li>
                        </ul>
                        <a class="btn btn-primary rounded-pill py-2 px-4 mt-3" href="kranio-sakral-terapi.html#nervesystem-regulering">Læs mere</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="help-group-card h-100">
                        <h4 class="help-group-title">Efter traume</h4>
                        <ul class="help-group-list">
                            <li><a href="kranio-sakral-terapi.html#hjernerystelse">Hjernerystelse</a></li>
                            <li><a href="kranio-sakral-terapi.html#piskesmaeld">Piskesmæld</a></li>
                            <li><a href="kranio-sakral-terapi.html#migraene">Migræne</a></li>
                        </ul>
                        <a class="btn btn-primary rounded-pill py-2 px-4 mt-3" href="kranio-sakral-terapi.html#efter-belastning-livsfaser">Læs mere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h2 class="mb-3">Klienternes oplevelser</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text rounded text-center p-4 bg-light">
                        <p>"Jeg følte mig mødt med ro og nærvær fra første minut. Behandlingen hjalp mig med at give slip på spændinger i nakke og skuldre."</p>
                        <h5 class="mb-1">Mette, 42 år</h5>
                        <span class="fst-italic">Mock anmeldelse</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text rounded text-center p-4 bg-light">
                        <p>"Et trygt sted med en meget blid tilgang. Jeg gik derfra med en følelse af mere balance i kroppen."</p>
                        <h5 class="mb-1">Jonas, 36 år</h5>
                        <span class="fst-italic">Mock anmeldelse</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text rounded text-center p-4 bg-light">
                        <p>"Tempoet var roligt, og der var god tid til at lande. Det gjorde en stor forskel for min indre uro."</p>
                        <h5 class="mb-1">Lene, 51 år</h5>
                        <span class="fst-italic">Mock anmeldelse</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text rounded text-center p-4 bg-light">
                        <p>"Meget professionel og omsorgsfuld behandling. Jeg oplevede markant mere afspænding efter få sessioner."</p>
                        <h5 class="mb-1">Camilla, 29 år</h5>
                        <span class="fst-italic">Mock anmeldelse</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light footer mt-5 pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Klinik</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ole Nielsens Vej 7, Gundsømagle, 4000 Roskilde</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+4522901025">22 90 10 25</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Sider</h5>
                    <a class="btn btn-link" href="index.html">Forside</a>
                    <a class="btn btn-link" href="kranio-sakral-terapi.html">Kranio Sakral Terapi</a>
                    <a class="btn btn-link" href="priser-booking.html">Priser & Booking</a>
                    <a class="btn btn-link" href="om-mig.html">Om mig</a>
                </div>
                <div class="col-lg-3 col-md-6 order-4 order-md-3">
                    <h5 class="text-light mb-4">Juridisk</h5>
                    <a class="btn btn-link" href="privatlivspolitik.html">Privatlivspolitik</a>
                    <a class="btn btn-link" href="cookiepolitik.html">Cookiepolitik</a>
                </div>
                <div class="col-lg-3 col-md-6 order-3 order-md-4">
                    <h5 class="text-light mb-4">Sociale medier</h5>
                    <a class="social-link" href="#" aria-label="Facebook">
                        <img src="billeder/facebook-logo.png" alt="Facebook" class="social-logo">
                        <span>Facebook</span>
                    </a>
                    <a class="social-link" href="#" aria-label="Instagram">
                        <img src="billeder/instagram-logo.png" alt="Instagram" class="social-logo">
                        <span>Instagram</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary" style="padding: 6px 0;">
        <div class="container text-center">
            <small>&copy; <?= date('Y') ?> Kranio Sakral Terapi v/Dorthe Pia · CVR: 37448710 · All rights reserved.</small>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/lib/wow/wow.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/lib/easing/easing.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/lib/waypoints/waypoints.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/lib/counterup/counterup.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/js/main.js"></script>
    <script src="assets/js/cookie-consent.js"></script>
    <script src="assets/js/content-loader.js" data-page="index"></script>
</body>

</html>
