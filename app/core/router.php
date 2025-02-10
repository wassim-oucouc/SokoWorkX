<?php

class Router
{
    private $controller;
    private $method;
    private $param = [];
    public function __construct()
    {
        $url = $this->getUrl();
        // [user,edit,2]
        $url[0]='user';
        if (isset($url[0])) {
            $controllerClass = ucwords($url[0]);         //$url[0]='User'; uppercase first element



            if (class_exists('\\app\\controllers\\' . $controllerClass . 'Controller')) { //UserController if exist or not
                $this->controller = $controllerClass;
    
            }

            $controllerClass = '\\app\\controllers\\' . $this->controller . 'Controller'; //UserController
            $this->controller = new $controllerClass;
            // $user = new UserController;

            if (isset($url[1])) {                          // [user,edit,2] 

                //  $url[1]='edit'; methode

                if (method_exists($this->controller, $url[1])) { // accept  controller and methode
                    $this->method = $url[1];
                }
            }


            if (!empty($_REQUEST)) {
                // $_REQUEST return array assoc des param 
              // [id=>1]
               


                $this->convertArray($_REQUEST);
            } else {
                $this->param = [];
            }
        } else {
            $this->controller = new $this->controller;
        }

        call_user_func_array([$this->controller, $this->method], $this->param);
    }
    private function convertArray($array)
    {
        foreach ($array as $value) {
            array_push($this->param, $value);
        }
    }
    private function getBasePaths()
    {
        $path = $_SERVER['HTTP_REFERER'];
        header("Location: $path ");
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