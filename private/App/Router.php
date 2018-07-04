<?php

//один контроллер-несколько методов
namespace Tatiana\Polyglot\App;

class Router
{
    static function run($controllers_namespace) {
        $controller = 'Index';
        $action = 'index';
        $get = null;
//frontcontroller/goods?id=pop
//frontcontroller/goods/smth/pop
        $routes = explode('/', $_SERVER['REQUEST_URI']);
       var_dump($routes);
        if(!empty($routes[1])) { //чтобы проигноривать поле пустое от слеша
            $controller = $routes[1]; // goods
        }
        if(!empty($routes[2])) {
            $action = $routes[2]; // index
        }
        if(!empty($routes[3])) {
            $get = $routes[3];
        }
        $controller =
           $controllers_namespace .//Tatiana\Polyglot\Controllers\\
           ucfirst(strtolower($controller)) . // как сюда вставить Form и пр вместо индекса?
           'Controller';
        // GoodsController
        $action = strtolower($action) . 'Action';
        //indexAction
        if (class_exists($controller)) {
            $controller = new $controller();
        } else {
            var_dump('Класса не существует');
        }
        if(method_exists($controller, $action)) {
            $controller->$action($get); //при вызове метода перед get,через /
        } else {
            var_dump('Метода не существует');
        }
    }
}
