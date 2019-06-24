<?php

class auth extends AppController{

    public function __construct($parent){
        $this->parent = $parent;
    }

    public function login(){        
        if($_POST["inputEmail"] && $_POST["inputPassword"])
        {
            var_dump(sha1($_POST["inputPassword"]));
            $data = $this->parent->getModel("users")->select(
                "select * from users where email = :email and password = :password",
                array(":email"=>$_POST["inputEmail"],":password"=>sha1($_POST["inputPassword"])));;
                if($data){
                    $_SESSION["loggedin"]="1";
                    header("Location:/profile");
                }
                else{
                    header("Location:/welcome/signInReq?msg=Incorrect Email or Password");  
                }
        }
        else
        {
            header("Location:/welcome/signInReq?msg=Bad Login");
        }
        

    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location:/welcome");
    }

}