<?php
/**
 * api/upload.php  –  uploader et OG-billede til /uploads/og/
 * Kræver login. Accepterer: JPG · PNG · WebP · maks 5 MB.
 */

require_once __DIR__ . '/db.php';   // indlæser config.php og getDB()

header('Content-Type: application/json; charset=utf-8');

session_start();

/* ── Autentificering ── */
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Ikke logget ind']);
    exit;
}

/* ── Kun POST ── */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Kun POST tilladt']);
    exit;
}

/* ── Filvalidering ── */
$file = $_FILES['image'] ?? null;

if (!$file) {
    http_response_code(400);
    echo json_encode(['error' => 'Ingen fil modtaget']);
    exit;
}

if ($file['error'] !== UPLOAD_ERR_OK) {
    $errMsg = match ($file['error']) {
        UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE => 'Filen er for stor (server-grænse)',
        UPLOAD_ERR_NO_FILE                        => 'Ingen fil valgt',
        default                                   => 'Upload-fejl (kode ' . $file['error'] . ')',
    };
    http_response_code(400);
    echo json_encode(['error' => $errMsg]);
    exit;
}

// Maksimal filstørrelse: 5 MB
if ($file['size'] > 5 * 1024 * 1024) {
    http_response_code(400);
    echo json_encode(['error' => 'Filen må maksimalt være 5 MB']);
    exit;
}

// Kontroller MIME via filindhold (ignorerer filnavnets extension)
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime  = $finfo->file($file['tmp_name']);
$ext_map = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/webp' => 'webp',
];

if (!array_key_exists($mime, $ext_map)) {
    http_response_code(400);
    echo json_encode(['error' => 'Kun JPG, PNG og WebP er tilladt']);
    exit;
}

/* ── Valider sidenavn ── */
$page = $_POST['page'] ?? '';
if (!preg_match('/^[a-z0-9-]+$/', $page)) {
    http_response_code(400);
    echo json_encode(['error' => 'Ugyldigt sidenavn']);
    exit;
}

/* ── Opret upload-mappe ── */
$upload_dir = dirname(__DIR__) . '/uploads/og/';
if (!is_dir($upload_dir)) {
    if (!mkdir($upload_dir, 0755, true)) {
        http_response_code(500);
        echo json_encode(['error' => 'Kunne ikke oprette upload-mappe']);
        exit;
    }
}

/* ── Flyt filen ── */
$ext      = $ext_map[$mime];
$filename = $page . '-og.' . $ext;
$dest     = $upload_dir . $filename;

// Fjern eventuel tidligere version med anden extension
foreach (['jpg', 'png', 'webp'] as $old_ext) {
    $old = $upload_dir . $page . '-og.' . $old_ext;
    if ($old !== $dest && file_exists($old)) {
        @unlink($old);
    }
}

if (!move_uploaded_file($file['tmp_name'], $dest)) {
    http_response_code(500);
    echo json_encode(['error' => 'Kunne ikke gemme filen på serveren']);
    exit;
}

echo json_encode(['path' => '/uploads/og/' . $filename]);
