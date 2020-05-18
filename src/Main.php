<?php


namespace Soen\Server;


use Soen\Http\Message\Request;
use Soen\Http\Message\Response;
use Soen\Http\Message\ServerRequest;
use Soen\Http\Message\Uri;
use Soen\Http\Server\Middleware\MiddlewareDispatcher;
use Soen\Router\RouteActive;
use Soen\Router\Router;

class Main
{
    public function run(){
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        $uri = new Uri($uri);
        $Request = new Request($method, $uri);
        $ServerRequest = new ServerRequest($Request->getMethod(), $uri, []);
        $Router = new Router();
        $RouterActive = new RouteActive($ServerRequest, $Router);
        $response = new Response(200);
        $MiddlewareDispatcher = new MiddlewareDispatcher($RouterActive->getMiddleware(), $ServerRequest, $response);
    }
}