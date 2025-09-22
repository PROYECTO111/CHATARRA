<?php

namespace Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, callable $action): void
    {
        $this->addRoute('GET', $uri, $action);
    }

    public function post(string $uri, callable $action): void
    {
        $this->addRoute('POST', $uri, $action);
    }

    private function addRoute(string $method, string $uri, callable $action): void
    {
        $this->routes[$method][$this->normalize($uri)] = $action;
    }

    public function dispatch(string $method, string $uri): void
    {
        $uri = $this->normalize(parse_url($uri, PHP_URL_PATH) ?? '/');

        $action = $this->routes[$method][$uri] ?? null;

        if (!$action) {
            http_response_code(404);
            echo 'Página no encontrada';
            return;
        }

        call_user_func($action);
    }

    private function normalize(string $uri): string
    {
        $uri = '/' . trim($uri, '/');
        return $uri === '//' ? '/' : $uri;
    }
}
