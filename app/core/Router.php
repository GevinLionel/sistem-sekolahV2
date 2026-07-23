<?php
namespace App\Core;

use App\controllers\StudedentController;



class Router
{
    private array $routes = [];

    public function add(string $method, string $path, string $controller, string $function)
    {
        $this->routes[] = [
            'method'     => $method,
            'path'       => $path,
            'controller' => $controller,
            'function'   => $function
        ];
    }

    private function buildPattern(string $path)
    {
        $pattern = str_replace(
            '{id}',
            '([0-9]+)',
            $path,
        );
        return '#^' . $pattern . '$#';
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST' && isset($_POST['_method'])) {
    $method = strtoupper($_POST['_method']);
}
    
    r

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            $pattern = $this->buildPattern($route['path']);

            if (preg_match($pattern, $uri, $matches) && $method === $route['method']) {
                array_shift($matches);

                require_once './app/controllers/' . $route['controller'] . '.php';
                $function = $route['function'];

                $controllerClass = 'App\\Controllers\\' . $route['controller'];
                $controller = new $controllerClass();

                call_user_func_array([$controller, $function], $matches);

                return;
            }
        }
    }
}

class Router
{
    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if ($method == 'GET' && $uri == '/students') {
        require_once '../app/controllers/StudentController.php';
        $controller = new StudentController();
        $controller->index();
return;
}

if ($method == 'GET' && $uri == '/students/create') {
require_once '../app/controllers/StudentController.php';
$controller = new StudentController();
$controller->create();
return;
}
http_response_code(404);
echo "Not Found Page";
}
}



?>