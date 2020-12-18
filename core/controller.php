<?php
class controller
{
    public function render($file, $param = []){
        return view::render($file, $param);
    }
}