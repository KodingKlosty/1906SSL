<?php

class auth extends AppController{

    public function __construct(){
            

    }

    public function login(){
        if($_REQUEST["email"]){
            if($_REQUEST["email"]=='tester@test.com'){
                $_SESSION["loggedin"]==1;
                header("Location:/welcome/profile");
            }   
            else{
                header("Location:/welcome?msg=Bad Login");
            }
        }
        else{
            header("Location:/welcome?msg=Bad Login");

        }

    }

}