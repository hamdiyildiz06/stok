<?php
class login extends controller
{
    public function index(){
        $this->render("login");
    }

    public function send(){
        if ($_POST){
            $email    = helper::cleaner($_POST['email']);
            $password = helper::cleaner($_POST['password']);

            if ($email != "" and $password != "" ){

                $control  = $this->model('uyeModel')->control($email,md5($password));

                if ($control == 0){
                    helper::flashData("statu","Böyle Bir Kullanıcı Yok");
                    helper::redirect(SITE_URL."/login");
                }else{
                    sessionManager::createSession(array("email" => $email, "password" => md5($password)));
                    helper::redirect(SITE_URL);
                }
            }else{
                helper::flashData("statu","Lütfen Tüm Alanları Doldurunuz");
                helper::redirect(SITE_URL."/login");
            }



        }else{
            exit("Hatalı Giriş");
        }
    }
}