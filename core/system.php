<?php
class system
{
    protected $controllerPath = "Application/controllers";
    protected $controller;
    protected $method;
    public function __construct()
    {
        $this->controller = "main";
        $this->method = "index";

        if (isset($_GET["act"])){
            $url = explode('/', filter_var(rtrim($_GET["act"],'/'),FILTER_SANITIZE_URL));
        }else{
            $url = "";
        }
    /* controller Bulma */
        if (file_exists($this->controllerPath."/".$url[0].".php")){
            $this->controller = $url[0];
        }

        require_once $this->controllerPath."/".$this->controller.".php";
        if (class_exists($this->controller)){
            $this->controller = new $this->controller;
        }else{
            echo "böyle bir class bulunamadı";
        }

    /* Method Bulma */
        if (isset($url[1])){
            if (method_exists($this->controller, $url[1])){
                $this->method = $url[1];
            }
        }
        echo $this->method;
    }
}
