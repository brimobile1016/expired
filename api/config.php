<?php
// Atur zona waktu WIB
date_default_timezone_set('Asia/Jakarta');

// Daftar domain dan waktu expired-nya
$configs = [
    'websaipul.com' => '2025-07-31 22:00:00',
    'saipulanuar.zone.id' => '2025-07-30 22:50:00',
];

// Ambil domain dari query string
$domain = $_GET['domain'] ?? null;

if (!$domain || !isset($configs[$domain])) {
    http_response_code(404);
    echo json_encode(['status' => false, 'message' => 'Domain tidak ditemukan']);
    exit;
}

// Berhasil ditemukan
echo json_encode([
    'status' => true,
    'expired_datetime' => $configs[$domain]
]);
?>
