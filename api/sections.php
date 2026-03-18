<?php
/**
 * Indholdssektion-definitioner pr. side.
 * Bruges af admin-panelet til at vise redigerbare felter.
 */
function getSectionDefinitions() {
    return [
        'index' => [
            'label' => 'Forside',
            'sections' => [
                ['key' => 'hero_title',       'label' => 'Hero: overskrift',                    'type' => 'text'],
                ['key' => 'hero_description', 'label' => 'Hero: undertekst',                    'type' => 'textarea'],
                ['key' => 'welcome_text',     'label' => 'Velkomsttekst',                       'type' => 'text'],
                ['key' => 'main_heading',     'label' => 'Hovedoverskrift',                     'type' => 'text'],
                ['key' => 'main_text',        'label' => 'Hovedtekst (tom linje = nyt afsnit)', 'type' => 'textarea'],
                ['key' => 'therapy_heading',  'label' => 'Overskrift: Hvad er KST?',            'type' => 'text'],
                ['key' => 'therapy_text',     'label' => 'Tekst: Hvad er KST?',                 'type' => 'textarea'],
                ['key' => 'approach_heading', 'label' => 'Overskrift: Tilgang',                  'type' => 'text'],
                ['key' => 'approach_text',    'label' => 'Tekst: Tilgang',                       'type' => 'textarea'],
                ['key' => 'help_title',       'label' => 'Overskrift: Områder',                  'type' => 'text'],
            ],
        ],
        'kranio-sakral-terapi' => [
            'label' => 'Kranio Sakral Terapi',
            'sections' => [
                ['key' => 'hero_title',         'label' => 'Hero: overskrift',        'type' => 'text'],
                ['key' => 'hero_description',   'label' => 'Hero: undertekst',        'type' => 'textarea'],
                ['key' => 'intro_heading',      'label' => 'Intro-overskrift',        'type' => 'text'],
                ['key' => 'intro_text',         'label' => 'Intro-tekst',             'type' => 'textarea'],
                ['key' => 'disclaimer_heading', 'label' => 'Afgrænsning: overskrift', 'type' => 'text'],
                ['key' => 'disclaimer_text',    'label' => 'Afgrænsning: tekst',      'type' => 'textarea'],
            ],
        ],
        'priser-booking' => [
            'label' => 'Priser & Booking',
            'sections' => [
                ['key' => 'bookTitle',       'label' => 'Overskrift: Book en tid',   'type' => 'text'],
                ['key' => 'bookIntro',       'label' => 'Book: intro-tekst',         'type' => 'textarea'],
                ['key' => 'phone',           'label' => 'Telefonnummer',             'type' => 'text'],
                ['key' => 'email',           'label' => 'E-mail',                    'type' => 'text'],
                ['key' => 'beforeFirst',     'label' => 'Inden første behandling',   'type' => 'textarea'],
                ['key' => 'consultation',    'label' => 'Samtale-tekst',             'type' => 'textarea'],
                ['key' => 'response',        'label' => 'Svartid-tekst',             'type' => 'textarea'],
                ['key' => 'pricesTitle',     'label' => 'Overskrift: Priser',        'type' => 'text'],
                ['key' => 'pricesIntro',     'label' => 'Priser: intro',             'type' => 'textarea'],
                ['key' => 'priceSingleLabel','label' => 'Pris: enkelt label',        'type' => 'text'],
                ['key' => 'priceSingleValue','label' => 'Pris: enkelt værdi',        'type' => 'text'],
                ['key' => 'priceClipLabel',  'label' => 'Pris: klippekort label',    'type' => 'text'],
                ['key' => 'priceClipValue',  'label' => 'Pris: klippekort værdi',    'type' => 'text'],
                ['key' => 'priceNote',       'label' => 'Pris: note',               'type' => 'textarea'],
                ['key' => 'paymentTitle',    'label' => 'Betaling: overskrift',      'type' => 'text'],
                ['key' => 'paymentText',     'label' => 'Betaling: tekst',           'type' => 'textarea'],
                ['key' => 'cancelTitle',     'label' => 'Afbud: overskrift',         'type' => 'text'],
                ['key' => 'cancelLine1',     'label' => 'Afbud: linje 1',           'type' => 'textarea'],
                ['key' => 'cancelLine2',     'label' => 'Afbud: linje 2',           'type' => 'textarea'],
                ['key' => 'practicalTitle',  'label' => 'Praktisk: overskrift',      'type' => 'text'],
                ['key' => 'addressTitle',    'label' => 'Adresse: overskrift',       'type' => 'text'],
                ['key' => 'addressLine1',    'label' => 'Adresse: linje 1',         'type' => 'text'],
                ['key' => 'addressLine2',    'label' => 'Adresse: linje 2',         'type' => 'text'],
                ['key' => 'practicalText',   'label' => 'Praktisk info: tekst',      'type' => 'textarea'],
                ['key' => 'faqTitle',        'label' => 'FAQ: overskrift',           'type' => 'text'],
                ['key' => 'faq1Question',    'label' => 'FAQ 1: spørgsmål',         'type' => 'text'],
                ['key' => 'faq1Answer',      'label' => 'FAQ 1: svar',              'type' => 'textarea'],
                ['key' => 'faq2Question',    'label' => 'FAQ 2: spørgsmål',         'type' => 'text'],
                ['key' => 'faq2Answer',      'label' => 'FAQ 2: svar',              'type' => 'textarea'],
                ['key' => 'faq3Question',    'label' => 'FAQ 3: spørgsmål',         'type' => 'text'],
                ['key' => 'faq3Answer',      'label' => 'FAQ 3: svar',              'type' => 'textarea'],
                ['key' => 'ctaTitle',        'label' => 'CTA: overskrift',           'type' => 'text'],
                ['key' => 'ctaIntro',        'label' => 'CTA: intro',               'type' => 'textarea'],
                ['key' => 'ctaOutro',        'label' => 'CTA: sluttekst',           'type' => 'textarea'],
                ['key' => 'signoff',         'label' => 'Underskrift',               'type' => 'text'],
                ['key' => 'name',            'label' => 'Navn',                      'type' => 'text'],
            ],
        ],
        'om-mig' => [
            'label' => 'Om mig',
            'sections' => [
                ['key' => 'hero_title',       'label' => 'Hero: overskrift',             'type' => 'text'],
                ['key' => 'hero_description', 'label' => 'Hero: undertekst',             'type' => 'textarea'],
                ['key' => 'main_heading',     'label' => 'Hovedoverskrift',              'type' => 'text'],
                ['key' => 'bio_text',         'label' => 'Biografi-tekst',               'type' => 'textarea'],
                ['key' => 'background_title', 'label' => 'Overskrift: Faglig baggrund',  'type' => 'text'],
                ['key' => 'background_text',  'label' => 'Tekst: Faglig baggrund',       'type' => 'textarea'],
                ['key' => 'treatments_title', 'label' => 'Overskrift: Mine behandlinger','type' => 'text'],
                ['key' => 'treatments_text',  'label' => 'Tekst: Mine behandlinger',     'type' => 'textarea'],
                ['key' => 'clinic_title',     'label' => 'Overskrift: Klinikken',        'type' => 'text'],
                ['key' => 'clinic_text',      'label' => 'Tekst: Klinikken',             'type' => 'textarea'],
            ],
        ],
    ];
}

// Returnér JSON hvis kaldt direkte
if (basename($_SERVER['SCRIPT_FILENAME']) === 'sections.php') {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        http_response_code(401);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['error' => 'Ikke logget ind']);
        exit;
    }
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(getSectionDefinitions());
}
