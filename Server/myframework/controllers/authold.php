<?php

class auth extends AppController{

    public function __construct(){
            
        
    }

    public function login(){
        
        if($_POST["inputEmail"] && $_POST["inputPassword"])
        {
            $uName = $_POST["inputEmail"];
            $uPass = $_POST["inputPassword"];
            $uCheck = file('students.txt');
            $_SESSION["uMsg"] = "";
            $uLogin = false;
          
            foreach($uCheck as $user)
            {
              $uBreak = explode('|',$user);
              if($uBreak[0] == $uName && $uBreak[1] == $uPass)
              {
                $uLogin = true;
                $_SESSION["uMsg"] = $uBreak[2];
                break;

              }
            }

            if($uLogin)
            {
                $_SESSION["loggedin"] = "1";
                header("Location:/profile");
            }      
            else
            {
                header("Location:/welcome/signInReq?msg=Incorrect Email or Password");  
            }
        }
        else
        {
            header("Location:/welcome/signInReq?msg=Bad Login");
        }

    }

}