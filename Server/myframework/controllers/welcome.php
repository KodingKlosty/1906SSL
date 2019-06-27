<?php

class welcome extends AppController{

    public function __construct(){



    }

    public function index(){

        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact",
            "API"
        );

        $this->getView("header");
        $this->getView("welcome",$menu);
        $this->getView("footer");
    }

    public function contact(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $random = substr( md5(rand()), 0, 7);
        $this->getView("contact",array("cap"=>$random));
        $this->getView("footer");
    }

    public function about(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $this->getView("apiView");
        $this->getView("footer");
    }

    public function furbabies(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $this->getView("furbabies",$menu);
        $this->getView("footer");
    }

    public function contactSubmit(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );
        $this->getView("header");
        if($_SESSION["data"] == $_POST["captcha"]){

            if(!filter_var($_POST["usersEmail"],FILTER_VALIDATE_EMAIL)){
           
           echo "Email invalid";
           
           echo "<br><a href='/welcome/contact'>Click here to go back</a>";
           
            }else{
           
           echo "Email valid";
           
           }
           
           }else{
           
            echo "Invalid captcha";
           
           echo "<br><a href='/welcome/contact'>Click here to go back</a>";
           
           }
        
        
    }

    public function signInReq(){
        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );
        $this->getView("header");
        $this->getView("signon",$menu);

    }

    public function ajaxParms(){
        if(@$_REQUEST["inputEmail"]=="tester@test.com"){
            echo"Welcome";
        }
        else{
            echo"Bad login";
        }
    }

}