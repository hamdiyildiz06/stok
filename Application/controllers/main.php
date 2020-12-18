<?php


class main extends controller
{
    public function index(){
        $this->render("index", ["adi" => "hamdi","soyadi"=>"yıldız" ]);
    }
}