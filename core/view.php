<?php


class view
{
    static function render($file, $params = []){
        if (file_exists(VIEWS_PATH."/".$file.".phP")){
            require_once VIEWS_PATH."/".$file.".php";
        }else{
            exit($file." Adında Görüntü Dosyası Bulunamadı");
        }
    }
}