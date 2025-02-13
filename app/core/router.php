<?php
namespace app\core;
require_once('../vendor/autoload.php');
require_once('../app/controllers/FreelancerController.php');
use app\controllers\FreelancerController;







class Router{
    private $controller;
    private $method;
    private $param = [];
    public function __construct()
    {
       
      
        $url = $this->getUrl();
      
        // [user,edit,2]
        if (isset($url[0])) {
            // var_dump($url[0]);
            // die();
            $controllerClass = ucwords($url[0]);
            // echo $controllerClass;
            $fullcontroller = $controllerClass . 'Controller';
            $pathControllerClass ="app\\controllers\\" . $controllerClass . "Controller";
            //$url[0]='User'; uppercase first element
            // var_dump($controllerClass);

            if(class_exists($pathControllerClass)) {
        $this->controller = $fullcontroller;
        $this->controller = new $fullcontroller();
        echo "jdsu";
        var_dump($this->controller);
            }

            // $controllerClass = '.././app/controllers/AuthController.php'; //UserController
            // $this->controller = new $controllerClass;
            // $user = new UserController;
            if (isset($url[1])){                          // [user,edit,2] 

                //  $url[1]='edit'; methode

                if(method_exists($pathControllerClass,$url[1])){
                    $this->method = $url[1];
                    $method = $this->method;
                }
            }
           
      
        }
        $instancecontroller = new $this->controller();
        $instancecontroller->$method();

      
    }

    private function convertArray($array)
    {
        foreach ($array as $value) {
            array_push($this->param, $value);
        }
    }
    public function GetUrl()
    {
        if(empty($_SERVER['REQUEST_URI']))
        {
            $request = "";
        }
        else
        {
        $request = $_SERVER['REQUEST_URI'];
        $uri = explode('/',trim($request,'/'));
        // var_dump($uri);
        return $uri;
    }
}
}



?>