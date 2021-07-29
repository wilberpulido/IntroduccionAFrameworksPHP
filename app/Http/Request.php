<?php
//Clase para manejar las peticiones, en el constructor se llena el controlador y el metodo a esar.
//Clase 6.
namespace App\Http;

class Request{
    protected $segments = [];
    protected $controller;
    protected $method;
    
    public function __construct()
    {
        //platzi.test/servicios/index
        $this->segments = explode('/',$_SERVER['REQUEST_URI']);
        // $_SERVER['REQUEST_URI'] retorna el string luego de la dirección base.
        // Al usar explode lo convertimos en un array separando cada seccion por '/'
        $this-> setController();
        $this->setMethod();
        // var_dump(explode('/',$_SERVER['REQUEST_URI']));
    }
    public function setController()
    {
        $this-> controller = empty($this-> segments[1])
            ? 'home'
            : $this->segments[1];
    }
    public function setMethod()
    {
        $this-> method = empty($this-> segments[2])
            ? 'index'
            : $this->segments[2];
    }
    public function getController()
    {
        $controller = ucfirst($this->controller);
        //ucfirst coloca la primera letra en mayuscula, eje home-> Home
        return "App\Http\Controllers\\{$controller}Controller";
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function send(){
        $controller = $this-> getController();
        $method = $this-> getMethod();

        $response = call_user_func([
            new $controller,
            $method
            ]);
            //call_user_func(array(__NAMESPACE__ .'\Foo', 'prueba')); // A partir de PHP 5.3.0, donde FOO es una clase y prueba es un método.
            //call_user_func(array($nombreclase, 'saludar')); Class $nombreclase y method saludar
        
            try {
                if ($response instanceof Response) {
                    $response->send();
                }else{
                    throw new \Exception("Error Processing Request");
                }
            } catch (\Exception $e) {
                echo "Details {$e->getMessage()}";
            }

        $response-> send();
    }

    //De esta manera configuramos el sistema para que se ejecute el metodo elegido de la clase
    //Según se escriba despues del / en la barra de navegación. /class/method ver como se setean los valores
}