<?php 
namespace App\Services;

class Route{
    private static $routes = [];
    private static $controllerNamespace = "App\Controllers\\";
    
    public static function add($uri, $controller, $action, $method='GET', $middleware=[]){
        self::$routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'action' => $action,
            'method' => $method,
            'middleware' => $middleware
        ];
    }
    
    public static function handle(){
        $requestURI = $_SERVER['REQUEST_URI'];
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        
        //echo $requestURI."==".$requestMethod;
        
        foreach(self::$routes as $route){
            //echo "<pre>";print_r(self::$routes);exit;
            if('/'.$route['uri'] ===  $requestURI && $route['method'] ==  $requestMethod){
                
                foreach($route['middleware'] as $middleware){
                    $middlewareClass =  new $middleware;
                    $middlewareClass->handle();
                }
                
                $controllerClass = self::$controllerNamespace.$route['controller'];
                $action = $route['action'];
                
                $controller = new $controllerClass();
                $controller->$action();
                return;
            }
        }
        echo '404 error: page not found';
    }
    
}