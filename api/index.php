<?php
// Pintu masuk Vercel: seluruh request diteruskan ke front controller Laravel.

$_SERVER['HTTPS'] = 'on';

require __DIR__ . '/../public/index.php';