<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cesar
 * Date: 02-Sep-18
 * Time: 1:48 PM
 */


require 'vendor/autoload.php';
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use \Slim\App;
$config = [
    'settings' => [
        'displayErrorDetails' => true
    ],
];
$app = new App($config);
require_once 'routes.php';

$app->run();