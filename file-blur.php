<?php
$path = $_GET['path'] ?? null;
if (!$path) {
    goto fail;
}

$basename = basename($path);
$filename = __DIR__ . "/file-blur/{$basename}";
if (file_exists($filename)) {
    goto ok;
}

$origin = __DIR__ . "/file/{$basename}";
if (!file_exists($origin)) {
    $status_code   = 404;
    $reason_phrase = 'Not Found';
    goto fail;
}

$command = "convert -blur 15x15 '{$origin}' '{$filename}'";
exec($command);
if (!file_exists($filename)) {
    goto fail;
}

ok:
    $mime_content_type = mime_content_type($filename);
    $status_line = "Content-Type: {$mime_content_type}";
    header($status_line);
    echo file_get_contents($filename);
    exit ;

fail:
    $server_protocol = $_SERVER['SERVER_PROTOCOL'] ?? 'HTTP/1.0';
    $status_code     = $status_code                ?? 500;
    $reason_phrase   = $reason_phrase              ?? 'Internal Server Error';
    $pieces = [$server_protocol, $status_code, $reason_phrase];
    $status_line = implode(' ', $pieces);
    header($status_line);
    echo $reason_phrase, "\n";
    die ;

