<?php

/**
 * Created by IntelliJ IDEA.
 * User: Cesar
 * Date: 02-Sep-18
 * Time: 2:57 PM
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Slim\Http\Response;
$app->map(['GET','POST'],'/testJson',function(Request $request,Response $response,$args){
    $data =
        [
            "name" => "Esteban"
        ];
    return $response
        ->withJson($data)
        ->withHeader('Access-Control-Allow-Origin', 'http://localhost:8080/jest-lessons/')
        ->withHeader('Access-Control-Allow-Headers', 'Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST');
});