<?php
class uyeModel extends model
{
    public function control($email,$password){
        $query = $this->db->prepare("select * from uyeler where email = ? and password =?");
        $query->execute(array($email,$password));
        return $query->rowCount();
    }
}