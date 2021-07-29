<?php
//Clase 10
// el helper es un ayudante, para utilizar principalmente
// en las vistas y controladores, se usa mucho en framework.
if(!function_exists('view'))
{
    function view($view)
    {
        return new App\Http\Response($view);
    }
}
if(!function_exists('viewPath'))
{
    function viewPath($view)
    {
        return __DIR__."/../views/$view.php";
    }
}

//Los helpers nos ayudan a aislar el código repetitivo,
// convertirlo en una función sencilla que podemos usar en vistas y controladores.