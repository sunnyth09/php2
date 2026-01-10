<?php
class Router
{
    public function dispatch(string $uri): void
    {

        $path = parse_url($uri, PHP_URL_PATH) ?? '';
        $path = trim($path, '/');

        $basePath = $this->basePath();
        if ($basePath !== '' && str_starts_with($path, $basePath)) {
            $path = trim(substr($path, strlen($basePath)), '/');
        }

        $segments = $path === '' ? [] : explode('/', $path);
        $controllerName = ucfirst($segments[0] ?? 'home') . 'Controller';
        $action = $segments[1] ?? 'index';
        $params = array_slice($segments, 2);

        
    }

    public function basePath(): string
    {
        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        $dir = trim(dirname($scriptName), '/');
        return $dir;
    }

    public function notFound($message): void
    {
        http_response_code(404);
        /**
         * sau nay co the load theo view errors
         */
        echo "<h1 style='color: red'> 404 Not Found - ' . $message. </h1>";
    }
}
