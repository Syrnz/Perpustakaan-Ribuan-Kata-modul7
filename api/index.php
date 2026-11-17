<?php
// Pintu masuk Vercel: seluruh request diteruskan ke front controller Laravel.

$_SERVER['HTTPS'] = 'on';

// sehingga route /api/* tidak pernah cocok.
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

require __DIR__ . '/../public/index.php';