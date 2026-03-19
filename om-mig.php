<?php
require_once __DIR__ . '/api/seo.php';
$_s = dpSEO(
    'om-mig',
    'Om mig | Kranio Sakral Terapi',
    'Lær Dorthe Pia at kende – og læs om hendes tilgang til kranio sakral terapi i Gundsømagle nær Roskilde.',
    'https://dpkranio.dk/om-mig'
);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<title><?= htmlspecialchars($_s['title'], ENT_QUOTES) ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="format-detection" content="telephone=no">
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
	<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s"><a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5"><h1 class="m-0 text-primary">Kranio Sakral Terapi v/Dorthe Pia</h1></a><button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarCollapse"><div class="navbar-nav ms-auto p-4 p-lg-0"><a href="index.html" class="nav-item nav-link">Forside</a><a href="kranio-sakral-terapi.html" class="nav-item nav-link">Kranio Sakral Terapi</a><a href="priser-booking.html" class="nav-item nav-link">Priser & Booking</a><a href="om-mig.html" class="nav-item nav-link active">Om mig</a></div></div></nav>
	<div class="container-fluid header bg-primary p-0 mb-5">
		<div class="row g-0 align-items-center">
			<div class="col-lg-6 col-12 p-5 wow fadeIn text-center text-lg-start" data-wow-delay="0.1s">
				<h1 class="display-4 text-white mb-4" data-content="hero_title">Om mig</h1>
				<p class="text-white mb-4" data-content="hero_description">Lær mig at kende – og læs om min tilgang til kranio sakral terapi.</p>
				<a href="priser-booking.html" class="btn btn-primary rounded-pill py-2 px-4 me-3 d-none d-lg-inline-block">Book tid</a>
				<a href="tel:+4522901025" class="btn btn-primary rounded-pill py-2 px-4 me-3 d-lg-none">Ring nu</a>
			</div>
		</div>
	</div>

	<div class="container-xxl py-5">
		<div class="container">
			<div class="therapy-full-card">

				<div class="about-photo-wrapper">
					<img src="billeder/Dorthe_Pia_Kranio_Sekral_Terapi_Roskilde.png" alt="Dorthe Pia – Kranio Sakral Terapi" class="about-photo">
				</div>

				<p class="text-muted mb-2" style="font-size: 0.95rem;">Kranio-Sakral Terapi V/Dorthe Pia</p>
				<h2 class="mb-4" data-content="main_heading">Min vej til Kranio-Sakral terapi</h2>

				<p>Jeg hedder Dorthe Pia Rasmussen, er 59 år og arbejder som Kranio-Sakral Terapeut i Gundsømagle nær Roskilde.</p>

				<p>For mig handler arbejdet med kroppen om mere end behandling – det handler om at møde mennesket med opmærksomhed, respekt og ro.</p>

				<p>Min interesse for Kranio-Sakral Terapi udspringer af en fascination af kroppens evne til at regulere og balancere sig selv, når den får de rette betingelser. Jeg oplever, hvordan spændinger og belastninger kan sætte sig i kroppen over tid – og hvordan nænsomt arbejde kan støtte kroppen i at give slip og genfinde større stabilitet.</p>

				<div class="therapy-section">
					<h3 class="therapy-category-title" data-content="background_title">Faglig baggrund</h3>
					<p>Jeg er Eksamineret Kranio-Sakral Terapeut fra KST Akademiet V/Trine Rosenberg i Silkeborg, hvilket har givet mig en grundig forståelse for arbejdet med kranie, rygsøjle og korsben – og for samspillet mellem bindevæv og nervesystem.</p>
					<p>Jeg er særligt optaget af, hvordan kroppen reagerer på både fysisk og mental belastning, og hvordan regulering kan støttes gennem en nænsom og opmærksom tilgang.</p>
					<p>Derudover er jeg uddannet i Ret ryg og nakke, Organmassage og bindevævs løsning. Denne viden bidrager til en helhedsorienteret forståelse af kroppen, som jeg tager med mig ind i mine behandlinger.</p>
				</div>

				<div class="therapy-section">
					<h3 class="therapy-category-title" data-content="treatments_title">Mine behandlinger</h3>
					<p>I behandlingen arbejder jeg i et roligt tempo med respekt for kroppens signaler. Der findes sjældent hurtige løsninger, og derfor lægger jeg vægt på en tilgang, hvor kroppen får mulighed for at reagere uden pres.</p>
					<p>Det er vigtigt for mig at skabe et trygt og respektfuldt rum. Mange kommer med en krop, der har været under pres gennem længere tid. Her er der brug for opmærksomhed, nærvær og individuel tilgang.</p>
					<p>Jeg oplever ofte, at når kroppen får ro, kan der opstå større kropslig bevidsthed og en følelse af bedre sammenhæng.</p>
				</div>

				<div class="therapy-section">
					<h3 class="therapy-category-title" data-content="clinic_title">Klinikken i Gundsømagle</h3>
					<p>Min klinik ligger i rolige omgivelser i Gundsømagle ved Roskilde. Her tager jeg imod klienter i trygge rammer.</p>
					<p>Du er altid velkommen til at kontakte mig, hvis du ønsker at høre mere om Kranio-Sakral terapi eller booke en tid.</p>
				</div>

				<div class="text-center mt-5">
					<a href="priser-booking.html" class="btn btn-primary rounded-pill py-2 px-4">Book tid<i class="fa fa-arrow-right ms-3"></i></a>
				</div>

			</div>
		</div>
	</div>
	<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"><div class="container py-5"><div class="row g-5"><div class="col-lg-3 col-md-6"><h5 class="text-light mb-4">Klinik</h5><p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ole Nielsens Vej 7, Gundsømagle, 4000 Roskilde</p><p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+4522901025">22 90 10 25</a></p></div><div class="col-lg-3 col-md-6"><h5 class="text-light mb-4">Sider</h5><a class="btn btn-link" href="index.html">Forside</a><a class="btn btn-link" href="kranio-sakral-terapi.html">Kranio Sakral Terapi</a><a class="btn btn-link" href="priser-booking.html">Priser & Booking</a><a class="btn btn-link" href="om-mig.html">Om mig</a></div><div class="col-lg-3 col-md-6 order-4 order-md-3"><h5 class="text-light mb-4">Juridisk</h5><a class="btn btn-link" href="privatlivspolitik.html">Privatlivspolitik</a><a class="btn btn-link" href="cookiepolitik.html">Cookiepolitik</a></div><div class="col-lg-3 col-md-6 order-3 order-md-4"><h5 class="text-light mb-4">Sociale medier</h5><a class="social-link" href="#" aria-label="Facebook"><img src="billeder/facebook-logo.png" alt="Facebook" class="social-logo"><span>Facebook</span></a><a class="social-link" href="#" aria-label="Instagram"><img src="billeder/instagram-logo.png" alt="Instagram" class="social-logo"><span>Instagram</span></a></div></div></div></div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script><script src="bootstrap/klinik-1.0.0/lib/wow/wow.min.js"></script><script src="bootstrap/klinik-1.0.0/lib/easing/easing.min.js"></script><script src="bootstrap/klinik-1.0.0/js/main.js"></script>
	<script src="assets/js/cookie-consent.js"></script>
	<script src="assets/js/content-loader.js" data-page="om-mig"></script>
</body>
</html>
