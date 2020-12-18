<?php


class main extends controller
{
    public function index(){
        $this->model("uye");
        $this->render("uyeler/index", ["adi" => "hamdi","soyadi"=>"yıldız" ]);
    }
}