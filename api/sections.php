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
            'seo' => [
                ['key' => 'seo_title',       'label' => 'Sidetitel til Google (maks 60 tegn)',        'type' => 'text',     'max' => 60],
                ['key' => 'seo_description', 'label' => 'Meta-beskrivelse til Google (maks 155 tegn)', 'type' => 'textarea', 'max' => 155],
                ['key' => 'og_image',        'label' => 'Delingsbillede til Facebook og Instagram',    'type' => 'image'],
            ],
        ],
        'kranio-sakral-terapi' => [
            'label' => 'Kranio Sakral Terapi',
            'sections' => [
                ['key' => 'hero_title',         'label' => 'Hero: overskrift',        'type' => 'text'],
                ['key' => 'hero_description',   'label' => 'Hero: undertekst',        'type' => 'textarea'],
                ['key' => 'intro_heading',      'label' => 'Intro-overskrift',        'type' => 'text'],
                ['key' => 'intro_text',         'label' => 'Intro-tekst',             'type' => 'textarea'],
                ['key' => 'symptoms_title',              'label' => 'Kategori: Spændinger & smerter',    'type' => 'text'],
                ['key' => 'hovedpine_title',             'label' => 'Underpunkt: Hovedpine (overskrift)', 'type' => 'text'],
                ['key' => 'hovedpine_text',              'label' => 'Underpunkt: Hovedpine (tekst)',      'type' => 'textarea'],
                ['key' => 'nakke_skuldersmerter_title',  'label' => 'Underpunkt: Nakke/skulder (overskrift)', 'type' => 'text'],
                ['key' => 'nakke_skuldersmerter_text',   'label' => 'Underpunkt: Nakke/skulder (tekst)',      'type' => 'textarea'],
                ['key' => 'ryg_hoftesmerter_title',      'label' => 'Underpunkt: Ryg/hofter (overskrift)',    'type' => 'text'],
                ['key' => 'ryg_hoftesmerter_text',       'label' => 'Underpunkt: Ryg/hofter (tekst)',         'type' => 'textarea'],
                ['key' => 'kaebespaendinger_title',      'label' => 'Underpunkt: Kæbespændinger (overskrift)', 'type' => 'text'],
                ['key' => 'kaebespaendinger_text',       'label' => 'Underpunkt: Kæbespændinger (tekst)',      'type' => 'textarea'],
                ['key' => 'nervous_title',               'label' => 'Kategori: Nervesystem & regulering',      'type' => 'text'],
                ['key' => 'stress_title',                'label' => 'Underpunkt: Stress (overskrift)',         'type' => 'text'],
                ['key' => 'stress_text',                 'label' => 'Underpunkt: Stress (tekst)',              'type' => 'textarea'],
                ['key' => 'angst_depression_title',      'label' => 'Underpunkt: Angst/depression (overskrift)', 'type' => 'text'],
                ['key' => 'angst_depression_text',       'label' => 'Underpunkt: Angst/depression (tekst)',      'type' => 'textarea'],
                ['key' => 'svimmelhed_title',            'label' => 'Underpunkt: Svimmelhed (overskrift)',     'type' => 'text'],
                ['key' => 'svimmelhed_text',             'label' => 'Underpunkt: Svimmelhed (tekst)',          'type' => 'textarea'],
                ['key' => 'tinnitus_title',              'label' => 'Underpunkt: Tinnitus (overskrift)',       'type' => 'text'],
                ['key' => 'tinnitus_text',               'label' => 'Underpunkt: Tinnitus (tekst)',            'type' => 'textarea'],
                ['key' => 'trauma_title',                'label' => 'Kategori: Efter traume',                  'type' => 'text'],
                ['key' => 'hjernerystelse_title',        'label' => 'Underpunkt: Hjernerystelse (overskrift)', 'type' => 'text'],
                ['key' => 'hjernerystelse_text',         'label' => 'Underpunkt: Hjernerystelse (tekst)',      'type' => 'textarea'],
                ['key' => 'piskesmaeld_title',           'label' => 'Underpunkt: Piskesmæld (overskrift)',     'type' => 'text'],
                ['key' => 'piskesmaeld_text',            'label' => 'Underpunkt: Piskesmæld (tekst)',          'type' => 'textarea'],
                ['key' => 'migraene_title',              'label' => 'Underpunkt: Migræne (overskrift)',        'type' => 'text'],
                ['key' => 'migraene_text',               'label' => 'Underpunkt: Migræne (tekst)',             'type' => 'textarea'],
                ['key' => 'supplementary_text',          'label' => 'Supplerende behandlinger (tekst)',        'type' => 'textarea'],
                ['key' => 'disclaimer_heading', 'label' => 'Afgrænsning: overskrift', 'type' => 'text'],
                ['key' => 'disclaimer_text',    'label' => 'Afgrænsning: tekst',      'type' => 'textarea'],
            ],
            'seo' => [
                ['key' => 'seo_title',       'label' => 'Sidetitel til Google (maks 60 tegn)',        'type' => 'text',     'max' => 60],
                ['key' => 'seo_description', 'label' => 'Meta-beskrivelse til Google (maks 155 tegn)', 'type' => 'textarea', 'max' => 155],
                ['key' => 'og_image',        'label' => 'Delingsbillede til Facebook og Instagram',    'type' => 'image'],
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
            'seo' => [
                ['key' => 'seo_title',       'label' => 'Sidetitel til Google (maks 60 tegn)',        'type' => 'text',     'max' => 60],
                ['key' => 'seo_description', 'label' => 'Meta-beskrivelse til Google (maks 155 tegn)', 'type' => 'textarea', 'max' => 155],
                ['key' => 'og_image',        'label' => 'Delingsbillede til Facebook og Instagram',    'type' => 'image'],
            ],
        ],
        'om-mig' => [
            'label' => 'Om mig',
            'sections' => [
                ['key' => 'hero_title',       'label' => 'Hero: overskrift',             'type' => 'text'],
                ['key' => 'hero_description', 'label' => 'Hero: undertekst',             'type' => 'textarea'],
                ['key' => 'about_label',      'label' => 'Lille intro-linje',            'type' => 'text'],
                ['key' => 'main_heading',     'label' => 'Hovedoverskrift',              'type' => 'text'],
                ['key' => 'bio_text',         'label' => 'Biografi-tekst',               'type' => 'textarea'],
                ['key' => 'background_title', 'label' => 'Overskrift: Faglig baggrund',  'type' => 'text'],
                ['key' => 'background_text',  'label' => 'Tekst: Faglig baggrund',       'type' => 'textarea'],
                ['key' => 'treatments_title', 'label' => 'Overskrift: Mine behandlinger','type' => 'text'],
                ['key' => 'treatments_text',  'label' => 'Tekst: Mine behandlinger',     'type' => 'textarea'],
                ['key' => 'clinic_title',     'label' => 'Overskrift: Klinikken',        'type' => 'text'],
                ['key' => 'clinic_text',      'label' => 'Tekst: Klinikken',             'type' => 'textarea'],
            ],
            'seo' => [
                ['key' => 'seo_title',       'label' => 'Sidetitel til Google (maks 60 tegn)',        'type' => 'text',     'max' => 60],
                ['key' => 'seo_description', 'label' => 'Meta-beskrivelse til Google (maks 155 tegn)', 'type' => 'textarea', 'max' => 155],
                ['key' => 'og_image',        'label' => 'Delingsbillede til Facebook og Instagram',    'type' => 'image'],
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
