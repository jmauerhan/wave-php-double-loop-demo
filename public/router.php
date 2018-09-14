<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

phpinfo();
die();

use Symfony\Component\HttpFoundation\Request AS SilexRequest;
use Symfony\Component\HttpFoundation\Response AS SilexResponse;

//Setup Silex App
$app               = new Silex\Application();
$app['debug']      = true;
$app['debug.mode'] = 'dev';

//PDO connection
$dbEngine = env('DB_ENGINE');
$dbHost   = env('DB_HOST');
$dbName   = env('DB_NAME');
$dbPort   = env('DB_PORT');
$dbUser   = env('DB_USER');
$dbPass   = env('DB_PASSWORD');

$dsn = "{$dbEngine}:dbname={$dbName};host={$dbHost};port={$dbPort}";
$pdo = new PDO($dsn, $dbUser, $dbPass);


/**
 * This section fixes pre-flight / CORS issues
 */
$app->options("{anything}",
    function () {
        return new \Symfony\Component\HttpFoundation\JsonResponse(null, 200);
    })->assert("anything", ".*");

$app->after(function (SilexRequest $request, SilexResponse $response) {
    $response->headers->set('Access-Control-Allow-Origin', '*');
    $response->headers->set('Access-Control-Allow-Methods', 'GET, POST');
    $response->headers->set('Access-Control-Allow-Headers', 'content-type');
});
/**
 * End CORS/Preflight fix
 */

$app->run();