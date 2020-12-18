<?php


class main extends controller
{
    public function index(){
        $this->render("uyeler/index", ["adi" => "hamdi","soyadi"=>"yıldız" ]);
    }
}