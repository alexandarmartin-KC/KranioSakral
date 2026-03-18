<?php
require_once __DIR__ . '/db.php';

session_start();
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['action']) && $input['action'] === 'logout') {
        $_SESSION = [];
        session_destroy();
        echo json_encode(['ok' => true]);
        exit;
    }

    $username = trim($input['username'] ?? '');
    $password = $input['password'] ?? '';

    if ($username === '' || $password === '') {
        http_response_code(400);
        echo json_encode(['error' => 'Brugernavn og adgangskode påkrævet']);
        exit;
    }

    $db = getDB();
    $stmt = $db->prepare('SELECT id, password_hash FROM admin_users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        session_regenerate_id(true);
        $_SESSION['user_id']  = $user['id'];
        $_SESSION['username'] = $username;
        echo json_encode(['ok' => true, 'username' => $username]);
    } else {
        http_response_code(401);
        echo json_encode(['error' => 'Forkert brugernavn eller adgangskode']);
    }
    exit;
}

if ($method === 'GET') {
    echo json_encode([
        'loggedIn' => isset($_SESSION['user_id']),
        'username' => $_SESSION['username'] ?? null,
    ]);
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
