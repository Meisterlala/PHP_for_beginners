<?php
namespace Core;

class Router
{
    private $routes = [];
    const BASE_URI = '/notes';

    public function route($uri, $method)
    {
          foreach ($this->routes as $route) {
            if (
                Router::BASE_URI . $route['uri'] === $uri &&
                $route['method'] === strtoupper($method)
            ) {
                return require $route['controller'];
            }
        }
        Router::abort(Response::NOT_FOUND);
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }

    private function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
        ];
    }

    static function abort(int $statusCode = Response::NOT_FOUND): void
    {
        http_response_code($statusCode);
        die();
    }

}