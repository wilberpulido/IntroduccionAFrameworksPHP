<?php
//clase 7
namespace App\Http;

class Response
{
    protected $view;
    public function __construct($view)
    {
        $this->view = $view;
    }
    public function getView()
    {
        return $this->view;
    }
    public function send()
    {
        $view = $this->getView();
        //home 
        $content = file_get_contents(viewPath($view));
        require viewPath("layout");
    }

    //fin clase 7
    //Cambios con la clase 10 con el helper
}