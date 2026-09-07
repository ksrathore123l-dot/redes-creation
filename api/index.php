<?php
// Determine the requested URI
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Normalize URI (remove /test prefix if present)
$requestUri = preg_replace('#^/test#', '', $requestUri);
$requestUri = '/' . ltrim($requestUri, '/');

$baseDir = realpath(__DIR__ . '/..');

if ($requestUri === '/' || $requestUri === '/index.php') {
    $targetFile = $baseDir . '/index.php';
} else {
    $checkPath = $baseDir . $requestUri;
    if (is_file($checkPath)) {
        $targetFile = realpath($checkPath);
    } elseif (is_file($checkPath . '.php')) {
        $targetFile = realpath($checkPath . '.php');
    } else {
        $targetFile = false;
    }
}

// Security check: verify within base directory
if ($targetFile && strpos($targetFile, $baseDir) === 0 && is_file($targetFile)) {
    chdir(dirname($targetFile));
    require $targetFile;
} else {
    http_response_code(404);
    echo "<h1>404 Not Found</h1><p>The requested page was not found.</p>";
}
