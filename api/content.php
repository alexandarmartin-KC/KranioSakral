<?php
require_once __DIR__ . '/db.php';

header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];

/* ── GET: Hent indhold for en side (offentlig) ── */
if ($method === 'GET') {
    $page = $_GET['page'] ?? '';
    if ($page === '' || !preg_match('/^[a-z0-9-]+$/', $page)) {
        http_response_code(400);
        echo json_encode(['error' => 'Ugyldig side']);
        exit;
    }

    $db   = getDB();
    $stmt = $db->prepare('SELECT section_key, content FROM site_content WHERE page = ?');
    $stmt->execute([$page]);

    $content = [];
    foreach ($stmt->fetchAll() as $row) {
        $content[$row['section_key']] = $row['content'];
    }

    echo json_encode($content);
    exit;
}

/* ── POST: Gem indhold (kræver login) ── */
if ($method === 'POST') {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        http_response_code(401);
        echo json_encode(['error' => 'Ikke logget ind']);
        exit;
    }

    $input    = json_decode(file_get_contents('php://input'), true);
    $page     = $input['page'] ?? '';
    $sections = $input['sections'] ?? [];

    if ($page === '' || !preg_match('/^[a-z0-9-]+$/', $page) || !is_array($sections) || count($sections) === 0) {
        http_response_code(400);
        echo json_encode(['error' => 'Ugyldige data']);
        exit;
    }

    $db   = getDB();
    $stmt = $db->prepare(
        'INSERT INTO site_content (page, section_key, content)
         VALUES (?, ?, ?)
         ON DUPLICATE KEY UPDATE content = VALUES(content), updated_at = NOW()'
    );

    $db->beginTransaction();
    try {
        foreach ($sections as $key => $value) {
            if (!preg_match('/^[a-zA-Z0-9_-]+$/', $key)) continue;
            $stmt->execute([$page, $key, is_string($value) ? $value : '']);
        }
        $db->commit();
        echo json_encode(['ok' => true]);
    } catch (Exception $e) {
        $db->rollBack();
        http_response_code(500);
        echo json_encode(['error' => 'Fejl ved gemning']);
    }
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
