<?php
require_once __DIR__ . '/db.php';

header('Content-Type: text/html; charset=utf-8');
echo '<!DOCTYPE html><html><head><title>Setup</title></head><body>';

try {
    $db = getDB();

    $db->exec("CREATE TABLE IF NOT EXISTS admin_users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $db->exec("CREATE TABLE IF NOT EXISTS site_content (
        id INT AUTO_INCREMENT PRIMARY KEY,
        page VARCHAR(50) NOT NULL,
        section_key VARCHAR(100) NOT NULL,
        content TEXT NOT NULL,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        UNIQUE KEY unique_page_section (page, section_key)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    echo '<p>Tabeller oprettet.</p>';

    $stmt = $db->query('SELECT COUNT(*) FROM admin_users');
    if ((int)$stmt->fetchColumn() === 0) {
        $hash = password_hash('dpdp2026', PASSWORD_DEFAULT);
        $ins  = $db->prepare('INSERT INTO admin_users (username, password_hash) VALUES (?, ?)');
        $ins->execute(['admin', $hash]);
        echo '<p>Admin-bruger oprettet: <strong>admin</strong> / <strong>dpdp2026</strong></p>';
        echo '<p style="color:red"><strong>Skift adgangskode efter første login!</strong></p>';
    } else {
        echo '<p>Admin-bruger eksisterer allerede.</p>';
    }

    echo '<p><a href="/dpdp.html">Gå til admin-panel &rarr;</a></p>';

} catch (PDOException $e) {
    echo '<p style="color:red">Database-fejl: ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p>Tjek at DB_NAME, DB_USER og DB_PASS er korrekte i <code>api/config.php</code></p>';
}

echo '</body></html>';
