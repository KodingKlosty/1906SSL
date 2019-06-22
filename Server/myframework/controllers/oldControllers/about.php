<?php

class about extends AppController{

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
        $this->getView("about", $menu);
        $this->getView("footer");
    }

    

}


?>