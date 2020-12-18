<?php
class system
{
    protected $controller;
    protected $method;
    public function __construct()
    {
        $this->controller = "main";
        $this->method = "index";

    /* Aders Verilerini Alma */
        if (isset($_GET["act"])){
            $url = explode('/', filter_var(rtrim($_GET["act"],'/'),FILTER_SANITIZE_URL));
        }else{
            $url[0] = $this->controller;
            $url[1] = $this->method;
        }
    /* controller Bulma */
        if (file_exists(CONTROLLERS_PATH."/".$url[0].".php")){
            $this->controller = $url[0];
            array_shift($url);
        }

        require_once CONTROLLERS_PATH."/".$this->controller.".php";
        if (class_exists($this->controller)){
            $this->controller = new $this->controller;
        }else{
            exit($url[0]." Adında Controller bulunamadı");
        }

    /* Method Bulma */
        if (isset($url[0])){
            if (method_exists($this->controller, $url[0])){
                $this->method = $url[0];
                array_shift($url);
            }else{
                exit($url[0]." Adında Metod bulunamadı");
            }
        }


        call_user_func_array([$this->controller,$this->method], $url);
    }
}
