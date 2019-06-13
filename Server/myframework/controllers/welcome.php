<?php

class welcome extends AppController{

    public function __construct(){



    }

    public function index(){

        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
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
        $this->getView("contact",$menu);
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
        $this->getView("about",$menu);
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
        $this->getView("contactSubmit", $menu);
        
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