<?php

class welcome extends AppController{

    public function __construct(){

        $menu = array(
            "Home",
            "FurBabies",
            "About",
            "Contact"
        );

        $this->getView("header");
        $this->getView("welcome", $menu);
        $this->getView("footer");

    }

}


?>