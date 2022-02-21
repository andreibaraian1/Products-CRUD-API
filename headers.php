<?php
$website = "http://localhost:3000";
header('Access-Control-Allow-Origin:' . $website);
header("Access-Control-Allow-Headers:" . $website);
header('Access-Control-Allow-Methods: GET, POST,DELETE,OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin:' . $website);
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
    header('Cache-Control: public, max-age=86400');
    header('Vary: origin');
    exit(0);
}
