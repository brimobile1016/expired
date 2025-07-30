<?php
$domain = $_GET['domain'] ?? 'Website Ini';
$expired = $_GET['expired'] ?? '-';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($domain) ?> Expired</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="expired">
    <div class="container">
        <h1>❌ <?= htmlspecialchars($domain) ?> Telah Expired</h1>
        <p>Waktu Expired: <?= htmlspecialchars($expired) ?> WIB</p>
        <p>Hubungi admin untuk memperpanjang masa aktif.</p>
    </div>
</body>
</html>
