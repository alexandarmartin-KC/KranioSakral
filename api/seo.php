<?php
/**
 * SEO-hjælper: henter seo_title, seo_description og og_image fra databasen.
 * Falder tilbage til standardværdier hvis databasen er utilgængelig.
 *
 * Brug:
 *   require_once __DIR__ . '/api/seo.php';
 *   $_s = dpSEO('index', 'Standard titel', 'Standard beskrivelse', 'https://dpkranio.dk/');
 */

require_once __DIR__ . '/db.php';

/**
 * @param  string $page_key       DB-nøgle for siden, fx 'index', 'om-mig'
 * @param  string $default_title  Standardtitel hvis DB-feltet er tomt
 * @param  string $default_desc   Standardbeskrivelse hvis DB-feltet er tomt
 * @param  string $canonical      Kanonisk URL for siden
 * @return array{title:string, desc:string, og_image:string, og_image_url:string, url:string}
 */
function dpSEO(string $page_key, string $default_title, string $default_desc, string $canonical): array
{
    $seo = [
        'title'       => $default_title,
        'desc'        => $default_desc,
        'og_image'    => '',   // relativ sti, fx /uploads/og/index-og.jpg
        'url'         => $canonical,
    ];

    try {
        $db = getDB();
        $st = $db->prepare(
            "SELECT section_key, content
               FROM site_content
              WHERE page = ?
                AND section_key IN ('seo_title', 'seo_description', 'og_image')"
        );
        $st->execute([$page_key]);

        foreach ($st->fetchAll() as $row) {
            if (trim($row['content']) === '') continue;
            match ($row['section_key']) {
                'seo_title'       => ($seo['title']    = $row['content']),
                'seo_description' => ($seo['desc']     = $row['content']),
                'og_image'        => ($seo['og_image'] = $row['content']),
                default           => null,
            };
        }
    } catch (Exception $e) {
        /* Silently fall back to defaults */
    }

    // Byg absolut OG-billed-URL
    $seo['og_image_url'] = $seo['og_image'] !== ''
        ? 'https://dpkranio.dk' . $seo['og_image']
        : 'https://dpkranio.dk/assets/img/og-default.jpg';

    return $seo;
}
