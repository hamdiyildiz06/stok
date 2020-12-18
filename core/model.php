<?php
class model
{
    public $db;
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=test","root","");
    }

}