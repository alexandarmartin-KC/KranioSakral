<?php
require_once __DIR__ . '/api/seo.php';
$_s = dpSEO(
    'kranio-sakral-terapi',
    'Kranio Sakral Terapi | Roskilde og Gundsømagle',
    'Læs om kranio sakral terapi og hvordan et behandlingsforløb foregår.',
    'https://dpkranio.dk/kranio-sakral-terapi'
);
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($_s['title'], ENT_QUOTES) ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="format-detection" content="telephone=no">
    <meta content="Kranio sakral behandling, Roskilde" name="keywords">
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
    <link href="bootstrap/klinik-1.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/klinik-1.0.0/css/style.css" rel="stylesheet">
    <link href="assets/css/theme-overrides.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4"><small class="fa fa-map-marker-alt text-primary me-2"></small><small>Ole Nielsens Vej 7, Gundsømagle, 4000 Roskilde</small></div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4"><small class="fa fa-phone-alt text-primary me-2"></small><small>22 90 10 25</small></div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5"><h1 class="m-0 text-primary">Kranio Sakral Terapi v/Dorthe Pia</h1></a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Forside</a>
                <a href="kranio-sakral-terapi.html" class="nav-item nav-link active">Kranio Sakral Terapi</a>
                <a href="priser-booking.html" class="nav-item nav-link">Priser & Booking</a>
                <a href="om-mig.html" class="nav-item nav-link">Om mig</a>
            </div>
            <a href="priser-booking.html" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Book tid<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    <div class="container-fluid header bg-primary p-0 mb-5 therapy-hero">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 col-12 p-5 wow fadeIn text-center text-lg-start" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-4" data-content="hero_title">Kranio Sakral Terapi</h1>
                <p class="text-white mb-4" data-content="hero_description">Læs om, hvordan kranio sakral terapi kan støtte din krop – og book en tid i klinikken i Gundsømagle nær Roskilde.</p>
                <a href="priser-booking.html" class="btn btn-primary rounded-pill py-2 px-4 me-3">Book tid</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="therapy-full-card">

                <h2 class="mb-4" data-content="intro_heading">Hvad kan Kranio-Sakral Terapi støtte med?</h2>
                <p>Kroppen reagerer, når den gennem længere tid har været belastet – fysisk eller mentalt. Det kan vise sig som smerter, spændinger, uro eller træthed.</p>
                <p>I min klinik møder jeg ofte mennesker, som oplever, at kroppen har svært ved at finde tilbage til sin naturlige balance.</p>
                <p>Kranio-Sakral Terapi er en manuel behandlingsform, hvor jeg arbejder med kroppens væv og nervesystemets regulering.</p>
                <p>Målet er ikke at &quot;fikse&quot; symptomer, men at støtte kroppen i dens egne processer.</p>
                <p class="mb-5">Mange oplever efter en behandling en fornemmelse af større lethed, mere bevægelighed eller en dybere ro i kroppen.</p>

                <!-- Spændinger & smerter -->
                <div id="spaendinger-smerter" class="therapy-section">
                    <h3 class="therapy-category-title">Spændinger &amp; smerter</h3>

                    <div id="hovedpine" class="therapy-item">
                        <h4>Hovedpine</h4>
                        <p>Spændingsrelateret hovedpine hænger ofte sammen med muskulatur i nakke, skuldre og kæbe. Når området er overbelastet, kan det skabe tryk eller ømhed i hovedet.</p>
                        <p>I behandlingen arbejder jeg med de strukturer, som kan påvirke belastningen i området.</p>
                        <p>Nogle oplever mindre spænding eller større bevægelighed i nakken, hvilket kan have betydning for deres samlede oplevelse af hovedpine.</p>
                    </div>
                    <div id="nakke-skuldersmerter" class="therapy-item">
                        <h4>Nakke- &amp; skuldersmerter</h4>
                        <p>Nakke og skuldre reagerer hurtigt på både fysisk og mental belastning. Spændinger her kan påvirke både bevægelse og energiniveau.</p>
                        <p>Jeg arbejder med samspillet mellem muskler, led og bindevæv i området. Mange oplever efterfølgende en følelse af mindre tyngde og større frihed i bevægelserne.</p>
                    </div>
                    <div id="ryg-hoftesmerter" class="therapy-item">
                        <h4>Ryg- &amp; hoftesmerter</h4>
                        <p>Ryg og hofter bærer en stor del af kroppens vægt og daglige belastning. Når spændinger eller ubalance opstår her, kan det påvirke holdning og bevægemønstre.</p>
                        <p>Behandlingen tager udgangspunkt i helheden omkring bækken og rygsøjle. Nogle oplever øget smidighed eller en mere stabil fornemmelse i kroppen.</p>
                    </div>
                    <div id="kaebespaendinger" class="therapy-item">
                        <h4>Kæbespændinger</h4>
                        <p>Kæben er tæt forbundet med både nakke og kranie.</p>
                        <p>Tandpres og spændinger kan give ubehag i hoved, ansigt eller nakke. Jeg inddrager kæbeområdet som en del af en samlet tilgang.</p>
                        <p>Afspænding her kan for nogle give en oplevelse af mere rummelighed i den øvre del af kroppen.</p>
                    </div>
                </div>

                <!-- Nervesystem & regulering -->
                <div id="nervesystem-regulering" class="therapy-section">
                    <h3 class="therapy-category-title">Nervesystem &amp; regulering</h3>

                    <div id="stress" class="therapy-item">
                        <h4>Stress</h4>
                        <p>Ved længerevarende stress kan kroppen være i konstant beredskab. Det kan påvirke søvn, koncentration og evnen til at finde hvile.</p>
                        <p>I kranio sakral terapi arbejder jeg med nervesystemets regulering og kroppens reaktioner på belastning. Mange oplever en dybere afspænding under og efter behandlingen.</p>
                    </div>
                    <div id="angst-depression" class="therapy-item">
                        <h4>Angst &amp; depression</h4>
                        <p>Psykisk belastning kan også mærkes fysisk som spænding, uro eller indre rastløshed.</p>
                        <p>Behandlingen kan indgå som et kropsligt supplement med fokus på regulering og stabilitet. Det erstatter ikke lægefaglig eller psykologisk behandling, men kan for nogle bidrage til en øget kropslig forankring.</p>
                    </div>
                    <div id="svimmelhed" class="therapy-item">
                        <h4>Svimmelhed</h4>
                        <p>Når spændinger i nakke og kranie spiller ind, kan arbejdet med disse strukturer være en del af en helhedsorienteret tilgang.</p>
                        <p>Nogle oplever, at større bevægelighed og mindre spænding kan give en oplevelse af øget stabilitet.</p>
                        <p>Svimmelhed kan have mange årsager og bør altid vurderes lægefagligt.</p>
                    </div>
                    <div id="tinnitus" class="therapy-item">
                        <h4>Tinnitus</h4>
                        <p>Tinnitus er en kompleks tilstand med mange mulige årsager. Ved samtidig spænding i kæbe eller nakke kan behandling af vævet i området indgå som en del af en samlet indsats.</p>
                        <p>Nogle oplever, at reduktion af spændinger kan påvirke den samlede kropslige belastning.</p>
                    </div>
                </div>

                <!-- Efter traume -->
                <div id="efter-belastning-livsfaser" class="therapy-section">
                    <h3 class="therapy-category-title">Efter traume</h3>

                    <div id="hjernerystelse" class="therapy-item">
                        <h4>Hjernerystelse</h4>
                        <p>Efter en hjernerystelse kan nervesystemet være særligt følsomt.</p>
                        <p>Når der foreligger lægefaglig vurdering, kan Kranio-Sakral Terapi anvendes som en nænsom tilgang med fokus på regulering og tempo.</p>
                        <p>Behandlingen tilpasses individuelt og tager hensyn til kroppens aktuelle reaktioner.</p>
                    </div>
                    <div id="piskesmaeld" class="therapy-item">
                        <h4>Piskesmæld</h4>
                        <p>Ved vedvarende gener efter piskesmæld kan kroppen fastholde spændinger i nakke og ryg.</p>
                        <p>Jeg arbejder med vævet i området ud fra kroppens aktuelle niveau. Mange oplever, at en gradvis afspænding kan bidrage til en større bevægelighed over tid.</p>
                    </div>
                    <div id="migraene" class="therapy-item">
                        <h4>Migræne</h4>
                        <p>For nogle kan spændinger i nakke, skuldre og omkring kraniet være en medvirkende belastningsfaktor i perioder mellem anfald.</p>
                        <p>I behandlingen arbejdes der med de strukturer, som kan påvirke spændingsniveau og regulering i nervesystemet. Fokus er ikke på at behandle selve migrænen, men på at støtte kroppen i at finde mere afspænding og stabilitet.</p>
                        <p>Migræne er en neurologisk tilstand, som altid bør vurderes og følges lægefagligt.</p>
                    </div>
                </div>

                <!-- Supplerende behandlinger -->
                <div class="therapy-section">
                    <p>Herudover laver jeg også behandlinger, der hedder Ret ryg og nakke og Organmassage, som understøtter Kranio-Sakral Terapi.</p>
                </div>

                <!-- En vigtig afgrænsning -->
                <div class="therapy-section therapy-disclaimer">
                    <h4 data-content="disclaimer_heading">En vigtig afgrænsning</h4>
                    <p data-content="disclaimer_text">Kranio-Sakral Terapi erstatter ikke lægefaglig udredning eller behandling. For mange fungerer det som et supplement, hvor kroppen får mulighed for at arbejde i et roligere tempo.</p>
                </div>

                <div class="text-center mt-5">
                    <a href="priser-booking.html" class="btn btn-primary rounded-pill py-2 px-4">Book tid<i class="fa fa-arrow-right ms-3"></i></a>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5"><div class="row g-5"><div class="col-lg-3 col-md-6"><h5 class="text-light mb-4">Klinik</h5><p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ole Nielsens Vej 7, Gundsømagle, 4000 Roskilde</p><p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+4522901025">22 90 10 25</a></p></div><div class="col-lg-3 col-md-6"><h5 class="text-light mb-4">Sider</h5><a class="btn btn-link" href="index.html">Forside</a><a class="btn btn-link" href="kranio-sakral-terapi.html">Kranio Sakral Terapi</a><a class="btn btn-link" href="priser-booking.html">Priser & Booking</a><a class="btn btn-link" href="om-mig.html">Om mig</a></div><div class="col-lg-3 col-md-6 order-4 order-md-3"><h5 class="text-light mb-4">Juridisk</h5><a class="btn btn-link" href="privatlivspolitik.html">Privatlivspolitik</a><a class="btn btn-link" href="cookiepolitik.html">Cookiepolitik</a></div><div class="col-lg-3 col-md-6 order-3 order-md-4"><h5 class="text-light mb-4">Sociale medier</h5><a class="social-link" href="#" aria-label="Facebook"><img src="billeder/facebook-logo.png" alt="Facebook" class="social-logo"><span>Facebook</span></a><a class="social-link" href="#" aria-label="Instagram"><img src="billeder/instagram-logo.png" alt="Instagram" class="social-logo"><span>Instagram</span></a></div></div></div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary" style="padding: 6px 0;">
        <div class="container text-center">
            <small>&copy; 2026 Kranio Sakral Terapi v/Dorthe Pia · CVR: 37448710 · All rights reserved.</small>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/lib/wow/wow.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/lib/easing/easing.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/lib/waypoints/waypoints.min.js"></script>
    <script src="bootstrap/klinik-1.0.0/js/main.js"></script>
    <script src="assets/js/cookie-consent.js"></script>
    <script src="assets/js/content-loader.js" data-page="kranio-sakral-terapi"></script>
</body>
</html>