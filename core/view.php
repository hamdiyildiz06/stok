<?php


class view
{
    static function render($file, $params = []){
        if (file_exists(VIEWS_PATH."/".$file.".phP")){

        }else{
            exit($file." Adında Görüntü Dosyası Bulunamadı");
        }
    }
}